<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // User::create([
        //     'name' => 'yaya',
        //     'email' => 'yaya@gmail.com',
        //     'password' => bcrypt ('123456')
        // ]);

        User::create([
            'name' => 'Alya',
            'email' => 'alya@gmail.com',
            'password' => bcrypt ('1234')
        ]);

        User::create([
            'name' => 'yaya',
            'email' => 'yaya@gmail.com',
            'password' => bcrypt('1234'),
            'is_admin' =>true,
        ]);

        $product1 = DB::table('products')->insert([
            'name' => 'Contoh Produk 1',
            'price' => 10000,
            'description' => 'Deskripsi produk contoh 1',
            'image' => 'https://i.pinimg.com/474x/a8/6e/c0/a86ec0b11ee43d2d1b70496f36805d2f.jpg',
            'stok' => 10,
            'category' => 'Cardigan', // Pastikan kolom category diisi
            'created_at' => now(),
            'updated_at' => now(),
    
        ]);
    }
}
