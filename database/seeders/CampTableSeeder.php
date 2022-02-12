<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila-belajar',
                'price' => 280,
                // 'created_at' => date('Y-m-d H:i:s', time()),
                // 'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [
                'title' => 'Mulai Belajar',
                'slug' => 'mulai-belajar',
                'price' => 140,
                // 'created_at' => date('Y-m-d H:i:s', time()),
                // 'updated_at' => date('Y-m-d H:i:s', time())
            ]
        ];

        // Cara 1
        // Dengan cara ini, created_at dan updated_at akan secara otomatis terisi dengan waktu sekarang
        foreach ($camps as $key => $camp)
        {
            Camp::create($camp);
        }

        // Cara 2
        // Dengan cara ini, created_at dan updated_at akan berisi null karena tidak didefinisikan secara langsung
        // Camp::insert($camps);
    }
}
