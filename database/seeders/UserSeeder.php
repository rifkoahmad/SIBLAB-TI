<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $User = [
            ['Alde Alandra, S.Kom, M.T', 'alde@pnp.ac.id'],
            ['Aldo Erianda, M.T, S.ST', 'aldo@pnp.ac.id'],
            ['Cipto Prabowo, S.T, M.T', 'cipto@pnp.ac.id'],
            ['Deddy Prayama, S.Kom, M.ISD', 'deddy@pnp.ac.id'],
            ['Defni, S.Si, M.Kom', 'defni@pnp.ac.id'],
            ['Deni Satria, S.Kom, M.Kom', 'dns1st@gmail.com'],
            ['Dwiny Meidefli, S.Kom, M.Cs', 'dwinymeidelfi@pnp.ac.id'],
            ['Ervan Asri, S.Kom, M.Kom', 'ervan@pnp.ac.id'],
            ['Wara Ulan Saputri', 'Wara@gmail.com'],
            ['Silvia Angraini', 'Silvia@gmail.com'],
            ['Dea Annona Prayetno Putri', 'Dea@gmail.com'],
            ['Yulia Ramadhani', 'Yulia@gmail.com'],
            ['Syahrul Gusti Hafendi', 'Syahrul@gmail.com'],
            ['Rendhika Aditya', 'Rendhika@gmail.com'],
            ['Hexa Aristia', 'Hexa@gmail.com'],
            ['Novelia Desrina Putri', 'Novelia@gmail.com'],
            ['Fauziah Wulandari',  'Fauziah@gmail.com'],
            ['Ira Agustiana',  'Ira@gmail.com'],
            ['Dede Rahman',  'DEDE@gmail.com'],
            ['Farhan Hafifi',  'Farhan@gmail.com'],
            ['Zulmaidi',  'Zulmaidi@gmail.com'],
            ['Haditya Hanafi',  'HADITYA@gmail.com'],
            ['Roberto Firman',  'Roberto@gmail.com'],
            ['Yenni Wati',  'Yenni@gmail.com'],
            ['Pm Riefki Muhammad Farhan',  'PM@gmail.com'],
            ['Deo Febrino Mudri',  'Deo@gmail.com'],
        ];

        foreach ($User as $data) {
            DB::table('users')->insert([
                'name' => $data[0],
                'email' => $data[1],
                'password' => Hash::make('12345678'),
            ]);
        }
    }
}
