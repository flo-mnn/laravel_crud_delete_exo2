<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        // following arrays necessary for the filters, because if I get a where with price, it doesnt take into account the discount
        $catless = [];
        $catmore = [];
        foreach ($cars as $car) {
            if (($car->price - ((($car->price)/100)*$car->discount)) < 4000) {
                array_push($catless, $car);
            } else {
                array_push($catmore, $car);
            }
        }


        $categories = [$cars,$catless,$catmore,Car::where('discount','!=',null)->get()];
        return view('welcome',compact('categories'));
    }

    public function create(){

        return view('pages.create');
    }

    public function store(Request $requests){
        $newEntry = new Car;
        $newEntry->brand = $requests->brand;
        $newEntry->year = $requests->year;
        $newEntry->color = $requests->color;
        $newEntry->price = $requests->price;
        $newEntry->discount = $requests->discount;
        
        $newEntry->save();

        return redirect()->back();
    }

    public function destroy($id){
        $destroy = Car::find($id);
        $destroy->delete();

        return redirect("/");
    }

    // tests persos

    public function show($id){
        return view('pages.show', ['car' => Car::find($id)]);
    }


    public function edit($id){
        return view('pages.edit',['car'=>Car::find($id)]);
    }

    public function update(Request $requests, $id){

            $update = Car::find($id);
            $update->brand = $requests->brand;
            $update->year = $requests->year;
            $update->color = $requests->color;
            $update->price = $requests->price;
            $update->discount = $requests->discount;
            
            $update->save();

        return redirect()->back();
    }
}
