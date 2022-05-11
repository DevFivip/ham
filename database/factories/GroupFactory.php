<?php

namespace Database\Factories;

use DateInterval;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $date = new DateTime();
        $datesum = $date->add(new DateInterval('P15D'));

        return [
            "name" => $this->faker->name(),
            "description" => $this->faker->name(),
            "categoria_id" => rand(1, 24),
            "subcategoria_id" => rand(1, 801),
            "location_id" => rand(1, 214),
            "social_id" => rand(1, 6),
            "user_id" => 1,
            "group_type_id" => rand(1, 2),
            "status" => 1,
            "slug" => $this->faker->name(),
            "views" => 0,
            "show_views" => 1,
            "can_access_any_location" => 1,
            "url" => $this->faker->url(),
            "imagen" => '...',
            "banner" => '...',
            "fecha_corte" => $datesum
        ];
    }
}
