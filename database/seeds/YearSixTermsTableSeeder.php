<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class YearSixTermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school_year_six = \DB::table('school_years')->where('id', '=', 6)->first();

        DB::table('terms')->insert(array(
             array(
                    'school_year_id'=>$school_year_six->id, 
                    'term'=>'1st Term',
                    'start_date'=>Carbon::create('2021', '09', '11'),
                    'end_date'=>Carbon::create('2021', '12', '15'),
                    'show_until'=>Carbon::create('2022', '01', '07')
                 ),

             array(
                    'school_year_id'=>$school_year_six->id, 
                    'term'=>'2nd Term',
                    'start_date'=>Carbon::create('2022', '01', '08'),
                    'end_date'=>Carbon::create('2022', '04', '06'),
                    'show_until'=>Carbon::create('2022', '04', '15')
                  ),

             array(
                    'school_year_id'=>$school_year_six->id, 
                    'term'=>'3rd Term',
                    'start_date'=>Carbon::create('2022', '04', '16'),
                    'end_date'=>Carbon::create('2022', '07', '20'),
                    'show_until'=>Carbon::create('2022', '09', '10')
                  ),

             

          ));
    }
}
