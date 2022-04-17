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
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($destinasi as $destinasi)
                            <tr>
                                <td class="td-bordered">{{ ++$i }}</td>
                                <td class="td-bordered">{{ $destinasi->name }}</td>
                                <td class="td-bordered">{{ $destinasi->desc }}</td>
                                <td class="td-bordered">
                                <!-- <img style="width: 30px;height: 30px;" src="{{ asset('images/icon/logo-whatsapp.svg') }}" alt=""> -->
                                    <img src="{{URL::to('/')}}/img/destinasi/{{$destinasi->foto}}"
                                    style="max-width:70px;" alt="">
                                </td>
                                <td class="td-bordered">{{ $destinasi->video }}</td>
                                <td class="td-bordered">{{ $destinasi->address }}</td>
                                <td class="td-bordered">{{ $destinasi->ticket }}</td>
                                <td class="td-bordered">{{ $destinasi->days }}</td>
                                <td class="td-bordered">{{ $destinasi->days }}</td>
                                <td class="td-bordered" style="text-align: center;">
                                    <form action="{{ route('destinasi.destroy',$destinasi->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('destinasi.show',$destinasi->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('destinasi.edit',$destinasi->id) }}">Edit</a>
                                        <a class="btn btn-danger" onclick="return myFunction();" href="{{route('destinasi.destroy', $destinasi->id)}}">Delete</a>
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