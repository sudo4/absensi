<?php

use Illuminate\Database\Seeder;

class MunasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Company::insert([
            [
                'nama' => 'PT UJI COBA ABSENSI 1',
                'sippmi' => '123 TAHUN 2020',
                'alamat' => 'JL UJICOBA ABSENSI 1 BY DEVELOPER',
                'telp_kantor' => '02121231234',
                'telp_kantor2' => '02121231235',
                'surel' => 'ujicoba1@munasapjati.id', 
            ],
            [
                'nama' => 'PT UJI COBA ABSENSI 2',
                'sippmi' => '133 TAHUN 2020',
                'alamat' => 'JL UJICOBA ABSENSI 2 BY DEVELOPER',
                'telp_kantor' => '02121231244',
                'telp_kantor2' => '02121231335',
                'surel' => 'ujicoba2@munasapjati.id', 
            ],
        ]);
        
        \App\Models\Member::insert([
            [
                'nama' => 'DELEGASI 1',
                'company_id'  => '1',
                'no_hp' => '081212343214',
                'photo' => 'public/storage/photo/1603040036APJATI.jpg',
                'KEHADIRAN' => 'tidak_hadir',
            ],
        ]);

        \App\Models\Visitor::insert([
            [
                'nama' => 'TAMU 1',
                'nik' => '3175123432143124',
                'phone' => '081231234123',
                'konfirmasi' => 'tidak_hadir',
            ],
        ]);
    }
}
