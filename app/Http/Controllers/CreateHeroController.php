<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class CreateHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = Hero::orderBy('heroname', 'desc')->paginate(5);
        return view('heroes.index')->with('heroes', $heroes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('heroes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'heroname' => 'required',
            'stats' => 'required',
            'skill1' => 'required',
            'skill2' => 'required',
            'skill3' => 'required',
            'skill4' => 'required'
        ]);

        $hero = new Hero;

        $hero->heroname = $request->input('heroname');
        $hero->stats = $request->input('stats');
        $hero->skill1 = $request->input('skill1');
        $hero->skill2 = $request->input('skill2');
        $hero->skill3 = $request->input('skill3');
        $hero->skill4 = $request->input('skill4');
        $hero->save();

        return redirect('/heroes')->with('success', 'Hero Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $heroes = Hero::find($id);
        return view('heroes.show')->with('heroes', $heroes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
