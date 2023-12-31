<div id="wrapper">
	<div id="content-wrapper" class="d-flex flex-column">

		<div id="content">
			<div class="container-fluid">
			<?= $this->session->flashdata('message'); ?>
				<h1 class="h3 mb-2 text-gray-800">Lihat User</h1>
				<div class="card shadow mb-2">
					<div class="card-header py-3">
						<button class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">Tambah
							Data</button>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>NIS</th>
										<th>Nama</th>
										<th>Username</th>
										<th>E-mail</th>
									</tr>
								</thead>
								<?php $no = 0; ?>
								<tbody>
									<?php foreach ($users as $item) { ?>
									<tr>
										<td><?= ++$no ?></td>
										<td><?= $item['NIM']; ?> </td>
										<td><?= $item['nama']; ?> </td>
										<td><?= $item['username']; ?> </td>
										<td><?= $item['email']; ?> </td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
<div class="modal" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<h4 class="modal-title">Tambah User</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<div class="modal-body">
				<form action="<?= base_url('admin/simpanUser'); ?>" method="POST">
					<div class="form-group">
						<label for="kategori">NIS:</label>
						<input type="text" class="form-control" placeholder="NIM" name="nim" required>
					</div>
					<div class="form-group">
						<label for="kategori">nama:</label>
						<input type="text" class="form-control" placeholder="Nama" name="nama" required>
					</div>
					<div class="form-group">
						<label for="kategori">Username:</label>
						<input type="text" class="form-control" placeholder="Username" name="username" required>
					</div>
					<div class="form-group">
						<label for="kategori">email:</label>
						<input type="text" class="form-control" placeholder="Email" name="email" required>
					</div>
					<div class="form-group">
						<label for="kategori">password:</label>
						<input type="password" class="form-control" placeholder="Password" name="password" required>
					</div>

			</div>

			
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>