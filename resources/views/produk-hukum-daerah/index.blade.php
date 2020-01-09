@extends('layouts.manage')

@section('title')
    Produk Hukum
@endsection

@section('content')

<div class="flex-container">
    <div class="column is-10 is-offset-2 m-t-50">
        <h1 class="title m-b-5">Produk Hukum</h1>
        <div class="column">
            <a href="{{route('produk-hukum-daerah.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New</a>
        </div>
        <hr class="m-t-0">

        @if(session('status'))
            <div class="notification is-success">
                {{session('status')}}
            </div>
        @endif
            
        <form action="{{route('search')}}">
        <div class="columns">
                <div class="column is-2">
                    <input
                        value="{{ old('search') }}"
                        name="search"
                        class="input"
                        type="text"
                        placeholder="Filter by Bentuk"/>
                </div>
                <div class="column is-2">
                    <input
                        value="{{ old('search2') }}"
                        name="search2"
                        class="input"
                        type="text"
                        placeholder="Filter by Nomor Peraturan"/>
                </div>
                <div class="column is-2"> 
                    <div class="select is-fullwidth">
                        <select name="search3" value="{{ old('search3') }}">
                          <option value="">Pilih Tahun</option>
                          <option>2020</option>
                          <option>2019</option>
                          <option>2018</option>
                          <option>2017</option>
                          <option>2016</option>
                        </select>
                    </div>
                </div>
                <div class="column is-2">
                    <input
                        value="{{ old('search4') }}"
                        name="search4"
                        class="input"
                        type="text"
                        placeholder="Filter by Judul"/>
                </div>
                <div class="column is-1">
                    <input
                        type="submit"
                        value="Filter"
                        class="button is-link is-fullwidth">
                </div>
            </div>
        </form>
    
        <div class="columns">
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
        </div>
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
