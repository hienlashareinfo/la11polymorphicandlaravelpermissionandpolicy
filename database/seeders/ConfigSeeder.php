<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas[] = ['name' => 'site', 'value' => 'Dược phẩm Nhất Nhất'];
        $datas[] = ['name' => 'description', 'value' => 'Hiệu quả vượt trội'];
        if (Config::count() == 0) {
            foreach ($datas as $data) {
                Config::create($data);
            }
        }
    }
}