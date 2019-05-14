<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Book</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Tambah Data Buku</h2><br/>
      <form method="post" action="{{url('buku')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="penerbit">Penerbit</label>
            <input type="text" class="form-control" name="penerbit" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="tahun_terbit">Tahun terbit</label>
            <input type="text" class="form-control" name="tahun_terbit" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="pengarang">Pengarang</label>
            <input type="text" class="form-control" name="pengarang" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:10px;">
            <button type="submit" class="btn btn-success" style="width:170px; font-weight:bold; height:40px; float:right;">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
