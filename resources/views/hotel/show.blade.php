@extends('app')

@section('content')

    <div class="container">
        <div class="row" style="margin-top: 20px;">
        @foreach($show as $hotel)
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{{ url('hotel/'.$hotel->id) }}" style="text-decoration:none">{{ $hotel->id }}.{{ $hotel->name }}</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{{ url('hotel/'.$hotel->id) }}" style="text-decoration:none"> <img src="{{ $hotel->img }}" width="200px" height="200px"></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @endsection