<?php

namespace App\Http\Controllers\Admin;

use App\Donation;

use App\Http\Controllers\Controller;
use App\Http\Requests\DonationRequest;
use Carbon\Carbon;
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
    
    public function index()
    {
        abort_if(Gate::denies('donation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // $today=Carbon::now()->format('d-m-Y');
        $today=Carbon::now();
        $id=auth()->user()->id;
        $userDonations=Donation::with(['user'])->where('user_id',$id)->orderBy('created_at', 'desc')->get();
        return view('donations.index',[
            'userDonations'=> $userDonations,
            'today'=>$today
        ]);
    }
    
    public function indexUrgent()
    {
        abort_if(Gate::denies('donation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $today=Carbon::now();
        $uDonations=Donation::where('status','URGENT')->orderBy('created_at', 'desc')->get();
        return view('donations.urgent',[
            'uDonations'=> $uDonations,
            'today'=>$today
        ]);
    }

    public function indexBenevole()
    {
        abort_if(Gate::denies('donation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $today=Carbon::now();
        $bDonations=Donation::where('status','BENEVOLE')->orderBy('created_at', 'desc')->get();
        return view('donations.benevole',[
            'bDonations'=> $bDonations,
            'today'=>$today
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id']=auth()->user()->id;
        Donation::create($data);
        
        if($data['status']=='URGENT')
        return redirect()->route('admin.donations.urgent.index');
        else
        return redirect()->route('admin.donations.benevole.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

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

        // $donation->update($request->all());
        $donation->type=$request->input('type');
        $donation->status=$request->input('status');
        $donation->gsm=$request->input('gsm');
        $donation->end_date=$request->input('end_date');
        $donation->city=$request->input('city');
        $donation->address=$request->input('address');
        $donation->donors=$request->input('donors');
        
        $donation->save();

        if($donation->status=='URGENT')
        return redirect()->route('admin.donations.urgent.index');
        else
        return redirect()->route('admin.donations.benevole.index');
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
        $donation=Donation::findOrFail($id);
        Donation::destroy($id);

        if($donation->status=='URGENT')
        return redirect()->route('admin.donations.urgent.index');
        else
        return redirect()->route('admin.donations.benevole.index');
    }
}
