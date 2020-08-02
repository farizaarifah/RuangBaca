@extends('layouts.template')
<head>
	<title>Detail Buku</title>
</head>
    @section('content')

    <div class="row">
      <div class="col-md-2">
        
      </div>
      <div class="col-md-8">
          <div id="buku">
			<h2 style="padding-top: 22pt">Detail Buku</h2>
			<table class="table table-striped">
				<tr>
					<th>Id Buku</th>
					<td>{{ $buku->id_buku }}</td>
				</tr>
				<tr>
					<th>Judul</th>
					<td>{{ $buku->judul }}</td>
				</tr>
				<tr>
					<th>Penulis</th>
					<td>{{ $buku->penulis }}</td>
				</tr>
				<tr>
					<th>Penerbit</th>
					<td>{{ $buku->penerbit->nama_penerbit }}</td>
				</tr>
				<tr>
					<th>Sinopsis</th>
					<td>{{ $buku->sinopsis }}</td>
				</tr>
				<tr>
					<th>Kategori</th>
					<td>
						@foreach($buku->kategori as $item)
						<span>{{ $item->nama_kategori }}</span>
						@endforeach
					</td>
				</tr>
				<tr>
					<th>Foto</th>
					<td>
						@if (isset($buku->foto))
						<img src="{{asset('fotoupload/' . $buku->foto) }}">
						@else
							<img src="{{asset('fotoupload/dummymale.jpg') }}">
						@endif
					</td>
				</tr>
			</table>
			<div class="form-group">
			  <a href="{{ url()->previous() }}" class="btn btn-outline-primary mt-2">Kembali</a>
			</div>
		</div>
      </div>
     
      <div class="col-md-2">
        
      </div>
    </div>


@endsection