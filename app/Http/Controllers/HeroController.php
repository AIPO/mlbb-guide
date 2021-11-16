<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHeroRequest;
use App\Models\Hero;
use App\Models\HeroRole;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = Hero::withCount('roles')->get();
        return view('heroes.index', compact('heroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = HeroRole::all();
        return view('heroes.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHeroRequest $request)
    {
        $hero = Hero::create($request->validated());
        $hero->roles()->attach($request->roles);

        return redirect()->route('heroes.show', $hero);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Hero $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        $hero->load('roles', 'lines');
        return view('heroes.show', compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Hero $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Hero $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Hero $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        //
    }
}
