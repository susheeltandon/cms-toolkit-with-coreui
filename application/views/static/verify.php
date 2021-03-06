
<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card-group">
		<div class="card p-4">
			<div class="card-body">
			<?= form_open('forgot/otp') ?>
			<h1>Verify "<?=$this->session->otp?>"</h1>
			<p class="text-muted">We have send a verification pin for you to reset password.</p>

			<?php if (isset($this->session->error)) : ?>
				<div class="alert alert-danger" role="alert">
				<?= $this->session->error ?>
			</div>
			<?php endif ?>
			<?php control_error('username') ?>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="icon-user"></i>
				</span>
				</div>
				<input class="form-control" type="text" name="pin" placeholder="Enter PIN">
			</div>
			<div class="row">
				<div class="col-6">
				<input type="submit" value="Submit" class="btn btn-primary px-4">
				<a href="<?=base_url('forgot/')?>" class="btn btn-link px-4">Wrong account?</a>
				</div>
			</div>
			<?= form_close() ?>
			</div>
		</div>
		</div>
	</div>
</div>