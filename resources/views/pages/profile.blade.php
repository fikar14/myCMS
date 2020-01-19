@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('content')

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

    <div class="flex-container">
        <section class="profile">
            <div class="hero-body">
                <div class="container top-judul has-text-centered">
                    <span class="logo">
                        <img src="{{ asset('images/logo-anambas200x200.png') }}">
                    </span>
                    <h1 class="title-judul">
                        PROFIL JDIH KABUPATEN KEPULAUAN ANAMBAS
                    </h1>
                    <p class="subtitle-judul">
                        "ANAMBAS BERMADAH 2021, Kepulauan Anambas Sebagai Kabupaten Maritim Terdepan yang Berdaya Saing, Maju dan Berakhlakul Karimah"
                    </p>
                </div>           
            </div>
        </section>
        <div class="columns">
            <section class = "profile-visi">
                <div class="column is-10 m-l-50">
                    <h2 class="title-visi">Visi</h2>
                    <br>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ad, soluta quo animi placeat rerum fugiat iusto enim impedit non culpa obcaecati fuga maiores cupiditate quae, dolore nulla nemo eos molestiae? Voluptatem distinctio itaque illum deserunt vero, aperiam sequi incidunt earum nostrum, ea obcaecati, amet debitis enim cupiditate eos animi. Nesciunt, aliquid. Amet, praesentium totam illo eligendi laudantium deserunt eaque autem modi accusantium sed, perspiciatis, id quas deleniti nobis adipisci soluta harum. Sit laboriosam, asperiores quos earum quam id veritatis, est voluptatibus maxime aut commodi, hic perspiciatis porro. Alias quia, atque veritatis error recusandae magni porro dolor delectus beatae fugiat! <br><br>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ad, soluta quo animi placeat rerum fugiat iusto enim impedit non culpa obcaecati fuga maiores cupiditate quae, dolore nulla nemo eos molestiae? Voluptatem distinctio itaque illum deserunt vero, aperiam sequi incidunt earum nostrum, ea obcaecati, amet debitis enim cupiditate eos animi. Nesciunt, aliquid. Amet, praesentium totam illo eligendi laudantium deserunt eaque autem modi accusantium sed, perspiciatis,
                    </p>
                </div>
            </section>   
            <section class = "profile-misi" id="misi">
                <div class="column is-10 is-offset-1">
                    <h2 class="title-misi">Misi</h2>
                    <br>        
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ad, soluta quo animi placeat rerum fugiat iusto enim impedit non culpa obcaecati fuga maiores cupiditate quae, dolore nulla nemo eos molestiae? Voluptatem distinctio itaque illum deserunt vero, aperiam sequi incidunt earum nostrum, ea obcaecati, amet debitis enim cupiditate eos animi. Nesciunt, aliquid. Amet, praesentium totam illo eligendi laudantium deserunt eaque autem modi accusantium sed, perspiciatis, id quas deleniti nobis adipisci soluta harum. Sit laboriosam, asperiores quos earum quam id veritatis, est voluptatibus maxime aut commodi, hic perspiciatis porro. Alias quia, atque veritatis error recusandae magni porro dolor delectus beatae fugiat! <br><br>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ad, soluta quo animi placeat rerum fugiat iusto enim impedit non culpa obcaecati fuga maiores cupiditate quae, dolore nulla nemo eos molestiae? Voluptatem distinctio itaque illum deserunt vero, aperiam sequi incidunt earum nostrum, ea obcaecati,
                    </p>
                </div>
            </section>
        </div>
    </div>

    <section class="flex-container tugas-pokok" id="tugas-pokok">
        <div class="columns has-text-centered">
            <div class="column is-12">
                <p class="title-tupoksi">Tugas Pokok</p>
            </div>
        </div> 
        <div class="columns">
            <div class="column is-4 is-offset-4">
                <div class="card tupoksi">
                    <div class="card-content">
                        <ol class= "list-tupoksi">
                            <li>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, necessitatibus!
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, possimus.
                            </li>
                            <li>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus soluta, similique corrupti commodi laborum nostrum!
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, possimus.
                            </li>
                            <li>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus soluta, similique corrupti commodi laborum nostrum!
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    
    <section class="flex-container tujuan" id="tujuan">
        <div class="columns">
            <div class="column">
                <h3 class="title-tujuan m-l-10">Tujuan</h3>
            </div>
        </div>
        <div class="columns">
            <div class="column is-6 m-l-10">
                <p class="has-text-left">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ad, soluta quo animi placeat rerum fugiat iusto enim impedit non culpa obcaecati fuga maiores cupiditate quae, dolore nulla nemo eos molestiae? Voluptatem distinctio itaque illum deserunt vero, aperiam sequi incidunt earum nostrum, ea obcaecati, amet debitis enim cupiditate eos animi. Nesciunt, aliquid. Amet, praesentium totam illo eligendi laudantium deserunt eaque autem modi accusantium sed, perspiciatis, id quas deleniti nobis adipisci soluta harum.
                </p>
            </div>
            <div class="column is-6">
                <figure class="image is-pulled-right">
                    <img src= "{{ asset('images/logo-jdih.png') }}">
                </figure>
            </div>
        </div>
    </section>

    <section class="flex-container fungsi" id="fungsi">
        <div class="columns">
            <div class="column">
                <h3 class="title-fungsi m-r-10 is-pulled-right">Fungsi</h3>
            </div>
        </div>
        <div class="columns">
            <div class="column is-6">
                <figure class="image">
                    <img src= "{{ asset('images/fungsi.png') }}">
                </figure>
            </div>
            <div class="column is-6 ">
                <p class="m-r-10 has-text-right">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ad, soluta quo animi placeat rerum fugiat iusto enim impedit non culpa obcaecati fuga maiores cupiditate quae, dolore nulla nemo eos molestiae? Voluptatem distinctio itaque illum deserunt vero, aperiam sequi incidunt earum nostrum, ea obcaecati, amet debitis enim cupiditate eos animi. Nesciunt, aliquid. Amet, praesentium totam illo eligendi laudantium deserunt eaque autem modi accusantium sed, 
                </p>
            </div>
        </div>
    </section>

    <section class="flex-container" id="organisasi">
        <div class="columns has-text-centered">
            <div class="column is-12 m-t-100">
                <h3 class="title-organisasi">Struktur Organisasi</h3>
            </div>
        </div> 
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <figure class="image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQPartTcDuVCjXliqGMGgm2qzOCmQu45Khmn17y7R4M6KHzZqSP">
                </figure>
            </div>
        </div>  
        <div class="columns has-text-centered" id="sop">
            <div class="column is-12">
                <h3 class="title-organisasi">SOP</h3>
            </div>
        </div>
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <p class="has-text-centered">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ad, soluta quo animi placeat rerum fugiat iusto enim impedit non culpa obcaecati fuga maiores cupiditate quae, dolore nulla nemo eos molestiae? Voluptatem distinctio itaque illum deserunt vero, aperiam sequi incidunt earum nostrum, ea obcaecati, amet debitis enim cupiditate eos animi. Nesciunt, aliquid. Amet, praesentium totam illo eligendi laudantium deserunt eaque autem modi accusantium sed, perspiciatis, id quas deleniti nobis adipisci soluta harum. Sit laboriosam, asperiores quos earum quam id veritatis, est voluptatibus maxime aut commodi, hic perspiciatis porro. Alias quia, atque veritatis error recusandae magni porro dolor delectus beatae fugiat!
                </p><br><br>
                <p class="has-text-centered">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ad, soluta quo animi placeat rerum fugiat iusto enim impedit non culpa obcaecati fuga maiores cupiditate quae, dolore nulla nemo eos molestiae? Voluptatem distinctio itaque illum deserunt vero, aperiam sequi incidunt earum nostrum, ea obcaecati, amet debitis enim cupiditate eos animi. Nesciunt, aliquid. Amet, praesentium totam illo eligendi laudantium deserunt eaque autem modi accusantium sed, perspiciatis, id quas deleniti nobis adipisci soluta harum. Sit laboriosam, asperiores quos earum quam id veritatis, est voluptatibus maxime aut commodi, hic perspiciatis porro. Alias quia, atque veritatis error recusandae magni porro dolor delectus beatae fugiat!
                </p>
            </div>
        </div>
    </section>
    

@endsection

@section('scripts')
    <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
        } else {
        mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
@endsection
