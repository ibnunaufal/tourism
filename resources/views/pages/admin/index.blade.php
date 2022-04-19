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
                <div class="table-responsive">
                    <table class="table">
                        <tr class="text-center table-bordered">
                            <th colspan="8">Daftar Destinasi</th>
                            <th>
                            <a class="btn btn-primary" href="{{ url('destinasi/create') }}"> <i class="icon_set_1_icon-11"></i></a>
                            </th>
                        </tr>
                        <tr class="table-bordered">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Video</th>
                            <th>Alamat</th>
                            <th>Tiket</th>
                            <th>Operasional</th>
                            <th width="280px">Aksi</th>
                        </tr>
                        @php
                            $i = 0;
                        @endphp
                        @foreach($destinasi as $des)
                        <tr class="table-bordered">
                            <td class="td-bordered col-md-1">{{ ++$i }}</td>
                            <td class="td-bordered col-md-1">{{ $des->name }}</td>
                            <td class="td-bordered col-md-3">{{ $des->desc }}</td>
                            <td class="td-bordered col-md-3">
                            <!-- <img style="width: 30px;height: 30px;" src="{{ asset('images/icon/logo-whatsapp.svg') }}" alt=""> -->
                                <img src="{{URL::to('/')}}/img/destinasi/{{$des->foto}}"
                                style="max-width:70px;" alt="">
                            </td>
                            <td class="td-bordered col-md-1">{{ $des->video }}</td>
                            <td class="td-bordered col-md-3">{{ $des->address }}</td>
                            <td class="td-bordered col-md-1">{{ $des->ticket }}</td>
                            <td class="td-bordered col-md-3">
                                {{ str_contains($des->days, 'sen') ? "Senin " : "" }}
                                {{ str_contains($des->days, 'sel') ? "Selasa " : "" }}
                                {{ str_contains($des->days, 'rab') ? "Rabu " : "" }}
                                {{ str_contains($des->days, 'kam') ? "Kamis " : "" }}
                                {{ str_contains($des->days, 'jum') ? "Jumat " : "" }}
                                {{ str_contains($des->days, 'sab') ? "Sabtu " : "" }}
                                {{ str_contains($des->days, 'min') ? "Minggu " : "" }}
                                
                            </td>
                            <td class="td-bordered col-md-3" style="text-align: center;">
                                <form action="{{ route('destinasi.destroy',$des->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('destinasi.show',$des->id) }}"><i class="icon_set_1_icon-79"></i></a>
                                    <a class="btn btn-primary" href="{{ route('destinasi.edit',$des->id) }}"><i class="icon_set_1_icon-17"></i></a>
                                    <a class="btn btn-danger" onclick="return myFunction();" href="{{route('destinasi.destroy', $des->id)}}"><i class="icon_set_1_icon-67"></i></a>
                                    <script>
                                    function myFunction() {
                                        if(!confirm("Are You Sure to delete this"))
                                        event.preventDefault();
                                    }
                                    </script>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="10" class="punyaku">
                                Jumlah Data : {{ $destinasi->total() }} <br>
                                {{ $destinasi->links("pagination::bootstrap-4") }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- End col lg-9 -->
        </div>
        <!-- End row -->
    </div>


    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
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
                                <a class="btn btn-primary" href="{{ url('destinasi/admin') }}"> Lihat Semua</a>
                                <a class="btn btn-primary" href="{{ url('destinasi/create') }}"> Tambahkan Baru</a>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- End col lg-9 -->
        </div>
        <!-- End row -->
    </div>


    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
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
                                <a class="btn btn-primary" href="{{ url('destinasi/admin') }}"> Lihat Semua</a>
                                <a class="btn btn-primary" href="{{ url('destinasi/create') }}"> Tambahkan Baru</a>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- End col lg-9 -->
        </div>
        <!-- End row -->
    </div>


    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
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
                                <a class="btn btn-primary" href="{{ url('destinasi/admin') }}"> Lihat Semua</a>
                                <a class="btn btn-primary" href="{{ url('destinasi/create') }}"> Tambahkan Baru</a>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- End col lg-9 -->
        </div>
        <!-- End row -->
    </div>


    <div class="container margin_60">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
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
                                <a class="btn btn-primary" href="{{ url('destinasi/admin') }}"> Lihat Semua</a>
                                <a class="btn btn-primary" href="{{ url('destinasi/create') }}"> Tambahkan Baru</a>
                            </th>
                        </tr>
                    </table>
                </div>
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