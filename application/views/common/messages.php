<?php

if (!empty($this->session->flashdata('status'))) {
	$status  = $this->session->flashdata('status');
	$message = $this->session->flashdata('message');

	if ($status == 'success') {
		echo "<div class='alert alert-success'>";
		echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
		echo "<strong>Sukses!</strong> ".$message;
		echo "</div>";
	} else {
		if (!empty($message)) {
			echo "<div class='alert alert-danger'>";
			echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
			if (is_array($message)) {
				foreach ($message as $msg) {
					echo $msg . '<br>';
				}
			} else {
				echo "<strong>Gagal!</strong> ".$message;
			}
			echo "</div>";
		}
	}
}