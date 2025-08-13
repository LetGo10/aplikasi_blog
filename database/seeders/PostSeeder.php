<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Sungai Pisang: Pengembaraan Merentasi Terowong',
                'content' => 'Pengalaman unik merentasi terowong sebelum tiba ke air terjun. Sesuai untuk aktiviti hujung minggu bersama rakan-rakan.',
                'author' => 'Wani Abdullah',
                'author_info' => 'Penulis Blog',
                'image' => '',
                'category' => 'Alam Semula Jadi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
