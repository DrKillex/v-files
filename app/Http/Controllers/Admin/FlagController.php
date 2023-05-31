<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class FlagController extends Controller
{
    public function update($id)
    {
        $game = Game::find($id);
        if($game){
            $flagged=Game::where('flagged',1)->where('id','!=',$game->id)->first();
            if($flagged){
                $flagged->flagged=0;
                $flagged->update();
            }  
            $game->flagged=1;
            $game->update();               
        }
        return to_route('admin.flags.index');
    }
    public function index()
    {
        $games = Game::all()->sortByDesc('flagged');
        return view('admin.flags.index', compact('games'));
    }
}
