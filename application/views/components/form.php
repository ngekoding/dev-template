<div class="content">
	<h3>Form Examples</h3>
	<br>
	<div class="form-wrap">
		<div class="row">
			<form action="<?php echo site_url() ?>/position/store" method="post">
				<div class="col-md-4 mt-10">
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="">Label</label>
							<input name="name" type="text" class="form-control" placeholder="Placeholder">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="">Label</label>
							<select name="type" class="form-control select2">
								<option></option>
								<option value="single">Single</option>
								<option value="group">Group</option>
							</select>
						</div>  
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="">Date</label>
							<input name="name" type="text" class="form-control date-picker" placeholder="Placeholder">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="">Time</label>
							<input name="name" type="text" class="form-control time-picker" placeholder="Placeholder">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="">DateTime</label>
							<input name="name" type="text" class="form-control date-time-picker" placeholder="Placeholder">
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
			<div class="col-md-8">
				<!-- Another content here -->
			</div>
		</div>
	</div>
</div>