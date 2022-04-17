@extends('layouts.app')
@section('title')
<title>Admin Page | Home</title>
@endsection
@section('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400">
	<div class="parallax-content-1">
		<div class="animated fadeInDown">
			<h1>Admin Page</h1>
		</div>
	</div>
</section>
<!-- End section -->

<main>
    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#">Home</a>
                </li>
                <li>Admin</li>
            </ul>
        </div>
    </div>
    <!-- Position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-12">
            <table class="table table-bordered">
                <tr class="text-center">
                    <th colspan="10">Daftar Destinasi</th>
                </tr>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Video</th>
                    <th>Foto</th>
                    <th>Alamat</th>
                    <th>Tiket</th>
                    <th>Jam Operasional</th>
                    <th width="280px">Aksi</th>
                </tr>
                <tr class="text-right">
                    <th colspan="10">
                        <a class="btn btn-primary" href="{{ url('destinasi/admin') }}"> Lihat Semua</a>
                        <a class="btn btn-primary" href="{{ url('destinasi/create') }}"> Tambahkan Baru</a>
                    </th>
                </tr>
            </table>
            </div>
            <!-- End col lg-9 -->
        </div>
        <!-- End row -->
    </div>

    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-12">
            <table class="table table-bordered">
                <tr class="text-center">
                    <th colspan="10">Daftar Kuliner</th>
                </tr>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Video</th>
                    <th>Foto</th>
                    <th>Alamat</th>
                    <th>Tiket</th>
                    <th>Jam Operasional</th>
                    <th width="280px">Aksi</th>
                </tr>
                <tr class="text-right">
                    <th colspan="10">
                        <a class="btn btn-primary" href="{{ url('student') }}"> Lihat Semua</a>
                    </th>
                </tr>
            </table>
            </div>
            <!-- End col lg-9 -->
        </div>
        <!-- End row -->
    </div>


    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-12">
            <table class="table table-bordered">
                <tr class="text-center">
                    <th colspan="10">Daftar Akomodasi</th>
                </tr>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Video</th>
                    <th>Foto</th>
                    <th>Alamat</th>
                    <th>Tiket</th>
                    <th>Jam Operasional</th>
                    <th width="280px">Aksi</th>
                </tr>
                <tr class="text-right">
                    <th colspan="10">
                        <a class="btn btn-primary" href="{{ url('student') }}"> Lihat Semua</a>
                    </th>
                </tr>
            </table>
            </div>
            <!-- End col lg-9 -->
        </div>
        <!-- End row -->
    </div>


    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-12">
            <table class="table table-bordered">
                <tr class="text-center">
                    <th colspan="10">Daftar Acara</th>
                </tr>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Video</th>
                    <th>Foto</th>
                    <th>Alamat</th>
                    <th>Tiket</th>
                    <th>Jam Operasional</th>
                    <th width="280px">Aksi</th>
                </tr>
                <tr class="text-right">
                    <th colspan="10">
                        <a class="btn btn-primary" href="{{ url('student') }}"> Lihat Semua</a>
                    </th>
                </tr>
            </table>
            </div>
            <!-- End col lg-9 -->
        </div>
        <!-- End row -->
    </div>


    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-12">
            <table class="table table-bordered">
                <tr class="text-center">
                    <th colspan="10">Daftar Fasilitas Umum</th>
                </tr>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Video</th>
                    <th>Foto</th>
                    <th>Alamat</th>
                    <th>Tiket</th>
                    <th>Jam Operasional</th>
                    <th width="280px">Aksi</th>
                </tr>
                <tr class="text-right">
                    <th colspan="10">
                        <a class="btn btn-primary" href="{{ url('student') }}"> Lihat Semua</a>
                    </th>
                </tr>
            </table>
            </div>
            <!-- End col lg-9 -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</main>
<!-- End main -->
@endsection
@section('additionalHead')

@endsection