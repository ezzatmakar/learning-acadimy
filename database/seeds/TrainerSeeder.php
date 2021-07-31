<?php

use Illuminate\Database\Seeder;
use App\Trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'name' => 'Ezzat Malak',
            'spec' => 'web development',
            'img' => '1.png'
        ]);

        Trainer::create([
            'name' => 'Thomas Malak',
            'spec' => 'English teacher',
            'img' => '2.png'
        ]);

        Trainer::create([
            'name' => 'Ezzat Makar',
            'spec' => 'Software engineering',
            'img' => 'i.png'
        ]);

    }
}
