<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subdivision;
use RealRashid\SweetAlert\Facades\Alert;
use DB;


class SubdivisionController extends Controller
{
    public function funCreate(Request $data)
    {
        // dd($data);
        $subdivision = Subdivision::create([
            'region' => $data->region,
            'circle' => $data->circle,
            'division_name'=>$data->division_name,
            'subdivision_name' => $data->subdivision_name,
            'address1'=>$data->address1,
            'address2'=>$data->address2,
            'place'=>$data->place,
            'email'=>$data->email,
            'phone_no'=>$data->phone_no,
            'designation'=>$data->designation
        ]);

        //event(new Registered($user));
        Alert::success('Success', 'You\'ve Successfully Registered');
        return redirect('subdivision');


    }
    public function index() 
    {
        $users = DB::select('select * from subdivisions');
        return view('viewsubdivision',['users'=>$users]);
     }

    //  public function destroy($id) 
    //  {
    //     $user = User::where('id', $id)->firstorfail()->delete();
    //     echo ("User Record deleted successfully.");
    //     return redirect()->route('users.index');
    //  }
      
}
