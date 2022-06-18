<?php

namespace App\Http\Controllers;

use App\Models\Karaoke;
use App\Models\CheckOut;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KaraokeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karaokes = Karaoke::query();
        $filter = [];

        if(isset($request->filter)) {
            $filter = $request->filter;
            foreach($filter as $key => $value) {
                if(!empty($value)) {
                    
                }
            }
        }

        $karaokes = $karaokes->get();
        
        $check_out = CheckOut::get();
        return view('karaoke.index')->with('karaokes', $karaokes)->with('check_out', $check_out); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Karaoke $karaoke)
    {
        // $karaoke = Karaoke::find('id');
        // $check_out = CheckOut::find('id');
        // return view('karaoke.form')
        // ->with('karaoke', $karaoke)
        // ->with('check_out', $check_out);
        $karaoke = New Karaoke;
        return view('karaoke.form')->with('karaoke', $karaoke);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $karaoke= New Karaoke;
        if($request->hasFile('image')){
            $img_name = time().'.'. $request->file('image')->getClientOriginalName();
            // dd($request->file('image'));
            if(Storage::disk('public')->put($img_name, File::get($request->file('image')))){
                $karaoke->image = $img_name;
            };            
         }else{
             
         }
        $karaoke->name = $request->name;
        $karaoke->desc = $request->desc;
        $karaoke->price = $request->price;
        $karaoke->save();

        return Redirect()->route('karaokes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karaoke  $karaoke
     * @return \Illuminate\Http\Response
     */
    public function show(Karaoke $karaoke)
    {
        return view('karaoke.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karaoke  $karaoke
     * @return \Illuminate\Http\Response
     */
    public function edit(Karaoke $karaoke)
    {
        return "sukses";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karaoke  $karaoke
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karaoke $karaoke)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karaoke  $karaoke
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karaoke $karaoke)
    {
        $karaoke = Karaoke::find($id);
        $karaoke->delete();
        return Redirect()->route('karaokes.index')->with('Successful','Berhasil Dihapus');

    }
}
