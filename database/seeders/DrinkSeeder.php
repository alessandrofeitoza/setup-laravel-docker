<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Drink;

class DrinkSeeder extends Seeder
{
    //faker
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $drink = new Drink();
            $drink->name = 'Ypioca '.$i;
            $drink->type = 'Cachaça';
            $drink->description = 'Prata, Garrafa 960ml';
            $drink->price = 10.90;
            $drink->quantity = 12;
    
            $drink->save();

            //usando o banco
            // DB::table('drinks')->insert([
            //     'name' => 'Ypioca',
            // ]);
        }
    }
}
