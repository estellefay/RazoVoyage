<?php

namespace App\Http\Controllers;

use Validator;
use App\Voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Recup tous les voyage et les afficher
        $voyages = Voyage::all();
        return view('admin.voyages', ['voyages' => $voyages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.voyage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'titre' => 'required|max:75',
            'description' => 'required'
        ]);

    

        if ($validator->fails()) {
           return back()->withErrors($validator)->withInput();
        }

        $voyage = new Voyage;
        $voyage->titre = $request->titre;
        $voyage->description = $request->description;
        $voyage->destination = $request->destination;
        $voyage->prix = $request->prix;
        $voyage->image = $request->image;
        $voyage->save();
        return redirect()->route('voyages.index')->with(["status" => "voyage enregistré"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {;
        //Récup un voyage en fonction de son ID
        $voyage = Voyage::findOrFail($id);
        return view('admin.voyage.detail', ['voyage' => $voyage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voyage = Voyage::findOrFail($id);
        return view('admin.voyage.update', ['voyage' => $voyage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voyage $voyage)
    {
        $voyage->titre = $request->titre;
        $voyage->description = $request->description;
        $voyage->destination = $request->destination;
        $voyage->prix = $request->prix;
        $voyage->image = $request->image;
        $voyage->save();
        return redirect()->route('voyages.index')->with(["status" => "voyage modifié"]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $voyage = Voyage::find($id);
        $voyage->delete();
        return redirect()->route('voyages.index')->with(["status" => "voyage Suprimer"]);

    }
}
