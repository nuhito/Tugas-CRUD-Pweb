<?php
require_once('tcpdf/tcpdf.php'); // Include TCPDF library
include("config.php");

// Query untuk mendapatkan data pegawai
$result = mysqli_query($conn, "SELECT * FROM pegawai");

// Buat instance TCPDF
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Atur metadata PDF
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('SMK Coding');
$pdf->SetTitle('Laporan Daftar Pegawai');
$pdf->SetSubject('Laporan Pegawai');
$pdf->SetKeywords('PDF, pegawai, laporan');

// Atur margin dan header/footer
$pdf->SetMargins(15, 20, 15);
$pdf->SetHeaderMargin(10);
$pdf->SetFooterMargin(10);
$pdf->SetAutoPageBreak(true, 20);

// Tambahkan halaman baru
$pdf->AddPage();

// Judul laporan
$pdf->SetFont('Helvetica', 'B', 14);
$pdf->Cell(0, 10, 'Laporan Daftar Pegawai', 0, 1, 'C');

// Spasi
$pdf->Ln(5);

// Tabel header
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(10, 8, 'No', 1, 0, 'C', true);
$pdf->Cell(40, 8, 'Nama', 1, 0, 'C', true);
$pdf->Cell(25, 8, 'J. Kelamin', 1, 0, 'C', true);
$pdf->Cell(40, 8, 'Jabatan', 1, 0, 'C', true);
$pdf->Cell(50, 8, 'Email', 1, 0, 'C', true);
$pdf->Cell(30, 8, 'Foto', 1, 1, 'C', true);

// Tabel isi
$pdf->SetFont('Helvetica', '', 10);
$no = 1;

while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(10, 30, $no++, 1, 0, 'C');
    $pdf->Cell(40, 30, $row['nama'], 1, 0, 'C');
    $pdf->Cell(25, 30, $row['jenis_kelamin'], 1, 0, 'C');
    $pdf->Cell(40, 30, $row['jabatan'], 1, 0, 'C');
    $pdf->Cell(50, 30, $row['email'], 1, 0, 'C');
    
    // Menambahkan foto (jika ada)
    if (!empty($row['foto']) && file_exists("uploads/" . $row['foto'])) {
        $pdf->Image("uploads/" . $row['foto'], $pdf->GetX() + 2, $pdf->GetY() + 2, 26, 26);
    }
    $pdf->Cell(30, 30, '', 1, 1, 'C');
}

// Output file PDF
$pdf->Output('laporan_pegawai.pdf', 'I');
?>
