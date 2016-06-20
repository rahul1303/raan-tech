<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Hotels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class homecontroller extends Controller
{
    /**
     * Display a listing of the hotels.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show=Hotels::get();
        return view('hotel.show',compact('show'))->with('title','List Hotel');
    }


    /**
     *this function is used to view the hotel details individually and comment by the loggedin user
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($hotel,$id)
    {
        $name=Hotels::where('id','LIKE',$id)->first();
        return view('hotel.view',compact('name'))->with('title',$hotel);
    }

    /**
     * comment is stored in the database posted by the logged in user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postComment(Request $request)
    {
        $id=$request->id;
        $hotel=$request->v;
        $comment=$request->comment;
        $user=Auth::user()->name;
        Comments::insert([
            'hotel_id'=>$id,
            'comment'=>$comment,
            'user'=>$user
        ]);
        return redirect($hotel.'/'.$id);
    }

}
