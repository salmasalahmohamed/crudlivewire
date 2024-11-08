<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'email'=>'salma@gmail.com',
            'name'=>'salma',
            'phone'=>'123456789',
            'address'=>'mansoura'
        ]);
    }
}
