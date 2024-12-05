<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function create() {
        DB::table('shops')->insert([
            'name' => 'test',
            'phone_number' => '00000000000',
            'email' => 'test@example.com'
        ]);
        return redirect("/list");
    }

    public function display() {
        $shops = DB::table('shops')->get();

        return view('shop.display', ['shops' => $shops]);
    }

    public function update(){
        $shops = DB::table('shops')->where('name', 'John')->first();
    }
}
