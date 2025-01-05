<?php

namespace App\Http\Controllers\Team;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        $categoryTeams = Department::with('team')->get();
        return view('pages.Team.team',compact('categoryTeams'));
    }
}
