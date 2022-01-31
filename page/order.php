<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card border-0 shadow">
            <div class="card-header">
                <div class="card-title"><i class="fa mr-2 fa-money"></i> Isi Saldo</div>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="operator" id="operator">
                            <option value="0">Pilih Salah Satu</option>
                            <option value="BRIZZI">BRIZZI</option>
                            <option value="DANA">DANA</option>
                            <option value="GoPay">GoPay</option>
                            <option value="GoPay for Driver">GoPay for Driver</option>
                            <option value="GRAB">GRAB</option>
                            <option value="ISAKU">ISAKU</option>
                            <option value="LinkAja">LinkAja</option>
                            <option value="Mandiri E-Toll">Mandiri E-Toll</option>
                            <option value="Maxim Driver">Maxim Driver</option>
                            <option value="Mitra Shopee">Mitra Shopee</option>
                            <option value="OVO">OVO</option>
                            <option value="SAKUKU">SAKUKU</option>
                            <option value="Shopee Pay">Shopee Pay</option>
                            <option value="Tapcash BNI">Tapcash BNI</option>
                            <option value="Tix ID">Tix ID</option>
                        </select>
                        <span class="text-danger">*Tidak Boleh Kosong.</span>
                    </div>
                    <div class="form-group">
                        <label>Layanan</label>
                        <select class="form-control" name="layanan" id="layanan">
                            <option value="0">Pilih Salah Satu</option>
                            <option value="DANA10">DANA 10.000</option>
                            <option value="DANA11">DANA 11.000</option>
                            <option value="DANA12">DANA 12.000</option>
                            <option value="DANA15">DANA 15.000</option>
                            <option value="DANA20">DANA 20.000</option>
                            <option value="DANA25">DANA 25.000</option>
                            <option value="DANA30">DANA 30.000</option>
                            <option value="DANA35">DANA 35.000</option>
                            <option value="DANA40">DANA 40.000</option>
                            <option value="DANA45">DANA 45.000</option>
                            <option value="DANA50">DANA 50.000</option>
                            <option value="DANA55">DANA 55.000</option>
                            <option value="DANA60">DANA 60.000</option>
                            <option value="DANA65">DANA 65.000</option>
                            <option value="DANA70">DANA 70.000</option>
                            <option value="DANA75">DANA 75.000</option>
                            <option value="DANA80">DANA 80.000</option>
                            <option value="DANA85">DANA 85.000</option>
                            <option value="DANA90">DANA 90.000</option>
                            <option value="DANA95">DANA 95.000</option>
                            <option value="DANA100">DANA 100.000</option>
                            <option value="DANA125">DANA 125.000</option>
                            <option value="DANA150">DANA 150.000</option>
                            <option value="DANA200">DANA 200.000</option>
                            <option value="DANA250">DANA 250.000</option>
                            <option value="DANA300">DANA 300.000</option>
                            <option value="DANA400">DANA 400.000</option>
                            <option value="DANA500">DANA 500.000</option>
                            <option value="DANA600">DANA 600.000</option>
                            <option value="DANA700">DANA 700.000</option>
                            <option value="DANA800">DANA 800.000</option>
                            <option value="DANA900">DANA 900.000</option>
                            <option value="DANA1000">DANA 1.000.000</option>
                        </select>
                        <span class="text-danger">*Tidak Boleh Kosong.</span>
                    </div>
                    <div class="form-group">
                        <label>Tujuan</label>
                        <input type="text" name="Tujuan" class="form-control" placeholder="Tujuan">
                        <span class="text-danger">*Tidak Boleh Kosong.</span>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text text-dark">Rp</span></div>
                            <input type="number" class="form-control" id="totalxx" placeholder="0" readonly="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>PIN</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock"></i></span></div>
                            <input type="password" name="pin" class="form-control" placeholder="Masukkan PIN Kamu">
                        </div>
                        <span class="text-danger">*Tidak Boleh Kosong.</span>
                    </div>
                    <a href="" class="btn float-right btn-danger">Ulangi</a>
                    <a href="" class="btn float-right mr-3 btn-primary">Submit</a>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card border-0 shadow">
            <div class="card-header">
                <div class="card-title"><i class="fa mr-2 fa-bell"></i> Informasi</div>
            </div>
            <div class="card-body">
                <h4 class="font-weight-semibold">Langkah-langkah membuat pesanan baru:</h4>
                <ul class="pl-5">
                    <li>Pilih salah satu Kategori.</li>
                    <li>Pilih salah satu Layanan yang ingin dipesan.</li>
                    <li>Masukkan Target pesanan sesuai ketentuan yang diberikan layanan tersebut.</li>
                    <li>Masukkan Jumlah Pesanan yang diinginkan.</li>
                    <li>Klik Submit untuk membuat pesanan baru.</li>
                </ul>
                <h4 class="font-weight-semibold mt-5">Ketentuan membuat pesanan baru:</h4>
                <ul class="pl-5">
                    <li>Silahkan membuat pesanan sesuai langkah-langkah diatas.</li>
                    <li>Jika ingin membuat pesanan dengan Target yang sama dengan pesanan yang sudah pernah dipesan sebelumnya, mohon menunggu sampai pesanan sebelumnya selesai diproses.</li>
                    <li>Jika terjadi kesalahan / mendapatkan pesan gagal yang kurang jelas, silahkan hubungi Admin untuk informasi lebih lanjut.</li>
                </ul>
            </div>
        </div>
    </div>
</div>