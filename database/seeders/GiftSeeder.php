<?php

namespace Database\Seeders;

use App\Models\Gift;
use Illuminate\Database\Seeder;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gift::create([
            'wedding_id'        => 1,
            'name'              => "Delna's Residence",
            'address'           => 'Kongamala House, Ottapalam, Palakkad, Kerala',
            'maps'              => 'https://maps.google.com/?q=Ottapalam+Palakkad',
            'note'              => 'Ottapalam',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        Gift::create([
            'wedding_id'        => 1,
            'name'              => "Melvin's Residence",
            'address'           => 'Koottapalli House, Kanjirapuzha, Palakkad, Kerala',
            'maps'              => 'https://maps.google.com/?q=Kanjirapuzha+Palakkad',
            'note'              => 'Kanjirapuzha',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
