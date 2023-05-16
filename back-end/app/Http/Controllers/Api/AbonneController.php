<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Abonne;
use App\Models\Motivation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;

use function GuzzleHttp\Promise\all;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $abonne = Abonne::all();
        return response()->json($abonne, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

     
        try {
            DB::beginTransaction();
            $abonne = Participant::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'age' => $request->age,
                'sexe' => $request->sexe,
                'ville' => $request->ville,
                'id_mot' => $request->id_mot,
                'rue' => $request->rue,
                'email' => $request->email,
                'pays' => $request->pays,
                'code_postal' => $request->code_postal,
                'telephone' => $request->telephone,
            ]);
            DB::commit();


            return response()->json($abonne, 200);
        } catch (Throwable $th) {
            return response()->json('{"erreur": "impossible de sauvegarde"}', 405);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Motivation $motivation)
    {
        //
        $motivation = Motivation::all();
        return response()->json($motivation, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        try {
            //code...
            DB::beginTransaction();
           
            $abonne = Abonne::find($id);

            $abonne->update($request->all());
            DB::commit();
            return response()->json($abonne, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur de mise a jour', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            //code...
            DB::beginTransaction();
            $abonne = Abonne::find($id);
            $abonne->delete();
            DB::commit();
            return response()->json('abonne suprimer avec succes', 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur au niveau de la supression', 500);
        }
    }

    
}