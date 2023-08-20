<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registers = Register::get();
        return view('events', ['registers'=> $registers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', Register::class);

        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        \Illuminate\Support\Facades\Gate::authorize('create', Register::class);

//        $request->validate([
//            'name' => ['required', 'string', 'min:3' , 'max:255']
//        ]);

        $register_email = $request->get('email');
        if ($register_email == null) {
            return redirect()->back();
        }

        $register = new Register();
        $register->email = $register_email;
        $register->save();

        return redirect()->route('events');
    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        return view('view-check', ['registers' => $register ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
