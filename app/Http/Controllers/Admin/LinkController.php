<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LinkRequest;
use App\Link;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;
 
class LinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('link_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $links=Link::all();
        return view('links.index',[
            'links'=>$links
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('link_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\LinkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LinkRequest $request)
    {
        $data = $request->all();
        Link::create($data);
        

        return redirect()->route('admin.links.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    // public function show(Link $link)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('link_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $link=Link::findOrFail($id);

        return view('links.edit',[
            'link'=>$link
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\LinkRequest  $request
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(LinkRequest $request,$id)
    {
        $link=link::findOrFail($id);

        $link->title=$request->input('title');
        $link->description=$request->input('description');

        
        $link->url=$request->input('url');
            
        $link->save();

        return redirect()->route('admin.links.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('link_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        Link::destroy($id);

        return redirect()->route('admin.links.index');
    }
}
