<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OutletsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Outlet::create([
            'code' => Str::random(),
            'name' => 'Nazel Akbar',
            'status' => 'selesai',
            'address' => 'Bojong Gede',
            'phone' => '08778668888',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Bejo sugeng',
            'status' => 'Berlangsung',
            'address' => 'Sentul',
            'phone' => '089877899087',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Faisal hanif',
            'status' => 'selesai',
            'address' => 'Cibinong',
            'phone' => '098789797654',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Zaka budi',
            'status' => 'berlangsung',
            'address' => 'Depok',
            'phone' => '089876574534',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Dedy ahmad',
            'status' => 'selesai',
            'address' => 'Sukahati',
            'phone' => '078797687676',
        ]);
    }
}