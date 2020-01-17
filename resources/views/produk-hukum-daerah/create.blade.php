@extends('layouts.manage')

@section('title')
    Create Produk Hukum
@endsection

@section('content')

<div class="flex-container">
    <div class="column is-10 is-offset-2 m-t-50">
        <h1 class="title m-b-5">Buat Baru Produk Hukum</h1>
        <hr class="m-t-0">

        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        

        <div class="columns">
            <div class="column">
                <form action="{{ route('produk-hukum-daerah.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="field">
                            <label for="">Bentuk</label>
                            <p class="control">
                                <input type="text" name="bentuk" class="input {{ $errors->has('bentuk') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('bentuk') }}</p>
                        </div>
                        <div class="field">
                            <label for="">Nomor Peraturan</label>
                            <p class="control">
                                <input type="text" name="no_per" class="input {{ $errors->has('no_per') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('no_per') }}</p>
                        </div> 
                        <div class="field">
                            <label for="">Tahun</label>
                            <p class="control">
                                <input type="text" name="tahun" class="input {{ $errors->has('tahun') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('tahun') }}</p>
                        </div> 
                        <div class="field">
                            <label for="">Judul</label>
                            <p class="control">
                                <input type="text" name="judul" class="input {{ $errors->has('judul') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('judul') }}</p>
                        </div> 
                        <div class="field">
                            <label for="">Katalog</label>
                            <p class="control">
                                <input type="text" name="katalog" class="input {{ $errors->has('katalog') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('katalog') }}</p>
                        </div>
                        <div class="field">
                            <label for="">Abstrak</label>
                            <p class="control">
                                <input type="text" name="abstrak" class="input {{ $errors->has('abstrak') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('abstrak') }}</p>
                        </div>    

                        <div class="field">
                            <label for="">Status</label>
                            <div class="control ">
                                <div class="select is-fullwidth" name="status" id="status">
                                    <select>
                                        <option value=" ">-</option>
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
                                <input name="file" type="file" id="file">
                            </p>
                        </div>

                        <div class="field">
                            <label for="">Upload Lampiran</label>
                            <p class="control">
                                <input name="lampiran" type="file" id="lampiran">
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
        {{-- <div class="columns">
            <div class="column">
                <div class="card-content">
                    <table class="table is-narrow is-fullwidth">
                        <thead>
                            <tr>
                                <th>Bentuk</th>
                                <th>Nomor</th>
                                <th>Tahun</th>
                                <th>Judul</th>
                                <th>Katalog</th>
                                <th>Abstrak</th>
                                <th>Unduh</th>
                                <th>Lampiran</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prokumda as $prokum)
                            <tr>
                                <td>{{ $prokum->bentuk }}</td>
                                <td>{{ $prokum->no_per }}</td>
                                <td>{{ $prokum->tahun }}</td>
                                <td>{{ $prokum->judul }}</td>
                                <td>{{ $prokum->katalog }}</td>
                                <td>{{ $prokum->abstrak }}</td>
                                <td>
                                    @if($prokum->file)
                                        <a href="{{ asset('storage/prokum/'.$prokum->file) }}" target="_blank">{{ $prokum->file }}</a></td>
                                    @else
                                        File Kosong 
                                    @endif
                                </td>
                                <td>
                                    @if($prokum->lampiran)
                                        <a href="{{ asset('storage/prokum/lampiran/'.$prokum->lampiran) }}" target="_blank">{{ $prokum->lampiran }}</a></td>
                                    @else
                                        File Kosong 
                                    @endif
                                </td>
                                <td>{{ $prokum->status }}</td>
                                <td>
                                    <div class="columns">
                                        <div class="column is-1 m-r-15">
                                            <a class="button is-success is-small" href="#"><i class="fas fa-eye"></i></a>
                                        </div>
                                        <div class="column is-1">
                                            <a class="button is-danger is-small" href="#"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
    </div>
</div>

@endsection

@section('scripts')
<script>
    var app= new Vue({
        el:'#app',
        data: {
            file: ''
        }
    });
</script>
@endsection
