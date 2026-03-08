<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gurus = [
            [
                'nip' => '198001012005011001',
                'nama' => 'H. Ahmad Fauzi',
                'tmt' => '2005-01-01',
                'pangkat' => 'Pembina',
                'jabatan' => 'Kepala Sekolah',
            ],
            [
                'nip' => '198502022010011002',
                'nama' => 'Dra. Siti Aminah',
                'tmt' => '2010-02-02',
                'pangkat' => 'Penata Tingkat I',
                'jabatan' => 'Wakil Kurikulum',
            ],
            [
                'nip' => '198703032012011003',
                'nama' => 'Budi Santoso, S.Pd',
                'tmt' => '2012-03-03',
                'pangkat' => 'Penata Muda Tingkat I',
                'jabatan' => 'Guru Matematika',
            ],
            [
                'nip' => '198804042012011004',
                'nama' => 'Dewi Kartika, S.Pd',
                'tmt' => '2012-04-04',
                'pangkat' => 'Penata Muda',
                'jabatan' => 'Guru Bahasa Indonesia',
            ],
            [
                'nip' => '198905052013011005',
                'nama' => 'Eko Prasetyo, S.Kom',
                'tmt' => '2013-05-05',
                'pangkat' => 'Penata Muda Tingkat I',
                'jabatan' => 'Guru TIK',
            ],
            [
                'nip' => '199006062013011006',
                'nama' => 'Fitri Handayani, S.Pd',
                'tmt' => '2013-06-06',
                'pangkat' => 'Penata Muda',
                'jabatan' => 'Guru Biologi',
            ],
            [
                'nip' => '199107072014011007',
                'nama' => 'Gunawan Wijaya, S.Pd',
                'tmt' => '2014-07-07',
                'pangkat' => 'Penata Muda Tingkat I',
                'jabatan' => 'Guru Fisika',
            ],
            [
                'nip' => '199208082014011008',
                'nama' => 'Haryono, S.Pd',
                'tmt' => '2014-08-08',
                'pangkat' => 'Penata Muda',
                'jabatan' => 'Guru Kimia',
            ],
            [
                'nip' => '199309092015011009',
                'nama' => 'Indah Permata, S.Pd',
                'tmt' => '2015-09-09',
                'pangkat' => 'Penata Muda Tingkat I',
                'jabatan' => 'Guru Bahasa Inggris',
            ],
            [
                'nip' => '199410102015011010',
                'nama' => 'Joko Susilo, S.Pd',
                'tmt' => '2015-10-10',
                'pangkat' => 'Penata Muda',
                'jabatan' => 'Guru Sejarah',
            ],
            [
                'nip' => '199511112016011011',
                'nama' => 'Kartika Sari, S.Pd',
                'tmt' => '2016-11-11',
                'pangkat' => 'Penata Muda Tingkat I',
                'jabatan' => 'Guru Geografi',
            ],
            [
                'nip' => '199612122016011012',
                'nama' => 'Lukman Hakim, S.Pd',
                'tmt' => '2016-12-12',
                'pangkat' => 'Penata Muda',
                'jabatan' => 'Guru Ekonomi',
            ],
            [
                'nip' => '199701012017011013',
                'nama' => 'Maya Indriani, S.Pd',
                'tmt' => '2017-01-01',
                'pangkat' => 'Penata Muda Tingkat I',
                'jabatan' => 'Guru Sosiologi',
            ],
            [
                'nip' => '199802022017011014',
                'nama' => 'Novi Anggraini, S.Pd',
                'tmt' => '2017-02-02',
                'pangkat' => 'Penata Muda',
                'jabatan' => 'Guru Seni Budaya',
            ],
            [
                'nip' => '199903032018011015',
                'nama' => 'Oscar Pratama, S.Pd',
                'tmt' => '2018-03-03',
                'pangkat' => 'Penata Muda Tingkat I',
                'jabatan' => 'Guru PJOK',
            ],
            [
                'nip' => '200004042018011016',
                'nama' => 'Putri Ayu, S.Pd',
                'tmt' => '2018-04-04',
                'pangkat' => 'Penata Muda',
                'jabatan' => 'Guru Matematika',
            ],
            [
                'nip' => '200105052019011017',
                'nama' => 'Rian Hidayat, S.Pd',
                'tmt' => '2019-05-05',
                'pangkat' => 'Penata Muda Tingkat I',
                'jabatan' => 'Guru Fisika',
            ],
            [
                'nip' => '200206062019011018',
                'nama' => 'Sri Rahayu, S.Pd',
                'tmt' => '2019-06-06',
                'pangkat' => 'Penata Muda',
                'jabatan' => 'Guru Biologi',
            ],
            [
                'nip' => '200307072020011019',
                'nama' => 'Taufik Hidayat, S.Kom',
                'tmt' => '2020-07-07',
                'pangkat' => 'Penata Muda Tingkat I',
                'jabatan' => 'Guru TIK',
            ],
            [
                'nip' => '200408082020011020',
                'nama' => 'Utami Sari, S.Pd',
                'tmt' => '2020-08-08',
                'pangkat' => 'Penata Muda',
                'jabatan' => 'Guru Bahasa Indonesia',
            ],
        ];

        foreach ($gurus as $guru) {
            Guru::create($guru);
        }
    }
}
