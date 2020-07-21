@extends('layouts.admin')
@section('title')
    Announcement | Create
@endsection

@section('content')

<div class="content">
    <div class="row">

        <div style="display: inline" class="col-lg-4 float-left">
            <img src="{{asset('img/announceLogo.png')}}" weight="400" height="300" alt="health icon">
        </div>

        <div style="margin-bottom: 10px;" class="row">
        <div style="display: inline" class="col-lg-12">
            <h1 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif" class="text-center">New Announcement</h1>

            <form method="POST" action="{{route('admin.donations.store')}}">
                @csrf
                
                <div class="form-group row">
                    <label for="type" class="col-md-12 col-form-label text-md-left"><b>Blood Type:</b></label>
                    <label class="col-md-12 col-form-label text-md-left"><h6 style="color:grey">The blood type you need</h6></label>
                    <div class="col-md-12">
                        <input class="form-control" type="text" list="type" name="type">
                            <datalist id="type">
                              <option value="A+">
                              <option value="A-">
                              <option value="B+">
                              <option value="B-">
                              <option value="AB+">
                              <option value="AB-">
                              <option value="O+">
                              <option value="O-">
                            </datalist>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="status" class="col-md-4 col-form-label text-md-left">Status:</label>
                    <div class="col-md-12">
                        <input class="form-control" type="text" list="status" name="status">
                            <datalist id="status">
                              <option value="URGENT">
                              <option value="BENEVOLE">
                            </datalist>
                    </div>
                </div> 
                
                <div class="form-group row">
                    <label for="donors" class="col-md-6 col-form-label text-md-left">Needed Donors Number:</label>
                    <div class="col-md-12">
                        <input class="form-control" name="donors" id="donors" type="number">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gsm" class="col-md-6 col-form-label text-md-left">Phone Number:</label>
                    <div class="col-md-12">
                        <input class="form-control" name="gsm" id="gsm" type="text">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-md-6 col-form-label text-md-left">Address:</label>
                    <div class="col-md-12">
                        <input class="form-control" name="address" id="address" type="text">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="city" class="col-md-6 col-form-label text-md-left">City:</label>
                    <div class="col-md-12">
                        <input class="form-control" name="city" id="city" type="text">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="end_date" class="col-md-6 col-form-label text-md-left">Expire Date:</label>
                    <div class="col-md-12">
                        <input class="form-control" name="end_date" id="end_date" type="date">
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
                    <button class="btn btn-danger float-right col-md-12" type="submit">Add Announcement</button>
                </div>
            </form>   
        </div>
    </div>

    </div>
</div>
@endsection