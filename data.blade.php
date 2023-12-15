<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">DATA NASABAH</h1>
    <p>selamat datang {{ Auth::user()->name }}</p>
    <a href="/tambah" type="button" class="btn btn-success">+tambah</button></a>
    <a href="/logout" type="button" class="btn btn-primary">logout</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">kode</th>
      <th scope="col">nama</th>
      <th scope="col">alamat</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no=1;
    @endphp
    @foreach($data as $row)
    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{$row->kode}}</td>
      <td>{{$row->nama}}</td>
      <td>{{$row->alamat}}</td>
      <td>
      <a href="/ubah/{{$row->id}}" type="button" class="btn btn-warning">edit</button></a>
      <a href="/hapus/{{$row->id}}" type="button" class="btn btn-danger">hapus</button></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>