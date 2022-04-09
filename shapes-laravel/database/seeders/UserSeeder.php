<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Filling;
use App\Models\Finish;
use App\Models\Color;
use App\Models\Filament;
use App\Models\FilamentColor;







class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Daniel',
            'email' => 'daniel@gmail.com',
            'password' => bcrypt('123456789'),
        ])->assignRole('Admin');



        Filling::create([
            'name' => '20-30',
            'price' => 0.20,
        ]);
        Filling::create([
            'name' => '50-60',
            'price' => 0.50,
        ]);
        Filling::create([
            'name' => '90-100',
            'price' => 1,
        ]);


        Finish::create([
            'name' => 'fino',
            'price' => 1,
        ]);
        Finish::create([
            'name' => 'medio',
            'price' => 0.50,
        ]);
        Finish::create([
            'name' => 'rugoso',
            'price' => 0.20,
        ]);


        Color::create([
            'name' => 'Rojo',
            'code' => '#ff0000',
        ]);
        Color::create([
            'name' => 'Azul',
            'code' => '#0055ff',
        ]);
        Color::create([
            'name' => 'Blanco',
            'code' => '#ffffff',
        ]);

        Filament::create([
            'name' => 'PLA',
            'price' => 1.20,
        ]);
        Filament::create([
            'name' => 'ABS',
            'price' => 1.50,
        ]);


        FilamentColor::create([
            'color_id' => 1,
            'filament_id' => 1,
        ]);
        FilamentColor::create([
            'color_id' => 2,
            'filament_id' => 1,
        ]);
        FilamentColor::create([
            'color_id' => 3,
            'filament_id' => 1,
        ]);
        FilamentColor::create([
            'color_id' => 1,
            'filament_id' => 2,
        ]);
        FilamentColor::create([
            'color_id' => 2,
            'filament_id' => 2,
        ]);
        FilamentColor::create([
            'color_id' => 3,
            'filament_id' => 2,
        ]);
    }
}
