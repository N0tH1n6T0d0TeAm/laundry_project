<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengguna;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengguna::truncate();
        Pengguna::create([
            'nama_pengguna' => 'Dion',
            'role' => 'admin',
            'email' => 'dion@mail.com',
            'password' => bcrypt('87654321'),
        ]);
    }
}
