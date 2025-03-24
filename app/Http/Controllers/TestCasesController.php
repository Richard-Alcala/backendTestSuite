<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestCase;

class TestCasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($testsuite)
    {
        $testcases = TestCase::where('testsuite_id', $testsuite)->get();
        return response()->json($testcases);
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
    public function store(Request $request, $testsuite)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'steps' => 'required|string|max:255',
        ]);

        $validated['testsuite_id'] = $testsuite;

        $testCase = TestCase::create($validated);

        return response()->json($testCase, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testCase = TestCase::findOrFail($id);

        return response()->json($testCase);
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
        $testCase = TestCase::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string|max:255',
            'steps' => 'sometimes|string|max:255',
            'testsuite_id' => 'sometimes|exists:testsuite,id',
        ]);

        $testCase->update($validated);

        return response()->json($testCase);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testCase = TestCase::findOrFail($id);
        $testCase->delete();

        return response()->json(null, 204);
    }
}
