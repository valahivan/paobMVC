<?php
require_once 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$nama = $_GET['nama'];
ob_start();
include "surat_bukti_pendaftaran.php";
$fileSurat = ob_get_clean();

$pdf = new Dompdf();
$pdf->loadHtml($fileSurat);
$pdf->setPaper('A4', 'potrait');
$pdf->render();
$pdf->stream('surat_bukti_pendaftaran.pdf?nama='.$nama);

$options = new Options();
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

require_once 'surat_bukti_pendaftaran.php';
