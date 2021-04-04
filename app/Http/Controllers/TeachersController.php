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
        public function deletep($id){
        DB::delete('delete from groupe where t_id=?',[$id]);
        return redirect('Teacher');
    }
        public function updateProf(Request $request) {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');

      DB::update('update teachers set firstname = ? where t_id = ?',[$firstname,$id]);
      DB::update('update teachers set lastname = ? where t_id = ?',[$lastname,$id]);
      DB::update('update teachers set email = ? where t_id = ?',[$email,$id]);



           return back();
    }
    
            public function updatep($id){
        $teachers = DB::select('select * from teachers where t_id=?',[$id]);
        
        return view('teacherupdate','teachers'=>$teachers);
    }
    
    
}
