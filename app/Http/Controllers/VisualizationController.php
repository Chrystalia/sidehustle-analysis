<?php

namespace App\Http\Controllers;

use App\Models\Visualization;
use App\Http\Requests\StoreVisualizationRequest;
use App\Http\Requests\UpdateVisualizationRequest;
use Illuminate\Http\Request;

class VisualizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sidehustles = Visualization::all();
        $datas = Visualization::where('id',1)->first();
        return view('dashboard',[
            'sidehustles' => $sidehustles,
            'datas' => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVisualizationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVisualizationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visualization  $visualization
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $sidehustles = Visualization::all();
        $datas = Visualization::where('id',$request->post('side_hustle_id'))->first();
        return view('dashboard',[
            'sidehustles' => $sidehustles,
            'datas' => $datas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visualization  $visualization
     * @return \Illuminate\Http\Response
     */
    public function edit(Visualization $visualization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVisualizationRequest  $request
     * @param  \App\Models\Visualization  $visualization
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVisualizationRequest $request, Visualization $visualization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visualization  $visualization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visualization $visualization)
    {
        //
    }
}
