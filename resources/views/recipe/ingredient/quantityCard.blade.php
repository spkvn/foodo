<div class="card">
    <div class="card-divider">
        <p><strong>{{$ingredient->name}}</strong></p>
    </div>
    <img src="https://maxpull-tlu7l6lqiu.stackpathdns.com/wp-content/uploads/2017/05/zone-8-banana-400x267.jpg" alt="Placeholder">
    <div class="card-section">
        {{--route('recipe.ingredient.add')--}}
        {!! Form::open(['url' => route('recipe.ingredient.add', ['recipe' =>$recipe->id, 'ingredient' => $ingredient->id]) , 'method' => "POST"]) !!}
        {!! Form::label('quantity', "Quantity: ") !!}
        {!! Form::number('quantity',null,['placeholder' => "$ingredient->name quantity"]) !!}
        {!! Form::label('unit', 'Unit of Measurement:') !!}
        {!! Form::select('unit', ['g' => 'Grams', 'kg' => 'Kilograms', 'ml' => 'Milliliters', 'l' =>'Liters'], null, ['placeholder' => 'Unit']) !!}
        {!! Form::submit('Submit') !!}
        {!! Form::close() !!}
    </div>
</div>