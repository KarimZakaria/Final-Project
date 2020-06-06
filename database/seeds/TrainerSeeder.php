<?php

use Illuminate\Database\Seeder;
use App\Trainer ; 

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
            'name'=>'Karim Zakaria', 
            'spec'=>'Web Development',
            'img'=>'1.png'
        ]);

        Trainer::create([
            'name'=>'Ahmed Bahnasy', 
            'spec'=>'Android',
            'img'=>'2.png'
        ]);

        Trainer::create([
            'name'=>'Kareem Fouad', 
            'spec'=>'Doctor',
            'img'=>'3.png'
        ]);

        Trainer::create([
            'name'=>'Heba Ahmed', 
            'spec'=>'English Teacher',
            'img'=>'4.png'
        ]);

        Trainer::create([
            'name'=>'Mark Joe', 
            'spec'=>'Bussunies Man',
            'img'=>'5.png'
        ]);
    }
}
