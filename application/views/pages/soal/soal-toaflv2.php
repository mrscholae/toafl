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
                                                <img src="<?= base_url()?>assets/img/logo.png" width="75" class="img-fluid img-shadow">
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
                    <?php $data = $this->session->flashdata('pesan');?>
                    <div class="row">
                        <div class="col-12 mb-3 bg-light">
                            <p><center>Selamat anda telah berhasil menyelesaikan tes TOAFL Periode <?= $data['tgl_tes']?></center></p>
                            <p><center>Dengan biodata, </center></p>
                            <p><center>Nama : <?= $data['nama']?></center></p>
                            <p><center>TTL : <?= $data['t4_lahir'].", ".date("d-M-Y", strtotime($data['tgl_lahir']))?></center></p>
                            <p><center>Alamat : <?= $data['alamat']?></center></p>
                            <p><center>Adapun Hasil SCORE TOAFL</center></p>
                            <p><center>Akan diumumkan Besok Pagi</center></p>
                            <p><center>Hari : <?= $data['tgl_pengumuman']?></center></p>
                            <p><center>Sekitar Pukul 07.00 - 12.00</center></p>
                            <br>
                            <p><center>Jika Setelah Pukul 12.00</center></p>
                            <p><center>Belum ada admin yang menginformasikan Nilai maka</center></p>
                            <p><center>Silahkan konfirmasi ke admin bagian penilaian : </center></p>
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

                            <p>Adapun untuk pemesanan E-Sertifikat TOAFL RESMI KURSUS BAHASA ARAB AL-AZHAR dengan SK DIKNAS Nomor 421.9/565/418.20/2020 (Biaya Penerbitan Sertifikat 75.000) Langsung Klik salah satu tombol dibawah ini <br> 
                            <a href="https://wa.me/6285327880888?text=Permisi%20Admin%20Kak%20Mona%2C%20<?= $data['pesan1']?>" target="_blank" class="btn btn-block btn-success">Hubungi kak Mona</a></p>
                            <a href="https://wa.me/628113695333?text=Permisi%20Admin%20Kak%20Abbas%2C%20<?= $data['pesan1']?>" target="_blank" class="btn btn-block btn-success">Hubungi kak Abbas</a></p>
                            <p>Adapun yang ingin mendapatkan E-Sertifikat plus Sertifikat TOAFL RESMI KURSUS BAHASA ARAB AL-AZHAR dengan SK DIKNAS Nomor 421.9/565/418.20/2020 (Dikenai biaya 95.000/ belum termasuk ongkir, untuk biaya ongkir akan diinfokan oleh admin) Langsung Klik salah satu tombol dibawah ini : <br> 
                            <a href="https://wa.me/6285156604104?text=Permisi%20Admin%20Kak%20Triani%2C%20<?= $data['pesan2']?>" target="_blank" class="btn btn-block btn-success">Hubungi Kak Triani</a></p>
                            <a href="https://wa.me/6282335124149?text=Permisi%20Admin%20Kak%20Kresna%2C%20<?= $data['pesan2']?>" target="_blank" class="btn btn-block btn-success">Hubungi Kak Kresna</a></p>
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
                                                    <div class="text-center mb-3">
                                                        <img src="<?= base_url()?>assets/img/logo.png" width="75" class="img-fluid img-shadow">
                                                    </div>
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">أَهْلًا وَ سَهْلًا</h1>
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
                    <div class="menu" style="display: none">
                        <div class="head-brand bg-light p-2 mb-3"><center><h3>KURSUS ARAB <br>AL-AZHAR</h3><br><i>Jagonya ngomong arab, mahir kitab kuning dan Score TOAFL tinggi</i></center></div>                    
                        <div class="row">
                            <div class="col-12 mb-3">
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
                        </div>
                        <form action="<?= base_url()?>soal/add_jawaban" method="post" id="formSoal" onsubmit="setFormSubmitting()">
                            <input type="hidden" name="id_tes" value="<?= $id?>">
                            <div class="row">
                                <div class="col-12 col-md-12 mb-3 soal" id="dataDiri">
                                    <ul class="list-group mb-3">
                                        <li class="list-group-item list-group-item-warning"><i class="fa fa-exclamation-circle text-warning mr-1"></i> <b>Tulislah Biodata Anda dengan Benar, Supaya tidak ada kesalahan PENULISAN di Sertifikat</b></li>
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
                                                <small id="emailHelp" class="form-text text-danger">Form Alamat pengiriman diisi jika memesan sertifikat</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="d-flex justify-content-end">
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalIstima">SOAL ISTIMA<i class="fa fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="soalToaflIstima">
                                    <div class="col-12 mb-3">
                                        <div class="d-flex justify-content-between">
                                            <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a>
                                            <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib">SOAL TARAKIB<i class="fa fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <?php 
                                        foreach ($soal as $i => $soal) :?>
                                        <div class="col-12 col-md-12 mb-3 soal" id="soal">
                                            <?php if($soal['no'] == 1) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item" id="soal-bg">
                                                        <p><center>إختبار  اللغة العربية لغير الناطقين بها</center></p>
                                                        <p><center>القسم الأول : فهم المسموع</center></p>
                                                        <p><center>في هذا القسم 50 سؤالا تتكون من ثلاثة أنواع : التعبيرات، و الحوارات، و الفقرات:</center></p>
                                                        <p><center>للإجابة عن الأسئلة من رقم واحد إلى رقم خمسة وعشرين، استمع إلى التعبيرات ثم اختر أنسب جواب بعد كل تعبير :</center></p>
                                                    </li>
                                                </ul>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v2 1-5.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 6) :?>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v2 6-10.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 11) :?>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v2 11-15.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 16) :?>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v2 16-20.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 21) :?>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v2 21-25.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 26) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item" id="soal-bg">
                                                        <p><center>للإجابة عن الأسئلة من رقم ستة وعشرين إلى رقم أربعين، استمع إلى الحوارات ثم اختر أنسب جواب بعد كل تعبير :</center></p>
                                                    </li>
                                                </ul>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/istimak2.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 34) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item" id="soal-bg">
                                                        <p><center>للإجابة عن الأسئلة من رقم أربعة وثلاثين  إلى سبعة وثلاثين، استمع إلى الحوار الآتي  ثم اختر أنسب جواب من الإختيار المتعدد المتاح  بعده:</center></p>
                                                    </li>
                                                </ul>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/istimak3.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 38) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item" id="soal-bg">
                                                        <p><center>للإجابة عن الأسئلة من رقم ثمانية وثلاثين  إلى اثنين وأربعين، استمع إلى الحوار الآتي  ثم اختر أنسب جواب من الإختيار المتعدد المتاح  بعده:</center></p>
                                                    </li>
                                                </ul>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/istimak4.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 43) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item" id="soal-bg">
                                                        <p><center> للإجابة عن الأسئلة من رقم ثلاثة وأربعين إلى خمسة وأربعين، استمع إلى الحوار الآتي  ثم اختر أنسب جواب من الإختيار المتعدد المتاح  بعده:</center></p>
                                                    </li>
                                                </ul>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/istimak5.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 46) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item" id="soal-bg">
                                                        <p><center>للإجابة عن الأسئلة من رقم ستة وثلاثين  إلى خمسين، استمع إلى الحوار الآتي  ثم اختر أنسب جواب من الإختيار المتعدد المتاح  بعده:</center></p>
                                                    </li>
                                                </ul>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/istimak6.mp3" type="audio/mp3"></audio></center>
                                            <?php endif;?>
                                        </div>
                                        <div class="col-12 col-md-12 mb-3 soal" id="soal">
                                            <ul class="list-group">
                                                <li class="list-group-item" id="soal-bg">
                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-end mb-3 mt-3">
                                                            <div class="text-right">
                                                                <label for="" dir="rtl" id="container-content"><b><?= angka_arab($soal['no'])?>.<?= $soal['soal']?></b></label>
                                                            </div>
                                                        </div>
                                                        <div id="select">
                                                            <div class="container">
                                                                <div class="row justify-content-center">
                                                                    <?php foreach ($soal['pilihan'] as $k => $data) :?>
                                                                        <div class="col-12 d-flex justify-content-end mb-3">
                                                                            <div class="text-right">
                                                                                <label for="soal_istima<?= $i.$k?>" class="mr-2" id="container-content"><?= $data?></label>
                                                                            </div>
                                                                            <input type="radio" class="soal_istima" id="soal_istima<?= $i.$k?>" name="soal_istima[<?= $i?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?>>
                                                                        </div>
                                                                    <?php endforeach;?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    <?php endforeach;?>
                                    <div class="col-12 mb-3">
                                        <div class="d-flex justify-content-between">
                                            <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a>
                                            <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib">SOAL TARAKIB<i class="fa fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="soalToaflTarakib">
                                    <div class="col-12 mb-3">
                                        <div class="d-flex justify-content-end">
                                            <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalIstima"><i class="fa fa-arrow-left mr-2"></i>SOAL ISTIMA</a> -->
                                            <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a> -->
                                            <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalQiroah">SOAL QIROAH<i class="fa fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <?php foreach ($tarakib as $i => $soal) :?>
                                        <div class="col-12 col-md-12 mb-3 soal" id="soal">
                                            <?php if($soal['no'] == 1) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item" id="soal-bg">
                                                        <p><center>القسم الثاني : فهم التراكيب والتعبيرات</center></p>
                                                    </li>
                                                </ul>
                                            <?php endif;?>
                                        </div>
                                        <div class="col-12 col-md-12 mb-3 soal" id="soal">
                                            <ul class="list-group">
                                                <li class="list-group-item" id="soal-bg">
                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-end mb-3 mt-3">
                                                            <div class="text-right">
                                                                <label for="" dir="rtl" id="container-content"><b><?= angka_arab($soal['no'])?>.<?= $soal['soal']?></b></label>
                                                            </div>
                                                        </div>
                                                        <div id="select">
                                                            <div class="container">
                                                                <div class="row justify-content-center">
                                                                    <?php foreach ($soal['pilihan'] as $k => $data) :?>
                                                                        <div class="col-12 d-flex justify-content-end mb-3">
                                                                            <div class="text-right">
                                                                                <label for="soal_tarakib<?= $i.$k?>" class="mr-2" id="container-content"><?= $data?></label>
                                                                            </div>
                                                                            <input type="radio" class="soal_tarakib" id="soal_tarakib<?= $i.$k?>" name="soal_tarakib[<?= $i?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?>>
                                                                        </div>
                                                                    <?php endforeach;?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    <?php endforeach;?>
                                    <div class="col-12 mb-3">
                                        <div class="d-flex justify-content-end">
                                            <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalIstima"><i class="fa fa-arrow-left mr-2"></i>SOAL ISTIMA</a> -->
                                            <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a> -->
                                            <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalQiroah">SOAL QIROAH<i class="fa fa-arrow-right ml-2"></i></a>
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
                                    <?php foreach ($qiroah as $i => $soal) :?>
                                        <div class="col-12 col-md-12 mb-3 soal" id="soal">
                                            <?php if($soal['no'] == 1) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p><center>القسم الثالث: فهم المقروء</center></p>
                                                        <p>نشأت اللغة العربية في جزيرة العرب قبل الإسلام، وكان العرب قبائل متفرقة، وكانت لبعض القبائل لهجات خاصة بها. وكانت الاختلافات قليلة بين تلك اللهجات. وكانت للعرب لغة مشتركة، هي اللغة العربية الفصيحة، لغة الشعر والخطابة، التي كان العرب يتحدثون بها. ثم جاء الإسلام، وأنزل الله القرآن الكريم، باللغة العربية الفصيحة. قال الله تعالى: (إنا أنزلناه قرآنًا عربيا لعلكم تعقلون).</p>
                                                        <p>أعطى القرآن الكريم بعض الألفاظ العربية القديمة معاني جديدة، وجاء بأساليب جديدة، لم تعرفها العربية من قبل. وكان القرآن سببًا في نشأة علوم اللغة العربية؛ كالنحو والصرف، والبلاغة، والعلوم الإسلامية، كعلم التفسير والحديث والفقه وغيرها.</p>
                                                        <p>أثرت اللغة العربية في لغات الشعوب الإسلامية، كالفارسية والأردية والسواحلية، فأقرضتها كثيرًا من الألفاظ، وكتب كثير من تلك اللغات بالحرف العربي. واقترضت لغات أخرى بعض الألفاظ العربية، مثل: الإنجليزية والفرنسية والإسبانية.</p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 6) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p>یا محمد ابعث  لی هذه الرسالة بالبرید الإلکترونی إلی الحج یوسف فی کوالالمبور، واکتب له أن یحضر إلینا هنا فی الریاض بعد رمضان مباشرة.  حتی ندخل الشبکة الدولیة إلی مکتبنا فی اليبان کما فعلنا فی مکتبنا فی کوریا.</p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 9) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p>أصبحت مشكلة زيادة السكان من أهم المشكلات التى تعانى منها معظم دول العالم، وقد اتجهت معظم هذه الدول إلى تحديد النسل، فالصين-ألف مليون نسمة – قد حددت النسل طفلا للأسرة الواحدة وما زاد عن ذلك فهناك عقاب صارم للأبوين، ولكن الشعب الصينى مطيع للأوامر ولم تشذ عن هذا القانون إلا حالا تحددها الأطباء، وقد جعلت هذه المشكلة مشكلات اقتصادية واجتماعية كثيرة.</p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 13) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p>مرحلة الشباب أهم مرحلة في حياة الإنسان، وأغلى ثروة عند الأمة. ومرحلة الشباب هي مرحلة العطاء والعمل. والإنسان الذي لا يعطي في شبابه، قلما يعطي في بقية عمره. وكان كثير من أصحاب الرسول - صلى الله عليه وسلم - من الشباب، وقد ولاهم مسؤوليات كبيرة؛ حيث ولى كثيرا منهم قيادة الجيش، وفيه شيوخ المهاجرين والأنصار؛ فقد ولى زيد بن حارثة، وجعفر بن أبي طالب، وعبد الله بن أبي رواحة، قيادة الجيش في غزوة مؤتة، كما ولى أسامة بن زيد قيادة الجيش الإسلامي، لغزو الروم، وعمره ثماني عشرة سنة، وأرسل معاذ بن جبل قاضيا إلى اليمن، وهو في مرحلة الشباب.</p>
                                                        <p>تحتاج الأمة إلى الشاب القوي الجاد، الذي يعطي أكثر مما يأخذ، ولا تحتاج إلى الشاب الكسلان، الذي يهتم بطعامه ومظهره فقط، ولا يحب العمل والعطاء. وكما تحتاج الأمة إلى قوة الشباب، تحتاج إلى خبرة الشيوخ، حتى تتقدم البلاوتخطئ الأمة إذا اعتمدت على قوة الشباب وحدهم، وأهملت خبرات الشيوخ. وهذا يعني أن تكون هناك علاقة طيبة بين جميع أفراد المجتمع، كبارا وصغارا، رجالا ونساء، حتى تصل الأمة إلى ما تريد.</p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 20) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p>النظافة نوعان؛ نظافة خاصة، ونظافة عامة. فالنظافة الخاصة نظافة جسم الإنسان وثوبه وطعامه وبيئته. أما النظافة العامة، فنظافة الأماكن العامة، كالشوارع والحدائق. وتقع مسؤولية النظافة الخاصة على الأفراأما مسؤولية النظافة العامة، فتقع على الأفراد والحكومات.</p>
                                                        <p>يقاس تقدم الدول - اليوم - بالنظافة، فإذا كانت الدولة وسكانها يهتمون بالنظافة، فهي دولة متحضرة، وإذا كانت الدولة وسكانها لا يهتمون بالنظافة، فهي دولة متخلفة. وهناك دول مشهورة في العالم بالنظافة، وهي قليلة مثل ماليزيا وسنغافورة. وهناك دول أخرى مشهورة بالقذارة، وهي كثيرة.</p>
                                                        <p>تنفق بعض الدول أموالا كثيرة على النظافة، ونشاهد - الآن - في كل مدينة عمال النظافة، يجوبون الشوارع، يحملون حاويات النظافة، ويضعونها في سارات خاصة، تحملها خارج المدينة؛ لتحرق. ويشارك المواطن الدولة الاهتمام بالنظافة، حيث يضع النفايات الخاصة ببيته، والتي يجدها في الشوارع والحدائق في الحاويات، وهذا ما دعا إليه الرسول - صلى الله عليه وسلم - في قوله: (إماطة الأذى عن الطريق صدقة).</p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 26) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p>قال الرسول صلّى الله عليه وسلم : بينما رجل يمشي بطريق، اشتدّ عليه العطش، فوجد بئرا، فنزل فيها، فشرب منها ثمّ خرج، فإذا هو بكلب يلهث (يأكل الثرى من العطش) فقال : لقد بلغ هذا الكلب من العطش مثل الذي بلغ بي. فنزل البئر فملأ خفّه ماء، ثمّ أمسكه بفيه، ثمّ رقى، فسقى الكلب، فشكر الله له، فغفر له.</p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 28) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p>هناك اختلافات كثيرة، بين التعليم في الماضي، والتعليم في الحاضر. ومن تلك الاختلافات، أن فرص التعليم، كانت قليلة في الماضي، حيث كان يلتحق بالمدارس طلاب قليلون، هم - في الغالب - أبناء الأغنياء وسكان المدن. أما اليوم، فقد أصبح التعليم حقا لكل مواطن. فكثر عدد الطلاب، وانتشرت المدارس في كل مكان، وشاع القول: "التعليم كالماء والهواء".</p>
                                                        <p>كان طلاب العلم - في الماضي - يسافرون من بلد إلى بلد، لطلب العلم، وكانوا يواجهون في سفرهم كثيرا من التعب؛ فكانوا يركبون الجمال أياما وأشهرا. أما ليوم، فالمدارس والجامعات كثيرة، في كل مدينة وقرية تقريبا، حيث يذهب الطالب إلى مدرسته، أو جامعته بالسيارة، أو سيرا على الأقدام. ومن ناحية أخرى، يستطيع الطالب أن يتعلم، وهو في بيته عن طريق الشبكة الدولية.</p>
                                                        <p>من الاختلافات أيضا، أن المعلم كان لا يطلب أجرا على عمله في الماضي؛ لأنه كان يطلب الأجر من الله. وكان هدف الطالب طلب العلم. أما اليوم، فقد اختلف الأمر، فالمعلم يطلب كثيرا من الأجر، والطالب يفكر في الشهادة قبل العلم؛ لأنها وسيلة إلى العمل.</p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 32) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p>العمل نعمة من نعم الله، ولا يعرف هذه النعمة، إلا من فقدها بسبب مرض، أو غيره. ومع ذلك فبعض النّاس لا يحبون العمل، ويعتمدون على غيرهم، أو يتسوّلون في الطريق. قال الرسول صلى الله عليه وسلم : ما أكل أحد طعاما قطّ خيرا من أن يأكل من عمل يده، وقال : لأن يأخذ أحدكم حبله، ثمّ يغدو إلى الجبل، فيحتطب، فيبيع، فيأكل، ويتصدّق خير له من أن يسأل النّاس.</p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 34) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p>هناك خرافات تحدث دائما بين الآباء والأبناء. فالآباء ينظرون إلى الأبناء على أنهم كبار، وينسون فارقة السن بينهم، ويريدون من الأبناء أن يكونوا صورة ثانية منهم. والأبناء ينظرون إلى الأباء على أنهم من عصر قديم، وأنهم يفكرون تفكيرا متأخرا، ولايمكن أن يتفقوا معهم فى الرأى. وهذه هي أهم أسباب الخلاف. ولكن إذا نظر الأباء إلى أبنائهم نظرة أخرى ليفهموهم بطريقة أفضل، وإذا تذكروا كيف أنهم كانوا فى نفس هذا الموقف من آبائهم، لأدركوا أنهم يجب أن يغيروا معاملتهم لأبنائهم، ويكونوا أكثر صبرا وفهما. أما الأبناء فيجب أن يدركوا أن طاعة الوالدين من طاعة الله، أنهم فى كثير من الأحيان لايعرفون ماينفعهم وما يضرهم، وإذا أطاعوا أبويهم كان ذلك خيرا لهم وأفضل.</p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 38) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p>تأثّر العالم كثيرا – وخاصّة أوروبا – بحضارة المسلمين. وكان المسلمون في العصر العباسي، قد نشروا العلم والثقافة في مناطق واسعة، فقد وصلوا إلى الصين في الشّرق، وإلى بلاد السّودان في إفريقيا في الجانوب.</p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 40) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p>فكّر صديقي <u>أن يترك</u> العمل في الحكومة، وأن يعمل<u> تاجرا</u>، وفعلا فتح محلا صغيرا، لبيع الملابس، وبدأ يعامل النّاس معاملة طيبة، يبيع لهم الملابس رخيصة، فاشتهر كثيرا بين النّاس. وبعد سنة ترك صديقي المحلّ الصّغير، وفتح محلا كبيرا في وسط المدينة، وبعد ثلاث سنوات أنشأ شركة كبيرة لصناعة الملابس. أصبح صديقي <u>من أغنياء المدينة</u>، وقد أحبّه النّاس كثيرا، فهو رجل كريم يساعد النّاس في بناء المساجد والمدارس والمستشفيات.</p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 44) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p>حسن طالب إندونسي يدرس في الجامعة الإسلامية بالمدينة المنورة سافر حسن إلى المدينة المنورة قبل ثلاث سنوات لتعليم اللغة العربية ويدرس الإسلام. يتحدث حسن العربية الآن جيدا، وقد بدأ حفظ القرآن في بلده، والآن يحفظه كله. أصبح حسن الآن يفهم أحاديث الرسول صلى الله عليه وسلم، ويقرأ الكتب العربية والمجلات الأسبوعية والصحف اليومية. بعد هذه السنوات الثلاث يستطيع حسن أن يكتب باللغة العربية. فقد كتب إلى أصدقائه وقال لهم: "إن اللغة العربية لغة سهلة، وهي لغة العبادة لأكثر من مليار من المسلمين ولغة القرآن والإسلام.</p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 47) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p>تخرج زوجتي كل يوم في الصّباح، ولا ترجع إلا في السّاعة الخامسة مساءً، هذه مشكلتي معها. نحن نتناول الوجبات خارج البيت: لأنّ زوجتي لا تجد وقتاً لإعداد الطّعام، وأنا أغسل ملابسي وملابس أبنائنا وحدي، وأنظّف البيت أحياناً بعد التدريس ظهرا. لا أجد وقتا للحديث معها في أمور البيت والأسرة: لأنها عندما ترجع تكون متعبةً  .أمّا في عطلة الأسبوع، فهي تحبّ أن تزور الأهل والصّديقات، أو تذهب إلى السّوق، أو تحضّر دروس الأسبوع القادم أو تعالج المرضى في البيت.</p>
                                                    </li>
                                                </ul>
                                            <?php endif;?>
                                        </div>
                                        <div class="col-12 col-md-12 mb-3 soal" id="soal">
                                            <ul class="list-group">
                                                <li class="list-group-item" id="soal-bg">
                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-end mb-3 mt-3">
                                                            <div class="text-right">
                                                                <label for="" dir="rtl" id="container-content"><b><?= angka_arab($soal['no'])?>.<?= $soal['soal']?></b></label>
                                                            </div>
                                                        </div>
                                                        <div id="select">
                                                            <div class="container">
                                                                <div class="row justify-content-center">
                                                                    <?php foreach ($soal['pilihan'] as $k => $data) :?>
                                                                        <div class="col-12 d-flex justify-content-end mb-3">
                                                                            <div class="text-right">
                                                                                <label for="soal_qiroah<?= $i.$k?>" class="mr-2" id="container-content"><?= $data?></label>
                                                                            </div>
                                                                            <input type="radio" class="soal_qiroah" id="soal_qiroah<?= $i.$k?>" name="soal_qiroah[<?= $i?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?>>
                                                                        </div>
                                                                    <?php endforeach;?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    <?php endforeach;?>
                                    <div class="col-12 mb-3">
                                        <div class="d-flex justify-content-end">
                                            <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalTarakib"><i class="fa fa-arrow-left mr-2"></i>SOAL TARAKIB</a> -->
                                            <button type="button" class="btn btn-md btn-primary submitForm">Simpan</button>
                                        </div>                                        
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

    $(".btnSoalTarakib").click(function(){
        if($('input:radio.soal_istima:checked').length != 50){
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
        if($('input:radio.soal_istima:checked').length != 50){
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
        }

        if($('input:radio.soal_tarakib:checked').length != 40){
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
        }

        if($('input:radio.soal_qiroah:checked').length != 50){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum menyelesaikan soal Qiroah',
            })

            $(".soalToaflIstima").hide();
            $(".soalToaflTarakib").hide();
            $(".soalToaflQiroah").show();
            $(".titleBar").html("TES TOAFL (QIROAH)")
            return false;
        }

        $("#formSoal").submit();    
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

    $("#formSoal").submit(function(){
        var c = confirm("Yakin telah menyelesaikan pekerjaan Anda?")

        return c
    })

    document.addEventListener('play', function(e){  
        var audios = document.getElementsByTagName('audio');  
        for(var i = 0, len = audios.length; i < len;i++){  
            if(audios[i] != e.target){  
                audios[i].pause();  
            }  
        }  
    }, true);

</script>