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
                            <th>Alamat</th>
                            <th>Tiket</th>
                            <th>Operasional</th>
                            <th>Tags/Kategori</th>
                            <th width="280px">Aksi</th>
                        </tr>
                        @php
                            $i = 0;
                        @endphp
                        @foreach($destinasi as $des)
                        <tr class="table-bordered">
                            <td class="td-bordered">{{ ++$i }}</td>
                            <td class="td-bordered col-md-1">{{ $des->name }}</td>
                            <td class="td-bordered col-md-3">{{ $des->desc }}</td>
                            <td class="td-bordered col-md-1">
                            <!-- <img style="width: 30px;height: 30px;" src="{{ asset('images/icon/logo-whatsapp.svg') }}" alt=""> -->
                            <?php
                            $temp = str_replace("[","",$des->imageArray);
                            $temp = str_replace('"','',$temp);
                            $temp = str_replace("]","",$temp);
                            ?>
                            @foreach(explode(',',$temp) as $t)
                            <img src="{{URL::to('/')}}/img/destinasi/{{$t}}"
                                style="max-width:70px;max-height:70px;" alt="{{$t}}">
                            @endforeach    
                            </td>
                            <td class="td-bordered col-md-2">{{ $des->address }}</td>
                            <td class="td-bordered">{{ $des->ticket }}</td>
                            <td class="td-bordered col-md-3">
                                <li>Sen-Jum : {{$des->seninJumat}}</li>
                                <li>Sab-Min : {{$des->sabtuMinggu}}</li>
                                <hr>
                                <li>Ramah Disabilitas : {{ $des->disabilitas == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                <li>Parkir Tersedia : {{ $des->parkiran == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                <li>Wifi Publik : {{ $des->wifi == '1' ? 'Tersedia' : 'Tidak' }}</li>
                            </td>
                            <td class="td-bordered col-md-1">
                            <?php
                            $temp = str_replace("[","",$des->tags);
                            $temp = str_replace('"','',$temp);
                            $temp = str_replace("]","",$temp);
                            ?>
                            @foreach(explode(',',$temp) as $img)
                            <li>{{$img}}</li>
                            @endforeach
                            </td>
                            <td class="td-bordered col-md-3" style="text-align: center;">
                                <form action="{{ route('destinasi.destroy',$des->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('destinasi.show',$des->id) }}"><i class="icon_set_1_icon-79"></i></a> <br>
                                    <a class="btn btn-primary" href="{{ route('destinasi.edit',$des->id) }}"><i class="icon_set_1_icon-17"></i></a> <br>
                                    <form action="{{route('destinasi.destroy', $des->id)}}" method="POST">    
                                    @method('DELETE')
                                    @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return myFunction();">
                                            <i class="icon_set_1_icon-67">
                                        </button>                                        
                                    </form>
                                    <!-- <a class="btn btn-danger" onclick="return myFunction();" href=""><i class="icon_set_1_icon-67"></i></a> -->
                                    <script>
                                    function myFunction() {
                                        if(!confirm("Anda yakin akan menghapus?"))
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
        <aside class="col-lg-2">
            <div class="box_style_cat">
                <ul id="cat_nav">
                    <li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>Kategori <span>(141)</span></a>
                    </li>
                    <li><a href="all_tours_list.html"><i class="icon_set_1_icon-24"></i> Tempat <span>(141)</span></a></li>
                    <li><a href="all_tours_list.html"><i class="icon_set_1_icon-50"></i> Belanja <span>(141)</span></a></li>
                    <li><a href="all_tours_list.html"><i class="icon_set_1_icon-44"></i> Budaya <span>(141)</span></a></li>
                    <li><a href="all_tours_list.html"><i class="icon_set_1_icon-40"></i> Olahraga <span>(141)</span></a></li>
                    <li><a href="all_tours_list.html"><i class="icon_set_1_icon-3"></i> Rekreasi <span>(141)</span></a></li>
                    <li><a href="all_tours_list.html"><i class="icon_set_1_icon-2"></i> Religi <span>(141)</span></a></li>
                    <li><a href="all_tours_list.html"><i class="icon_set_1_icon-4"></i> Sejarah <span>(141)</span></a></li>
                </ul>
            </div>
        </aside>
        <div class="col-lg-10">
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                        <table class="table">
                                <tr class="text-center table-bordered">
                                    <th colspan="5">Daftar Kategori dan Sub Kategori</th>
                                    <th>
                                    <a class="btn btn-primary" href="{{ url('category/create') }}"> <i class="icon_set_1_icon-11"></i></a>
                                    </th>
                                </tr>
                                <tr class="table-bordered">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Gambar Utama</th>
                                    <th>Icon</th>
                                    <th>SubKategori</th>
                                    <th width="280px">Aksi</th>
                                </tr>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($category as $cat)
                                <tr class="table-bordered">
                                    <td class="td-bordered col-sm-1">{{ ++$i }}</td>
                                    <td class="td-bordered col-md-1">{{ $cat->name }}</td>
                                    <td class="col-md-1">
                                        <img src="{{URL::to('/')}}/img/category/{{$cat->image}}"
                                        style="max-width:70px;max-height:70px;" alt="{{$cat->image}}">
                                    </td>
                                    <td class="td-bordered col-md-3">
                                        <i class="{{$cat->icon}}" style="zoom:2;"></i> {{$cat->icon}}</td>
                                    <td class="td-bordered col-md-5">
                                        <div class="row">
                                        @foreach($subcategory as $subcat)
                                            @if($cat->id == $subcat->category)
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                    <i class="{{$subcat->icon}}" style="zoom:2;"></i> {{$subcat->name}} 
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            
                                                            <form action="{{route('subcategory.destroy', $subcat->id)}}" method="POST">    
                                                            @method('DELETE')
                                                            @csrf
                                                            <a class="btn btn-primary" href="{{ route('subcategory.edit',$subcat->id) }}">
                                                                <i class="icon_set_1_icon-17"></i>
                                                            </a>
                                                                <button type="submit" class="btn btn-danger" onclick="return myFunction1();">
                                                                    <i class="icon_set_1_icon-67"></i>
                                                                    <!-- <i class="icon_set_1_icon-67"></i> -->
                                                                </button>                                        
                                                            </form>
                                                            <!-- <a class="btn btn-danger" onclick="return myFunction();" href=""><i class="icon_set_1_icon-67"></i></a> -->
                                                            <script>
                                                            function myFunction1() {
                                                                if(!confirm("Anda yakin akan menghapus sub kategori ini?"))
                                                                event.preventDefault();
                                                            }
                                                            </script>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header" style="text-align:center;">
                                                        <a href="subcategory/create">
                                                            <button class="btn btn-primary">
                                                                <i class="icon_set_1_icon-11"></i>
                                                            </button>    
                                                        </a>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item"  style="text-align:center;">
                                                            Tambah SubKategori
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </td>

                                    <!-- <img style="width: 30px;height: 30px;" src="{{ asset('images/icon/logo-whatsapp.svg') }}" alt=""> -->
                                    <td class="td-bordered col-md-1" style="text-align: center;">
                                        <form action="{{ route('category.destroy',$cat->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{ route('akomodasi.edit',$cat->id) }}"><i class="icon_set_1_icon-17"></i></a> <br>
                                            <form action="{{route('category.destroy', $cat->id)}}" method="POST">    
                                            @method('DELETE')
                                            @csrf
                                                <button type="submit" class="btn btn-danger" onclick="return myFunction();">
                                                    <i class="icon_set_1_icon-67"></i>
                                                </button>                                        
                                            </form>
                                            <!-- <a class="btn btn-danger" onclick="return myFunction();" href=""><i class="icon_set_1_icon-67"></i></a> -->
                                            <script>
                                            function myFunction() {
                                                if(!confirm("Anda yakin akan menghapus kategori ini?"))
                                                event.preventDefault();
                                            }
                                            </script>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="10" class="punyaku">
                                        Jumlah Data : {{ $category->total() }} <br>
                                        {{ $category->links("pagination::bootstrap-4") }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- End col lg-9 -->
                </div>
                <!-- End row -->
            </div>
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                        <table class="table">
                                <tr class="text-center table-bordered">
                                    <th colspan="5">Daftar Tempat</th>
                                    <th>
                                    <a class="btn btn-primary" href="{{ url('category/create') }}"> <i class="icon_set_1_icon-11"></i></a>
                                    </th>
                                </tr>
                                <tr class="table-bordered">
                                    <!-- Name
                                    Desc
                                    Alamat(desa kelurahan address)
                                    mapUrl
                                    ticket
                                    rating

                                    seninJumat
                                    sabtuMinggu
                                    
                                    disabilities
                                    parkir
                                    wifi
                                    isHeadline
                                    isIcon

                                    url

                                    image
                                    tags -->

                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Gambar Utama</th>
                                    <th>Desc</th>
                                    <th>Alamat MapUrl</th>
                                    <th>Ticket</th>
                                    <th>Rating</th>
                                    <th>Tags</th>
                                    <th>Lainnya</th>

<!-- 
                                    <th>Icon</th>
                                    <th>SubKategori</th> -->
                                    <th width="280px">Aksi</th>
                                </tr>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($category as $cat)
                                <tr class="table-bordered">
                                    <td class="td-bordered col-sm-1">{{ ++$i }}</td>
                                    <td class="td-bordered col-md-1">{{ $cat->name }}</td>
                                    <td class="col-md-1">
                                        <img src="{{URL::to('/')}}/img/category/{{$cat->image}}"
                                        style="max-width:70px;max-height:70px;" alt="{{$cat->image}}">
                                    </td>
                                    <td class="td-bordered col-md-3">
                                        <i class="{{$cat->icon}}" style="zoom:2;"></i> {{$cat->icon}}</td>
                                    <td class="td-bordered col-md-5">
                                        
                                    </td>

                                    <!-- <img style="width: 30px;height: 30px;" src="{{ asset('images/icon/logo-whatsapp.svg') }}" alt=""> -->
                                    <td class="td-bordered col-md-1" style="text-align: center;">
                                        <form action="{{ route('category.destroy',$cat->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{ route('akomodasi.edit',$cat->id) }}"><i class="icon_set_1_icon-17"></i></a> <br>
                                            <form action="{{route('category.destroy', $cat->id)}}" method="POST">    
                                            @method('DELETE')
                                            @csrf
                                                <button type="submit" class="btn btn-danger" onclick="return myFunction();">
                                                    <i class="icon_set_1_icon-67"></i>
                                                </button>                                        
                                            </form>
                                            <!-- <a class="btn btn-danger" onclick="return myFunction();" href=""><i class="icon_set_1_icon-67"></i></a> -->
                                            <script>
                                            function myFunction() {
                                                if(!confirm("Anda yakin akan menghapus kategori ini?"))
                                                event.preventDefault();
                                            }
                                            </script>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="10" class="punyaku">
                                        Jumlah Data : {{ $category->total() }} <br>
                                        {{ $category->links("pagination::bootstrap-4") }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- End col lg-9 -->
                </div>
                <!-- End row -->
            </div>
        </div>
    </div>
    </div>

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
                            <th>Alamat</th>
                            <th>Tiket</th>
                            <th>Operasional</th>
                            <th>Tags/Kategori</th>
                            <th width="280px">Aksi</th>
                        </tr>
                        @php
                            $i = 0;
                        @endphp
                        @foreach($akomodasi as $des)
                        <tr class="table-bordered">
                            <td class="td-bordered">{{ ++$i }}</td>
                            <td class="td-bordered col-md-1">{{ $des->name }}</td>
                            <td class="td-bordered col-md-3">{{ $des->desc }}</td>
                            <td class="td-bordered col-md-1">
                            <!-- <img style="width: 30px;height: 30px;" src="{{ asset('images/icon/logo-whatsapp.svg') }}" alt=""> -->
                            <?php
                            $temp = str_replace("[","",$des->imageArray);
                            $temp = str_replace('"','',$temp);
                            $temp = str_replace("]","",$temp);
                            ?>
                            @foreach(explode(',',$temp) as $t)
                            <img src="{{URL::to('/')}}/img/akomodasi/{{$t}}"
                                style="max-width:70px;max-height:70px;" alt="{{$t}}">
                            @endforeach    
                            </td>
                            <td class="td-bordered col-md-2">{{ $des->address }}</td>
                            <td class="td-bordered">{{ $des->ticket }}</td>
                            <td class="td-bordered col-md-3">
                                <li>Sen-Jum : {{$des->seninJumat}}</li>
                                <li>Sab-Min : {{$des->sabtuMinggu}}</li>
                                <hr>
                                <li>Ramah Disabilitas : {{ $des->disabilitas == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                <li>Parkir Tersedia : {{ $des->parkiran == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                <li>Wifi Publik : {{ $des->wifi == '1' ? 'Tersedia' : 'Tidak' }}</li>
                            </td>
                            <td class="td-bordered col-md-1">
                            <?php
                            $temp = str_replace("[","",$des->tags);
                            $temp = str_replace('"','',$temp);
                            $temp = str_replace("]","",$temp);
                            ?>
                            @foreach(explode(',',$temp) as $img)
                            <li>{{$img}}</li>
                            @endforeach
                            </td>
                            <td class="td-bordered col-md-3" style="text-align: center;">
                                <form action="{{ route('akomodasi.destroy',$des->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('akomodasi.show',$des->id) }}"><i class="icon_set_1_icon-79"></i></a> <br>
                                    <a class="btn btn-primary" href="{{ route('akomodasi.edit',$des->id) }}"><i class="icon_set_1_icon-17"></i></a> <br>
                                    <form action="{{route('akomodasi.destroy', $des->id)}}" method="POST">    
                                    @method('DELETE')
                                    @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return myFunction();">
                                            <i class="icon_set_1_icon-67">
                                        </button>                                        
                                    </form>
                                    <!-- <a class="btn btn-danger" onclick="return myFunction();" href=""><i class="icon_set_1_icon-67"></i></a> -->
                                    <script>
                                    function myFunction() {
                                        if(!confirm("Anda yakin akan menghapus?"))
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


    <div class="container margin_60" id="kuliner" name="kuliner" #kuliner>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                <table class="table">
                        <tr class="text-center table-bordered">
                            <th colspan="8">Daftar Kuliner</th>
                            <th>
                            <a class="btn btn-primary" href="{{ url('kuliner/create') }}"> <i class="icon_set_1_icon-11"></i></a>
                            </th>
                        </tr>
                        <tr class="table-bordered">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Alamat</th>
                            <th>Tiket</th>
                            <th>Operasional</th>
                            <th>Tags/Kategori</th>
                            <th width="280px">Aksi</th>
                        </tr>
                        @php
                            $i = 0;
                        @endphp
                        @foreach($kuliner as $des)
                        <tr class="table-bordered">
                            <td class="td-bordered">{{ ++$i }}</td>
                            <td class="td-bordered col-md-1">{{ $des->name }}</td>
                            <td class="td-bordered col-md-3">{{ $des->desc }}</td>
                            <td class="td-bordered col-md-1">
                            <!-- <img style="width: 30px;height: 30px;" src="{{ asset('images/icon/logo-whatsapp.svg') }}" alt=""> -->
                            <?php
                            $temp = str_replace("[","",$des->imageArray);
                            $temp = str_replace('"','',$temp);
                            $temp = str_replace("]","",$temp);
                            ?>
                            @foreach(explode(',',$temp) as $t)
                            <img src="{{URL::to('/')}}/img/kuliner/{{$t}}"
                                style="max-width:70px;max-height:70px;" alt="{{$t}}">
                            @endforeach    
                            </td>
                            <td class="td-bordered col-md-2">{{ $des->address }}</td>
                            <td class="td-bordered">{{ $des->ticket }}</td>
                            <td class="td-bordered col-md-3">
                                <li>Sen-Jum : {{$des->seninJumat}}</li>
                                <li>Sab-Min : {{$des->sabtuMinggu}}</li>
                                <hr>
                                <li>Ramah Disabilitas : {{ $des->disabilitas == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                <li>Parkir Tersedia : {{ $des->parkiran == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                <li>Wifi Publik : {{ $des->wifi == '1' ? 'Tersedia' : 'Tidak' }}</li>
                            </td>
                            <td class="td-bordered col-md-1">
                            <?php
                            $temp = str_replace("[","",$des->tags);
                            $temp = str_replace('"','',$temp);
                            $temp = str_replace("]","",$temp);
                            ?>
                            @foreach(explode(',',$temp) as $img)
                            <li>{{$img}}</li>
                            @endforeach
                            </td>
                            <td class="td-bordered col-md-3" style="text-align: center;">
                                <form action="{{ route('kuliner.destroy',$des->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('kuliner.show',$des->id) }}"><i class="icon_set_1_icon-79"></i></a> <br>
                                    <a class="btn btn-primary" href="{{ route('kuliner.edit',$des->id) }}"><i class="icon_set_1_icon-17"></i></a> <br>
                                    <!-- <a class="btn btn-primary" href="{{ route('kuliner.destroy',$des->id) }}"><i class="icon_set_1_icon-17"></i></a> <br> -->
                                    <form action="{{route('kuliner.destroy', $des->id)}}" method="POST">    
                                    @method('DELETE')
                                    @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return myFunction();">
                                            <i class="icon_set_1_icon-67">
                                        </button>                                        
                                    </form>
                                    <!-- <a class="btn btn-danger" onclick="return myFunction();" href=""><i class="icon_set_1_icon-67"></i></a> -->
                                    <script>
                                    function myFunction() {
                                        if(!confirm("Anda yakin akan menghapus?"))
                                        event.preventDefault();
                                    }
                                    </script>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="10" class="punyaku">
                                Jumlah Data : {{ $kuliner->total() }} <br>
                                {{ $kuliner->links("pagination::bootstrap-4") }}
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
                <table class="table">
                        <tr class="text-center table-bordered">
                            <th colspan="8">Daftar Acara</th>
                            <th>
                            <a class="btn btn-primary" href="{{ url('acara/create') }}"> <i class="icon_set_1_icon-11"></i></a>
                            </th>
                        </tr>
                        <tr class="table-bordered">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Operasional</th>
                            <th>Tags/Kategori</th>
                            <th width="280px">Aksi</th>
                        </tr>
                        @php
                            $i = 0;
                        @endphp
                        @foreach($acara as $des)
                        <tr class="table-bordered">
                            <td class="td-bordered">{{ ++$i }}</td>
                            <td class="td-bordered col-md-1">{{ $des->name }}</td>
                            <td class="td-bordered col-md-3">{{ $des->desc }}</td>
                            <td class="td-bordered col-md-1">
                            <!-- <img style="width: 30px;height: 30px;" src="{{ asset('images/icon/logo-whatsapp.svg') }}" alt=""> -->
                            <?php
                            $temp = str_replace("[","",$des->imageArray);
                            $temp = str_replace('"','',$temp);
                            $temp = str_replace("]","",$temp);
                            ?>
                            @foreach(explode(',',$temp) as $t)
                            <img src="{{URL::to('/')}}/img/acara/{{$t}}"
                                style="max-width:70px;max-height:70px;" alt="{{$t}}">
                            @endforeach    
                            </td>
                            <td class="td-bordered col-md-2">{{ $des->desa }}, {{$des->kecamatan}} </td>
                            <td class="td-bordered">{{ $des->date }}</td>
                            <td class="td-bordered col-md-3">
                                <li>Ramah Disabilitas : {{ $des->disabilitas == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                <li>Parkir Tersedia : {{ $des->parkiran == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                <li>Wifi Publik : {{ $des->wifi == '1' ? 'Tersedia' : 'Tidak' }}</li>
                            </td>
                            <td class="td-bordered col-md-1">
                            <?php
                            $temp = str_replace("[","",$des->tags);
                            $temp = str_replace('"','',$temp);
                            $temp = str_replace("]","",$temp);
                            ?>
                            @foreach(explode(',',$temp) as $img)
                            <li>{{$img}}</li>
                            @endforeach
                            </td>
                            <td class="td-bordered col-md-3" style="text-align: center;">
                                <form action="{{ route('acara.destroy',$des->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('acara.show',$des->id) }}"><i class="icon_set_1_icon-79"></i></a> <br>
                                    <a class="btn btn-primary" href="{{ route('acara.edit',$des->id) }}"><i class="icon_set_1_icon-17"></i></a> <br>
                                    <!-- <a class="btn btn-primary" href="{{ route('acara.destroy',$des->id) }}"><i class="icon_set_1_icon-17"></i></a> <br> -->
                                    <form action="{{route('acara.destroy', $des->id)}}" method="POST">    
                                    @method('DELETE')
                                    @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return myFunction();">
                                            <i class="icon_set_1_icon-67">
                                        </button>                                        
                                    </form>
                                    <!-- <a class="btn btn-danger" onclick="return myFunction();" href=""><i class="icon_set_1_icon-67"></i></a> -->
                                    <script>
                                    function myFunction() {
                                        if(!confirm("Anda yakin akan menghapus?"))
                                        event.preventDefault();
                                    }
                                    </script>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="10" class="punyaku">
                                Jumlah Data : {{ $acara->total() }} <br>
                                {{ $acara->links("pagination::bootstrap-4") }}
                            </td>
                        </tr>
                    </table>
                </div>
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
                <table class="table">
                        <tr class="text-center table-bordered">
                            <th colspan="7">Daftar Fasilitas</th>
                            <th>
                            <a class="btn btn-primary" href="{{ url('fasum/create') }}"> <i class="icon_set_1_icon-11"></i></a>
                            </th>
                        </tr>
                        <tr class="table-bordered">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Alamat</th>
                            <th>Operasional</th>
                            <th>Tags/Kategori</th>
                            <th width="280px">Aksi</th>
                        </tr>
                        @php
                            $i = 0;
                        @endphp
                        @foreach($fasum as $des)
                        <tr class="table-bordered">
                            <td class="td-bordered">{{ ++$i }}</td>
                            <td class="td-bordered col-md-1">{{ $des->name }}</td>
                            <td class="td-bordered col-md-3">{{ $des->desc }}</td>
                            <td class="td-bordered col-md-1">
                            <!-- <img style="width: 30px;height: 30px;" src="{{ asset('images/icon/logo-whatsapp.svg') }}" alt=""> -->
                            <?php
                            $temp = str_replace("[","",$des->imageArray);
                            $temp = str_replace('"','',$temp);
                            $temp = str_replace("]","",$temp);
                            ?>
                            @foreach(explode(',',$temp) as $t)
                            <img src="{{URL::to('/')}}/img/fasum/{{$t}}"
                                style="max-width:70px;max-height:70px;" alt="{{$t}}">
                            @endforeach    
                            </td>
                            <td class="td-bordered col-md-2">{{ $des->address }}</td>
                            <td class="td-bordered col-md-3">
                                <li>Buka 24 Jam : {{ $des->openAllDay == '1' ? 'Ya' : 'Tidak' }}</li>
                                <li>Ramah Disabilitas : {{ $des->disabilitas == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                <li>Parkir Tersedia : {{ $des->parkiran == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                <li>Wifi Publik : {{ $des->wifi == '1' ? 'Tersedia' : 'Tidak' }}</li>
                            </td>
                            <td class="td-bordered col-md-1">
                            <?php
                            $temp = str_replace("[","",$des->tags);
                            $temp = str_replace('"','',$temp);
                            $temp = str_replace("]","",$temp);
                            ?>
                            @foreach(explode(',',$temp) as $img)
                            <li>{{$img}}</li>
                            @endforeach
                            </td>
                            <td class="td-bordered col-md-3" style="text-align: center;">
                                <form action="{{ route('fasum.destroy',$des->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('fasum.show',$des->id) }}"><i class="icon_set_1_icon-79"></i></a> <br>
                                    <a class="btn btn-primary" href="{{ route('fasum.edit',$des->id) }}"><i class="icon_set_1_icon-17"></i></a> <br>
                                    <!-- <a class="btn btn-primary" href="{{ route('fasum.destroy',$des->id) }}"><i class="icon_set_1_icon-17"></i></a> <br> -->
                                    <form action="{{route('fasum.destroy', $des->id)}}" method="POST">    
                                    @method('DELETE')
                                    @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return myFunction();">
                                            <i class="icon_set_1_icon-67">
                                        </button>                                        
                                    </form>
                                    <!-- <a class="btn btn-danger" onclick="return myFunction();" href=""><i class="icon_set_1_icon-67"></i></a> -->
                                    <script>
                                    function myFunction() {
                                        if(!confirm("Anda yakin akan menghapus?"))
                                        event.preventDefault();
                                    }
                                    </script>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="10" class="punyaku">
                                Jumlah Data : {{ $fasum->total() }} <br>
                                {{ $fasum->links("pagination::bootstrap-4") }}
                            </td>
                        </tr>
                    </table>
                </div>
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