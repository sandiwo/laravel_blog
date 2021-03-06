@extends('layouts.home')
@section('title','Artikel')
@section('content')
    <div class="row">
            <form class="form-horizontal" action="/artikel" method="POST">
                @csrf
                <div class="form-group">
                    <div class="col-sm-6">
                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul Artikel">
                    </div>
                    <div class="col-sm-6">
                        <select name="kategori" id="kategori" class="form-control">
                            @foreach ($data_kategori as $kategori)
                                <option value="{{$kategori->id}}">
                                    {{$kategori->nama}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea name="isi" id="isi" cols="100" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 ">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
    </div>
@endsection
