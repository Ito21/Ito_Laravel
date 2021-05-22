<?php

namespace App\Http\Controllers;

use App\Bulletin_board;
use App\Http\Requests\Bulletin_boardRequest;

class Bulletin_boardController extends Controller
{
    public function bulletin_board(Bulletin_board $bulletin_board)
    {
        return view('bulletin_board')->with(['bulletin_boards' => $bulletin_board->getPaginateByLimit()]);
    }
    public function show(Bulletin_board $bulletin_board)
    {
        return view('bulletin_board_show')->with(['bulletin_board' => $bulletin_board]);
    }
    public function create()
    {
        return view('bulletin_board_create');
    }    
    public function store(Bulletin_board $bulletin_board, Bulletin_boardRequest $request)
    {
        $input = $request['post'];
        $bulletin_board->fill($input)->save();
        return redirect('/bulletin_boards/' . $bulletin_board->id);
    }
}
