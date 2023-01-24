<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Stuff;

class StuffController extends Controller
{
    public function index()
    {
        $stuffs = Stuff::all();
        //dd($stuffs);

        return view ('stuffs.index',['stuffs'=> $stuffs]);
    }
    public function insert()
    {
       return view ('stuffs.insert');
    
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Stuff::insert([ 
            'title' => $data['title'],
            'price' => $data['price'],
            'image' => $data['image'] 
            ]);
        return redirect (route('stuffs.index'));
        //dd('The product stored succefully');  
    }

    public function update($id)
    {
        $stuff = Stuff::find($id);
        return view('stuffs.update',['stuff'=>$stuff]);
        
    }

    public function edit(Request $request)
    {
        $stuff = Stuff::find($request->id);
        $stuff->title = $request->title;
        $stuff->price = $request->price;
        $stuff->image = $request->image;
        $stuff->save();
        return redirect (route('stuffs.index'));

    }
}

