<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    public function create()
    {
        return view('teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required'
        ]);

        Team::create($request->all());

        return redirect()->route('teams.index')->with('success', 'Anggota tim berhasil ditambahkan');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('teams.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);
        $team->update($request->all());

        return redirect()->route('teams.index')->with('success', 'Anggota tim berhasil diperbarui');
    }

    public function destroy($id)
    {
        Team::findOrFail($id)->delete();
        return redirect()->route('teams.index')->with('success', 'Anggota tim dihapus (Soft Delete)');
    }
}
