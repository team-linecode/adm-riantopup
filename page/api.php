<div class="row">
    <div class="col-md-12">
        <div class="card card-profile  overflow-hidden">
            <div class="card-header">
                <div class="card-title"><i class="fa fa-code text-brand font-weight-bold"></i> API Dokumentasi</div>
            </div>
            <div class="card-body pt-2">
                <div class="table-reponsive">
                    <table class="table table-borded table-striped text-left">
                        <tr>
                            <td class="font-weight-bold">HTTP Method</td>
                            <td>POST</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">API URL</td>
                            <td>https://riantopup.com/api</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Format Respons</td>
                            <td>JSON</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">API Kategori</td>
                            <td>
                                <div class="form-group">
                                    <select class="form-control bg-white" id="api">
                                        <option value="0">Pilih salah satu...</option>
                                        <option value="api_social_media">Api Sosial Media</option>
                                        <option value="api_top_up">Api Top Up</option>
                                        <option value="api_pascabayar">Api Pascabayar</option>
                                        <option value="api_account_information">Api Informasi Akun</option>
                                        <option value="api_id_comment">Api ID Komentar</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card-body">
                <div class="nav-wrapper p-0">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0 active show" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Pesanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-0 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false">Status</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body pb-0">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                        <h4 class="brand-font">Menampilkan Daftar Layanan</h4>
                        <div class="form-group">
                            <label>URL Permintaan</label>
                            <input type="text" class="form-control" value="https://riantopup.com/api/social-media" readonly>
                        </div>
                        <div class="table-responsive mb-5 mt-5">
                            <table class="table table-borded table-striped text-left">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">Parameter</th>
                                        <th class="font-weight-bold">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>api_key</td>
                                        <td>API Key Kamu</td>
                                    </tr>
                                    <tr>
                                        <td>action</td>
                                        <td>layanan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h4 class="brand-font mt-5">Contoh Respon Yang Ditampilkan</h4>
                        <div class="table-responsive mb-5 mt-5">
                            <table class="table table-borded table-striped text-left">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">Respon Sukses</th>
                                        <th class="font-weight-bold">Respon Gagal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>
{
	"status": true,
	"data": [
		{
			"sid": "1",
			"kategori": "Subscriber YouTube",
			"layanan": "Subscriber S1",
			"harga": "10000",
			"min": "100",
			"max": "10000",
			"catatan": "Masukan Link Channel Example : mhsajiprstya"
		},
		{
			"sid": "2",
			"kategori": "Instagram Likes",
			"layanan": "Instagram Likes S1",
			"harga": "10000",
			"min": "100",
			"max": "10000",
			"catatan": "Masukan Link Postingan"
		},
	]
}
																	</pre>
                                        </td>
                                        <td>
                                            <pre>
{
	"status": false,
	"data": {
		"pesan": "API Key Salah"
	}
}

																	</pre>
                                            <b>Kemungkinan Pesan Yang Ditampilkan:</b>
                                            <ul class="pl-4">
                                                <li>Permintaan Tidak Sesuai</li>
                                                <li>API Key Salah</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">
                        <h4 class="brand-font">Menampilkan Daftar Layanan</h4>
                        <div class="form-group">
                            <label>URL Permintaan</label>
                            <input type="text" class="form-control" value="https://riantopup.com/api/social-media" readonly>
                        </div>
                        <div class="table-responsive mb-5 mt-5">
                            <table class="table table-borded table-striped text-left">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">Parameter</th>
                                        <th class="font-weight-bold">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>api_key</td>
                                        <td>API Key Kamu</td>
                                    </tr>
                                    <tr>
                                        <td>action</td>
                                        <td>layanan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h4 class="brand-font mt-5">Contoh Respon Yang Ditampilkan</h4>
                        <div class="table-responsive mb-5 mt-5">
                            <table class="table table-borded table-striped text-left">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">Respon Sukses</th>
                                        <th class="font-weight-bold">Respon Gagal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>
 {
  "status": true,
  "data": [
	  {
		  "sid": "1",
		  "kategori": "Subscriber YouTube",
		  "layanan": "Subscriber S1",
		  "harga": "10000",
		  "min": "100",
		  "max": "10000",
		  "catatan": "Masukan Link Channel Example : mhsajiprstya"
	  },
	  {
		  "sid": "2",
		  "kategori": "Instagram Likes",
		  "layanan": "Instagram Likes S1",
		  "harga": "10000",
		  "min": "100",
		  "max": "10000",
		  "catatan": "Masukan Link Postingan"
	  },
  ]
 }
																  </pre>
                                        </td>
                                        <td>
                                            <pre>
 {
  "status": false,
  "data": {
	  "pesan": "API Key Salah"
  }
 }
 
																  </pre>
                                            <b>Kemungkinan Pesan Yang Ditampilkan:</b>
                                            <ul class="pl-4">
                                                <li>Permintaan Tidak Sesuai</li>
                                                <li>API Key Salah</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">
                        <h4 class="brand-font">Menampilkan Daftar Layanan</h4>
                        <div class="form-group">
                            <label>URL Permintaan</label>
                            <input type="text" class="form-control" value="https://riantopup.com/api/social-media" readonly>
                        </div>
                        <div class="table-responsive mb-5 mt-5">
                            <table class="table table-borded table-striped text-left">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">Parameter</th>
                                        <th class="font-weight-bold">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>api_key</td>
                                        <td>API Key Kamu</td>
                                    </tr>
                                    <tr>
                                        <td>action</td>
                                        <td>layanan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h4 class="brand-font mt-5">Contoh Respon Yang Ditampilkan</h4>
                        <div class="table-responsive mb-5 mt-5">
                            <table class="table table-borded table-striped text-left">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">Respon Sukses</th>
                                        <th class="font-weight-bold">Respon Gagal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>
 {
  "status": true,
  "data": [
	  {
		  "sid": "1",
		  "kategori": "Subscriber YouTube",
		  "layanan": "Subscriber S1",
		  "harga": "10000",
		  "min": "100",
		  "max": "10000",
		  "catatan": "Masukan Link Channel Example : mhsajiprstya"
	  },
	  {
		  "sid": "2",
		  "kategori": "Instagram Likes",
		  "layanan": "Instagram Likes S1",
		  "harga": "10000",
		  "min": "100",
		  "max": "10000",
		  "catatan": "Masukan Link Postingan"
	  },
  ]
 }
																  </pre>
                                        </td>
                                        <td>
                                            <pre>
 {
  "status": false,
  "data": {
	  "pesan": "API Key Salah"
  }
 }
 
																  </pre>
                                            <b>Kemungkinan Pesan Yang Ditampilkan:</b>
                                            <ul class="pl-4">
                                                <li>Permintaan Tidak Sesuai</li>
                                                <li>API Key Salah</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>