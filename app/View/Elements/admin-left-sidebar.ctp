 <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
            <?php if((!empty($loggedUser['profile_pic']))){ ?>
              <img src="<?=IMG_ADMIN.'user/thumb/'.$loggedUser['profile_pic']?>" width="160" height="160" class="img-circle" alt="User Image">
            <?php  }else{ ?>
                <img src="<?=IMG_ADMIN?>user2-160x160.jpg" width="160" height="160" class="img-circle" alt="User Image">
              <?php } ?>
            </div>
            <div class="pull-left info">
              <p><?php echo (!empty($loggedUser))?$loggedUser['first_name'].' '.$loggedUser['last_name']:''; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"><i class="fa fa-angle-double-right"></i> ADMIN PANEL</li>
            <li class="active treeview">
              <a href="<?=ADMIN_WEBROOT?>home">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-fw fa-user"></i>
                <span>User Management</span>
                <span class="label label-primary pull-right"><?=$no_of_user?></span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=ADMIN_WEBROOT?>users"><i class="fa fa-angle-double-right"></i> List Users</a></li>
                <li><a href="<?=ADMIN_WEBROOT?>users/add"><i class="fa fa-angle-double-right"></i> Add User</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-fw fa-envelope"></i>
                <span>Email Templates</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=ADMIN_WEBROOT?>EmailTemplates"><i class="fa fa-angle-double-right"></i> List Templates</a></li>
                <li><a href="<?=ADMIN_WEBROOT?>EmailTemplates/add"><i class="fa fa-angle-double-right"></i> Add Template</a></li>     </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-fw fa-comments"></i>
                <span>Manage Testimonials</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=ADMIN_WEBROOT?>testimonials"><i class="fa fa-angle-double-right"></i> List Testimonials</a></li>
                <li><a href="<?=ADMIN_WEBROOT?>testimonials/add"><i class="fa fa-angle-double-right"></i> Add Testimonial</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-fw fa-pencil"></i>
                <span>Manage Content</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=ADMIN_WEBROOT?>contents"><i class="fa fa-angle-double-right"></i> List Pages</a></li>
                <li><a href="<?=ADMIN_WEBROOT?>contents/add"><i class="fa fa-angle-double-right"></i> Add Page</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-fw fa-gear"></i>
                <span>Manage Services</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=ADMIN_WEBROOT?>services"><i class="fa fa-angle-double-right"></i> List Services</a></li>
                <li><a href="<?=ADMIN_WEBROOT?>services/add"><i class="fa fa-angle-double-right"></i> Add Service</a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-fw fa-gear"></i>
                <span>Conditions & Treatments</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=ADMIN_WEBROOT?>category"><i class="fa fa-angle-double-right"></i> List Conditions</a></li>
                <li><a href="<?=ADMIN_WEBROOT?>category/add"><i class="fa fa-angle-double-right"></i> Add Condition</a></li>
				<li><a href="<?=ADMIN_WEBROOT?>category/list_sub_conditions"><i class="fa fa-angle-double-right"></i> List Sub Conditions</a></li>
                <li><a href="<?=ADMIN_WEBROOT?>category/add_sub_condition"><i class="fa fa-angle-double-right"></i> Add Sub Condition</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>