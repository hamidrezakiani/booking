<?php

namespace App\Http\Controllers\FormBuilder;

use App\Http\Controllers\Controller;
use App\Models\FormBuilder\FormGroupFieldOption;
use Illuminate\Http\Request;

class FormGroupFieldOptionController extends Controller
{
   
    public function index()
    {
        $formGroupFieldsOption = FormGroupFieldOption::all();
        return response()->json(['formGroupFieldsOption' => $formGroupFieldsOption],200);
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
        $formGroupFieldOption = FormGroupFieldOption::create([
            'form_group_field_id' => $request->name,
            'value' => $request->value,
        ]);

        return response()->json(['formGroupFieldOption' => $formGroupFieldOption],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $formGroupFieldOption = FormGroupFieldOption::find($id);
        return response()->json(['formGroupFieldOption' => $formGroupFieldOption],202);
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
        FormGroupFieldOption::find($id)->update([
            'form_group_field_id' => $request->name,
            'value' => $request->value,
        ]);

        return response()->json([],203);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FormGroupFieldOption::find($id)->delete();
        return response()->json([],204);
    }
}