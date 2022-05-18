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


    
    
    <!-- <aside class="col-lg-2"> -->
            <!-- <div class="box_style_cat">
                <ul id="cat_nav">
                    <li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>Kategori <span>(141)</span></a></li>
                    <li><a href="all_tours_list.html"><i class="icon_set_1_icon-24"></i> Tempat <span>(141)</span></a></li>
                    <li><a href="all_tours_list.html"><i class="icon_set_1_icon-50"></i> Belanja <span>(141)</span></a></li>
                    <li><a href="all_tours_list.html"><i class="icon_set_1_icon-44"></i> Budaya <span>(141)</span></a></li>
                    <li><a href="all_tours_list.html"><i class="icon_set_1_icon-40"></i> Olahraga <span>(141)</span></a></li>
                    <li><a href="all_tours_list.html"><i class="icon_set_1_icon-3"></i> Rekreasi <span>(141)</span></a></li>
                    <li><a href="all_tours_list.html"><i class="icon_set_1_icon-2"></i> Religi <span>(141)</span></a></li>
                    <li><a href="all_tours_list.html"><i class="icon_set_1_icon-4"></i> Sejarah <span>(141)</span></a></li>
                </ul>
            </div> -->
        <!-- </aside> -->
    <div class="container margin_60">
        <div class="main_title">
            <h2><span>Navigasi</span> Halaman</h2>
        </div>
        <div class="row add_bottom_45">
            <div class="col-lg-3 other_tours">
                <ul>
                    <li><a href="javascript:void(0)" class="smooth-goto1"><i class="icon_set_1_icon-65"></i>Kategori<span class="other_tours_price">{{ $category->total() }}</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 other_tours">
                <ul>
                    <li><a href="javascript:void(0)" class="smooth-goto2"><i class="icon_set_1_icon-41"></i>Tempat<span class="other_tours_price">{{ $tempat->total() }}</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 other_tours">
                <ul>
                    <li><a href="javascript:void(0)" class="smooth-goto3"><i class="icon_set_1_icon-85"></i>Review<span class="other_tours_price">{{ $review->total() }}</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 other_tours">
                <ul>
                    <li><a href="javascript:void(0)" class="smooth-goto4"><i class="icon_set_1_icon-38"></i>Headline<span class="other_tours_price">{{ $headline->total() }}</span></a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 other_tours">
                <ul>
                    <li><a href="javascript:void(0)" class="smooth-goto5"><i class="icon_set_1_icon-53"></i>Acara<span class="other_tours_price">{{ $acara->total() }}</span></a>
                    </li>
                </ul>
            </div>
            
        </div>
        <!-- End row -->
    </div>
    <div class="container margin_60" id="kategori" #kategori>
        <div class="row">
            <div class="col-lg-12">
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
                                            <a href="{{URL::to('/')}}/img/category/{{$cat->image}}" target="_blank" rel="noopener noreferrer">
                                            <img src="{{URL::to('/')}}/img/category/{{$cat->image}}"
                                            style="max-width:70px;max-height:70px;" alt="{{$cat->image}}">
                                            </a>
                                        </td>
                                        <td class="td-bordered col-md-3">
                                            <i class="{{$cat->icon}}" style="zoom:2;"></i> {{$cat->icon}}</td>
                                        <td class="td-bordered col-md-5">

                                        @foreach($subcategory as $subcat)
                                                @if($cat->id == $subcat->category)
                                                <form action="{{route('subcategory.destroy', $subcat->id)}}" method="POST">    
                                                @method('DELETE')
                                                @csrf
                                                <li>
                                                    <i class="{{$subcat->icon}}" style="zoom:1.5;"></i> {{$subcat->name}}  |  
                                                    <a class="btn btn-primary" href="{{ route('subcategory.edit',$subcat->id) }}">
                                                        <i class="icon_set_1_icon-17"></i>
                                                    </a>  |  
                                                
                                                    <button type="submit" class="btn btn-danger" onclick="return myFunction1();">
                                                        <i class="icon_set_1_icon-67"></i>
                                                        <!-- <i class="icon_set_1_icon-67"></i> -->
                                                    </button>                             
                                                    <script>
                                                        function myFunction1() {
                                                    if(!confirm("Anda yakin akan menghapus sub kategori ini?"))
                                                    event.preventDefault();
                                                }
                                                    </script>           
                                                
                                                </li>
                                                </form>
                                                @endif
                                            @endforeach
                                            <br>
                                            <li>
                                                <a href="subcategory/create?cat={{$cat->id}}">
                                                    Tambah SubKategori
                                                </a>
                                                
                                            </li>
                                            <div class="row">
                                            <!-- @foreach($subcategory as $subcat)
                                                @if($cat->id == $subcat->category)
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                        <i class="{{$subcat->icon}}" style="zoom:2;"></i> {{$subcat->name}} 
                                                    <i class="{{$subcat->icon}}" style="zoom:2;"></i> {{$subcat->name}} 
                                                        <i class="{{$subcat->icon}}" style="zoom:2;"></i> {{$subcat->name}} 
                                                        </div>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                
                                                                <form action="{{route('subcategory.destroy', $subcat->id)}}" method="POST">    
                                                            <form action="{{route('subcategory.destroy', $subcat->id)}}" method="POST">    
                                                                <form action="{{route('subcategory.destroy', $subcat->id)}}" method="POST">    
                                                                @method('DELETE')
                                                                @csrf
                                                                <a class="btn btn-primary" href="{{ route('subcategory.edit',$subcat->id) }}">
                                                                    <i class="icon_set_1_icon-17"></i>
                                                                </a>
                                                                    <button type="submit" class="btn btn-danger" onclick="return myFunction1();">
                                                                        <i class="icon_set_1_icon-67"></i>
                                                                    </button>                                        
                                                                </button>                                        
                                                                    </button>                                        
                                                                </form>
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
                                            @endforeach -->
                                                <!-- <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header" style="text-align:center;">
                                                            <a href="subcategory/create">
                                                                <button class="btn btn-primary">
                                                                    <i class="icon_set_1_icon-11"></i>
                                                                </button>    
                                                            </button>    
                                                                </button>    
                                                            </a>
                                                        </div>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item"  style="text-align:center;">
                                                                Tambah SubKategori
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div> -->
                                            </div>
                                            
                                        </td>

                                        <!-- <img style="width: 30px;height: 30px;" src="{{ asset('images/icon/logo-whatsapp.svg') }}" alt=""> -->
                                        <td class="td-bordered col-md-1" style="text-align: center;">
                                            <form action="{{ route('category.destroy',$cat->id) }}" method="POST">
                                                <a class="btn btn-primary" href="{{ route('category.edit',$cat->id) }}"><i class="icon_set_1_icon-17"></i></a> <br>
                                                <form action="{{route('category.destroy', $cat->id)}}" method="POST">    
                                            <form action="{{route('category.destroy', $cat->id)}}" method="POST">    
                                                <form action="{{route('category.destroy', $cat->id)}}" method="POST">    
                                                @method('DELETE')
                                                @csrf
                                                    <button type="submit" class="btn btn-danger" onclick="return myFunction();">
                                                        <i class="icon_set_1_icon-67"></i>
                                                    </button>                                        
                                                </button>                                        
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
                                            {{$category->appends(['tempat' => $tempat->currentPage()])->links("pagination::bootstrap-4")}}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- End col lg-9 -->
                    </div>
                    <!-- End row -->
                </div>
                <hr>
                <div class="" id="tempat" #tempat>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                            <table class="table">
                                    <tr class="text-center table-bordered">
                                        <th colspan="7">Daftar Tempat</th>
                                        <th>
                                        <a class="btn btn-primary" href="{{ url('tempat/create') }}"> <i class="icon_set_1_icon-11"></i></a>
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

                                        <!-- <th>No</th> -->
                                        <th>Nama</th>
                                        <th>Gambar Utama</th>
                                        <th>Desc</th>
                                        <th>MapUrl</th>
                                        <!-- <th>Ticket</th> -->
                                        <th>Rating & Tiket</th>
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
                                    @foreach($tempat as $temp)
                                    <tr class="table-bordered">
                                        <!-- <td class="td-bordered col-sm-1">{{ ++$i }}</td> -->
                                        <td class="td-bordered col-md-2">{{ $temp->name }}</td>
                                        <td class="col-md-1">
                                            <a href="{{URL::to('/')}}/img/tempat/{{$temp->image}}" target="_blank" rel="noopener noreferrer">
                                            <img src="{{URL::to('/')}}/img/tempat/{{$temp->image}}"
                                            style="max-width:70px;max-height:70px;" alt="{{$temp->image}}">
                                            </a>
                                        </td>
                                        <td class="td-bordered col-md-3">
                                            <p class="collapse" id="collapseExample{{$i}}" aria-expanded="false">
                                                {{ $temp->desc }}
                                            </p>
                                            <a role="button" class="collapsed btn btn-primary" data-toggle="collapse" href="#collapseExample{{$i}}" aria-expanded="false" aria-controls="collapseExample"></a>
                                        </td>
                                        <style>
                                        #collapseExample{{{$i}}}.collapse:not(.show) {
                                            display: block;
                                            height: 2.5rem;
                                            overflow: hidden;
                                        }
                                        #collapseExample{{{$i}}}.collapsing {
                                            height: 3rem;
                                        }
                                        #module a.collapsed::after {
                                            content: '+ Show More';
                                        }
                                        #module a:not(.collapsed)::after {
                                            content: '- Show Less';
                                        }
                                        </style>

                                        <td class="td-bordered col-md-1">
                                            <a href="{{ $temp->mapUrl }}" target="_blank" rel="noopener noreferrer">Buka di Map</a>
                                        </td>
                                        <td class="td-bordered col-md-1">
                                            <b>{{ $temp->rating }}</b>/5
                                            <hr>
                                            Rp {{strrev(chunk_split(strrev($temp->ticket), 3, '.'))}}
                                            <br>
                                        </td>
                                        <td class="td-bordered col-md-1">
                                            {{ $temp->tags }}
                                        </td>
                                        <td class="td-bordered col-md-4">
                                            <li>Sen-Jum : {{$temp->seninJumat}}</li>
                                            <li>Sab-Min : {{$temp->sabtuMinggu}}</li>
                                            <hr>
                                            <li>Ramah Disabilitas : {{ $temp->disabilities == '1' ? 'Ya' : 'Tidak' }}</li>
                                            <li>Parkir Tersedia : {{ $temp->parkir == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                            <li>Wifi Publik : {{ $temp->wifi == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                        </td>
                                        <!-- <img style="width: 30px;height: 30px;" src="{{ asset('images/icon/logo-whatsapp.svg') }}" alt=""> -->
                                        <td class="td-bordered col-md-1" style="text-align: center;">
                                            <form action="{{ route('tempat.destroy',$temp->id) }}" method="POST">
                                                <a class="btn btn-primary" href="{{ route('tempat.edit',$temp->id) }}"><i class="icon_set_1_icon-17"></i></a> <br>
                                                <form action="{{route('tempat.destroy', $temp->id)}}" method="POST">    
                                                @method('DELETE')
                                                @csrf
                                                    <button type="submit" class="btn btn-danger" onclick="return myFunction();">
                                                        <i class="icon_set_1_icon-67"></i>
                                                    </button>                                        
                                                </button>                                        
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
                                            Jumlah Data : {{ $tempat->total() }} 
                                            {{$tempat->appends(['category' => $category->currentPage()])->links("pagination::bootstrap-4")}}
                                            <!-- {{ $category->links("pagination::bootstrap-4") }} -->
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- End col lg-9 -->
                    </div>
                    <!-- End row -->
                </div>
                <hr>
                <div class="" id="review" #review>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                            <table class="table">
                                    <tr class="text-center table-bordered">
                                        <th colspan="7">Daftar Review</th>
                                        <!-- <th>
                                        <a class="btn btn-primary" href="{{ url('tempat/create') }}"> <i class="icon_set_1_icon-11"></i></a>
                                        </th> -->
                                    </tr>
                                    <tr class="table-bordered">
                                        <!-- <th>No</th> -->
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Tempat</th>
                                        <th>Pesan</th>
                                        <th>Rating</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach($review as $rev)
                                    <tr class="table-bordered">
                                        <!-- <td class="td-bordered col-sm-1">{{ ++$i }}</td> -->
                                        <td class="td-bordered col-md-2">{{ $rev->name }}</td>
                                        <td class="col-md-1">
                                            {{ $rev->email }}
                                        </td>
                                        <td class="col-md-1">
                                            {{ $rev->idTempat }}
                                        </td>
                                        <td class="td-bordered col-md-3">
                                            <p class="collapse" id="collapseExampleTempat{{$i}}" aria-expanded="false">
                                                {{ $rev->message }}
                                            </p>                                       
                                            <a role="button" class="collapsed btn btn-primary" data-toggle="collapse" href="#collapseExampleTempat{{$i}}" aria-expanded="false" aria-controls="collapseExampleTempat"></a>     
                                        </td>

                                        <style>
                                        #collapseExampleTempat{{{$i}}}.collapse:not(.show) {
                                            display: block;
                                            height: 2.5rem;
                                            overflow: hidden;
                                        }
                                        #collapseExampleTempat{{{$i}}}.collapsing {
                                            height: 3rem;
                                        }
                                        #module a.collapsed::after {
                                            content: '+ Show More';
                                        }
                                        #module a:not(.collapsed)::after {
                                            content: '- Show Less';
                                        }
                                        </style>
                                        <td class="td-bordered col-md-1">
                                            {{ $rev->vote }}/10
                                        </td>
                                        <!-- <td class="td-bordered col-md-2">
                                            @if($rev->reply == "")
                                            <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview" onclick="add('{{$rev->id}}','{{$rev->message}}','{{$rev->name}}');">Tambahkan Balasan</a>
                                            <script>
                                                function add(id, message, name) {
                                                    console.log(id);
                                                    document.getElementById("reviewer_id").value = id;
                                                    document.getElementById("reviewer_name").value = name;
                                                    document.getElementById("reviewer_message").value = message;

                                                }
                                            </script>
                                            @endif
                                            @if($rev->reply != "")
                                            {{ $rev->balasan }}
                                            @endif
                                        </td> -->
                                        <td class="td-bordered col-md-2">
                                            <h6>
                                            {{ $rev->created_at }}
                                            </h6>
                                        </td>
                                        <td class="td-bordered col-md-2">
                                            <h6>
                                            <form action="{{route('review.destroy', $rev->id)}}" method="POST">    
                                                @method('DELETE')
                                                @csrf
                                                    <button type="submit" class="btn btn-danger" onclick="return myFunction();">
                                                        <i class="icon_set_1_icon-67"></i>
                                                    </button>                                        
                                                </button>                                        
                                                    </button>                                        
                                                </form>
                                                <!-- <a class="btn btn-danger" onclick="return myFunction();" href=""><i class="icon_set_1_icon-67"></i></a> -->
                                                <script>
                                                function myFunction() {
                                                    if(!confirm("Anda yakin akan menghapus kategori ini?"))
                                                    event.preventDefault();
                                                }
                                                </script>
                                            </h6>
                                        </td>
                                        
                                        
                                        <!-- <img style="width: 30px;height: 30px;" src="{{ asset('images/icon/logo-whatsapp.svg') }}" alt=""> -->
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="10" class="punyaku">
                                            Jumlah Data : {{ $tempat->total() }} 
                                            {{$tempat->appends(['category' => $category->currentPage()])->links("pagination::bootstrap-4")}}
                                            <!-- {{ $category->links("pagination::bootstrap-4") }} -->
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- End col lg-9 -->
                    </div>
                    <!-- End row -->
                </div>
                <hr>
                <div class="" id="headline" #headline>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                            <table class="table">
                                    <tr class="text-center table-bordered">
                                        <th colspan="4">Daftar Headline</th>
                                        <th>
                                        <a class="btn btn-primary" href="{{ url('headline/create') }}"> <i class="icon_set_1_icon-11"></i></a>
                                        </th>
                                    </tr>
                                    <tr class="table-bordered">
                                        <!-- <th>No</th> -->
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>SubTitle</th>
                                        <th>Alignment</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach($headline as $head)
                                    <tr class="table-bordered">
                                        <!-- <td class="td-bordered col-sm-1">{{ ++$i }}</td> -->
                                        <td class="td-bordered col-md-2">{{ $head->title }}</td>
                                        <td class="td-bordered col-md-2">
                                            <a href="{{URL::to('/')}}/img/headline/{{$head->image}}" target="_blank" rel="noopener noreferrer">
                                            <img src="{{URL::to('/')}}/img/headline/{{$head->image}}"
                                            style="max-width:70px;max-height:70px;" alt="{{$head->image}}">
                                            </a>
                                        </td>
                                        
                                        <td class="td-bordered col-md-2">{{ $head->subtitle }}</td>
                                        <td class="td-bordered col-md-2">
                                            @if($head->alignment == "text-right")
                                            Rata Kanan
                                            @endif
                                            @if($head->alignment == "text-left")
                                            Rata Kiri
                                            @endif
                                            @if($head->alignment == "text-center")
                                            Rata Tengah
                                            @endif
                                        </td>
                                        <td class="td-bordered col-md-1" style="text-align: center;">
                                            <form action="{{ route('headline.destroy',$head->id) }}" method="POST">
                                                <a class="btn btn-primary" href="{{ route('headline.edit',$head->id) }}"><i class="icon_set_1_icon-17"></i></a>
                                                <form action="{{route('headline.destroy', $head->id)}}" method="POST">    
                                            <form action="{{route('headline.destroy', $head->id)}}" method="POST">    
                                                <form action="{{route('headline.destroy', $head->id)}}" method="POST">    
                                                @method('DELETE')
                                                @csrf
                                                    <button type="submit" class="btn btn-danger" onclick="return myFunction();">
                                                        <i class="icon_set_1_icon-67"></i>
                                                    </button>                                        
                                                </button>                                        
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
                                            Jumlah Data : {{ $tempat->total() }} 
                                            {{$tempat->appends(['category' => $category->currentPage()])->links("pagination::bootstrap-4")}}
                                            <!-- {{ $category->links("pagination::bootstrap-4") }} -->
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- End col lg-9 -->
                    </div>
                    <!-- End row -->
                </div>
                <hr>
                <div class="" id="acara" #acara>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                            <table class="table">
                                    <tr class="text-center table-bordered">
                                        <th colspan="6">Daftar Acara</th>
                                        <th>
                                        <a class="btn btn-primary" href="{{ url('acara/create') }}"> <i class="icon_set_1_icon-11"></i></a>
                                        </th>
                                    </tr>
                                    <tr class="table-bordered">
                                        <!-- <th>No</th> -->
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Foto</th>
                                        <th>Alamat</th>
                                        <th>Tanggal</th>
                                        <th>Operasional</th>
                                        <th width="280px">Aksi</th>
                                    </tr>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach($acara as $des)
                                    <tr class="table-bordered">
                                        <!-- <td class="td-bordered">{{ ++$i }}</td> -->
                                        <td class="td-bordered col-md-1">{{ $des->name }}</td>
                                        <td class="td-bordered col-md-2">{{ $des->desc }}</td>
                                        <td class="td-bordered col-md-1">
                                        <!-- <img style="width: 30px;height: 30px;" src="{{ asset('images/icon/logo-whatsapp.svg') }}" alt=""> -->
                                        <?php
                                        $temp = str_replace("[","",$des->imageArray);
                                        $temp = str_replace('"','',$temp);
                                        $temp = str_replace("]","",$temp);
                                        ?>
                                        @foreach(explode(',',$temp) as $t)
                                        <a href="{{URL::to('/')}}/img/acara/{{$t}}" target="_blank" rel="noopener noreferrer">
                                        <img src="{{URL::to('/')}}/img/acara/{{$t}}"
                                            style="max-width:70px;max-height:70px;" alt="{{$t}}">
                                        </a>
                                        @endforeach    
                                        </td>
                                        <td class="td-bordered col-md-2">{{ $des->desa }}, {{$des->kecamatan}} </td>
                                        <td class="td-bordered col-md-3">
                                            {{ $des->start }} - {{ $des->end }}
                                        </td>
                                        <td class="td-bordered col-md-3">
                                            <li>Ramah Disabilitas : {{ $des->disabilitas == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                            <li>Parkir Tersedia : {{ $des->parkiran == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                            <li>Wifi Publik : {{ $des->wifi == '1' ? 'Tersedia' : 'Tidak' }}</li>
                                        </td>
                                        
                                        <td class="td-bordered col-md-1" style="text-align: center;">
                                            <form action="{{ route('acara.destroy',$des->id) }}" method="POST">
                                                    <a class="btn btn-primary" href="{{ route('acara.edit',$des->id) }}">
                                                        <i class="icon_set_1_icon-17"></i>
                                                    </a> <br>
                                                <form action="{{route('acara.destroy', $des->id)}}" method="POST">    
                                                @method('DELETE')
                                                @csrf
                                                    <button type="submit" class="btn btn-danger" onclick="return myFunction();">
                                                        <i class="icon_set_1_icon-67"></i>
                                                    </button>                                        
                                                </button>                                        
                                                    </button>                                        
                                                </form>
                                                <!-- <a class="btn btn-danger" onclick="return myFunction();" href=""><i class="icon_set_1_icon-67"></i></a> -->
                                                <script>
                                                function myFunction() {
                                                    if(!confirm("Anda yakin akan menghapus acara ini?"))
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
            </div>
        </div>
    </div>

    

    <!-- End container -->
</main>
<!-- End main -->
@endsection
<div id="toTop"></div><!-- Back to top button -->
@section('additionalHead')

@endsection
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myReviewLabel">Tambahkan Balasan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
                    <form action="{{ route('addReply') }}" method="post">
                    @csrf
                        <input name="reviewer_id" id="reviewer_id" type="hidden" placeholder="Nama" class="form-control" disabled>
                        <div class="row">
							<div class="col-md-2">
								<div class="form-group">
									Kepada:
								</div>
							</div>
							<div class="col-md-10">
								<div class="form-group">
                                <input name="reviewer_name" id="reviewer_name" type="text" placeholder="Nama" class="form-control" disabled>
								</div>
							</div>
						</div>
                        <div class="row">
							<div class="col-md-2">
								<div class="form-group">
									Isi Review:
								</div>
							</div>
							<div class="col-md-10">
								<div class="form-group">
                                <input name="reviewer_message" id="reviewer_message" type="text" placeholder="Nama" class="form-control" disabled>
								</div>
							</div>
						</div>
                        <div class="row">
							<div class="col-md-2">
								<div class="form-group">
									Balasan:
								</div>
							</div>
							<div class="col-md-10">
								<div class="form-group">
                                <textarea name="review_text" id="review_text" class="form-control" style="height:100px" placeholder="Masukkan balasan"></textarea>
								</div>
							</div>
						</div>
						<!-- End row -->
                        <hr>
						<!-- <div class="form-group">
							<input type="text" id="verify_review" class=" form-control" placeholder="Verifikasi diri anda. 3 + 1 =">
						</div> -->
						<input type="submit" value="Submit" class="btn_1" id="submit-review">
					</form>
				</div>
			</div>
		</div>
	</div>