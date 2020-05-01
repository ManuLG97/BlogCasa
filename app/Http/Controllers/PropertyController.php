<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\User;



class PropertyController extends Controller
{
    function __construct()
    {
        //$this->middleware(['auth','role:admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $properties= Property::all();
        return view('properties.index',compact('properties'));
    }

    public function edit($id)
    {
        $property=Property::find($id);
        $users=User::all();
        return view('properties.edit',compact('property','users'));
    }

    public function update(Request $request, $id)
    {
        $property=Property::find($id);
        $property->update(['description'=>$request->description,
            'price'=>$request->price
//            'owner_id'=>$request->owner_id
                    ]);

        return redirect()->route('propiedades.index');
    }

    public function create (){
        return view("properties.newproduct");

    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id;

        $path=$request->file('fotocasa')->store('photos','public');
        Property::create(['description'=>$request->description,
            'price'=>$request->price,
            'user_id'=>$user_id,
            'fotocasa'=>$path
        ]);
        return redirect()->route('propiedades.index');
    }


    public function destroy($id) {

        $property =  Property::find($id);
        $property->delete();

        return redirect()->route('propiedades.index');

    }
}
