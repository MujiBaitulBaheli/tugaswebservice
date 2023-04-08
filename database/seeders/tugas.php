<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tugas = [
        'id' => '111',
        'author' => 'abc',
        'title' => 'def',
        'body' => 'Puji Baitul',
        'keyword' => 'jkl',
        'created_at' => new \DateTime ,
        'updated_at' => null
        ];
        \DB::table('table_blog')->insert ($tugas);
    }
}
