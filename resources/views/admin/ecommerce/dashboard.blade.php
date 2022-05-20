@include('layouts.toplink')
@include('layouts.header')
      <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
         
           <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box">
                <div class="inner">
                  <h3>10</h3>
                  <p>Total Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add" style="color: #3bc47c;"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box">
                <div class="inner">
                  <h3>53</h3>
                  <p>Total Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag" style="color: #f9ba48;"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box">
                <div class="inner">
                  <h3>4</h3>
                  <p>Total Cancel Order</p>
                </div>
                <div class="icon">
                  <i class="ion ion-backspace-outline" style="color: #f14c5a;"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box">
                <div class="inner">
                  <h3>9910</h3>
                  <p>Total Prodcuts</p>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-truck" style="color: #506fe4;"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box">
                <div class="inner">
                  <h3>1</h3>
                  <p>Total Stores</p>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-house" style="color: #506fe4;"></i>
                  
                </div>
               
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box">
                <div class="inner">
                  <h3>8</h3>
                  <p>Total Categories</p>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-bag-shopping" style="color: #96a3b6;"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box">
                <div class="inner">
                  <h3>0</h3>
                  <p>Total Coupons</p>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-border-all" style="color: #43d187;"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box">
                <div class="inner">
                  <h3>0</h3>
                  <p>Total FAQ's</p>
                </div>
                <div class="icon">
                  <i class="fa-regular fa-circle-question" style="color: #f7bb4d;"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://mindhatsolutions.com">Mindhat Solutions</a>.</strong> All rights reserved.
      </footer>
@include('layouts.script')