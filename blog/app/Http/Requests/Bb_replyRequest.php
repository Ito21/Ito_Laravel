<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Bb_replyRequest extends FormRequest
{
    public function rules()
    {
        return [
            'bb_reply.bulletin_board_id' => 'required',
            'bb_reply.comment' => 'required|string|max:500',
            'bb_reply.user_id' => 'required',
            'bb_reply.number' => 'required',
        ];
    }
}