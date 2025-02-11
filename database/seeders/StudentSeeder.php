<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('students')->insert([
        //     'nama' => "sila ardiyansah",
        //     'alamat' => "sempu",
        //     'jenis_kelamin' => 'Laki - Laki'

        // ]);
        DB::table('students')->insert([
            'nama' => "sila ",
            'alamat' => "genteng",
            'jenis_kelamin' => 'Perempuan'

        ]);
    }
}
