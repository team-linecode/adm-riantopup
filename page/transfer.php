<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card border-0 shadow">
            <div class="card-header">
                <div class="card-title"><i class="fa mr-2 fa-exchange"></i> Transfer Saldo</div>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        Transfer Saldo Ke Saldo Pengguna
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionPrimary" name="someSwitchOption001" type="checkbox" />
                            <label for="someSwitchOptionPrimary" class="label-primary"></label>
                        </div>
                    </li>
                </ul>
                <div class="form-group mt-5">
                    <label for="name">Nama Pengguna Tujuan</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Pengguna Tujuan">
                    <span class="text-danger">*Tidak Boleh Kosong.</span>
                </div>
                <div class="form-group">
                    <label for="amount">Jumlah Transfer</label>
                    <input type="text" class="form-control" placeholder="Masukan Jumlah Transfer">
                    <span class="text-danger">*Tidak Boleh Kosong.</span>
                </div>
                <div class="form-group">
                    <label for="pin">Pin</label>
                    <input type="password" class="form-control" placeholder="Masukan pin kamu">
                    <span class="text-danger">*Tidak Boleh Kosong.</span>
                </div>
                <a href="" class="btn float-right btn-danger">Ulangi</a>
                <a href="" class="btn float-right mr-3 btn-primary">Submit</a>
            </div>
        </div>


        <div class="card border-0 shadow mt-5">
            <div class="card-header">
                <div class="card-title"><i class="fa mr-2 fa-refresh"></i> Daftar Riwayat Transfer Saldo</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal & Waktu</th>
                                <th>Tipe</th>
                                <th>Penerima</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>17 Januari 2022, 19:13:30</td>
                                <td><span class="badge badge-primary">Saldo Top Up</span></td>
                                <td><span class="badge badge-success">topupbos12</span></td>
                                <td><span class="badge badge-warning">Rp 5.000</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>