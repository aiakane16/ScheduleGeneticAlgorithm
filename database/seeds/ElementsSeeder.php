<?php

use Illuminate\Database\Seeder;

class ElementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Room)->create(10);
        factory(App\Subject)->create(8);
        factory(App\Section)->create(20);

        $pregnant = App\Disability::create([
            'name' => 'pregnant'
        ]);

        $pwd = App\Disability::create([
            'name' => 'pwd'
        ]);

        factory(App\Teacher)->create(5,function($teacher){

            $disablities = [
                0=> null,
                1=> $pregnant,
                2=> $pwd
            ];

            $teacher->disabilities()->add($disabilities[array_rand($disablities)]);

        });
    }
}
