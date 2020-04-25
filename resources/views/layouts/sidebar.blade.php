<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <li><a href="{{ url('home') }}"><i class="fa fa-home"></i> Dashboard</a></li>

        <li class="header">ORDER ONLINE</li>
          <!-- ORDER ONLINE -->
        <li class="treeview">
            <li><a href="{{ url('Order-Online-ADV') }}"><i class="fa fa-cart-plus"></i> Order Online ADV</a></li>
            <li><a href="{{ url('Order-Online-HOBIMEN') }}"><i class="fa fa-cart-plus"></i> Order Online HOBIMEN</a></li>
            <li><a href="{{ url('Order-Online-OROKKIDS') }}"><i class="fa fa-cart-plus"></i> Order Online OROKKIDS</a></li>
        </li>

        <li class="header">PERSEDIAAN GUDANG ATK</li>
        <!-- ORDER ONLINE -->
        <li class="treeview">
            <li><a href="{{ url('Purchase-Order-ATK') }}"><i class="fa fa-file-text"></i> Form Order ATK</a></li>
            <li><a href="{{ url('Barang-ATK') }}"><i class="fa fa-briefcase"></i> Persediaan Barang ATK</a></li>
        </li>
       

        <li class="header">PERSEDIAAN GUDANG PENJUALAN</li>
         <!-- ADV -->
         <li><a href="{{ url('Data-Supplier') }}"><i class="fa fa-users"></i> Data Supplier</a></li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-folder-open"></i>
            <span>Persediaan ADV</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{ url('Stok-Barang-ADV') }}"><i class="fa fa-archive"></i> Stok Barang</a></li>
            <li><a href="{{ url('Purchase-Order-ADV') }}"><i class="fa fa-file-text"></i> Purchase Order</a></li>
            <li><a href="{{ url('Daftar-Kirim-Harian-ADV') }}"><i class="fa fa-file-text"></i> Daftar Kirim Harian</a></li>
          </ul>
        </li>

        <!-- HOBIMEN -->
        <li class="treeview">
          <a href="">
            <i class="fa fa-folder-open"></i>
            <span>Persediaan HOBIMEN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{ url('Stok-Barang-HOBIMEN') }}"><i class="fa fa-archive"></i> Stok Barang</a></li>
            <li><a href="{{ url('Purchase-Order-HOBIMEN') }}"><i class="fa fa-file-text"></i> Purchase Order</a></li>
            <li><a href="{{ url('Daftar-Kirim-Harian-HOBIMEN') }}"><i class="fa fa-circle-o"></i> Daftar Kirim Harian</a></li>
          </ul>
        </li>

         <!-- OROKKIDS -->
         <li class="treeview">
          <a href="">
            <i class="fa fa-folder-open"></i>
            <span>Persediaan OROKKIDS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{ url('Stok-Barang-OROKKIDS') }}"><i class="fa fa-archive"></i> Stok Barang</a></li>
            <li><a href="{{ url('Purchase-Order-OROKKIDS') }}"><i class="fa fa-file-text"></i> Purchase Order</a></li>
            <li><a href="{{ url('Daftar-Kirim-Harian-OROKKIDS') }}"><i class="fa fa-circle-o"></i> Daftar Kirim Harian</a></li>
          </ul>
        </li>

        <li class="header">OTHER</li>

        @if(\Auth::user()->name == 'Admin')
        <li class="menu-sidebar"><a href="{{ url('/reset-password') }}"><span class="glyphicon glyphicon-log-out"></span> Reset Password</span></a></li>
        @endif

        <li class="menu-sidebar"><a href="{{ url('/keluar') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li>


      </ul>
    </section>