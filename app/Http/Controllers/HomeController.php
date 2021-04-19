<?php

namespace App\Http\Controllers;
use PDF;
use Carbon\Carbon;
use App\ScheduleMeeting;
use Illuminate\Http\Request;
use App\Notifications\GlobalNotif;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = ScheduleMeeting::latest()->get();
        return view('home',compact('data'))->with('i');
    }

    public function schedule()
    {
        return view('schedule.front');

    }

    public function postschedule(Request $request)
    {
        try {
            $dateTime= Carbon::parse($request->date.' '.$request->time)->format('Y-m-d H:i:s');
        } catch (\Throwable $th) {
            $dateTime= Carbon::parse($request->date)->format('Y-m-d H:i:s');
        }
        
        $data = new ScheduleMeeting();
        $data->type_instansi   = $request->typeInstansi;
        $data->instansi   = $request->instansi;
        $data->cp         = $request->cp;
        $data->phone      = $request->phone;
        $data->category   = $request->category;
        $data->schedule   = $dateTime;
        $data->location   = $request->location;
        $data->audient    = $request->audient;
        $data->description= $request->description;
        $data->post_by    = $request->header('User-Agent');
        $data->save();



        $param = array('message'=>'New Request at Meeting Schedule');
        $data->notify(new GlobalNotif($param));
        
        return view('schedule.done');

       




        // dd($tele);

    }

    public function schedulepdf($id)
    {
        $data = ScheduleMeeting::findOrFail($id);

        /* $param = array('message'=>'New Request at Meeting Schedule');
        $data->notify(new GlobalNotif($param)); */

        return view('schedule.done',compact('data'));
        /* $pdf = PDF::loadView('schedule.pdf', [
            // 'img'=> base64_encode($img),
            'data' => $data
            ])
        ->setPaper('a4', 'portrait')->setWarnings(false);
        return $pdf->download('schedule-'.\Str::slug($data->instansi).'.pdf'); */
    }
}
