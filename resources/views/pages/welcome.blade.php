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
            </div>           
        </div>
    </section>
    
    <section class="columns is-multiline pencarian is-centered">
        <div class="column is-6 is-narrow">
            <div class="card card-top">
                <header class="card-header">
                    <p class="card-header-title">
                        PENCARIAN KEBIJAKAN
                    </p>
                </header>
                <form action="{{route('prokumda')}}">
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-10 is-offset-1">
                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Bentuk</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <input
                                                    value="{{ old('search') }}"
                                                    name="search"
                                                    class="input"
                                                    type="text"
                                                    placeholder="Filter by Bentuk"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Nomor Peraturan</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <input
                                                    value="{{ old('search2') }}"
                                                    name="search2"
                                                    class="input"
                                                    type="text"
                                                    placeholder="Filter by Nomor Peraturan"/>
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
                                                <input
                                                    value="{{ old('search4') }}"
                                                    name="search4"
                                                    class="input"
                                                    type="text"
                                                    placeholder="Filter by Judul"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <button class="button is-link is-large is-fullwidth">
                            <span class="icon is-small">
                                Cari
                            </span>
                        </button>
                    </footer>
                </form>
            </div>
        </div>
    </section>

    {{-- <div class="container">
        <section class="columns has-text-centered m-t-150">
            <div class="column">
                <h3 class="title is-3">Berita & Informasi</h3>
                <span class="ct-section_header-separator"></span>
            </div>
        </section>
    
        <section class="columns m-t-20 m-b-50">
            <div class="column">
                <div class="tile is-ancestor">
                    <div class="tile is-vertical is-8">
                        <div class="tile">
                        <div class="tile is-parent is-vertical">
                            <div class="card">
                                <article class="tile is-child notification">
                                <p class="title">Berita Anambas #1</p>
                                <p class="has-text-justified">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio beatae dolor quaerat vel magnam! Nisi iure sapiente, fugiat animi, ipsam sed voluptate enim architecto eos repellat doloribus, reprehenderit eligendi sequi veniam omnis nulla provident atque vero cum! Tenetur perspiciatis similique placeat iste deserunt minima labore alias esse. Corrupti,
                                </p>
                                </article>
                            </div>
                            <div class="card">
                                <article class="tile is-child notification">
                                <p class="title">Berita Anambas #2</p>
                                <p class="has-text-justified">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, accusamus veniam! Dicta sit, corrupti totam rem necessitatibus delectus nihil quidem. Dolor harum, quos, distinctio quis minus, veniam hic dignissimos omnis nemo autem blanditiis officiis eligendi. Vitae sapiente veritatis libero voluptatum harum! Reprehenderit earum voluptates expedita inventore doloribus aliquid ab nam.
                                </p>
                                <br><br>
                                <p class="has-text-justified">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda magnam culpa cumque, velit neque nesciunt incidunt, quibusdam fugit fugiat adipisci earum sunt praesentium nisi at! Accusantium, fugit aperiam iusto laudantium quo modi! Numquam vero, nulla dolores atque qui fuga temporibus harum possimus. Reprehenderit minus vero esse ut, nemo nobis repellendus pariatur incidunt doloremque aliquid deleniti. Impedit praesentium, architecto culpa sunt minima temporibus, facilis, inventore maxime modi accusantium reiciendis obcaecati vero porro ratione placeat blanditiis quibusdam harum sapiente perspiciatis atque provident rerum beatae nobis? Consequatur, veniam? Aperiam id, molestiae ut eum, autem sunt, explicabo reiciendis perferendis commodi maiores officia repudiandae natus.
                                </p>
                                </article>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <div class="card">
                                <article class="tile is-child notification">
                                <p class="title">Galeri</p>
                                <p class="subtitle">Foto Dokumentasi JDIH</p>
                                <figure class="image">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ7Eh33YG-i6-9iia3fKNp2kRYmhasKReoqf11VB3rzJeGy1kx_">
                                </figure>
                                <br><br>
                                <p class="has-text-justified">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio beatae dolor quaerat vel magnam! Nisi iure sapiente, fugiat animi, ipsam sed voluptate enim architecto eos repellat doloribus, reprehenderit eligendi sequi veniam omnis nulla provident atque vero cum! Tenetur perspiciatis similique placeat iste deserunt minima labore alias esse. Corrupti,
                                </p>
                                <br><br>
                                <p class="has-text-justified">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio beatae dolor quaerat vel magnam! Nisi iure sapiente, fugiat animi, ipsam sed voluptate enim architecto eos repellat doloribus, reprehenderit eligendi sequi veniam omnis nulla provident atque vero cum! Tenetur perspiciatis similique placeat iste deserunt minima labore alias esse. Corrupti,
                                </p>
                                </article>
                            </div>
                        </div>
                        </div>
                        <div class="tile is-parent">
                        <div class="card">
                            <article class="tile is-child notification">
                                <p class="title">Berita Anambas #3</p>
                                <div class="content">
                                    <p class="has-text-justified">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia soluta molestias autem omnis necessitatibus rerum dolorum, ratione, fuga eos quaerat facere blanditiis quibusdam dicta vitae aliquam praesentium hic, saepe nemo. Quae ea minus beatae ratione rem, dignissimos, fuga labore inventore laborum ducimus repellat dicta voluptatum impedit tenetur aperiam tempore. Repellendus nemo beatae laudantium, possimus quos neque soluta ex dolorem quidem voluptatem distinctio debitis sequi aliquam reiciendis consequatur est harum impedit doloremque voluptas totam adipisci porro recusandae repudiandae officia. Suscipit tempora fugit quas commodi repudiandae? Vel libero dignissimos quo, nobis numquam magnam quae tempore beatae consectetur cumque voluptatum, illum amet molestiae.
                                        <br><br>
        
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia soluta molestias autem omnis necessitatibus rerum dolorum, ratione, fuga eos quaerat facere blanditiis quibusdam dicta vitae aliquam praesentium hic, saepe nemo. Quae ea minus beatae ratione rem, dignissimos, fuga labore inventore laborum ducimus repellat dicta voluptatum impedit tenetur aperiam tempore. Repellendus nemo beatae laudantium, possimus quos neque soluta ex dolorem quidem voluptatem distinctio debitis sequi aliquam reiciendis consequatur est harum impedit doloremque voluptas totam adipisci porro recusandae repudiandae officia. Suscipit tempora fugit quas commodi repudiandae? Vel libero dignissimos quo, nobis numquam magnam quae tempore beatae consectetur cumque voluptatum, illum amet molestiae.
                                        <br><br>
        
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia soluta molestias autem omnis necessitatibus rerum dolorum, ratione, fuga eos quaerat facere blanditiis quibusdam dicta vitae aliquam praesentium hic, saepe nemo. Quae ea minus beatae ratione rem, dignissimos, fuga labore inventore laborum ducimus repellat dicta voluptatum impedit tenetur aperiam tempore. Repellendus nemo beatae laudantium, possimus quos neque soluta ex dolorem quidem voluptatem distinctio debitis sequi aliquam reiciendis consequatur est harum impedit doloremque voluptas totam adipisci porro recusandae repudiandae officia. Suscipit tempora fugit quas commodi repudiandae? Vel libero dignissimos quo, nobis numquam magnam quae tempore beatae consectetur cumque voluptatum, illum amet molestiae.
                                        <br><br>
                                            
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia soluta molestias autem omnis necessitatibus rerum dolorum, ratione, fuga eos quaerat facere blanditiis quibusdam dicta vitae aliquam praesentium hic, saepe nemo. Quae ea minus beatae ratione rem, dignissimos, fuga labore inventore laborum ducimus repellat dicta voluptatum impedit tenetur aperiam tempore. Repellendus nemo beatae laudantium,
                                    </p>
                                </div>
                            </article>
                        </div>
                        </div>
                    </div>
                    <div class="tile is-parent">
                        <div class="card">
                            <article class="tile is-child notification">
                            <div class="content" class="has-text-justified">
                                <p class="title">Informasi Penting</p>
                                <p class="subtitle">Informasi Penting untuk diketahui bersama</p>
                                <div class="content">
                                    <p class="has-text-justified">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sapiente, illo aliquam, voluptates, architecto voluptate qui tempore temporibus accusamus quod reprehenderit magni. Sed et eligendi veritatis fugit alias quasi ipsa?
                                    </p>
                                    <br><br>
                                    <p class="has-text-justified">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore, tempora similique in eaque reprehenderit culpa quisquam consequuntur ducimus ipsam doloribus animi cupiditate non nihil ipsum dolorum dolore sed illo magnam accusamus nisi. Cumque totam voluptatibus tempora obcaecati eos ipsam ab aut pariatur voluptates harum expedita velit eligendi asperiores nostrum facilis repudiandae perferendis neque laudantium dolor sint, iusto deserunt fuga. Voluptate assumenda possimus modi voluptatem exercitationem dolores dolore, unde, delectus, animi reiciendis corrupti aut facere accusantium quae amet dicta. Distinctio dolores ipsa placeat deserunt vel maxime architecto sint quibusdam ducimus sed nostrum, ex dolor praesentium, eaque repellendus ratione excepturi quod debitis?
                                    </p>
                                    <br><br>
                                    <p class="has-text-justified">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore, tempora similique in eaque reprehenderit culpa quisquam consequuntur ducimus ipsam doloribus animi cupiditate non nihil ipsum dolorum dolore sed illo magnam accusamus nisi. Cumque totam voluptatibus tempora obcaecati eos ipsam ab aut pariatur voluptates harum expedita velit eligendi asperiores nostrum facilis repudiandae perferendis neque laudantium dolor sint, iusto deserunt fuga. Voluptate assumenda possimus modi voluptatem exercitationem dolores dolore, unde, delectus, animi reiciendis corrupti aut facere accusantium quae amet dicta. Distinctio dolores ipsa placeat deserunt vel maxime architecto sint quibusdam ducimus sed nostrum, ex dolor praesentium, eaque repellendus ratione excepturi quod debitis?
                                    </p>
                                    <br><br>
                                    <figure class="image">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTuClNcXN3Os7D2vAFfbezDVJhucWSFEpACQGAlEocehHi_luUc">
                                    </figure>
                                    <br><br>
                                    <p class="has-text-justified">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore, tempora similique in eaque reprehenderit culpa quisquam consequuntur ducimus ipsam doloribus animi cupiditate non nihil ipsum dolorum dolore sed illo magnam accusamus nisi. Cumque totam voluptatibus tempora obcaecati eos ipsam ab aut pariatur voluptates harum expedita velit eligendi asperiores nostrum facilis repudiandae perferendis neque laudantium dolor sint, iusto deserunt fuga. Voluptate assumenda possimus modi voluptatem exercitationem dolores dolore, unde, delectus, animi reiciendis corrupti aut facere accusantium quae amet dicta. Distinctio dolores ipsa placeat deserunt vel maxime architecto sint quibusdam ducimus sed nostrum, ex dolor praesentium, eaque repellendus ratione excepturi quod debitis?
                                    </p>
                                </div>
                            </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> --}}
    
@endsection

<script>
    bulmaCarousel.attach('#carousel-demo', {
        slidesToScroll: 1,
        slidesToShow: 4
    });
</script>