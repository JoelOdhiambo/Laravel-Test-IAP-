<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function newCar()
    {
        // $this->validate(
        //     request(),[
        //     'make'=>'required',
        //     'model'=>'required|unique:cars',
        //     'produces_on'=>'required',
        //     'image'=>'required']
        // );
        $car = new Car;
        $car->make = request('make');
        $car->model = request('model');
        $car->produced_on = request('produced_on');
        $car->image_url = request()->file('image')->store('public/images');
        $car->save();
        // request()->session->flash("form_submit", "Car saved successfully");
        return ('Record Added');
    }

    public function particularCar($id)
    {
        $car = Car::find($id);
        return view('particularcar', ['cars' => $car]);
    }

    public function allCars()
    {
        $car = Car::all();
        return view('car', ['cars' => $car]);
    }

    public function newCarForm()
    {
        return view('newcar');
    }

    public function carreviews($id)
    {
        $car=Car::find($id);
        $reviews=$car->reviews;
        return $reviews;
    }
}
