<?php

namespace App\Http\Controllers\Admin;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Requests\GamesRequest;
use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view('admin.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::all();
        return view('admin.games.create', compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GamesRequest $request)
    {
        $data = $request->validated();
        // Game::create($data);

        $game = new Game();
        $game->fill($data);

        $game->save();

        if(isset($data['languages'])){
            $game->languages()->sync($data['languages']);
        }
        return to_route('admin.games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('admin.games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        $languages = Language::all();
        return view('admin.games.edit', compact('game', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GamesRequest $request, Game $game)
    {
        $data = $request->validated();

        $languages = isset($data['languages']) ? $data['languages'] : [];
        $game->languages()->sync($languages);

        $game->update($data);

        return redirect()->route('admin.games.show', $game);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        // $old_id = $game->id;
        $game->delete();
        return to_route('admin.games.index');
    }
}
