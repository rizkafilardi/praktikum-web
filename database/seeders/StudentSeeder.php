<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Octavia Ramadhani',
                'student_id_number' => 'F55123015',
                'email' => 'ramadhanivia489@gmail.com',
                'phone_number' => '085398643661',
                'birth_date' => '2004-10-20',
                'gender' => 'Female',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'Rizak Filardi Toliz',
                'student_id_number' => 'F55123034',
                'email' => 'rfilarditz@gmail.com',
                'phone_number' => '085135794810',
                'birth_date' => '2005-06-27',
                'gender' => 'Female',
                'status' => 'active',
                'major_id' => 2,
            ],
        ]);
    }
}