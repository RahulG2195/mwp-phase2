<?php $this->load->view('admin/layout/head'); ?>

<?php $this->load->view('admin/layout/sidebar'); ?>

<?php $this->load->view('admin/layout/top-navigation'); ?>

<!-- page content -->

<div class="right_col" role="main">

	<div class="">

		<div class="page-title">

			<div class="title_left">

				<h3>Blog<small> Data</small></h3>

			</div>

			<div class="title_right">

				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

					<div class="input-group">



					</div>

				</div>

			</div>

		</div>

		<div class="clearfix"></div>

		<div class="row">

			<div class="col-md-12 col-sm-12 ">

				<div class="x_panel">

					<div class="x_title">

						<a href="<?php echo base_url() ?>admin/blogs/add" type="button" class="btn btn-round btn-success" style="color:#fff;">Add Blog</a>

						<ul class="nav navbar-right panel_toolbox">

							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

							</li>

							<li class="dropdown">

								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

									<a class="dropdown-item" href="#">Settings 1</a>

									<a class="dropdown-item" href="#">Settings 2</a>

								</div>

							</li>

							<li><a class="close-link"><i class="fa fa-close"></i></a>

							</li>

						</ul>

						<div class="clearfix"></div>

						<div class="messge-block">

							<h6 style="text-align: center;color:green;"><?php echo $this->session->flashdata('add-message'); ?></h6>

						</div>

						<div class="messge-block">

							<h6 style="text-align: center;color:green;"><?php echo $this->session->flashdata('update-message'); ?></h6>

						</div>

						<div class="messge-block">

							<h6 style="text-align: center;color:green;"><?php echo $this->session->flashdata('delete-message'); ?></h6>

						</div>

					</div>

					<div class="x_content">

						<div class="row">

							<div class="col-sm-12">

								<div class="card-box table-responsive">

									<table id="datatable" class="table table-striped table-bordered" style="width:100%">

										<thead>

											<tr>
												<th>Sr No</th>
												<th>Blog name</th>

												<th>short Desc</th>

												<th>Description</th>

												<th>Image</th>
												<th>Sub Banner</th>

												<th>Action</th>

											</tr>

										</thead>

										<tbody>

											<?php
											$i = 1;
											foreach ($blog as  $value) {  ?>

												<tr>
													<td><?php echo $i++ ?></td>
													<td><?php echo $value["blog_title"]; ?></td>
													<td><?php echo '<textarea name="" id="" cols="30" rows="5" disabled>' . $value['short_desc'] . '</textarea>' ?></td>
													<td><?php echo '<textarea name="" id="" cols="30" rows="5" disabled>' . $value['description'] . '</textarea>' ?></td>



													<td><img src="<?php echo  base_url() ?>uploads/blogs/<?php echo $value["blog_img"]; ?>" width="100px" height="100px"></td>
													<td><img src="<?php echo  base_url() ?>uploads/blogs/<?php echo $value["blog_sub_banner"]; ?>" width="100px" height="100px"></td>
													<td>

														<a href="<?php echo base_url() ?>admin/blogs/edit/<?php echo $value["blog_id"]; ?>" class="btn btn-info">Edit</a>

														<a href="<?php echo base_url() ?>admin/blogs/delete/<?php echo $value["blog_id"]; ?>" class="btn btn-danger" onclick="confirm('You want to delete data ?');">Delete</a>

													</td>

												</tr>

											<?php

											} ?>

										</tbody>

									</table>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>
<?php $this->load->view('admin/layout/footer'); ?>

<?php $this->load->view('admin/layout/script'); ?>