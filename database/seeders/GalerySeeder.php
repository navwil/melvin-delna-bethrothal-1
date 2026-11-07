<?php

namespace Database\Seeders;

use App\Models\Galery;
use Illuminate\Database\Seeder;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galery::create([
            'wedding_id'        => 1,
            'gallery1'          => 'engagement.jpeg',
            'gallery2'          => 'outing.jpeg',
            'gallery3'          => 'airpt_1.jpeg',
            'gallery4'          => 'airpt_2.jpeg',
            'gallery5'          => 'delna.jpeg',
            'gallery6'          => 'melvin.jpeg',
            'video'             => '-',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
