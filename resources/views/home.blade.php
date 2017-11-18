@extends('layouts.foodo')

@section('content')
<div class="row">
    <div class="medium-4">
        <h1>{{auth()->user()->username}}</h1>
        <p> 0 Recipes</p>
        <p> Avg recipe rating</p>
    </div>
    <div class="medium-4">
        <h2>Recipe name</h2>
        <p>Recipe description</p>
        <p>rating goes here</p>
    </div>
    <div class="medium-4">
        <ul>
            <li>
                x rated ur recipe as 'sick'
            </li>
            <li>
                x rated ur recipe as 'nasty (good)'
            </li>
            <li>
                x rated ur recipe as 'lame'
            </li>
        </ul>
    </div>
</div>
@endsection
