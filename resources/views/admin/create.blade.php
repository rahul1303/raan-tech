@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Hotel</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/create') }}">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Home Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="hotel" placeholder="Enter Hotel Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Image Link</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="img" placeholder="Provide live img link(For example:static.pexels.com/photos/2394/lights-clouds-dark-car.jpg)">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Create New Hotel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
