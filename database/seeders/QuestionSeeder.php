<?php
namespace Database\Question;
use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::factory(2)->create();
        // factory(\App\Models\Question::class, 250)->create();
    }
}
