<?php

namespace Database\Seeders;

use App\Models\Wedding;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeddingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wedding::firstOrCreate([
            'id' => 1
        ], [
            'name'          => 'Melvin & Delna',
            'note'          => 'Together with our families, we joyfully invite you to celebrate our betrothal and the beginning of our new journey together.',
            'status'        => 'Active',
            'hero1'         => 'engagement.jpeg',
            'hero2'         => 'outing.jpeg',
            'hero3'         => 'airpt_1.jpeg',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
