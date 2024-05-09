<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $num_category = Category::count();
        $random_number = fake()-> randomNumber(1);

        if ($num_category > 0 and $random_number < 3) {
            return [
                'category_name'=> fake()->name(),
                'category_slug'=> fake()->slug(),
                'category_parent_id'=> Category::all()->random()->id,
            ];
        }else {
            return [
                'category_name'=> fake()->name(),
                'category_slug'=> fake()->slug(),
                'category_parent_id'=> 0,
            ];
        }

    }
}
