<?php

namespace App\Http\Controllers;

use App\Models\FamilyCard;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $search = request()->query('search');
        if ($search) {
            $families = FamilyCard::where('no', 'LIKE', "%{$search}%")->paginate(1)->appends('search', $search);
        } else {
            $families = FamilyCard::paginate(1);
        }
        return view('home', compact('families'));
    }
}
