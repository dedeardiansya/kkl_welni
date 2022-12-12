<?php

namespace App\Http\Controllers;

use App\Models\FamilyCard;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function create()
    {
        return view('family.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'no' => 'required',
            'alamat' => 'required',
            'rt_rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
        ]);

        FamilyCard::create($data);

        return redirect()->route('home');
    }

    public function destroy($id)
    {
        FamilyCard::find($id)->delete();
        return redirect()->route('home');
    }

    public function show($id)
    {
        $family = FamilyCard::findOrFail($id);
        return view('family.show', compact('family'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'no' => 'required',
            'alamat' => 'required',
            'rt_rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
        ]);

        FamilyCard::where('id', $id)->update($data);
        return redirect()->back();
    }
}
