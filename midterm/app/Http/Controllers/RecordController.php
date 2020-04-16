<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\record;

class recordController extends Controller
{
    public function index()
    { 
        // $records =DB::table('records')->get(); 
      //  $records = Record::orderBy('record_date')->get();
       //  return view('records.index',compact('records'));
         
        $records = Record::all();
        return view('records.index', compact('records'));
    }
    public function create()
    {
        return view('records.create');
    }

    public function store(Request $request)
    { //  record::create($request->all());
        // return redirect('/');

        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'record_date'=>'required'
        ]);

        $record = new Record;
        $record->first_name = $request->fisrt_name;
        $record->last_ame = $request->last_name;
        $record->email = $request->email;
        $record->phone = $request->phone;
        $record->record_date = $request->record_date;

        $record->save();

        return redirect()->back();  
     }


    public function destroy(Request $request) {

            $record = RecordS::findOrFail($request->id)->delete();    
            return redirect()->back();
        }

      

    public function editedit(Request $request) {

        $record = Records::findOrFail($request->id);
        $id = $request->id;
        return view('records.edit', compact('record'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'record_date'=>'required'
        ]);

        $record = Records::find($request->id);
        $record->first_name = $request->fisrt_name;
        $record->last_ame = $request->last_name;
        $record->email = $request->email;
        $record->phone = $request->phone;
        $record->record_date = $request->record_date;

        $record->save();
        return redirect()->back(); 
    }
    




}
