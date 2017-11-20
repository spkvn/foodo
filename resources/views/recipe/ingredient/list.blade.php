@extends('layouts.foodo')

@section('content')
    <div class="row">
        <div class="columns large-12">
            <h1>{{$parent->name}}'s Ingredients</h1>
            <p>This recipe has {{$parent->ingredients()->count()}} Ingredients</p>
        </div>
    </div>
    <div class="row">
        <div class="columns small-12">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Unit</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($records as $ingredient)
                    <tr>
                        <td>{{$ingredient->name}}</td>
                        <td>{{$ingredient->pivot->quantity}}</td>
                        <td>{{$ingredient->pivot->unit}}</td>
                    </tr>
                @empty
                    <tr>
                        <td>No Ingredients</td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <div class="row">
                <div class="columns small-12">
                    {!! Form::label('search', 'Search Ingredients:') !!}
                    {!! Form::text('search', old('search'), ['placeholder'=>'Ingredient','id' => 'ingredient__search']) !!}
                </div>
            </div>
            <div class="row small-up-2 medium-up-3" id="search__results">

            </div>
        </div>
    </div>
@endsection