@extends('layouts.foodo')
    
@section('content')
    <div class="row">
        <div class="columns large-12">
            <h1>Your Recipes</h1>
            <a href="{{route("$base.create")}}">Create a Recipe</a>
        </div>
    </div>
    <div class="row">
        @forelse($records as $recipe)
            <div class="columns large-12">
                <div class="columns large-10">
                    <h1>{{$recipe->name}}</h1>
                    <p>{{$recipe->author->username}}</p>
                    <p>Cooking Time: {{ $recipe->cooking_time }}</p>
                    <p>Preparation Time: {{$recipe->prep_time}}</p>
                    <div class="button-group">
                        <a href="{{route("$base.edit", $recipe->id)}}" class="button">Edit</a>
                        <a href="" class="button">Image</a>
                        <a href="" class="button">Steps</a>
                        <a href="" class="button">Ingredients</a>
                        <a href="" class="button">Delete</a>
                    </div>
                </div>
                <div class="columns large-2">
                    <img src="http://d3lp4xedbqa8a5.cloudfront.net/s3/digital-cougar-assets/food/2015/09/29/27317/HL0894B31.jpg?width=1229&height=768&mode=crop&quality=75" alt="placeholder soup">
                </div>
            </div>
        @empty
            <p>You have no recipes</p>
        @endforelse
    </div>
@endsection