<?php

namespace App\Http\Controllers\FormBuilder;

use App\Http\Controllers\Controller;
use App\Models\FormBuilder\FormGroup;
use Illuminate\Http\Request;

class FormGroupController extends Controller
{
    public function index()
    {
        $formGroups = FormGroup::all();
        return response()->json(['formGroups' => $formGroups],200);
    }

    /**
     * Show the formGroup for creating a new resource.
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
        $formGroup = FormGroup::create([
            'form_id' => $request->form_id,
            'title' => $request->title,
            'row_number' => $request->row_number,
            'col_number' => $request->col_number
        ]);

        return response()->json(['formGroup' => $formGroup],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $formGroup = FormGroup::find($id);
        return response()->json(['formGroup' => $formGroup],202);
    }

    /**
     * Show the formGroup for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        FormGroup::find($id)->update([
            'form_id' => $request->form_id,
            'title' => $request->title,
            'row_number' => $request->row_number,
            'col_number' => $request->col_number
        ]);

        return response()->json([],203);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FormGroup::find($id)->delete();
        return response()->json([],204);
    }
}
