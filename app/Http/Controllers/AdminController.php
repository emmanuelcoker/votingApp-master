<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Candidate;
use App\Faculty;
use App\Department;
use App\Seat;

class AdminController extends Controller
{
    public function showIndex(){
        $users = User::all()->except(1);
        $seats = Seat::all();
        $departments = Department::all();
        $faculties = Faculty::all();
        return view('admin.index')
        ->withUsers($users)
        ->withSeats($seats)
        ->withDepartments($departments)
        ->withFaculties($faculties);
    }

    public function getCandidates(){
        $candidates = Candidate::all();
        return view('admin.candidates')->withCandidates($candidates);
    }

    public function addCandidate(Request $data){
        User::addCandidate($data->id,$data->seat);
        return redirect()->route('admin.index');
    }
}
