<?php

namespace App\Http\Controllers\Admin;

use App\Donation;

use App\Http\Controllers\Controller;
use App\Http\Requests\DonationRequest;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class DonationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexUrgent()
    {
        abort_if(Gate::denies('donation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $uDonations=Donation::where('status','URGENT')->get();
        return view('donations.urgent',[
            'uDonations'=> $uDonations
        ]);
    }

    public function indexBenevole()
    {
        abort_if(Gate::denies('donation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bDonations=Donation::where('status','BENEVOLE')->get();
        return view('donations.benevole',[
            'bDonations'=> $bDonations
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('donation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('donations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\DonationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DonationRequest $request)
    {
        $data = $request->all();
        Donation::create($data);
        

        return redirect()->route('admin.donations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('donation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $donation=Donation::findOrFail($id);

        return view('donations.edit',[
            'donation'=>$donation
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\DonationRequest  $request
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(DonationRequest $request,$id)
    {
        $donation=Donation::findOrFail($id);

        $donation->title=$request->input('title');
        $donation->description=$request->input('description');

        
        $donation->url=$request->input('url');
            
        $donation->save();

        return redirect()->route('admin.donations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('donation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        Donation::destroy($id);

        return redirect()->route('admin.donations.index');
    }
}
