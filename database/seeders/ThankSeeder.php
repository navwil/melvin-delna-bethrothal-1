<?php

namespace Database\Seeders;

use App\Models\Thank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thank::truncate();

        Thank::create([
            'wedding_id'    => 1,
            'note'          => 'We sincerely thank you for being a part of our special day, and for your heartfelt prayers, love, and blessings on our betrothal.',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
