<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CustomFieldSeeder extends Seeder
{
    public function run()
    {
        DB::table('custom_fields')->insert([
            [
                'name' => 'field1',
                'fields' => 'text',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Add more fields as needed
        ]);
    }
}
