



			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4> <span class="text-semibold">E- Ukmki</span> - Dashboard</h4>
							<h6>v0.3.1 (BETA)</h6>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="#"><i class="icon-home2 position-left"></i> My - Activities</a></li>
							<li><a href="#">Agenda Kegiatan</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->

				<!-- Content area -->
				<div class="content">
					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">List Anggota</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
						</div>

						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Tanggal Lahir</th>
									<th>Tempat Lahir</th>
									<th>Gender</th>
									<th>Phone</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ($data as $result):
								?>
								<tr>
									<td><?=$result['PRS_NAME']?></td>
									<td><?=$result['PRS_BIRTHDAY']?></td>
									<td><?=$result['PRS_BIRTHPLACE']?></td>
									<td><?=$result['PRS_GENDER']?></td>
									<td><?=$result['PRS_PHONE']?></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
													<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
													<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
								<?php
							endforeach;
								?>
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->
					<!-- /content area -->

				</div>
				<!-- /content wrapper -->

			</div>
			<!-- /page content -->

		</div>
		<!-- /page container -->

</body>

</html>
