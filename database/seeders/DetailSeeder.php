<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail::truncate();

        Detail::create([
            'wedding_id'        => 1,
            'type'              => 'Holy Betrothal',
            'date'              => '2027-03-29 11:00:00',
            'address'           => "St. Joseph's Forane Church, Ottapalam, Palakkad, Kerala",
            'maps'              => 'https://maps.google.com/?q=St+Joseph+Forane+Church+Ottapalam',
            'calendar'          => 'https://calendar.google.com/calendar/u/0/r/eventedit?text=Holy+Betrothal+-+Melvin+%26+Delna&dates=20270329T053000Z/20270329T073000Z&details=Holy+Betrothal+Ceremony+of+Melvin+and+Delna&location=St.+Joseph+Forane+Church,+Ottapalam',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        Detail::create([
            'wedding_id'        => 1,
            'type'              => 'Reception',
            'date'              => '2027-03-29 12:30:00',
            'address'           => "Pisharody's Auditorium, Ottapalam, Palakkad, Kerala",
            'maps'              => 'https://maps.google.com/?q=Pisharody+Auditorium+Ottapalam',
            'calendar'          => 'https://calendar.google.com/calendar/u/0/r/eventedit?text=Betrothal+Reception+-+Melvin+%26+Delna&dates=20270329T070000Z/20270329T100000Z&details=Betrothal+Reception+of+Melvin+and+Delna&location=Pisharody%27s+Auditorium,+Ottapalam',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
