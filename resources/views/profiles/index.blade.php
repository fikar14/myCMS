@extends('layouts.manage')

@section('title')
    Profile
@endsection

@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column is-10 is-offset-2 m-t-50">
                <h1 class="title m-l-10">Profile</h1>
                <hr class="m-t-0">

                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
        
                <div class="columns">
                    <div class="column is-12">
                        <profile-component></profile-component>  
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        var app = new Vue({
            el:'#app',
            data: {

            }
        });
    </script>
@endsection