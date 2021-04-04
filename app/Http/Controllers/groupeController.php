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
            return back();
        }
        catch(Exception $e){
            return back();
        }


    }
    public function updateg($id){
        $groups = DB::select('select * from groupe where g_id=?',[$id]);
        $promos = DB::select('select * from promotion');
        return view('groupeupdate',['groups'=>$groups,'promos'=>$promos]);
    }
    public function deleteg($id){
        DB::delete('delete from groupe where g_id=?',[$id]);
        return back();
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
      public function updateGroupe(Request $request) {
        $number = $request->input('group');
        $promo_ref_gid = $request->input('promo');
    $id=$request->input('id');


            DB::update('update groupe set number = ? where g_id = ?',[$number,$id]);


            DB::update('update groupe set promo_ref_gid = ? where g_id = ?',[$promo_ref_gid,$id]);




        return back();
    }

}
