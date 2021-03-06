<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackSeeder extends Seeder
{
    const PACK_SIZES = [250, 500, 1000, 2000, 5000];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::PACK_SIZES as $pack) {
            DB::table('packs')->insert([
                'size' => $pack,
            ]);
        }
    }
}
