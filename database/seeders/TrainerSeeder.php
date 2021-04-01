<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trainer;
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
            'name'=>'kareem',
            'spec'=>'web developer',
            'img'=>'1.png'
        ]);
        
          Trainer::create([
            'name'=>'mohy',
            'spec'=>'ios developer',
            'img'=>'2.png'
        ]);
        
           Trainer::create([
            'name'=>'eslam',
            'spec'=>'web developer',
            'img'=>'3.png'
        ]);
        
           Trainer::create([
            'name'=>'mahmoud',
            'spec'=>'Android developer',
            'img'=>'4.png'
        ]);
        
           Trainer::create([
            'name'=>'ahmed',
            'spec'=>'dentist',
            'img'=>'5.png'
        ]);
    }
}
