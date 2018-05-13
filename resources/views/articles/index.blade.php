@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Articles</div>

                    <div class="card-body">

                        <div class="list-group">
                            @foreach($articles as $article)
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        {{ $article->title }}
                                    </h4>

                                    <p>
                                        by <a href="{{ route('article',['user' => $article->user->id]) }}">{{ $article->user->name }}</a>
                                    </p>

                                    <p class="list-group-item-text">
                                        {{ $article->body }}
                                    </p>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>
                <br>
                <div class="text-center">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>

    </div>
@endsection