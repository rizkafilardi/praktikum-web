<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
{
    $majors = Majors::all();
    return view('majors.index', [
        'majors' => $majors,
        'title' => 'Data Jurusan' // ini dia tambahan pentingnya
    ]);
}

    public function create()
    {
        return view('majors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Majors::create([
            'name' => $request->name
        ]);

        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil ditambahkan!');
    }

    public function show($id)
{
    $major = Majors::findOrFail($id);
    return view('majors.show', compact('major'));
}

    public function edit(Majors $major)
    {
        return view('majors.edit', compact('major'));
    }

    public function update(Request $request, Majors $major)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $major->update([
            'name' => $request->name
        ]);

        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil diupdate!');
    }

    public function destroy(Majors $major)
    {
        $major->delete();
        return redirect()->route('majors.index')->with('success', 'Jurusan berhasil dihapus!');
    }
}
