<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(){

        $games = Game::with('developers', 'genres')->paginate(5);
        if ($games) {
            return response()->json([
                'success' => true,
                'results' => $games
            ]);
        } else {
            return response()->json([
                'success' => false,
                'results' => null
            ], 404);
        }
    }
    public function gamesSales()
    {
        $games = Game::where('discount_value','>',0)->orderByDesc('discount_value')->paginate(3);
        if ($games) {
            return response()->json([
                'success' => true,
                'results' => $games
            ]);
        } else {
            return response()->json([
                'success' => false,
                'results' => null
            ], 404);
        }
    }
    public function gamesFlagged()
    {
        $games = Game::with('developers', 'genres')->orderByDesc('flagged')->first();
        if ($games) {
            return response()->json([
                'success' => true,
                'results' => $games
            ]);
        } else {
            return response()->json([
                'success' => false,
                'results' => null
            ], 404);
        }
    }
}
