<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

use App\Chara;
use App\Http\Requests\CharaRequest; 

class CharaController extends Controller
{
    public function chara(Chara $chara)
    {
        return view('chara')->with(['charas' => $chara->getPaginateByLimit()]);
    }
    public function chara_show(Chara $chara)
    {
        return view('chara_show')->with(['chara' => $chara]);
    }
}
