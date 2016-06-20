<?php

namespace App\Http\Controllers;

use App\Hotels;
use Illuminate\Http\Request;

use App\Http\Requests;
class AdminController extends Controller
{
    /**
     * this function is used to authenticate the user in which user with id=1 and logged in user can create the hotel list in hotels table
     */

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create')->with('title','create hotels');
    }


    /**
     * Store a newly created hotel list in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $name=$request->hotel;
        $img=$request->img;
        Hotels::insert(
        [
                'name'=>$name,
                'img'=>$img
        ]
        );
        
        return redirect('admin');
    }
}
