@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="row">

        <div style="display: inline" class="col-lg-4 float-left">
            <img src="{{asset('img/blLogo.png')}}" weight="400" height="300" alt="health icon">
        </div>

        <div style="display: inline" class="col-lg-6">
            <h1 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif" class="text-center">Edit Link</h1>

            <form method="POST" action="{{route('admin.links.update',['link'=>$link->id])}}">
                @csrf
                @method('PUT')
                
                <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-left">Title</label>
                    <div class="col-md-12">
                        <input class="form-control" name="title" id="title" type="text" value="{{old('title',$link->title ?? null)}}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-left">Description</label>
                    <div class="col-md-12">
                    <textarea class="form-control" name="description" id="description" type="text">{{old('description',$link->description ?? null)}}</textarea>
                    </div>
                
                </div> 
                
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label text-md-left">URL</label>
                    <div class="col-md-12">
                        <input class="form-control" name="url" id="url" type="text" value="{{old('url',$link->url ?? null)}}">
                    </div>
                </div>

                @if ($errors->any())
                
                
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>    
                    @endforeach
                    
                </ul>
                
                @endif
            
                <div class="col-md-12">
                    <button class="btn btn-danger float-right col-md-12" type="submit">Update</button>
                </div>
            </form>   
        </div>
    </div>
</div>
@endsection