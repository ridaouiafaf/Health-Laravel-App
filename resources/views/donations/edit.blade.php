@extends('layouts.admin')

@section('title')
    Announcement | Edit
@endsection

@section('content')

<div class="content">
    <div class="row">

        <div style="display: inline" class="col-lg-4 float-left">
            <img src="{{asset('img/announceLogo.png')}}" weight="400" height="300" alt="health icon">
        </div>

        <div style="margin-bottom: 10px;" class="row">
        <div style="display: inline" class="col-lg-12">
            <h1 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif" class="text-center">Update Announcement</h1>

            <form method="POST" action="{{route('admin.donations.update',['donation'=>$donation->id])}}">
                @csrf
                @method('PUT')
                
                <div class="form-group row">
                    <label for="type" class="col-md-12 col-form-label text-md-left"><b>Blood Type:</b></label>
                    <label class="col-md-12 col-form-label text-md-left"><h6 style="color:grey">The blood type you need</h6></label>
                    <div class="col-md-12">
                        <input class="form-control" type="text" list="type" name="type" value="{{old('type',$donation->type ?? null)}}">
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
                        <input class="form-control" type="text" list="status" name="status" value="{{old('status',$donation->status ?? null)}}">
                            <datalist id="status">
                              <option value="URGENT">
                              <option value="BENEVOLE">
                            </datalist>
                    </div>
                </div> 
                
                <div class="form-group row">
                    <label for="donors" class="col-md-6 col-form-label text-md-left">Needed Donors Number:</label>
                    <div class="col-md-12">
                        <input class="form-control" name="donors" id="donors" type="number" value="{{old('donors',$donation->donors ?? null)}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gsm" class="col-md-6 col-form-label text-md-left">Phone Number:</label>
                    <div class="col-md-12">
                        <input class="form-control" name="gsm" id="gsm" type="text" value="{{old('gsm',$donation->gsm ?? null)}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-md-6 col-form-label text-md-left">Address:</label>
                    <div class="col-md-12">
                        <input class="form-control" name="address" id="address" type="text" value="{{old('address',$donation->address ?? null)}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="city" class="col-md-6 col-form-label text-md-left">City:</label>
                    <div class="col-md-12">
                        <input class="form-control" name="city" id="city" type="text" value="{{old('city',$donation->city ?? null)}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="end_date" class="col-md-6 col-form-label text-md-left">Expire Date:</label>
                    <div class="col-md-12">
                    <input class="form-control" name="end_date" id="end_date" type="date" value="{{old('end_date',$donation->end_date ?? null)}}">
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
</div>
@endsection