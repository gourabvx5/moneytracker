<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $incomes = $user->incomes()->paginate(10);
         return view('incomes.index', compact('incomes'));    

    }

    public function add(){
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string',
            'date' => 'required|date',
            // Other validation rules
        ]);      
    }

    public function save(){
        $income = new Income($validatedData);
        $user->incomes()->save($income);
        return view('home');

    }
}
