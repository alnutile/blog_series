@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Posts</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('posts.index')}}" method="GET">
                <div class="form-group">
                    <input type="text" name="search" placeholder="Search" class="form-control" value="@if($search) {{ $search }} @endif">
                </div>
                <button class="btn btn-success">Search</button>
            </form>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>BODY</th>
                        <th>USER_ID</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->user_id}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('posts.show', $post->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('posts.edit', $post->id) }}">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>
            <hr>
            {!! $posts->render() !!}
            <hr>

            <a class="btn btn-success" href="{{ route('posts.create') }}">Create</a>
        </div>
    </div>


@endsection