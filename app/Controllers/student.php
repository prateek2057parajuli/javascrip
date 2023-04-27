<?php
namespace App\Controllers;

class Student extends BaseController
{
    public function index()


    {
        $db = Database::connect();
        $query = $db->query("SELECT * FROM student");
        $studentList = $query->getResultArray();
    
        return view('Student/index',['data'=>$studentList]);
    }
    public function new (){
         return view('student/new');
    }
}