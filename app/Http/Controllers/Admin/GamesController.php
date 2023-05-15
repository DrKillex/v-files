<?php

namespace App\Http\Controllers\Admin;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Requests\GamesRequest;
use App\Http\Controllers\Controller;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games=Game::all();
        return view('games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GamesRequest $request)
    {
        $request->validated();

        $data=$request->all();
        $newGame->original_title= $data['original_title'];
        $newGame->title= $data['title'];
        $newGame->description= $data['description'];
        $newGame->developer= $data['developer'];
        $newGame->publisher= $data['publisher'];
        $newGame->released= $data['released'];
        $newGame->release = $data['release'];
        $newGame->price = $data['price'];
        $newGame->required_space = $data['required_space'];
        $newGame->genres=$data['genres'];
        $newGame->singleplayer= $data['singleplayer'];
        $newGame->multiplayer= $data['multiplayer'];
        $newGame->local_multiplayer= $data['local_multiplayer'];
        $newGame->cross_play= $data['cross_play'];
        $newGame->audio_language = $data['audio_language'];
        $newGame->interface_language = $data['interface_language'];
        $newGame->dx_version = $data['dx_version'];
        $newGame->vote = $data['vote'];
        $newGame->pegi= $data['pegi'];
        $newGame->ram= $data['ram'];
        $newGame->discount_value = $data['discount_value'];
        $newGame->realese_version= $data['realese_version'];
        $newGame->thumb= $data['thumb'];
        $newGame->save();
        return to_route('games.index');
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
    public function destroy(Game $game)
    {
        $game->delete();
        return to_route('games.index');
    }
}
