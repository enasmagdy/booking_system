<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'name' => 'First Event',
                'img' => '11.jpg',
                'startdate'=> '2020-03-15',
                'enddate' => '2020-03-30',
                'starttime'=> '00:00:00',
                'endtime'=>  '21:07:52',
            ],
            [
                'name' => 'Second Event',
                'img' => '22.jpg',
                'startdate'=> '2020-04-15',
                'enddate' => '2020-04-30',
                'starttime'=> '00:00:00',
                'endtime'=>  '21:07:52',
            ],
            [
                'name' => 'Third Event',
                'img' => '33.jpg',
                'startdate'=> '2020-05-15',
                'enddate' => '2020-05-30',
                'starttime'=> '00:00:00',
                'endtime'=>  '21:07:52',
            ],
        ]);
    }
}
