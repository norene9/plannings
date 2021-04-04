<?php

namespace App\Http\Controllers;

use App\Models\planning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\teachers;
class TeachersController extends Controller
{
    function show(){
        $teachers = DB::select('select * from teachers');
        return view('teacher',['teachers'=>$teachers]);
    }


    public function ajouter(Request $request){
        $data = $request->input();
        try{
            $planning=new teachers;
            $planning->firstname = $data['firstname'];
            $planning->lastname = $data['sname'];
            $planning->email = $data['email'];

            $planning->save();
            return redirect('Teacher');
        }
        catch(Exception $e){
            return redirect('Teacher');
        }


    }
}
