<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BorrowRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => \App\Models\Book::factory(),
            'member_id' => \App\Models\Member::factory(),
            'borrow_date' => $this->faker->date('Y-m-d', '2025-01-01', '2025-09-10'),
            'return_date' => $this->faker->optional()->date('Y-m-d', '2020-01-02', '2025-09-11'),
            

        ];
    }
}
