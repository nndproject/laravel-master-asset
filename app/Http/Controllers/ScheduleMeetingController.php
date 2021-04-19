<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\ScheduleMeeting;
use Illuminate\Http\Request;
use App\Notifications\GlobalNotif;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MeetingScheduleExport;
use Illuminate\Support\Facades\Storage;

class ScheduleMeetingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ScheduleMeeting::latest()->get();
        return view('home',compact('data'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $dateTime= Carbon::parse($request->date.' '.$request->time)->format('Y-m-d H:i:s');
        } catch (\Throwable $th) {
            $dateTime= Carbon::parse($request->date)->format('Y-m-d H:i:s');
        }

        $data = new ScheduleMeeting();
        $data->type_instansi   = $request->type_instansi;
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

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ScheduleMeeting::findOrFail($id);
        return view('schedule.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'instansi' => 'required',
         ]);
   
         if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
         }
        
        try {
            $dateTime= Carbon::parse($request->date.' '.$request->time)->format('Y-m-d H:i:s');
        } catch (\Throwable $th) {
            $dateTime= Carbon::parse($request->date)->format('Y-m-d H:i:s');
        }

        $data = ScheduleMeeting::findOrFail($id);
        $data->type_instansi   = $request->type_instansi;
        $data->instansi   = $request->instansi;
        $data->cp         = $request->cp;
        $data->phone      = $request->phone;
        $data->category   = $request->category;
        $data->schedule   = $dateTime;
        $data->location   = $request->location;
        $data->audient    = $request->audient;
        $data->description= $request->description;
        $data->status     = $request->status;
        $data->save();


        Session::flash('message', 'Update successfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ScheduleMeeting::findOrFail($id)->delete();
        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('home');
    }

    public function export(Request $request) {

        $this->validate($request, [
            'export_type' => 'required'
        ]);
        
        $filename='Report Meeting Schedule '.Carbon::now()->format('Y-M-d').'.xlsx';
        $data = ScheduleMeeting::latest()->get();
        return Excel::download(new MeetingScheduleExport($data), $filename);

        /* return view('schedule.export', [
            'data' => ScheduleMeeting::latest()->get(),
            'i'     => ''
        ]); */



    }
}
