<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Continent;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Continent::create([
            'name' => 'Africa',  
            'created_at' => now(),
            'updated_at' => now()
    ]);
        Continent::create([
            'name' => 'Asia',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Continent::create([
        'name' => 'Australia',
        'created_at' => now(),
        'updated_at' => now()
    ]);
        Continent::create([
            'name' => 'Europe',
            'created_at' => now(),
            'updated_at' => now()    
    ]);
        Continent::create([
            'name' => 'North America',
            'created_at' => now(),
            'updated_at' => now()
    ]);
        Continent::create([
            'name' => 'South America',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Continent::create([
        'name' => 'Antarctica',
        'created_at' => now(),
        'updated_at' => now()]
    );
        
    }
}
