<aside class="main-sidebar" style="overfow-y: scroll;">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{url('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="{{route('ecommerce')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
              
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa-solid fa-user"></i> <span>Users</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('ecommerce.userlist')}}"> - All Users</a></li>
                
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa-solid fa-list-check"></i> <span>Proudct Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"> - Brands</a></li>
                <li><a href="#"> - Variant Products</a></li>
                <li><a href="#">- Simple Products</a></li>
                <li><a href="#">- Product Attributes</a></li>
                <li><a href="#">- Coupon</a></li>
                <li><a href="#">- Return Policy Settings</a></li>
                <li><a href="#">- Units</a></li>
                <li><a href="#">- Special Offers</a></li>
                <li><a href="#">- All Reviews</a></li>
                <li><a href="#">- Reviews For Approval</a></li>
                <li><a href="#">- Commision Settings</a></li>
                <li><a href="#">- Size Chart</a></li>
                </li>
                
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa-solid fa-cart-plus"></i> <span>Orders & Invoices</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"> - All Orders</a></li>
                <li><a href="#">- Pre Orders</a></li>
                <li><a href="#">- Pending Orders</a></li>
                <li><a href="#">- Cancel Orders</a></li>
                <li><a href="#">- Returned Orders</a></li>
                <li><a href="#">- Invoice Settings</a></li>
                <li><a href="#">- Invoice Design</a></li>
                <li><a href="#">- Return Reasons</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa-solid fa-cart-plus"></i> <span>Inhouse Orders</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"> - All Orders</a></li>
                <li><a href="#">- Create Orders</a></li>
                <li><a href="#">- Reports</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa-solid fa-location-dot"></i> <span>Location</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"> - Countries</a></li>
                <li><a href="#">- States</a></li>
                <li><a href="#">- Cities</a></li>
                <li><a href="#">- Delivery Location</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa-solid fa-truck-fast"></i> <span>Shipping & Taxes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"> - Tax Classes</a></li>
                <li><a href="#">- Tax Rated</a></li>
                <li><a href="#">- Zones</a></li>
                <li><a href="#">- Shipping</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-money-bill-1"></i> <span>Currency Settings</span> 
              </a>
              
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-wallet"></i> <span>Wallet</span> 
              </a>
              
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-circle-info"></i> <span>Reported Product</span> 
              </a>
              
            </li>
            
           
          
           
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>