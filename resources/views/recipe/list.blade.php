@extends('layouts.foodo')
    
@section('content')
    <div class="row">
        <div class="columns large-12">
            <h1>Your Recipes</h1>
            <a href="{{route("$base.create")}}">Create a Recipe</a>
        </div>
    </div>
    <p><button class="button" data-open="exampleModal1">Click me for a modal</button></p>
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
                        {!! Html::delete("$base.destroy", $recipe->id) !!}
                        {{--<a href="" class="button">Delete</a>--}}
                        <a href="" class="button">Image</a>
                        <a href="" class="button">Steps</a>
                        <a href="" class="button">Ingredients</a>
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

    <div class="reveal" id="exampleModal1" data-reveal>
        <h1>Awesome. I Have It.</h1>
        <p class="lead">Your couch. It is mine.</p>
        <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endsection