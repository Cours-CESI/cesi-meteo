<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProbeResource;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::all();
        return response()->json($reports);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $report = new Report;
        $report->temperature = $request->temperature;
        $report->humidity = $request->humidity;
        $report->pressure = $request->pressure;
        $report->sonde_id = $request->sonde_id;
        $report->save();

        return response(status: 201)->json($report);
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        return new ProbeResource($report);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        $report->temperature = $request->temperature;
        $report->humidity = $request->humidity;
        $report->pressure = $request->pressure;
        $report->save();

        return response()->json($report);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        $report->delete();
        return response(status: 204);
    }
}
