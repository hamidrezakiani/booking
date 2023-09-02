<?php

namespace App\Http\Controllers\Examination;

use App\Http\Controllers\Controller;
use App\Models\Examination\Examination;
use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $examinations = Examination::all();
        return response()->json(['examinations' => $examinations],200);
    }

    /**
     * Show the examination for creating a new resource.
     */
    public function create()
    {
        // Examination::find(2)->records()->attach([2,8],['value' => 320]);
        $examnation = new Examination();
        $records = $examnation->where('id',2)->with('records')->first();
        dd($records->records()->first()->pivot->value);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $examination = Examination::create([
            'form_id' => $request->form_id,
            'name' => $request->name
        ]);

        return response()->json(['examination' => $examination],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $examination = Examination::find($id);
        return response()->json(['examination' => $examination],202);
    }

    /**
     * Show the examination for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Examination::find($id)->update([
            'form_id' => $request->form_id,
            'name' => $request->name
        ]);

        return response()->json([],203);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Examination::find($id)->delete();
        return response()->json([],204);
    }
}
