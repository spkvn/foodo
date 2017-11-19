@extends('layouts.edit')
@section('formContent')
    <div class="row">
        <div class="columns large-12">
            <h1>Add/Edit Ingredient</h1>
        </div>
    </div>
    <div class="row">
        <div class="columns large-12">
            <fieldset>
                <div class="form__row">
                    {!! Form::label('name','Ingredient Name: ') !!}
                    {!! Form::text('name', (isset($record) ? $record->name: null),['placeholder'=>'Enter Name']) !!}
                    {!! $errors->first('name','<span class="form-error is-visible">:message</span>') !!}
                </div>
            </fieldset>
        </div>
    </div>
@endsection