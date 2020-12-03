<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RespondentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('respondents')->insert([
            [
                'id'      => Str::uuid(),
                'name'    => 'Bima',
                'phone'   => '081288887777',
                'address' => 'Depok'
            ],
            [
                'id'      => Str::uuid(),
                'name'    => 'Bunga',
                'phone'   => '081288881111',
                'address' => 'Jakarta'
            ],
        ]);
    }
}
