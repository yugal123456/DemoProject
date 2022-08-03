<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\People;
use App\Models\Branche;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ServiceController extends Controller
{
    public function service($locale)
    {
        App::setLocale($locale);
        return view("service");
    }
    public function students(){
        return Student::limit(1)->get();
    }
    public function addStudent(){
        $student = new Student;
        $student->name = "Darshit";
        $student->email = "darshit.pandey@gmail.com";
        $student->mobile = "987878788";
        if($student->save()){
            echo "<h2>Student Added Successfully.</h2>";
        }
    }
    public function fetchStudent(){
    //    return Student::find(2)->branch;
        //   return Branche::find(1)->student;
        // return Student::find(3)->course;
        // return Course::find(1)->student;
        return People::find(1)->homeInformation;
    }
}
