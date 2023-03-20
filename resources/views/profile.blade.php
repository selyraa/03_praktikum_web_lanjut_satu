@extends('app',['title'=>'profile'])

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header"> 
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card card-primary col-md-5 mx-auto card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                        src="{{ asset ('assets/dist/img/2141720005.jpg') }}" alt="User profile picture">
                    </div>
                        @foreach($profiles as $p)
                            <h3 class="profile-username text-center">{{ $p -> nama }}</h3>
                            <p class="text-muted text-center">{{ $p -> jurusan }}</p>
                            
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>NIM</b> <a class="float-right">{{ $p -> nim }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Kelas</b> <a class="float-right">{{ $p -> kelas }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Nomor Absen</b> <a class="float-right">{{ $p -> no_absen }}</a>
                                </li>
                            </ul>
                        @endforeach
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer-->
             </div>
             <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->
@endsection
<!-- <table border = '1'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NIM</th>
                                <th>NAMA</th>
                                <th>JURUSAN</th>
                                <th>KELAS</th>
                                <th>NO ABSEN</th>
                                <th>JENIS KELAMIN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($profiles as $p)
                                <tr>
                                    <td>{{ $p -> id}}</td>
                                    <td>{{ $p -> nim}}</td>
                                    <td>{{ $p -> nama}}</td>
                                    <td>{{ $p -> jurusan}}</td>
                                    <td>{{ $p -> kelas}}</td>
                                    <td>{{ $p -> no_absen}}</td>
                                    <td>{{ $p -> jenis_kelamin}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> -->