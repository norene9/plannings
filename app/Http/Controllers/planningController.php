<?php

namespace App\Http\Controllers;

use App\Models\SeanceCours;
use Illuminate\Http\Request;
use App\Models\planning;
use Illuminate\Support\Facades\DB;

class planningController extends Controller
{
    function show()
    {
        $data = DB::select('select * from planning');
        $seances = DB::select('select * from seancecours left join days on day_ref_scid=d_id UNION select * from seancetd left join days on day_ref_stid=d_id ');
        $teachers = DB::select('select * from teachers');
        $promos = DB::select('select * from promotion');
        $modules = DB::select('select *from module left join teachers on teacher_ref_mid=t_id');
        $days = DB::select('select * from days');
        $groups = DB::select('select * from groupe');
        return view('planning', ['emploi' => $data, 'seances' => $seances, 'groups' => $groups,
            'teachers' => $teachers, 'promos' => $promos, 'modules' => $modules, 'days' => $days]);
    }

    function planning1cpi()
    {
        $data = DB::select('select * from planning');
        $seances = DB::select('select * from seancecours  left join days on day_ref_scid=d_id where seancecours.promo_ref_scid=1 UNION select * from seancetd  left join days on day_ref_stid=d_id where seancetd.promo_ref_stid=1 ');
        $teachers = DB::select('select * from teachers');
        $promos = DB::select('select * from promotion where id=1');
        $modules = DB::select('select *from module left join teachers on teacher_ref_mid=t_id  where module.promo_ref_mid=1');
        $days = DB::select('select * from days');
        $groups = DB::select('select * from groupe where promo_ref_gid=1');
        $planning=DB::select('select * from planning');
        return view('planning', ['emploi' => $data, 'seances' => $seances, 'groups' => $groups,
            'teachers' => $teachers, 'promos' => $promos, 'modules' => $modules, 'days' => $days,'planning'=>$planning]);
    }

    function planning2cpi()
    {
        $data = DB::select('select * from planning');
        $seances = DB::select('select * from seancecours left join days on day_ref_scid=d_id where promo_ref_scid=2 UNION select * from seancetd  left join days on day_ref_stid=d_id where promo_ref_scid=2 ');
        $teachers = DB::select('select * from teachers');
        $promos = DB::select('select * from promotion where id=2');
        $modules = DB::select('select *from module  left join teachers on teacher_ref_mid=t_id where promo_ref_mid=2');
        $days = DB::select('select * from days');
        $groups = DB::select('select * from groupe where promo_ref_gid=2');
        $planning=DB::select('select * from planning');
        return view('planning', ['emploi' => $data, 'seances' => $seances, 'groups' => $groups,
            'teachers' => $teachers, 'promos' => $promos, 'modules' => $modules, 'days' => $days,'planning'=>$planning]);
    }

    function planning1cs()
    {
        $data = DB::select('select * from planning');
        $seances = DB::select('select * from seancecours left join days on day_ref_scid=d_id where promo_ref_scid=3 UNION select * from seancetd  left join days on day_ref_stid=d_id where promo_ref_scid=3');
        $teachers = DB::select('select * from teachers');
        $promos = DB::select('select * from promotion where id=3');
        $modules = DB::select('select *from module  left join teachers on teacher_ref_mid=t_id where promo_ref_mid=3');
        $days = DB::select('select * from days');
        $groups = DB::select('select * from groupe where promo_ref_gid=3');
        $planning=DB::select('select * from planning');
        return view('planning', ['emploi' => $data, 'seances' => $seances, 'groups' => $groups,
            'teachers' => $teachers, 'promos' => $promos, 'modules' => $modules, 'days' => $days,'planning'=>$planning]);
    }

    function planning2cssiw()
    {
        $data = DB::select('select * from planning');
        $seances = DB::select('select * from seancecours left join days on day_ref_scid=d_id where seancecours.promo_ref_scid=4 UNION select * from seancetd  left join days on day_ref_stid=d_id where seancetd.promo_ref_stid=4 ');
        $teachers = DB::select('select * from teachers');
        $promos = DB::select('select * from promotion where id=4');
        $modules = DB::select('select *from module  left join teachers on teacher_ref_mid=t_id where module.promo_ref_mid=4');
        $days = DB::select('select * from days');
        $groups = DB::select('select * from groupe where promo_ref_gid=4');
        $dimanche=DB::select('select * from seancecours left join days on day_ref_scid=2 ');
        $planning=DB::select('select * from planning');
        return view('planning', ['emploi' => $data, 'seances' => $seances, 'groups' => $groups,
            'teachers' => $teachers, 'promos' => $promos, 'modules' => $modules, 'days' => $days,'planning'=>$planning,'dimanche'=>$dimanche]);
    }
    function planning2csisi()
    {
        $data = DB::select('select * from planning');
        $seances = DB::select('select * from seancecours left join days on day_ref_scid=d_id where seancecours.promo_ref_scid=5 UNION select * from seancetd  left join days on day_ref_stid=d_id where seancetd.promo_ref_stid=5');
        $teachers = DB::select('select * from teachers');
        $promos = DB::select('select * from promotion where id=5');
        $modules = DB::select('select *from module  left join teachers on teacher_ref_mid=t_id where promo_ref_mid=5');
        $days = DB::select('select * from days');
        $groups = DB::select('select * from groupe where promo_ref_gid=5');
        $planning=DB::select('select * from planning');
        return view('planning', ['emploi' => $data, 'seances' => $seances, 'groups' => $groups,
            'teachers' => $teachers, 'promos' => $promos, 'modules' => $modules, 'days' => $days,'planning'=>$planning]);
    }
    function planning3cssiw()
    {
        $data = DB::select('select * from planning');
        $seances = DB::select('select * from seancecours left join days on day_ref_scid=d_id where seancecours.promo_ref_scid=6 UNION select * from seancetd  left join days on day_ref_stid=d_id where seancetd.promo_ref_stid=6');
        $teachers = DB::select('select * from teachers');
        $promos = DB::select('select * from promotion where id=6');
        $modules = DB::select('select *from module  left join teachers on teacher_ref_mid=t_id where module.promo_ref_mid=6');
        $days = DB::select('select * from days');
        $groups = DB::select('select * from groupe where promo_ref_gid=6');
        $planning=DB::select('select * from planning');
        return view('planning', ['emploi' => $data, 'seances' => $seances, 'groups' => $groups,
            'teachers' => $teachers, 'promos' => $promos, 'modules' => $modules, 'days' => $days,'planning'=>$planning]);
    }
    function planning3csisi()
    {
        $data = DB::select('select * from planning');
        $seances = DB::select('select * from seancecours left join days on day_ref_scid=d_id where promo_ref_scid=7 UNION select * from seancetd  left join days on day_ref_stid=d_id where promo_ref_scid=7 ');
        $teachers = DB::select('select * from teachers');
        $promos = DB::select('select * from promotion where id=7');
        $modules = DB::select('select *from module  left join teachers on teacher_ref_mid=t_id where module.promo_ref_mid=7');
        $days = DB::select('select * from days');
        $dimanche=DB::select('select *from seancecours,seancetd where seancecours.day_ref_scid=2 or seancetd.day_ref_stid=2');
        $groups = DB::select('select * from groupe where promo_ref_gid=7');
        $planning=DB::select('select * from planning');
        return view('planning', ['emploi' => $data, 'seances' => $seances, 'groups' => $groups,
            'teachers' => $teachers, 'promos' => $promos, 'modules' => $modules, 'days' => $days,'planning'=>$planning,'dimanche'=>$dimanche]);
    }
    public function ajouterseance(Request $request){
        $data = $request->input();
        if ($data['type']=='cours'){
            try{
                $seance=new SeanceCours();
                $seance->module = $data['module'];
                $seance->teacher = $data['prof'];
                $seance->salle = $data['salle'];
                $seance->planning_ref_sid = $data['planning'];
                $seance->promo_ref_scid = $data['promo'];
                $seance->time = $data['time'];
                $seance->group = $data['group'];
                $seance->day_ref_scid = $data['day'];
                $seance->save();
                return Redirect::back();
            }
            catch(Exception $e){
                return Redirect::back();
            }}
        else if($data['type']=='td'){
            try{
                $seance=new SeanceTd();
                $seance->module = $data['module'];
                $seance->teacher = $data['prof'];
                $seance->salle = $data['salle'];
                $seance->planning_ref_sid = $data['planning'];
                $seance->promo_ref_scid = $data['promo'];
                $seance->time = $data['time'];
                $seance->group = $data['group'];
                $seance->save();
                return redirect::back();
            }
            catch(Exception $e){
                return redirect::back();
            }
            }
        }




}
