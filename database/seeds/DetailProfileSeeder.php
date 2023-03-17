<?php

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table detail_profile
        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_tlp' => '085604988xxx',
            'ttl' => '2002-10-12',
            'foto' => 'picture.png'
        ]);
    }
}
