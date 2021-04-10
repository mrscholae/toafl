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
                                                <img src="<?= base_url()?>assets/img/LOGO UE.png" width="150" class="img-fluid img-shadow">
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
                    <div class="head-brand bg-light p-2 mb-3"><center><h3>Al-Azhar <br>English Academy</h3><br><i>Kampung Inggris Al-Azhar <br> Speaking - Grammar - Pronunciatin - TOEFL - IELTS</i></center></div>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success"><i class="fa fa-check-circle text-success mr-1"></i><?=$this->session->flashdata('pesan')?></div>
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
                                                        <img src="<?= base_url()?>assets/img/LOGO UE.png" width="150" class="img-fluid img-shadow">
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
                        <div class="head-brand bg-light mb-3"><center><h3>Al-Azhar <br>English Academy</h3><br><i>Kampung Inggris Al-Azhar <br> Speaking - Grammar - Pronunciatin - TOEFL - IELTS</i></center></div>
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
                                            <input type="text" name="no_wa" id="no_wa" class="form-control form-control-md" required>
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
                                            <label for="alamat_pengiriman">Alamat Pengiriman</label>
                                            <textarea name="alamat_pengiriman" id="alamat_pengiriman" class="form-control form-control-sm"></textarea>
                                            <small id="emailHelp" class="form-text text-muted">Form Alamat pengiriman diisi jika memesan sertifikat</small>
                                        </div>
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-end">
                                    <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalIstima">Next<i class="fa fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                            <div class="soalToeflIstima">
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
                                                <div class="card-body">
                                                    <?= $soal['data']?>
                                                </div>
                                            </div>
                                        <?php elseif($soal['tipe'] == "soal") :?>
                                            <div class="card">
                                                <div class="card-body" id="soalIstima<?= $i?>">
                                                    <input type="hidden" name="cekIstima[]" data-id="<?= $i?>" id="cekIstima<?= $i?>" value="null">
                                                    <div class="form-group">
                                                        <label for="" id="container-content"><?= $soal['data']['no']?>.<?= $soal['data']['soal']?></label>
                                                        <?php foreach ($soal['data']['pilihan'] as $k => $data) :?>
                                                            <div class="d-flex mb-3">
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input soal_istima" data-id="<?= $i?>" id="soal_istima<?= $i.$k?>" name="soal_istima[<?= $no?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?> checked>
                                                                    <div class="text-left">
                                                                        <label for="soal_istima<?= $i.$k?>" class="form-check-label" id="container-content"><?= $data?></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach;?>
                                                    </div>
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
                            
                            <div class="soalToeflTarakib">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-end">
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalIstima"><i class="fa fa-arrow-left mr-2"></i>SOAL LISTENING</a> -->
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
                                                <div class="card-body">
                                                    <?= $soal['data']?>
                                                </div>
                                            </div>
                                        <?php elseif($soal['tipe'] == "soal") :?>
                                            <div class="card">
                                                <div class="card-body" id="soalTarakib<?= $i?>">
                                                    <input type="hidden" name="cekTarakib[]" data-id="<?= $i?>" id="cekTarakib<?= $i?>" value="null">
                                                    <div class="form-group">
                                                        <label for="" id="container-content"><?= $soal['data']['no']?>.<?= $soal['data']['soal']?></label>
                                                        <?php foreach ($soal['data']['pilihan'] as $k => $data) :?>
                                                            <div class="d-flex mb-3">
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input soal_tarakib" data-id="<?= $i?>" id="soal_tarakib<?= $i.$k?>" name="soal_tarakib[<?= $no?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?> checked>
                                                                    <div class="text-left">
                                                                        <label for="soal_tarakib<?= $i.$k?>" class="form-check-label" id="container-content"><?= $data?></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach;?>
                                                    </div>
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
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalIstima"><i class="fa fa-arrow-left mr-2"></i>SOAL LISTENING</a> -->
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a> -->
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalQiroah">Next<i class="fa fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="soalToeflQiroah">
                                <div class="col-12 mb-3">
                                    <div class="d-flex justify-content-end">
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib"><i class="fa fa-arrow-left mr-2"></i>SOAL STRUCTURE</a> -->
                                        <button type="button" class="btn btn-md btn-primary submitForm">Simpan</button>
                                    </div>                                        
                                </div>
                                <?php 
                                    $no = 0;
                                    foreach ($qiroah as $i => $soal) :?>
                                    <div class="mb-3 soal">
                                        <?php if($soal['tipe'] == "petunjuk") :?>
                                            <div class="card">
                                                <div class="card-body">
                                                    <?= $soal['data']?>
                                                </div>
                                            </div>
                                        <?php elseif($soal['tipe'] == "soal") :?>
                                            <div class="card">
                                                <div class="card-body" id="soalQiroah<?= $i?>">
                                                    <input type="hidden" name="cekQiroah[]" data-id="<?= $i?>" id="cekQiroah<?= $i?>" value="null">
                                                    <div class="form-group">
                                                        <label for="" id="container-content"><?= $soal['data']['no']?>.<?= $soal['data']['soal']?></label>
                                                        <?php foreach ($soal['data']['pilihan'] as $k => $data) :?>
                                                            <div class="d-flex mb-3">
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input soal_qiroah" data-id="<?= $i?>" id="soal_qiroah<?= $i.$k?>" name="soal_qiroah[<?= $no?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?> checked>
                                                                    <div class="text-left">
                                                                        <label for="soal_qiroah<?= $i.$k?>" class="form-check-label" id="container-content"><?= $data?></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach;?>
                                                    </div>
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
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib"><i class="fa fa-arrow-left mr-2"></i>SOAL STRUCTURE</a> -->
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
    $(".soalToeflIstima").hide();
    $(".soalToeflTarakib").hide();
    $(".soalToeflQiroah").hide();

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
                        $(".soalToeflIstima").show();
                        $(".soalToeflTarakib").hide();
                        $(".soalToeflQiroah").hide();
                        $(".titleBar").html("TES TOEFL (LISTENING)")
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

            $(".soalToeflIstima").show();
            $(".soalToeflTarakib").hide();
            $(".soalToeflQiroah").hide();
            $(".titleBar").html("TES TOEFL (LISTENING)")
            return false;
        } else {
            $(".soalToeflIstima").hide();
            $(".soalToeflTarakib").show();
            $(".soalToeflQiroah").hide();
            
            $(".titleBar").html("TES TOEFL (STRUCTURE)")
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

            $(".soalToeflIstima").hide();
            $(".soalToeflTarakib").show();
            $(".soalToeflQiroah").hide();
            $(".titleBar").html("TES TOEFL (STRUCTURE)")
            return false;
        } else {
            $(".soalToeflIstima").hide();
            $(".soalToeflTarakib").hide();
            $(".soalToeflQiroah").show();
            
            $(".titleBar").html("TES TOEFL (READING)")
            $("#formSoal").scrollTop(0);
        }
    })

    $(".btnDataDiri").click(function(){
        $(".soalToeflIstima").hide();
        $(".soalToeflTarakib").hide();
        $(".soalToeflQiroah").hide();
        $("#dataDiri").show();

        $("#formSoal").scrollTop(0);
    })

    $(".submitForm").click(function(){
        if($('input:radio.soal_qiroah:checked').length != 50){
            $.each($("input[name='cekQiroah[]']"), function(){
                id = $(this).data("id");
                $("#soalQiroah"+id).removeClass("list-group-item-danger")

                if($(this).val() == "null"){
                    $("#soalQiroah"+id).addClass("list-group-item-danger")
                }
            })

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum menyelesaikan soal Qiroah',
            })

            $(".soalToeflIstima").hide();
            $(".soalToeflTarakib").hide();
            $(".soalToeflQiroah").show();
            $(".titleBar").html("TES TOEFL (READING)")
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