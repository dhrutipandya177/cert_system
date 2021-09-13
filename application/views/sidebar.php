<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.html"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="ticket-list.html"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Ticket List
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-chat.html"
                                aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu">Chat</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-calendar.html"
                                aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                    class="hide-menu">Calendar</span></a></li> -->

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Panel</span></li>
                        <?php if($_SESSION['logtype']=="Super Admin") { ?>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Task Manager</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                
                                <li class="sidebar-item"><a href="<?php echo base_url() ?>ad_admission/ad_admission" class="sidebar-link"><span
                                            class="hide-menu">Item
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url() ?>item/product" class="sidebar-link"><span
                                            class="hide-menu">product
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url() ?>ad_admission/ad_admission" class="sidebar-link"><span
                                            class="hide-menu">Admission
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url() ?>ad_admission/ad_view" class="sidebar-link"><span
                                            class="hide-menu">Admission view
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="<?php echo base_url() ?>ad_admission/Print_Cert" class="sidebar-link"><span
                                            class="hide-menu">Print Certificat
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                    <?php } ?>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>