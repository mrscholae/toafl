<?php
function tgl_indo($tgl){
    $data = explode("-", $tgl);
    $hari = $data[0];
    $bulan = $data[1];
    $tahun = $data[2];

    if($bulan == "01") $bulan = "Januari";
    if($bulan == "02") $bulan = "Februari";
    if($bulan == "03") $bulan = "Maret";
    if($bulan == "04") $bulan = "April";
    if($bulan == "05") $bulan = "Mei";
    if($bulan == "06") $bulan = "Juni";
    if($bulan == "07") $bulan = "Juli";
    if($bulan == "08") $bulan = "Agustus";
    if($bulan == "09") $bulan = "September";
    if($bulan == "10") $bulan = "Oktober";
    if($bulan == "11") $bulan = "November";
    if($bulan == "12") $bulan = "Desember";

    return $hari . " " . $bulan . " " . $tahun;
}
?>
        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">
            <div class="col-12">
                <center>
                    <img src="<?= base_url()?>assets/img/logo.png" width=150 class="img-fluid mb-3" alt="">
                </center>
            </div>
            <div class="col-12 col-md-6">
                    <?php if(isset($nama)) :?>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-dark">No. Sertifikat : </i><?= $no_doc?></h6>
                            </div>
                            <div class="card-body text-gray-900">
                                <center><img src="https://admin.toafl.id/assets/foto/<?= $file?>" class="mb-3" width=150 alt=""></center>
                                <p>Nama : <?= ucwords(strtolower($nama))?></p>
                                <p>TTL : <?= $t4_lahir?>, <?= tgl_indo(date("d-m-Y", strtotime($tgl_lahir)))?></p>
                                <p>Alamat : <?= ucwords(strtolower($alamat))?></p>
                                <p>Nilai Istima : <?= $istima?></p>
                                <p>Nilai Tarakib : <?= $tarakib?></p>
                                <p>Nilai Qiroah : <?= $qiroah?></p>
                                <p>Skor TOAFL : <?= round($skor)?> (<?= $nilai?>)</p>
                                <p>Tgl Tes : <?= tgl_indo(date("d-m-Y", strtotime($tgl_tes)))?></p>
                                <p>Berlaku Sampai : <?= tgl_indo(date("d-m-Y", strtotime($tgl_berakhir)))?></p>

                            </div>
                        </div>
                    <?php else :?>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-dark">Sertifikat Tidak Tersedia</i></h6>
                            </div>
                            <div class="card-body text-gray-900">
                                <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-3"></i>Maaf Sertifikat Anda Tidak Ditemukan</div>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>

        </div>
