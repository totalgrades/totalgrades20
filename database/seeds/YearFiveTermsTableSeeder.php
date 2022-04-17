<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class YearFiveTermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school_year_five = \DB::table('school_years')->where('id', '=', 5)->first();

        DB::table('terms')->insert(array(
             array(
                    'school_year_id'=>$school_year_five->id, 
                    'term'=>'1st Term',
                    'start_date'=>Carbon::create('2020', '09', '11'),
                    'end_date'=>Carbon::create('2020', '12', '15'),
                    'show_until'=>Carbon::create('2021', '01', '07')
                 ),

             array(
                    'school_year_id'=>$school_year_five->id, 
                    'term'=>'2nd Term',
                    'start_date'=>Carbon::create('2021', '01', '08'),
                    'end_date'=>Carbon::create('2021', '04', '06'),
                    'show_until'=>Carbon::create('2021', '04', '15')
                  ),

             array(
                    'school_year_id'=>$school_year_five->id, 
                    'term'=>'3rd Term',
                    'start_date'=>Carbon::create('2021', '04', '16'),
                    'end_date'=>Carbon::create('2021', '07', '20'),
                    'show_until'=>Carbon::create('2021', '09', '10')
                  ),

             

          ));
    }
}
