<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bike;

class bikeController extends Controller
{

    public function index()
    {

        $bikes = Bike::all();

        return view(
            'welcome',
            ['bikes' => $bikes]
        );
    }

    public function create()
    {
        return view('bikes.create');
    }
    public function store(Request $request)
    {
        $bike = new Bike;
        $bike->model = $request->model;
        $bike->description = $request->description;
        $bike->city = $request->city;

        //image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/bikes'), $imageName);
            $bike->image = $imageName;
        }

        $bike->save();
        return redirect('/')->with('msg', 'Bike cadastradas com sucesso!');
    }
    public function show($id)
    {
        $bike = Bike::findOrFail($id);
        return view('bikes.show', ['bike' => $bike]);
    }
}
