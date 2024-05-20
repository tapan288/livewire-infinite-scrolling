<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()
            ->count(100)
            ->state(
                new Sequence(fn(Sequence $sequence) => [
                    'created_at' => now()->addDays($sequence->index)
                ])
            )
            ->create();
    }
}
