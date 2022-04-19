

@extends('layouts.app')
@section('title')
<title>Admin Page | Tambah Akomodasi</title>
@endsection
@section('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400">
	<div class="parallax-content-1">
		<div class="animated fadeInDown">
			<h1>Admin Page</h1>
            <p>Edit Akomodasi</p>
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
                <div class="row">
                    <div class="col-lg-11">
                        <h2>Edit Akomodasi</h2>
                    </div>
                    <div class="col-lg-1">
                        <a class="btn btn-primary" href="{{ url('/kuliner/admin') }}"> Back</a>
                    </div>
                </div>
            
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('kuliner.update', $kuliner->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="tName">Nama:</label>
                        <input type="text" class="form-control" id="tName" placeholder="Masukkan Nama" name="tName" value="{{$kuliner->name}}">
                    </div>
                    <div class="form-group">
                        <label for="tDesc">Deskripsi:</label>
                        <textarea class="form-control" id="tDesc" name="tDesc" rows="3" placeholder="Masukkan Deskripsi" value="{{$kuliner->desc}}">{{$kuliner->desc}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Foto:</label>
                        <input class="form-control" type="file" id="image" name="image" value="{{$kuliner->foto}}"/>
                    </div>
                    <div class="form-group">
                        <label for="tVideo">Youtube Video:</label>
                        <input type="text" class="form-control" id="tVideo" placeholder="Masukkan Url Video" name="tVideo" value="{{$kuliner->video}}">
                    </div>
                    <div class="form-group">
                        <label for="tAddress">Alamat:</label>
                        <textarea class="form-control" id="tAddress" name="tAddress" rows="3" placeholder="Masukkan Alamat" value="{{$kuliner->address}}">{{$kuliner->address}}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="tLong">Longitude:</label>
                                <input type="text" class="form-control" id="tLong" placeholder="Masukkan Longitude" name="tLong" value="{{$kuliner->long}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="tLat">Latitude:</label>
                                <input type="text" class="form-control" id="tLat" placeholder="Masukkan Latitude" name="tLat" value="{{$kuliner->lat}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tTiket">Tiket:</label>
                        <input type="text" class="form-control" id="tTiket" placeholder="Masukkan Harga Tiket" name="tTicket" value="{{$kuliner->ticket}}">
                        <!-- <table class="table" id="dynamicAddRemove">
                            <tr>
                                <td>
                                    <input type="text" name="addMoreInputFields[0][subject]" placeholder="Masukkan Kategori" class="form-control" />
                                </td>
                                <td>
                                    <input type="number" name="addMoreInputFields1[0][subject]" placeholder="Masukkan Harga tanpa titik" class="form-control" />
                                </td>
                                <td>
                                    <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Tambah Kategori</button>
                                </td>
                            </tr>
                        </table> -->
                    </div>

                    <div class="form-group">
                        <label for="tOther">Hari Operasional: </label>
                        <label><input type="checkbox" name="days[]" value="sen"
                        {{ str_contains($kuliner->days, 'sen') ? "checked" : "" }}> Senin</label>
                        <label><input type="checkbox" name="days[]" value="sel"
                        {{ str_contains($kuliner->days, 'sel') ? "checked" : "" }}> Selasa</label>
                        <label><input type="checkbox" name="days[]" value="rab" 
                        {{ str_contains($kuliner->days, 'rab') ? "checked" : "" }}> Rabu</label>
                        <label><input type="checkbox" name="days[]" value="kam"
                        {{ str_contains($kuliner->days, 'kam') ? "checked" : "" }}> Kamis</label>
                        <label><input type="checkbox" name="days[]" value="jum"
                        {{ str_contains($kuliner->days, 'jum') ? "checked" : "" }}> Jumat</label>
                        <label><input type="checkbox" name="days[]" value="sab"
                        {{ str_contains($kuliner->days, 'sab') ? "checked" : "" }}> Sabtu</label>
                        <label><input type="checkbox" name="days[]" value="min"
                        {{ str_contains($kuliner->days, 'min') ? "checked" : "" }}> Minggu</label>
                    </div>
                
                    <!-- <div class="form-group">
                        <label for="tTiket">Jam Operasional:</label>
                        <div class="row">
                            <div class="col-lg-2">
                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" id="cSenin" value="option1">
                                <label class="form-check-label" for="cSenin">Senin</label>
                            </div>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="tSenin" placeholder="Cth: 09:00-17:00" name="tSenin">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" id="cSelasa" value="option1">
                                <label class="form-check-label" for="cSelasa">Selasa</label>
                            </div>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="tSelasa" placeholder="Cth: 09:00-17:00" name="tSelasa">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" id="cRabu" value="option1">
                                <label class="form-check-label" for="cRabu">Rabu</label>
                            </div>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="tRabu" placeholder="Cth: 09:00-17:00" name="tRabu">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" id="cKamis" value="option1">
                                <label class="form-check-label" for="cKamis">Kamis</label>
                            </div>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="tKamis" placeholder="Cth: 09:00-17:00" name="tKamis">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" id="cJumat" value="option1">
                                <label class="form-check-label" for="cJumat">Jumat</label>
                            </div>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="tJumat" placeholder="Cth: 09:00-17:00" name="tJumat">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" id="cSabtu" value="option1">
                                <label class="form-check-label" for="cSabtu">Sabtu</label>
                            </div>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="tSabtu" placeholder="Cth: 09:00-17:00" name="tSabtu">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" id="cMinggu" value="option1">
                                <label class="form-check-label" for="cMinggu">Minggu</label>
                            </div>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="tMinggu" placeholder="Cth: 09:00-17:00" name="tMinggu">
                            </div>
                        </div>            
                    </div> -->

                    <div class="form-group">
                        <label for="tOther">Lainnya: </label>
                        <div class="form-group form-check form-check-inline">
                            @if($kuliner->isHeadline == "1") 
                                <input class="form-check-input" type="checkbox" id="cHeadline" name="cHeadline" value="1" checked>
                            @else
                                <input class="form-check-input" type="checkbox" id="cHeadline" name="cHeadline" value="1">
                            @endif
                            <label class="form-check-label" for="cHeadline">Tampilkan pada halaman Utama</label>
                        </div>
                        <div class="form-group form-check form-check-inline">
                            @if($kuliner->isIcon == "1") 
                                <input class="form-check-input" type="checkbox" id="cIcon" name="cIcon" value="1" checked>
                            @else
                            <input class="form-check-input" type="checkbox" id="cIcon" name="cIcon" value="1">
                            @endif
                            <label class="form-check-label" for="cIcon">Jadikan Icon Kategori</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- End col lg-9 -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</main>
<!-- End main -->
@endsection
@section('footer-scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Masukkan Kategori" class="form-control" /></td><td><input type="number" name="addMoreInputFields1[' + i + 
            '][subject]" placeholder="Masukkan Harga tanpa titik" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
@endsection