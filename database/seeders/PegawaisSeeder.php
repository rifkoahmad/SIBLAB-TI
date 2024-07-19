<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosenData = [
            [1, 'Adelwin Amnur, A.Md', '198407192008011005',    'teknisi', '08123456789', 'awin.amnur@gmail.com', ''],
            [2, 'Hendra Saputra, S.Kom', '198310182008121001',    'teknisi', '08123456789', 'hendra.cspdg@gmail.com', ''],
            [3, 'Raemon Syaljumairi, S.Kom.,M.Kom', '198407172010121112',    'teknisi', '08123456789', 'remon17@gmail.com', ''],
            [4, 'Ir. Ronal Hadi, S.T., M.Kom', '197601292002121001',     'pimpinan', '08123456789', 'mr.ronalhadi@gmail.com', ''],
            [5, 'Fitri Nova, S.ST., M.T', '198505292014042001',      'pimpinan', '08123456789', 'fitrinova@pnp.ac.id', ''],
            [6, 'Cipto Prabowo, S.T, M.T', '197403022008121001',     'dosen', '08123456789', 'cipto@pnp.ac.id', ''],
            [7, 'Deddy Prayama, S.Kom, M.ISD', '198104152006041002', 'dosen', '08123456789', 'deddy@pnp.ac.id', ''],
            [8, 'Defni, S.Si, M.Kom', '198112072008122001',          'dosen', '08123456789', 'defni@pnp.ac.id', ''],
            [9, 'Deni Satria, S.Kom, M.Kom', '197809282008121002',   'dosen', '08123456789', 'dns1st@gmail.com', ''],
            [10, 'Dwniny Meidefli, S.Kom, M.Cs', '198605092014042001', 'dosen', '08123456789', 'dwinymeidelfi@pnp.ac.id', ''],
            [11, 'Ervan Asri, S.Kom, M.Kom', '197809012008121001',    'dosen', '08123456789', 'ervan@pnp.ac.id', ''],
        ];

        foreach ($dosenData as $data) {
            DB::table('pegawais')->insert([
                'users_id' => $data[0],
                'nama' => $data[1],
                'nip_nik' => $data[2],
                'jabatan_akademik' => $data[3],
                'no_telepon' => $data[4],
                'email' => $data[5],
                'foto' => $data[6],
            ]);
        }
    }
}
