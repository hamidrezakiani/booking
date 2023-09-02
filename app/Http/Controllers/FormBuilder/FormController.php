<?php

namespace App\Http\Controllers\FormBuilder;

use App\Http\Controllers\Controller;
use App\Models\FormBuilder\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = Form::all();
        return response()->json(['forms' => $forms],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = Form::create([
            'name' => $request->name
        ]);

        return response()->json(['form' => $form],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $form = Form::find($id);
        return response()->json(['form' => $form],202);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Form::find($id)->update([
            'name' => $request->name
        ]);

        return response()->json([],203);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Form::find($id)->delete();
        return response()->json([],204);
    }
}
