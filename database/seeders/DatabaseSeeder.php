<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();

        Listing::create([
            'title'=>'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'google.com',
            'description' => 'Lorem Ipsum dolor sit amet'
        ]);

        Listing::create([
            'title'=>'React Junior Developer',
            'tags' => 'javascript, css',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'google.com',
            'description' => 'Lorem Ipsum dolor sit amet'
        ]);
    }
}
