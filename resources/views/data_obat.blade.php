<!-- Content Wrapper. Contains page content -->
<x-app-layout>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><span class="fa fa-folder"></span> Data Obat</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
            <a href="{{route('input-obat')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah</a>
          </ol>
        </div><!-- /.col -->
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
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Ukuran</th>
                    <th>Stok</th>
                  </tr>
                  </thead>
                  <tbody>
                    @for($i=1; $i<=3; $i++)
                    <tr>
                      <td>{{$i}}</td>
                      <td>Obat {{$i}}</td>
                      <td>Jenis Obat {{$i}}</td>
                      <td>Botol 1{{$i}}0 ml</td>
                      <td>4</td>
                    </tr>
                    @endfor
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
          </div>
        </div>
      <!-- /.row -->
      <!-- Main row -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
    $(function () {
    $("#example1").DataTable({});
  });
</script>
</x-app-layout>
