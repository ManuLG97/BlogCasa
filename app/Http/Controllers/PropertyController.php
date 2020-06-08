<?php

namespace App\Http\Controllers;

use DeepCopy\Matcher\PropertyTypeMatcher;
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
        $user = auth()->user()->id;
        return view('properties.index',compact('properties', 'user'));
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

    public function show($id)
    {
        $property=Property::find($id);
        $user=User::find($id);

        return view("properties.show", compact('property'));


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


    public static function  getUserName($id){
        $user=User::all()->where('id',$id)->first();
        return $user->name;
    }
    public static function  getUserEmail($id){
        $user=User::all()->where('id',$id)->first();
        return $user->email;
    }

}
