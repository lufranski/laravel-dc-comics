<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;

class MainController extends Controller
{
    
    public function home(){

        // metodo compatto con compact
        $people = Person::orderBy('created_at', 'DESC') -> get();

        // metodo esteso con array data, in questo caso bisognerebbe agganciare $data al posto di compact['nomeArray']
        // $data = [

        //     'people' => $people
        // ]

        return view('pages.home', compact('people'));
    }

    // Show method - land to an item page
    public function show(Person $person){

        return view('pages.show', compact('person'));
    }

    // Delete method - delete an item
    public function delete(Person $person){

        $person -> delete();

        return redirect() -> route('home');
    }

    // Create method - create new item
    public function create(){

        return view ('pages.create');
    }

    // Store method - submit new item
    public function store(Request $request){

        $data = $request -> all();

        $person = new Person();

        $person -> firstName = $data['firstName'];
        $person -> lastName = $data['lastName'];
        $person -> dateOfBirth = $data['dateOfBirth'];
        $person -> height = $data['height'];

        $person -> save();

        return redirect() -> route('home');
    }

    // Edit method - change an already existent item
    public function edit(Person $person){

        return view('pages.edit', compact('person'));
    }

    // Update method - submit changes
    public function update(Request $request, Person $person){

        $data = $request -> all();

        $person -> firstName = $data['firstName'];
        $person -> lastName = $data['lastName'];
        $person -> dateOfBirth = $data['dateOfBirth'];
        $person -> height = $data['height'];

        $person -> save();

        return redirect() -> route('home');
    }
}
