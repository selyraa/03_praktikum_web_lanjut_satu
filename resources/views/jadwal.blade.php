@extends('app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jadwal Perkuliahan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tahun Akademik : 2022/2023 Genap</h3><br>
                <h3 class="card-title">Kelas : 2H</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>  
            <div class="card-body">
                <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode MK</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Mata Kuliah</th>
                        <th>Dosen Pengajar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwals as $j)
                        <tr>
                            <td>{{ $j -> id}}</td>
                            <td>{{ $j -> kode_mk}}</td>
                            <td>{{ $j -> hari}}</td>
                            <td>{{ $j -> jam}}</td>
                            <td>{{ $j -> mata_kuliah}}</td>
                            <td>{{ $j -> nama_dosen}}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <!-- <div class="card-footer">
                --
            </div> -->
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
