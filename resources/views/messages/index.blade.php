@extends('layouts.admin')

@section('title')
    Unread Messages
@endsection

@section('content')

<div class="content">
    
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-group"> 
                @forelse ($messages as $message)
                <div class="gallery">
                    <div class="mb-3 pics animation all">
                    <h3 class="bg-dark text-white">Subject: {{$message->subject}}</h3>
                    <div class="desc">
                        <p>
                            <p>
                                <b>Name: </b>{{$message->name}}
                            </p> 

                            <p>
                                <b>Email: </b>{{$message->email}}
                            </p> 
                        <p>
                            <b>Phone Number: </b>{{$message->phone}}
                        </p>
                            <p>
                                <b>Message: </b>
                                <p style="text-align: justify">{{$message->message}}</p>
                            </p>
                            
                        </p>

                        <form class="col-md-12" style="display: inline" method="POST" action="{{route('contact-Us.update',['contact_U'=>$message->id])}}">
                            @csrf
                            @method('PUT')
                            <button  class="btn btn-dark" type="submit">READ</button>
                        </form> 

                        <form class="col-md-12" style="display: inline" method="POST" action="{{route('contact-Us.destroy',['contact_U'=>$message->id])}}">
                            @csrf
                            @method('DELETE')
                            <button  class="btn btn-danger float-right" style="background-color: #B50A0C" type="submit">Delete</button>
                        </form> 

                    </div>
                  </div>
                </div>
                @empty
                <span class="badge badge-secondary"><h1>NO MESSAGES YET</h1></span>
                @endforelse
            </ul>
        </div>
    </div>
</div>

@endsection