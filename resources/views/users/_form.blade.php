@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach
@endif

<div class="form-group">
    {!! Form::label('name', 'First Name') !!}
    {!! Form::text('name', null) !!}
</div>

<div class="form-group">
    {!! Form::label('name', 'Last Name') !!}
    {!! Form::text('name', null) !!}
</div>

<div class="form-group">
    {!! Form::label('age', 'Age', []) !!}
    {!! Form::number('age', null, ['min'=>18 , 'max'=>100]) !!}
</div>
@if ($errors->has('age')) 
    <div style="color:red">{{ $errors->first('age')}}</div>
@endif

<div class="form-group">
    {!! Form::label('email', 'Email Address') !!}
    {!! Form::email('email', null,) !!}
</div>

<div class="form-group">
    {!! Form::label('phone_number', 'Phone Number') !!}
    {!! Form::text('phone_number', null) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password') !!}
</div>

<div class="form-group">
    {!! Form::label('country/region', 'Country/Region') !!}
    {!! Form::select('country/region', $locations, null, ['placeholder' => 'Select From']) !!}
</div>

<div class="form-group">
    {!! Form::label('profile_pic', 'Profile Cover', []) !!}
    {!! Form::file('profile_pic', []) !!}
</div>

<div class="form-group">
    {!! Form::label('url', 'URL') !!}
    {!! Form::text('url', null) !!}
</div>

<div class="form-group">
    {!! Form::label('provider', 'Provider') !!}
    {!! Form::text('provider', null) !!}
</div>

<div class="form-group">
    {!! Form::label('provider_id', 'Provider_id') !!}
    {!! Form::text('provider_id', null) !!}
</div>

{!! Form::submit('Save',[]) !!}
{!! Form::reset('Reset',[]) !!}