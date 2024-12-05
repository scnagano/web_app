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

        return "created shop";
    }

    public function display() {
        // tableデータを取得
        $shops = DB::table('shops')->get();

        // データをviewに渡す & viewを表示する
        return view('list', ['shops' => $shops]);
    }
}
