@extends('layouts.manage')

@section('title')
    Create Produk Hukum
@endsection

@section('content')

<div class="flex-container">
    <div class="column is-10 is-offset-2 m-t-50">
        <h1 class="title m-b-5">Edit Produk Hukum</h1>
        <hr class="m-t-0">

        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        

        <div class="columns">
            <div class="column">
                <form action="{{ route('produk-hukum-daerah.update', $prokumda->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="field">
                            <label for="">Bentuk</label>
                            <p class="control">
                              <input type="text" name="bentuk" value="{{$prokumda->bentuk}}" class="input {{ $errors->has('bentuk') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('bentuk') }}</p>
                        </div>
                        <div class="field">
                            <label for="">Nomor Peraturan</label>
                            <p class="control">
                                <input type="text" name="no_per" 
                                class="input {{ $errors->has('no_per') ? 'is-invalid':'' }}" 
                                value="{{$prokumda->no_per}}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('no_per') }}</p>
                        </div> 
                        <div class="field">
                            <label for="">Tahun</label>
                            <p class="control">
                                <input type="text" name="tahun" value="{{$prokumda->tahun}}" class="input {{ $errors->has('tahun') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('tahun') }}</p>
                        </div> 
                        <div class="field">
                            <label for="">Judul</label>
                            <p class="control">
                                <input type="text" name="judul" value="{{$prokumda->judul}}" class="input {{ $errors->has('judul') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('judul') }}</p>
                        </div> 
                        <div class="field">
                            <label for="">Katalog</label>
                            <p class="control">
                                <input type="text" name="katalog" value="{{$prokumda->katalog}}" class="input {{ $errors->has('katalog') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('katalog') }}</p>
                        </div>
                        <div class="field">
                            <label for="">Abstrak</label>
                            <p class="control">
                                <input type="text" name="abstrak" value="{{$prokumda->abstrak}}" class="input {{ $errors->has('abstrak') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('abstrak') }}</p>
                        </div>    

                        <div class="field">
                            <label for="">Status</label>
                            <div class="control ">
                                <div class="select is-fullwidth">
                                    <select name="status" value="{$prokumda->status}">
                                        <option value="Baru">Baru</option>
                                        <option value="Dicabut">Dicabut</option>
                                        <option value="Mencabut">Mencabut</option>
                                        <option value="Diubah">Diubah</option>
                                        <option value="Mengubah">Mengubah</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="field">
                            <label for="">Upload Dokumen</label>
                            <p class="control">
                                <input name="file" type="file" id="file" value="{{$prokumda->file}}">
                            </p>
                        </div>

                        <div class="field">
                            <label for="">Upload Lampiran</label>
                            <p class="control">
                                <input name="lampiran" type="file" id="lampiran" value="{{$prokumda->lampiran}}">
                            </p>
                        </div>

                        <div class="field">
                            <button class="button is-link is-fullwidth">
                                Simpan
                            </button>
                        </div>
                        
                    </form>  
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    var app= new Vue({
        el:'#app',
        data: {
            file: '',
            status: ''
        }
    });
</script>
@endsection
