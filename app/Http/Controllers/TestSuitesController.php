<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestSuite;

class TestSuitesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testsuites = TestSuite::all();
        return response()->json($testsuites);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testsuites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testsuite = new TestSuite();
        $testsuite->name = $request->post('name');
        $testsuite->description = $request->post('description');
        $testsuite->platform = $request->post('platform');
        $testsuite->status = $request->post('status');
        $testsuite->save();
        
        return redirect()->route('testsuites.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testsuite = TestSuite::findOrFail($id);
        return response()->json($testsuite);
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
        $testsuite = TestSuite::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:2048',
            'platform' => 'required|string',
            'status' => 'required|string|max:20',
        ]);

        $testsuite->update($validated);
        return response()->json($testsuite);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testsuite = TestSuite::findOrFail($id);
        $testsuite->delete();
        return response()->json(null, 204);
    }
}
