  @if (isset($buku))
    {!! Form::hidden('id', $buku->id) !!}
  @endif

  @if ($errors->any())
    <div class="form-group {{ $errors->has('id_buku') ? 'has-error' : 'has-success' }}">
  @else
    <div class="form-group">
  @endif
    {!! Form::label('id_buku', 'ID BUKU:', ['class' => 'control-label']) !!}
    {!! Form::text('id_buku', null, ["class" => 'form-control']) !!}
    @if ($errors->has('id_buku'))
      <span class="help-block">{{ $errors->first('id_buku') }}</span>
    @endif
  </div>


  @if ($errors->any())
    <div class="form-group {{ $errors->has('judul') ? 'has-error' : 'has-success' }}">
  @else
    <div class="form-group">
  @endif
    {!! Form::label('judul', 'Judul Buku:', ['class' => 'control-label']) !!}
    {!! Form::text('judul', null, ['class' => 'form-control']) !!}
    @if ($errors->has('judul'))
      <span class="help-block">{{ $errors->first('judul') }}</span>
    @endif
  </div>


  @if ($errors->any())
    <div class="form-group {{ $errors->has('penulis') ? 'has-error' : 'has-success' }}">
  @else
    <div class="form-group">
  @endif
    {!! Form::label('penulis', 'Penulis', ['class' => 'control-label']) !!}
    {!! Form::text('penulis', null, ['class' => 'form-control']) !!}
    @if ($errors->has('penulis'))
      <span class="help-block">{{ $errors->first('penulis') }}</span>
    @endif
  </div>

  @if ($errors->any())
    <div class="form-group {{ $errors->has('id_penerbit') ? 'has-error' : 'has-success' }}">
  @else
    <div class="form-group">
  @endif
    {!! Form::label('id_penerbit', 'Penerbit:', ['class' => 'control-label']) !!}
    @if (count($list_penerbit) > 0)
      {!! Form::select('id_penerbit', $list_penerbit, null, ['class' => 'form-control', 'id' => 'id_penerbit', 'placeholder' => 'Pilih Penerbit..']) !!}
    @else
      <p>Tidak ada pilihan penerbit. Buat dulu yuk!</p>
    @endif
    @if ($errors->has('id_penerbit'))
      <span class="help-block">{{ $errors->first('id_penerbit') }}</span>
    @endif
  </div>

  @if ($errors->any())
    <div class="form-group {{ $errors->has('sinopsis') ? 'has-error' : 'has-success' }}">
  @else
    <div class="form-group">
  @endif
    {!! Form::label('sinopsis', 'Sinopsis', ['class' => 'control-label']) !!}
    {!! Form::textarea('sinopsis', null, ['class' => 'form-control', 'rows'=>'3']) !!}
    @if ($errors->has('sinopsis'))
      <span class="help-block">{{ $errors->first('sinopsis') }}</span>
    @endif
  </div>


    @if ($errors->any())
    <div class="form-group {{ $errors->has('kategori_buku') ? 'has-error' : 'has-success' }}">
    @else
    <div class="form-group">
    @endif
    {!! Form::label('kategori_buku', 'Kategori', ['class' => 'control-label']) !!}
        @if(count($list_kategori) > 0)
            @foreach($list_kategori as $key => $value)
                <div class="checkbox">
                    <label>{!! Form::checkbox('kategori_buku[]', $key, null) !!}
                    {{ $value }}</label>
                </div>
            @endforeach
        @else
            <p>Tidak ada pilihan hobi, buat dulu ya :)</p>
        @endif
    </div>

    @if ($errors->any())
    <div class="form-group {{ $errors->has('foto') ? 'has-error' : 'has-success' }}">
    @else
    <div class="form-group">
    @endif
      {!! Form::label('foto', 'Foto:') !!}
      {!! Form::file('foto') !!}
      @if($errors->has('foto'))
      <span class="help-block">{{ $errors->first('foto') }}</span>
      @endif

      <!-- MENAMPILKAN FOTO -->
    @if (isset($buku))
      @if (isset($buku->foto))
        <img src="{{asset('fotoupload/' . $buku->foto) }}">
      @else
        <img src="{{asset('fotoupload/dummycover.jpg') }}">
      @endif
    @endif

    <div class="form-group">
      {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>