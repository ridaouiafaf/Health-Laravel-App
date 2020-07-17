@extends('layouts.admin')
@section('content')
<div class="content">
    
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <h3 style=" font-family: fantasy;color:rgb(77, 139, 77);">Benevole Blood Donation Announcements</h3>
        </div>
    </div>
    @can('donation_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-dark" href="{{route('admin.donations.create')}}" > + Add Announcement</a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-group"> 
                @forelse ($bDonations as $donation)
                <div class="gallery bg-white">
                    <div class="mb-3 pics animation all">
                    
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
                            <h6><b>Needed Donors Number:</b> {{$donation->donors}}</h6>
                            <h6><b>Phone Number:</b> {{$donation->gsm}}</h6>
                            <h6><b>Address:</b> {{$donation->address}}</h6>
                            <h6><b>City:</b> {{$donation->city}}</h6>
                            @can('donation_delete')
                            <form class="col-md-12" style="display: inline" method="POST" action="{{route('admin.donations.destroy',['donation'=>$donation->id])}}">
                                @csrf
                                @method('DELETE')
                                <button style="background-color:rgba(255, 0, 0, 0.767) "class="btn btn-danger" type="submit">Delete</button>
                            </form> 
                            @endcan
                            @can('donation_edit')
                            <a href="{{route('admin.donations.edit',['donation'=>$donation->id])}}"><button class="btn btn-dark" type="button">Edit</button></a>
                            @endcan
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