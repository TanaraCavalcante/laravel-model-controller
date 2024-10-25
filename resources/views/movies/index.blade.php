@extends("layouts.app")

@section("page-title", "Movies index")
   {{-- @dd($movies); --}}
@section("main-content")
    <h1 class="p-3">Movies</h1>
    <section class="container">
        <div class="row">
       @forelse ($movies as $movie)
        <div class="col-3 mb-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">{{$movie->original_title}}</h5>
                <h6 class="card-subtitle mb-3 text-body-secondary">{{$movie->title}}</h6>
                <p class="card-text mb-1">{{$movie->nationality}}</p>
                <p class="card-text mb-1">{{$movie->date}}</p>
                <p class="card-text">{{$movie->vote}}</p>
                </div>
            </div>
        </div>
       @empty
        <div class="col-10">
            <h1>No movies are avaliable at the moment...</h1>
        </div>
       @endforelse
        </div>
    </section>
@endsection
