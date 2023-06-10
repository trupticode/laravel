<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
Use App\Models\WorkMaster;
use DB;

class WorkMasterController extends Controller
{
    public function funCreate(Request $data)
    {
        // dd($data);
        $workmaster = WorkMaster::create([
            'Div' => $data->Div,
            'Work_Id' => $data->Work_Id,
            'Sub_Div'=>$data->Sub_Div,
            'F_H' => $data->F_H,
            'Work_Nm'=>$data->Work_Nm,
            'Tnd_Amt'=>$data->Tnd_Amt,
            'Agency_Nm'=>$data->Agency_Nm,
            'DSR_year'=>$data->DSR_year,
            'WO_No'=>$data->WO_No,
            'Wo_Dt'=>$data->Wo_Dt,
            'Above_Below' => $data->Above_Below,
            'A_B_Pc' => $data->A_B_Pc,
            'WO_Amt'=>$data->WO_Amt,
            'Period' => $data->Period,
            'Perd_Unit'=>$data->Perd_Unit,
            'Stip_Comp_Dt'=>$data->Stip_Comp_Dt,
            // 'tm_lm_extension'=>$data->tm_lm_extension,
            // 'rs_dt_comp'=>$data->rs_dt_comp,
            'Tot_Exp'=>$data->Tot_Exp,
            'actual_complete_date'=>$data->actual_complete_date

        ]);
        //event(new Registered($user));

        Alert::success('Congrats', 'You\'ve Successfully Registered');

        return redirect('workmaster');



    }


    public function index() 
    {
        $users = DB::select('select * from work_masters');
        return view('workmasterview',['users'=>$users]);
     }

}
