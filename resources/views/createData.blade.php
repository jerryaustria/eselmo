<h1>This is a sample page to text</h1>






{!! Form::open(['method'=>'POST', 'action'=>'adminUsersController@store','files'=>true]) !!}
{{ csrf_field() }}
    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',old('name'),['class'=>'form-control', 'id'=>'name']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Email:') !!}
        {!! Form::email('email',old('email'),['class'=>'form-control', 'id'=>'email']) !!}
    </div>
        <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password',old('password'),['class'=>'form-control', 'id'=>'password']) !!}
        </div>

    <div class="form-group">
        {!! Form::label('role_id','Role:') !!}
        {!! Form::select('role_id',[''=>'Choose'] + $roles,null,['class'=>'form-control', 'id'=>'role']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active','Status:') !!}
        {!! Form::select('is_active',array(1=>'Active', 0=>'Not Active'),0,['class'=>'form-control', 'id'=>'is_active']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('file','Upload Photo') !!}
{{--        {!! Form::file('file[]',['class'=>'form-control', 'id'=>'file','multiple'=>'multiple']) !!}--}}
        {!! Form::file('file',['class'=>'form-control', 'id'=>'file']) !!}
    </div>

    <div class="form-group">
            {!! Form::submit('Submit', ['class'=>'btn btn-default']) !!}
    </div>



{!! form::close() !!}

@include('includes.form_error')