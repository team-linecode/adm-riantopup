<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card  card-profile  overflow-hidden">
            <div class="card-header pb-0">
                <div class="card-title"><i class="fa mr-2 fa-envelope"></i> Tiket</div>
            </div>
            <div class="card-body pt-0">
                <hr class="mt-0">
                <div class="nav-wrapper p-0">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0 active show" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">Buat Tiket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Daftar Tiket</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content mt-5" id="myTabContent">
                    <div class="tab-pane fade active show" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <h4 class="font-weight-bold">TATA CARA PENGISIAN FORM SUBJEK</h4>
                            <ul class="pl-4">
                                <li><b>Pesanan : </b>Masalah Mengenai Dengan Pesanan.</li>
                                <li><b>Isi Saldo : </b>Masalah Mengenai Dengan Isi Saldo.</li>
                                <li><b>Layanan : </b>Masalah Mengenai Dengan Layanan.</li>
                                <li><b>Lainnya : </b>Masalah Mengenai Dengan Hal Yang Lainnya.</li>
                            </ul>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>


                        <div class="form-group">
                            <label>Subjek</label>
                            <select class="form-control" name="subjek" id="subjek">
                                <option value="Pesanan">Pesanan</option>
                                <option value="Isi Saldo">Isi Saldo</option>
                                <option value="Layanan">Layanan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <span class="text-danger">*Tidak Boleh Kosong.</span>
                        </div>
                        <div class="form-group">
                            <label>Pesan</label>
                            <textarea type="text" class="form-control" placeholder="Keluhan Pesanan, Deposit, Tentang Layanan, Atau Yang Lainya" value="" name="pesan"></textarea>
                            <span class="text-danger">*Tidak Boleh Kosong.</span>
                        </div>

                        <a href="" class="btn float-right btn-danger">Ulangi</a>
                        <a href="" class="btn float-right mr-3 btn-primary">Submit</a>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">

                        <table id="example" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tanggal & Waktu</th>
                                    <th>Update Terakhir</th>
                                    <th>Subjek</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>aaaaaaa</td>
                                    <td>aaaaaaa</td>
                                    <td>aaaaaaa</td>
                                    <td>aaaaaaa</td>
                                    <td>aaaaaaa</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>