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

        // No validation
        // $data = $request -> all();

        // With validation
        $data = $request -> validate([

            'firstName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'required|date',
            'height' => 'nullable|integer|min:140|max:220'
        ]);

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

        // No validation
        // $data = $request -> all();

        // With validation
        $data = $request -> validate([

            'firstName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'required|date',
            'height' => 'nullable|integer|min:140|max:220'
        ]);

        $person -> firstName = $data['firstName'];
        $person -> lastName = $data['lastName'];
        $person -> dateOfBirth = $data['dateOfBirth'];
        $person -> height = $data['height'];

        $person -> save();

        return redirect() -> route('home');
    }
}
