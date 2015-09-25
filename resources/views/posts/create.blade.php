@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Posts / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('posts.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="title">TITLE</label>
                     <input type="text" name="title" class="form-control" value="{{ Input::old('title') }}"/>
                </div>
                    <div class="form-group">
                     <label for="body">BODY</label>
                     <textarea class="form-control" rows="3" name="body"/>{{ Input::old('body') }}</textarea>
                </div>
                    <div class="form-group">
                     <label for="user_id">USER_ID</label>
                     <input type="text" name="user_id" class="form-control" value=""/>
                </div>



            <a class="btn btn-default" href="{{ route('posts.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</button>
            </form>
        </div>
    </div>


@endsection
