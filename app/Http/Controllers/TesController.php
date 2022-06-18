<?php

namespace App\Http\Controllers;

use App\Models\Tes;
use Illuminate\Http\Request;

class TesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'sukses';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tes = New tes;
        $tes->email = $request->email;
        $tes->pass = $request->pass;
        $tes->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tes  $tes
     * @return \Illuminate\Http\Response
     */
    public function show(Tes $tes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tes  $tes
     * @return \Illuminate\Http\Response
     */
    public function edit(Tes $tes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tes  $tes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tes $tes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tes  $tes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tes $tes)
    {
        //
    }
}
