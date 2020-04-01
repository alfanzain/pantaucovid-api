<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan as Pertanyaan;
use App\Peserta as Peserta;
use App\JawabanPeserta as JawabanPeserta;

class DeteksiController extends Controller
{
    public function getPertanyaan()
    {
				$pertanyaan = Pertanyaan::get()->sortBy('urutan');
        return $pertanyaan;
		}
		
		public function storeJawaban(Request $request)
		{
				\DB::transaction(function () use ($request) {
					$jawaban = JawabanPeserta::create([
						'nik' => $request->nik,
						'jawaban' => $request->jawaban,
					]);

					$jawaban->save();
				});
		}
		
		public function storeDataPeserta(Request $request)
		{
				\DB::transaction(function () use ($request) {
					$peserta = Peserta::create([
						'nik' => $request->nik,
						'nama' => $request->nama,
						'telepon' => $request->telepon,
					]);

					$peserta->save();
				});
		}
}
