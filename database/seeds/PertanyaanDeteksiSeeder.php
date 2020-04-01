<?php

use Illuminate\Database\Seeder;

class PertanyaanDeteksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pertanyaan_deteksi')->truncate();

        DB::table('pertanyaan_deteksi')->insert([
						[
							'pertanyaan' => 'Apakah Anda Mengalami Demam / Memiliki Riwayat Demam ?',
							'urutan' => 1,
						],
						[
							'pertanyaan' => 'Apakah Anda Mengalami Batuk ?',
							'urutan' => 2,
						],
						[
							'pertanyaan' => 'Apakah Anda Mengalami Pilek ?',
							'urutan' => 3,
						],
						[
							'pertanyaan' => 'Apakah Anda Mengalami Nyeri Tenggorokan ?',
							'urutan' => 4,
						],
						[
							'pertanyaan' => 'Apakah Anda Mengalami Lemah, Letih, dan Lesu ?',
							'urutan' => 5,
						],
						[
							'pertanyaan' => 'Apakah Anda Mengalami Sesak Nafas ?',
							'urutan' => 6,
						],
						[
							'pertanyaan' => 'Pada 14 Hari Terakhir sebelum Gejala, Apakah Anda Memiliki Riwayat Perjalanan atau Tinggal di Luar Negeri yang Terjangkit Covid-19 ? (China, Italy, Iran, Spanyol, Jerman, Amerika, Prancis, Korea Selatan, Inggris, Jepang (sumber : worldometers))',
							'urutan' => 7,
						],
						[
							'pertanyaan' => 'Pada 14 Hari Terakhir sebelum Gejala, Apakah Anda Memiliki Riwayat Perjalanan atau Tinggal di Area Terjangkit Covid-19 di Indonesia ?',
							'urutan' => 8,
						],
						[
							'pertanyaan' => 'Apakah Anda Kontak dengan Orang Terjangkit Covid-19 pada 14 Hari Terakhir sebelum Gejala ?',
							'urutan' => 9,
						],
				]);
    }
}
