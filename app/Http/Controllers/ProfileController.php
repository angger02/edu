<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = Profile::all();
        return view('profile.index', compact('data'));
    }

    public function store(Request $request)
    {
        Profile::create($request->all());
        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);
        $profile->update($request->all());

        return back()->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        Profile::findOrFail($id)->delete(); // soft delete
        return back()->with('success', 'Data berhasil dihapus');
    }
}
