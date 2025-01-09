<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function create(Request $request) {
        // フロントで入力された内容を受け取る
        $email = $request->input('email');
        $shop_name = $request->input('shop_name');

        // テーブルにデータを登録
        DB::table('shops')->insert([
            'name' => $shop_name,
            'email' => $email,
            'phone_number' => '0000000000'
        ]);

        return redirect("/list");
    }

    public function display() {
        // tableデータを取得
        $shops = DB::table('shops')->get();

        // データをviewに渡す & viewを表示
        return view('list', ['shops' => $shops]);
    }

    public function update() {
        // 更新対象のデータを取得
        // データの更新
        $affected = DB::table('shops')
              ->where('id', 2)
              ->update(['name' => 'updated']);

        // 画面遷移
        return redirect("/list");
    }
}
