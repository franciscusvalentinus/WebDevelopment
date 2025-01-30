<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'department'  => 'IBM-RC',
            ],
            [
                'department'  => 'IBM-IC',
            ],
            [
                'department'  => 'ACC',
            ],
            [
                'department'  => 'FIKOM',
            ],
            [
                'department'  => 'HTB',
            ],
            [
                'department'  => 'CBZ',
            ],
            [
                'department'  => 'PSY',
            ],
            [
                'department'  => 'IMT',
            ],
            [
                'department'  => 'ISB',
            ],
            [
                'department'  => 'VCD',
            ],
            [
                'department'  => 'INA',
            ],
            [
                'department'  => 'FPD',
            ],
            [
                'department'  => 'MED',
            ],
            [
                'department'  => 'FTP',
            ],
            [
                'department'  => 'MEM',
            ],
            [
                'department'  => 'Lain-lain',
            ],
        ];

        Department::insert($departments);
    }
}
