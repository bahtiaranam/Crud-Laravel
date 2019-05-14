<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Book</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit Data Buku</h2><br  />
        <form method="post" action="{{action('BukuController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" value="{{$buku->judul}}" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="penerbit">Penerbit</label>
              <input type="text" class="form-control" name="penerbit" value="{{$buku->penerbit}}" required>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="tahun_terbit">Tahun Terbit</label>
              <input type="text" class="form-control" name="tahun_terbit" value="{{$buku->tahun_terbit}}" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="pengarang">Pengarang</label>
                <input type="text" class="form-control" name="pengarang" value="{{$buku->pengarang}}" required>
              </div>
            </div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success" style="width:350px; font-weight:bold; height:40px;">Edit</button>
              </div>
            </div>
      </form>
    </div>
  </body>
</html>
