<?php

use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionArr = [
            ['name' => 'site_name','value' => '旅游订房网'],
            ['name' => 'title_separator','value' => '-'],
        ];
        foreach($optionArr as $option){
            DB::table('options')->insert(array(
                'name'	=>  $option['name'], 
                'value' =>  $option['value'],
            ));	
        }
    }
}
