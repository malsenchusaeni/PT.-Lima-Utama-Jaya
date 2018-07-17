 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section-->

    <!-- Main content -->
    <?php
    include "pages/koneksi.php";
      switch ($_REQUEST["pages"]) {
        case 'kategori':
          require_once("pages/kategori.php");
          break;
        case 'customer':
          require_once("pages/customer.php");
          break;
        case 'supplier':
          require_once("pages/supplier.php");
          break;
        case 'barang':
          require_once("pages/barang.php");
          break;
        case 'pembeli':
          require_once("pages/pembeli.php");
          break;
        case 'editpembeli':
          require_once("pages/editpembeli.php");
          break;
        case 'datacustomer':
          require_once("pages/datcus.php");
          break;
        case 'editpenjual':
          require_once("pages/editpenjual.php");
          break;
        case 'penjualan':
          require_once("pages/penjualan.php");
          break;
        case 'datasuplier':
          require_once("pages/datsup.php");
          break;
        case 'databarang':
          require_once("pages/datbarang.php");
          break;
        case 'lappenjualan':
          require_once("pages/lappenjualan.php");
          break;
        case 'lappembelian':
          require_once("pages/lappembelian.php");
          break;
        case 'pengaturan':
          require_once("pages/pengaturan.php");
          break;
        default:
          require_once("pages/utama.php");
          break;
      }
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->