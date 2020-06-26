@extends('layouts.admin')

@section('content')

<div class="content">

    <ul style="padding: 50px" class="list-group">
        <li class="list-group-item col-md-12" style="background-color: #2F353A">
                <img class="rounded-circle border border-dark" style="float: right" src="{{asset('img/symboleLink.png')}}" alt="beneficial links" width="30%" height="30%">
                <p style="text-align: justify">
                    <h3 class="text-center" style="font-family: fantasy; color:#df7e7f">Useful Links</h3>
                    <h5 style="font-family: fantasy; color:#B50A0C">What for?</h5>
                    <p class="text-white">This page is made to help patients and everyone.</p>
                    <h5 style="font-family: fantasy; color:#B50A0C">How?</h5>
                    <p class="text-white">By providing useful links that is relative to healthcare problems, issues, or awarness topics. 
                        Furthermore, these links are originaly provided by The World Healthcare Organization or our Moroccan Healthcare Ministry.</p>
                </p>
        </li>
    </ul>
    <ul style="padding: 50px" class="list-group">
         <li class="list-group-item col-md-12">
            hey
        </li>
    </ul>
</div>
<footer>
    <a class="btn btn-success float-right" href="{{route('admin.links.create')}}" >+ Add Link</a>
</footer>
@endsection