<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientUpdateRequest;
use App\Http\Requests\ClientStoreRequest;
use App\Http\Resources\ClientResource;


class ClientController extends Controller
{


   public function getClientPhonenumber()
   {
    
        $client = Client::get()->pluck('phoneNo', 'id');
        return ClientResource::collection($client->paginate(1000));
        
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::paginate();
        return ClientResource::collection($client);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientStoreRequest $request)
    {
        $client = new Client();

                
        $client->name = $request->name;
        $client->address = $request->address;
        $client->description = $request->description;
        $client->email = $request->email;
        $client->phoneNo = $request->phoneNo;

        $client->save();

        return ClientResource::collection($client->paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::with('client')->find($id);
        return new ClientResource($client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientUpdateRequest $request, $id)
    {

        $client = Client::find($id);

                
        $client->name = $request->name;
        $client->address = $request->address;
        $client->description = $request->description;
        $client->email = $request->email;
        $client->phoneNo = $request->phoneNo;

        $client->save();

        return ClientResource::collection($client->paginate());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
    }

    public function clientPhn()
    {
        $client = Client::get('phoneNo');
        return new ClientResource($client);
    }
}
