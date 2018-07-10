<!-- main navbar -->
<div class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="index.html"><img src="<?=base_url('assets/images/logo_light.png')?>" alt=""></a>

		<ul class="nav navbar-nav visible-xs-block">
			<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
		</ul>
	</div>

	<div class="navbar-collapse collapse" id="navbar-mobile">
		<ul class="nav navbar-nav">
			<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
		</ul>

		<p class="navbar-text">
			<span class="label bg-success">Online</span>
		</p>

		<p class="navbar-text">
			<span class="label"><i class="icon-coins">3.242 pts.</i></span>
		</p>

		<div class="navbar-right">
			<ul class="nav navbar-nav">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?=base_url('assets/images/placeholder.jpg')?>" alt="">
						<span>{{$_nama}}</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="<?=base_url('Superuser/Logout')?>"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- /main navbar -->

<!-- main menu -->
@switch($_menu)

	@case('ketum')
		<!-- Page container -->
		<div class="page-container">

		  <!-- Page content -->
		  <div class="page-content">

		    <!-- Main sidebar -->
		    <div class="sidebar sidebar-main">
		      <div class="sidebar-content">

		        <!-- User menu -->
		        <div class="sidebar-user">
		          <div class="category-content">
		            <div class="media">
		              <a href="#" class="media-left"><img src="{{base_url('assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></a>
		              <div class="media-body">
		                <span class="media-heading text-semibold">{{$_nama}} </span>
		                <div class="text-size-mini text-muted">
		                  <i class="icon-crown text-size-small"></i> &nbsp;{{strtoupper($_pos)}}
		                </div>
		              </div>

		              <div class="media-right media-middle">
		                <ul class="icons-list">
		                  <li>
		                    <a href="#"><i class="icon-cog3"></i></a>
		                  </li>
		                </ul>
		              </div>
		            </div>
		          </div>
		        </div>
		        <!-- /user menu -->


		        <!-- Main navigation -->
		        <div class="sidebar-category sidebar-category-visible">
		          <div class="category-content no-padding">
		            <ul class="navigation navigation-main navigation-accordion">
		              <!-- Main -->
		              <li class="navigation-header"><span>Main Menu</span> <i class="icon-menu" title="Main pages"></i></li>
		              <li><a href="<?=base_url('Superuser/index')?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
		              <li><a href="changelog.html"><i class="icon-calendar"></i> <span>My - Activities </a>
		                <ul>
		                  <li><a href="<?=base_url('Superuser/yaumiah')?>"><i class="icon-calendar"></i><span>Amalan Yaumiah</span></a></li>
		                  <li><a href="<?=base_url('Superuser/agenda_kegiatan')?>"><i class="icon-stack4"></i><span>Agenda Kegiatan</span></a></li>
		                  <li><a href="#"><i class="icon-quill4"></i><span>Catatan Saya</span></a></li>
		                </ul>
		              </li>
		              <li><a href="../../RTL/default/index.html"><i class="icon-users4"></i> <span>My - Mentoring</span></a>
		                <ul>
		                  <li><a href="#"><i class="icon-book"></i><span>Silabus Mentoring</span></a></li>
		                  <li><a href="{{base_url('Superuser/mymentoring/lihat_kelas')}}"><i class="icon-tree7"></i><span>Kelas Mentoring</span></a></li>
		                </ul>
		              </li>
		              <li><a href="../../RTL/default/index.html"><i class="icon-bookmark"></i> <span>My - Article</span></a>
		                <ul>
		                  <li><a href="#"><i class="icon-clipboard"></i><span>Artikel Saya</span></a></li>
		                </ul>
		              </li>
		              <li><a href="../../RTL/default/index.html"><i class="icon-people"></i> <span>My - Ukmki</span></a>
		                <ul>
		                  <li><a href="<?=base_url('Superuser/anggota')?>"><i class="icon-users"></i><span>Anggota Saya</span></a></li>
		                  <li><a href="#"><i class="icon-statistics"></i><span>Statistik  Anggota</span></a></li>
		                </ul>
		              </li>
									<li><a href="../../RTL/default/index.html"><i class="icon-accessibility"></i> <span>My - Profile</span></a></li>
		              <!-- /main -->
		            </ul>
		          </div>
		        </div>
		        <!-- /main navigation -->

		      </div>
		    </div>
		<!-- /main sidebar -->
	@break

	@case('mentoring')
		<!-- Page container -->
		<div class="page-container">

			<!-- Page content -->
			<div class="page-content">

				<!-- Main sidebar -->
				<div class="sidebar sidebar-main">
					<div class="sidebar-content">

						<!-- User menu -->
						<div class="sidebar-user">
							<div class="category-content">
								<div class="media">
									<a href="#" class="media-left"><img src="<?=base_url('assets/images/placeholder.jpg')?>" class="img-circle img-sm" alt=""></a>
									<div class="media-body">
										<span class="media-heading text-semibold">{{$_nama}} </span>
										<div class="text-size-mini text-muted">
											<i class="icon-rating3 text-size-small"></i> &nbsp;{{strtoupper($_pos)}}
										</div>
									</div>

									<div class="media-right media-middle">
										<ul class="icons-list">
											<li>
												<a href="#"><i class="icon-cog3"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /user menu -->


						<!-- Main navigation -->
						<div class="sidebar-category sidebar-category-visible">
							<div class="category-content no-padding">
								<ul class="navigation navigation-main navigation-accordion">
									<!-- Main -->
									<li class="navigation-header"><span>Main Menu</span> <i class="icon-menu" title="Main pages"></i></li>
									<li><a href="<?=base_url('Superuser/index')?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
									<li><a href="changelog.html"><i class="icon-calendar"></i> <span>My - Activities </a>
										<ul>
											<li><a href="<?=base_url('Superuser/yaumiah')?>"><i class="icon-calendar"></i><span>Amalan Yaumiah</span></a></li>
											<li><a href="<?=base_url('Superuser/agenda_kegiatan')?>"><i class="icon-stack4"></i><span>Agenda Kegiatan</span></a></li>
											<li><a href="#"><i class="icon-quill4"></i><span>Kas Saya</span></a></li>
											<li><a href="#"><i class="icon-history"></i><span>History Saya</span></a></li>
										</ul>
									</li>
									<li><a href="../../RTL/default/index.html"><i class="icon-users4"></i> <span>My - Mentoring</span></a>
										<ul>
											<li><a href="#"><i class="icon-calendar"></i><span>Jadwal Mentoring</span></a></li>
											<li><a href="#"><i class="icon-book"></i><span>Silabus Mentoring</span></a></li>
											<li><a href="#"><i class="icon-tree7"></i><span>Kelas Mentoring</span></a></li>
										</ul>
									</li>
									<li><a href="../../RTL/default/index.html"><i class="icon-bookmark"></i> <span>My - Article</span></a>
										<ul>
											<li><a href="#"><i class="icon-clipboard"></i><span>Artikel Saya</span></a></li>
										</ul>
									</li>
									<li><a href="../../RTL/default/index.html"><i class="icon-accessibility"></i> <span>My - Profile</span></a></li>
									<!-- /main -->
								</ul>
							</div>
						</div>
						<!-- /main navigation -->

					</div>
				</div>
		<!-- /main sidebar -->
	@break

	@case('kaderisasi')
		<!-- Page container -->
		<div class="page-container">

			<!-- Page content -->
			<div class="page-content">

				<!-- Main sidebar -->
				<div class="sidebar sidebar-main">
					<div class="sidebar-content">

						<!-- User menu -->
						<div class="sidebar-user">
							<div class="category-content">
								<div class="media">
									<a href="#" class="media-left"><img src="<?=base_url('assets/images/placeholder.jpg')?>" class="img-circle img-sm" alt=""></a>
									<div class="media-body">
										<span class="media-heading text-semibold">{{$_nama}} </span>
										<div class="text-size-mini text-muted">
											<i class="icon-rating3 text-size-small"></i> &nbsp;{{strtoupper($_pos)}}
										</div>
									</div>

									<div class="media-right media-middle">
										<ul class="icons-list">
											<li>
												<a href="#"><i class="icon-cog3"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /user menu -->


						<!-- Main navigation -->
						<div class="sidebar-category sidebar-category-visible">
							<div class="category-content no-padding">
								<ul class="navigation navigation-main navigation-accordion">
									<!-- Main -->
									<li class="navigation-header"><span>Main Menu</span> <i class="icon-menu" title="Main pages"></i></li>
									<li><a href="<?=base_url('Superuser/index')?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
									<li><a href="changelog.html"><i class="icon-calendar"></i> <span>My - Activities </a>
										<ul>
											<li><a href="<?=base_url('Superuser/yaumiah')?>"><i class="icon-calendar"></i><span>Amalan Yaumiah</span></a></li>
											<li><a href="<?=base_url('Superuser/agenda_kegiatan')?>"><i class="icon-stack4"></i><span>Agenda Kegiatan</span></a></li>
											<li><a href="#"><i class="icon-quill4"></i><span>Kas Saya</span></a></li>
											<li><a href="#"><i class="icon-history"></i><span>History Saya</span></a></li>
										</ul>
									</li>
									<li><a href="../../RTL/default/index.html"><i class="icon-users4"></i> <span>My - Mentoring</span></a>
										<ul>
											<li><a href="#"><i class="icon-calendar"></i><span>Jadwal Mentoring</span></a></li>
											<li><a href="#"><i class="icon-book"></i><span>Silabus Mentoring</span></a></li>
											<li><a href="#"><i class="icon-tree7"></i><span>Kelas Mentoring</span></a></li>
										</ul>
									</li>
									<li><a href="../../RTL/default/index.html"><i class="icon-bookmark"></i> <span>My - Article</span></a>
										<ul>
											<li><a href="#"><i class="icon-clipboard"></i><span>Artikel Saya</span></a></li>
										</ul>
									</li>
									<li><a href="../../RTL/default/index.html"><i class="icon-people"></i> <span>My - Ukmki</span></a>
		                <ul>
		                  <li><a href="<?=base_url('Superuser/anggota')?>"><i class="icon-users"></i><span>Anggota Saya</span></a></li>
		                  <li><a href="#"><i class="icon-statistics"></i><span>Laporan  Anggota</span></a></li>
		                </ul>
		              </li>
									<li><a href="../../RTL/default/index.html"><i class="icon-accessibility"></i> <span>My - Profile</span></a></li>
									<!-- /main -->
								</ul>
							</div>
						</div>
						<!-- /main navigation -->

					</div>
				</div>
		<!-- /main sidebar -->
	@break

	@case('seketaris')
		<!-- Page container -->
		<div class="page-container">

			<!-- Page content -->
			<div class="page-content">

				<!-- Main sidebar -->
				<div class="sidebar sidebar-main">
					<div class="sidebar-content">

						<!-- User menu -->
						<div class="sidebar-user">
							<div class="category-content">
								<div class="media">
									<a href="#" class="media-left"><img src="<?=base_url('assets/images/placeholder.jpg')?>" class="img-circle img-sm" alt=""></a>
									<div class="media-body">
										<span class="media-heading text-semibold">{{$_nama}} </span>
										<div class="text-size-mini text-muted">
											<i class="icon-rating3 text-size-small"></i> &nbsp;{{strtoupper($_pos)}}
										</div>
									</div>

									<div class="media-right media-middle">
										<ul class="icons-list">
											<li>
												<a href="#"><i class="icon-cog3"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /user menu -->


						<!-- Main navigation -->
						<div class="sidebar-category sidebar-category-visible">
							<div class="category-content no-padding">
								<ul class="navigation navigation-main navigation-accordion">
									<!-- Main -->
									<li class="navigation-header"><span>Main Menu</span> <i class="icon-menu" title="Main pages"></i></li>
									<li><a href="<?=base_url('Superuser/index')?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
									<li><a href="changelog.html"><i class="icon-calendar"></i> <span>My - Activities </a>
										<ul>
											<li><a href="<?=base_url('Superuser/yaumiah')?>"><i class="icon-calendar"></i><span>Amalan Yaumiah</span></a></li>
											<li><a href="<?=base_url('Superuser/agenda_kegiatan')?>"><i class="icon-stack4"></i><span>Agenda Kegiatan</span></a></li>
											<li><a href="#"><i class="icon-quill4"></i><span>Kas Saya</span></a></li>
											<li><a href="#"><i class="icon-quill2"></i><span>Kas Anggota Ukmki</span></a></li>
											<li><a href="#"><i class="icon-history"></i><span>History Saya</span></a></li>
										</ul>
									</li>
									<li><a href="../../RTL/default/index.html"><i class="icon-users4"></i> <span>My - Mentoring</span></a>
										<ul>
											<li><a href="#"><i class="icon-calendar"></i><span>Jadwal Mentoring</span></a></li>
											<li><a href="#"><i class="icon-book"></i><span>Silabus Mentoring</span></a></li>
											<li><a href="#"><i class="icon-tree7"></i><span>Kelas Mentoring</span></a></li>
										</ul>
									</li>
									<li><a href="../../RTL/default/index.html"><i class="icon-bookmark"></i> <span>My - Article</span></a>
										<ul>
											<li><a href="#"><i class="icon-clipboard"></i><span>Artikel Saya</span></a></li>
										</ul>
									</li>
									<li><a href="../../RTL/default/index.html"><i class="icon-people"></i> <span>My - Ukmki</span></a>
		                <ul>
		                  <li><a href="<?=base_url('Superuser/anggota')?>"><i class="icon-users"></i><span>Anggota Saya</span></a></li>
		                  <li><a href="#"><i class="icon-basket"></i><span>Inventaris Ukmki</span></a></li>
		                </ul>
		              </li>
									<li><a href="../../RTL/default/index.html"><i class="icon-accessibility"></i> <span>My - Profile</span></a></li>
									<!-- /main -->
								</ul>
							</div>
						</div>
						<!-- /main navigation -->

					</div>
				</div>
		<!-- /main sidebar -->
	@break

	@case('bendahara')
		<!-- Page container -->
		<div class="page-container">

			<!-- Page content -->
			<div class="page-content">

				<!-- Main sidebar -->
				<div class="sidebar sidebar-main">
					<div class="sidebar-content">

						<!-- User menu -->
						<div class="sidebar-user">
							<div class="category-content">
								<div class="media">
									<a href="#" class="media-left"><img src="<?=base_url('assets/images/placeholder.jpg')?>" class="img-circle img-sm" alt=""></a>
									<div class="media-body">
										<span class="media-heading text-semibold">{{$_nama}} </span>
										<div class="text-size-mini text-muted">
											<i class="icon-rating3 text-size-small"></i> &nbsp;{{strtoupper($_pos)}}
										</div>
									</div>

									<div class="media-right media-middle">
										<ul class="icons-list">
											<li>
												<a href="#"><i class="icon-cog3"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /user menu -->


						<!-- Main navigation -->
						<div class="sidebar-category sidebar-category-visible">
							<div class="category-content no-padding">
								<ul class="navigation navigation-main navigation-accordion">
									<!-- Main -->
									<li class="navigation-header"><span>Main Menu</span> <i class="icon-menu" title="Main pages"></i></li>
									<li><a href="<?=base_url('Superuser/index')?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
									<li><a href="changelog.html"><i class="icon-calendar"></i> <span>My - Activities </a>
										<ul>
											<li><a href="<?=base_url('Superuser/yaumiah')?>"><i class="icon-calendar"></i><span>Amalan Yaumiah</span></a></li>
											<li><a href="<?=base_url('Superuser/agenda_kegiatan')?>"><i class="icon-stack4"></i><span>Agenda Kegiatan</span></a></li>
											<li><a href="#"><i class="icon-quill4"></i><span>Kas Saya</span></a></li>
											<li><a href="#"><i class="icon-history"></i><span>History Saya</span></a></li>
										</ul>
									</li>
									<li><a href="../../RTL/default/index.html"><i class="icon-users4"></i> <span>My - Mentoring</span></a>
										<ul>
											<li><a href="#"><i class="icon-calendar"></i><span>Jadwal Mentoring</span></a></li>
											<li><a href="#"><i class="icon-book"></i><span>Silabus Mentoring</span></a></li>
											<li><a href="#"><i class="icon-tree7"></i><span>Kelas Mentoring</span></a></li>
										</ul>
									</li>
									<li><a href="../../RTL/default/index.html"><i class="icon-bookmark"></i> <span>My - Article</span></a>
										<ul>
											<li><a href="#"><i class="icon-clipboard"></i><span>Artikel Saya</span></a></li>
										</ul>
									</li>
										<li><a href="../../RTL/default/index.html"><i class="icon-cash3"></i> <span>Ukmki - Kas</span></a></li>
									<li><a href="../../RTL/default/index.html"><i class="icon-accessibility"></i> <span>My - Profile</span></a></li>
									<!-- /main -->
								</ul>
							</div>
						</div>
						<!-- /main navigation -->

					</div>
				</div>
		<!-- /main sidebar -->
	@break

	@case('anggota')
		<!-- Page container -->
		<div class="page-container">

		  <!-- Page content -->
		  <div class="page-content">

		    <!-- Main sidebar -->
		    <div class="sidebar sidebar-main">
		      <div class="sidebar-content">

		        <!-- User menu -->
		        <div class="sidebar-user">
		          <div class="category-content">
		            <div class="media">
		              <a href="#" class="media-left"><img src="<?=base_url('assets/images/placeholder.jpg')?>" class="img-circle img-sm" alt=""></a>
		              <div class="media-body">
		                <span class="media-heading text-semibold">{{$_nama}} </span>
										<div class="text-size-mini text-muted">
											<i class="icon-rating2 text-size-small"></i> &nbsp;{{strtoupper($_pos)}}
										</div>
		              </div>

		              <div class="media-right media-middle">
		                <ul class="icons-list">
		                  <li>
		                    <a href="#"><i class="icon-cog3"></i></a>
		                  </li>
		                </ul>
		              </div>
		            </div>
		          </div>
		        </div>
		        <!-- /user menu -->


		        <!-- Main navigation -->
		        <div class="sidebar-category sidebar-category-visible">
		          <div class="category-content no-padding">
		            <ul class="navigation navigation-main navigation-accordion">
		              <!-- Main -->
		              <li class="navigation-header"><span>Main Menu</span> <i class="icon-menu" title="Main pages"></i></li>
		              <li><a href="<?=base_url('Superuser/index')?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
		              <li><a href="changelog.html"><i class="icon-calendar"></i> <span>My - Activities </a>
		                <ul>
		                  <li><a href="<?=base_url('Superuser/yaumiah')?>"><i class="icon-calendar"></i><span>Amalan Yaumiah</span></a></li>
		                  <li><a href="<?=base_url('Superuser/agenda_kegiatan')?>"><i class="icon-stack4"></i><span>Agenda Kegiatan</span></a></li>
		                  <li><a href="#"><i class="icon-quill4"></i><span>Kas Saya</span></a></li>
		                </ul>
		              </li>
		              <li><a href="../../RTL/default/index.html"><i class="icon-users4"></i> <span>My - Mentoring</span></a>
		                <ul>
		                  <li><a href="#"><i class="icon-calendar"></i><span>Jadwal Mentoring</span></a></li>
		                  <li><a href="#"><i class="icon-book"></i><span>Silabus Mentoring</span></a></li>
		                  <li><a href="#"><i class="icon-tree7"></i><span>Kelas Mentoring</span></a></li>
		                </ul>
		              </li>
		              <li><a href="../../RTL/default/index.html"><i class="icon-bookmark"></i> <span>My - Article</span></a>
		                <ul>
		                  <li><a href="#"><i class="icon-clipboard"></i><span>Artikel Saya</span></a></li>
		                </ul>
		              </li>
									<li><a href="../../RTL/default/index.html"><i class="icon-accessibility"></i> <span>My - Profile</span></a></li>
		              <!-- /main -->
		            </ul>
		          </div>
		        </div>
		        <!-- /main navigation -->

		      </div>
		    </div>
		<!-- /main sidebar -->
	@break

	@case('superuser')
		<!-- Page container -->
		<div class="page-container">

		  <!-- Page content -->
		  <div class="page-content">

		    <!-- Main sidebar -->
		    <div class="sidebar sidebar-main">
		      <div class="sidebar-content">

		        <!-- User menu -->
		        <div class="sidebar-user">
		          <div class="category-content">
		            <div class="media">
		              <a href="#" class="media-left"><img src="<?=base_url('assets/images/placeholder.jpg')?>" class="img-circle img-sm" alt=""></a>
		              <div class="media-body">
		                <span class="media-heading text-semibold">{{$_nama}} </span>
										<div class="text-size-mini text-muted">
											<i class="icon-hat text-size-small"></i> &nbsp;{{strtoupper($_pos)}}
										</div>
		              </div>

		              <div class="media-right media-middle">
		                <ul class="icons-list">
		                  <li>
		                    <a href="#"><i class="icon-cog3"></i></a>
		                  </li>
		                </ul>
		              </div>
		            </div>
		          </div>
		        </div>
		        <!-- /user menu -->


		        <!-- Main navigation -->
		        <div class="sidebar-category sidebar-category-visible">
		          <div class="category-content no-padding">
		            <ul class="navigation navigation-main navigation-accordion">
		              <!-- Main -->
		              <li class="navigation-header"><span>Main Menu</span> <i class="icon-menu" title="Main pages"></i></li>
		              <li><a href="<?=base_url('Superuser/index')?>"><i class="icon-home4"></i> <span>My panel</span></a></li>
		              <!-- /main -->
		            </ul>
		          </div>
		        </div>
		        <!-- /main navigation -->

		      </div>
		    </div>
		<!-- /main sidebar -->
	@break

@endswitch
<!--/main menu -->
