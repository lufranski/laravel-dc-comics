<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;

class MainController extends Controller
{
    
    public function home(){

        // metodo compatto con compact
        $people = Person::all();

        // metodo esteso con array data, in questo caso bisognerebbe agganciare $data al posto di compact['nomeArray']
        // $data = [

        //     'people' => $people
        // ]

        return view('pages.home', compact('people'));
    }
}
