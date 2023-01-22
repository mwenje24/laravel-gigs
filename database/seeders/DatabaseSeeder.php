<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(3)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title'=>'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'google.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        //         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        //         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        //         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        //         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        //         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        // ]);

        // Listing::create([
        //     'title'=>'React Junior Developer',
        //     'tags' => 'javascript, css',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'google.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        //         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        //         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        //         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        //         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        //         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        // ]);
    }
}
