<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'email' => 'admin@admin',
                'password' => bcrypt('adminadmin'),
                'role' => 'admin'
            ],
            [
                'name' => 'Pelajar',
                'email' => 'pelajar@pelajar',
                'password' => bcrypt('pelajarpelajar'),
                'role' => 'santri'
            ],
            [
                'name' => 'Pengajar',
                'email' => 'pengajarr@pengajar',
                'password' => bcrypt('pengajarpengajar'),
                'role' => 'ustad'
            ],
        ]);
    }
}
