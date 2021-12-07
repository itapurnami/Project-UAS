<!-- Content Wrapper. Contains page content -->
<x-app-layout>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><span class="fa fa-pen"></span> Input Data Obat Keluar</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
            <li class="breadcrumb-item active"><span class="fa fa-home"></span> Beranda</li>
            <li class="breadcrumb-item active">Obat Keluar</li>
            <li class="breadcrumb-item active">Tambah</li>
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
            <div class="card-body"> 
              <form class="form-horizontal">
                <div class="card-body">
                  <!-- <div class="form-group row">
                    <label for="Id" class="col-sm-2 col-form-label text-md-right">Id Admin :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="id">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="id_pengguna" class="col-sm-2 col-form-label text-md-right">Id Pengguna :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="id_pengguna">
                    </div>
                  </div> -->
                  <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label text-md-right">Nama Obat :</label>
                    <div class="col-sm-6">
                      <select class="custom-select form-control-border border-width-2" id="id_obat">
                        <option></option>
                        @for($i=1; $i<=3; $i++)
                        <option>Obat {{$i}}</option>
                        @endfor
                      </select>
                    </div>                      
                  </div>
                  <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label text-md-right">Status :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-border border-width-1" id="status">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jumlah" class="col-sm-2 col-form-label text-md-right">Jumlah :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-border border-width-1" id="jumlah">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label text-md-right">Tanggal Keluar :</label>
                    <div class="col-sm-6">
                      <div class="input-group date" id="date_keluar" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input form-control-border border-width-1" data-target="#date_keluar"/>
                          <div class="input-group-append" data-target="#date_keluar" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                    </div>
                      
                </div>
                  <div class="form-group row">
                    <div class="col-sm-5">
                      <button type="submit" class="offset-sm-9 col-sm-3 btn btn-info">Simpan</button>                      
                    </div>
                    <div class="col-sm-7">
                      <button type="submit" class="col-sm-2 btn btn-default">Batal</button>   
                      <div class="col-sm-10"></div>                   
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
          </div>   
        </div>
        <!-- ./col -->
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
    $('#date_keluar').datetimepicker({
        format: 'YYYY-MM-DD'
    });
</script>
</x-app-layout>
