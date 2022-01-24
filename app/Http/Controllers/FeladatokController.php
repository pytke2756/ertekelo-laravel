<?php

namespace App\Http\Controllers;

use App\Models\Feladatok;
use Illuminate\Http\Request;

class FeladatokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feladatok = Feladatok::all();
        return view('feladatok.index', ['feladatok' => $feladatok]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feladatok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adatok = $request->only(['url']);
        $feladat = new Feladatok();
        $feladat->fill($adatok);
        $feladat->save();
        return redirect()->route("feladatok.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feladatok  $Feladatok
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feladat = Feladatok::find($id);

        return view('feladatok.show', ['feladat' => $feladat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feladatok  $Feladatok
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feladat = Feladatok::find($id);
        return view('feladatok.edit', ['feladat' => $feladat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feladatok  $Feladatok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feladatok $Feladatok)
    {
        $adatok = $request->only(['url' ,'szoveges_ert', 'pontszam']);
        $Feladatok->fill($adatok);
        $Feladatok->save();
        return redirect()->route('feladatok.show', $Feladatok->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feladatok  $Feladatok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feladatok $Feladatok)
    {
        //
    }
}
