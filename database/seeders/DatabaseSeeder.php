<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('tbl_admin')->insert([
            'admin_email' => 'admin',
            'admin_password' => '123123',
            'admin_name' => 'admin',
            'admin_phone' => '123456456'

        ]);
    }
}
