@extends('layouts.layout')

<style>
    .jumbotron{
        width: 25%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 2%;
    }
</style>


@section('content')

    <div class="jumbotron text-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{ __('You are logged in!') }}
    </div>


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection 

<script>
    setTimeout(function(){
        $('.jumbotron').slideUp(1500);
    }, 2000);
</script>

