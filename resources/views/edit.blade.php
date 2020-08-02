@extends('layouts.template')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Edit Data Buku</title>
  </head>
  
    @section('content')

     <div class="row">
          <div class="col-md-2">
          </div>

          <div class="col-md-8">
            <div id="siswa">
    	        <h2 style="padding-top: 22pt">Edit Data Buku</h2>
    	        {!! Form::model($buku, ['method' => 'PATCH', 'files'=>true,'action' => ['BukuController@update', $buku->id]]) !!}

              @include('form', ['submitButtonText' => 'Update'])
              {!! Form::close() !!}
          	</div>
          </div>

    </div>
  </div>



@endsection