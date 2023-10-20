@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? "{{ __('Show') Producto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $producto->name }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $producto->costo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Existencia:</strong>
                            {{ $producto->existencia }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $producto->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Provedor:</strong>
                            {{ $producto->provedor }}
                        </div>
                        <div class="form-group">
                            <strong>Creacion:</strong>
                            {{ $producto->creacion }}
                        </div>
                        <div class="form-group">
                            <strong>Actualizacion:</strong>
                            {{ $producto->actualizacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
