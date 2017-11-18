@extends('layouts.foodo')

@section('content')
    <div class="row">
        <div class="columns large-12">
            @if (isset($record))
                @if(isset($parent))
                    {!! Form::model($record, ['route' => isset($updateRoute) ? $updateRoute : [$base.'.update', $parent->id,$record->id], 'method' => 'PUT', 'files' => true, 'id' => '']) !!}
                @else
                    {!! Form::model($record, ['route' => isset($updateRoute) ? $updateRoute : [$base.'.update', $record->id], 'method' => 'PUT', 'files' => true, 'id' => '']) !!}
                @endif
            @else
                @if(isset($parent))
                    {!! Form::open(['route' => isset($createRoute) ? $createRoute : [$base.'.store', $parent->id], 'method' => 'POST', 'files' => true, 'id' => '']) !!}
                @else
                    {!! Form::open(['route' => isset($createRoute) ? $createRoute : $base.'.store', 'method' => 'POST', 'files' => true, 'id' => '']) !!}
                @endif
            @endif

            @yield('formContent')

            <div class="">
                <a class="float-left" href="{{ \Illuminate\Support\Facades\URL::previous() }}">Cancel</a>
                {!! Form::submit('Save changes', array('class' => 'float-right')) !!}
            </div>

    {!! Form::close() !!}
</div>
</div>
@endsection