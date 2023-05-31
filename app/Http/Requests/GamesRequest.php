<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GamesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'original_title'=>'required|max:150',
            'title'=>'max:150',
            'description'=>'required',
            'released'=>'required|boolean',
            'release'=>'required|date',
            'price'=>'required|numeric|decimal:0,2|max:999999',
            'required_space'=>'required|numeric|max_digits:255',
            'singleplayer'=>'required|boolean',
            'multiplayer'=>'required|boolean',
            'local_multiplayer'=>'required|boolean',
            'cross_play'=>'required|boolean',
            'dx_version'=>'required|numeric',
            'vote'=>'required|numeric',
            'pegi'=>'required|numeric',
            'ram'=>'required|numeric',
            'genres'=>'exists:genres,id',
            'discount_value'=>'required|numeric|min_digits:1|max_digits:99',
            'realese_version'=>'required|max:100',
            'thumb'=>'image',
            'image'=>'image',
            'windows'=>'required|boolean',
            'mac'=>'required|boolean',
            'linux'=>'required|boolean'

          /*'thumb' => 'image|max:2048',*/

        ];
    }
}
