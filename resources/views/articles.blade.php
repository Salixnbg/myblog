@extends('base')

@section('content')
    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <h1 class="display-3 text-center">Articles<h1>
        <div class="articles row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <div class="card my-5">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: bold">{{$article->title}}</h5>
                            <p class="card-text" style="font-size: 15px">{{$article->content}}</p>
                            <a href="#" class="btn btn-primary">
                                Lire la suite
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>   
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="d-flex justify-content-center mt-5">
            {{$articles->links()}}
        </div>
        

    </div>
    
@endsection