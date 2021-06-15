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
        $Bulletin_board = Bulletin_board::with(['user'])
            ->where('bulletin_boards.user_id', $bulletin_board)
            ->get();
        
        return view('bulletin_board')->with(['bulletin_boards' => $bulletin_board->getPaginateByLimit()]);
    }
    
    public function bulletin_board_show(Bulletin_board $bulletin_board)
    {
        $Bulletin_board = Bulletin_board::with(['bb_reply'])
            ->get();
            
        return view('bulletin_board_show')->with(['bulletin_board' => $bulletin_board])->with(['bb_replys' => $bulletin_board->bb_reply->getPaginateByLimit()]);
    }
    
    public function bulletin_board_create()
    {
        return view('bulletin_board_create');
    }
    
    public function store(Bulletin_board $bulletin_board, Bulletin_boardRequest $request)
    {
        $input = $request['bulletin_board'];
        $bulletin_board->fill($input)->save();
        return redirect('/bulletin_boards/' . $Bulletin_board->id);
    }
    
    public function reply_store(Bulletin_board $bulletin_board, Bb_reply $bb_reply, Bb_replyRequest $request)
    {
        $input = $request['bb_reply'];
        $bulletin_board = Bulletin_board::find($bulletin_board['id']);
        $bulletin_board['reply_number'] =$bulletin_board['reply_number'] + 1;
        $input['number'] = $bulletin_board['reply_number'];
        $bb_reply->fill($input)->save();
        $bulletin_board->save();
        return redirect('/bulletin_board/{bulletin_board}' . $Bulletin_board->id);
    }
}
