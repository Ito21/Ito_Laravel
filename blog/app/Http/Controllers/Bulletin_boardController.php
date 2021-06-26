<?php

namespace App\Http\Controllers;

use App\Bulletin_board;
use App\Bb_reply;
use App\Http\Requests\Bulletin_boardRequest;
use App\Http\Requests\Bb_replyRequest;

class Bulletin_boardController extends Controller
{
    public function bulletin_board(Bulletin_board $bulletin_board)
    {
        return view('bulletin_board')->with(['bulletin_boards' => $bulletin_board->getPaginateByLimit()]);
    }
    
    public function bulletin_board_show(Bulletin_board $bulletin_board)
    {
        $bb_replies = Bb_reply::where('bulletin_board_id', $bulletin_board->id)->orderBy('created_at', 'DESC')->paginate(20);
        return view('bulletin_board_show')->with(['bulletin_board' => $bulletin_board])->with(['bb_replies' => $bb_replies]);
    }
    
    public function bulletin_board_create()
    {
        return view('bulletin_board_create');
    }
    
    public function store(Bulletin_board $bulletin_board, Bulletin_boardRequest $request)
    {
        $input = $request['bulletin_board'];
        $bulletin_board->fill($input)->save();
        return redirect('/bulletin_board/' . $bulletin_board->id);
    }
    
    public function reply_store(Bulletin_board $bulletin_board, Bb_reply $bb_reply, Bb_replyRequest $request)
    {
        $input = $request['bb_reply'];
        $bb_reply->fill($input)->save();
        Bulletin_board::find($bb_reply->bulletin_board_id)->increment('reply_number');
        return redirect('/bulletin_board/' . $bb_reply->bulletin_board_id);
    }
}
