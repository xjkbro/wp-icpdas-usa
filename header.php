<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>


	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header>
			<!-- Top Header -->
			<div class="flex mx-auto font-semibold bg-light h-fit text-dark">
				<div class="container mx-auto">
					<div class="flex justify-between">

						<div class="flex">
							<div class="p-2"><a href="#"><i class="fa fa-comments" aria-hidden="true"></i> Click to Chat</a></div>
							<div class="p-2"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> 888-971-9888</a></div>
							<div class="p-2"><a href="<?php echo get_bloginfo('url'); ?>/contact"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></div>
							<div class="p-2">Cage/NCage Code: 3FNF0</div>
						</div>
						<div class="flex">
							<div class="p-2"><a href="<?php echo get_bloginfo('url'); ?>/quotation-center">Request A Quote</a></div>
							<div class="p-2"><a href="<?php echo get_bloginfo('url'); ?>/account">My Account</a></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Search Nav -->
			<div class="mx-auto container lg:w-2/3 md:w-full p-4">
				<div class="flex justify-between items-center">
					<!-- Logo -->
					<div>
						<?php if (has_custom_logo()) { ?>
							<?php the_custom_logo(); ?>
						<?php } else { ?>
							<div class="text-lg uppercase">
								<a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
									<?php echo get_bloginfo('name'); ?>
								</a>
							</div>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo('description'); ?>
							</p>

						<?php } ?>
					</div>
					<!-- Search bar -->
					<div class="bg-light hidden xl:block">
						<select class="text-sm font-semibold w-40 h-10 outline outline-2 outline-dark bg-dark text-white" name="" id="">
							<option value="1" class="text-center">Search Entire Site</option>
							<option value="2" class="text-center">test2</option>
							<option value="3" class="text-center">test3</option>
						</select>
						<input class="text-sm font-semibold w-60 h-10 px-2 bg-light outline outline-2 outline-light" type="text" placeholder="What can we help you with?">
						<button class="text-sm font-semibold w-24 h-10 bg-secondary outline outline-2 outline-secondary hover:outline hover:outline-2 hover:outline-secondary hover:bg-white text-white hover:text-secondary">Search</button>
					</div>
					<div class="xl:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
					<!-- Button Container -->
					<div class="flex gap-6">
						<a href="<?php echo get_bloginfo('url'); ?>/cart" class="font-semibold text-dark py-4 px-6 outline outline-2 outline-dark hover:bg-dark hover:text-white">Cart</a>
						<a href="<?php echo get_bloginfo('url'); ?>/shop" class="font-semibold bg-secondary py-4 px-6 outline outline-2 outline-secondary hover:outline hover:outline-2 hover:outline-secondary hover:bg-white text-white hover:text-secondary">Shop</a>
					</div>
				</div>

			</div>
			<!-- Primary Navigation -->
			<script>
				// <div class="flex mx-auto font-semibold text-white bg-primary">
				//     <div class="flex text-lg h-16 w-full mx-auto items-center justify-center">
				//         <!-- <div class="lg:hidden">
				//             <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
				//                 <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				//                     <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
				//                         <g id="icon-shape">
				//                             <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
				//                         </g>
				//                     </g>
				//                 </svg>
				//             </a>
				//         </div> -->
				//             <?php
								//             // wp_nav_menu(
								//             //     array(
								//             //         'container_id'    => 'primary-menu',
								//             //         'container_class' => 'hidden w-full lg:block lg:w-auto',
								//             //         'menu_class'      => 'flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-lg md:font-large',
								//             //         'menu_id'       => 'home-menu',
								//             //         'theme_location'  => 'primary',
								//             //         'li_class'        => 'lg:mx-4',
								//             //         // 'depth'           => 1,
								//             //         'fallback_cb'     => false,
								//             //     )
								//             // );
								//             
								?>

				//     </div>
				// </div>
			</script>
			<div class="desktop-menu bg-1 ds-no w-100">
				<nav class="navbar mg-at wc">
					<ul class="navbar-menu ai-c ds-fl jc-sb">
						<li class="navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="/index.php">Home</a></li>
						<li class="navbar-dropdown navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="<?php echo get_bloginfo('url'); ?>/shop">Products<i class="fas fa-caret-down ic-r"></i></a>
							<ul class="submenu-1 bg-2 dd-products">
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Converters &amp; Gateways<i class="fas fa-caret-right ic-r"></i></a>
									<ul class="submenu-2 bg-2 dd-converters">
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Serial to Ethernet/Modbus Converters&nbsp;&amp;&nbsp;Gateways<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-serial">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">PDS-700 Programmable Serial to Ethernet Converters</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">I-7188 Ethernet to Serial Converters</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">tDS-700 Serial to Ethernet Device&nbsp;Servers</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">tGW-700 Modbus to RTU/ASCII Device&nbsp;Servers</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">tSH-700 Serial to Device Servers</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">RS-232/422/485<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-rs">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Intelligent Communication Converters</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">RS-232/422/485 Converters</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">RS-232/422/485 Repeaters</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Fieldbus Converters &amp; Gateways<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-fbus">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">BACnet Gateways</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">CANbus Converters &amp; Gateways</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">DALI Gateways</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">J1939 to Modbus RTU Converters</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">DeviceNet Gateway</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">EtherNet/IP Converters &amp; Gateways</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">HART Converters &amp; Gateways</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">EtherCAT Junction Switch</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">PROFIBUS Converters &amp; Gateways</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">PROFINET Converters &amp; Gateways</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">USB Converters</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Modbus Converters &amp; Gateways</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Serial to Ethernet Device Servers</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Wi-Fi Converter</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">M-Bus Gateway</a></li>
									</ul>
								</li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Data Acquisition<i class="fas fa-caret-right ic-r"></i></a>
									<ul class="submenu-2 bg-2 dd-data">
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Remote I/O Data Acquisition<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-remote">
												<li class="accordion submenu-item ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1">Modbus TCP Data Acquisition</li>
												<li class="panel submenu bg-2 mg-l2">
													<ul>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">View All</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">Modbus TCP-Based Dual Ethernet Port I/O&nbsp;Modules</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">PoE Modbus TCP-Based Dual Ethernet Port I/O&nbsp;Modules</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">Remote Ethernet Modbus TCP&nbsp;I/O&nbsp;Modules</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">PoE Ethernet Modbus TCP&nbsp;I/O&nbsp;Modules</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">WISE-71xx Modbus TCP Controllers</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">Tiny Ethernet Modbus TCP&nbsp;I/O&nbsp;Modules</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">Web-Based Ethernet Modbus TCP&nbsp;Modules</a></li>
													</ul>
												</li>
												<li class="accordion submenu-item ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1">Modbus RTU-Based Data Acquisition</li>
												<li class="panel submenu bg-2 mg-l2">
													<ul>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">View All</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">M-7000 Modbus RTU Remote Data&nbsp;Acquisition Modules</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">M-6000 Modbus RTU Remote Data&nbsp;Acquisition Modules</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">M-2000 Modbus RTU Remote Data&nbsp;Acquisition Modules</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">tM Series Tiny DCON &amp; Modbus RTU Data&nbsp;Acquisition Modules</a></li>
													</ul>
												</li>
												<li class="accordion submenu-item ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1">DCON RS-485 Data Acquisition</li>
												<li class="panel submenu bg-2 mg-l2">
													<ul>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">View All</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">M-7000 Modbus RTU Remote Data&nbsp;Acquisition Modules</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">tM Series Tiny DCON &amp; Modbus RTU Data&nbsp;Acquisition Modules</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">I-7000 Remote Data Acquisition Modules via&nbsp;RS-485/DCON Protocol</a></li>
													</ul>
												</li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Ethernet/IP Data Acquisition</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">CANOpen Data Acquisition</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">PROFINET Data Acquisition</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">DeviceNet Data Acquisition</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">PROFIBUS Data Acquisition</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Wi-Fi Modbus TCP Data Acquisition</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Zigbee Wirelss Modbus RTU Data&nbsp;Acquisition</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">EtherCAT Data Acquisition</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">BACnet Data Acquisition</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">USB Data Acquisition</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">FRnet Data Acquisition</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">OPC UA Data Acquisition</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">MQTT Data Acquisition</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Rack-Based Data Acquisition<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-rack">
												<li class="accordion submenu-item ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1">I-8K Data Acquisition Modules</li>
												<li class="panel submenu bg-2 mg-l2">
													<ul>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">View All</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">I-8000W High Performance Modules</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">I-8000 Analog Data Acquisition Modules</a></li>
													</ul>
												</li>
												<li class="accordion submenu-item ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1">I-87K Data Acquisition Modules</li>
												<li class="panel submenu bg-2 mg-l2">
													<ul>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">View All</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">I-87KW High Performance I/O&nbsp;Modules</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">I-87K Analog Data Acquisition Modules</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">I-87K Digital Data Acquisition Modules</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">I-87K Expansion Racks</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">I-87K Specialty Modules</a></li>
													</ul>
												</li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">CANBus and CANOpen Expansion&nbsp;Racks</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">DeviceNet I/O Expansion Racks</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Ethernet-Based Racks</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">FRnet Interface Modules</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">HART Modules</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">I-87K Expansion Racks</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">I-9000 Remote I/O Modules</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">I-97K Series I/O Modules</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Modbus I/O Expansion Racks</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">PROFIBUS I/O Expansion Racks</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">RS-485 I/O Expansion Racks</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">USB I/O Expansion Racks</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">PCI/ISA Data Acquisition Boards<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-pci">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">ISA Data Acquisition Boards</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">PCI Data Acquisition Boards</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">PCI Express Data Acquisition Boards</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Motion Control<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-motion">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Motion Control PAC</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">MotionNet Motion Control Modules</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">PC-Based Motion Control Boards</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Data Loggers<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-logger">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Accelerometer Data Logger</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">CAN Bus Data Logger</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">CL &amp; DL Series Environmental Data&nbsp;Logger</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Power Meter Data Logger</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">WISE Modbus Data Logger</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Smart Power Meters</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Seismic Alarm Records</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Internet of Things (IoT) Products</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Motion &amp; Temperature Sensors</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">DCS Systems</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">WISE Data Acquisition Controllers</a></li>
									</ul>
								</li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Embedded/PLC Controllers<i class="fas fa-caret-right ic-r"></i></a>
									<ul class="submenu-2 bg-2 dd-controllers">
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">I-8000 Rack Mount Controllers<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-8k">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">I-8000 C Language Embedded&nbsp;Controllers</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">I-8000 Ladder Logic PLC Controllers</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Mini PAC with GPRS/GPS</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">I-7188 Compact Embedded&nbsp;Controllers<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-7188">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">I-7188 C Language Embedded&nbsp;Controllers</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">IEC-61131-3 PLC Controllers</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">uPAC I/O Expansion Boards</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">I-7188 Expansion Boards</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Web Page Configurable Controller with&nbsp;GSM/GPRS</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">HMI Controllers</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Embedded CAN Controllers</a></li>
									</ul>
								</li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Ethernet Switches<i class="fas fa-caret-right ic-r"></i></a>
									<ul class="submenu-2 bg-2 dd-ethernet">
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Industrial Managed Ethernet/Fiber Switches</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Industrial Unmanaged Ethernet Switches</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Industrial Unmanaged Fiber Switches</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Industrial Ring Ethernet/Fiber Switch</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">PoE Injector (PSE) / Splitter (PD)</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Industrial Media Converters (Ethernet - Fiber)</a></li>
									</ul>
								</li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Industrial Data Communications<i class="fas fa-caret-right ic-r"></i></a>
									<ul class="submenu-2 bg-2 dd-com">
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Fieldbus Communication<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-fcom">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">BACnet Gateways</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">CAN Communication Converters</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">CANbus Communication Boards</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">DeviceNet Gateway</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">EtherNet/IP Converters &amp; Gateways</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">FR-Net Communication Boards</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">HART Converters &amp; Gateways</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">J1939 to Modbus RTU Converters</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">PROFINET Converters</a></li>
												<li class="accordion submenu-item ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1">PROFIBUS</li>
												<li class="panel submenu bg-2 mg-l2">
													<ul>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">PROFIBUS Converter</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">PROFIBUS Gateway</a></li>
														<li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="#">PROFIBUS Repeaters</a></li>
													</ul>
												</li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">M-Bus Gateway</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Serial Communication<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-scom">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Programmable Serial to Ethernet Device&nbsp;Servers</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Programmable Serial-to-Fiber Device&nbsp;Servers</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Remote Maintenance Devices</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">RS-232/422/485 Conversion Devices</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">USB Converters</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Ethernet Communication</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Modbus Communication<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-mcom">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Data Servers &amp; Data Concentrators</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Modbus Converters</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Serial to Ethernet and Modbus RTU to Modbus&nbsp;TCP&nbsp;Converters</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Converters</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Wireless Communication<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-wcom">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Infrared IR Remote Modules</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Wi-Fi Converter</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Bluetooth Converter</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Zigbee-Based Wireless Products</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Industrial Wireless Products<i class="fas fa-caret-right ic-r"></i></a>
									<ul class="submenu-2 bg-2 dd-wireless">
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Mini PAC with GPRS/GPS</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Zigbee-Based Wireless Products</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">2G/3G Wireless Solutions</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Industrial Wireless Ethernet</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Industrial GPS Receivers</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Industrial Antennas</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Industrial Wi-Fi Data Acquisition Modules</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Infrared IR Remote Modules</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">RF Modems</a></li>
									</ul>
								</li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Power Supplies &amp; Signal Conditioners<i class="fas fa-caret-right ic-r"></i></a>
									<ul class="submenu-2 bg-2 dd-power">
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Power Supplies</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Signal Conditioners</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Current &amp; Voltage Sensors</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">PoE Injector (PSE) / Splitter (PD)</a></li>
									</ul>
								</li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Programmable Automation Controllers<i class="fas fa-caret-right ic-r"></i></a>
									<ul class="submenu-2 bg-2 dd-pac">
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Linux-based PAC</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Windows-based PAC<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-wpac">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">InduSoft Windows CE Standard PACs</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Motion Programmable Automation Controller (MPAC)</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">ViewPAC: Display, Operation & Control</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">WinCON Windows CE PAC</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">WinPAC Windows CE PAC</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">X-PAC Windows Embedded PAC</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Smart View</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">MiniOS7 Embedded<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-mpac">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">WISE Expansion I/O Modules</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">WISE-4000(D)</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Micro PAC</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Panel PC/Touchscreen Controllers<i class="fas fa-caret-right ic-r"></i></a>
											<ul class="submenu-3 bg-2 dd-tpac">
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">TouchPad Touch Screen Controllers</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">InduSoft Windows CE Standard PACs</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">ViewPAC: Display, Operation & Control</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">WinCON Windows CE PAC</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">WinPAC Windows CE PAC</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">X-PAC Windows Embedded PAC</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Smart View</a></li>
												<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Panel PC</a></li>
											</ul>
										</li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">DDC Direct Digital Control Devices</a></li>
									</ul>
								</li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Touch Screen Controllers<i class="fas fa-caret-right ic-r"></i></a>
									<ul class="submenu-2 bg-2 dd-tcon">
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Panel PC</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">TouchPad Controller</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">InduSoft Windows CE Standard PACs</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">ViewPAC: Display, Operation &amp; Control</a></li>
									</ul>
								</li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="#">Touch Screen Monitors<i class="fas fa-caret-right ic-r"></i></a>
									<ul class="submenu-2 bg-2 dd-tmon">
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Monitors</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Touch Panel Monitors</a></li>
										<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Web-Enabled LED Displays</a></li>
									</ul>
								</li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Inventory Sale</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">New Products</a></li>
							</ul>
						</li>
						<li class="navbar-dropdown navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="#">Software<i class="fas fa-caret-down ic-r"></i></a>
							<ul class="submenu-1 bg-2 dd-software">
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Database Software</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">eLogger</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">EZ Data Logger</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">HMI &amp; SCADA</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">IEC-61131 Development Software</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Image Process &amp; Analysis</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">M2M Management</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">OPC Servers</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Secondary Software Solutions Providers</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Touch Screen Controller Development</a></li>
							</ul>
						</li>
						<li class="navbar-dropdown navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="#">Cables &amp; Accessories<i class="fas fa-caret-down ic-r"></i></a>
							<ul class="submenu-1 bg-2 dd-cables">
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Antennas</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Cables &amp; Connectors</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Industrial Enclosures Cases</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Other Accessories</a></li>
							</ul>
						</li>
						<li class="navbar-dropdown navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="#">Solutions<i class="fas fa-caret-down ic-r"></i></a>
							<ul class="submenu-1 bg-2 dd-solutions">
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Building Automation</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Factory Automation</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Food &amp; Beverage</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Green Energy &amp; Environment</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">IIoT</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Laboratories</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Transportation</a></li>
							</ul>
						</li>
						<li class="navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="#">Find My Product</a></li>
						<li class="navbar-dropdown navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="#">Resources<i class="fas fa-caret-down ic-r"></i></a>
							<ul class="submenu-1 bg-2 dd-resources">
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Blog</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Case Studies</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#" target="_blank">Price List</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#" target="_blank">Price List: Appendix A</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Catalogs</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#" target="_blank">Line Card</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Videos</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Webinars</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">White Papers</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">EZ Data Logger</a></li>
							</ul>
						</li>
						<li class="navbar-dropdown navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="#">Support<i class="fas fa-caret-down ic-r"></i></a>
							<ul class="submenu-1 bg-2 dd-support right">
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Tech Support</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#" target="_blank">Engineer Forum</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Policies</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Product Manuals</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Tracking</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Warranty</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">FAQs</a></li>
							</ul>
						</li>
						<li class="navbar-dropdown navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="#">About Us<i class="fas fa-caret-down ic-r"></i></a>
							<ul class="submenu-1 bg-2 dd-about right">
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Contact Us</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Company Profile</a></li>
								<li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="#">Careers</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</header>

		<div id="content" class="site-content flex-grow">

			<!-- Start introduction -->
			<!-- <?php if (is_front_page()) : ?>
                <div class="container mx-auto my-12 border-b pb-12">
                    <h1 class="font-bold text-lg text-secondary uppercase">TailPress</h1>
                    <h2 class="text-3xl lg:text-7xl tracking-tight font-extrabold my-4">Rapidly build your WordPress theme
                        with <a href="https://tailwindcss.com" class="text-primary">Tailwind CSS</a>.</h2>
                    <p class="max-w-screen-lg text-gray-700 text-lg font-medium mb-10">TailPress is your go-to starting
                        point for developing WordPress themes with TailwindCSS and comes with basic block-editor support out
                        of the box.</p>
                    <a href="https://github.com/jeffreyvr/tailpress" class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">View
                        on Github</a>
                </div>
            <?php endif; ?> -->
			<!-- End introduction -->

			<!-- <?php do_action('tailpress_content_start'); ?> -->

			<main>