<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wine;

class WineController extends Controller

{
    
    public function index() {
    // get data from a database

    $wines = Wine::all();

    return view( 'wines.index', [
        'wines' => $wines,
        ]);
    }

    public function show($id) {

        // if you search on an id that does not exist use the function findorFail
        // this will return a error 404 page instead of the laravel error log page to the user
        $wine = Wine::findorFail($id);

    // using the id variable to query the db for a record
    return view('wines.show', ['wine' => $wine]);
    }

    public function create() {
        return view('wines.create');
        }

    public function store() {
        // creating a new object/instance of the wine model and storing it in the wine variable
        $wine = new Wine();
        
        // request is used to acces the data
        $wine->name = request('name');
        $wine->country = request('country');
        $wine->type = request('type');
        $wine->price = request('price');

        // taking the object/instance of the wine and saving it to the database using the save() method
        $wine->save();

        // take the data and return a message(=key) and a value (= thank you... ) using the with() method
        // = session data (you can output this in the view using the session function!)
        return redirect('/')->with('message', 'Thank you for your order');

        }


}
