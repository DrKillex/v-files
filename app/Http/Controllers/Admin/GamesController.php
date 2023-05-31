<?php

namespace App\Http\Controllers\Admin;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Requests\GamesRequest;
use App\Http\Controllers\Controller;
use App\Models\Genre;
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
    public function create(Game $game)
    {
        $genres = Genre::all();
        return view('admin.games.create', compact('game','genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GamesRequest $request)
    {
        // $data = $request->validated();
        // $newRecord = new Game();

        // if (isset($data['thumb'])) {
        //     $data['thumb'] = Storage::put('uploads', $data['thumb']);
        // }
        // $newRecord->fill($data);
        // $newRecord->save();

        // return redirect()->route('admin.games.show', $newRecord);


        $data = $request->validated();

        $game = new Game();


        $game->slug = Str::slug($data['title'], '-');
        if (isset($data['thumb'])) {
            $game->thumb = Storage::put('uploads', $data['thumb']);
        }
        if (isset($data['image'])) {
            $game->image = Storage::put('uploads', $data['image']);
        }

        $game->slug =  Str::slug($data['original_title']);
        $game->fill($data);
        $game->save();
        if(isset($data['genres'])){
            $game->genres()->sync($data['genres']);
        }

        return redirect()->route('admin.games.index')->with('message', 'Post creato con successo');
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
        $genres = Genre::all();
        return view('admin.games.edit', compact('game','genres'));
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


        if (isset($data['thumb'])) {

            if ($game->thumb) {
                Storage::delete($game->thumb);
            }

            $game->thumb = Storage::put('uploads', $data['thumb']);
        }

        if (isset($data['image'])) {

            if ($game->image) {
                Storage::delete($game->image);
            }

            $game->image = Storage::put('uploads', $data['image']);
        }

        $genres = isset($data['genres']) ? $data['genres'] : [];
        $game->genres()->sync($genres);
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
        // Storage::delete($game->thumb);
        // $game->delete();
        // return to_route('admin.games.index');

        $old_id = $game->id;

        if ($game->thumb) {
            Storage::delete($game->thumb);
        }
        if ($game->image) {
            Storage::delete($game->image);
        }

        $game->delete();

        return redirect()->route('admin.games.index')->with('message', "Post $old_id eliminato con successo");
    }
}
