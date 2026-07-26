<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkProgram;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = WorkProgram::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.admin.program', compact('programs'));
    }

    public function create()
    {
        return view('pages.admin.program-form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'status' => 'required|in:planned,ongoing,completed',
        ]);

        $program = new WorkProgram();
        $program->name = $request->name;
        $program->description = $request->description;
        $program->status = $request->status;
        $program->period_id = 1; // Assuming default period for now
        $program->save();

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil ditambahkan');
    }

    public function edit(WorkProgram $program)
    {
        return view('pages.admin.program-form', compact('program'));
    }

    public function update(Request $request, WorkProgram $program)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'status' => 'required|in:planned,ongoing,completed',
        ]);

        $program->name = $request->name;
        $program->description = $request->description;
        $program->status = $request->status;
        $program->save();

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil diupdate');
    }

    public function destroy(WorkProgram $program)
    {
        $program->delete();
        return redirect()->route('admin.program.index')->with('success', 'Program berhasil dihapus');
    }
}
