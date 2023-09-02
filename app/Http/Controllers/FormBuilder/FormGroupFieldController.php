<?php

namespace App\Http\Controllers\FormBuilder;

use App\Http\Controllers\Controller;
use App\Models\FormBuilder\FormGroupField;
use Illuminate\Http\Request;

class FormGroupFieldController extends Controller
{
    public function index()
    {
        $formGroupFields = FormGroupField::all();
        return response()->json(['formGroupFields' => $formGroupFields],200);
    }

    /**
     * Show the FormGroupField for creating a new resource.
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
        $formGroupField = FormGroupField::create([
            'form_group_id' => $request->form_group_id,
            'title' => $request->title,
            'type' => $request->type,
        ]);

        return response()->json(['formGroupField' => $formGroupField],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $formGroupField = FormGroupField::find($id);
        return response()->json(['formGroupField' => $formGroupField],202);
    }

    /**
     * Show the FormGroupField for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        FormGroupField::find($id)->update([
            'form_group_id' => $request->form_group_id,
            'title' => $request->title,
            'type' => $request->type,
        ]);

        return response()->json([],203);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FormGroupField::find($id)->delete();
        return response()->json([],204);
    }
}