        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url(); ?>maps/superuser" aria-expanded="false">
                                <i class="mdi mdi-home"></i>
                                <span class="hide-menu">Home</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" data-toggle="collapse" href="#multicol2">
                                <i class="mdi mdi-tooltip-edit"></i>
                                <span class="hide-menu">Edit
                                <b class="logo">
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                    <img src="<?= base_url() ?>assets/images/custom-select.png" alt="homepage" class="dark-logo">
                                </b>
                                </span>
                            </a>
                            <div class="collapse multi-collapse" id="multicol2">
                                
                                <a href="<?= base_url() ?>Maps/superuser/tambahKelurahan" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">Tambah Data Kelurahan</a>
                            </div>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url(); ?>maps/superuser/peta" aria-expanded="false">
                                <i class="mdi mdi-google-maps"></i>
                                <span class="hide-menu">Maps</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" data-toggle="collapse" href="#multicol3">
                                <i class="mdi mdi-tooltip-edit"></i>
                                <span class="hide-menu">Management User
                                <b class="logo">
                                    &emsp;&emsp;&emsp;
                                    <img src="<?= base_url() ?>assets/images/custom-select.png" alt="homepage" class="dark-logo">
                                </b>
                                </span>
                            </a>
                            <div class="collapse multi-collapse" id="multicol3">
                                <a href="<?= base_url() ?>Maps/superuser/list_user" class="sidebar-link waves-effect waves-dark sidebar-link"  aria-expanded="false">Edit Data User</a>
                                <a href="<?= base_url() ?>Maps/superuser/tambahUser" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">Tambah Data User</a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->