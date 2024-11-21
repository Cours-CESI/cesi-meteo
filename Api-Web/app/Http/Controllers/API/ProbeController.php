<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProbeResource;
use App\Models\Probe;
use Illuminate\Http\Request;

class ProbeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $probes = Probe::all();
        return response()->json($probes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $probe = new Probe;
        $probe->ip = $request->ip;
        $probe->name = $request->name;
        $probe->save();

        return response(status: 201)->json($probe);
    }

    /**
     * Display the specified resource.
     */
    public function show(Probe $probe)
    {
        return new ProbeResource($probe);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Probe $probe)
    {
        $probe->name = $request->name;
        $probe->save();

        return response()->json($probe);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Probe $probe)
    {
        $probe->delete();
        return response(status: 204);
    }
}
