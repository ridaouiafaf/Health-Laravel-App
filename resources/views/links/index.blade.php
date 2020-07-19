@extends('layouts.admin')

@section('content')

<div class="content">
    
    @can('link_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-danger" style="background-color: #B50A0C" href="{{route('admin.links.create')}}" >
                <i class="fa-fw fas fa-edit nav-icon text-white">
    
                </i>
                Add Link
            </a>
        </div>
    </div>    
    
    @endcan
    <ul style="padding: 20px" class="list-group">
        <li class="list-group-item col-md-12" style="background-color: #2F353A">
                <img class="rounded-circle border border-dark" style="float: right" src="{{asset('img/symboleLink.png')}}" alt="beneficial links" width="30%" height="30%">
                <p style="text-align: justify">
                    <h3 class="col-md-8 text-center" style="background-color:#B50A0C;font-family: fantasy; color:white">Useful Links</h3>
                    <h5 class="bg-white col-md-2 text-center" style="font-family: fantasy; color:#B50A0C">What for?</h5>
                    <p class="text-white">This page is made to help patients and everyone.</p>
                    <h5 class="bg-white col-md-2 text-center" style="font-family: fantasy; color:#B50A0C">How?</h5>
                    <p class="text-white">By providing useful links that is relative to healthcare problems, issues, or awarness topics. 
                        Furthermore, these links are originaly provided by The World Healthcare Organization or our Moroccan Healthcare Ministry.</p>
                </p>
        </li>
    </ul>
    <ul style="padding: 20px; display: inline-block;" class="list-group col-md-12">
        @forelse ($links as $link)
        <li class="list-group-item">
            <h3 class="text-center bg-dark" style="font-family: fantasy; color:white">{{$link->title}}</h3>
            <h5 style="font-family: fantasy; color:#B50A0C">What for?</h5>
            <p style="text-align: justify">{{$link->description}}</p>
            @can('link_delete')
            <form class="col-md-12" style="display: inline" method="POST" action="{{route('admin.links.destroy',['link'=>$link->id])}}">
                @csrf
                @method('DELETE')
                <button  class="btn btn-danger float-right" style="background-color: #B50A0C" type="submit">Delete</button>
            </form> 
            @endcan
            <a href="{{$link->url}}"><button class="btn btn-light">Go to the link</button></a>
            @can('link_edit')
            <a href="{{route('admin.links.edit',['link'=>$link->id])}}"><button class="btn btn-dark" type="button">Edit</button></a>
            @endcan
        </li>
        @empty
        <span class="badge badge-secondary"><h1>NO LINKS YET</h1></span>
        @endforelse

    </ul>
</div>

@endsection