<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['id' => 1, 'name' => 'PHP', 'description' => 'PHP description here.'],
            ['id' => 2, 'name' => 'Javascript', 'description' => 'Javascript description here.'],
            ['id' => 3, 'name' => 'MySQL', 'description' => 'MySQL description here.']
        ]);
    }
}
