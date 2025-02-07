<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use App\Models\WatchHistory;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory()->create(['name' => 'Jan',
            'email' => 'jan@hotmail.be',])->each(function (User $user) {
            // Maak 3 profielen aan en sla ze direct op
            $profiles = Profile::factory(3)->create(['user_id' => $user->id]);

            // Voor elk profiel, maak een willekeurig aantal kijkgeschiedenis-items aan
            $profiles->each(function ($profile) {
                // Hier maken we de kijkgeschiedenis-items aan, maar met make() zodat we saveMany kunnen gebruiken
                $watchHistories = WatchHistory::factory(rand(10, 23))->make();

                // Koppel en sla de kijkgeschiedenis-items op voor dit profiel
                $profile->watchHistories()->saveMany($watchHistories);
            });
        });

        User::factory(25)->create()->each(function (User $user) {
            // Maak 3 profielen aan en sla ze direct op
            $profiles = Profile::factory(3)->create(['user_id' => $user->id]);
            // Voor elk profiel, maak een willekeurig aantal kijkgeschiedenis-items aan
            $profiles->each(function ($profile) {
                // Hier maken we de kijkgeschiedenis-items aan, maar met make() zodat we saveMany kunnen gebruiken
                $watchHistories = WatchHistory::factory(rand(10, 23))->make();
                // Koppel en sla de kijkgeschiedenis-items op voor dit profiel
                $profile->watchHistories()->saveMany($watchHistories);
            });
        });

    }
}
