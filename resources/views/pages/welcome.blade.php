@extends('layouts.app')

@section('content')

    <section class="hero is-link is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <span class="logo">
                    <img src="{{ asset('images/logo-anambas200x200.png') }}">
                </span>
                <h1 class="title m-t-20">
                    JARINGAN DOKUMENTASI DAN INFORMASI HUKUM
                </h1>
                <h2 class="subtitle">
                    Pemerintah Kabupaten Kepulauan Anambas
                </h2>
                
                {{-- <div class="columns is-centered m-t-20">
                    <div class="column is-3 ">
                        <div class="field has-addons">
                            <div class="control">
                                <input class="input is-large" type="text" placeholder="Cari Produk Hukum">
                            </div>
                            <div class="control">
                                <a class="button is-link is-large">
                                Cari
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>           
        </div>
    </section>

    <section class="columns is-multiline is-centered">
        <div class="column is-6 is-narrow">
            <div class="card card-top">
                {{-- <img class="img-card m-t-20" src="{{ asset('images/Garuda-100x100.png') }}"> --}}
                <header class="card-header">
                    <p class="card-header-title">
                        PENCARIAN KEBIJAKAN
                    </p>
                </header>
                <div class="card-content">
                    <div class="columns">
                        <div class="column is-10 is-offset-1">
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Jenis Kebijakan</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <div class="select is-link is-fullwidth">
                                                <select>
                                                    <option>Semua Kebijakan</option>
                                                    <option>PERATURAN PRESIDEN</option>
                                                    <option>PERATURAN GUBERNUR</option>
                                                    <option>PERATURAN BUPATI</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Tahun</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control ">
                                            <div class="select is-link is-fullwidth">
                                                <select>
                                                    <option>Semua</option>
                                                    <option>2020</option>
                                                    <option>2019</option>
                                                    <option>2018</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Nomor</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input is-link" type="text" placeholder="Find a repository">
                                        </div>
                                    </div>
                                </div>
                            </div>                            

                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Tentang</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input is-link" type="text" placeholder="Find a repository">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <a href="#" class="card-footer-item has-background-link has-text-white">Cari</a>
                </footer>
            </div>
        </div>
    </section>

    {{-- <section class="columns has-text-centered m-t-100">
        <div class="column">
            <h3 class="title is-3">Produk Hukum Terbaru</h3>
            <div class="ct-section_header-separator"></div>
        </div>
    </section> --}}

    {{-- <section class="content">       
    <section class="container is-centered">
        <div class="columns is-multiline m-t-20">
            @foreach ($prokum as $p)
                <div class="column is-6">
                    <div class="card card-page-prokum">
                    <div class="card-header">
                        <p class="card-header-title">{{ $p->jenis }} ({{ $p->tahun }})</p>
                    </div>
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-3">
                                <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                            </div>
                            <div class="column is-9">
                                <p class="judul-page">{{ $p->judul }}</p>
                                <p>
                                    @if($p->fileupload) 
                                        <a href="{{ asset('storage/prokum/'.$p->fileupload) }}" class="button is-success" target="_blank">Download</a></td>
                                    @else
                                        File Kosong 
                                    @endif
                                </p>
                                <div class="hr"></div>
                                <p class="m-t-10"><b>Diposting tanggal: </b>{{date('d F Y', strtotime($p->created_at))}}</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>            
            @endforeach   
        </div>
    </section>
    </section> --}}

    <section class="columns has-text-centered m-t-100">
        <div class="column">
            <h3 class="title is-3">Berita & Informasi</h3>
            <span class="ct-section_header-separator"></span>
        </div>
    </section>

    <section class="columns m-t-20">
        <div class="column">
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-8">
                    <div class="tile">
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child notification is-link">
                        <p class="title">Berita Anambas #1</p>
                        <p class="subtitle">Post-1</p>
                        </article>
                        <article class="tile is-child notification is-warning">
                        <p class="title">Berita Anambas #2</p>
                        <p class="subtitle">Post-2</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-info">
                        <p class="title">Galeri</p>
                        <p class="subtitle">Foto Dokumentasi JDIH</p>
                        <figure class="image is-4by3">
                            <img src="https://bulma.io/images/placeholders/640x480.png">
                        </figure>
                        </article>
                    </div>
                    </div>
                    <div class="tile is-parent">
                    <article class="tile is-child notification is-danger">
                        <p class="title">Berita Anambas #3</p>
                        <p class="subtitle">Post-3</p>
                        <div class="content">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptatem ullam sunt quis labore nesciunt nam molestiae beatae architecto excepturi exercitationem dolores nihil placeat facilis, repudiandae nemo culpa laudantium harum!
                        </div>
                    </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-success">
                    <div class="content">
                        <p class="title">Informasi Penting</p>
                        <p class="subtitle">Informasi Penting untuk diketahui bersama</p>
                        <div class="content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sapiente, illo aliquam, voluptates, architecto voluptate qui tempore temporibus accusamus quod reprehenderit magni. Sed et eligendi veritatis fugit alias quasi ipsa?
                        </div>
                    </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    
@endsection