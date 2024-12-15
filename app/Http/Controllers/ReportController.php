<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = auth()->user()->reports;
        return view('report.index', compact('reports'));
    }

    public function create()
    {
        return view('report.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'report_number' => 'required|unique:reports',
            'description' => 'required',
        ]);

        auth()->user()->reports()->create([
            'report_number' => $request->report_number,
            'description' => $request->description,
            'status_id' => 1, // Установите статус по умолчанию
            'user_id' => Auth::user()-id,
        ]);

        return redirect()->route('dashboard');
    }
}
