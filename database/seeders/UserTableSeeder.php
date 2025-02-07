<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Jan',
            'email' => 'jan@hotmail.be',
        ])->each(function (User $user) {
            // Voor elke gebruiker maken we 3 profiles aan.
            // Hier gebruiken we de relatie 'profiles' op de User model voor.
            $user->profiles()->saveMany(
                Profile::factory(3)->make()
            );
        });;

        User::factory(25)->create()
            ->each(function (User $user) {
                // Voor elke gebruiker maken we 3 profiles aan.
                // Hier gebruiken we de relatie 'profiles' op de User model voor.
                $user->profiles()->saveMany(
                    Profile::factory(3)->make()
                );
            });

    }
}
