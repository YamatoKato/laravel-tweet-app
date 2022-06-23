<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Tweet;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * factoryメソッドでFactoryクラスが利用される。
         * countメソッドの引数で挿入するデータの個数を指定できる
         * createメソッドを呼び出してデータ挿入
         */
        Tweet::factory()->count(10)->create();
    }
}
