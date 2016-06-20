@extends('app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                {{ $name->id }}.{{ $name->name }}
            </div>
        </div>
        <div class="row" style="margin-top: 20px;margin-bottom: 30px">
            <div class="col-sm-4">
                <img src="{{ $name->img }}" height="300px" width="500px;">
            </div>
        </div>
        <hr>
        @foreach($name->comment as $comments)  <!-- show comment and user name using hasmany relationship in model.php -->
            <div class="row" style="margin-bottom: 10px;">
                <div class="col-sm-12">
                    <span style="color:blue;font-size: 17px">{{$comments->user}}:</span>{{ $comments->comment }}
                </div>
            </div>
            @endforeach
        @if(Auth::user())
            <form class="form-horizontal" role="form" method="POST" action="{{ url('postComment') }}" style="margin-top: 50px;">
                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{ $name->id }}">
                <input type="hidden" name="v" value="{{ $name->name }}">
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea name="comment" rows="5" cols="100" placeholder="Post Your Comment Here"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-0">
                        <button type="submit" class="btn btn-primary">Post Comment</button>
                    </div>
                </div>
            </form>
            @endif
    </div>
    @endsection