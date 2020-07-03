<?php

namespace App\Http\Controllers;

use App\Light;
use App\Client;
use App\Http\Requests\LightStoreRequest;
use App\Http\Requests\LightUpdateRequest;
use App\Http\Resources\LightResource;

use Illuminate\Http\Request;

class LightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $light = Light::with('client');
            return LightResource::collection($light->paginate(1000));
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LightStoreRequest $request)
    {
        //
        
            $light = new Light();

                $light->stage_size = $request->stage_size;
               
                $light->price = $request->price;
                $light->client_id = $request->client_id;
                $light->fac_id = 4;

                $light->save();
                return LightResource::collection($light->paginate());
            
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Light  $light
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       
            $light = Light::with('client')->find($id);
            return new LightResource($light);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Light  $light
     * @return \Illuminate\Http\Response
     */
    public function edit(Light $light)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Light  $light
     * @return \Illuminate\Http\Response
     */
    public function update(LightUpdateRequest $request,$id)
    {   
        //
     
            $light = Light::find($id);

               
            $light->stage_size = $request->stage_size;
                $light->price = $request->price;
                $light->client_id = $request->client_id;
                $light->fac_id = 4;

                $light->save();

                return LightResource::collection($light->paginate());

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Light  $light
     * @return \Illuminate\Http\Response
     */
    public function delete(Light $light)
    {
        
    }
    public function destroy($id)
    {
        
            $light = Light::find($id);
            $light->delete();
        
    }

     public function getclient($size)
     {
        $clients = Light::where('stage_size',$size)->with('client')->orderBy('price')->paginate(1000);
        return LightResource::collection($clients);
     }
}
