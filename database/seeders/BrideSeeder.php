<?php

namespace Database\Seeders;

use App\Models\Bride;
use Illuminate\Database\Seeder;

class BrideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bride::truncate();

        Bride::create([
            'wedding_id'        => 1,
            'name'              => 'Melvin Sabu',
            'child'             => 'S/o Sabu Thomas & Nirmala Sabu',
            'name_father'       => 'Sabu Thomas',
            'name_mother'       => 'Nirmala Sabu',
            'address'           => 'Koottapalli house, Kanjirappuzha, Palakkad',
            'instagram'         => '#',
            'bank_id'           => 1,
            'acc_name'          => 'Melvin Sabu',
            'acc_number'        => 9876543210,
            'gender'            => 'Male',
            'photo'             => 'melvin.jpeg',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        Bride::create([
            'wedding_id'        => 1,
            'name'              => 'Delna Tom',
            'child'             => 'D/o Tom Augustine & Bindu Tom',
            'name_father'       => 'Tom Augustine',
            'name_mother'       => 'Bindu Tom',
            'address'           => 'Kongamala house, Ottapalam, Palakkad',
            'instagram'         => '#',
            'bank_id'           => 1,
            'acc_name'          => 'Delna Tom',
            'acc_number'        => 1234567890,
            'gender'            => 'Female',
            'photo'             => 'delna.jpeg',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
