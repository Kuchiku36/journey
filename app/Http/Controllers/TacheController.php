<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taches = Tache::all();
        return view('index',compact('taches'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tache.ajouter');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['title' => 'required']);
        
        $tache=new Tache ;

        $tache->title = $request->title ;
        $tache->description = $request->description ;
        $tache->state = 0 ;
        //
        $tache->save();
        return redirect()->route('tache.detail');    }

    /**
     * Display the specified resource.
     */
    public function show(Tache $taches)
    {

        $taches =Tache::all();
        return view('tache.show', compact('taches'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tache $tache)
    {
        return view('tache.edit',compact('tache'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Tache $tache)
    {
        
      
        if($tache->state ===0){
            $tache->update(['state'=>1]);
        }else{
            $tache->update(['state'=>0]);
        }

        return back();
        //
    }

    public function modifier(Request $request, Tache $tache)
    {
    
        $request->validate(['title' => 'required']);

        // $request->Input('title');
        // $tache->update(['title'=>$request]);
        
        // $tache->title = $request->title ;
        // $tache->description = $request->description ;
        // $tache->update(['title','description'=>$tache->title ,$tache->description]);
        Tache::where('id',$tache->id)
                ->update(['title'=>$request->title]);
        Tache::where('id',$tache->id)
                ->update(['description'=>$request->description]);
        // dd($tache->title,$tache->description);
        return redirect()->route('tache.detail');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete(Tache $tache)
    {
        $tache->delete();
        return back();
        //
    }
}
