<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    // Fungsi ini mensimulasikan pemanggilan Database (Eloquent)
    private function getProdiData()
    {
        return collect([
            [
                'slug' => 'd4-trin',
                'kode' => 'TRIN',
                'nama_lengkap' => 'D4 Teknologi Rekayasa Informatika Industri',
                'gelar' => 'Sarjana Terapan Teknik (S.Tr.T.)',
                'deskripsi_singkat' => 'Menggabungkan sains, teknologi, dan rekayasa untuk merancang dan memelihara sistem ERP manufaktur serta sistem eksekusi manufaktur pada proses produksi.',
                'visi' => 'Menjadi program studi yang unggul dalam pengembangan dan penerapan Teknologi Rekayasa Informatika Industri 4.0 yang diakui secara nasional maupun internasional.',
                'keunggulan' => [
                    'Menerapkan AI pada sistem dan teknologi informasi untuk mendukung proses manufaktur.',
                    'Membuat interfacing antara sistem IT dengan hardware peralatan manufaktur.',
                    'Mengevaluasi dan mengintegrasikan sistem ERP dan Manufacturing Execution System (MES).'
                ],
                'link_bahan_ajar' => 'https://drive.google.com/drive/folders/1qnazc3vwgD_1NJJDapS1va_tDk51BTCR?usp=drive_link',
                'image_cover' => 'img-prodi-trin.webp'
            ],
            [
                'slug' => 'd4-trmo',
                'kode' => 'TRMO',
                'nama_lengkap' => 'D4 Teknologi Rekayasa Mekatronika',
                'gelar' => 'Sarjana Terapan Teknik (S.Tr.T.)',
                'deskripsi_singkat' => 'Sinergi ilmu pengetahuan dan teknologi dari teknik mesin, elektronika, informatika, dan kendali untuk memproduksi dan memelihara sistem otomatis.',
                'visi' => 'Menjadi program studi terkemuka dalam penerapan dan pengembangan teknologi otomasi manufaktur dan mekatronika pada permesinan industri di Indonesia.',
                'keunggulan' => [
                    'Kompeten dalam menangani sistem dan perangkat otomatis.',
                    'Merancang, merangkai dan memelihara mesin atau peralatan otomatis secara terpisah maupun terintegrasi.',
                    'Berperan sebagai penggerak science-driven technology.'
                ],
                'link_bahan_ajar' => 'https://drive.google.com/drive/folders/1I2hqDn9o81xM8cNGPYZFuT1-_AaDqsts?usp=drive_link',
                'image_cover' => 'img-prodi-trmo.webp'
            ],
            [
                'slug' => 'd4-tro',
                'kode' => 'TRO',
                'nama_lengkap' => 'D4 Teknologi Rekayasa Otomasi',
                'gelar' => 'Sarjana Terapan Teknik (S.Tr.T.)',
                'deskripsi_singkat' => 'Mengintegrasikan disiplin ilmu kontrol, manufaktur, dan IT untuk menghadapi perubahan cara hidup dan proses kerja secara fundamental di era revolusi industri 4.0.',
                'visi' => 'Menjadi program studi yang unggul dalam pengembangan dan penerapan teknologi rekayasa otomasi industri 4.0 yang diakui secara nasional maupun internasional.',
                'keunggulan' => [
                    'Merancang bangun sistem elektromekanik berbasis kendali terprogram (PLC/SCADA).',
                    'Menggunakan software engineering (SolidWorks, SCADA) menurut standar keselamatan kerja.',
                    'Menerapkan drawing database (BOM) dan P&ID.'
                ],
                'link_bahan_ajar' => 'https://drive.google.com/drive/folders/1I2hqDn9o81xM8cNGPYZFuT1-_AaDqsts?usp=drive_link',
                'image_cover' => 'img-prodi-tro.webp'
            ],
            [
                'slug' => 'd2-trmo',
                'kode' => 'D2 TRMO',
                'nama_lengkap' => 'D2 Jalur Cepat Teknik Mekatronika',
                'gelar' => 'Ahli Muda (A.Ma.)',
                'deskripsi_singkat' => 'Program akselerasi vokasi (3 semester) yang menghasilkan lulusan Ahli Muda dengan profil sebagai Senior Operator dan Junior Technician.',
                'visi' => 'Menjadi akselerator peningkatan kompetensi lulusan SMK di Indonesia melalui pendidikan vokasi yang berorientasi industri.',
                'keunggulan' => [
                    'Waktu tempuh sangat singkat: 1 semester di kampus, 2 semester magang industri.',
                    'Fokus pada pengetesan, kalibrasi mesin, dan perawatan preventif.',
                    'Kerjasama langsung dengan 10+ SMK Mitra dan DUDIKA.'
                ],
                'link_bahan_ajar' => 'https://drive.google.com/drive/folders/1I2hqDn9o81xM8cNGPYZFuT1-_AaDqsts?usp=drive_link',
                'image_cover' => 'img-prodi-d2.webp'
            ]
        ]);
    }

    public function show($slug)
    {
        $allProdi = $this->getProdiData();

        // Cari prodi berdasarkan parameter URL slug
        $prodi = $allProdi->firstWhere('slug', $slug);

        if (!$prodi) {
            abort(404, 'Data Program Studi tidak ditemukan.');
        }

        // Ambil 3 prodi lainnya untuk navigasi "Lihat Lainnya" di bawah halaman
        $otherProdi = $allProdi->where('slug', '!=', $slug)->values();

        return view('guest.prodi.show', compact('prodi', 'otherProdi'));
    }
}
