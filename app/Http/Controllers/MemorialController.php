<?php

namespace App\Http\Controllers;

use App\Memorial;
use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\MemorialStoreRequest;
use App\Http\Requests\MemorialUpdateRequest;
use App\Http\Resources\MemorialResource;


class MemorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
            $memorial = Memorial::with('client');
            return MemorialResource::collection($memorial->paginate(1000));
      
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
    public function store(MemorialStoreRequest $request)
    {
        
        $memorial = new Memorial();
        $memorial->type = $request->type;
        $memorial->minQty = $request->minQty;
        $memorial->maxQty = $request->maxQty;
        $memorial->unit_price = $request->unit_price;
        $memorial->client_id = $request->client_id;
        $memorial->fac_id = 5;

        $memorial->save();

        return MemorialResource::collection($memorial->paginate());
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Memorial  $memorial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
            $memorial = Memorial::with('client')->find($id);
            return new MemorialResource($memorial);
           
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Memorial  $memorial
     * @return \Illuminate\Http\Response
     */
    public function edit(Memorial $memorial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Memorial  $memorial
     * @return \Illuminate\Http\Response
     */
    public function update(MemorialUpdateRequest $request, $id)
    {
       
            $memorial = Memorial::find($id);
            $memorial->type = $request->type;
            $memorial->minQty = $request->minQty;
            $memorial->maxQty = $request->maxQty;
            $memorial->unit_price = $request->unit_price;
            $memorial->client_id = $request->client_id;
            $memorial->fac_id = 5;
    
            $memorial->save();

            return MemorialResource::collection($memorial->paginate());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Memorial  $memorial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
            $memorial = Memorial::find($id);
            $memorial->delete();
           
       
    }

    public function getclient($type, $qty)
    {
        $clients = Memorial::where('type',$type)->where('minQty','<',$qty)->where('maxQty','>=',$qty)->with('client')->orderBy('unit_price')->paginate(1000);
        return MemorialResource::collection($clients);
          
    }
}
