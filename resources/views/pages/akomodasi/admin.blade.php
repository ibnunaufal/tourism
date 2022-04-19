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
                            <th colspan="8">Daftar Akomodasi</th>
                            <th>
                            <a class="btn btn-primary" href="{{ url('akomodasi/create') }}"> <i class="icon_set_1_icon-11"></i></a>
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
                        @foreach($akomodasi as $ako)
                        <tr class="table-bordered">
                            <td class="td-bordered col-md-1">{{ ++$i }}</td>
                            <td class="td-bordered col-md-1">{{ $ako->name }}</td>
                            <td class="td-bordered col-md-3">{{ $ako->desc }}</td>
                            <td class="td-bordered col-md-3">
                            <!-- <img style="width: 30px;height: 30px;" src="{{ asset('images/icon/logo-whatsapp.svg') }}" alt=""> -->
                                <img src="{{URL::to('/')}}/img/akomodasi/{{$ako->foto}}"
                                style="max-width:70px;" alt="">
                            </td>
                            <td class="td-bordered col-md-1">{{ $ako->video }}</td>
                            <td class="td-bordered col-md-3">{{ $ako->address }}</td>
                            <td class="td-bordered col-md-1">{{ $ako->ticket }}</td>
                            <td class="td-bordered col-md-3">
                                {{ str_contains($ako->days, 'sen') ? "Senin " : "" }}
                                {{ str_contains($ako->days, 'sel') ? "Selasa " : "" }}
                                {{ str_contains($ako->days, 'rab') ? "Rabu " : "" }}
                                {{ str_contains($ako->days, 'kam') ? "Kamis " : "" }}
                                {{ str_contains($ako->days, 'jum') ? "Jumat " : "" }}
                                {{ str_contains($ako->days, 'sab') ? "Sabtu " : "" }}
                                {{ str_contains($ako->days, 'min') ? "Minggu " : "" }}
                                
                            </td>
                            <td class="td-bordered col-md-3" style="text-align: center;">
                                <form action="{{ route('akomodasi.destroy',$ako->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('akomodasi.show',$ako->id) }}"><i class="icon_set_1_icon-79"></i></a>
                                    <a class="btn btn-primary" href="{{ route('akomodasi.edit',$ako->id) }}"><i class="icon_set_1_icon-17"></i></a>
                                    <a class="btn btn-danger" onclick="return myFunction();" href="{{route('akomodasi.destroy', $ako->id)}}"><i class="icon_set_1_icon-67"></i></a>
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
                                Jumlah Data : {{ $akomodasi->total() }} <br>
                                {{ $akomodasi->links("pagination::bootstrap-4") }}
                            </td>
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