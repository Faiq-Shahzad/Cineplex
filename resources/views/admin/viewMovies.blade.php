@extends('layouts.adminlayout')

<style>
    div{
        color: wheat;
    }

    img{
        max-width: 100px;
        max-height: 100px;
    }
</style>

@section('content')

    <table class="table table-striped table-dark">
        <thead>
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Rating</th>
            <th scope="col">Year</th>
            <th scope="col">Cover</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($movielist as $movie)
                <tr class="text-center">
                    <th scope="row">{{ $movie->id }}</th>
                    <td>{{ $movie->movie_name }}</td>
                    <td>{{ $movie->movie_description }}</td>
                    <td>{{ $movie->ratings }}</td>
                    <td>{{ $movie->year }}</td>
                    <td><img src="{{ asset('covers/'.$movie->movie_cover) }}" alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1>ANC</h1>

    <div>
        @php
            echo $movielist
        @endphp
        @foreach ($movielist as $movie)
            {{ $movie->movie_name }}
            
        @endforeach
    </div>
    
    
@endsection