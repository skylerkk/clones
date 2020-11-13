<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'excerpt' => $this->faker->text($maxNbChars = 200),
            'isbn' => 'abc',
            'pages' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'cost' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'value' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'status' => 0
        ];
    }
}
