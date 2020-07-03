<?php

namespace App\Http\Controllers;

use App\Photography;
use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\PhotographyStoreRequest;
use App\Http\Requests\PhotographyUpdateRequest;
use App\Http\Resources\PhotographyResource;


class PhotographyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            $photography = Photography::with('client');
            return PhotographyResource::collection($photography->paginate(1000));
            
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
    public function store(PhotographyStoreRequest $request )
    {
       
            $photography = new Photography();

               
                $photography->duration = $request->duration;
                $photography->price = $request->price;
                $photography->client_id = $request->client_id;
                $photography->fac_id = 6;

                $photography->save();
                return PhotographyResource::collection($photography->paginate());
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function show(Photography $photography)
    {
       
            $photography = Photography::with('client')->find($id);
            return new PhotographyResource($photography);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function edit(Photography $photography)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function update(PhotographyUpdateRequest $request,$id)
    {
        
            $photography = Photography::find($id);

               
                 $photography->duration = $request->duration;
                $photography->price = $request->price;
              
                $photography->client_id = $request->client_id;
                $photography->fac_id = 6;

                $photography->save();
                return PhotographyResource::collection($photography->paginate());
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photography  $photography
     * @return \Illuminate\Http\Response
     */

    public function delete(Photography $photography)
    {
      
    }

    public function destroy($id)
    {
        
            $photography = Photography::find($id);
            $photography->delete();
           
    }

    public function getclient($duration)
    {
        $clients = Photography::where('duration', $duration)->with('client')->orderBy('price')->paginate(1000);
        return PhotographyResource::collection($clients);
    }
}
