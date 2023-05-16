<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MotivationFormRequest;
use App\Models\Motivation;

class MotivationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motivations=Motivation::select("id-mot", "libelle")->orderBy("id_mot")->get();
        return view("motivation.index", ["motivations"=>$motivations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $motivation=new Motivation();
        return view("motivation.create", ["motivation"=>$motivation]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MotivationFormRequest $request)
    {
        Motivation::create($request->validated());
        return redirect(route('motivation.index'))->with("success", "motivation supprimée avec success.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Motivation $motivation)
    {

        return view("motivation.edit",["motivation"=>$motivation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MotivationFormRequest $request, Motivation $motivation)
    {   
        $motivation->update($request->validated());
        return redirect(route("motivation.index"))->with("success", "Modification réussie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motivation $motivation)
    {
        $motivation->delete();
        return redirect(route("motivation.index"))->with("success", "motivation supprimée avec success.");
    }
}
