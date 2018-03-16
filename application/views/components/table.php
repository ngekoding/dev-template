<div class="content">
	<h3>Tables Examples</h3>
	<br>
	<div class="table-wrap">
		<table class="table table-hover mb-0">
			<thead>
				<tr>
					<th width="20">No</th>
					<th>Column Name</th>
					<th>Column Name</th>
					<th width="50">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Lorem ipsum</td>
					<td>Lorem ipsum</td>
					<td>
						<div class="dropdown" style="display: inline-block;">
							<button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Opsi <span class="caret"></span></button>
							<ul class="dropdown-menu triangle-right" style="left: auto; right: 0">
								<li>
									<a href="#">Edit</a>
								</li>
								<li data-title="Your data title" data-href="#" data-toggle="modal" data-target="#modal-delete"><a href="#">Delete</a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Lorem ipsum</td>
					<td>Lorem ipsum</td>
					<td>
						<div class="dropdown" style="display: inline-block;">
							<button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Opsi <span class="caret"></span></button>
							<ul class="dropdown-menu triangle-right" style="left: auto; right: 0">
								<li>
									<a href="#">Edit</a>
								</li>
								<li data-title="Your data title" data-href="#" data-toggle="modal" data-target="#modal-delete"><a href="#">Delete</a></li>
							</ul>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		
		<ul class="pagination pagination-sm">
			<li><a href="#">&laquo;</a></li>
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">&raquo;</a></li>
		</ul>

		<div class="clearfix"></div>
		<hr><br>

		<table class="table table-bordered table-hover datatables mb-0">
			<thead>
				<tr>
					<th width="20">No</th>
					<th>Column Name</th>
					<th>Column Name</th>
					<th>Column Name</th>
					<th>Column Name</th>
					<th width="100">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Lorem ipsum dolor</td>
					<td>Lorem ipsum dolor</td>
					<td>Lorem ipsum dolor</td>
					<td>Lorem ipsum dolor</td>
					<td align="center">
						<a href="#" class="btn btn-success btn-sm" data-toggle="tooltip" title="Edit">
							<i class="far fa-edit"></i>
						</a>
						<span data-toggle="tooltip" title="Delete">
							<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete" data-href="#" data-title="Your data title">
								<i class="far fa-trash-alt"></i>
							</button>
						</span>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Lorem ipsum</td>
					<td>Lorem ipsum</td>
					<td>Lorem ipsum</td>
					<td>Lorem ipsum</td>
					<td align="center">
						<a href="#" class="btn btn-success btn-sm" data-toggle="tooltip" title="Edit">
							<i class="far fa-edit"></i>
						</a>
						<span data-toggle="tooltip" title="Delete">
							<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete" data-href="#" data-title="Your data title">
								<i class="far fa-trash-alt"></i>
							</button>
						</span>
					</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Lorem ipsum</td>
					<td>Lorem ipsum</td>
					<td>Lorem ipsum</td>
					<td>Lorem ipsum</td>
					<td align="center">
						<a href="#" class="btn btn-success btn-sm" data-toggle="tooltip" title="Edit">
							<i class="far fa-edit"></i>
						</a>
						<span data-toggle="tooltip" title="Delete">
							<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete" data-href="#" data-title="Your data title">
								<i class="far fa-trash-alt"></i>
							</button>
						</span>
					</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Lorem ipsum</td>
					<td>Lorem ipsum</td>
					<td>Lorem ipsum</td>
					<td>Lorem ipsum</td>
					<td align="center">
						<a href="#" class="btn btn-success btn-sm" data-toggle="tooltip" title="Edit">
							<i class="far fa-edit"></i>
						</a>
						<span data-toggle="tooltip" title="Delete">
							<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete" data-href="#" data-title="Your data title">
								<i class="far fa-trash-alt"></i>
							</button>
						</span>
					</td>
				</tr>
			</tbody>
		</table>

	</div>

	<?php $this->load->view('common/modal-delete') ?>

</div>