<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/noavatar.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('nama_lengkap');?><br></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                   <?php
                        if($this->session->userdata('level')=='Admin'){
        
                            echo '
                                <li><a href="'.site_url('bio').'"><i class="fa fa-circle-o"></i> Biodata</a></li>
                                <li><a href="'.site_url('sekolah').'"><i class="fa fa-circle-o"></i> Sekolah</a></li>';
                        }
                        elseif ($this->session->userdata('level')=='Pimpinan') {
                            echo '
                                <li><a href="'.site_url('sekolah').'"><i class="fa fa-circle-o"></i> Sekolah</a></li>';

                        }
                        else {
                            echo '
                                <li><a href="'.site_url('bio').'"><i class="fa fa-circle-o"></i> Biodata</a></li>';
                        }
                    ?>

                </ul>
            </li>
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">