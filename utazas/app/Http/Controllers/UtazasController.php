<?php

namespace App\Http\Controllers;

use App\Apply;
use App\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UtazasController extends Controller
{
    public function index()
    {
        return view('home', [
            'Travels'=>Travel::orderBy('start')->get()
        ]);
    }

    public function create()
    {
        return view('newTravel');
    }

    public function store(Request $request)
    {

        $newTravel = new Travel();
        $newTravel->title = $request->get('title');
        $newTravel->lead = $request->get('lead');
        $newTravel->description = $request->get('description');

        $newTravel->start =  strtotime($request->get('start'));
        $newTravel->end =  strtotime($request->get('end'));
        $newTravel->max = $request->get('max');
        $newTravel->save();


        return redirect('/');
    }

    public function show($Id)
    {
        return view('trip',[
            'travels'=>Travel::find($Id)
        ]);
    }
    public function saveApply($id, Request $request)
    {
        $request->validate([
            'name'=>'required',
            'mail'=>'required|email'



        ]);
        if(Travel::find($id)->max>Apply::where('travel_id','=',$id)->count()){
            $newApply=new Apply();
            $newApply->name=$request->get('name');
            $newApply->mail=$request->get('mail');
            $newApply->phone=$request->get('phone');
            $newApply->travel_id=$id;
            $newApply->save();
            return back();
        }
       return Redirect::back()->withErrors("Nincs több férőhely az utazásra.");

    }
}
