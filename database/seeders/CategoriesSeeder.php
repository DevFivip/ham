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
                "name" => "Aficiones y Ocio",
                "slug" => "aficiones-y-ocio"
            ],
            [
                "name" => "Amistad y Conocer gente",
                "slug" => "amistad-y-conocer-gente"
            ],
            [
                "name" => "Amor",
                "slug" => "amor"
            ],
            [
                "name" => "Anime, Cine y TV",
                "slug" => "anime-cine-tv"
            ],
            [
                "name" => "Anuncios",
                "slug" => "anuncions"
            ],
            [
                "name" => "Deportes y Fitness",
                "slug" => "deportes"
            ],
            [
                "name" => "Dinero y Negocios",
                "slug" => "dinero-negocios"
            ],
            [
                "name" => "Esoterismo y Energia",
                "slug" => "esoterismo-y-energia"
            ],
            [
                "name" => "Expatriados",
                "slug" => "expatriados"
            ],
            [
                "name" => "Formación, Arte y Cultura",
                "slug" => "formacion-arte-y-cultura"
            ],
            [
                "name" => "Humor",
                "slug" => "humor-memes"
            ],
            [
                "name" => "Internet y Ciencia",
                "slug" => "internet-y-ciencia"
            ],
            [
                "name" => "Juegos y Videojuegos",
                "slug" => "juegos-y-videojuegos"
            ],
            [
                "name" => "LGBTQIA+",
                "slug" => "lgbtqia+"
            ],
            [
                "name" => "Mascotas y Animales",
                "slug" => "mascotas-y-animales"
            ],
            [
                "name" => "Moda y Belleza",
                "slug" => "moda-y-belleza"
            ],
            [
                "name" => "Motor",
                "slug" => "motor"
            ],
            [
                "name" => "Música y Danza",
                "slug" => "musica-y-danza"
            ],
            [
                "name" => "Organizaciones y Movimientos",
                "slug" => "organizaciones-y-movimientos"
            ],
            [
                "name" => "Padres y Familia",
                "slug" => "padres-y-familia"
            ],
            [
                "name" => "Religión y Creencias",
                "slug" => "religion-y-creencias"
            ],
            [
                "name" => "Salud y Bienestar",
                "slug" => "salud-y-bienestar"
            ],
            [
                "name" => "Viajes",
                "slug" => "viajes"
            ],
            [
                "name" => "+18",
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
            "name" => "Grupo",
            "slug" => "grupo",
            "status" => 1,
        ]);

        GroupType::create([
            "name" => "Canal",
            "slug" => "canal",
            "status" => 1,
        ]);

        Social::create([
            "name" => "WhatsApp",
            "description" => "ejemplo de descripcion de red social",
            "icon" => "fa-brands fa-whatsapp",
            "status" => 1,
        ]);

        Social::create([
            "name" => "Telegram",
            "description" => "ejemplo de descripcion de red social",
            "icon" => "fa-telegram fa-brands",
            "status" => 1,
        ]);

        Social::create([
            "name" => "Facebook",
            "description" => "ejemplo de descripcion de red social",
            "icon" => "fa-facebook-f fa-brands",
            "status" => 1,
        ]);

        Social::create([
            "name" => "Twitch",
            "description" => "ejemplo de descripcion de red social",
            "icon" => "fa-twitch fa-brands",
            "status" => 1,
        ]);

        Social::create([
            "name" => "Youtube",
            "description" => "ejemplo de descripcion de red social",
            "icon" => "fa-youtube fa-brands",
            "status" => 1,
        ]);


        Social::create([
            "name" => "OnlyFans",
            "description" => "ejemplo de descripcion de red social",
            "icon" => "fa-discord fa-brands",
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
