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

        // actually checking if the post picks up the data and shows it in the IDE terminal
        error_log(request('name'));
        error_log(request('type'));
        error_log(request('country'));
        error_log(request('price'));
        
        // take the data and return to the homescreen
        return redirect('/');

        }


}
