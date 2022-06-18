<?php

namespace App\Http\Controllers;

use App\Models\Ekspedisi;
use Illuminate\Http\Request;
use App\Models\IndonesiaCity;
use App\Models\IndonesiaProvince;
use App\Http\Controllers\Controller;

class EkspedisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ekspedisi = Ekspedisi::query();
        if(isset($request->filter)){
            $filter = $request->filter;
            foreach ($filter as $key => $value) {
                # code...
                if(!empty($value)){
                    $ekspedisi = $ekspedisi->where($key, 'like', '%'. $value. '%');

                }
            }
        }
        return view('ekspedisi.index')->with('ekspedisis', $ekspedisi->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsis = IndonesiaProvince::orderBy('name')->get();
        $ekspedisi = new Ekspedisi;
        return view('ekspedisi.form')->with('ekspedisi', $ekspedisi)->with('provinsis', $provinsis);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ekspedisi = New Ekspedisi;
        $ekspedisi->name = $request->name;
        $ekspedisi->address = $request->address;
        $ekspedisi->phone = $request->phone;
        $ekspedisi->item_type = $request->item_type;
        $ekspedisi->weight = $request->weight;
        $ekspedisi->save();
        return Redirect()->route('ekspedisis.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ekspedisi  $ekspedisi
     * @return \Illuminate\Http\Response
     */
    public function show(Ekspedisi $ekspedisi)
    {
        return view('ekspedisi.show')->with('ekspedisi', $ekspedisi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ekspedisi  $ekspedisi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinsis = IndonesiaProvince::find($id);
        $ekspedisi = Ekspedisi::find($id);
        return view('ekspedisi.form', compact('ekspedisi','provinsis'))
        ->with('ekspedisi', $ekspedisi)
        ->with('provinsis', $provinsis);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ekspedisi  $ekspedisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ekspedisi $ekspedisi)
    {
        $ekspedisi->name = $request->name;
        $ekspedisi->address = $request->address;
        $ekspedisi->phone = $request->phone;
        $ekspedisi->item_type = $request->item_type;
        $ekspedisi->weight = $request->weight;
        $ekspedisi->save();
        return Redirect()->route('ekspedisis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ekspedisi  $ekspedisi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ekspedisi = Ekspedisi::find($id);
        $ekspedisi->delete();
        return Redirect()->route('ekspedisis.index')->with('Successful','Berhasil Dihapus');
    }
    
    public function getkota($id)
    {
        $kota = IndonesiaCity::where('province_code', $id)->pluck('name', 'id');
        if($kota->count() > 0)
        {
            return Response()->json(['data' => $kota]);
        }
    
    }
}
