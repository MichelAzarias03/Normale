<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Http\Requests\RegionFormRequest;
use Illuminate\Validation\Rule;



class RegionController extends Controller
{

    public function index(Request $request){
        $regions=Region::select("id", "label")->orderBy("id")->get();
        return $regions;
    }
    public function store(RegionFormRequest $request)
    {
        /*$validated=$request->validate(
            [
                "label"=>["required", "max:30",  Rule::unique("Region", "label")->ignore($this->route()->parameter("region"))]
            ]
            );
            */
        $region=Region::create($request->validated());
        return ["success"=>true, "message"=>"Region créee", "data"=>$region];

    }


    public function show(Region $region)
    {
        return $region;
    }

    public function update(RegionFormRequest $request, Region $region){
        $region->update($request->validated());
        return ["success"=>true, "message"=>"Region modifiée", "data"=>$region];
    }


    public function destroy(Region $region)
    {
        $region->delete();
        return ["success"=>true, "message"=>"Region supprimée", "data"=>$region];
    }
}
