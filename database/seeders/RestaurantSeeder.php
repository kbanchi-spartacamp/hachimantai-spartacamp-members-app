<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'name' => 'レストラン こかげ',
                'description' => '美味しいし、メニューが豊富。お腹減っているときはBigサイズにしたほうがいいかも。',
                'image_url' => 'https://tblg.k-img.com/restaurant/images/Rvw/88262/640x640_rect_88262506.jpg',
                'hp_url' => 'https://tabelog.com/iwate/A0305/A030501/3000303/',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '大更ホルモン',
                'description' => 'もつ鍋がめっちゃ美味しい。',
                'image_url' => 'https://tblg.k-img.com/restaurant/images/Rvw/20638/20638405.jpg',
                'hp_url' => 'https://tabelog.com/iwate/A0305/A030501/3006740/',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'レストラン LAMP',
                'description' => '洋風なお店。ステーキ美味しそう。',
                'image_url' => 'https://lamp-iwate.jeez.jp/images/1539759246106.jpg',
                'hp_url' => 'https://lamp-iwate.jeez.jp/',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '森のイタリアン La Mia Mamma',
                'description' => '予約が必要。',
                'image_url' => 'https://smiler.jp/wp-content/uploads/2021/06/20210514_111139-e1623654811813.jpg',
                'hp_url' => 'https://foodplace.jp/la-mia-mamma/',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        DB::table('restaurants')->insert($param);
    }
}
