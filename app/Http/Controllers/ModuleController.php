<?php

namespace App\Http\Controllers;

use App\Models\module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
    function show(){
        $modules= DB::select('select * from module left join promotion on module.promo_ref_mid=promotion.id');
        $teachers = DB::select('select * from teachers');
        $promos = DB::select('select * from promotion');
        return view('module',['modules'=>$modules,'teachers'=>$teachers,'promos'=>$promos]);
    }
    public function ajouter(Request $request){
        $data = $request->input();
        try{
            $planning=new module;
            $planning->module = $data['module'];
            $planning->teacher_ref_mid= $data['prof'];
            $planning->promo_ref_mid = $data['promo'];

            $planning->save();
            return redirect('module');
        }
        catch(Exception $e){
            return redirect('module');
        }


    }
    public function updateModule(Request $request,$id) {
        $module = $request->input('module');
        $prof = $request->input('prof_ref_mid');
        $promo = $request->input('promo_ref_mid');

        if ($module!==null){
            DB::update('update module set module = ? where m_id = ?',[$module,$id]);
        }
        if ($prof !==null){
            DB::update('update module set prof_ref_mid = ? where m_id = ?',[$prof,$id]);
        }
        if ($promo !==null){
            DB::update('update module set Prix = ? where m_id = ?',[$promo,$id]);
        }


        return redirect('module');
    }
    public function deletemodule($id){
        DB::delete('delete from module where m_id = ?',[$id]);
        $module=DB::select('select * from module');
        return redirect('module');

    }
}
