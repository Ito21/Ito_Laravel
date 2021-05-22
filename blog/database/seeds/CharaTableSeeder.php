<?php

use Illuminate\Database\Seeder;
use App\Chara;


class CharaTableSeeder extends Seeder
{
	public function run() {
		$charas = [
			["アクア",36,31,33,21,28,149,2,1],["アサマ",43,21,26,32,25,147,4,1],["アベル",39,33,32,25,25,154,2,2],["アルフォンス",43,35,25,32,22,157,1,1],["アンナ",41,29,38,22,28,158,3,1],["ヴィオール",46,31,31,26,13,147,16,1],["ウェンディ",49,30,24,38,28,169,2,4],["ウルスラ",35,29,32,19,30,145,10,2],["エイリーク",42,26,35,26,28,157,1,1],["エスト",36,35,30,24,32,157,4,1],["エフラム",45,35,25,32,20,157,2,1],["エリーゼ",30,32,32,19,32,145,4,2],["エリウッド",39,31,30,23,32,155,1,2],["エルフィ",50,40,22,33,23,168,2,4],["オーディン",43,22,32,25,25,147,10,1],["オグマ",47,35,34,28,13,157,1,1],["オボロ",40,32,26,35,24,157,2,1],["オリヴィエ",36,28,33,27,26,150,1,1],["ガイア",42,29,36,22,19,148,20,1],["カイン",42,32,32,27,21,154,1,2],["カゲロウ",31,35,32,22,28,148,20,1],["カザハナ",37,35,36,23,26,157,1,1],["カチュア",39,31,34,29,25,158,2,3],["カミラ",37,30,32,28,31,158,3,3],["カムイ(女)",41,27,34,34,21,157,6,1],["カムイ(男)",42,32,32,28,24,158,1,1],["ギュンター",43,32,24,33,18,150,3,2],["クラリーネ",35,25,33,22,29,144,4,2],["クロム",47,37,25,31,17,157,1,1],["ゴードン",43,31,25,32,17,148,16,1],["サーリャ",39,32,34,23,20,148,9,1],["サイゾウ",36,29,34,33,16,148,20,1],["サクラ",36,28,30,24,30,148,4,1],["シーダ",36,25,37,24,34,156,1,3],["シーマ",45,30,25,36,33,169,3,4],["ジェイガン",37,27,24,25,35,148,2,2],["シャニー",39,30,35,25,29,158,2,3],["シャロン",43,32,32,29,22,158,2,1],["ジョーカー",39,29,31,25,24,148,20,1],["ジョルジュ",37,32,32,24,22,147,16,1],["セーラ",33,30,31,21,33,148,4,1],["セシリア",36,32,25,22,29,144,11,2],["セツナ",37,28,37,22,23,147,16,1],["セリス",47,34,24,30,22,157,1,1],["セルジュ",46,38,25,32,16,157,3,3],["ゼロ",37,25,34,17,34,147,16,1],["ソール",45,31,26,30,22,154,1,2],["ソフィーヤ",40,33,19,28,29,149,9,1],["ソワレ",42,26,34,24,28,154,2,2],["タクミ",40,32,33,25,18,148,16,1],
			["チキ(子供)",41,31,30,32,29,163,5,1],["チキ(大人)",40,35,23,35,24,157,5,1],["ツバキ",40,25,35,35,22,157,2,3],["ティアモ",40,35,35,22,25,157,2,3],["ドーガ",50,30,32,39,18,169,1,4],["ドニ",43,35,29,32,23,162,2,1],["ナーシェン",42,29,29,32,26,158,3,3],["ニノ",33,33,36,19,26,147,11,1],["ノノ",45,34,27,30,27,163,6,1],["バーツ",46,33,32,30,17,158,3,1],["バアトル",49,36,25,33,13,156,3,1],["パオラ",42,31,31,28,26,158,1,3],["ハロルド",43,32,29,30,24,158,3,1],["ピエリ",35,33,33,23,30,154,2,2],["ヒナタ",47,32,24,36,18,157,1,1],["ヒノカ",41,35,32,25,24,157,2,3],["ファ",46,33,28,25,30,162,7,1],["フィル",41,25,36,24,31,157,1,1],["フェリシア",34,23,37,18,35,147,20,1],["フレデリク",43,35,25,36,14,153,3,2],["フロリーナ",42,29,27,25,34,157,2,3],["ヘクトル",52,36,24,37,19,168,3,4],["ベルカ",46,29,23,37,22,157,3,3],["ヘンリー",45,23,22,32,25,147,9,1],["ホークアイ",45,33,22,28,30,158,3,1],["マシュー",41,25,34,30,18,148,20,1],["マリア",36,27,34,19,32,148,4,1],["マリク",43,26,32,28,19,148,11,1],["マルス",41,31,34,29,23,158,1,1],["ミネルバ",40,31,33,32,22,158,3,3],["ユリア",38,35,26,17,32,148,11,1],["ラズワルド",44,35,26,30,22,157,1,1],["リズ",39,26,25,28,30,148,4,1],["リフ",42,24,23,22,36,147,4,1],["リョウマ",41,34,35,27,21,158,1,1],["リリーナ",35,37,25,19,31,147,9,1],["リン",37,28,37,26,29,157,1,1],["リンダ",35,35,36,14,27,147,10,1],["ルーナ",37,25,35,32,28,157,1,1],["ルキナ",43,34,36,25,19,157,1,1],["ルフレ(女)",40,29,29,29,22,149,11,1],["ルフレ(男)",40,29,29,29,22,149,10,1],["レイ",36,32,29,22,29,148,9,1],["レイヴァン",41,34,35,25,22,157,3,1],["レオン",39,29,22,25,30,145,9,2],["ロイ",44,30,31,25,28,158,1,1],["ロンクー",45,29,39,22,22,157,1,1],["エルトシャン",45,32,24,34,19,154,1,2],["ラケシス",39,32,25,22,30,148,4,1],["オルエン",34,26,34,20,30,144,10,2],
			["ラインハルト",38,32,23,27,25,145,10,2],["クレイン",40,31,33,20,24,148,16,1],["サナキ",33,37,26,17,34,147,9,1],["カレル",47,30,35,25,20,157,1,1],["ジャファル",41,26,33,25,22,147,20,1],["ニニアン",42,24,33,23,27,149,6,1],["プリシラ",36,29,29,19,32,145,4,2],["ルセア",37,32,30,13,35,147,4,1],["レベッカ",37,29,34,21,27,148,16,1],["ミシェイル",43,34,26,35,19,157,3,3],["春クロム",43,35,32,28,20,158,3,1],["春ルキナ",35,29,36,22,25,147,10,1],["春マークス",40,25,28,35,26,154,2,2],["春カミラ",39,35,25,30,19,148,11,3],["ナバール",42,31,37,23,24,157,1,1],["アルム",45,33,30,28,22,158,1,1],["クレア",37,26,36,24,33,156,2,3],["ルカ",45,35,22,38,17,157,2,1],["エフィ",42,30,25,26,31,154,16,1],["ゼフィール",55,35,16,38,24,168,1,4],["アイク",42,35,31,32,18,158,1,1],["ミスト",39,27,28,20,34,148,4,1],["セネリオ",36,33,33,17,29,148,11,1],["ティアマト",37,28,34,25,30,154,3,2],["マークス",44,32,24,37,17,154,1,2],["ジェニー",32,35,25,21,34,147,4,1],["セリカ",39,32,33,22,22,148,9,1],["ボーイ",43,29,27,32,18,148,11,1],["メイ",35,36,31,16,30,148,10,1],["ロイド",41,32,35,20,30,158,1,1],["花嫁シーダ",33,29,37,19,30,148,10,1],["花嫁シャーロッテ",46,36,32,24,19,157,2,1],["花嫁リン",39,28,34,23,24,147,4,1],["花嫁ティアモ",36,35,35,19,22,148,16,1],["カミュ",42,32,33,31,17,155,2,2],["アテナ",36,31,38,27,24,156,1,1],["カタリナ",34,32,34,15,32,147,9,1],["ルーク",43,34,28,30,20,152,1,2],["ロディ",40,31,34,25,24,154,2,2],["ローロー",46,36,35,22,18,157,3,1],["クライネ",37,31,34,25,20,147,16,1],["水着チキ(大人)",35,36,30,32,24,157,3,1],["水着ルフレ(女)",35,32,34,28,29,158,2,1],["水着フレデリク",40,32,31,28,18,149,20,1],["水着ガイア",34,30,37,19,28,148,16,1],["ロビン",46,31,27,33,26,163,1,1],["デューテ",33,36,34,13,31,147,10,1],["グレイ",43,35,32,30,22,162,1,1],["マチルダ",35,29,32,24,34,154,2,2],["ソニア",36,33,31,15,32,147,11,1],
			["セーバー",40,31,33,32,22,158,1,1],["レオ",39,34,30,30,15,148,16,1],["ベルクト",43,34,22,31,24,154,2,2],["水着エリーゼ",34,36,34,18,25,147,11,1],["水着マークス",43,32,30,36,16,157,3,1],["水着レオン",37,32,27,16,35,147,9,1],["水着カムイ(女)",34,31,34,22,26,147,10,3],["仮面マルス",43,34,36,25,19,157,1,1],["クレーベ",45,33,25,32,19,154,2,2],["アメリア",47,34,34,35,23,173,3,4],["ゼト",37,32,31,32,22,154,1,2],["ヒーニアス",35,33,34,14,31,147,16,1],["ターナ",36,34,36,25,25,156,2,3],["ヴァルター",42,32,31,34,19,158,2,3],["総選挙ロイ",38,32,34,26,24,154,1,2],["総選挙ルキナ",41,34,36,27,19,157,2,1],["総選挙リン",35,33,35,18,28,149,16,2],["総選挙アイク",43,36,28,35,20,162,3,1],["エリンシア",35,34,36,24,27,156,1,3],["オスカー",40,33,34,26,21,154,2,2],["ネフェニー",37,31,35,34,20,157,2,1],["漆黒の騎士",48,34,34,35,18,169,1,4],["舞踏祭オリヴィエ",34,28,34,16,28,140,20,1],["舞踏祭アズール",37,28,33,22,20,140,11,1],["舞踏祭アクア",35,32,34,20,28,149,3,1],["舞踏祭シグレ",34,31,29,21,24,139,10,1],["アルヴィス",33,34,31,17,33,148,9,1],["アイラ",41,33,37,31,21,163,1,1],["アーダン",60,36,16,41,16,169,1,4],["シグルド",41,35,32,34,17,159,1,2],["ディアドラ",36,33,28,16,35,148,11,1],["ティルテュ",39,32,35,17,25,148,10,1],["ハロウィンサクラ",33,32,34,14,34,147,20,1],["ハロウィンノノ",34,34,32,20,27,147,9,3],["ハロウィンヘンリー",36,33,34,26,36,165,11,4],["ハロウィンジョーカー",42,35,23,33,32,165,16,4],["ルーテ",33,36,32,16,34,151,10,1],["ワユ",38,32,40,28,25,163,1,1],["ドルカス",45,35,23,35,24,162,3,1],["ヨシュア",40,31,35,30,28,164,1,1],["フィヨルム",39,30,31,30,34,164,2,1],["ジークベルト",41,34,35,31,16,157,1,2],["ソレイユ",37,38,35,28,24,162,1,1],["シャラ",36,35,34,21,24,150,11,1],["シノノメ",41,35,30,35,22,163,2,1],["クリスマスリズ",43,33,30,35,34,175,3,4],["クリスマスクロム",51,40,19,35,29,174,3,4],["クリスマスルフレ(男)",45,35,34,35,25,174,2,4],["クリスマスサーリャ",43,34,18,34,36,165,9,4],
			["スリーズ",37,31,33,19,25,145,11,2],["正月タクミ",40,34,34,17,27,152,20,1],["正月アクア",37,30,35,22,26,150,3,3],["正月カムイ(男)",37,32,30,34,18,151,16,1],["正月カミラ",40,33,35,31,23,162,1,3],["ミカヤ",35,35,28,18,35,151,10,1],["サザ",39,36,33,22,21,151,16,1],["ゼルギウス",46,36,33,38,21,174,1,4],["オリヴァー",42,32,20,23,34,151,10,1],["ミルラ",42,33,25,36,31,167,7,3],["赤魔エイリーク",36,31,35,20,22,144,9,2],["ラーチェル",33,33,31,17,31,145,10,2],["リオン",41,34,21,26,30,152,9,1],["マリカ",46,30,36,30,21,163,1,1],["伝承アイク",41,36,30,35,21,163,1,1],["バレンタインリリーナ",34,35,30,20,26,145,11,2],["バレンタインロイ",34,35,19,27,30,145,16,2],["バレンタインヘクトル",50,38,21,40,24,173,3,4],["バレンタインリン",37,31,36,27,34,165,10,4],["バレンタインエリウッド",47,38,32,29,29,175,2,4],["闇ルフレ(男)",48,40,24,35,27,174,7,4],["闇ハーディン",45,34,28,36,32,175,2,4],["闇セリカ",40,35,35,27,26,163,1,1],["闇タクミ",37,31,34,25,24,151,16,1],["伝承エフラム",43,36,27,33,18,157,2,2],["リーフ",40,32,38,30,23,163,1,1],["ナンナ",36,27,34,21,26,144,4,2],["フィン",40,34,33,32,18,157,2,2],["マーク(女)",37,34,30,16,33,150,10,3],["マーク(男)",37,33,34,20,26,150,9,1],["騎馬クロム",41,37,28,34,17,157,1,2],["ジェローム",45,38,25,34,19,161,3,3],["春カチュア",36,32,35,18,23,144,10,2],["春シャロン",37,32,36,16,30,151,11,1],["春アルフォンス",41,35,33,30,18,157,3,2],["春カゲロウ",36,35,34,18,27,150,20,3],["伝承ルフレ(女)",40,32,35,30,25,162,8,3],["緑魔オルエン",34,30,35,19,27,145,11,2],["剣ラインハルト",40,35,23,31,28,157,1,2],["サイアス",36,33,30,18,34,151,10,1],["カンナ(女)",40,30,34,33,26,163,7,1],["シグレ",40,33,37,27,25,162,2,3],["弓ヒノカ",37,32,35,17,29,150,16,3],["カンナ(男)",40,31,33,31,29,164,6,1],["スズカゼ",34,30,36,17,34,151,20,1],["伝承リン",36,31,36,21,27,151,15,1],["ユリウス",38,35,27,16,35,151,9,1],["リーン",35,28,35,23,28,149,1,1],["イシュタル",38,34,36,17,26,151,10,1],["アレス",40,36,30,33,18,157,1,2],["花嫁ニニアン",34,28,33,18,27,140,10,3],
			["花嫁サナキ",35,36,30,16,33,150,11,3],["花嫁サーリャ",39,35,35,21,21,151,9,1],["花婿マルス",40,31,36,30,20,157,3,2],["伝承リョウマ",41,34,39,28,20,162,1,3],["カアラ",42,35,40,23,22,162,1,1],["ラガルト",39,31,38,24,19,151,20,1],["飛行ニノ",36,33,38,17,25,149,11,3],["ライナス",42,37,33,32,19,163,3,1],["カナス",36,32,29,21,33,151,9,1],["水着ティアモ",41,32,38,28,18,157,2,2],["水着ノワール",36,32,36,27,20,151,16,1],["水着ヒーニアス",42,33,37,30,20,162,3,3],["水着ターナ",35,33,36,20,25,149,9,3],["伝承ヘクトル",47,40,23,38,26,174,3,4],["水着リンダ",33,34,35,16,26,144,20,2],["水着チキ(子供)",40,33,37,32,26,168,5,3],["水着タクミ",40,35,35,21,19,150,16,3],["水着カミラ",39,33,36,23,19,150,10,3],["スミア",39,30,39,29,25,162,2,3],["リベラ",40,35,32,28,29,164,3,1],["マリアベル",34,35,33,16,27,145,4,2],["飛行オリヴィエ",36,30,34,26,23,149,1,3],["ヴァルハルト",41,37,27,36,16,157,3,2],["伝承ルキナ",36,34,35,25,20,150,14,1],["浴衣マークス",38,35,17,34,16,140,20,1],["浴衣エリンシア",34,29,35,20,21,139,19,1],["浴衣リョウマ",36,32,34,21,17,140,18,1],["浴衣ミカヤ",33,34,20,18,34,139,9,1],["総選挙ヴェロニカ",36,32,36,21,19,144,4,2],["総選挙エフラム",46,38,27,37,26,174,3,4],["総選挙セリカ",38,33,39,29,24,163,1,1],["総選挙ヘクトル",48,37,22,39,28,174,2,4],["伝承マルス",40,34,36,32,21,163,1,1],["ジャムカ",38,36,32,29,17,152,16,1],["レヴィン",38,34,37,17,25,151,11,1],["キュアン",44,37,29,31,16,157,2,2],["シルヴィア",40,27,36,17,30,150,1,1],["エスリン",38,28,34,26,20,146,4,2],["オフェリア",38,37,33,20,23,151,10,1],["エポニーヌ",35,32,37,16,31,151,16,1],["サイラス",40,35,24,36,21,156,2,2],["フローラ",38,34,23,18,38,151,17,1],["ガロン",43,33,22,33,32,163,5,1],["レーヴァテイン",39,37,31,34,22,163,1,1],["レーギャルン",41,32,36,36,17,162,1,3],["ヘルビンディ",44,35,18,35,31,163,3,1],["伝承チキ(子供)",45,34,35,37,29,180,6,4],["ハロウィンワユ",36,30,34,22,28,150,4,3],["ハロウィンカゲロウ",41,38,21,32,33,165,19,4],["ハロウィンゼロ",37,34,39,25,29,164,14,4],
			["ハロウィンミルラ",46,38,23,40,32,179,5,4],["ハロウィンドルカス",49,41,25,37,21,173,3,4],["ロキ",42,33,35,16,25,151,4,1],["クリフ",37,30,37,25,28,157,10,1],["ウード",41,32,37,31,22,163,1,1],["インバース",42,33,34,17,24,150,9,3],["伝承エイリーク",38,31,39,27,21,156,1,2],["夢幻カミラ",36,37,30,17,30,150,9,3],["夢幻カムイ(女)",41,31,37,32,27,168,7,1],["夢幻カムイ(男)",42,35,35,31,24,167,6,1],["ミコト",38,35,32,20,26,151,4,1],["アクア(子供)",36,33,29,17,25,140,11,1],["ユルグ",38,33,38,22,20,151,18,1],["スルト",50,39,17,40,33,179,3,4],["ガーネフ",38,30,34,27,23,152,9,1],["フリーズ",41,37,17,36,26,157,1,2],["エイル",35,32,37,14,31,149,20,3],["クリスマスエフラム",45,41,23,36,29,174,2,4],["クリスマスファ",45,35,26,33,41,180,7,4],["クリスマスエイリーク",42,36,23,30,34,165,4,4],["クリスマスセシリア",41,35,23,30,36,165,20,4],["伝承アクア",33,30,35,17,24,139,10,3],["正月フィヨルム",39,35,35,20,21,150,15,3],["正月スリーズ",38,34,37,27,26,162,1,3],["正月フリーズ",42,38,19,36,27,162,1,3],["正月レーヴァテイン",33,36,30,27,18,144,4,2],["正月レーギャルン",38,32,35,35,17,157,2,2],["ティバーン",41,38,31,34,18,162,21,3],["リアーネ",36,27,37,16,34,150,24,3],["リュシオン",37,29,34,24,26,150,23,3],["ニケ",40,31,37,32,23,163,22,1],["ネサラ",39,32,38,24,29,162,22,3],["温泉エリーゼ",34,33,37,18,22,144,17,2],["温泉リョウマ",40,35,36,28,23,162,2,3],["温泉ヒノカ",38,35,35,16,26,150,19,3],["温泉サクラ",36,35,32,26,21,150,4,3],["温泉カミラ",38,33,35,17,28,151,20,3],["ドーマ",48,40,21,34,31,174,8,4],["バレンタインアイク",45,37,38,35,19,174,1,4],["バレンタインセネリオ",37,35,33,14,25,144,10,2],["バレンタイングレイル",47,41,18,38,30,174,3,4],["バレンタインミスト",36,34,34,17,23,144,11,2],["バレンタインティアマト",35,30,33,17,30,145,9,2],["ベロア",40,35,37,33,23,168,24,1],["ニシキ",38,32,36,25,25,156,23,2],["キヌ",35,29,38,19,35,156,22,2],["フランネル",45,41,24,38,19,167,21,1],["ベルベット",41,29,34,30,23,157,22,2],["伝承ロイ",39,34,38,32,26,169,1,1],["スー",36,32,38,23,20,149,15,2],
			["ルゥ",37,35,36,17,31,156,11,1],["ティト",37,31,35,31,28,162,2,3],["イドゥン",45,35,26,39,34,179,5,4],["ルトガー",44,32,39,29,24,168,1,1],["春パオラ",38,37,34,17,29,155,17,3],["春マリカ",42,33,38,28,21,162,2,3],["春ヴェロニカ",38,35,36,16,25,150,11,3],["春ブルーノ",41,30,24,35,14,144,4,2],["春ロキ",39,31,34,27,25,156,16,3],["ユンヌ",38,33,27,15,37,150,11,3],["カイネギス",47,37,23,37,30,174,24,4],["ライ",40,30,37,33,17,157,23,2],["モゥディ",47,37,24,39,20,167,22,1],["レテ",41,33,38,26,19,157,21,2],["ハール",45,37,25,36,18,161,3,3],["ピクニックフローラ",43,38,22,29,38,170,17,4],["ピクニックルカ",51,37,21,42,22,173,2,4],["ピクニックジェニー",35,36,24,14,34,143,4,2],["ピクニックフェリシア",43,30,37,30,35,175,3,4],["ピクニックレオン",37,33,21,27,28,146,11,2],["伝承アルム",40,37,37,26,22,162,16,1],["闇マリータ",42,33,41,29,23,168,1,1],["闇ベルクト",40,35,17,35,30,157,2,2],["闇カムイ(女)",43,35,37,31,27,173,8,1],["闇チキ(子供)",45,36,34,37,28,180,8,4],["闇デューテ",41,36,33,19,28,157,10,1],["花婿パント",37,33,34,19,21,144,10,2],["花嫁シグルーン",35,31,38,27,31,162,1,3],["花嫁タニス",37,34,36,33,21,161,2,3],["花嫁フィヨルム",42,34,34,17,23,150,4,3],["花嫁ルイーズ",39,31,34,17,30,151,16,2],["ナーガ",37,30,36,33,26,162,6,3],["ンン",44,34,25,38,32,173,5,1],["デジェル",47,40,22,37,28,174,2,4],["シャンブレー",40,35,33,32,17,157,23,2],["ブレディ",41,33,32,23,28,157,4,1],["シンシア",38,32,37,27,29,163,2,3],["水着ヘルビンディ",44,36,18,37,33,168,1,1],["水着レーギャルン",37,34,37,20,21,149,10,3],["水着レーヴァテイン",38,38,16,31,26,149,11,3],["水着スリーズ",39,33,37,17,24,150,20,2],["水着ユルグ",42,35,36,30,25,168,3,1],["伝承エリウッド",37,36,34,33,16,156,1,2],["水着ウルスラ",36,36,34,16,28,150,20,2],["水着リリーナ",35,38,25,16,35,149,17,2],["水着ウォルト",40,34,34,25,17,150,15,2],["水着リン",37,33,38,20,27,155,14,3],["水着フィオーラ",40,32,37,26,28,163,1,3],["エーデルガルト",41,39,30,37,21,168,3,1],["ディミトリ",40,36,29,34,18,157,2,2],
			["クロード",39,33,37,20,21,150,16,2],["ベレス",40,34,40,33,21,168,1,1],["ベレト",40,36,38,34,20,168,1,1],["ソティス",41,34,39,32,27,173,5,1],["クロニエ",44,31,39,22,26,162,20,1],["総選挙カミラ",39,33,37,21,25,155,4,3],["総選挙エリウッド",40,37,35,32,18,162,2,2],["総選挙ミカヤ",36,37,28,17,37,155,11,3],["総選挙アルム",42,38,35,37,20,172,1,1],["ペトラ",40,32,38,25,20,155,18,3],["メルセデス",39,33,30,22,33,157,4,1],["ヒューベルト",41,39,32,19,25,156,9,1],["ヒルダ",43,37,37,28,23,168,3,1],["死神騎士",40,35,25,30,27,157,2,2],["シグルーン",37,32,36,28,34,167,2,3],["伝承ユリア",40,39,28,19,36,162,10,1],["舞踏祭ラインハルト",38,34,21,27,25,145,11,3],["舞踏祭ネフェニー",37,35,36,24,25,157,16,1],["舞踏祭ベルクト",41,36,23,37,24,161,2,1],["舞踏祭イシュタル",36,34,36,16,22,144,9,3],["舞踏祭リネア",38,30,33,23,28,152,10,1],["フィーナ",40,35,37,26,23,161,1,1],["シリウス",40,34,37,35,16,162,2,2],["ノルン",42,32,36,31,27,168,16,1],["ナギ",46,37,19,36,41,179,7,4],["バヌトゥ",45,34,28,35,26,168,5,1],["アストリア",44,35,36,36,21,172,1,1],["スラシル",40,33,39,23,27,162,11,1],["ハロウィンヘクトル",47,41,26,39,27,180,1,4],["ハロウィンヨファ",40,30,36,28,23,157,16,2],["ハロウィンイレース",41,38,23,30,37,169,10,4],["ハロウィンドズラ",45,38,29,35,27,174,20,4],["ハロウィンラーチェル",39,36,34,22,20,151,11,2],["フォルス",47,40,20,39,33,179,2,4],["パイソン",38,32,35,31,20,156,15,2],["シルク",39,33,23,35,31,161,4,1],["外伝カチュア",41,38,36,27,24,166,1,3],["コンラート",40,31,22,34,35,162,2,2],["バルボ",49,35,25,38,26,173,2,4],["伝承リーフ",40,38,22,29,27,156,16,2],["クーガー",42,36,32,34,23,167,2,3],["ジスト",47,37,36,30,22,172,3,1],["テティス",38,27,35,23,34,157,20,1],["ユアン",38,37,33,23,35,166,9,1],["ロス",47,38,31,32,24,172,3,1],["比翼エフラム",41,39,30,37,25,172,2,1],["イグレーヌ",42,37,37,26,24,166,13,1],["エキドナ",45,34,36,30,27,172,3,1],["チャド",45,30,37,26,23,161,20,1],["パーシバル",38,32,37,28,27,162,2,2],
			["ブルーニャ",42,35,31,21,33,162,10,1],["ララム",37,32,39,18,30,156,20,1],["オルティナ",42,38,20,30,36,166,1,3],["エーヴェル",41,33,35,38,25,172,1,1],["オーシン",42,35,36,33,27,173,3,1],["タニア",41,30,37,25,28,161,16,1],["マリータ",41,35,42,31,23,172,1,1],["ピアニー",38,31,36,16,24,145,10,3],["ケンプフ",42,33,33,27,26,161,1,2],["クリスマスニノ",40,35,41,22,31,169,10,4],["クリスマスソティス",44,35,41,30,35,185,7,4],["クリスマスゼフィール",48,38,19,38,36,179,1,4],["クリスマスマルス",42,36,38,30,25,174,16,4],["クリスマスジャファル",44,35,37,31,27,174,19,4],["伝承セリカ",40,38,38,18,28,162,11,1],["正月キヌ",35,31,39,16,40,161,24,2],["正月レテ",41,35,41,27,18,162,23,2],["正月アンナ",40,34,40,16,37,167,13,1],["正月アルフォンス",41,38,17,35,30,161,10,1],["正月エイル",39,31,36,24,34,164,17,3],["アルテナ",45,37,25,39,20,166,2,3],["シャナン",43,38,36,37,18,172,1,1],["セティ",37,35,39,19,31,161,11,1],["ラクチェ",41,36,40,30,25,172,1,1],["トラバント",46,36,26,40,18,166,2,3],["エレオノーラ",42,37,38,25,24,166,16,1],["霧亜",38,41,20,29,34,162,9,1],["まもり",43,37,24,42,33,179,3,4],["つばさ",39,32,40,26,30,167,2,3],["樹",41,37,30,33,32,173,1,1],["リーヴ",42,38,30,34,29,173,1,1],["バレンタインアルム",40,35,40,32,25,172,3,1],["バレンタインエフィ",43,40,23,35,38,179,16,4],["バレンタインコンラート",39,32,23,33,35,162,1,2],["バレンタインルドルフ",46,43,21,41,29,180,2,4],["バレンタインシルク",40,28,22,32,29,151,4,2],["ニルス",45,31,35,26,25,162,6,1],["ラス",41,33,35,23,24,156,15,2],["フィオーラ",38,32,38,21,37,166,2,3],["レイラ",40,36,41,23,26,166,20,1],["ヒース",40,35,33,33,27,168,2,3],["伝承クロム",41,42,26,34,25,168,14,1],["ベルナデッタ",38,32,38,22,26,156,16,2],["アネット",40,39,36,28,30,173,3,1],["フェルディナント",41,32,35,30,24,162,2,2],["リシテア",37,41,37,21,24,160,9,1],["炎帝",50,40,25,37,26,178,3,4],["春エスト",39,38,35,17,26,155,10,3],["春フィル",39,35,41,28,24,167,3,3],["春ナーシェン",43,35,34,37,18,167,2,3],
			["春イドゥン",46,37,26,37,38,184,5,4],["春バアトル",46,40,26,35,25,172,1,1],["ブラミモンド",39,40,27,21,35,162,12,1],["フォレオ",39,32,26,19,35,151,4,2],["ミドリコ",41,41,30,34,21,167,13,1],["リリス",39,36,41,27,30,173,6,3],["リンカ",40,34,39,41,18,172,3,1],["マクベス",42,38,27,23,32,162,9,1],["マルス(子供)",41,36,37,32,26,172,1,1],["シーダ(子供)",36,33,42,25,30,166,1,3],["マリク(子供)",41,34,41,21,25,162,11,1],["パオラ(子供)",40,39,31,33,24,167,2,3],["ミネルバ(子供)",40,36,37,35,19,167,3,3],["伝承エーデルガルト",45,42,17,39,36,179,3,4],["闇カムイ(男)",42,38,38,33,26,177,6,1],["闇リオン",40,40,16,32,35,163,11,1],["闇ユリア",39,41,24,17,40,161,9,1],["闇アイク",40,35,42,32,23,172,1,1],["アシュナード",43,37,21,35,31,167,1,3],["花婿ラフィエル",38,28,35,20,41,162,22,1],["花嫁ニケ",40,35,41,31,25,172,23,1],["花嫁オボロ",42,39,35,40,16,172,1,1],["花嫁ミカヤ",39,39,20,19,38,155,12,3],["花婿ヒナタ",47,37,27,40,21,172,3,1],["ミラ",41,37,17,40,37,172,8,1],["覚醒アンナ",38,35,40,28,31,172,2,1],["サイリ",40,35,40,23,34,172,1,1],["ムスタファー",45,38,25,36,28,172,3,1],["ルピナス",38,34,18,32,35,157,1,3],["ギャンレル",45,32,38,24,27,166,20,1],["エメリナ",43,32,34,23,30,162,4,1],["水着セライナ",36,37,37,17,23,150,11,2],["水着ヨシュア",40,36,39,28,24,167,13,1],["水着ワユ",38,35,41,17,25,156,20,2],["水着ルーテ",37,35,34,17,32,155,10,3],["水着キルロイ",44,34,27,21,36,162,4,1],["伝承セリス",41,41,17,37,26,162,1,2],["水着イングリット",39,34,42,25,26,166,2,3],["水着ドロテア",38,37,36,16,30,157,20,1],["水着シルヴァン",42,32,35,27,16,152,11,2],["水着ベレス",40,36,42,16,21,155,9,3],["水着ローレンツ",45,32,31,25,29,162,9,1],["クリス(男)",40,37,40,30,25,172,1,1],["クリス(女)",40,37,40,30,25,172,2,1],["ジュリアン",40,38,38,33,18,167,20,1],["レナ",40,32,29,24,37,162,4,1],["エレミヤ",44,32,35,23,27,161,4,1],["ヘル",40,38,41,30,18,167,3,3],["海賊ティバーン",42,41,30,36,18,167,24,3],["海賊ブリギッド",41,37,40,30,19,167,13,1],
			["海賊ギース",46,38,35,32,21,172,2,1],["海賊ヴェロニカ",38,39,19,36,29,161,3,2],["海賊ダロス",46,36,32,37,21,172,3,1],["総選挙リシテア",40,40,39,21,25,165,9,1],["総選挙ディミトリ",41,40,36,40,19,176,2,1],["総選挙エーデルガルト",46,45,16,43,35,185,3,4],["総選挙クロード",42,36,40,23,25,166,16,3],["ジョージ",45,36,27,35,29,172,14,1],["伝承カムイ(女)",41,38,40,34,29,182,8,1],["舞踏祭シグルド",38,38,18,16,37,147,9,2],["舞踏祭キュアン",40,41,20,36,20,157,14,3],["舞踏祭ラケシス",37,37,27,19,37,157,19,3],["舞踏祭エスリン",37,36,41,16,28,158,20,3],["舞踏祭エルトシャン",43,38,26,37,18,162,2,3],["イレース",39,38,32,17,40,166,10,1],["ガトリー",47,42,17,44,35,185,2,4],["ジル",40,39,40,36,17,172,3,3],["シノン",40,38,42,27,24,171,16,1],["プラハ",42,35,37,30,24,168,2,2],["プルメリア",41,40,18,16,37,152,9,3],["ハロウィンルフレ(女)",40,40,17,37,38,172,7,3],["ハロウィンチェイニー",47,30,34,25,30,166,12,1],["ハロウィンデギンハンザー",45,45,14,41,39,184,5,4],["ハロウィンチキ(子供)",39,39,42,32,25,177,6,3],["ハロウィンイナ",44,36,23,37,36,176,5,1],["カトリーヌ",43,39,41,30,23,176,1,1],["フレン",40,39,27,21,35,162,4,3],["セテス",44,36,36,32,24,172,2,3],["シャミア",41,40,40,25,24,170,15,1],["ネメシス",43,39,23,37,34,176,1,1],["伝承ディミトリ",40,41,41,37,18,177,2,1],["忍者ツイハーク",43,37,42,30,24,176,1,1],["忍者レーヴァテイン",41,42,18,37,34,172,3,3],["忍者ナバール",41,39,42,31,23,176,2,1],["忍者リン",40,38,42,21,26,167,20,3],["忍者カザハナ",42,36,40,28,30,176,3,1],["ミレディ",41,40,33,41,17,172,2,3],["ディーク",40,40,35,36,25,176,3,1],["マリナス",50,20,35,31,27,163,20,2],["ギネヴィア",36,35,40,16,38,165,10,1],["ゲイル",46,38,22,38,28,172,2,3],["フレイヤ",40,38,44,24,22,168,23,2],["スカビオサ",38,37,38,16,22,151,11,3],["レギン",38,36,40,30,24,168,1,2],["デュッセル",41,39,18,39,31,168,2,2],["セライナ",40,39,39,16,23,157,10,2],["ナターシャ",37,36,32,24,36,165,4,1],["ノール",43,37,32,19,35,166,9,1],["ケセルダ",45,40,27,31,33,176,3,1],["クリスマスセフェラン",43,42,21,29,40,175,4,4],
			["クリスマスベルナデッタ",39,36,40,19,23,157,11,2],["クリスマスヒルダ",44,39,38,37,26,184,2,4],["クリスマスオルティナ",42,40,18,37,39,176,1,1],["クリスマスフェリクス",44,38,37,32,29,180,14,4],["伝承リリーナ",39,42,21,16,40,158,9,2],["正月プルメリア",41,42,17,18,39,157,16,3],["正月ベロア",41,38,40,34,23,176,22,1],["正月ニシキ",41,35,39,25,28,168,21,2],["正月ピアニー",40,34,40,16,23,153,11,3],["正月フランネル",48,41,24,43,20,176,23,1],["アスベル",40,36,42,21,26,165,11,1],["ロナン",38,34,40,17,42,171,14,1],["ミランダ",38,36,35,21,36,166,9,1],["サラ",35,40,37,16,37,165,4,1],["ベルド",43,38,26,22,36,165,9,1],["ペレジアサーリャ",40,39,41,19,22,161,11,3],["ペレジアカタリナ",39,37,43,16,28,163,10,3],["ペレジアラファエル",48,42,28,38,23,179,16,4],["ペレジアドロテア",37,38,35,16,26,152,9,3],["ペレジアクリス(男)",41,37,37,31,22,168,3,2],["セイロス",40,42,18,37,40,177,6,1],["バレンタイングスタフ",49,41,18,46,31,185,3,4],["バレンタインヘンリエッテ",42,40,18,35,40,175,9,4],["バレンタインアルフォンス",43,38,25,37,31,174,11,4],["バレンタインリーヴ",39,39,25,30,25,158,9,2],["バレンタインヴェロニカ",40,36,38,21,22,157,10,2],["マーニャ",37,35,39,27,34,172,1,3],["アゼル",41,37,39,26,23,166,9,1],["レックス",45,36,30,38,19,168,3,2],["フュリー",39,37,41,32,23,172,2,3],["ディートバ",43,35,38,23,33,172,2,3],["伝承クロード",41,37,41,23,24,166,16,3],["イングリット",37,35,40,28,27,167,2,2],["ドゥドゥー",50,45,17,45,28,185,3,4],["リンハルト",39,34,25,30,38,166,4,1],["マリアンヌ",36,41,32,17,39,165,10,1],["ソロン",45,38,20,24,38,165,9,1],["春セレナ",39,37,40,24,17,157,9,2],["春アズール",40,38,40,22,27,167,15,3],["春ミネルバ",41,36,38,35,18,168,2,2],["春ミルラ",40,38,25,40,35,178,8,3],["春サレフ",41,37,36,26,28,168,3,2],["ダグ",41,39,41,30,25,176,3,1]
    		];
		foreach ($charas as $chara) {
			Chara::create([
				'name' => $chara[0],
				'hp' => $chara[1],
				'atk' => $chara[2],
				'spd' => $chara[3],
				'def' => $chara[4],
				'res' => $chara[5],
				'status' => $chara[6],
				'type_1' => $chara[7],
				'type_2' => $chara[8]
			]);
			
		}
	}
}