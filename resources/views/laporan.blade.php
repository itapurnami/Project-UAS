<!-- Content Wrapper. Contains page content -->
<x-app-layout>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><span class="fa fa-file"></span> Laporan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6"></div>
        <!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title"><span class="fa fa-arrow-right"></span> <strong>Data Obat Masuk</strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama Obat</th>
                    <th>Status</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th>Oleh</th>
                  </tr>
                  </thead>
                  <tbody>
                  @for($i = 1; $i<=3; $i++)
                  <tr>
                    <td>{{$i}}</td>
                    <td>Obat {{$i}}</td>
                    <td>Order Masuk</td>
                    <td>{{4+$i}}</td>
                    <td>2021-11-2{{$i}}</td>
                    <td>{{auth()->user()->name}}</td>
                  </tr>
                  @endfor
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title"><span class="fa fa-arrow-left"></span> <strong>Data Obat Keluar</strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama Obat</th>
                    <th>Status</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th>Oleh</th>
                  </tr>
                  </thead>
                  <tbody>
                  @for($i = 1; $i<=3; $i++)
                  <tr>
                    <td>{{$i}}</td>
                    <td>Obat {{$i}}</td>
                    <td>Order Keluar</td>
                    <td>{{0+$i}}</td>
                    <td>2021-11-2{{$i}}</td>
                    <td>{{auth()->user()->name}}</td>
                  </tr>
                  @endfor
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
          </div>
        </div>
      </div>

      <!-- /.row -->
      <!-- Main row -->
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
    $(function () {
    $("#example1, #example2").DataTable({});
  });
</script>
</x-app-layout>
