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

                            <!-- <p>Adapun untuk pemesanan E-Sertifikat TOAFL RESMI KURSUS BAHASA ARAB AL-AZHAR dengan SK DIKNAS Nomor 421.9/565/418.20/2020 (Biaya Penerbitan Sertifikat 75.000) Langsung Klik salah satu tombol dibawah ini <br> 
                            <a href="https://wa.me/6285327880888?text=Permisi%20Admin%20Kak%20Mona%2C%20<?= $data['pesan1']?>" target="_blank" class="btn btn-block btn-success">Hubungi kak Mona</a></p>
                            <a href="https://wa.me/628113695333?text=Permisi%20Admin%20Kak%20Abbas%2C%20<?= $data['pesan1']?>" target="_blank" class="btn btn-block btn-success">Hubungi kak Abbas</a></p>
                            <p>Adapun yang ingin mendapatkan E-Sertifikat plus Sertifikat TOAFL RESMI KURSUS BAHASA ARAB AL-AZHAR dengan SK DIKNAS Nomor 421.9/565/418.20/2020 (Dikenai biaya 95.000/ belum termasuk ongkir, untuk biaya ongkir akan diinfokan oleh admin) Langsung Klik salah satu tombol dibawah ini : <br> 
                            <a href="https://wa.me/6285156604104?text=Permisi%20Admin%20Kak%20Triani%2C%20<?= $data['pesan2']?>" target="_blank" class="btn btn-block btn-success">Hubungi Kak Triani</a></p>
                            <a href="https://wa.me/6282335124149?text=Permisi%20Admin%20Kak%20Kresna%2C%20<?= $data['pesan2']?>" target="_blank" class="btn btn-block btn-success">Hubungi Kak Kresna</a></p> -->
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
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v3 1-5.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 6) :?>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v3 6-10.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 11) :?>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v3 11-15.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 16) :?>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v3 16-20.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 21) :?>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v3 21-25.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 26) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item" id="soal-bg">
                                                        <p><center>للإجابة عن الأسئلة من رقم ستة وعشرين إلى رقم ثلاثين، استمع إلى الحوار الآتي، الآتية  ثم اختر أنسب جواب من الإختيارات المتعددة المتاحة  بعده:</center></p>
                                                    </li>
                                                </ul>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v3 26-30.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 31) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item" id="soal-bg">
                                                        <p><center>لإجابة عن الأسئلة من رقم واحد وثلاثين إلى رقم خمسة وثلاثين ، استمع إلى القراءة الآتية  ثم اختر أنسب جواب من الإختيارات المتعددة المتاحة  بعده:</center></p>
                                                    </li>
                                                </ul>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v3 31-35.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 36) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item" id="soal-bg">
                                                        <p><center>للإجابة عن الأسئلة من رقم ستة وثلاثين إلى أربعين، استمع إلى الحوار الآتي  ثم اختر أنسب جواب من الإختيارات المتعددة المتاحة  بعده:</center></p>
                                                    </li>
                                                </ul>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v3 36-40.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 41) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item" id="soal-bg">
                                                        <p><center>للإجابة عن الأسئلة من رقم واحد وأربعين إلى خمسة وأربعين، استمع إلى القراءة الآتية  ثم اختر أنسب جواب من الإختيارات المتعددة المتاحة  بعده:</center></p>
                                                    </li>
                                                </ul>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v3 41-45.mp3" type="audio/mp3"></audio></center>
                                            <?php elseif($soal['no'] == 46) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item" id="soal-bg">
                                                        <p><center>للإجابة عن الأسئلة من رقم ستة وأربعين إلى خمسين، استمع إلى الحوار الآتي  ثم اختر أنسب جواب من الإختيارات المتعددة المتاحة  بعده:</center></p>
                                                    </li>
                                                </ul>
                                                <center><audio controls controlsList="nodownload"><source src="<?=base_url()?>assets/sounds/v3 46-50.mp3" type="audio/mp3"></audio></center>
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
                                                        <p><center>النص الأول :</center></p>
                                                        <p>ذهبت نملة صغيرة الى جدول ماء لتشرب وتستريح، بعد أن تعبت كثيرا فى جمع قوتها. فزلت قدمها وسقطت فى الماء، ولم يمكنها الخروج منه لأنها لا تعرف السباحة وكادت تغرق. وكانت حمامة بيضاء جميلة واقفة على حجر فى الماءن ورأت ما حصل للنملة. فرق لها قلبها وسعت فى خلاصها، فطارت الى البر ورجعت، وفى منقارها عود من الحشيش، مدته على الماء الى البر. فتعلقت به النملة وخرجت من الماء بسلام.</p>
                                                        <p>وفى يوم التالى، نزلت الحمامة على فرع شجرة تتظلل بأوراقها. فمر صياد من بعد ورآها. فوقف يصيب بندقية نحوها ليصيدها، وهي لم ترها فتطير. ولكن النملة التى خلصتها تلك الحمامة رأت الصياد وعرفت ما عزم عليه، فصعدت فى جسمه. ولما هم بإطلاق بندوقية، فرصته قرصة شديدة أفزعته، فتحرك فمالت الرصاصة ولم تصب الحمامة، بل نجت جزاء إحسانها الى النملة. </p>
                                                        <p>اختر أصح الأجوبة الآتية </p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 11) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p><center>النص الثانى :</center></p>
                                                        <p>كان مُصوِّر مسافرا وهو يحمل مبلغا كبيرا من النقود، في كيس علقه حول عنقه. فنزل ليلا ببلد لم يجد فيه خانا، فأنزله أحد الأهالي ضيفا عنده. ولما رأى أنه يحمل ذلك المال الكثير، لبث يرقبه حتى نام، ودخل عليه حجرته يستق الخطى لكيلا يستيقظ، وسلبه المال، وحمله بلطف وخفةن وألقاه فى الطريق بعيدا عن الدار. ولما استيقظ الرجل من نومه فى الصباح، وجد نفسه فى الطريق ولا مال معه. فذهب الى الحاكم وشكا اليه أمره. فسأل الحاكم: "أتعرف من مضيفك بالأمس؟" فقال: "لا، لكنّي مصور ماهر، أستطيع أن أصور لك أهل البيت الذى كنت فيه فتعرفهم أنت وعمالك"</p>
                                                        <p>ثم اختلى المصور فى غرفة، وصور كل أعضاء تلك الأسرة الخائنة. فعرضت الصورة على الأهالي فعرفهم، وجائوا بهم الى الحاكم، فأقروا بذنبهم، وردوا المال الى صاحبه، وعاقبهم الحاكم عقابا شديدا، لأنهم خانوا على من ائتمنهم على نفسه وماله </p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 21) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p>النص الثالث: </p>
                                                        <p>كان عمر بن الخطاب (ض) رجلا شجاعا، وعندما أراد الهجرة من مكة الى المدينة، حمل سيفه وذهب ال الكعبة وطاف حول اليت سبعة أشواط ثم صلى الله.</p>
                                                        <p>وفى إحدى الليالي، خرج عمر يتفقده أحوال المسلمين وكان البرد شديدا فى تلك الليلة. شاهد عمر نارا فى الطريق، فأسرع اليها وعندما أقرب من النار رأى امرأة تجلس هي وأطفالها حول قدر على النار. وكان الأطفال يبكون ويصرخون. اقترب عمر من المرأة وقال لها: "السلام عليكم". فقالت له: "وعليكم السلام". ثم سألها: "لماذا يبكي هؤلاء الأطفال ؟ فأجبته: "إنهم جائعون". قال لها: وماذا فى القدر ؟ قالت له: فيه ماء يغلى، يستمع الأطفال الى صوته فينامون". انطلق عمر الى بيت الدقيق وأحضر دقيقا وزيتا. فتح عمر القدر وصب فيه الدقيق وعندما نضج طلب منها طبقا، صب فيه الطعام ثم طلي منها أن تطعم أطفالها. أكل الأطفال حتى شبعوا ثم أخذوا يضحكون ويلعبون حتى ناموا. شكرت المرأة عمر وقالت له: "جزاك الله خيرا"</p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 31) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p><center>النص الرابع </center></p>
                                                        <p>في البيت أب وأم، ولكل واحد منهما عمل خاص. اشتغل الأب خارج البيت. فذهب الى الحقول أو الى المزارع أو قصد سوقا أو دكانا للتجارة أو توظف فى بعض الدواوين أو علم فى المدارس. وليست الأم مثل ذلك بل هي اشتغلت فى المنزل فرتب كل شيئ فى البيت ونظفته وغسلت الملابس الواسخة. ثم استعدت وابتدأت فى الطهي. أتمت الأم تلك الأعمال الكثيرة هي وحدها. أو ساعدتها ابنة لها،ثم استرحت من الأعمال. </p>
                                                        <p>فالواجب عليك أيتها الفتاة المتعلمة الإخلاص فى خدمة الأم. فإذا اشتغلت معها وقبلت منها الإرشادات تقدمت وربحت بالعلوم والتجارب ربحا عظيما. </p>
                                                    </li>
                                                </ul>
                                            <?php elseif($soal['no'] == 41) :?>
                                                <ul class="list-group">
                                                    <li class="list-group-item text-right" id="soal-bg">
                                                        <p><center>النص الخامس </center></p>
                                                        <p>زاد عدد المسلمين فى العالم فى الأعوام الماضية الى حوالي المليار والنصف. وحسب التقديرات الجديدة سيبلغ هذا العدد حوالي ملياري مسلم فى كل أنحاء العالم قبل نهاية القرن الحالي. وغالبية المسلمين أي 90 بالمائة تقريبا تتبع مذهبا من مذاهب أهل السنة الاساسية الأربعة التي ضاع أسسها كل من أبي حنيفة النعمان بن ثابت (ت. 767 م) ومالك بن أنس (ت. 795م) ومحمد بن إدريس الشافعي (ت. 820م) وأحمد بن حنبل (ت. 855م) حسب الترتيب التاريخي. </p>
                                                        <p>ونبي الإسلام هو محمد بن عبد الله ن عبد المطلب بن هاشم ﷺ وهو من بنى هاشم من قريش فى مكة المكرمة. وبعد أن دعا محمد ﷺ أهل مكة الى الإسلام هاجر فى سنة 622م الى يثرب، وهذه السنة هي بداية التقويم الهجري على أساس السنة القمرية أي 354 يوما، وبقي هناك الى أن توفي عام 632م. بعد وفاة النبى خلفه أبو بكر الصديق  (632-634م) ثم عمر بن الخطاب (634-633م) ثم عثمان بن عفان (644-656م) ثم علي بن أبي طالب (656-662م) </p>
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