<?php

namespace App\Http\Controllers;

use App\Models\BusRoute;
use Illuminate\Http\Request;

class BusRoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BusRoute::latest()->paginate(5);

        return view('busroutes.index',compact('data'));
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('busRoutes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'busroute1' => 'required',
            'busroute2' => 'required',
            'description' => 'required',
            'time' => 'required',
            'price' => 'required',
        ]);
    
        BusRoute::create($request->all());
     
        return redirect()->route('dashboard')
                        ->with('success','Post created successfully.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusRoute  $busRoute
     * @return \Illuminate\Http\Response
     */
    public function show(BusRoute $busRoute)
    {
        return view('busRoutes.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusRoute  $busRoute
     * @return \Illuminate\Http\Response
     */
    public function edit(BusRoute $busRoute)
    {
        return view('busroutes.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusRoute  $busRoute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusRoute $busRoute)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
    
        $busRoute->update($request->all());
    
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusRoute  $busRoute
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusRoute $busRoute)
    {
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }
}
