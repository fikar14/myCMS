@extends('layouts.manage')

@section('title')
    Create New Blog Post
@endsection

@section('content')
    <div class="flex-container">
        <div class="column is-10 is-offset-2 m-t-50">
            <h1 class="title m-b-5">Create New Post</h1>
            <hr class="m-t-5">

            <div class="columns">
                <div class="column is-9">
                    <form action="{{ route('blog.store') }}" method="POST">
                        @csrf
                        <div class="field">
                            <div class="control is-large">
                                <input class="input is-large" type="text" name="title" placeholder="Title" v-model="title">
                            </div>
                        </div>
                        <slug-widget url="{{url('/blog')}}/" :title="title" @slug-changed="updateSlug"></slug-widget>
                        <br>
                        <b-field>
                            <b-input type="textarea"
                                name="blog"
                                rows="30"
                                placeholder="Make original content don't copy paste!!!">
                            </b-input>
                        </b-field>
        
                    </form>
                </div> <!-- end of is-three-quarters -->

                <div class="column is-3">
                    <div class="columns">
                        <div class="column is-full">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                        <figure class="image is-48x48">
                                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                                        </figure>
                                        </div>
                                        <div class="media-content">
                                            <p class="title is-5">Zulfikar</p>
                                            <p class="subtitle is-6">@fikar14</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-content">
                                        <p class="is-size-7 has-text-centered"><strong>Draft Saved</strong> a few minutes ago (saved)</p>
                                        </div>
                                    </div>
                                    <div class="columns is-variable is-1">
                                        <div class="column is-6 save-draft">
                                            <button class="button is-link is-outlined is-fullwidth">Save Draft</button>
                                        </div>
                                        <div class="column is-6 publish-button">
                                            <button class="button is-success is-fullwidth">Publish</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column is-full">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media">
                                        <div class="column is-12">
                                            <div class="file is-boxed">
                                                <label class="file-label">
                                                    <input class="file-input" type="file" name="cover">
                                                    <span class="file-cta">
                                                    <span class="file-icon">
                                                        <i class="fas fa-upload"></i>
                                                    </span>
                                                    <span class="file-label">
                                                        Choose a file…
                                                    </span>
                                                    </span>
                                                </label>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
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
                title: '',
                slug: '',
                // api_token: '{{Auth::user()}}'
            },
            methods: {
                updateSlug: function(val){
                    this.slug = val;
                }
            }
        });
    </script>
@endsection