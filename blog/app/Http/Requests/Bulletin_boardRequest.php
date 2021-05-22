<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Bulletin_boardRequest extends FormRequest
{
    public function rules()
    {
        return [
            'bulletin_board.title' => 'required|string|max:50',
            'bulletin_board.comment' => 'required|string|max:500',
        ];
    }
}