<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Database\Factories\AnggotaFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        AnggotaFactory::factoryForModel('Anggota')->create();
        // Anggota::create([
        //     'nama' => 'Rais Zidane',
        //     'email' => 'raiszidane@gmail.com',
        //     'password' => bcrypt('123123'),
        //     'role' => '2',
        //     'npm' => '1817051002',
        //     'fakultas' => 'MIPA',
        //     'id_departemen' => '5',
        // ]);

        // Anggota::create([
        //     'nama' => 'Andri feriansyah',
        //     'email' => 'andrifery@gmail.com',
        //     'password' => bcrypt('123123'),
        //     'role' => '2',
        //     'npm' => '1817051013',
        //     'fakultas' => 'MIPA',
        //     'id_departemen' => '5',
        // ]);
    }
}
