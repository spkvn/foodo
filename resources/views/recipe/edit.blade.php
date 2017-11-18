@extends('layouts.edit')
@section('formContent')
    <div class="row">
        <div class="columns large-12">
            <fieldset>
                <div class="form__row">
                    {!! Form::label('name','Name: ') !!}
                    {!! Form::text('name', (isset($record) ? $record->name: null),['placeholder'=>'Enter Name']) !!}
                    {!! $errors->first('name','<span class="form-error is-visible">:message</span>') !!}

                    {!! Form::label('prep_time','Preparation Time (min): ') !!}
                    {!! Form::number('prep_time', (isset($record) ? $record->prep_time: null)) !!}
                    {!! $errors->first('prep_time','<span class="form-error is-visible">:message</span>') !!}

                    {!! Form::label('cooking_time','Cooking Time (min): ') !!}
                    {!! Form::number('cooking_time', (isset($record) ? $record->cooking_time: null)) !!}
                    {!! $errors->first('cooking_time','<span class="form-error is-visible">:message</span>') !!}
                </div>
            </fieldset>
        </div>
    </div>
@endsection