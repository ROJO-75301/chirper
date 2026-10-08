<?php

namespace Database\Seeders;

use App\Models\Chirp;
use App\Models\User;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first() ?? User::factory()->create();

        $user->chirps()->createMany([
            ['message' => 'Just deployed my first Laravel app! 🚀'],
            ['message' => 'Laravel makes web development fun again!'],
            ['message' => 'Working on something cool with Chirper...'],
        ]);
    }
}