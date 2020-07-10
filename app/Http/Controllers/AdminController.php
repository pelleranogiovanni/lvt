<?php

namespace App\Http\Controllers;

use App\User;
use App\Subject;
use App\Delivery;
use Illuminate\Http\Request;
use App\Traits\StudentsTrait;
use App\Traits\TeachersTrait;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function teacher()
    {
        $year = now()->format('Y');
        $subjects = TeachersTrait::subjects($year);

        return view('admin.teachers.index', compact('subjects'));
    }

    public function student()
    {
        // $posts = Post::where('user_id',Auth::user()->id)->where('course_id',$subject->course_id)->with('annotations')->get();

        $user = Auth::user();
        $enrol = StudentsTrait::enrollment(2020);
        $subjects =  $enrol->subjects;
        $ids = $subjects->modelkeys();
        $subjects = Subject::whereIn('id',$ids)->with('posts')->get();

        $deliveries = Delivery::where('user_id', $user->id)->get();
        $jobs = StudentsTrait::pendding();


        return view('admin.students.index', compact('user', 'jobs', 'deliveries','subjects'));
    }
}
