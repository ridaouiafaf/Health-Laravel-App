@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        @can('donation_create')
        <a class="btn btn-success float-right" href="{{route('admin.donations.create')}}" >+ Add Announcement</a>
        @endcan
        <div class="col-lg-12">
            <ul class="list-group"> 
                @forelse ($bDonations as $donation)
                <div class="gallery bg-light">
                    <div class="mb-3 pics animation all">
                    @if ($donation->status=='URGENT')
                    <h3 class="bg-dark">{{$donation->status}}</h3>
                    @else 
                    <h3 class="bg-dark text-success">{{$donation->status}}</h3>
                    @endif
                    <div class="desc">
                        <p>
                            @if ($donation->type=='A+')
                            <img style="float: right" src="{{asset('img/Aplus.png')}}" alt="beneficial links" width="200" height="200">
                            
                            @elseif($donation->type=='B+')
                            <img style="float: right" src="{{asset('img/Bplus.png')}}" alt="beneficial links" width="200" height="200">
                            
                            @elseif($donation->type=='AB+')
                            <img style="float: right" src="{{asset('img/ABplus.png')}}" alt="beneficial links" width="200" height="200">
                            
                            @elseif($donation->type=='O+')
                            <img style="float: right" src="{{asset('img/Oplus.png')}}" alt="beneficial links" width="200" height="200">
                            
                            @elseif($donation->type=='O-')
                            <img style="float: right" src="{{asset('img/Ominus.png')}}" alt="beneficial links" width="200" height="200">
                            
                            @elseif($donation->type=='B-')
                            <img style="float: right" src="{{asset('img/Bminus.png')}}" alt="beneficial links" width="200" height="200">
                            
                            @elseif($donation->type=='A-')
                            <img style="float: right" src="{{asset('img/Aminus.png')}}" alt="beneficial links" width="200" height="200">
                            
                            @else
                            <img style="float: right" src="{{asset('img/ABminus.png')}}" alt="beneficial links" width="200" height="200">
                            @endif
                            <h5 style="font-family: Franklin Gothic Medium">Blood Type: <b class="text-danger">{{$donation->type}}</b></h5>
                            <h6><b>Needed Donors Number:</b> {{$donation->donneurs}}</h6>
                            <h6><b>Phone Number:</b> {{$donation->gsm}}</h6>
                            <h6><b>Address:</b> {{$donation->address}}</h6>
                            <h6><b>City:</b> {{$donation->city}}</h6>
                        </p>
                    </div>
                  </div>
                </div>
                @empty
                <span class="badge badge-secondary"><h1>NO ANNOUNCES YET</h1></span>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection