<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Region;
use App\Http\Requests\ParticipantFormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class ParticipantController extends Controller
{

    public function index()
    {
        $participants=Participant::with("region")->latest()->get();
        return $participants;

    }

    public function store(ParticipantFormRequest $request)
    {
        $password=Str::password(12);
        //$password=Hash::make($password);
        $validated=$request->validated();
        $validated["pwd"]=$password;
        try{
            DB::beginTransaction();
            $participant=Participant::create($validated);
            $participant->login="participant_".$participant->id;
            $participant->save();
            DB::commit();
        }
        catch(\Throwable $th){
            DB::rollback();
        }

            return ["success"=>true, "message"=>"participant ajouté", "data"=>$participant];
    }

    public function show(Participant $participant)
    {
        $participant=$participant::with("region")->where("id", $participant->id)->first();
        return $participant;
    }



    public function update(ParticipantFormRequest $request, Participant $participant)
    {
        $participant->update($request->validated());
        return ["success"=>true, "message"=>"participant modifié", "data"=>$participant];

    }


    public function destroy(Participant $participant)
    {
        $participant->delete();
        return $participant;
    }
    public function toggleEtat(Participant $participant){
        $participant->update(["etat"=>!$participant->etat]);
        return $participant;
    }
}
