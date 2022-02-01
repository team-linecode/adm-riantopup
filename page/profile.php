<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card border-0 shadow card-profile  overflow-hidden">
            <div class="card-body">
                <div class="card-title"><i class="fa mr-2 fa-exchange"></i> Akun</div>
                <hr class="my-5">
                <div class="d-flex justify-content-betewen align-items-center mb-5">
                    <div class="mr-3">
                        <img src="img/user.png" class="avatar-xxl rounded-circle" alt="profile">
                    </div>
                    <div>
                        <h4 class="mb-2 font-weight-bold">Adrian Dafa <i class="fa fa-badge"></i></h4>
                        <h6>Developer</h6>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <p>Email :</p>
                        <p>Total Pemakaian Saldo :</p>
                        <p>Terdaftar Sejak :</p>
                        <p>Kode Refferal Anda :</p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <p class="text-muted">adriandafa08@gmail.com</p>
                        <p class="text-muted">Rp 18.564.094</p>
                        <p class="text-muted">03 November 2021 08:48:30</p>
                        <p class="font-weight-bold">YVA2467</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills flex-column" id="profileTab" role="tablist">
                            <li class="nav-item"><a class="nav-link mx-auto py-4 active" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true"><i class="fa fa-gear fa-fw"></i> Pengaturan Akun</a></li>
                            <li class="nav-item"><a class="nav-link mx-auto py-4" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false"><i class="fa fa-lock fa-fw"></i> Ganti Kata Sandi</a></li>
                            <li class="nav-item"><a class="nav-link mx-auto py-4" id="pin-tab" data-toggle="tab" href="#pin" role="tab" aria-controls="pin" aria-selected="false"><i class="fa fa-key fa-fw"></i> Ganti Pin</a></li>
                            <li class="nav-item"><a class="nav-link mx-auto py-4" id="api-tab" data-toggle="tab" href="#api" role="tab" aria-controls="api" aria-selected="false"><i class="fa fa-code fa-fw"></i> Pengaturan API</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="card border-0 shadow">
            <div class="card-header">
                <div class="card-title"><i class="fa mr-2 fa-gear"></i> Setting Akun</div>
            </div>
            <div class="card-body">
                <div class="tab-content" id="tabContent">
                    <!-- ACCOUNT -->
                    <div class="tab-pane fade p-0 active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <form action="" method="">
                            <div class="form-group">
                                <label class="form-label">Nama Pengguna</label>
                                <input type="text" class="form-control" name="" value="dafashop" readonly="">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="" value="Adrian Dafa">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Alamat Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope tx-16 lh-0 op-6"></i></div>
                                    </div>
                                    <input type="text" class="form-control" value="adriandafa08@gmail.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nomer HP</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-phone tx-16 lh-0 op-6"></i></div>
                                    </div>
                                    <input type="text" class="form-control" value="6283899099098">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">PIN</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-lock tx-16 lh-0 op-6"></i></div>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Masukkan PIN untuk menyimpan perubahan">
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary mr-1">Submit</button>
                                <button type="reset" class="btn btn-danger ml-1">Ulangi</button>
                            </div>
                        </form>
                    </div>
                    <!-- PASSWORD -->
                    <div class="tab-pane fade p-0" id="password" role="tabpanel" aria-labelledby="password-tab">
                        <form action="" method="">
                            <div class="form-group">
                                <label class="form-label">Kata Sandi Lama</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-lock tx-16 lh-0 op-6"></i></div>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Kata sandi lama kamu">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Kata Sandi Baru</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-lock tx-16 lh-0 op-6"></i></div>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Kata sandi baru">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Ulangi Kata Sandi Baru</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-lock tx-16 lh-0 op-6"></i></div>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Ulangi kata sandi baru">
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary mr-1">Submit</button>
                                <button type="reset" class="btn btn-danger ml-1">Ulangi</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade p-0" id="pin" role="tabpanel" aria-labelledby="pin-tab">
                        <form action="" method="">
                            <div class="form-group">
                                <label class="form-label">PIN Lama</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-key tx-16 lh-0 op-6"></i></div>
                                    </div>
                                    <input type="password" class="form-control" placeholder="PIN lama kamu">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">PIN Baru</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-key tx-16 lh-0 op-6"></i></div>
                                    </div>
                                    <input type="password" class="form-control" placeholder="PIN baru">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Ulangi PIN Baru</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-key tx-16 lh-0 op-6"></i></div>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Ulangi PIN baru">
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary mr-1">Submit</button>
                                <button type="reset" class="btn btn-danger ml-1">Ulangi</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade p-0" id="api" role="tabpanel" aria-labelledby="api-tab">
                        <form action="" method="">
                            <div class="form-group">
                                <label class="form-label">API Key</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-code tx-16 lh-0 op-6"></i></div>
                                    </div>
                                    <input type="text" class="form-control" value="qiUQErgtQ6wmnYQKwWaD" readonly>
                                    <span class="input-group-append"><button class="btn btn-gray">Ganti API Key</button></span>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary mr-1">Submit</button>
                                <button type="reset" class="btn btn-danger ml-1">Ulangi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>