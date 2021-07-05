@extends('master.master')

@section('title')
 <title>Detail Lapak Baca</title>
@endsection

@section('content')
        <!-- Begin Page Content -->
        <div class="content mt-3">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Detail Lapak Baca</strong>
                    </div>

                    <div class="card-body">
                      <table>
                        <tr>
                          <td><b>Nama Kegiatan</b></td>
                          <td class="pl-4">{{$lapak->nama_kegiatan}}</td>
                        </tr>
                        <tr>
                          <td><b>Tanggal</b></td>
                          <td class="pl-4">{{\Carbon\Carbon::parse($lapak->tanggal)->isoFormat('dddd, D MMMM Y') }}</td>
                        </tr>
                        <tr>
                        <tr>
                          <td><b>Jumlah Relawan</b></td>
                          <td class="pl-4">{{$lapak->jumlah_relawan}}</td>
                        </tr>
                        <tr>
                          <td><b>Lokasi</b></td>
                          <td class="pl-4">{{$lapak->lokasi}}i</td>
                        </tr>
                      </table>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div id="map" style="width: 100%; height: 320px; border-radius: 3px;"></div>
            </div>
</div>
<!-- End of Main Content -->
@endsection

@section('js')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv-h2II7DbFQkpL9pDxNRq3GWXqS5Epts&callback=initialize" type="text/javascript"></script>

<!-- ====================== Array ================== -->
<script>
  var array = [];
</script>

<script>
  //Memasukkan data tabel ke array
  array.push(['<?php echo $lapak->tanggal ?>',
              '<?php echo $lapak->nama_kegiatan ?>',
              '<?php echo $lapak->lokasi ?>',
              '<?php echo $lapak->jumlah_relawan ?>',
              '<?php echo $lapak->latitude ?>',
              '<?php echo $lapak->longitude ?>',]);
</script>
<!-- ====================== end Array ================== -->

<!-- ====================== Maps ====================== -->

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
        //maps
        var bounds = new google.maps.LatLngBounds();
        var maps = new google.maps.Map(document.getElementById("map"), {
          center : {lat: -8.408698, lng: 114.2339090},
          zoom : 9.5
        });
        var infoWindow = new google.maps.InfoWindow(), marker, i;
        for (var i = 0; i < array.length; i++) {

          var position = new google.maps.LatLng(array[i][4],array[i][5]);
          bounds.extend(position);
          var marker = new google.maps.Marker({
            position : position,
            map : maps,
            icon : 'https://img.icons8.com/plasticine/40/000000/marker.png',
            title : array[i][1]
          });
          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              var infoWindowContent =
              '<div class="content">'+
              '<h6>'+array[i][1]+'</h6>'+
              'Lokasi : '+array[i][2]+'<br/>'+
              '<p>Titik Koordinat : '+array[i][4]+', '+array[i][5]+'<br/>'+
              'Tanggal : '+array[i][0]+'<br/>'+
              'Jumlah Relawan : '+array[i][3]+'</p>'+
              '</div>';
              infoWindow.setContent(infoWindowContent);
              infoWindow.open(maps, marker);
            }
          })(marker, i));
        }
    }
    </script>
<!-- ======================== End Maps ====================== -->
@endsection
