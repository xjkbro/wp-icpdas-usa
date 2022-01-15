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
                            <div class="p-2"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></div>
                            <div class="p-2">Cage/NCage Code: 3FNF0</div>
                        </div>
                        <div class="flex">
                            <div class="p-2"><a href="/quotation-center">Request A Quote</a></div>
                            <div class="p-2"><a href="/my-account">My Account</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search Nav -->
            <div class="mx-auto container lg:w-2/3 md:w-full">
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
                        <select class="text-sm font-semibold w-36 h-10 outline outline-2 outline-dark bg-dark text-white" name="" id="">
                            <option value="1">Search Entire Site</option>
                            <option value="2">test2</option>
                            <option value="3">test3</option>
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
                        <button class="font-semibold text-darkpy-4 px-6 outline outline-2 outline-dark hover:bg-dark hover:text-white"><a href="/cart">Cart</a></button>
                        <button class="font-semibold bg-secondary py-4 px-6 outline outline-2 outline-secondary hover:outline hover:outline-2 hover:outline-secondary hover:bg-white text-white hover:text-secondary"><a href="/shop">Shop</a></button>
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
                //             ?>
                            
                //     </div>
                // </div>
            </script>
            <div class="desktop-menu bg-1 ds-no w-100">
			    <nav class="navbar mg-at wc">
			        <ul class="navbar-menu ai-c ds-fl jc-sb">
			            <li class="navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="/index.php">Home</a></li>
			            <li class="navbar-dropdown navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="/all-products.php">Products<i class="fas fa-caret-down ic-r"></i></a>
			                <ul class="submenu-1 bg-2 dd-products">
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/converters_and_gateways.html">Converters &amp; Gateways<i class="fas fa-caret-right ic-r"></i></a>
			                        <ul class="submenu-2 bg-2 dd-converters">
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/serial_to_ethernet_and_modbus_rtu_to_modbus_tcp_converters.html">Serial to Ethernet/Modbus Converters&nbsp;&amp;&nbsp;Gateways<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-serial">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/serial_to_ethernet_device_servers.html">PDS-700 Programmable Serial to Ethernet Converters</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/ethernet_ip_i_o_module.html">I-7188 Ethernet to Serial Converters</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/tds_700_serial_to_ethernet_device_servers.html">tDS-700 Serial to Ethernet Device&nbsp;Servers</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/tgw_700_modbus_tcp_to_rtu_ascii_device_servers.html">tGW-700 Modbus to RTU/ASCII Device&nbsp;Servers</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/tsh_700_serial_to_shared_device_servers.html">tSH-700 Serial to Device Servers</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/rs_232_422_485_conversion_devices.html">RS-232/422/485<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-rs">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/intelligent_communication_converters.html">Intelligent Communication Converters</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/serial_communication_converters.html">RS-232/422/485 Converters</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/serial_communication_repeaters.html">RS-232/422/485 Repeaters</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/converters_and_gateways.html">Fieldbus Converters &amp; Gateways<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-fbus">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/bacnet_gateways.html">BACnet Gateways</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/canbus_gateways.html">CANbus Converters &amp; Gateways</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/dali_gateways.html">DALI Gateways</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/j1939_to_modbus_rtu_converters.html">J1939 to Modbus RTU Converters</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/devicenet_gateway.html">DeviceNet Gateway</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/ethernet_ip_converters_and_gateways.html">EtherNet/IP Converters &amp; Gateways</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/hart_gateways.html">HART Converters &amp; Gateways</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/ethercat_junction_switch.html">EtherCAT Junction Switch</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/profibus_converters_and_gateways.html">PROFIBUS Converters &amp; Gateways</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/profinet_gateway.html">PROFINET Converters &amp; Gateways</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/serial_to_usb_converters.html">USB Converters</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/modbus_converters_and_gateways.html">Modbus Converters &amp; Gateways</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/programmable_serial_to_ethernet_device_servers_converter_gateway.html">Serial to Ethernet Device Servers</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/wi_fi_converter.html">Wi-Fi Converter</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/m_bus_gateway.html">M-Bus Gateway</a></li>
			                        </ul>
			                    </li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/data_acquisition_systems.html">Data Acquisition<i class="fas fa-caret-right ic-r"></i></a>
			                        <ul class="submenu-2 bg-2 dd-data">
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/remoteiomodules.html">Remote I/O Data Acquisition<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-remote">
			                                    <li class="accordion submenu-item ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1">Modbus TCP Data Acquisition</li>
			                                    <li class="panel submenu bg-2 mg-l2">
			                                        <ul>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/modbus_tcp_data_acquisition_modules.html">View All</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/modbustcp_dual_ethernet_io_modules.html">Modbus TCP-Based Dual Ethernet Port I/O&nbsp;Modules</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/pet_modbustcp_dual_ethernet_io_modules.html">PoE Modbus TCP-Based Dual Ethernet Port I/O&nbsp;Modules</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/remote_ethernet_io_modules.html">Remote Ethernet Modbus TCP&nbsp;I/O&nbsp;Modules</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/poe_ethernet_i_o_modules.html">PoE Ethernet Modbus TCP&nbsp;I/O&nbsp;Modules</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/wise_7100_modules.html">WISE-71xx Modbus TCP Controllers</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/tet_modules.html">Tiny Ethernet Modbus TCP&nbsp;I/O&nbsp;Modules</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/web_based_ethernet_i_o_modules.html">Web-Based Ethernet Modbus TCP&nbsp;Modules</a></li>
			                                        </ul>
			                                    </li>
			                                    <li class="accordion submenu-item ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1">Modbus RTU-Based Data Acquisition</li>
			                                    <li class="panel submenu bg-2 mg-l2">
			                                        <ul>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/modbus_rtu_based_data_acquisition_modules.html">View All</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/m_7000_remote_data_acquisition_modules_via_modbus_protocol.html">M-7000 Modbus RTU Remote Data&nbsp;Acquisition Modules</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/m_6000_modbus_rtu_remote_data_acquisition.html">M-6000 Modbus RTU Remote Data&nbsp;Acquisition Modules</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/m2000-modbus-RTU-remote-data-acquisition-table.html">M-2000 Modbus RTU Remote Data&nbsp;Acquisition Modules</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/tm_series_digital_i_o.html">tM Series Tiny DCON &amp; Modbus RTU Data&nbsp;Acquisition Modules</a></li>
			                                        </ul>
			                                    </li>
			                                    <li class="accordion submenu-item ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1">DCON RS-485 Data Acquisition</li>
			                                    <li class="panel submenu bg-2 mg-l2">
			                                        <ul>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/dcon_rs_485_data_acquisition.html">View All</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/m_7000_remote_data_acquisition_modules_via_modbus_protocol.html">M-7000 Modbus RTU Remote Data&nbsp;Acquisition Modules</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/tm_series_digital_i_o.html">tM Series Tiny DCON &amp; Modbus RTU Data&nbsp;Acquisition Modules</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/i_7000_remote_data_acquisition_modules_via_rs_485_dcon_protocol.html">I-7000 Remote Data Acquisition Modules via&nbsp;RS-485/DCON Protocol</a></li>
			                                        </ul>
			                                    </li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/ethernet_ip_i_o_module.html">Ethernet/IP Data Acquisition</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/remote_canopen_i_o.html">CANOpen Data Acquisition</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/profinet_i_o.html">PROFINET Data Acquisition</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/remote_devicenet_i_o.html">DeviceNet Data Acquisition</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/profi_5055_remote_io.html">PROFIBUS Data Acquisition</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/wi_fi_data_acquisition_modules.html">Wi-Fi Modbus TCP Data Acquisition</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/zigbee_alliance_wireless_data_acquisition.html">Zigbee Wirelss Modbus RTU Data&nbsp;Acquisition</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/ecat.html">EtherCAT Data Acquisition</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/bacnet_i_o_modules.html">BACnet Data Acquisition</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/usb_data_acquisition_products.html">USB Data Acquisition</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/fr_net.html">FRnet Data Acquisition</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/opc_ua_data_acquisition.html">OPC UA Data Acquisition</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/mqtt-data-acquisition-table.html">MQTT Data Acquisition</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/remoteracks.html">Rack-Based Data Acquisition<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-rack">
			                                    <li class="accordion submenu-item ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1">I-8K Data Acquisition Modules</li>
			                                    <li class="panel submenu bg-2 mg-l2">
			                                        <ul>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/i_8000_data_acquisition_modules_via_rs_485_dcon_protocol_cartridge_based_i_o.html">View All</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/i_8000_high_performance_modules.html">I-8000W High Performance Modules</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/i_8000_analog_data_acquisition_modules.html">I-8000 Analog Data Acquisition Modules</a></li>
			                                        </ul>
			                                    </li>
			                                    <li class="accordion submenu-item ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1">I-87K Data Acquisition Modules</li>
			                                    <li class="panel submenu bg-2 mg-l2">
			                                        <ul>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/i_87k_data_acquisition_modules_via_rs_485_dcon_protocol_cartridge_based_i_o.html">View All</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/i_87k_high_performance_i_o_modules.html">I-87KW High Performance I/O&nbsp;Modules</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/i_87k_analog_data_acquisition_modules.html">I-87K Analog Data Acquisition Modules</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/i_87k_digital_data_acquisition_modules.html">I-87K Digital Data Acquisition Modules</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/i_87k_expansion_racks_based.html">I-87K Expansion Racks</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/i_87k_specialty_modules.html">I-87K Specialty Modules</a></li>
			                                        </ul>
			                                    </li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/canbus.html">CANBus and CANOpen Expansion&nbsp;Racks</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/canopen_and_devicenet_i_o_expansion_racks.html">DeviceNet I/O Expansion Racks</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/ethernet_based_racks.html">Ethernet-Based Racks</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/frnet_interface_modules.html">FRnet Interface Modules</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/hart_modules.html">HART Modules</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/i_87k_expansion_racks.html">I-87K Expansion Racks</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/i_9000_remote_io_modules.html">I-9000 Remote I/O Modules</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/i_97k_series_io_modules.html">I-97K Series I/O Modules</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/modbus_i_o_expansion_racks.html">Modbus I/O Expansion Racks</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/profibus_i_o_expansion_racks.html">PROFIBUS I/O Expansion Racks</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/rs_485_i_o_expansion_racks.html">RS-485 I/O Expansion Racks</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/usb_i_o_expansion_racks.html">USB I/O Expansion Racks</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/pci_isa_data_acquisition_boards.html">PCI/ISA Data Acquisition Boards<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-pci">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/isa_data_acquisition_boards.html">ISA Data Acquisition Boards</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/pci_data_acquisition_boards.html">PCI Data Acquisition Boards</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/pci_express.html">PCI Express Data Acquisition Boards</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/motion_control.html">Motion Control<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-motion">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/motion_control_pac.html">Motion Control PAC</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/motionnet_motion_control.html">MotionNet Motion Control Modules</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/pc_based_motion_control_boards.html">PC-Based Motion Control Boards</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/data_loggers.html">Data Loggers<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-logger">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/accelerometer_data_logger.html">Accelerometer Data Logger</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/can_bus_data_logger.html">CAN Bus Data Logger</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/cl_dl_series_environmental_data_logger.html">CL &amp; DL Series Environmental Data&nbsp;Logger</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/power_meter_data_logger.html">Power Meter Data Logger</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/wise_modbus_data_logger.html">WISE Modbus Data Logger</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/intelligent_power_meters.html">Smart Power Meters</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/seismic_alarm_recorder.html">Seismic Alarm Records</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/internet_of_things_iot_products.html">Internet of Things (IoT) Products</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/motion_and_temperature_sensors.html">Motion &amp; Temperature Sensors</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/distributed_control_system.html">DCS Systems</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/wise_products.html">WISE Data Acquisition Controllers</a></li>
			                        </ul>
			                    </li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/embedded_controllers_plc_controllers.html">Embedded/PLC Controllers<i class="fas fa-caret-right ic-r"></i></a>
			                        <ul class="submenu-2 bg-2 dd-controllers">
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/i_8000_rack_mount_plc_controllers.html">I-8000 Rack Mount Controllers<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-8k">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/i_8000_c_language_embedded_controllers.html">I-8000 C Language Embedded&nbsp;Controllers</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/i_8000_ladder_logic_plc_controllers.html">I-8000 Ladder Logic PLC Controllers</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/mini_pac_with_gprs_gps.html">Mini PAC with GPRS/GPS</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/i_7188_compact_embedded_controllers.html">I-7188 Compact Embedded&nbsp;Controllers<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-7188">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/i_7188_c_language_embedded_controllers.html">I-7188 C Language Embedded&nbsp;Controllers</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/i_7188_ladder_logic_plc_controllers.html">IEC-61131-3 PLC Controllers</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/upac_i_o_expansion_boards.html">uPAC I/O Expansion Boards</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/i7188expansion.html">I-7188 Expansion Boards</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/wise_4000_d_.html">Web Page Configurable Controller with&nbsp;GSM/GPRS</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/hmi_controllers.html">HMI Controllers</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/embedded_can_controllers.html">Embedded CAN Controllers</a></li>
			                        </ul>
			                    </li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/ethernet_switches.html">Ethernet Switches<i class="fas fa-caret-right ic-r"></i></a>
			                        <ul class="submenu-2 bg-2 dd-ethernet">
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/industrial_ethernet_managed_switches.html">Industrial Managed Ethernet/Fiber Switches</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/industrial_ethernet_unmanaged_switches.html">Industrial Unmanaged Ethernet Switches</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/ethernet_switches_with_metal_cases.html">Industrial Unmanaged Fiber Switches</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/plastic_cases.html">Industrial Ring Ethernet/Fiber Switch</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/managed_fiber.html">PoE Injector (PSE) / Splitter (PD)</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/unmanaged_fiber.html">Industrial Media Converters (Ethernet - Fiber)</a></li>
			                        </ul>
			                    </li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/industrial_data_communications.html">Industrial Data Communications<i class="fas fa-caret-right ic-r"></i></a>
			                        <ul class="submenu-2 bg-2 dd-com">
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/fieldbus_communication.html">Fieldbus Communication<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-fcom">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/bacnet_gateways_industrial_data_communication.html">BACnet Gateways</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/can_communication_converters.html">CAN Communication Converters</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/canbus_communication_boards.html">CANbus Communication Boards</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/devicenet_gateway.html">DeviceNet Gateway</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/ethernet_ip_converters_and_gateways.html">EtherNet/IP Converters &amp; Gateways</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/fr_net_communication_boards.html">FR-Net Communication Boards</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/hart_gateways.html">HART Converters &amp; Gateways</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/j1939_to_modbus_rtu_converters.html">J1939 to Modbus RTU Converters</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/profinet_converters.html">PROFINET Converters</a></li>
			                                    <li class="accordion submenu-item ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1">PROFIBUS</li>
			                                    <li class="panel submenu bg-2 mg-l2">
			                                        <ul>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/profibus_converter.html">PROFIBUS Converter</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/profibus_gateway.html">PROFIBUS Gateway</a></li>
			                                            <li class="submenu-item pd-tb1"><a class="ai-c ds-fl fc-wh fs-xs fw-5 td-no" href="/profibus_repeaters.html">PROFIBUS Repeaters</a></li>
			                                        </ul>
			                                    </li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/m_bus_gateway.html">M-Bus Gateway</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/industrial_data_communications.html">Serial Communication<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-scom">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/programmable_serial_to_ethernet_device_servers_data_communications.html">Programmable Serial to Ethernet Device&nbsp;Servers</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/programmable_serial_to_fiber_device_servers.html">Programmable Serial-to-Fiber Device&nbsp;Servers</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/remote_maintenance_devices.html">Remote Maintenance Devices</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/rs_232_422_485_conversion_devices.html">RS-232/422/485 Conversion Devices</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/serial_to_usb_converters.html">USB Converters</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/ethernet_switches.html">Ethernet Communication</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/industrial_data_communications.html">Modbus Communication<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-mcom">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/data_servers_data_concentrator.html">Data Servers &amp; Data Concentrators</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/modbus_rtu_to_modbus_tcp_converter.html">Modbus Converters</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/serial_to_ethernet_and_modbus_rtu_to_modbus_tcp_converters.html">Serial to Ethernet and Modbus RTU to Modbus&nbsp;TCP&nbsp;Converters</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/serial_to_ethernet_and_modbus_rtu_to_modbus_tcp_converters.html">Converters</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/industrial_data_communications.html">Wireless Communication<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-wcom">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/ir_remote_module.html">Infrared IR Remote Modules</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/wi_fi_converter.html">Wi-Fi Converter</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/tble_720.html">Bluetooth Converter</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/zigbee_alliance_based_wireless_products.html">Zigbee-Based Wireless Products</a></li>
			                                </ul>
			                            </li>
			                        </ul>
			                    </li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/industrial_wireless_products.html">Industrial Wireless Products<i class="fas fa-caret-right ic-r"></i></a>
			                        <ul class="submenu-2 bg-2 dd-wireless">
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/mini_pac_with_gprs_gps.html">Mini PAC with GPRS/GPS</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/zigbee_alliance_based_wireless_products.html">Zigbee-Based Wireless Products</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/2g_3g_wireless_solutions.html">2G/3G Wireless Solutions</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/industrial_wireless_ethernet.html">Industrial Wireless Ethernet</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/industrial_gps_receivers.html">Industrial GPS Receivers</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/industrial_wireless_rf_modems.html">Industrial Antennas</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/industrial_wi_fi_data_acquisition_modules.html">Industrial Wi-Fi Data Acquisition Modules</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/ir_remote_module.html">Infrared IR Remote Modules</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/rf_modems.html">RF Modems</a></li>
			                        </ul>
			                    </li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/powersupplies_signalconditioners.html">Power Supplies &amp; Signal Conditioners<i class="fas fa-caret-right ic-r"></i></a>
			                        <ul class="submenu-2 bg-2 dd-power">
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/industrial_power_supplies.html">Power Supplies</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/signal_conditioners.html">Signal Conditioners</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/current_input_sensor.html">Current &amp; Voltage Sensors</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/managed_fiber.html">PoE Injector (PSE) / Splitter (PD)</a></li>
			                        </ul>
			                    </li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/programmable_automation_controllers.html">Programmable Automation Controllers<i class="fas fa-caret-right ic-r"></i></a>
			                        <ul class="submenu-2 bg-2 dd-pac">
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/linpac.html">Linux-based PAC</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/winpac_windows_ce_pac.html">Windows-based PAC<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-wpac">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/indusoft_windows_ce_7_0_standard_pacs.html">InduSoft Windows CE Standard PACs</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/motion_programmable_automation_controller_mpac_.html">Motion Programmable Automation Controller (MPAC)</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/viewpac_display_operation_control.html">ViewPAC: Display, Operation & Control</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/winpac_windows_ce_pac.html">WinCON Windows CE PAC</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/winpac_windows_ce_pac.html">WinPAC Windows CE PAC</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/x_pac_windows_xp_embedded_pac.html">X-PAC Windows Embedded PAC</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/smart_view.html">Smart View</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/winpac_windows_ce_pac.html">MiniOS7 Embedded<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-mpac">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/wise_7900_modules.html">WISE Expansion I/O Modules</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/wise_4000_d_.html">WISE-4000(D)</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/micro_pac.html">Micro PAC</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/winpac_windows_ce_pac.html">Panel PC/Touchscreen Controllers<i class="fas fa-caret-right ic-r"></i></a>
			                                <ul class="submenu-3 bg-2 dd-tpac">
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/touch_pad_controller.html">TouchPad Touch Screen Controllers</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/indusoft_windows_ce_7_0_standard_pacs.html">InduSoft Windows CE Standard PACs</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/viewpac_display_operation_control.html">ViewPAC: Display, Operation & Control</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/winpac_windows_ce_pac.html">WinCON Windows CE PAC</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/winpac_windows_ce_pac.html">WinPAC Windows CE PAC</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/x_pac_windows_xp_embedded_pac.html">X-PAC Windows Embedded PAC</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/smart_view.html">Smart View</a></li>
			                                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/panelpc.html">Panel PC</a></li>
			                                </ul>
			                            </li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/ddc_direct_digital_control_devices.html">DDC Direct Digital Control Devices</a></li>
			                        </ul>
			                    </li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/touchscreen_controllers.html">Touch Screen Controllers<i class="fas fa-caret-right ic-r"></i></a>
			                        <ul class="submenu-2 bg-2 dd-tcon">
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/panelpc.html">Panel PC</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/touchpad_controller.html">TouchPad Controller</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/indusoft_windows_ce_7_0_standard_pacs.html">InduSoft Windows CE Standard PACs</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="https://icpdas-usa.com/viewpac_display_operation_control.html">ViewPAC: Display, Operation &amp; Control</a></li>
			                        </ul>
			                    </li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 jc-sb pd-1 td-no" href="/touch_led_screens.html">Touch Screen Monitors<i class="fas fa-caret-right ic-r"></i></a>
			                        <ul class="submenu-2 bg-2 dd-tmon">
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/monitors_.html">Monitors</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/touch_panel_monitors.html">Touch Panel Monitors</a></li>
			                            <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/web_enabled_led_displays.html">Web-Enabled LED Displays</a></li>
			                        </ul>
			                    </li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/sale.html?page=1">Inventory Sale</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/new_product.html?page=1">New Products</a></li>
			                </ul>
			            </li>
			            <li class="navbar-dropdown navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="/control_hmi_software.html">Software<i class="fas fa-caret-down ic-r"></i></a>
			                <ul class="submenu-1 bg-2 dd-software">
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/sms_database_software.html">Database Software</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/elogger_modules.html">eLogger</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/ez_data_logger_products.html">EZ Data Logger</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/hmiandscada.html">HMI &amp; SCADA</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/iec_1131_development_software.html">IEC-61131 Development Software</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/image_process_and_analysis_software.html">Image Process &amp; Analysis</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/m2m_management_software.html">M2M Management</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/opc_servers.html">OPC Servers</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/secondary_software_solution_providers.html">Secondary Software Solutions Providers</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/touch_screen_controller_development_software.html">Touch Screen Controller Development</a></li>
			                </ul>
			            </li>
			            <li class="navbar-dropdown navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="/cablesandaccessories.html">Cables &amp; Accessories<i class="fas fa-caret-down ic-r"></i></a>
			                <ul class="submenu-1 bg-2 dd-cables">
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/antennas.html">Antennas</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/cables_accessories.html">Cables &amp; Connectors</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/industrial_enclosures.html">Industrial Enclosures Cases</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/accessories.html">Other Accessories</a></li>
			                </ul>
			            </li>
			            <li class="navbar-dropdown navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="/solutions.php">Solutions<i class="fas fa-caret-down ic-r"></i></a>
			                <ul class="submenu-1 bg-2 dd-solutions">
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/solutions/building-automation.php">Building Automation</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/solutions/factory-automation.php">Factory Automation</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/solutions/food-and-beverage.php">Food &amp; Beverage</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/solutions/green-energy-and-environment.php">Green Energy &amp; Environment</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/solutions/iiot.php">IIoT</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/solutions/laboratories.php">Laboratories</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/solutions/transportation.php">Transportation</a></li>
			                </ul>
			            </li>
			            <li class="navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="/advancedsearch.html">Find My Product</a></li>
			            <li class="navbar-dropdown navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="/webpresentations.html">Resources<i class="fas fa-caret-down ic-r"></i></a>
			                <ul class="submenu-1 bg-2 dd-resources">
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/articles.html">Blog</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/pdfs.html">Case Studies</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/documents/ICPDASUSA-Price-List.pdf" target="_blank">Price List</a></li>
                                <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/documents/ICPDASUSA-Appendix-A-Price-List.pdf" target="_blank">Price List: Appendix A</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/catalog.php">Catalogs</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/documentation/LineCard.pdf" target="_blank">Line Card</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/video-library.php">Videos</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/webpresentations.html">Webinars</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/press-releases.php">White Papers</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/ez_data_logger_products.html">EZ Data Logger</a></li>
			                </ul>
			            </li>
			            <li class="navbar-dropdown navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="/support.html">Support<i class="fas fa-caret-down ic-r"></i></a>
			                <ul class="submenu-1 bg-2 dd-support right">
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/contact_us.php">Tech Support</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/forum/" target="_blank">Engineer Forum</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/policies.html">Policies</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/product_support_documentation.html">Product Manuals</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/tracking.php">Tracking</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/warranty.php">Warranty</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/faqs.html">FAQs</a></li>
			                </ul>
			            </li>
			            <li class="navbar-dropdown navbar-item"><a class="navbar-link ai-c ds-fl fc-wh fs-xs fw-5 jc-c pd-tb1 td-no" href="/company-information.html">About Us<i class="fas fa-caret-down ic-r"></i></a>
			                <ul class="submenu-1 bg-2 dd-about right">
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/contact_us.php">Contact Us</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/company-information.html">Company Profile</a></li>
			                    <li class="submenu-item"><a class="ai-c ds-fl fc-wh fs-xs fw-5 pd-1 td-no" href="/employmentopportunities.html">Careers</a></li>
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