<?php

namespace App\Controllers;

class NilaiController extends BaseController
{

  public function index()
  {
    return view('index');
  }

  public function hitung()
  {
    $nilaiPartisipasi = $this->request->getVar('nilai_partisipasi');
    $nilaiTugas = $this->request->getVar('nilai_tugas');
    $nilaiUTS = $this->request->getVar('nilai_uts');
    $nilaiUAS = $this->request->getVar('nilai_uas');

    // Validasi input
    if (empty($nilaiPartisipasi) || empty($nilaiTugas) || empty($nilaiUTS) || empty($nilaiUAS)) {
      session()->setFlashdata('error', 'Semua nilai harus diisi!');
      return redirect()->to('/nilai');
    }

    if (!is_numeric($nilaiPartisipasi) || !is_numeric($nilaiTugas) || !is_numeric($nilaiUTS) || !is_numeric($nilaiUAS)) {
      session()->setFlashdata('error', 'Nilai harus berupa angka!');
      return redirect()->to('/nilai');
    }

    if ($nilaiPartisipasi < 0 || $nilaiPartisipasi > 100 || $nilaiTugas < 0 || $nilaiTugas > 100 || $nilaiUTS < 0 || $nilaiUTS > 100 || $nilaiUAS < 0 || $nilaiUAS > 100) {
      session()->setFlashdata('error', 'Nilai harus di antara 0 dan 100!');
      return redirect()->to('/nilai');
    }

    // Hitung Nilai Akhir (NA)
    $na = (0.1 * $nilaiPartisipasi) + (0.2 * $nilaiTugas) + (0.3 * $nilaiUTS) + (0.4 * $nilaiUAS);

    // Konversi NA ke NH
    $nh = $this->konversiNH($na);

    // Tampilkan hasil
    $data = [
      'nilai_partisipasi' => $nilaiPartisipasi,
      'nilai_tugas' => $nilaiTugas,
      'nilai_uts' => $nilaiUTS,
      'nilai_uas' => $nilaiUAS,
      'nilai_akhir' => $na,
      'nilai_huruf' => $nh,
    ];
    return view('index', $data);
  }

  // Pindahkan fungsi konversiNH ke dalam class
  private function konversiNH($na)
  {
    if ($na >= 85) {
      return 'A';
    } elseif ($na >= 80) {
      return 'A-';
    } elseif ($na >= 75) {
      return 'B+';
    } elseif ($na >= 70) {
      return 'B';
    } elseif ($na >= 65) {
      return 'B-';
    } elseif ($na >= 60) {
      return 'C+';
    } elseif ($na >= 55) {
      return 'C';
    } elseif ($na >= 50) {
      return 'C-';
    } elseif ($na >= 40) {
      return 'D';
    } else {
      return 'E';
    }
  }
}
