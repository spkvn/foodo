<ul class="menu vertical">
    <li><a href="{{route('login')}}">Log In</a></li>
    <li><a href="{{route('register')}}">Register</a></li>
    @if(!auth()->guest())
        {!! Html::logout("Log Out") !!}
        <li><a href="{{route('recipe.index')}}">Your Recipes</a></li>
        <li><a href="{{route('ingredient.index')}}">Ingredient</a></li>
    @else

    @endif

</ul>