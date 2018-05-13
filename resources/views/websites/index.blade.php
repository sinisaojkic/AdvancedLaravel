@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 style="color: olivedrab">The below articles came from this website:</h3>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            @foreach($websites as $website)
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <p>

                                            <a href="{{ $website->url }}">
                                                {{ $website->url }}
                                            </a>
                                        </p>
                                        <br>
                                        <p>
                                            @foreach($website->articles as $article)
                                                {{ $article->title }}
                                                <br>
                                            @endforeach
                                        </p>
                                    </h4>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection