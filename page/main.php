<div class="row">
	<div class="col-lg-7">
		<div class="card mb-5">
			<div class="card-header py-4">
				<div class="card-title"><i class="fa mr-2 fa-bar-chart"></i> Grafik Mingguan</div>
			</div>
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col-lg-4">
						<h1 class="font-weight-bold">Rp 0</h1>
						<div class="small text-danger mb-3">
							<i class="fe fe-arrow-down"></i> -100% Berkurang dibanding minggu kemarin
						</div>
						<small class="d-block mb-3 mb-md-0">Grafik dibandingkan dengan data minggu kemarin.</small>
					</div>
					<div class="col-lg-8">
						<div id="chart"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-5">
		<div class="row">
			<div class="col-6">
				<div class="card">
					<div class="card-body text-center">
						<span class="bg-primary-transparent icon-service text-primary ">
							<i class="fa fa-credit-card  fs-2"></i>
						</span>
						<p class="card-text text-muted mb-1 mt-5">Sisa Saldo</p>
						<h3 class="mb-0 text-dark mainvalue font-weight-semibold">Rp. 99.488.120</h4>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card">
					<div class="card-body text-center">
						<span class="bg-success-transparent icon-service text-success">
							<i class="si si-layers fs-2"></i>
						</span>
						<p class="card-text text-muted mb-1 mt-5">Saldo Terpakai</p>
						<h3 class="mb-0 text-dark mainvalue font-weight-semibold">Rp. 99.488.120</h4>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card">
					<div class="card-body text-center">
						<span class="bg-danger-transparent icon-service text-danger">
							<i class="fa fa-bar-chart  fs-2"></i>
						</span>
						<p class="card-text text-muted mb-1 mt-5">Jumlah Pesanan</p>
						<h3 class="mb-0 text-dark mainvalue font-weight-semibold">1345</h3>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card">
					<div class="card-body text-center">
						<span class="bg-warning-transparent icon-service text-warning">
							<i class="fa fa-user  fs-2"></i>
						</span>
						<p class="card-text text-muted mb-1 mt-5">IP Address</p>
						<h3 class="mb-0 text-dark mainvalue font-weight-semibold">114.79.3.79</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-7">
		<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
			<span class="alert-inner--icon"><i class="fa fa-whatsapp"></i></span>
			<span class="alert-inner--text"><strong>Join Group WhatsApp</strong> <a href="" class="ml-1">KLIK DISINI</a></span>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>

		<div class="card mt-5">
			<div class="d-flex justify-content-between">
				<div>
					<div class="d-flex">
						<div class="feature mr-4">
							<div class="fa-stack fa-lg fa-2x icon bg-gradient-secondary">
								<i class="fa fa-credit-card fa-stack-1x text-white"></i>
							</div>
						</div>
						<div class="align-self-center">
							<h5 class="text-muted mb-1">Adrian Dafa</h5>
							<h3 class="mb-0 text-dark brand-font">Rp. 996.488.120</h3>
						</div>
					</div>
				</div>
				<div class="align-self-center">
					<a href="<?= url('index.php?page=deposit') ?>" class="btn btn-primary mr-5"><i class="fa fa-plus"></i></a>
				</div>
			</div>
		</div>


		<div class="card mb-5">
			<div class="card-header py-4">
				<div class="card-title"><i class="fa mr-2 fa-refresh"></i> 10 Riwayat Pesanan Terakhir Kamu</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="example3" class="table table-striped table-bordered text-nowrap w-100">
						<thead>
							<tr>
								<th>No</th>
								<th>Via</th>
								<th>Tanggal & Waktu</th>
								<th>Nama Layanan</th>
								<th>Harga</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td align="center"><i class="fa fa-globe"></i></td>
								<td>25 Januari 2022, 22:08:45</td>
								<td>Mobile Legends 344 Diamonds</td>
								<td>Rp 72.000</td>
								<td><span class="btn btn-success btn-elevate btn-pill btn-elevate-air btn-sm">Success</span></td>
							</tr>
							<tr>
								<td>2</td>
								<td align="center"><i class="fa fa-globe"></i></td>
								<td>25 Januari 2022, 22:06:43</td>
								<td>Free Fire 140 Diamond</td>
								<td>Rp 18.000</td>
								<td><span class="btn btn-success btn-elevate btn-pill btn-elevate-air btn-sm">Success</span></td>
							</tr>
							<tr>
								<td>3</td>
								<td align="center"><i class="fa fa-globe"></i></td>
								<td>25 Januari 2022, 22:06:23</td>
								<td>Free Fire 140 Diamond</td>
								<td>Rp 18.000</td>
								<td><span class="btn btn-success btn-elevate btn-pill btn-elevate-air btn-sm">Success</span></td>
							</tr>
							<tr>
								<td>4</td>
								<td align="center"><i class="fa fa-globe"></i></td>
								<td>25 Januari 2022, 20:38:21</td>
								<td>Mobile Legends 257 Diamonds</td>
								<td>Rp 55.650</td>
								<td><span class="btn btn-success btn-elevate btn-pill btn-elevate-air btn-sm">Success</span></td>
							</tr>
							<tr>
								<td>5</td>
								<td align="center"><i class="fa fa-globe"></i></td>
								<td>25 Januari 2022, 20:38:06</td>
								<td>Mobile Legends 257 Diamonds</td>
								<td>Rp 55.650</td>
								<td><span class="btn btn-success btn-elevate btn-pill btn-elevate-air btn-sm">Success</span></td>
							</tr>
							<tr>
								<td>6</td>
								<td align="center"><i class="fa fa-globe"></i></td>
								<td>25 Januari 2022, 19:24:38</td>
								<td>Free Fire 70 Diamond</td>
								<td>Rp 9.000</td>
								<td><span class="btn btn-success btn-elevate btn-pill btn-elevate-air btn-sm">Success</span></td>
							</tr>
							<tr>
								<td>7</td>
								<td align="center"><i class="fa fa-globe"></i></td>
								<td>25 Januari 2022, 14:29:49</td>
								<td>Free Fire 140 Diamond</td>
								<td>Rp 18.000</td>
								<td><span class="btn btn-success btn-elevate btn-pill btn-elevate-air btn-sm">Success</span></td>
							</tr>
							<tr>
								<td>8</td>
								<td align="center"><i class="fa fa-globe"></i></td>
								<td>24 Januari 2022, 20:01:59</td>
								<td>Free Fire 70 Diamond</td>
								<td>Rp 8.970</td>
								<td><span class="btn btn-success btn-elevate btn-pill btn-elevate-air btn-sm">Success</span></td>
							</tr>
							<tr>
								<td>9</td>
								<td align="center"><i class="fa fa-globe"></i></td>
								<td>24 Januari 2022, 20:00:35</td>
								<td>Free Fire Member @60 Diamonds / 7 Hari</td>
								<td>Rp 27.050</td>
								<td><span class="btn btn-success btn-elevate btn-pill btn-elevate-air btn-sm">Success</span></td>
							</tr>
							<tr>
								<td>10</td>
								<td align="center"><i class="fa fa-globe"></i></td>
								<td>24 Januari 2022, 19:55:11</td>
								<td>Free Fire 140 Diamond</td>
								<td>Rp 17.650</td>
								<td><span class="btn btn-success btn-elevate btn-pill btn-elevate-air btn-sm">Success</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-5">
		<div class="card mb-5">
			<div class="card-header">
				<div class="card-title">Berita Terbaru | Update</div>
			</div>
			<div class="card-body">
				<div>
					<a href="" class="text-decoration-none">
						<div class="d-flex">
							<p class="text-muted mb-0"><i class="fa fa-calendar mr-2"></i>16 November 2021</p>
							<p class="text-muted m-0 mx-2">|</p>
							<p class="text-muted mb-0"><i class="fa fa-user mr-2"></i>Admin</p>
						</div>
						<h4 class="font-weight-semibold mt-1 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, corporis!</h4>
						<p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque harum recusandae nihil necessitatibus sed minus dolorum autem, non hic corporis.</p>
					</a>
				</div>
				<hr class="my-3">
				<div>
					<a href="" class="text-decoration-none">
						<div class="d-flex">
							<p class="text-muted mb-0"><i class="fa fa-calendar mr-2"></i>16 November 2021</p>
							<p class="text-muted m-0 mx-2">|</p>
							<p class="text-muted mb-0"><i class="fa fa-user mr-2"></i>Admin</p>
						</div>
						<h4 class="font-weight-semibold mt-1 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, corporis!</h4>
						<p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque harum recusandae nihil necessitatibus sed minus dolorum autem, non hic corporis.</p>
					</a>
				</div>
				<hr class="my-3">
				<div>
					<a href="" class="text-decoration-none">
						<div class="d-flex">
							<p class="text-muted mb-0"><i class="fa fa-calendar mr-2"></i>16 November 2021</p>
							<p class="text-muted m-0 mx-2">|</p>
							<p class="text-muted mb-0"><i class="fa fa-user mr-2"></i>Admin</p>
						</div>
						<h4 class="font-weight-semibold mt-1 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, corporis!</h4>
						<p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque harum recusandae nihil necessitatibus sed minus dolorum autem, non hic corporis.</p>
					</a>
				</div>
				<hr class="my-3">
			</div>
		</div>
	</div>
</div>

<!-- Grid Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title font-weight-bold" id="example-Modal2">ALL Kategori</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<?php for ($i = 0; $i < 18; $i++) : ?>
						<div class="col-lg-2 text-center mb-4">
							<a href="" class="text-decoration-none">
								<img src="img/service/modal/1.png" alt="" width="45">
								<h5 class="mt-3 text-dark font-weight-semibold">Title</h5>
							</a>
						</div>
					<?php endfor ?>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newsModalLabel"><i class="fa fa-bell"></i> Berita & Informasi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card text-white bg-gradient-primary">
					<div class="card-body">
						<h4 class="card-title">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<div class="badge badge-secondary">INFO</div> Diamond Mobile Legends
								</div>
								<div class="col-lg-6 text-right">
									<small class="text-white mb-0">16 November 2021, 20:13:21</small>
								</div>
							</div>
						</h4>
						<small class="card-text">
							MOBILE LEGENDS SERVER 1 PROSES DETIKAN !<br>
							APABILA SERVER 1 GANGGUAN / ERROR SILAHKAN PILIH SERVER 2 !<br>
							<br><br>
							PROSES DETIKAN DAN MURAH!
						</small>
					</div>
				</div>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fe fe-check"></i> Saya Sudah Membaca</button>
			</div>
		</div>
	</div>
</div>