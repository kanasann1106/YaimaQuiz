<?php

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $region = ['全地域','石垣島','竹富島','小浜島','黒島','鳩間島','波照間島','新城島(上地)','新城(下地)','嘉弥真島','西表島','由布島','与那国島'];

        foreach($region as $island){
            DB::table('region')->insert([
                'name' => $island,
            ]);
        }
    }
}
