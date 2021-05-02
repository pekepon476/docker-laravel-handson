<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Cloner\Data;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
        DB::table('books')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $users = [
            [
                'PS_ID'      => '111111',
                'PS'         => 'aaa',
                'name'       => 'test1',
                'created_at' => date("Y/m/d H:i:s"),
                'updated_at' => date("Y/m/d H:i:s")
            ],
            [
                'PS_ID'      => '2222222',
                'PS'         => 'bbb',
                'name'       => 'test2',
                'created_at' => date("Y/m/d H:i:s"),
                'updated_at' => date("Y/m/d H:i:s")
            ]
        ];

        // 登録
        foreach($users as $user) {
            \App\Models\User::create($user);
        }
    }

}
