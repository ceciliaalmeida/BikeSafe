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
}
