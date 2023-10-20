<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $producto->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costo') }}
            {{ Form::text('costo', $producto->costo, ['class' => 'form-control' . ($errors->has('costo') ? ' is-invalid' : ''), 'placeholder' => 'Costo']) }}
            {!! $errors->first('costo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $producto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('existencia') }}
            {{ Form::text('existencia', $producto->existencia, ['class' => 'form-control' . ($errors->has('existencia') ? ' is-invalid' : ''), 'placeholder' => 'Existencia']) }}
            {!! $errors->first('existencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::text('categoria', $producto->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('provedor') }}
            {{ Form::text('provedor', $producto->provedor, ['class' => 'form-control' . ($errors->has('provedor') ? ' is-invalid' : ''), 'placeholder' => 'Provedor']) }}
            {!! $errors->first('provedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('creacion') }}
            {{ Form::text('creacion', $producto->creacion, ['class' => 'form-control' . ($errors->has('creacion') ? ' is-invalid' : ''), 'placeholder' => 'Creacion']) }}
            {!! $errors->first('creacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('actualizacion') }}
            {{ Form::text('actualizacion', $producto->actualizacion, ['class' => 'form-control' . ($errors->has('actualizacion') ? ' is-invalid' : ''), 'placeholder' => 'Actualizacion']) }}
            {!! $errors->first('actualizacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>