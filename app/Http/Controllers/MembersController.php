<?php

namespace App\Http\Controllers;

use App\Models\FamilyCard;
use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function show(Request $request, $family_id)
    {
        $family = FamilyCard::findOrFail($family_id)->load('members');
        return view('family.show_members', compact('family'));
    }

    public function create(Request $request, $family_id)
    {
        $family = FamilyCard::findOrFail($family_id);
        return view('family.create_member', compact('family'));
    }

    public function store(Request $request, $family_id)
    {
        $family = FamilyCard::findOrFail($family_id);
        $data = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
        ]);
        $family->members()->create($data);
        return redirect()->route('family.members', $family_id);
    }

    public function destroy($family_id, $id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect()->route('family.members', $family_id);
    }
}
