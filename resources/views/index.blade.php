<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <style>
    button.add-book{
      cursor: pointer;
      width: 150px;
      height: 40px;
      float: right;
      outline: none;
      border-radius: 4px;
      border: none;
      color: white;
      margin: 20px 0px 30px 0px;
    }
    .judul{
      text-align: center;
    }
    .btn-info{
      color: white;
    }
  </style>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <div class="judul">
       <h2><b>DATA BUKU PERPUSTAKAAN</b></h2>
     </div>
     <div class="button">
       <a href="buku/create">
         <button class="btn btn-success add-book" type="button" name="button">Tambah Buku</button>
       </a>
     </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Pengarang</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($buku as $buku)
      <tr>
        <td>{{$buku['id']}}</td>
        <td>{{$buku['judul']}}</td>
        <td>{{$buku['penerbit']}}</td>
        <td>{{$buku['tahun_terbit']}}</td>
        <td>{{$buku['pengarang']}}</td>

        <td>
          <a href="{{action('BukuController@edit', $buku['id'])}}" class="btn btn-info">Edit</a>
        </td>
        <td>
          <form action="{{action('BukuController@destroy', $buku['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
