<?php

use Illuminate\Database\Seeder;
use App\Bulletin_board;


class Bulletin_boardTableSeeder extends Seeder
{
	public function run() {
		$Bulletin_boards = [
			["雑談掲示板(投稿テスト)","これはテスト用の掲示板です。",1,1],
			["質問掲示板(投稿テスト)","これはテスト用の掲示板です。",2,1],
			["その他掲示板(投稿テスト)","これはテスト用の掲示板です。",3,1]
    	];
		foreach ($Bulletin_boards as $Bulletin_board) {
			Bulletin_board::create([
				'title' => $Bulletin_board[0],
				'comment' => $Bulletin_board[1],
				'user_id' => $Bulletin_board[2],
				'type' => $Bulletin_board[3],
				'reply_number' => $Bulletin_board[4],
				'updated_at' => $Bulletin_board[5],
				'created_at' => $Bulletin_board[6]
			]);
			
		}
	}
}