<?php

namespace App\Http\Controllers;

use App\Models\Recruit;
use Illuminate\Http\Request;

class RecruitController extends Controller
{
    public function index ()
    {
        $recruits =Recruit::all();
        return view('recruits.index' , ['recruits' => $recruits]);
    }

    public function show($id)
    {
        $recruit = Recruit::find($id);
        return view('recruits.show' , ['recruit' => $recruit]);
    }

    public function create()
    {
        return view('recruits.create');
    }

    public function store(Request $request)
    {
        $recruit = new Recruit;

        $recruit->title = $request->title;
        $recruit->comprof = $request->comprof ;
        $recruit->jobdes = $request->jobdes ;
        $recruit->appcon = $request->appcon ;
        $recruit->background = $request->background ;
        $recruit->workloca = $request->workloca ;
        $recruit->worktime = $request->worktime ;
        $recruit->interview = $request->interview ;

        $recruit->save();

        return redirect('/recruits');
    }
}

