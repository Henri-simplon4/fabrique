<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;


class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRecords = [
            [
                'id' => 3,
                'nom' => 'Henri',
                'type' => 'admin',
                'apprenant_id' => 0,
                'telephone' => '57531441',
                'email' => 'henriouedraogo245@gmail.com',
                'password' => '$2a$10$AatoYNoNZAlVx91lw/tGLuRGIe7sCEYRYW/Q05IId.2vUJscVUKRS',
                'status' => 1,
            ],
        ];
        Admin::insert($adminRecords);
    }
}
