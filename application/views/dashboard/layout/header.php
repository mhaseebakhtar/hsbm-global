<div class="app-header header-shadow <?= !empty($colorSettings['header-class']) ? $colorSettings['header-class'] : '' ?>">
	<div class="app-header__logo">
		<a class="font-weight-bold text-dark" href="<?= base_url('admin') ?>">
			HSBM Global
		</a>
		<div class="header__pane ml-auto">
			<div>
				<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
		</div>
	</div>
	<div class="app-header__mobile-menu">
		<div>
			<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
		</div>
	</div>
	<div class="app-header__menu">
		<span>
			<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
				<span class="btn-icon-wrapper">
					<i class="fa fa-ellipsis-v fa-w-6"></i>
				</span>
			</button>
		</span>
	</div>

	<div class="app-header__content">
		<div class="app-header-right">
			<div class="header-btn-lg pr-0">
				<div class="widget-content p-0">
					<div class="widget-content-wrapper">
						<div class="widget-content-left  ml-3 header-user-info">
							<div class="widget-heading d-flex align-items-center">
								<div class="avatar-ico mr-2"></div>

								<?= $user->name ?>
							</div>
						</div>

						<div class="widget-content-left">
							<div class="btn-group header-dropdown">
								<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
									<i class="fa fa-angle-down ml-2 opacity-8"></i>
								</a>

								<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
									<a href="<?= base_url('admin/account'); ?>" type="button" tabindex="0" class="dropdown-item">
										<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
										Account
									</a>

									<form class="accordion" id="accordionSettings">
										<div>
											<a class="dropdown-item collapsed" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapseSettings">
												<i class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i>
												Settings
											</a>

											<div id="collapseSettings" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSettings">
												<div class="collapse-inner">
													<a href="<?= base_url('admin/global-settings'); ?>" type="button" tabindex="0" class="dropdown-item">Global Settings</a>
													<a href="<?= base_url('admin/mail-settings'); ?>" type="button" tabindex="0" class="dropdown-item">Mail Settings</a>
												</div>
											</div>
										</div>
									</form>

									<div tabindex="-1" class="dropdown-divider"></div>
									<a href="<?= base_url('admin/logout'); ?>" type="button" tabindex="0" class="dropdown-item">
										<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
										Logout
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
