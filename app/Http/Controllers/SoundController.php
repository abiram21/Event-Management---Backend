<?php

namespace App\Http\Controllers;

use App\Sound;
use App\Client;
use App\Http\Requests\SoundStoreRequest;
use Illuminate\Http\Request;
use App\Http\Requests\SoundUpdateRequest;
use App\Http\Resources\SoundResource;


class SoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sound = sound::with('client');
        return SoundResource::collection($sound->paginate(1000));
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
    public function store(SoundStoreRequest $request)
    {

       
            $sound = new sound();

                $sound->place_type = $request->place_type;
                $sound->stage_size = $request->stage_size;
                $sound->price = $request->price;
                $sound->client_id = $request->client_id;
                $sound->fac_id = 8;

                $sound->save();
            return SoundResource::collection($sound->paginate());
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sound  $sound
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
            $sound = sound::with('client')->find($id);
            return new SoundResource($sound);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sound  $sound
     * @return \Illuminate\Http\Response
     */
    public function edit(Sound $sound)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sound  $sound
     * @return \Illuminate\Http\Response
     */
    public function update(SoundUpdateRequest $request, $id)
    {
        
            $sound = Sound::find($id);

                $sound->place_type = $request->place_type;
                $sound->stage_size = $request->stage_size;
                $sound->price = $request->price;
                $sound->client_id = $request->client_id;
                $sound->fac_id = 8;

                $sound->save();
                return SoundResource::collection($sound->paginate());
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sound  $sound
     * @return \Illuminate\Http\Response
     */
    public function delete(Sound $sound)
    {
        
    }


    public function destroy($id)
    {
            $sound = Sound::find($id);
            $sound->delete();
            
    }


    public function getclient($size,$type)
    {
       
        
            $clients = Sound::where('stage_size',$size) -> where('place_type', $type)->with('client')->orderBy('price')->paginate(1000);
             return SoundResource::collection($clients);
        
       
    }

}

