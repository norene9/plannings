<?php

namespace App\Http\Controllers;

use App\Models\groupe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class groupeController extends Controller
{
    function show(){
        $groups = DB::select('select * from groupe');
        $promos = DB::select('select * from promotion');
        return view('groups',['groups'=>$groups,'promos'=>$promos]);
    }
    public function ajouterg(Request $request){
        $data = $request->input();
        try{
            $groupe=new groupe();
            $groupe->number = $data['group'];
            $groupe->promo_ref_gid = $data['promo'];


            $groupe->save();
            return redirect('groups');
        }
        catch(Exception $e){
            return redirect('groups');
        }


    }
    public function deleteg($id){
        DB::delete('delete from groupe where g_id=?',[$id]);
        return redirect('groups');
    }
    function groupe1cpi()
    {$groups = DB::select('select * from groupe where promo_ref_gid=1');
        $promos = DB::select('select * from promotion');
        return view('groups',['groups'=>$groups,'promos'=>$promos]);
    }

    function groupe2cpi()
    {
        $groups = DB::select('select * from groupe where promo_ref_gid=2');
        $promos = DB::select('select * from promotion');
        return view('groups',['groups'=>$groups,'promos'=>$promos]);
    }

    function groupe1cs()
    {
        $groups = DB::select('select * from groupe where promo_ref_gid=3');
        $promos = DB::select('select * from promotion');
        return view('groups',['groups'=>$groups,'promos'=>$promos]);
    }

    function groupe2cssiw()
    {
        $groups = DB::select('select * from groupe where promo_ref_gid=4');
        $promos = DB::select('select * from promotion');
        return view('groups',['groups'=>$groups,'promos'=>$promos]);
    }
    function groupe2csisi()
    {
        $groups = DB::select('select * from groupe where promo_ref_gid=5');
        $promos = DB::select('select * from promotion');
        return view('groups',['groups'=>$groups,'promos'=>$promos]);
    }
    function groupe3cssiw()
    {
        $groups = DB::select('select * from groupe where promo_ref_gid=6');
        $promos = DB::select('select * from promotion');
        return view('groups',['groups'=>$groups,'promos'=>$promos]);
    }
    function groupe3csisi()
    {
        $groups = DB::select('select * from groupe where promo_ref_gid=7');
        $promos = DB::select('select * from promotion');
        return view('groups',['groups'=>$groups,'promos'=>$promos]);
    }
      public function updateGroupe(Request $request,$id) {
        $number = $request->input('number');
        $promo_ref_gid = $request->input('promo_ref_gid');
        

        if ($number!==null){
            DB::update('update groupe set number = ? where m_id = ?',[$number,$id]);
        }
        if ($promo_ref_gid !==null){
            DB::update('update groupe set promo_ref_gid = ? where m_id = ?',[$promo_ref_gid,$id]);
        }
        


        return redirect('Teacher');
    }

}
