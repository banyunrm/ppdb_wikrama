<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        'nisn' => 'admin123',
            'jk' => 'Laki-laki',
            'namalengkap' => 'admin',
            'asalsekolah' => 'SMP Negeri 2 Ciawi',
            'email' => 'admin@gmail.com',
            'no_hp' => '085697673335',
            'no_hp_ayah' => '08558963050',
            'no_hp_ibu' => '085885666581',
            'referensi' => 'Siswa SMK Wikrama',
            'password' => bcrypt('admin123')
        ]);
    }
}
