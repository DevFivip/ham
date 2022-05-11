<?php

namespace Database\Seeders;

use App\Models\User;
use DateInterval;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = new DateTime();
        $newdate = $data->add(new DateInterval('P20D'));
        User::create(
            [
                'name' => 'Bartolomeo J Simpson',
                'email' => 'admin@adolfo2403.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'categoria_id' => 1,
                'fecha_vencimiento_categoria' => $newdate
            ]
        );
    }
}
