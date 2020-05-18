<?php
include "database.php";
$mysqli = new Databases();
require_once("assets/dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '<center><h3>Daftar Nama Sekolah</h3></center><br/>';
$html .= '<table border="1" width="100%">
 <tr>

 <th>Nama</th>
 <th>Alamat</th>
 <th>Logo</th>
 </tr>';

foreach ($mysqli->cetak($_GET['id']) as $tampils) {
    $html .= "<tr>

 <td>" . $tampils['nama'] . "</td>
 <td>" . $tampils['alamat'] . "</td>
 <td><img src='assets/logo/" . $tampils['logo'] . "'  class='img-circle' width='100'</td>
 </tr>";
}
$html .= "</html>";

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$pdf = $dompdf->output();
$dompdf->stream('laporan.pdf', array('Attachment' => 0)); ?>
?>
?>