<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;
use App\Http\Resources\ItemResource;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        return response()->json([
            "status"=>"ok",
            "totalResults"=>count($items),
            "items"=>ItemResource::collection($items)
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'codeno' => 'required',
        'name' => 'required',
        'photo' => 'required',
        'price' => 'required',
        'discount' => 'required',
        'description' => 'required',
        'brand' => 'required',
        'subcategory' => 'required',
        ]);

        //file upload

        // $imageName = time() .'.'.$request->inputPhoto->extension();

        // $request->inputPhoto->move(public_path('backendtemplate/itemimg'),$imageName);

        // $myfile='backendtemplate/itemimg/'.$imageName;


        //store data ->store with database name
        $item = new Item;
        $item->codeno =$request->codeno;
        $item->name=$request->name;
         $item->photo=$request->photo;
        $item->price=$request->price;
        $item->discount=$request->discount;
        $item->description=$request->description;
        $item->brand_id=$request->brand;
        $item->subcategory_id=$request->subcategory;
        $item->save();

        //redirect
        return new ItemResource($item);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return new ItemResource($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
