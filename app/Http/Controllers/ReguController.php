<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Regu;
use Illuminate\Http\Request;

class ReguController extends Controller
{
    public function index()
    {
        return view('teams', [
            "title" => "Teams",
            "teams" => Regu::all(),
            "anggota" => Anggota::all()
        ]);
    }
}
