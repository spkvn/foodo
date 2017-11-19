@extends('layouts.foodo')
    
@section('content')
    <div class="row">
        <div class="columns large-12">
            <h1>Ingredients</h1>
            <p>You have contributed {{auth()->user()->ingredients()->count()}} Ingredients</p>
            <a href="{{route("$base.create")}}">Create an Ingredient</a>
        </div>
    </div>
    <div class="row small-up-2 medium-up-3">
        @forelse($records as $ingredient)
            <div class="column">
                <div class="card">
                    <div class="card-divider">
                        <p><strong>{{$ingredient->name}}</strong></p>
                    </div>
                    <img src="https://maxpull-tlu7l6lqiu.stackpathdns.com/wp-content/uploads/2017/05/zone-8-banana-400x267.jpg" alt="Placeholder">
                    <div class="card-section">
                        <p>This ingredient has been used in {{$ingredient->recipes->count()}} recipes.</p>
                        <a href="{{route("$base.edit",$ingredient->id)}}">Edit</a>
                        <a href="">Images</a>
                    </div>
                </div>
            </div>
        @empty
            <p>There's 0 ingredients in the site. You can be the first.</p>
        @endforelse
    </div>
@endsection