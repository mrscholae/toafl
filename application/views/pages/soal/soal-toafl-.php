<div class="container">
            
            <?php if($tes['status'] == "Selesai") :?>
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="p-5">
                                            <div class="text-center mb-3">
                                                <img src="<?= base_url()?>assets/img/logo.png" width="150" class="img-fluid img-shadow">
                                            </div>
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Maaf, Tes pada periode ini telah berakhir</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else :?>
                <?php if( $this->session->flashdata('pesan') ) : ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php $data = $this->session->flashdata('pesan');?>
                                    <p><center>Selamat anda telah berhasil menyelesaikan tes TOAFL Periode <?= $data['tgl_tes']?></center></p>
                                    <p><center>Dengan biodata, </center></p>
                                    <p><center>Nama : <?= $data['nama']?></center></p>
                                    <p><center>TTL : <?= $data['ttl']?></center></p>
                                    <p><center>Alamat : <?= $data['alamat']?></center></p>
                                    <p><center>Adapun Hasil SCORE TOAFL</center></p>
                                    <p><center>Akan diumumkan Paling Lambat</center></p>
                                    <p><center>Hari : <?= $data['hari_pengumuman'].", ".$data['tgl_pengumuman']?></center></p>
                                    <p><center>Pukul 17.00</center></p>
                                    <br>
                                    <p><center>Jika Setelah Pukul 17.00</center></p>
                                    <p><center>Belum mendapatkan nilai/ belum dijapri admin,</center></p>
                                    <p><center>Maka Silahkan konfirmasi ke admin bagian penilaian : </center></p>
                                    <p><center>WA : 0823-3512-4149</center></p>

                                    <center><img src="<?= base_url()?>assets/img/kenapaharus.png" class="img-fluid mb-3" alt="Responsive image"></center>

                                    <ol type="number">
                                        <li>Sebagai Alat ukur kemampuan berbahasa Arab</li>
                                        <li>Bisa digunakan sebagai syarat lanjut kuliah DN / LN, melamar kerja, kenaikan Jabatan Dll.</li>
                                        <li>Digunakan sebagai syarat kelulusan kampus, syarat sidang skripsi/thesis, dan syarat wisuda.</li>
                                    </ol>
                                    
                                    <center><img src="<?= base_url()?>assets/img/sertifikatkamidapat.png" class="img-fluid mb-3" alt="Responsive image"></center>
                                    
                                    <ol type="number">
                                        <li>Persyaratan kelulusan S1, S2, & S3 Dalam Negeri</li>
                                        <li>Persyaratan beasiswa Dalam Negeri</li>
                                        <li>Persyaratan Sidang Skripsi/Thesis.</li>
                                        <li>Syarat Wisuda</li>
                                        <li>Syarat test CPNS</li>
                                        <li>Melamar BUMN</li>
                                    </ol>
                                    
                                    <center><img src="<?= base_url()?>assets/img/disclimer.png" class="img-fluid mb-3" alt="Responsive image"></center>

                                    <ul type="radio">
                                        <li>Lembaga KURSUS BAHASA ARAB AL-AZHAR adalah lembaga kursus bahasa Arab yang terdaftar sejak tahun 2016 dengan no SK DIKNAS NOMOR 421.9/565/418.20/2020.</li>
                                        <li>TOAFL adalah test standarisasi kemampuan berbahasa arab yang kami design untuk mengukur kemampuan siswa dalam Bahasa arab . </li>
                                        <li>TOAFL IBT test diselenggarakan oleh AL AZHAR ini dapat digunakan sebagai tolak ukur kemampuan bahasa Arab peserta tes.</li>
                                        <li>Kami tidak menerima jual beli sertifikat.</li>
                                        <li>Nilai pada sertifikat harus lah sesuai dengan nilai dari hasil test yang diujikan kepada peserta.</li>
                                        <li>Penggunaan sertifikat TOAFL sebagai syarat sidang skripsi, thesis, dan wisuda dikembalikan kepada kebijakan kampus masing-masing.</li>
                                        <li>Sertifikat berlaku dua tahun dari tanggal penerbitanya.</li>
                                    </ul>                                
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="login">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-5 col-md-5">
                                <div class="card o-hidden border-0 shadow-lg my-5">
                                    <div class="card-body p-0">
                                        <!-- Nested Row within Card Body -->
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <div class="p-5">
                                                    <div class="text-center mb-5">
                                                        <img src="<?= base_url()?>assets/img/logo.png" width="150" class="img-fluid img-shadow">
                                                    </div>
                                                    <form id="formLogin">
                                                        <div class="form-group">
                                                            <input type="password" class="form-control form-control-user" value="" placeholder="Password" name="password" id="password">
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="javascript:void(0)" class="btn btn-sm btn-success btnLogin">mulai</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu" style="display:none">
                        <div class="head-brand bg-light p-2 mb-3"><center><h3>KURSUS ARAB <br>AL-AZHAR</h3><br><i>Jagonya ngomong arab, mahir kitab kuning dan Score TOAFL tinggi</i></center></div>
                        <div class="mb-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <select id="fontSize" class="form-control form-control-md">
                                        <option value="16px">Pilih Ukuran Tulisan</option>
                                        <option value="20px">20</option>
                                        <option value="25px">25</option>
                                        <option value="30px">30</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <form action="<?= base_url()?>soal/add_jawaban" method="post" id="formSoal" onsubmit="setFormSubmitting()">
                            <input type="hidden" name="id_tes" value="<?= $id?>">
                            <div class="mb-3 soal" id="dataDiri">
                                <ul class="list-group mb-3">
                                    <li class="list-group-item">
                                        <div class="form-group">
                                            <label for="email">Alamat Email</label>
                                            <input type="text" name="email" id="email" class="form-control form-control-md" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="text" name="nama" id="nama" class="form-control form-control-md" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_wa">No Whatsapp</label>
                                            <input type="number" name="no_wa" id="no_wa" class="form-control form-control-md" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="t4_lahir">Tempat Lahir</label>
                                            <input type="text" name="t4_lahir" id="t4_lahir" class="form-control form-control-md" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_lahir">Tgl Lahir</label>
                                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control form-control-md" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" id="alamat" class="form-control form-control-sm"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_pengiriman">Alamat Lengkap Pengiriman Sertifikat</label>
                                            <textarea name="alamat_pengiriman" id="alamat_pengiriman" class="form-control form-control-sm"></textarea>
                                            <small id="emailHelp" class="form-text text-muted">Form Alamat pengiriman diisi jika memesan sertifikat</small>
                                        </div>
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-end">
                                    <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalIstima">Next<i class="fa fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                            <div class="soalToaflIstima">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Back</a>
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib">Next<i class="fa fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                                <?php 
                                    $no = 0;
                                    foreach ($istima as $i => $soal) :?>
                                    <div class="mb-3 soal">
                                        <?php if($soal['tipe'] == "petunjuk") :?>
                                            <div class="card">
                                                <div class="card-body" dir="rtl">
                                                    <div class="text-right">
                                                        <?= $soal['data']?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php elseif($soal['tipe'] == "soal") :?>
                                            <div class="card">
                                                <div class="card-body" id="soalIstima<?= $i?>">
                                                    <input type="hidden" name="cekIstima[]" data-id="<?= $i?>" id="cekIstima<?= $i?>" value="null">
                                                    <!-- <div class="form-group"> -->
                                                        <div dir="rtl" class="mb-3">
                                                            <div class="text-right">
                                                                <?= angka_arab($soal['data']['no'])?>. <?= $soal['data']['soal']?>
                                                            </div>
                                                        </div>
                                                        <?php foreach ($soal['data']['pilihan'] as $k => $data) :?>
                                                            <div class="mb-3">
                                                                <div class="form-check">
                                                                    <div class="text-right" dir="rtl">
                                                                        <label>
                                                                            <input type="radio" class="soal_istima" data-id="<?= $i?>" id="soal_istima<?= $i.$k?>" name="soal_istima[<?= $no?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?> checked> 
                                                                            <?= $data?>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach;?>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                            <?php $no++;?>
                                        <?php elseif ($soal['tipe'] == "audio") :?>
                                            <center><audio controls controlsList="nodownload"><source src="<?= base_url()?>assets/sounds/<?= $soal['data']?>" type='audio/mpeg'></audio></center>
                                        <?php endif;?>
                                    </div>
                                <?php endforeach;?>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Back</a>
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib">Next<i class="fa fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="soalToaflTarakib">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-end">
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalIstima"><i class="fa fa-arrow-left mr-2"></i>SOAL ISTIMA</a> -->
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a> -->
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalQiroah">Next<i class="fa fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                                <?php 
                                    $no = 0;
                                    foreach ($tarakib as $i => $soal) :?>
                                    <div class="mb-3 soal">
                                        <?php if($soal['tipe'] == "petunjuk") :?>
                                            <div class="card">
                                                <div class="card-body" dir="rtl">
                                                    <div class="text-right">
                                                        <?= $soal['data']?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php elseif($soal['tipe'] == "soal") :?>
                                            <div class="card">
                                                <div class="card-body" id="soalTarakib<?= $i?>">
                                                    <input type="hidden" name="cekTarakib[]" data-id="<?= $i?>" id="cekTarakib<?= $i?>" value="null">
                                                    <!-- <div class="form-group"> -->
                                                        <div dir="rtl" class="mb-3">
                                                            <div class="text-right">
                                                                <?= angka_arab($soal['data']['no'])?>. <?= $soal['data']['soal']?>
                                                            </div>
                                                        </div>
                                                        <?php foreach ($soal['data']['pilihan'] as $k => $data) :?>
                                                            <div class="mb-3">
                                                                <div class="form-check">
                                                                    <div class="text-right" dir="rtl">
                                                                        <label>
                                                                            <input type="radio" class="soal_tarakib" data-id="<?= $i?>" id="soal_tarakib<?= $i.$k?>" name="soal_tarakib[<?= $no?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?> checked>
                                                                            <?= $data?>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach;?>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                            <?php $no++;?>
                                        <?php elseif ($soal['tipe'] == "audio") :?>
                                            <center><audio controls controlsList="nodownload"><source src="<?= base_url()?>assets/sounds/<?= $soal['data']?>" type='audio/mpeg'></audio></center>
                                        <?php endif;?>
                                    </div>
                                <?php endforeach;?>
                                <div class="col-12 mb-3">
                                    <div class="d-flex justify-content-end">
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalIstima"><i class="fa fa-arrow-left mr-2"></i>SOAL ISTIMA</a> -->
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a> -->
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalQiroah">Next<i class="fa fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="soalToaflQiroah">
                                <div class="col-12 mb-3">
                                    <div class="d-flex justify-content-end">
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib"><i class="fa fa-arrow-left mr-2"></i>SOAL TARAKIB</a> -->
                                        <button type="button" class="btn btn-md btn-primary submitForm">Simpan</button>
                                    </div>
                                </div>
                                <?php 
                                    $no = 0;
                                    foreach ($qiroah as $i => $soal) :?>
                                    <div class="mb-3 soal">
                                        <?php if($soal['tipe'] == "petunjuk") :?>
                                            <div class="card">
                                                <div class="card-body" dir="rtl">
                                                    <div class="text-right">
                                                        <?= $soal['data']?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php elseif($soal['tipe'] == "soal") :?>
                                            <div class="card">
                                                <div class="card-body" id="soalQrioah<?= $i?>">
                                                    <input type="hidden" name="cekQiroah[]" data-id="<?= $i?>" id="cekQiroah<?= $i?>" value="null">
                                                    <!-- <div class="form-group"> -->
                                                        <div dir="rtl" class="mb-3">
                                                            <div class="text-right">
                                                                <?= angka_arab($soal['data']['no'])?>. <?= $soal['data']['soal']?>
                                                            </div>
                                                        </div>
                                                        <?php foreach ($soal['data']['pilihan'] as $k => $data) :?>
                                                            <div class="mb-3">
                                                                <div class="form-check">
                                                                    <div class="text-right" dir="rtl">
                                                                        <label>
                                                                            <input type="radio" class="soal_qiroah" data-id="<?= $i?>" id="soal_qiroah<?= $i.$k?>" name="soal_qiroah[<?= $no?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?> checked>
                                                                            <?= $data?>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach;?>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                            <?php $no++;?>
                                        <?php elseif ($soal['tipe'] == "audio") :?>
                                            <center><audio controls controlsList="nodownload"><source src="<?= base_url()?>assets/sounds/<?= $soal['data']?>" type='audio/mpeg'></audio></center>
                                        <?php endif;?>
                                    </div>
                                <?php endforeach;?>
                                <div class="col-12 mb-3">
                                    <div class="d-flex justify-content-end">
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib"><i class="fa fa-arrow-left mr-2"></i>SOAL TARAKIB</a> -->
                                        <button type="button" class="btn btn-md btn-primary submitForm">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endif;?>
            <?php endif;?>
        </div>
    </div>
</div>

<div class="overlay"></div>

<script>
    $(".soalToaflIstima").hide();
    $(".soalToaflTarakib").hide();
    $(".soalToaflQiroah").hide();

    $("#fontSize").change(function(){
        let size = $(this).val();
        $(".soal").css("font-size",size);
    })
    
    let formSubmitting = false;
    let setFormSubmitting = function() { formSubmitting = true; };

    $(".btnLogin").click(function(){
        let password = $("#password").val();
        let id = "<?= $id?>"
        
        $.ajax({
            url: "<?= base_url()?>soal/password_check",
            data: {password: password, id: id},
            dataType: "JSON",
            method: "POST",
            success: function(result){
                if(result == "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Maaf password salah',
                    })
                } else {
                    $(".login").hide();
                    $(".menu").show();
                }
            }
        })
    })

    $(".btnSoalIstima").click(function(){
        let email = $("#email").val();
        let nama = $("#nama").val();
        let no_wa = $("#no_wa").val();
        let t4_lahir = $("#t4_lahir").val();
        let tgl_lahir = $("#tgl_lahir").val();
        let alamat = $("#alamat").val();
        let id = "<?= $id?>"

        if(email == "" || nama == "" || no_wa == "" || t4_lahir == "" || tgl_lahir == "" || alamat == ""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Lengkapi data terlebih dahulu',
            })
        } else {
            $.ajax({
                url: "<?= base_url()?>soal/email_check",
                data: {email:email, id:id},
                dataType: "JSON",
                method: "POST",
                success: function(result){
                    if(result) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Maaf email Anda telah digunakan',
                        })
                    } else {
                        $(".soalToaflIstima").show();
                        $(".soalToaflTarakib").hide();
                        $(".soalToaflQiroah").hide();
                        $(".titleBar").html("TES TOAFL (ISTIMA)")
                        $("#dataDiri").hide();
                        $("#formSoal").scrollTop(0);
                    }
                }
            })
        }
    })

    $('input:radio.soal_istima').click(function () {
        let value = $(this).val();
        let id = $(this).data("id");
        $("#cekIstima"+id).val(value)
    });

    $('input:radio.soal_tarakib').click(function () {
        let value = $(this).val();
        let id = $(this).data("id");
        $("#cekTarakib"+id).val(value)
    });

    $('input:radio.soal_qiroah').click(function () {
        let value = $(this).val();
        let id = $(this).data("id");
        $("#cekQiroah"+id).val(value)
    });

    $(".btnSoalTarakib").click(function(){
        if($('input:radio.soal_istima:checked').length != 50){

            $.each($("input[name='cekIstima[]']"), function(){
                id = $(this).data("id");
                $("#soalIstima"+id).removeClass("list-group-item-danger")

                if($(this).val() == "null"){
                    $("#soalIstima"+id).addClass("list-group-item-danger")
                }
            })

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum menyelesaikan soal Istima',
            })

            $(".soalToaflIstima").show();
            $(".soalToaflTarakib").hide();
            $(".soalToaflQiroah").hide();
            $(".titleBar").html("TES TOAFL (ISTIMA)")
            return false;
        } else {
            $(".soalToaflIstima").hide();
            $(".soalToaflTarakib").show();
            $(".soalToaflQiroah").hide();
            
            $(".titleBar").html("TES TOAFL (TARAKIB)")
            $("#formSoal").scrollTop(0);
        }
    })

    $(".btnSoalQiroah").click(function(){
        if($('input:radio.soal_tarakib:checked').length != 40){
            
            $.each($("input[name='cekTarakib[]']"), function(){
                id = $(this).data("id");
                $("#soalTarakib"+id).removeClass("list-group-item-danger")

                if($(this).val() == "null"){
                    $("#soalTarakib"+id).addClass("list-group-item-danger")
                }
            })

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum menyelesaikan soal Tarakib',
            })

            $(".soalToaflIstima").hide();
            $(".soalToaflTarakib").show();
            $(".soalToaflQiroah").hide();
            $(".titleBar").html("TES TOAFL (TARAKIB)")
            return false;
        } else {
            $(".soalToaflIstima").hide();
            $(".soalToaflTarakib").hide();
            $(".soalToaflQiroah").show();
            
            $(".titleBar").html("TES TOAFL (QIROAH)")
            $("#formSoal").scrollTop(0);
        }
    })

    $(".btnDataDiri").click(function(){
        $(".soalToaflIstima").hide();
        $(".soalToaflTarakib").hide();
        $(".soalToaflQiroah").hide();
        $("#dataDiri").show();

        $("#formSoal").scrollTop(0);
    })

    $(".submitForm").click(function(){
        if($('input:radio.soal_qiroah:checked').length != 50){
            $.each($("input[name='cekQiroah[]']"), function(){
                id = $(this).data("id");
                $("#soalQrioah"+id).removeClass("list-group-item-danger")

                if($(this).val() == "null"){
                    $("#soalQrioah"+id).addClass("list-group-item-danger")
                }
            })

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum menyelesaikan soal Qrioah',
            })

            $(".soalToaflIstima").hide();
            $(".soalToaflTarakib").hide();
            $(".soalToaflQiroah").show();
            $(".titleBar").html("TES TOAFL (QIROAH)")
            return false;
        } else {
            var c = confirm("Yakin telah menyelesaikan pekerjaan Anda?")
            
            if(c == true) $("#formSoal").submit()

        }
    })

    window.onload = function() {
        window.addEventListener("beforeunload", function (e) {
            if (formSubmitting) {
                return undefined;
            }

            var confirmationMessage = 'It looks like you have been editing something. '
                                    + 'If you leave before saving, your changes will be lost.';

            (e || window.event).returnValue = confirmationMessage; //Gecko + IE
            return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
        });
    };

    document.addEventListener('play', function(e){  
        var audios = document.getElementsByTagName('audio');  
        for(var i = 0, len = audios.length; i < len;i++){  
            if(audios[i] != e.target){  
                audios[i].pause();  
            }  
        }  
    }, true);

    <?php if( !$this->session->flashdata('pesan') ) : ?>
        var sec         = <?= $tes['waktu']?> * 60,
        countDiv    = document.getElementById("waktu"),
        secpass,
        countDown   = setInterval(function () {
            'use strict';
            
            secpass();
        }, 1000);
    <?php endif;?>

    function secpass() {
        'use strict';
        
        var min     = Math.floor(sec / 60),
            remSec  = sec % 60;
        
        if (remSec < 10) {
            
            remSec = '0' + remSec;
        
        }
        if (min < 10) {
            
            min = '0' + min;
        
        }
        countDiv.innerHTML = min + ":" + remSec;
        
        if (sec > 0) {
            sec = sec - 1;
        } else {
            clearInterval(countDown);
            formSubmitting = true;
            $("#formSoal").submit();
            // countDiv.innerHTML = 'countdown done';
        }
    }
</script>