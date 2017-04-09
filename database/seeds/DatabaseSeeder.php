<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefecs')->insert([
            ['prefec' => 'Hokkaido',  'capital' => 'Sapporo'],
            ['prefec' => 'Aomori',    'capital' => 'Aomori'],
            ['prefec' => 'Iwate',     'capital' => 'Morioka'],
            ['prefec' => 'Miyagi',    'capital' => 'Sendai'],
            ['prefec' => 'Akita',     'capital' => 'Akita'],
            ['prefec' => 'Yamagata',  'capital' => 'Yamagata'],
            ['prefec' => 'Fukushima', 'capital' => 'Fukushima'],
            ['prefec' => 'Ibaraki',   'capital' => 'Mito'],
            ['prefec' => 'Tochigi',   'capital' => 'Utsunomiya'],
            ['prefec' => 'Gumma',     'capital' => 'Maehashi'],
            ['prefec' => 'Saitama',   'capital' => 'Saitama'],
            ['prefec' => 'Chiba',     'capital' => 'Chiba'],
            ['prefec' => 'Tokyo',     'capital' => 'Tokyo'],
            ['prefec' => 'Kanagawa',  'capital' => 'Yokohama'],
            ['prefec' => 'Nigata',    'capital' => 'Nigata'],
            ['prefec' => 'Toyama',    'capital' => 'Toyama'],
            ['prefec' => 'Ishikawa',  'capital' => 'Kanazawa'],
            ['prefec' => 'Fukui',     'capital' => 'Fukui'],
            ['prefec' => 'Yamanashi', 'capital' => 'Kofu'],
            ['prefec' => 'Nagano',    'capital' => 'Nagano'],
            ['prefec' => 'Gifu',      'capital' => 'Gifu'],
            ['prefec' => 'Shizuoka',  'capital' => 'Shizuoka'],
            ['prefec' => 'Aichi',     'capital' => 'Nagoya'],
            ['prefec' => 'Mie',       'capital' => 'Tsu'],
            ['prefec' => 'Shiga',     'capital' => 'Otsu'],
            ['prefec' => 'Kyoto',     'capital' => 'Kyoto'],
            ['prefec' => 'Osaka',     'capital' => 'Osaka'],
            ['prefec' => 'Hyogo',     'capital' => 'Kobe'],
            ['prefec' => 'Nara',      'capital' => 'Nara'],
            ['prefec' => 'Wakayama',  'capital' => 'Wakayama'],
            ['prefec' => 'Tottori',   'capital' => 'Tottori'],
            ['prefec' => 'Shimane',   'capital' => 'Matsue'],
            ['prefec' => 'Okayama',   'capital' => 'Okayama'],
            ['prefec' => 'Hiroshima', 'capital' => 'Hiroshima'],
            ['prefec' => 'Yamaguchi', 'capital' => 'Yamaguchi'],
            ['prefec' => 'Tokushima', 'capital' => 'Tokushima'],
            ['prefec' => 'Kagawa',    'capital' => 'Takamatsu'],
            ['prefec' => 'Ehime',     'capital' => 'Matsuyama'],
            ['prefec' => 'Kochi',     'capital' => 'Kochi'],
            ['prefec' => 'Fukuoka',   'capital' => 'Fukuoka'],
            ['prefec' => 'Saga',      'capital' => 'Saga'],
            ['prefec' => 'Nagasaki',  'capital' => 'Nagasaki'],
            ['prefec' => 'Kumamoto',  'capital' => 'Kumamoto'],
            ['prefec' => 'Oita',      'capital' => 'Oita'],
            ['prefec' => 'Miyazaki',  'capital' => 'Miyazaki'],
            ['prefec' => 'Kagoshima', 'capital' => 'Kagoshima'],
            ['prefec' => 'Okinawa',   'capital' => 'naha']
        ]);
    }
}
