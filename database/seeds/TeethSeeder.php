<?php

use Illuminate\Database\Seeder;

class TeethSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teeth')->insert([
            ['tooth'=>'18'],
            ['tooth'=>'17'],
            ['tooth'=>'16'],
            ['tooth'=>'15'],
            ['tooth'=>'14'],
            ['tooth'=>'13'],
            ['tooth'=>'12'],
            ['tooth'=>'11'],
            ['tooth'=>'21'],
            ['tooth'=>'22'],
            ['tooth'=>'23'],
            ['tooth'=>'24'],
            ['tooth'=>'25'],
            ['tooth'=>'26'],
            ['tooth'=>'27'],
            ['tooth'=>'28'],
            ['tooth'=>'48'],
            ['tooth'=>'47'],
            ['tooth'=>'46'],
            ['tooth'=>'45'],
            ['tooth'=>'44'],
            ['tooth'=>'43'],
            ['tooth'=>'42'],
            ['tooth'=>'41'],
            ['tooth'=>'31'],
            ['tooth'=>'32'],
            ['tooth'=>'33'],
            ['tooth'=>'34'],
            ['tooth'=>'35'],
            ['tooth'=>'36'],
            ['tooth'=>'37'],
            ['tooth'=>'38']
        ]);
    }
}
