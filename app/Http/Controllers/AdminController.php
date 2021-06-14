<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Candidate;
use App\Faculty;
use App\Department;
use App\Seat;
use App\Priviledges;

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

    public function searchUser(Request $request){
        $search = $request->input('search');
        $users = User::where('regno',$search)->get();
        $seats = Seat::all();
        $departments = Department::all();
        $faculties = Faculty::all();
        return view('admin.index')
        ->withUsers($users)
        ->withSeats($seats)
        ->withDepartments($departments)
        ->withFaculties($faculties);
    }

    public function searchCandidate(Request $request){
        $search = $request->input('search');
        $candidates = Candidate::where('regno',$search)->get();
        return view('admin.candidates')->withCandidates($candidates);
    }

    public function getCandidates(){
        $candidates = Candidate::all();
        return view('admin.candidates')->withCandidates($candidates);
    }

    public function addCandidate(Request $data){
        User::addCandidate($data->id,$data->seat,$data->priviledge,$data->profile_img);
        return redirect()->route('admin.index');
    }

    public function addPriviledge(Request $request){
        $priviledge = Priviledges::Create([
            'type' => $request->input('priviledge')
        ]);
        return redirect()->route('admin.candidates');
    }

    public function addSeat(Request $request){
        $seat = Seat::Create([
            'position' => $request->input('seat')
        ]);
        return redirect()->route('admin.candidates');
    }

    public function addDepartment(Request $request){
        $department = Department::Create([
            'name' => $request->input('department'),
            'faculty_id' => $request->input('faculty')
        ]);
        return redirect()->route('admin.department');
    }

    public function addFaculty(Request $request){
        $faculty = Faculty::Create([
            'name' => $request->input('faculty')
        ]);
        return redirect()->route('admin.faculty');
    }

    public function department(){
        $departments = Department::all();
        $faculties = Faculty::all();
        return view('admin.department')
        ->withDepartments($departments)
        ->withFaculties($faculties);
    }

    public function faculty(){
         $faculties = Faculty::all();
        return view('admin.faculty')->withFaculties($faculties);
    }

    public function seat(){
        $seats = Seat::all();
        return view('admin.seat')->withseats($seats);
    }


    //edit 


    //delete sections

    public function destroyStudent($id){
        $user = User::find($id);
        $user->delete();
        return  redirect()->route('admin.index');
    }
}
