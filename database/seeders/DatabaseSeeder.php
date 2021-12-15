<?php

namespace Database\Seeders;

use CommentSeeder;
use Database\Question\QuestionSeeder as QuestionQuestionSeeder;
use Database\Seeders\OpportunitySeeder as SeedersOpportunitySeeder;
use Database\Seeders\OpportunitySeeder\OpportunitySeeder as OpportunitySeederOpportunitySeeder;
use Illuminate\Database\Seeder;
use OpportunitySeeder;
use QuestionSeeder;

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

        $this->call([
// SeedersOpportunitySeeder::class
            // OpportunitySeeder::class,
            UserSeeder::class,
            // CategorySeeder::class,
            // CountrySeeder::class,
            // SeedersOpportunitySeeder::class,
            // OpportunitySeeder::class,
            // FavouriteSeeder::class,
            // QuestionQuestionSeeder::class,
            // CommentSeeder::class,
           

        ]);
        // $this->call(CategorySeeder::class);
        // $this->call(CountrySeeder::class);
        // $this->call(OpportunitySeeder::class);
    }
}
