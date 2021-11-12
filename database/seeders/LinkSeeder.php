<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\link;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        link::create([
            'link' => 'https://youtu.be/hakMW0kvSL4'
        ]);
    }
}
