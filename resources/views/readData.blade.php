@extends('layouts.template')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Daftar Buku</title>
  </head>
  <body>
    @section('content')
    
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
        <h1 style="padding-top: 22pt">Daftar Buku</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id Buku</th>
              <th scope="col">Judul</th>
              <th scope="col">Penerbit</th>
              <th scope="col">Penulis</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($buku_list as $buku)
            <tr>
              <td>{{ $buku->id_buku }}</td>
              <td>{{ $buku->judul }}</td>
              <td>{{ $buku->penerbit->nama_penerbit }}</td>
              <td>{{ $buku->penulis }}</td>
              <td>
                @guest
                <a href='/buku/{{ $buku->id }}' class="btn btn-success btn-sm">Detail</a>
                @else
                <a href='/buku/{{ $buku->id }}' class="btn btn-success btn-sm">Detail</a>
                <a href='/buku/{{ $buku->id }}/edit' class="btn btn-success btn-sm">Edit</a>
                <a href='buku/{{ $buku->id }}/delete' class="btn btn-danger btn-sm">Delete</a>
                @endguest
                
              </td>

            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="table-bottom">
          <div class="pull-left">
            <strong> Jumlah Buku: {{$jumlah_buku}}</strong>       
          </div>
          <div class="paging">
            {{ $buku_list->links()}}
          </div>    
        </div>

        <div class="bottom-nav">
          <div>
            @guest
            @else
            <a href="/buku/create" class="btn btn-primary">Tambah Buku</a>
            @endguest
          </div>
        </div>
          <!-- bawah ini close div col md 8 -->
      </div> 
      <div class="col-md-2">
        
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    @endsection
  </body>
</html>

