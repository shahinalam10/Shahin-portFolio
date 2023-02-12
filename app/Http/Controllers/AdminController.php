<?php

namespace App\Http\Controllers;

use App\Models\PortData;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $portdata;

    public function index(Request $request){
        $this->portdata=new PortData();
        $this->portdata->name=$request->name;
        $this->portdata->email=$request->email;
        $this->portdata->subject=$request->subject;
        $this->portdata->message=$request->message;
        $this->portdata->save();
        return redirect('/')->with('message','Message send successfully');
    }
}
