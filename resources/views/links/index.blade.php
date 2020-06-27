@extends('layouts.admin')

@section('content')

<div class="content">

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
    <ul style="padding: 20px; display: inline-block;" class="list-group">
         <li class="list-group-item col-md-6 bg-white float-left">
            <h3 class="text-center" style="background-color:#B50A0C;font-family: fantasy; color:white">Useful Links</h3>
            <h5 style="font-family: fantasy; color:rgb(15, 80, 15)">What for?</h5>
            <p>By providing useful links that is relative to healthcare problems, issues, or awarness topics. 
            Furthermore, these links are originaly provided by The World Healthcare Organization or our Moroccan Healthcare Ministry.
        </p>
        </li>
        <li class="list-group-item col-md-6 bg-white float-right">
            <h3 class="text-center" style="background-color:#B50A0C;font-family: fantasy; color:white">Useful Links</h3>
            <h5 style="font-family: fantasy; color:rgb(15, 80, 15)">What for?</h5>
            <p>By providing useful links that is relative to healthcare problems, issues, or awarness topics. 
            Furthermore, these links are originaly provided by The World Healthcare Organization or our Moroccan Healthcare Ministry.By providing useful links that is relative to healthcare problems, issues, or awarness topics. 
            Furthermore,By providing useful links that is relative to healthcare problems, issues, or awarness topics. 
            Furthermore,
        </p>
        </li>
        <li class="list-group-item col-md-6 bg-white float-left">
            <h3 class="text-center" style="background-color:#B50A0C;font-family: fantasy; color:white">Useful Links</h3>
            <h5 style="font-family: fantasy; color:rgb(15, 80, 15)">What for?</h5>
            <p>By providing useful links that is relative to healthcare problems, issues, or awarness topics. 
            Furthermore, these links are originaly provided by The World Healthcare Organization or our Moroccan Healthcare Ministry.
        </p>
        </li>
        <li class="list-group-item col-md-6 bg-white float-left">
            <h3 class="text-center" style="background-color:#B50A0C;font-family: fantasy; color:white">Useful Links</h3>
            <h5 style="font-family: fantasy; color:rgb(15, 80, 15)">What for?</h5>
            <p>By providing useful links that is relative to healthcare problems, issues, or awarness topics. 
            Furthermore, these links are originaly provided by The World Healthcare Organization or our Moroccan Healthcare Ministry.
        </p>
        </li>
        <li class="list-group-item col-md-6 bg-white float-left">
            <h3 class="text-center" style="background-color:#B50A0C;font-family: fantasy; color:white">Useful Links</h3>
            <h5 style="font-family: fantasy; color:rgb(15, 80, 15)">What for?</h5>
            <p>By providing useful links that is relative to healthcare problems, issues, or awarness topics. 
            Furthermore, these links are originaly provided by The World Healthcare Organization or our Moroccan Healthcare Ministry.
        </p>
        </li>
        <li class="list-group-item col-md-6 bg-white float-left">
            <h3 class="text-center" style="background-color:#B50A0C;font-family: fantasy; color:white">Useful Links</h3>
            <h5 style="font-family: fantasy; color:rgb(15, 80, 15)">What for?</h5>
            <p>By providing useful links that is relative to healthcare problems, issues, or awarness topics. 
            Furthermore, these links are originaly provided by The World Healthcare Organization or our Moroccan Healthcare Ministry.
        </p>
        </li>
        <li class="list-group-item col-md-6 bg-white float-left">
            <h3 class="text-center" style="background-color:#B50A0C;font-family: fantasy; color:white">Useful Links</h3>
            <h5 style="font-family: fantasy; color:rgb(15, 80, 15)">What for?</h5>
            <p>By providing useful links that is relaare Organization or our Moroccan Healthcare Ministry.
        </p>
        </li>
    </ul>
</div>
<footer>
    <a class="btn btn-success float-right" href="{{route('admin.links.create')}}" >+ Add Link</a>
</footer>
@endsection