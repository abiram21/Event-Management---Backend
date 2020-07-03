<?php

namespace App\Http\Controllers;

use App\MemorialType;
use Illuminate\Http\Request;
use App\Http\Resources\MemorialTypeResource;
use App\Http\Requests\MemorialTypeStoreRequest;
use App\Http\Requests\MemorialTypeUpdateRequest;


class MemorialTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(MemorialTypeStoreRequest $request)
    {
        $memorialtype = new MemorialType();

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = $file->getClientOriginalName().'.'.$extension;
        $file->move('uploads/memorial_type', $filename);
        $memorialtype->image= $filename;

        $memorialtype->save();
        return MemorialTypeResource::collection($memorialtype->paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MemorialType  $memorialType
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $image = MemorialType::get();
        
       
        return $image;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MemorialType  $memorialType
     * @return \Illuminate\Http\Response
     */
    public function edit(MemorialType $memorialType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MemorialType  $memorialType
     * @return \Illuminate\Http\Response
     */
    public function update(MemorialTypeUpdateRequest $request,$id)
    {
        $memorialtype = MemorialType::find($id);
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = $file->getClientOriginalName().'.'.$extension;
        $file->move('uploads/memorial_type', $filename);
        $memorialtype->image= $filename;

        $memorialtype->save();
        return MemorialTypeResource::collection($memorialtype->paginate());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MemorialType  $memorialType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $memorialtype = MemorialType::find($id);
            $memorialtype->delete();
    }
}
