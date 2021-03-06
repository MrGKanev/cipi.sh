<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Cipi Cloud Control Panel | Documentation</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cipi Open Source Control Panel for your Cloud Documentation">
	<meta name="author" content="Andrea Pollastri">
	<link rel="icon" href="https://cipi.sh/assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
	<style>
	.minispace {
		min-height:5px;
	}
	.space {
		min-height:25px;
	}
	</style>
</head> 

<body class="docs-page">    
    <header class="header fixed-top">	    
        <div class="branding docs-branding">
            <div class="container-fluid position-relative py-2">
                <div class="docs-logo-wrapper">
					<button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible mr-2 d-xl-none" type="button">
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                </button>
	                <div class="site-logo"><a class="navbar-brand" href="https://cipi.sh"><img class="logo-icon mr-2" src="https://cipi.sh/home/assets/images/logo.png" alt="logo"><span class="logo-text">D<span class="text-alt">ocs</span></span></a></div>    
                </div>
	            <div class="docs-top-utilities d-flex justify-content-end align-items-center">
					<ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
						<li class="list-inline-item"><a target="_blank" href="https://github.com/andreapollastri/cipi"><i class="fab fa-github fa-fw"></i></a></li>
			            <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/cipipanel"><i class="fab fa-facebook fa-fw"></i></a></li>
		            </ul>
		            <a href="https://github.com/andreapollastri/cipi" class="btn btn-primary d-none d-lg-flex" target="_blank">Repository</a>
	            </div>
            </div>
        </div>
    </header>
    
    <div class="docs-wrapper">
	    <div id="docs-sidebar" class="docs-sidebar">
		    <div class="top-search-box d-lg-none p-3">
                <form class="search-form">
		            <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
		            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
		        </form>
            </div>
		    <nav id="docs-nav" class="docs-nav navbar">
			    <ul class="section-items list-unstyled nav flex-column pb-3">
				    <li class="nav-item section-title"><a class="nav-link scrollto active" href="#section-1"><span class="theme-icon-holder mr-2"><i class="fas fa-play-circle"></i></span>Getting Started</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">Features</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">Installation</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-1-3">Security Tips</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-2"><span class="theme-icon-holder mr-2"><i class="fas fa-tachometer-alt"></i></span>Dashboard</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-3"><span class="theme-icon-holder mr-2"><i class="fas fa-server"></i></span>Servers</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-1">Deploy a server</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-2">Reset main user</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-3-3">Restart services</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-3-4">Destroy a server</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-4"><span class="theme-icon-holder mr-2"><i class="fas fa-rocket"></i></span>Applications</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-1">Create an application</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-4-2">Get a SSL certificate</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-4-3">Customize nginx</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-4-4">Connect a GIT</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-4-5">Redis configuration</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-4-6">Supervisor</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-4-7">Cron Jobs</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-4-8">Local backups</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-4-9">s3 backups</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-4-10">Destroy an application</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-5"><span class="theme-icon-holder mr-2"><i class="fas fa-globe"></i></span>Aliases</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-1">Create an alias</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-2">Get a SSL certificate</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-3">Destroy an alias</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-6"><span class="theme-icon-holder mr-2"><i class="fas fa-users"></i></span>Users</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-7"><span class="theme-icon-holder mr-2"><i class="fas fa-database"></i></span>Databases</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-8"><span class="theme-icon-holder mr-2"><i class="fas fa-cog"></i></span>Settings</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-1">Manage account</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-2">SMTP Setup</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-8-3">Migrations</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-8-4">API Key</a></li>
					<li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-9"><span class="theme-icon-holder mr-2"><i class="fas fa-code"></i></span>API Guide</a></li>
					<li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-10"><span class="theme-icon-holder mr-2"><i class="far fa-life-ring"></i></span>Support</a></li>
					<li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-11"><span class="theme-icon-holder mr-2"><i class="fas fa-code"></i></span>Credits</a></li>
			    </ul>

		    </nav>
	    </div>
	    <div class="docs-content">
		    <div class="container">
			    <article class="docs-article" id="section-1">
				    <header class="docs-header">
					    <h1 class="docs-heading">Getting Started <span class="docs-time">Last updated: 2020-05-13</span></h1>
					    <section class="docs-intro">
						    <p>Cipi is a Laravel based cloud server control panel that supports Digital Ocean, AWS, Vultr, Google Cloud, Linode, Azure and other VPS. It comes with nginx, Mysql, multi PHP-FPM versions, multi users, Supervisor, Composer, npm, free Let's Encrypt certificates, Git deployment, backups, postfix, phpmyadmin, fail2ban, Redis, API, data migration and with a simple graphical interface useful to manage Laravel, Codeigniter, Symphony, WordPress or other PHP applications. With Cipi you don’t need to be a Sys Admin to deploy and manage websites and PHP applications powered by cloud VPS.</p>
						</section>
				    </header>
				    <section class="docs-section" id="item-1-1">
						<h2 class="section-heading">Features</h2>
						<p>
							<ul>
								<li>Easy install: setup one or more servers with a click in less than ten minutes without be a Linux expert.</li>
								<li>Server Management: manage one or more servers in as easy as a few clicks without be a LEMP Guru.</li>	
								<li>Perfect stack for PHP devs: Cipi comes with nginx, PHP, MySql, Composer, npm, Redis and Supervisor.</li>
								<li>Multi-PHP: Run simultaneous PHP versions at your ease & convenience.</li>
								<li>Secure: no unsed open ports, unprivileged PHP, isolated system users and filesystem, only SFTP (no insecure FTP), http/2, Free SSL certificates everywhere.</li>
								<li>Always update: Cipi takes care about your business and automatically keeps your server's software up to date so you always have the latest security patches.</li>
								<li>Real-time servers stats: Keep an eye on everything through an awesome dashboard.</li>
								<li>Always up to date: Cipi installs last versions of LTS dists and supports Ubuntu 20.04 LTS.</li>
							</ul>
						</p>
						<div class="space"></div>
						<h5>Cipi Stack</h5>
						<div class="table-responsive my-4">
							<table class="table table-striped">
								<thead>
									<tr>
										<th style="width:40%" scope="col"></th>
										<th style="width:30%" scope="col" class="text-center">Ubuntu 18.04 LTS</th>
										<th style="width:30%" scope="col" class="text-center">Ubuntu 20.04 LTS</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th style="width:40%" scope="row">nginx</th>
										<td class="text-center">1.14</td>
										<td class="text-center">1.17</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">MySql</th>
										<td class="text-center">5.7</td>
										<td class="text-center">8</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">node.js</th>
										<td class="text-center">12</td>
										<td class="text-center">14</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">npm</th>
										<td class="text-center">6</td>
										<td class="text-center">6</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">PHP-FPM</th>
										<td class="text-center">7.2 / 7.3 / 7.4</td>
										<td class="text-center">7.2 / 7.3 / 7.4</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">PHP CLI</th>
										<td class="text-center">7.4</td>
										<td class="text-center">7.4</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">PHP .ini custom configutation<br>
											max_filesize / execution_time</th>
										<td class="text-center">256MB / 180</td>
										<td class="text-center">256MB / 180</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">PHP-FPM pool (for each application)<br>
											pm.max_children / pm.max_requests</th>
										<td class="text-center">50 / 500</td>
										<td class="text-center">50 / 500</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">OPCache, PDO, BCMath, Ctype, Fileinfo, JSON, Mbstring, OpenSSL, Tokenizer, XML, PHP Redis, ImageMagick, Zip, Common</th>
										<td class="text-center">yes</td>
										<td class="text-center">yes</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">Redis</th>
										<td class="text-center">yes</td>
										<td class="text-center">yes</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">Composer</th>
										<td class="text-center">yes</td>
										<td class="text-center">yes</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">Supervisor</th>
										<td class="text-center">yes</td>
										<td class="text-center">yes</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">Git</th>
										<td class="text-center">yes</td>
										<td class="text-center">yes</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">Let's Encrypt</th>
										<td class="text-center">yes</td>
										<td class="text-center">yes</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">http/2 Support</th>
										<td class="text-center">yes</td>
										<td class="text-center">yes</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">phpmyadmin</th>
										<td class="text-center">yes</td>
										<td class="text-center">yes</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">fail2ban</th>
										<td class="text-center">yes</td>
										<td class="text-center">yes</td>
									</tr>
									<tr>
										<th style="width:40%" scope="row">SSH/SFTP</th>
										<td class="text-center">yes</td>
										<td class="text-center">yes</td>
									</tr>
								</tbody>
							</table>
						</div>


					</section>
					
					<section class="docs-section" id="item-1-2">
						<h2 class="section-heading">Installation</h2>
						<p>There are two suggested ways to install Cipi:
							<ul>
								<li>Via Autoinstall Script as a standalone Control Panel on a VPS</li>
								<li>Via Composer as a simple Laravel project into any shared/not shared hosting</li>
							</ul>	
						</p>
						<div class="space"></div>
						<h5>Via Autoinstall Script (Standalone)</h5>
						<div class="minispace"></div>
						<p>The best way to install Cipi is running this autoinstall script on a VPS with Ubuntu 18.04 LTS or 20.04 LTS (fresh installation):
							<div class="minispace"></div>
							<code>wget -O - https://cipi.sh/go.sh | bash</code>
							<div class="space"></div>
							At the end of installation process, Cipi will show some password that you have to conserve.
							<div class="minispace"></div>
							Before you can install Cipi, please make sure your server fulfils these requirements:
							<ul>
								<li>Ubuntu 18.04 or 20.04 x86_64 LTS (Fresh installation)</li>
								<li>If the server is virtual (VPS), OpenVZ may not be supported (Kernel 2.6)</li>
								<li>Hardware Requirement: More than 1GB of HDD / At least 1 core processor / 512MB minimum RAM / At least 1 public IP Address (NAT VPS is not supported) / External firewall / For VPS providers such as AWS, those providers already include an external firewall for your VPS. Please open port 22, 80 and 443 to install Cipi.</li>
								<li>Installation may take up to about ten minutes which may also depend on your server's internet speed. After the installation is completed, you are ready to use Cipi to manage your servers.</li>
								<li>To correctly manage remote servers Cipi has to be on a public IP address... do not use it in localhost!</li>
							</ul>
							<div class="minispace"></div>
							AWS by default disables root login. To login as root inside AWS, login as default user and then use command sudo -s.
							<ul>
								<li><code>$ ssh ubuntu@&lt;your server IP address&gt;</code></li>
								<li><code>$ ubuntu@aws:~$ sudo -s</code></li>
								<li><code>$ root@aws:~# wget -O - https://cipi.sh/go.sh | bash	</code></li>
							</ul>
						</p>
						<div class="space"></div>
						<h5>Via Composer (Laravel Project)</h5>
						<div class="minispace"></div>
						<p>Cipi is a Laravel based project so you can install it in any virtualhost (shared or not shared) using Composer:
							<div class="minispace"></div>
							<ul>
								<li>Run <code>composer create-project andreapollastri/cipi &lt;your-folder&gt;</code></li>
								<li>Copy <i>.env.example</i> file in <i>.env</i> and compile your DB and URL data</li>
								<li>Run <code>php artisan key:generate</code></li>
								<li>Run <code>php artisan config:cache</code></li>
								<li>Run <code>php artisan view:cache</code></li>
								<li>Run <code>php artisan migrate --seed</code></li>
							</ul>
							<div class="callout-block callout-block-info">
								<div class="content">
									<h4 class="callout-title">
										<span class="callout-icon-holder mr-1">
											<i class="fas fa-info-circle"></i>
										</span>
										Note
									</h4>
									<p>Cipi has to be online to work remotely with its clients servers.</p>
								</div>
							</div>
						</p>
					</section>
					
					<section class="docs-section" id="item-1-3">
						<h2 class="section-heading">Security Tips</h2>
						<p>Default Cipi username and password are: <i>admin@admin.com</i> / <i>12345678</i>.<br>
						After first login, you could change them into "settings" area.
						<div class="minispace"></div>
						Into Settings Area is possible setup an STMP account useful to receive passoword recovery mails too. 
						<div class="space"></div>
						Another useful tip to keep safe your Cipi Panel, is to let it works under an SSL protocol. 
						<div class="minispace"></div>
						If you installed Cipi via Autoinstall script you can obtain a free SSL certificate following these steps:
						<div class="minispace"></div>
						<ul>
							<li>Configure a domain/subdomain A DNS record to your Cipi VPS IP</li>
							<li>Login as suder user into Cipi VPS (<i>cipi</i> default user)</li>
							<li>Run <code>sudo nano /etc/nginx/sites-enabled/default</code></li>
							<li>Add <code>server_name &lt;your-domain/subdomain&gt;</code> directive into "<i>server</i>" group</li>
							<li>Run <code>sudo systemctl restart nginx.service</code></li>
							<li>Run <code>sudo certbot --nginx -d &lt;your-domain/subdomain&gt; --non-interactive --agree-tos --register-unsafely-without-email</code></li>
							<li>Run <code>sudo systemctl restart nginx.service</code></li>
							<li>Run <code>sudo nano /var/www/html/.env</code></li>
							<li>Change <i>APP_URL=</i> variable content with your <i>https://your-domain/subdomain</i></li>
							<li>Run <code>cd /var/www/html/</code></li>
							<li>Run <code>php artisan config:cache</code></li>
						</ul>
					</p>
					</section>
				</article>




				<article class="docs-article" id="section-2">
				    <header class="docs-header">
					    <h1 class="docs-heading">Dashboard</h1>
					    <section class="docs-intro">
						    <p>
								Cipi Dashboard is for viewing your installed servers status. The summary page will display in real-time:
								<ul>
									<li>Server Name</li>
									<li>Server Apps number</li>
									<li>Server CPU usage (in %)</li>
									<li>Server RAM usage (in %)</li>
									<li>Server HDD usage (in %)</li>
									<li>Server Ping (On-line / Not on-line)</li>
								</ul>
							</p>
						</section>
				    </header>
				</article>
				




				<article class="docs-article" id="section-3">
				    <header class="docs-header">
					    <h1 class="docs-heading">Servers</h1>
					    <section class="docs-intro">
						    <p>
								Servers area is for viewing your servers list, manage their "cipi" user password, create new server or delete one of them.<br>
								The page will display:
								<ul>
									<li>Server Name</li>
									<li>Server IP</li>
									<li>Server Provider</li>
									<li>Server Location</li>
									<li>Server Action (Reset cipi user and Destroy server)</li>
								</ul>
								<div class="minispace"></div>
								You can rename any server name or change any server IP clicking on edit icons: <i class="far fa-edit"></i>;
							</p>
						</section>
				    </header>
				     <section class="docs-section" id="item-3-1">
						<h2 class="section-heading">Deploy Server</h2>
						<p>
							To deploy a server, click on button:<span style="margin-right: 8px;"></span><a href="#" class="btn btn-sm btn-secondary" style="padding: 5px;"><i class="fas fa-plus fa-sm text-white-50"></i> CREATE NEW</a>
							<span style="margin-right: 8px;"></span>and fill the form with these data:
							<div class="table-responsive my-4">
								<table class="table table-bordered">
									<tbody>
										<tr>
											<th class="theme-bg-light"><a class="theme-link" href="#">Name</a></th>
											<td>The name of Server (e.g. "Production Server") </td>
										</tr>
										<tr>
											<th class="theme-bg-light"><a class="theme-link" href="#">IP</a></th>
											<td>The IP of the Server (IPv4 not IPv6) </td>
										</tr>
										
										<tr>
											<th class="theme-bg-light"><a class="theme-link" href="#">Provider</a></th>
											<td>Server Provider (e.g. "Digital Ocean")</td>
										</tr>
										
										<tr>
											<th class="theme-bg-light"><a class="theme-link" href="#">Location</a></th>
											<td>Server location (e.g. "Amsterdam DC3") </td>
										</tr>
									</tbody>
								</table>
							</div>
							Submiting the form, a new server will appears into servers list through a button as this: <span style="margin-right: 8px;"></span><a href="#" class="btn btn-sm btn-danger" style="padding: 5px;">"Server Name" has to be installed</a>.<br>
							Click the "red button" and follow the procedure that will appears into a modal window:
							<div class="space"></div>
							<img src="img/deploy.png" class="w-100">
							<div class="space"></div>
							At the end of installation process, Cipi will show some password that you have to conserve.<br>
							Server is now ready to be used into Cipi Cloud Control Panel.
						</p>
					</section>
					
					<section class="docs-section" id="item-3-2">
						<h2 class="section-heading">Reset main user</h2>
						<p>
							For security reasons, Cipi disables "root" SSH access but generate a new "cipi" sudo main user into your server to let you to login into it and to grant root access using "sudo su" or "sudo -s" (in AWS) commands.<br>
							To reset "cipi" user password, click on the key icon: <i class="fas fa-key" style="color:gray;"></i> of the desidered server and confirm reset action.
						</p>
					</section>
					
					<section class="docs-section" id="item-3-3">
						<h2 class="section-heading">Restart Services</h2>
						<p>
							With "Servers" list you can click on a specific server name and enter into its applications list.<br>
							At the end of this page you can find five buttons useful, if you need, to restart services:
							<ul>
								<li>nginx</li>
								<li>PHP</li>
								<li>MySql</li>
								<li>Redis</li>
								<li>Supervisor</li>
							</ul>
						</p>
					</section>

					<section class="docs-section" id="item-3-4">
						<h2 class="section-heading">Destroy a server</h2>
						<p>To destroy a server you have just to click the trash icon: <i class="fas fa-trash" style="color:gray;"></i> of the desidered server and confirm destroy action.</p>
					</section>

				</article>
			



				<article class="docs-article" id="section-4">

				    <header class="docs-header">
					    <h1 class="docs-heading">Applications</h1>
					    <section class="docs-intro">
						    <p>
								An application is your website/webapp consisting of files that will be used for functionality and display purposes.<br>
								With Cipi, every Application is separated from each other because each app contains its own settings, database, permissions and PHP-FPM pool. This method allows to each user to be secure and protected in its own right. If one of your websites is compromised, the others would be completely safe.
								<div class="minispace"></div>
								Applications area is for viewing your applications list, require SSL certificates on main app domain, create new Application or delete one of them. The page will display:
								<div class="minispace"></div>
								<ul>
									<li>Application (main) Domain</li>
									<li>Application Server</li>
									<li>Application User</li>
									<li>Application (document root) Path</li>
									<li>Application PHP Version</li>
									<li>Application Aliases Number</li>
									<li>Application Action (Domain SSL and Destroy Application)</li>
								</ul>
								<div class="minispace"></div>
							</p>
						</section>
					</header>
					
				     <section class="docs-section" id="item-4-1">
						<h2 class="section-heading">Create an application</h2>
						<p>
							To create an application, click on button:<span style="margin-right: 8px;"></span><a href="#" class="btn btn-sm btn-secondary" style="padding: 5px;"><i class="fas fa-plus fa-sm text-white-50"></i> NEW APPLICATION</a><span style="margin-right: 8px;"></span>and fill the form with these data:
							<div class="table-responsive my-4">
								<table class="table table-bordered">
									<tbody>
										<tr>
											<th class="theme-bg-light"><a class="theme-link" href="#">Domain</a></th>
											<td>The main application domain (e.g. <i>domain.ltd</i> or <i>subdomain.domain.ltd</i>) </td>
										</tr>
										<tr>
											<th class="theme-bg-light"><a class="theme-link" href="#">Server</a></th>
											<td>Destination Server </td>
										</tr>
										
										<tr>
											<th class="theme-bg-light"><a class="theme-link" href="#">Basepath</a></th>
											<td>Entrypoint of Document Root (e.g. "public" in Laravel Applications)</td>
										</tr>
										
										<tr>
											<th class="theme-bg-light"><a class="theme-link" href="#">PHP</a></th>
											<td>PHP Version (7.2, 7.3 or 7.4) </td>
										</tr>
									</tbody>
								</table>
							</div>
							At the end you will receive a summary with SFTP/SSH and database credentials useful to manage your new Application.
						</p>
					</section>
					
					<section class="docs-section" id="item-4-2">
						<h2 class="section-heading">Get an SSL Certificate</h2>
						<p>
							In Applications list you can require a main domain SSL free certificate just clicking on lock icon: <i class="fas fa-lock" style="color:gray;"></i> of desidered application and waiting for a "green check" response. Before require a certificate, double check that the domain / subdomain DNS are setted on application server IP and that there is not any proxy in the middle (such as Cloudflare proxy for e.g. because of Let's Encrypt requires DNS validation). You can use Cloudflare or other proxy after Let's Encrypt DNS validation or you can directly use SSL certificate provided by WAF/CDN service (such as Cloudflare cert).
						</p>
					</section>
					
					<section class="docs-section" id="item-4-3">
						<h2 class="section-heading">Customize nginx</h2>
						<p>
							You can customize every Application nginx configuration:
							<ul>
								<li>Run <code>ssh root@&lt;server-ip&gt;</code></li>
								<li>Run <code>sudo nano /etc/nginx/cipi/&lt;app-user&gt;.conf</code></li>
								<li>Edit your custom configuration</li>
								<li>Run <code>sudo systemctl restart nginx.service</code></li>
							</ul>
						</p>
					</section>

					<section class="docs-section" id="item-4-4">
						<h2 class="section-heading">Connect a GIT</h2>
						<p>
							With Cipi connect a private or public Github repository to your account is very easy!
							<li>Run <code>ssh &lt;app-user&gt;@&lt;server-ip&gt;</code></li>
							<li>Run <code>rm -rf /home/&lt;app-user&gt;/web</code> (all application web contents will be delete)</li>
							<li>Copy <i>/home/&lt;app-user&gt;/git/deploy.pub</i> into <a class="theme-link" href="https://github.com/settings/keys" target="_blank">Github SSH Keys</a></li>
							<li>Run <code>nano /home/&lt;app-user&gt;/git/deploy.sh</code></li>
							<li>Edit your Git repository name, branch and optional post deploy scripts</li>
							<li>Run <code>sh /home/&lt;app-user&gt;/git/deploy.sh</code> to deploy Git on your server</li>
							<li>You can create a PHP webhook (git ignored) into your /web folder with command with exec commant to deploy.sh</li>
						</p>
					</section>


					<section class="docs-section" id="item-4-5">
						<h2 class="section-heading">Redis Configuration</h2>
						<p>
							Redis is available in every Applications using:
							<div class="table-responsive my-4">
								<table class="table table-bordered">
									<tbody>
										<tr>
											<th class="theme-bg-light"><a class="theme-link" href="#">Host</a></th>
											<td>127.0.0.1</td>
										</tr>
										<tr>
											<th class="theme-bg-light"><a class="theme-link" href="#">Port</a></th>
											<td>6379 </td>
										</tr>
										
										<tr>
											<th class="theme-bg-light"><a class="theme-link" href="#">Auth</a></th>
											<td><i>No password</i></td>
										</tr>
									</tbody>
								</table>
							</div>
						</p>
					</section>


					<section class="docs-section" id="item-4-6">
						<h2 class="section-heading">Supervisor</h2>
						<p>
							To manage Supervisor configuration:
							<ul>
								<li>Run <code>ssh root@&lt;server-ip&gt;</code></li>
								<li>Run <code>sudo nano /etc/supervisor/supervisord.conf</code></li>
								<li>Edit your custom configuration</li>
								<li>Run <code>sudo service supervisor restart</code></li>
							</ul>
						</p>
					</section>

					<section class="docs-section" id="item-4-7">
						<h2 class="section-heading">Cron Jobs</h2>
						<p>
							You can manage cron job SSHing into your server:
							<ul>
								<li>Run <code>ssh &lt;app-user&gt;@&lt;server-ip&gt;</code></li>
								<li>Run <code>crontab -e</code></li>
								<li>Edit your crons</li>
							</ul>
							Take care that you application is running into <i>/home/&lt;app-user&gt;/web</i> directory.
						</p>
					</section>

					<section class="docs-section" id="item-4-8">
						<h2 class="section-heading">Local backups</h2>
						<p>
							With Cipi you can quickly backup your application file system and database:
							<li>Run <code>ssh &lt;app-user&gt;@&lt;server-ip&gt;</code></li>
							<li>Run <code>nano /home/&lt;app-user&gt;/bks/db.sh</code></li>
							<li>Edit your database informations and set backup retain days</li>
							<li>Run <code>nano /home/&lt;app-user&gt;/bks/fs.sh</code></li>
							<li>Set backup retain days</li>
							<li>Run <code>sh /home/&lt;app-user&gt;/bks/db.sh</code> to dump your Application database</li>
							<li>Run <code>sh /home/&lt;app-user&gt;/bks/fs.sh</code> to backup your <i>web</i> directory</li>
							<li>Backups are avalable into /bks subdirs. You can use a cron to automate backups</li>
						</p>
					</section>

					<section class="docs-section" id="item-4-9">
						<h2 class="section-heading">s3 backups</h2>
						<p>This function will coming soon...</p>
					</section>

					<section class="docs-section" id="item-4-10">
						<h2 class="section-heading">Destroy an application</h2>
						<p>To destroy an application you have just to click the trash icon: <i class="fas fa-trash" style="color:gray;"></i> of the desidered application and confirm destroy action.</p>
					</section>  

			    </article>
				





				<article class="docs-article" id="section-5">
				    <header class="docs-header">
					    <h1 class="docs-heading">Aliases</h1>
					    <section class="docs-intro">
						    <p>
								With Cipi you can manage Applications domains alises (such as www.domain.ltd as alias of domain.ltd). This function is useful for multitenant applications too (e.g. it.domain.ltd, en.domain.ltd or user1.domain.ltd, user2.domain.ltd).
								<div class="minispace"></div>
								Alias area is for viewing your aliases list, require SSL certificates on alias domain, create new Alias or delete one of them. The page will display:
								<div class="minispace"></div>
								<ul>
									<li>Alias Domain</li>
									<li>Application (main) Domain</li>
									<li>Application Server</li>
									<li>Application User</li>
									<li>Alias Action (Domain SSL and Destroy Alias)</li>
								</ul>
								<div class="minispace"></div>
							</p>
						</section>
				    </header>
				     <section class="docs-section" id="item-5-1">
						<h2 class="section-heading">Create an alias</h2>
						<p>
							To create an alias, click on button:<span style="margin-right: 8px;"></span><a href="#" class="btn btn-sm btn-secondary" style="padding: 5px;"><i class="fas fa-plus fa-sm text-white-50"></i> NEW ALIAS</a><span style="margin-right: 8px;"></span>and fill the form with these data:
							<div class="table-responsive my-4">
								<table class="table table-bordered">
									<tbody>
										<tr>
											<th class="theme-bg-light"><a class="theme-link" href="#">Domain</a></th>
											<td>e.g. <i>www.domain.ltd</i> </td>
										</tr>
										<tr>
											<th class="theme-bg-light"><a class="theme-link" href="#">Application</a></th>
											<td>Choose Application to connect</td>
										</tr>
									</tbody>
								</table>
							</div>
						</p>
					</section>
					
					<section class="docs-section" id="item-5-2">
						<h2 class="section-heading">Get an SSL Certificate</h2>
						<p>
							In Alises list you can require a domain SSL free certificate just clicking on lock icon: <i class="fas fa-lock" style="color:gray;"></i> of desidered alias and waiting for a "green check" response. Before require a certificate, double check that the domain / subdomain DNS are setted on application server IP and that there is not any proxy in the middle (such as Cloudflare proxy for e.g. because of Let's Encrypt requires DNS validation). You can use Cloudflare or other proxy after Let's Encrypt DNS validation or you can directly use SSL certificate provided by WAF/CDN service (such as Cloudflare cert). No worry to work with Cipi proxed by Cloudflare!
						</p>
					</section>
					
					<section class="docs-section" id="item-5-3">
						<h2 class="section-heading">Destroy an alias</h2>
						<p>To destroy an alias you have just to click the trash icon: <i class="fas fa-trash" style="color:gray;"></i> of the desidered alias and confirm destroy action.</p>
					</section>  
			    </article>





				<article class="docs-article" id="section-6">
				    <header class="docs-header">
					    <h1 class="docs-heading">Users</h1>
					    <section class="docs-intro">
						    <p>
								Users area shows a list of Applications Users with their basic information and the reset user password button (key icon: <i class="fas fa-key" style="color:gray;"></i>).
							</p>
						</section>
				    </header>
			    </article>





				<article class="docs-article" id="section-7">
				    <header class="docs-header">
					    <h1 class="docs-heading">Databases</h1>
					    <section class="docs-intro">
						    <p>
								Databases area shows a list of Applications Dbs with their basic information, the reset db user password button (key icon: <i class="fas fa-key" style="color:gray;"></i>) and the phpmyadmin link button (table icon: <i class="fas fa-table" style="color:gray;"></i>).
							</p>
						</section>
				    </header>
			    </article>
			    
	
			    
			    
			    <article class="docs-article" id="section-8">
				    <header class="docs-header">
					    <h1 class="docs-heading">Settings</h1>
				    </header>
				     <section class="docs-section" id="item-8-1">
						<h2 class="section-heading">Manage accout</h2>
						<p>Into settings area you can update your login information (username and password).</p>
					</section>
					
					<section class="docs-section" id="item-8-2">
						<h2 class="section-heading">SMTP Setup</h2>
						<p>Into settings area you can set a SMTP configuration useful to active "password recovery" function and other future Cipi implementations (such as Servers Monitor Alerts).</p>
					</section>
					
					<section class="docs-section" id="item-8-3">
						<h2 class="section-heading">Migrations</h2>
						<p>
							With Cipi Import / Export function you can move your servers data from a Cipi installation to another with a simple click!<br>
							This feature is active since Cipi v2.4.7 and let you to update Cipi core without losing/reconfig anything.
						</p>
					</section>

					<section class="docs-section" id="item-8-4">
						<h2 class="section-heading">API Key</h2>
						<p>
							Cipi API are not ready yet. :/ 
						</p>
				</section>
			    </article>
			    
			    
			    <article class="docs-article" id="section-9">
				    <header class="docs-header">
					    <h1 class="docs-heading">API Guide</h1>
					    <section class="docs-intro">
						    <p>
								Cipi API are not ready yet. :/ 
							</p>
						</section>
				    </header>
			    </article>
				

				<article class="docs-article" id="section-10">
				    <header class="docs-header">
					    <h1 class="docs-heading">Support</h1>
					    <section class="docs-intro">
						    <p>
								Cipi is an open-source software licensed under the MIT license and developed by <a target="_blank" class="theme-link"  href="https://andreapollastri.dev"><u>Andrea Pollastri</u></a>.<br>
								You can follow Cipi Project RoadMap <a target="_blank" class="theme-link"  href="https://github.com/andreapollastri/cipi/projects"><u>here</u></a>. If you have any issue with Cipi, please open an <a target="_blank" class="theme-link"  href="https://github.com/andreapollastri/cipi/issues"><u>issue on Github</u></a>.<br>
								If you discover a security vulnerability within Cipi, please open an <a target="_blank" class="theme-link"  href="https://github.com/andreapollastri/cipi/issues"><u>issue on Github</u></a> or send an e-mail to <a class="theme-link" href="mailto:andrea@pollastri.dev"><u>andrea@pollastri.dev</u></a>. All security vulnerabilities will be promptly addressed. 
							</p>
						</section>
				    </header>
			    </article>
			    
			    
			    <article class="docs-article" id="section-11">
				    <header class="docs-header">
					    <h1 class="docs-heading">Credits</h1>
					    <section class="docs-intro">
						    <p>
								Cipi was made by <a class="theme-link" href="https://andreapollastri.dev" target="_blank"><b>Andrea Pollastri</b></a> using:
								<div class="minispace"></div>
								<i class="fab fa-laravel fa-2x"></i> <a class="theme-link" href="https://laravel.com" target="_blank">Laravel</a><span style="margin-right:25px"></span>&<span style="margin-right:25px"></span><i class="fab fa-bootstrap fa-2x"></i> <a class="theme-link" href="https://getbootstrap.com/" target="_blank">Bootstrap</a>
								<div class="space"></div>
								A special thanks to:
								<ul>
									<li><a class="theme-link" href="https://github.com/andreapollastri/cipi" target="_blank">Cipi Github</a> Contributors and Community for feedbacks, pull requests, issues, sponsor, beers and support</li>
									<li><a class="theme-link" href="https://digitalocean.com" target="_blank">Digital Ocean</a> for test VPSs</li>
									<li><a class="theme-link" href="https://startbootstrap.com/themes/sb-admin-2/" target="_blank">SB Admin 2</a> for Cipi Template</li>
									<li><a class="theme-link" href="https://datatables.net/" target="_blank">Datatables</a> for Cipi Tables</li>
									<li><a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for Cipi Docs Template</li>
								</ul>
							</p>
						</section>
				    </header>
			    </article>

		    </div> 
	    </div>
    </div>
        
    <script src="assets/plugins/jquery-3.4.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="assets/js/highlight-custom.js"></script> 
    <script src="assets/plugins/jquery.scrollTo.min.js"></script>
    <script src="assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script> 
	<script src="assets/js/docs.js"></script>   
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-1396990-60"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-1396990-60');
	</script>

</body>
</html> 

