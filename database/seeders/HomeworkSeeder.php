<?php

namespace Database\Seeders;

use App\Models\Homework;
use Database\Factories\HwFactory;
use Illuminate\Database\Seeder;

class HomeworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Homework::factory(10)->create();
    }
}
