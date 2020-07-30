 
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
         <div class="image">
            <form enctype="multipart/form-data" action="image_upload_demo_submit.php" method="post" name="image_upload_form" id="image_upload_form">
               <div id="imgArea" class="pull-left image">
                  <img src=" " width="48" height="48" >
                  <div class="progressBar">
                     <div class="bar"></div>
                     <div class="percent">0%</div>
                  </div>
                  <div id="imgChange"><span><i class="fa fa-edit"></i></span>
                     <input type="file" accept="image/*" name="image_upload_file" id="image_upload_file">
                  </div>
               </div>
            </form>
         </div>
         <div class="pull-left info">
            <p> </p>
         </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
         <li class="header">MAIN NAVIGATION</li>
         <li>
            <a href="dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
         </li>
         <li class="treeview">
            <a href="#">
            <i class="fa fa-shopping-cart fw"></i>
            <span>Offline Biling</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="billing_customers"><i class="fa fa-circle-o"></i>Create Biling</a></li>
               <li><a href="offline_records"><i class="fa fa-circle-o"></i>View Biling</a></li>
            </ul>
         </li>
         <li class="treeview">
            <a href="#">
            <i class="fa fa-shopping-cart fw"></i>
            <span>Orders Records</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="orders"><i class="fa fa-circle-o"></i>Pending Orders</a></li>
               <li><a href="process_orders"><i class="fa fa-circle-o"></i>Process Orders</a></li>
               <li><a href="delivered_orders"><i class="fa fa-circle-o"></i>Delivered Orders</a></li>
               <li><a href="returns"><i class="fa fa-circle-o"></i>Returns</a></li>
               <li><a href="ecommerce_commision"><i class="fa fa-circle-o"></i>Commisions</a></li>
                
            </ul>
         </li>
         <li class="treeview">
				<a href="#">
				  <i class="fa fa-refresh"></i>
				    <span>Recurring Orders</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
				<ul class="treeview-menu">
					                 
					  <li class="">
						<a href="accepted-orders" target="_self" class="nav-link">
						  <i class="fa fas fa-circle"></i>
						  Accepted Orders						</a>
					  </li>
					                  
					  <li class="">
						<a href="delivered-orders" target="_self" class="nav-link">
						  <i class="fa fas fa-circle"></i>
						  Delivered Orders						</a>
					  </li>
					                  
					  <li class="">
						<a href="recursive-orders" target="_self" class="nav-link">
						  <i class="fa fas fa-circle"></i>
						  Pending Orders						</a>
					  </li>
					                  
					  <li>
						<a href="today-orders" target="_self" class="nav-link">
						  <i class="fa fas fa-circle"></i>
						  Today Orders						
					    </a>
					  </li>
 				</ul>
		  </li>
          <li >
            <a href="get_commisions">
            <i class="fa fa-dashboard"></i> <span>Get Commisions</span>
            </a>
         </li>
         <li>
            <a href="manual_sales">
            <i class="fa fa-shopping-cart fw"></i>
            <span>Manual Sales</span>
            </a>
         </li>
         <li>
            <a href="demands">
            <i class="fa fa-users fw"></i>
            <span>Demands</span>
            </a>
         </li>
         <li>
            <a href="stock">
            <i class="fa fa-users fw"></i>
            <span>Stock Records</span>
            </a>
         </li>    
           <li class="treeview">
            <a href="#">
            <i class="fa fa-shopping-cart fw"></i>
            <span>Stock Record</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            
            <ul class="treeview-menu">
               <li><a href="stock"><i class="fa fa-circle-o"></i>View / Edit Stock</a></li>
               <li><a href="add_stock_products"><i class="fa fa-circle-o"></i>Add Stock Product</a></li>
            </ul>
         </li>
         <li>
            <a href="rate-list">
            <i class="fa fa-shopping-cart fw"></i>
            <span>UM Price List</span>
            </a>
         </li>
         
         <li>
            <a href="addEditProfile?token=<?= $detail['id'];?>">
            <i class="fa fa-shopping-cart fw"></i>
            <span>Edit Vendor Profile</span>
            </a>
         </li>
         
          <li class="treeview">
            <a href="#">
            <i class="fa fa-shopping-cart fw"></i>
            <span>Bookings</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
          <ul class="treeview-menu">
               <li><a href="viewBookings?view=placed"><i class="fa fa-circle-o"></i>Pending Bookings</a></li>
               <li><a href="viewBookings?view=cancel"><i class="fa fa-circle-o"></i>Rejected Bookings</a></li>
               <li><a href="viewBookings?view=confirm"><i class="fa fa-circle-o"></i>Competed Bookings</a></li>
            </ul>
          </li>
      </ul>
   </section>
   <!-- /.sidebar -->
</aside>