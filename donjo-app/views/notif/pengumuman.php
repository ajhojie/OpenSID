<div class="modal fade" id="pengumuman" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header btn-info'>
				<h4 class='modal-title' id='myModalLabel'><i class='fa fa-file-text-o text-black'></i> &nbsp;&nbsp;<?= $judul ?></h4>
			</div>
			<div class='modal-body'>
				<?= $isi_pengumuman; ?>
			</div>
			<div class='modal-footer'>
				<button class="btn btn-social btn-flat btn-danger btn-sm" data-dismiss="modal"><i class='fa fa-sign-out'></i> Tidak</button>
				<button type="button" class="btn btn-social btn-flat btn-warning btn-sm" data-dismiss="modal"><i class='fa fa-check'></i> Setuju</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(window).on('load', function() {
		$('#pengumuman').modal('show');
		$('#ok').click(function() {
			$('#pengumuman').modal('hide');
		});
	});
</script>