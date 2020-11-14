<!DOCTYPE html>
<html>
<head>
      <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
      <center>Laporan PDF</center>
      {{-- <table class="table table-bordered">
            <thead>
                  <tr>
                        <th>No</th>
                         <th>Judul</th>
                         <th>Isi</th>
                         <th>Gambar</th>
                  </tr>
            </thead>
            <tbody>
                  <tr>
                        <td>{{$articles->id}}</td>
                        <td>{{$articles->title}}</td>
                  </tr>
            </tbody>
      </table> --}}
      <h1 class="">{{$articles->title}}</h1>
      <img src="{{asset('storage/'.$articles -> image)}}" alt="">
      <p>{{$articles -> body}}</p>
</body>
</html>