<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card border-0 shadow">
            <div class="card-header">
                <div class="card-title"><i class="fa mr-2 fa-money"></i> Isi Saldo</div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Tipe</label>
                    <select class="form-control" name="tipe" id="tipe">
                        <option value="0">Pilih Salah Satu</option>
                        <option value="Transfer Bank">Transfer Bank</option>
                        <option value="Transfer E-Money">Transfer E-Money</option>
                    </select>
                    <span class="text-danger">*Tidak Boleh Kosong.</span>
                </div>
                <div class="form-group">
                    <label>Provider Pembayaran</label>
                    <select class="form-control" name="provider" id="provider">
                        <option value="0">Pilih Salah Satu</option>
                    </select>
                    <span class="text-danger">*Tidak Boleh Kosong.</span>
                </div>
                <div class="form-group">
                    <label>Tipe Pembayaran</label>
                    <select class="form-control" name="pembayaran" id="pembayaran">
                        <option value="0">Pilih Salah Satu</option>
                    </select>
                    <span class="text-danger">*Tidak Boleh Kosong.</span>
                </div>
                <div id="transfer_pulsa">
                    <div class="form-group">
                        <label>Pengirim</label>
                        <input type="number" class="form-control" placeholder="0859xxxxxxxx" value="" name="pengirim">
                        <span class="text-danger">*Tidak Boleh Kosong.</span>
                    </div>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text text-dark">Rp</span></div>
                        <input type="number" class="form-control" name="jumlah" placeholder="Masukkan Jumlah Isi Saldo" id="jumlah">
                    </div>
                    <span class="text-danger">*Tidak Boleh Kosong.</span>
                </div>
                <input type="hidden" id="rate">
                <div class="form-group">
                    <label>Saldo Yang Didapatkan</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text text-dark">Rp</span></div>
                        <input type="number" class="form-control" name="saldo" value="0" id="total" readonly>
                    </div>
                    <span class="text-danger">*Tidak Boleh Kosong.</span>
                </div>
                <div class="form-group">
                    <label>PIN</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock text-dark"></i></span></div>
                        <input type="number" name="pin" class="form-control" placeholder="Masukkan PIN Kamu">
                    </div>
                    <span class="text-danger">*Tidak Boleh Kosong.</span>
                    <span class="form-text text-muted"></span>
                </div>
                <a href="" class="btn float-right btn-danger">Ulangi</a>
                <a href="" class="btn float-right mr-3 btn-primary">Submit</a>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card border-0 shadow">
            <div class="card-header">
                <div class="card-title"><i class="fa mr-2 fa-bell"></i> Informasi</div>
            </div>
            <div class="card-body">
                <p>Isi Saldo Pada <b>Rian Topup</b> Menggunakan Sistem Verifikasi Otomatis, Saldo Akan Bertambah Ketika Kamu Klik Tombol <b>KONFIRMASI</b> Pada Invoice.</p>
                <p>Jadwal Bank <b>OFFLINE</b> Bisa Kamu Cek Di Bawah Ini Dengan Mengeklik Salah Satu Tipe Pembayaran.</p>
                <div id="accordion" class="w-100 ">
                    <div class="accor bg-primary mb-3" id="headingOne">
                        <h5 class="m-0">
                            <a href="#collapseOne" class="text-white" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="font-weight-semibold m-0">
                                    <i class="fa fa-info-circle mr-3"></i> BRIVA
                                </h4>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse border show mb-3" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="">
                            <ul class="pl-5">
                                <li>Senin - Minggu : 22:00 WIB - 06:00 WIB</li>
                                <li>Bank BRI Sering Gangguan Dadakan, Harap Jika Sudah Transfer Masuk Dan Bank BRI Mengalami Gangguan Dadakan Langsung Hubungi (CS) Bantuan Rian Topup Untuk Di Tindak Lanjuti.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="accor  bg-primary mb-3" id="headingTwo">
                        <h5 class="m-0">
                            <a href="#collapseTwo" class="collapsed text-white" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 class="font-weight-semibold m-0">
                                    <i class="fa fa-info-circle mr-3"></i> VIRUAL BCA
                                </h4>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse border b-b0 mb-3" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="">
                            <ul class="pl-5">
                                <li>Senin - Jumat : 21:00 WIB - 01:00 WIB</li>
                                <li>Sabtu : 18:00 WIB - 20:00 WIB, 21:00 WIB - 01:00 WIB</li>
                                <li>Minggu : 00:00 WIB - 05:00 WIB</li>
                            </ul>
                        </div>
                    </div>
                    <div class="accor  bg-primary mb-3" id="headingThree">
                        <h5 class="m-0">
                            <a href="#collapseThree" class="collapsed text-white" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                <h4 class="font-weight-semibold m-0">
                                    <i class="fa fa-info-circle mr-3"></i> VIRTUAL MANDIRI
                                </h4>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse b-b0 border mb-3" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="">
                            <ul class="pl-5">
                                <li>Senin - Jumat : 23:00 WIB - 03:30 WIB</li>
                                <li>Harap Hubungi Admin</li>
                                <li>Sabtu - Minggu : 22:00 WIB - 04:00 WIB</b></li>
                            </ul>
                        </div>
                    </div>
                    <div class="accor  bg-primary mb-3" id="headingFour">
                        <h5 class="m-0">
                            <a href="#collapseFour" class="collapsed text-white" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                                <h4 class="font-weight-semibold m-0">
                                    <i class="fa fa-info-circle mr-3"></i> BANK BNI
                                </h4>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse b-b0 border mb-3" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="">
                            <ul class="pl-5">
                                <li>24 Jam</li>
                                <li>Jarang Sekali Terjadi <b>OFFLINE</b> Kecuali Kalau Ada Gangguan Dadakan.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="accor  bg-primary mb-3" id="headingFive">
                        <h5 class="m-0">
                            <a href="#collapseFive" class="collapsed text-white" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFive">
                                <h4 class="font-weight-semibold m-0">
                                    <i class="fa fa-info-circle mr-3"></i> BANK PERMATA
                                </h4>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse b-b0 border mb-3" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="">
                            <ul class="pl-5">
                                <li>24 Jam</li>
                                <li>Jarang Sekali Terjadi <b>OFFLINE</b> Kecuali Kalau Ada Gangguan Dadakan.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="accor  bg-primary mb-3" id="headingSix">
                        <h5 class="m-0">
                            <a href="#collapseSix" class="collapsed text-white" data-toggle="collapse" aria-expanded="false" aria-controls="collapseSix">
                                <h4 class="font-weight-semibold m-0">
                                    <i class="fa fa-info-circle mr-3"></i> BANK CIMB NIAGA
                                </h4>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse b-b0 border mb-3" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="">
                            <ul class="pl-5">
                                <li>24 Jam</li>
                                <li>Jarang Sekali Terjadi <b>OFFLINE</b> Kecuali Kalau Ada Gangguan Dadakan.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>