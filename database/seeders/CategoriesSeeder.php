<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Group;
use App\Models\GroupType;
use App\Models\Social;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $string = file_get_contents(__dir__ . "/../../resources/js/subcategorias.json");
        $json = json_decode($string, true);


        $categorias = [
            [
                "name" => "Hobbies and Leisure",
                "slug" => "aficiones-y-ocio"
            ],
            [
                "name" => "Friendship and Meeting people",
                "slug" => "amistad-y-conocer-gente"
            ],
            [
                "name" => "Love",
                "slug" => "amor"
            ],
            [
                "name" => "Anime, Movies and TV",
                "slug" => "anime-cine-tv"
            ],
            [
                "name" => "Ads",
                "slug" => "anuncions"
            ],
            [
                "name" => "Sports and Fitness",
                "slug" => "deportes"
            ],
            [
                "name" => "Money and Business",
                "slug" => "dinero-negocios"
            ],
            [
                "name" => "Esotericism and Energy",
                "slug" => "esoterismo-y-energia"
            ],
            [
                "name" => "Expatriates",
                "slug" => "expatriados"
            ],
            [
                "name" => "Training, Art and Culture",
                "slug" => "formacion-arte-y-cultura"
            ],
            [
                "name" => "Humor",
                "slug" => "humor-memes"
            ],
            [
                "name" => "Internet and Science",
                "slug" => "internet-y-ciencia"
            ],
            [
                "name" => "Games and Video Games",
                "slug" => "juegos-y-videojuegos"
            ],
            [
                "name" => "LGBTQIA+",
                "slug" => "lgbtqia+"
            ],
            [
                "name" => "Pets and Animals",
                "slug" => "mascotas-y-animales"
            ],
            [
                "name" => "Fashion and Beauty",
                "slug" => "moda-y-belleza"
            ],
            [
                "name" => "Motor",
                "slug" => "motor"
            ],
            [
                "name" => "Music and Dance",
                "slug" => "musica-y-danza"
            ],
            [
                "name" => "Organizations and Movements",
                "slug" => "organizaciones-y-movimientos"
            ],
            [
                "name" => "Parents and Family",
                "slug" => "padres-y-familia"
            ],
            [
                "name" => "Religion and Beliefs",
                "slug" => "religion-y-creencias"
            ],
            [
                "name" => "Health and Wellness",
                "slug" => "salud-y-bienestar"
            ],
            [
                "name" => "Travel",
                "slug" => "viajes"
            ],
            [
                "name" => "NSFW",
                "slug" => "nsfw"
            ],
        ];

        for ($c = 0; $c < count($categorias); $c++) {
            Category::create([
                "name" => $categorias[$c]["name"],
                "slug" => $categorias[$c]["slug"],
                "status" => 1
            ]);
        }

        for ($sc = 0; $sc < count($json); $sc++) {
            Subcategory::create([
                "name" => $json[$sc]["categoryName"],
                "slug" => $json[$sc]["categoryUrl"],
                "categoria_id" => $json[$sc]["categoryGroupID"],
                "status" => 1,
            ]);
        }

        GroupType::create([
            "name" => "Group",
            "slug" => "group",
            "status" => 1,
        ]);

        GroupType::create([
            "name" => "Channel",
            "slug" => "channel",
            "status" => 1,
        ]);

        Social::create([
            "name" => "WhatsApp",
            "description" => "You are ready to establish a contact",
            "icon" => "fa-brands fa-whatsapp",
            "status" => 1,
        ]);

        Social::create([
            "name" => "Telegram",
            "description" => "You are ready to establish a contact",
            "icon" => "fa-telegram fa-brands",
            "status" => 1,
        ]);

        // Social::create([
        //     "name" => "Facebook",
        //     "description" => "ejemplo de descripcion de red social",
        //     "icon" => "fa-facebook-f fa-brands",
        //     "status" => 1,
        // ]);

        // Social::create([
        //     "name" => "Twitch",
        //     "description" => "ejemplo de descripcion de red social",
        //     "icon" => "fa-twitch fa-brands",
        //     "status" => 1,
        // ]);

        // Social::create([
        //     "name" => "Youtube",
        //     "description" => "ejemplo de descripcion de red social",
        //     "icon" => "fa-youtube fa-brands",
        //     "status" => 1,
        // ]);

        Social::create([
            "name" => "OnlyFans",
            "description" => "Select an onlyfans and give your love to your favorite content creator",
            "icon" => "onlyfans",
            "status" => 1,
        ]);

        Group::create([
            "name" => "ZXP GROUP",
            "description" => "CONOCE CHICAS HERMOSAS",
            "user_id" => 1,
            "categoria_id" => 1,
            "subcategoria_id" => 1,
            "location_id" => 1,
            "social_id" => 1,
            "group_type_id" => 1,
            "slug" => "ZXP-GROUP",
            "views" => 0,
            "url" => "t.me/groupzxp",
            "imagen" => "",
            "banner" => "",
            "show_views" => 1,
            "can_access_any_location" => 1,
            "status" => 1
        ]);
    }
}
