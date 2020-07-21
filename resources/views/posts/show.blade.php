@extends('layouts.admin')

@section('title')
{{$post->title}}
@endsection

@section('content')
<h2 class="text-center" style="font-family: fantasy">{{$post->title}}</h2>

<div class="col-md-12">
    <img class="col-md-12" src="{{asset('posts-img/'.$image->imgName)}}">
    <p style="text-align:justify; " class="col-md-12">{{$post->body}}</p>
    
</div>
<div class="col-md-12" style="display: inline">
    <form class="col-md-12" method="POST" action="{{route('admin.posts.destroy',['post'=>$post->id])}}">
        @csrf
        @method('DELETE')
        @can('post_delete')
        <button style="background-color:rgba(255, 0, 0, 0.767) "class="btn btn-danger float-right col-md-2" type="submit">Delete</button>
        @endcan
        
    </form>
    @can('post_edit')
        <a href="{{route('admin.posts.edit',['post'=>$post->id])}}">
            <button style=" background-color:rgb(189, 134, 134); color:white" class="btn float-right col-md-2" type="button">Edit</button>
        </a>
    @endcan
</div>

@endsection