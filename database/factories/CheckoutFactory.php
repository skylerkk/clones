<?php

namespace Database\Factories;

use App\Models\Checkout;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Book;

class CheckoutFactory extends Factory
{
    protected $model = Checkout::class;

    public function definition()
    {
        return [
            'ref_user_id' => User::all()->random(1)->first()->id,
            'ref_book_id' => Book::all()->random(1)->first()->id
        ];
    }
}
