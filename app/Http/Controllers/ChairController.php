<?php

namespace App\Http\Controllers;

use App\Chair;
use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ChairStoreRequest;
use App\Http\Requests\ChairUpdateRequest;
use App\Http\Resources\ChairResource;

class ChairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chair = Chair::with('client');
        return ChairResource::collection($chair->paginate(1000));
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
    public function store(ChairStoreRequest $request)
    {

        $chair = new Chair();
        
       
        
        $chair->type = $request->type;
        $chair->minQty = $request->minQty;
        $chair->maxQty = $request->maxQty;
        $chair->price_per_coveredchair = $request->price_per_coveredchair;
        $chair->price_per_uncoveredchair = $request->price_per_uncoveredchair;
       
        $chair->client_id = $request->client_id;
        $chair->fac_id = 2;

        $chair->save();
        return ChairResource::collection($chair->paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chair  $chair
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $chair = Chair::with('client')->find($id);
            return new ChairResource($chair);

           
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chair  $chair
     * @return \Illuminate\Http\Response
     */
    public function edit(Chair $chair)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chair  $chair
     * @return \Illuminate\Http\Response
     */
    public function update(ChairUpdateRequest $request, Chair $chair,$id)
    {
        
            $chair = Chair::find($id);
            
            $chair->type = $request->type;
            $chair->minQty = $request->minQty;
            $chair->maxQty = $request->maxQty;
            $chair->price_per_coveredchair = $request->price_per_coveredchair;
            $chair->price_per_uncoveredchair = $request->price_per_uncoveredchair;
           
            $chair->client_id = $request->client_id;
            $chair->fac_id = 2;
    
            $chair->save();

            return ChairResource::collection($chair->paginate());
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chair  $chair
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
            $chair = Chair::find($id);
            $chair->delete();
           
    
    }



    public function getclient($type, $noOfUncoveredChair, $noOfCoveredChair)
    {
        

            $totalNumber = $noOfUncoveredChair + $noOfCoveredChair;
            $clients = Chair:: where('type', $type)->where('minQty','<',$totalNumber)->where('maxQty','>=',$totalNumber)->with('client')->paginate(1000);
            return ChairResource::collection($clients);
           
            
           
       
    }

}
