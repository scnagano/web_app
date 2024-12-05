<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function create(Request $request) {
        $email = $request->input('email');

        DB::table('shops')->insert([
            'name' => 'test name',
            'email' => $email,
            'phone_number' => '0000000000'
        ]);

        return redirect("/list");
    }

    public function display() {
        // tableデータを取得
        $shops = DB::table('shops')->get();

        // データをviewに渡す & viewを表示する
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
