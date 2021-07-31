<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<= 3; $i++){
            for($j = 1; $j <= 3; $j++){
                Course::create([
                    'cat_id' => $i,
                    'trainer_id' => rand(1, 3),
                    'name' => "course num $j cat $i",
                    'small_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra.',
                    'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra. Nam id purus a lorem hendrerit commodo. Phasellus sodales quis nisl eget aliquet. Maecenas eget enim vitae ipsum varius iaculis ut et quam. Aliquam auctor ac lacus non faucibus. Sed laoreet, enim sit amet vestibulum condimentum, lorem odio dictum orci, vitae malesuada augue justo quis nulla.',
                    'price' => rand(100, 500),
                    'img' => "$i$j.png"
                ]);
            }
        }

    }
}
