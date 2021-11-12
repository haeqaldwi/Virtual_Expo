<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jadwal;
use App\Models\link;
use App\Models\aktuaria;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // \App\Models\User::factory(10)->create();
        Jadwal::create([
            'event' => 'Pembukaan',
            'jam' => '07.00 - 07.30'
        ]);

        Jadwal::create([
            'event' => 'JTIP',
            'jam' => '07.30 - 08.30'
        ]);

        Jadwal::create([
            'event' => 'JSTP',
            'jam' => '08.30 - 09.30'
        ]);

        Jadwal::create([
            'event' => 'JMTI',
            'jam' => '09.30 - 10.30'
        ]);

        Jadwal::create([
            'event' => 'JSTPK',
            'jam' => '10.30 - 11.30'
        ]);

        Jadwal::create([
            'event' => 'JIKL',
            'jam' => '11.30 - 12.00'
        ]);
        link::create([
            'nama' => 'Link Acara',
            'link' => 'https://meet.google.com/mnb-owca-xox?pli=1&authuser=0'
        ]);
        // aktuaria::create([
        //     'Nama' => 'Gambar 1'

        // ]);
        // aktuaria::create([
        //     'Nama' => 'Gambar 2'

        // ]);
        // aktuaria::create([
        //     'Nama' => 'Gambar 3'

        // ]);
        // aktuaria::create([
        //     'Nama' => 'Gambar 4'

        // ]);
    }
}
