@extends('layouts.app')

@section('title')
    Produk Hukum
@endsection

@section('content')

    <section class="columns has-text-centered m-t-200">
        <div class="column">
            <h3 class="title is-3">Produk Hukum</h3>
            <div class="ct-section_header-separator"></div>
        </div>
    </section>

    <section class="content">
        <div class="flex-container">            
            <form action="{{route('prokumda')}}">
                <div class="columns m-t-50">
                        <div class="column is-2 is-offset-2">
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
                        <div class="column is-2">
                            <button class="button is-link">
                                <span class="icon is-small">
                                    <i class="fas fa-search"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            
                <div class="columns">
                    <div class="column is-10 is-offset-1">
                        <div class="card-content">
                            <div class="table-container">
                                <table class="table is-striped is-fullwidth">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Bentuk</th>
                                            <th>Nomor</th>
                                            <th>Tahun</th>
                                            <th>Judul</th>
                                            <th>Katalog</th>
                                            <th>Abstrak</th>
                                            <th>Unduh</th>
                                            <th>Lampiran</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;?>
                                        @foreach ($prokumda as $prokum)
                                        <?php $no++ ;?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $prokum->bentuk }}</td>
                                            <td>{{ $prokum->no_per }}</td>
                                            <td>{{ $prokum->tahun }}</td>
                                            <td>{{ $prokum->judul }}</td>
                                            <td>{{ $prokum->katalog }}</td>
                                            <td>{{ $prokum->abstrak }}</td>
                                            <td>
                                                @if($prokum->file)
                                                    <a href="{{ asset('/storage/prokumda/'.$prokum->file) }}" target="_blank"><i class="fas fa-download"></i></a></td>
                                                    {{-- <a href="{{ asset('storage/prokum/'.$prokum->file) }}" target="_blank">{{ $prokum->file }}</a></td> --}}
                                                @else
                                                    File Kosong 
                                                @endif
                                            </td>
                                            <td>
                                                @if($prokum->lampiran)
                                                    <a href="{{ asset('/storage/lampiran/'.$prokum->lampiran) }}" target="_blank"><i class="fas fa-download"></i></a></td>
                                                @else
                                                    File Kosong 
                                                @endif
                                            </td>
                                            <td>{{ $prokum->status }}</td>
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{$prokumda->links()}}
        </div>
        
    </section>

@endsection

@section('scripts')
    <script>
        var app= new Vue({
            el:'#app',
            data() {         
                return {
                    
                }       

                
            }
        });
    </script>
@endsection
