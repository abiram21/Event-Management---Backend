<?php

namespace App\Http\Controllers;

use App\ChairType;
use Illuminate\Http\Request;
use App\Http\Resources\ChairTypeResource;
use App\Http\Requests\ChairTypeStoreRequest;
use App\Http\Requests\ChairTypeUpdateRequest;

class ChairTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chairtype = ChairType::all();
        return new ChairTypeResource($chairtype);
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
    public function store(ChairTypeStoreRequest $request)
    {
        $chairtype = new ChairType();
       
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = "chair-type-".time().'.'.$extension;
        $file->move('uploads/chair_type', $filename);
        $chairtype->image= $filename;

        $chairtype->save();
        return ChairTypeResource::collection($chairtype->paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChairType  $chairType
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


       
        $image = ChairType::get();
        
       
        return $image;
      
        
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChairType  $chairType
     * @return \Illuminate\Http\Response
     */
    public function edit(ChairType $chairType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChairType  $chairType
     * @return \Illuminate\Http\Response
     */
    public function update(ChairTypeUpdateRequest $request, $id)
    {

        $chairtype = ChairType::find($id);

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = $file->getClientOriginalName().'.'.$extension;
        $file->move('uploads/chair_type', $filename);
        $chairtype->image= $filename;

        $chairtype->save();
        return ChairTypeResource::collection($chairtype->paginate());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChairType  $chairType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chairtype = ChairType::find($id);
            $chairtype->delete();
    }
}
