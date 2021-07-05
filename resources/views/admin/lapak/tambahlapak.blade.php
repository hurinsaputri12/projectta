@extends('master.master')

@section('title')
 <title>Tambah Lapak Baca</title>
@endsection

@section('content')
        <!-- Begin Page Content -->
        <div class="content mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Tambah Lapak Baca</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('admin.lapak.storelapak')}}" method="post" enctype="multipart/form-data"class="form-horizontal">
                            @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="tanggal" placeholder="Tanggal" class="form-control"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Kegiatan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_kegiatan" placeholder=" Nama Kegiatan" class="form-control"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Relawan</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="jumlah_relawan" placeholder="Jumlah Relawan" class="form-control"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lokasi</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="lokasi" placeholder="Lokasi" class="form-control"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Latitude</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="lat" name="latitude" placeholder="Latitude" class="form-control"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Longitude</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="leng" name="longitude" placeholder="Longitude" class="form-control"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Peta Lokasi</label></div>
                            <div class="col-12 col-md-9"><div id = "mapInput" style="width: 100%; height: 320px; border-radius: 3px;"></div></div>
                        </div>

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Simpan
                        </button>
                        <a href="{{route('admin.lapak.lapak')}}" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Batal
                        </a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
    </div>

<!-- End of Main Content -->
@endsection

@section('js')

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv-h2II7DbFQkpL9pDxNRq3GWXqS5Epts&callback=initialize" type="text/javascript"></script>

{{-- Input Maps --}}
    <script>
        function initialize() {
        //Cek Support Geolocation
        if(navigator.geolocation){
        //Mengambil Fungsi golocation
        navigator.geolocation.getCurrentPosition(lokasi);
        }
        else{
        swal("Maaf Browser tidak Support HTML 5");
        }
        //Variabel Marker
        var marker;
        function taruhMarker(peta, posisiTitik){

            if( marker ){
            // pindahkan marker
            marker.setPosition(posisiTitik);
            } else {
            // buat marker baru
            marker = new google.maps.Marker({
                position: posisiTitik,
                map: peta,
                icon : 'https://img.icons8.com/plasticine/40/000000/marker.png',
            });
            }

        }
        //Buat Peta
        var peta = new google.maps.Map(document.getElementById("mapInput"), {
                center: {lat: -8.408698, lng: 114.2339090},
                zoom: 9
            });
        //Fungsi untuk geolocation
        function lokasi(position){
            //Mengirim data koordinat ke form input
            document.getElementById("lat").value = position.coords.latitude;
            document.getElementById("leng").value = position.coords.longitude;
            //Current Location
            var lat = position.coords.latitude;
            var long = position.coords.longitude;
            var latlong = new google.maps.LatLng(lat, long);
            //Current Marker
            var currentMarker = new google.maps.Marker({
                    position: latlong,
                    icon : 'https://img.icons8.com/plasticine/40/000000/user-location.png',
                    map: peta,
                    title: "Anda Disini"
                });
            //Membuat Marker Map dengan Klik
            var latLng = new google.maps.LatLng(-8.408698,114.2339090);

            var addMarkerClick = google.maps.event.addListener(peta,'click',function(event) {


                taruhMarker(this, event.latLng);

                //Kirim data ke form input dari klik
                document.getElementById("lat").value = event.latLng.lat();
                document.getElementById("leng").value = event.latLng.lng();

            });
            }

        }
    </script>
@endsection
