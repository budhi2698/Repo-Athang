<!DOCTYPE html>
<html>
	<!-- Basic Page Info -->
    <meta charset="utf-8" />
		<title> Admin Dashboard </title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="admins/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="admins/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/fullcalendar/fullcalendar.css"
		/>
		<link rel="stylesheet" type="text/css" href="admins/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
	

		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
							<i class="dw dw-search2 search-icon"></i>
							<input
								type="text"
								class="form-control search-input"
								placeholder="Search Here"
							/>
							<div class="dropdown">
								<a
									class="dropdown-toggle no-arrow"
									href="#"
									role="button"
									data-toggle="dropdown"
								>
									<i class="ion-arrow-down-c"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>From</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">To</label>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>Subject</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="text-right">
										<button class="btn btn-primary">Search</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="header-right">
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="javascript:;"
							data-toggle="right-sidebar"
						>
							<i class="dw dw-settings2"></i>
						</a>
					</div>
				</div>
				
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
						<span class="user-icon">
								<img src="tshering.jpg" alt="" />
							</span>
							<span class="user-name">Admin</span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
							<a class="dropdown-item" href="profile.html"
								><i class="dw dw-user1"></i> Profile</a
							>
							<a class="dropdown-item" href="profile.html"
								><i class="dw dw-settings2"></i> Setting</a
							>
							<a class="dropdown-item" href="faq.html"
								><i class="dw dw-help"></i> Help</a
							>
							<a class="dropdown-item" href="login.html"
								><i class="dw dw-logout"></i> Log Out</a
							>
						</div>
					</div>
				</div>
				<div class="github-link">
					<a href="https://github.com/dropways/deskapp" target="_blank"
						><img src="vendors/images/github.svg" alt=""
					/></a>
				</div>
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="index.html">
					<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
					<img
						src="vendors/images/deskapp-logo-white.svg"
						alt=""
						class="light-logo"
					/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext">Home</span>
							</a>
							<ul class="submenu">
							<li><a href="/admin">Admin</a></li>
								<li><a href="/trainers">Trainers</a></li>
								<li><a href="/students">Student</a></li>
							</ul>
						</li>
						
						<li>
							<a href="/calendar" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-calendar4-week"></span
								><span class="mtext">Calendar</span>
							</a>
						</li>
						<li>
							<a href="chat.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-chat-right-dots"></span
								><span class="mtext">Announcement</span>
							</a>
						</li>
						
						<li>
							<div class="dropdown-divider"></div>
						</li>
						<li>
							<div class="sidebar-small-cap">Extra</div>
						</li>
						<li>
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-file-pdf"></span
								><span class="mtext">Documentation</span>
							</a>
							<ul class="submenu">
								<li><a href="/introduction">Introduction</a></li>
								<li><a href="/getting">Getting Started</a></li>
								<li><a href="/color">Color Settings</a></li>
							
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Getting Started</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item">
											<a href="javascript:;">Documentation</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Getting Started
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-primary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										Menu
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="/introduction"
											>Introduction</a
										>
										<a class="dropdown-item active" href="/getting"
											>Getting Started</a
										>
										<a class="dropdown-item" href="/color"
											>Color Settings</a
										>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pd-20 card-box mb-30">
						<h4 class="h4 text-blue mb-10">Getting Started</h4>
						<div class="alert alert-primary" role="alert">
							Note: we recomonded you to please make your one own css file & one
							js files and add that in your page, so whenever the update of
							Severny admin comes it does not affect your code.
						</div>
						<div class="alert alert-danger" role="alert">
							If you are using css then no need to follow below steps. Just go
							to the index.html and open that file in to the browser for desire
							output.
						</div>
						<div class="alert alert-danger" role="alert">
							If you are using scss and package managing then we have
							compilation tool (gulp) for that please follow the below steps.
						</div>
						<div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item pt-20 pb-20">
									<h6 class="weight-400 d-flex">
										<i
											class="icon-copy dw dw-checked mr-2"
											data-color="#1b00ff"
										></i>
										Install Node.js From
										<a
											href="https://nodejs.org/en/download/"
											class="ml-2"
											target="_blank"
											data-color="#1b00ff"
											>https://nodejs.org/en/download/</a
										>
									</h6>
								</li>
								<li class="list-group-item pt-20 pb-20">
									<h6 class="weight-400 d-flex">
										<i
											class="icon-copy dw dw-checked mr-2"
											data-color="#1b00ff"
										></i>
										After that open command promt or any other terminal and go
										to Package Path.
									</h6>
								</li>
								<li class="list-group-item pt-20 pb-20">
									<h6 class="weight-400 d-flex">
										<i
											class="icon-copy dw dw-checked mr-2"
											data-color="#1b00ff"
										></i>
										Npm is a default package manager for the JavaScript runtime
										environment Node.js. If you've already then update once.
									</h6>
									<div
										class="bg-dark py-2 px-3 ml-md-4 mt-md-3 text-white rounded-lg shadow"
									>
										<p class="mb-0">npm install --global npm@latest</p>
									</div>
									<div class="ml-md-4 mt-md-3 alert alert-success p-0">
										<div class="bg-success mb-0 text-white py-2 px-3">
											<p class="mb-0">
												To check weather is node succesfully install or not.
											</p>
										</div>
										<div class="p-3">
											<p class="mb-0 weight-500">npm --version</p>
										</div>
									</div>
								</li>
								<li class="list-group-item pt-20 pb-20">
									<h6 class="weight-400 d-flex">
										<i
											class="icon-copy dw dw-checked mr-2"
											data-color="#1b00ff"
										></i>
										Gulp is a cross-platform, streaming task runner that lets
										developers automate many development tasks. To install gulp
										globally has inclue:
									</h6>
									<div
										class="bg-dark py-2 px-3 ml-md-4 mt-md-3 text-white rounded-lg shadow"
									>
										<p class="mb-0">npm install --global gulp-cli</p>
									</div>
									<div class="ml-md-4 mt-md-3 alert alert-success p-0">
										<div class="bg-success mb-0 text-white py-2 px-3">
											<p class="mb-0">
												If you have previously installed gulp then remove it.
											</p>
										</div>
										<div class="p-3">
											<p class="mb-0 weight-500">npm rm --global gulp</p>
										</div>
									</div>
									<div class="ml-md-4 mt-md-3 alert alert-success p-0">
										<div class="bg-success mb-0 text-white py-2 px-3">
											<p class="mb-0">
												To check weather is gulp succesfully install or not.
											</p>
										</div>
										<div class="p-3">
											<p class="mb-0 weight-500">gulp --version</p>
										</div>
									</div>
								</li>
								<li class="list-group-item pt-20 pb-20">
									<h6 class="weight-400 d-flex">
										<i
											class="icon-copy dw dw-checked mr-2"
											data-color="#1b00ff"
										></i>
										Below Command will execute all the assets(js,css) to the
										dist folder separately.
									</h6>
									<div
										class="bg-dark py-2 px-3 ml-md-4 mt-md-3 text-white rounded-lg shadow"
									>
										<p class="mb-0">gulp</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- welcome modal start -->
		<div class="welcome-modal">
			<button class="welcome-modal-close">
				<i class="bi bi-x-lg"></i>
			</button>
			<iframe
				class="w-100 border-0"
				src="https://embed.lottiefiles.com/animation/31548"
			></iframe>
			<div class="text-center">
				<h3 class="h5 weight-500 text-center mb-2">
					Open source
					<span role="img" aria-label="gratitude">❤️</span>
				</h3>
				<div class="pb-2">
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-star"
						data-size="large"
						data-show-count="true"
						aria-label="Star dropways/deskapp dashboard on GitHub"
						>Star</a
					>
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp/fork"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-repo-forked"
						data-size="large"
						data-show-count="true"
						aria-label="Fork dropways/deskapp dashboard on GitHub"
						>Fork</a
					>
				</div>
			</div>
			<div class="text-center mb-1">
				<div>
					<a
						href="https://github.com/dropways/deskapp"
						target="_blank"
						class="btn btn-light btn-block btn-sm"
					>
						<span class="text-danger weight-600">STAR US</span>
						<span class="weight-600">ON GITHUB</span>
						<i class="fa fa-github"></i>
					</a>
				</div>
				<script
					async
					defer="defer"
					src="https://buttons.github.io/buttons.js"
				></script>
			</div>
			<a
				href="https://github.com/dropways/deskapp"
				target="_blank"
				class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
			>
				DOWNLOAD
				<i class="fa fa-download"></i>
			</a>
			<p class="font-14 text-center mb-1 d-none d-md-block">
				Available in the following technologies:
			</p>
			<div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
				<i class="fa fa-html5"></i>
			</div>
		</div>
		<button class="welcome-modal-btn">
			<i class="fa fa-download"></i> Download
		</button>
		<!-- welcome modal end -->
		<!-- js -->
		<script src="scripts/core.js"></script>
		<script src="scripts/script.min.js"></script>
		<script src="scripts/process.js"></script>
		<script src="scripts/layout-settings.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
