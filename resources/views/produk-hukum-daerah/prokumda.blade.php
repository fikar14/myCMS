@extends('layouts.app')

@section('title')
    Produk Hukum
@endsection

@section('content')

    <section class="columns has-text-centered m-t-100">
        <div class="column">
            <h3 class="title is-3">Produk Hukum Daerah</h3>
            <div class="ct-section_header-separator"></div>
        </div>
    </section>

    <section class="content">
        <div class="container">            
            <prokum-daerah></prokum-daerah>
        </div>
        

        {{-- <form action="{{route('search')}}">
            <div class="columns">
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
                <div class="column is-1">
                    <input
                        type="submit"
                        value="Filter"
                        class="button is-link is-fullwidth">
                </div>
            </div>
        </form>
        
        <section class="columns is-multiline m-t-50">      
            <div class="column is-3">
                <div class="card">
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-3">
                                <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                            </div>
                            <div class="column is-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                <p>12 Aug 2017</p>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                    <a href="#" class="card-footer-item">Share</a>
                    <a href="#" class="card-footer-item">Download</a>
                    </footer>
                </div>
            </div>
            <div class="column is-3">
                <div class="card">
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-3">
                                <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                            </div>
                            <div class="column is-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                <p>12 Aug 2017</p>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="#" class="card-footer-item">Share</a>
                        <a href="#" class="card-footer-item">Download</a>
                    </footer>
                </div>
            </div>
            <div class="column is-3">
                <div class="card">
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-3">
                                <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                            </div>
                            <div class="column is-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                <p>12 Aug 2017</p>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="#" class="card-footer-item">Share</a>
                        <a href="#" class="card-footer-item">Download</a>
                    </footer>
                </div>
            </div>
            <div class="column is-3">
                <div class="card">
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-3">
                                <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                            </div>
                            <div class="column is-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                <p>12 Aug 2017</p>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="#" class="card-footer-item">Share</a>
                        <a href="#" class="card-footer-item">Download</a>
                    </footer>
                </div>
            </div>
        </section>


        <section class="columns is-multiline m-t-20">      
            <div class="column is-3">
                <div class="card">
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-3">
                                <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                            </div>
                            <div class="column is-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                <p>12 Aug 2017</p>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                    <a href="#" class="card-footer-item">Share</a>
                    <a href="#" class="card-footer-item">Download</a>
                    </footer>
                </div>
            </div>
            <div class="column is-3">
                <div class="card">
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-3">
                                <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                            </div>
                            <div class="column is-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                <p>12 Aug 2017</p>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="#" class="card-footer-item">Share</a>
                        <a href="#" class="card-footer-item">Download</a>
                    </footer>
                </div>
            </div>
            <div class="column is-3">
                <div class="card">
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-3">
                                <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                            </div>
                            <div class="column is-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                <p>12 Aug 2017</p>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="#" class="card-footer-item">Share</a>
                        <a href="#" class="card-footer-item">Download</a>
                    </footer>
                </div>
            </div>
            <div class="column is-3">
                <div class="card">
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-3">
                                <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                            </div>
                            <div class="column is-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                <p>12 Aug 2017</p>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="#" class="card-footer-item">Share</a>
                        <a href="#" class="card-footer-item">Download</a>
                    </footer>
                </div>
            </div>
        </section> --}}
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
