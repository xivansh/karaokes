<?php

namespace App\Http\Controllers;

use App\Models\Karaoke;
use App\Models\CheckOut;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "hai";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Karaoke $karaoke)
    {
        // $karaoke = Karaoke::all();
        $check_out = New CheckOut;
        // dd($check_out);
        return view('checkout.form')
        ->with('check_out', $check_out)
        ->with('karaoke', $karaoke);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Karaoke $karaoke)
    {
        $check_out = New CheckOut;
        $check_out->karaoke_id = $karaoke->id;
        $check_out->name = $request->name;
        $check_out->age = $request->age;
        $check_out->phone = $request->phone;
        $check_out->booking_date = $request->booking_date;
        $check_out->hours = $request->hours;
        $check_out->payment = $request->payment;
        $check_out->save();
        return Redirect()->route('karaokes.checkout.show', [$check_out->id, $karaoke->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        // return 'hai';       
       $karaoke = Karaoke::find($id);
       $check_out = CheckOut::find($id);
    //    dd($check_out);
        return view('checkout.show')->with('check_out', $check_out)->with('karaoke', $karaoke);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function rinting(CheckOut $checkOut)
    {
        return 'hai';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CheckOut $checkOut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karaoke $karaoke)
    {
    
    }

    public function riwayat(CheckOut $check_out, Karaoke $karaoke)
    {
        $check_out = CheckOut::get(); 
        return view('history.index')->with('check_out', $check_out)->with('karaoke', $karaoke);
    }
}
