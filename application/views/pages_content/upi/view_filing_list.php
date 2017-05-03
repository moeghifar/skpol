<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Daftar Pendaftaran UPI</h3>
            </div>
			<div class="panel-body">
                <table class="table table-striped table-bordered" id="table-list-unsortable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Upi</th>
                            <th>Provinsi</th>
                            <th>Kabupaten / Kota</th>
                            <th>Pemilik</th>
                            <th>Pendaftaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $x = 1; foreach($upi as $k){ ?>
                            <tr>
                                <td><?=$x?></td>
                                <td><?=strtoupper($k['nama_upi'])?></td>
                                <td><?=$k['nama_provinsi']?></td>
                                <td><?=$k['kabupaten_upi']?></td>
                                <td><?=$k['pemilik_upi']?></td>
                                <td><?=$this->nyast->date_indo_format($k['registration_date'])?></td>
                                <td>
                                <a class="btn btn-sm btn-primary" href="<?php echo base_url('upi/filing_detail/'.$k['idtbl_upi']);?>"><i class="ico ico-eye-open"></i></a>
                                <button class="btn btn-sm btn-success" data-idupi="<?=$k['idtbl_upi']?>" data-toggle="modal" data-target="#modalParam"><i class="ico ico-checkmark4"></i></button>
                                <a class="btn btn-sm btn-danger" data-idupi="<?=$k['idtbl_upi']?>" data-toggle="modal" data-target="#bs-modal-md"><i class="ico ico-trash"></i></a>
                            </td>
                        </tr>
                        <?php $x++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- START modal-sm -->
<div id="modalParam" class="modal fade">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header text-center">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3 class="semibold modal-title text-primary">Terima</h3>
			</div>
			<form method="post" class="confirm-upi" action="<?=site_url('upi/confirm_upi')?>">
				<div class="modal-body">
					<div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <select name="skala_upi" class="form-control">
                                    <option value="">Pilih Skala UPI</option>
                                    <option value="kecil">UPI Kecil</option>
                                    <option value="menengah">UPI Menengah</option>
                                    <option value="besar">UPI Besar</option>
                                </select>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-12">
								<select name="jenis_upi" class="form-control">
									<option value="">Pilih Jenis UPI</option>
									<option value="UPI">UPI</option>
									<option value="UPRLK">UPRLK</option>
									<option value="UPIH">UPIH</option>
									<option value="Importir/ Gudang Non RL">Importir/ Gudang Non RL</option>
									<option value="Kapal Pengolah Ikan">Kapal Pengolah Ikan</option>                                
									<option value="Non UPI">Non UPI</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
								<small class="help-block text-danger">*Isi field di bawah jika UPI belum memenuhi persyaratan.</small>
                                <textarea name="alasan" class="form-control" style="max-width:100%;min-width:100%;min-height:80px;"></textarea>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="id_register_upi">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<!--/ END modal-sm -->
