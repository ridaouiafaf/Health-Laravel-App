@extends('layouts.admin')
@section('content')
<div class="content">
    @can('post_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-dark" href="{{route('admin.posts.create')}}" >
                <i class="fa-fw fas fa-edit nav-icon text-white">
    
                </i>
                Add Post
            </a>
        </div>
    </div>    
    
    @endcan
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-group"> 
                @forelse ($posts as $post)
                <div class="gallery">
                    <div class="mb-3 pics animation all">
                    <h3>{{$post->title}}</h3>
                      <img class="img-post" usemap="{{route('admin.posts.index')}}" src="{{asset('posts-img/'.$post->image->imgName)}}" width="600" height="400"> 
                    <div class="desc">
                        <p class="ArticleBody">{{ substr(strip_tags($post->body), 0, 500) }}
                            {{ strlen(strip_tags($post->body)) > 50 ? "..." : "" }} 
                        </p>
                        <a style="color: rgb(187, 22, 22);font-family: fantasy; font-size: medium" href="{{route('admin.posts.show',['post'=>$post->id])}}">Read More ...</a>
                    </div>
                  </div>
                </div>
                @empty
                <span class="badge badge-secondary"><h1>NO POSTS YET</h1></span>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection