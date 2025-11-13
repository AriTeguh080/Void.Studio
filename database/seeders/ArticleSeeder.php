<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Article::create([
            'name' => 'Void Line',
            'description' => 'Between every boundary lies an empty space — not meant to confine, but to liberate. VØID LINE was born from the belief that true expression emerges from nothingness. The cracked line between existence and void represents the courage to defy order, to stand apart, and to redefine the meaning of self within silence. Every fracture tells a story; every imperfection breathes honesty. Because only from emptiness, can freedom truly exist.',
            'image' => 'vlm.jpeg',
            'background_image' => 'vlba.jpeg',
            'slogan' => 'The boundary between existence and emptiness.',
            'price' => 50.00,
            'stock' => 10,
        ]);

        \App\Models\Article::create([
            'name' => 'Abyss Whisper',
            'description' => 'Amidst the noise of the world, ABYSS WHISPER is a voice only heard by those who dare to be still. It is the quiet call from the edge of nothingness not to frighten, but to remind us that even in the void, meaning speaks softly. This piece embodies the feeling of sinking deep within one\'s own thoughts, yet finding guidance in the faint echoes that return. A reflection of silence that speaks, and darkness that illuminates.',
            'image' => 'awm.jpeg',
            'background_image' => 'awba.jpeg',
            'slogan' => 'The voice that calls from the edge of nothingness.',
            'price' => 60.00,
            'stock' => 8,
        ]);

        \App\Models\Article::create([
            'name' => 'Eternal Fade',
            'description' => 'ETERNAL FADE speaks of permanence within impermanence of disappearing without truly being gone. In every vanishing moment lies a trace that cannot be erased; like a shadow that lingers long after the light fades. The design reflects the quiet beauty of fading the realization that to disappear is not to end, but to become part of something infinite, unseen, and timeless. To fade is to remain, unseen but eternal.',
            'image' => 'efm.jpeg',
            'background_image' => 'efba.jpeg',
            'slogan' => 'To disappear is not to vanish, but to remain unseen forever.',
            'price' => 55.00,
            'stock' => 12,
        ]);

        \App\Models\Article::create([
            'name' => 'Nocturne',
            'description' => 'The night is not merely dark it is a symphony of stillness and chaos. NOCTURNE pays tribute to those who find peace in inner turmoil and beauty within the shadows. Beneath the silent sky, every sound becomes a melody; every shadow, a rhythm. This collection captures the harmony between disorder and serenity, the art of finding calm in the storm. For within the silence of the night, there is always a song — heard only by the restless soul.',
            'image' => 'nrm.jpeg',
            'background_image' => 'nrba.jpeg',
            'slogan' => 'An ode to the beauty and chaos of the dark.',
            'price' => 65.00,
            'stock' => 5,
        ]);
    }
}
