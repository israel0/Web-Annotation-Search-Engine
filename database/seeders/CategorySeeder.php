<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function delete()
    {
        return DB::table("categories")->delete();
    }
    public function run()
    {
        Self::delete();

        $data = [
             [
                "name" => "Artificial Intelligence"
             ],

             [
                "name" => "Data Science"
             ],

             [
                "name" => "Javascript"
             ],

             [
                "name" => "Optical Character Recognition 1"
             ],

        ];

        DB::table("categories")->insert($data);

    }
}
