<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('costo') }}
            {{ Form::text('costo', $pedido->costo, ['class' => 'form-control' . ($errors->has('costo') ? ' is-invalid' : ''), 'placeholder' => 'Costo']) }}
            {!! $errors->first('costo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('productos_id') }}
            {{ Form::text('productos_id', $pedido->productos_id, ['class' => 'form-control' . ($errors->has('productos_id') ? ' is-invalid' : ''), 'placeholder' => 'Productos Id']) }}
            {!! $errors->first('productos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>