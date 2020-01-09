@extends('layouts.app')

@section('title')
    Produk Hukum
@endsection

@section('content')

    <section class="columns has-text-centered m-t-100">
        <div class="column">
            <h3 class="title is-3">Produk Hukum Desa</h3>
            <div class="ct-section_header-separator"></div>
        </div>
    </section>

    <section class="content">
        
        <prokum-desa></prokum-desa>

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
