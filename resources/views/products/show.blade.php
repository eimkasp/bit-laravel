@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>
                {{ $product->title }}
            </h1>
        </div>

        <div class="col-md-12">
            <small>{{ $product->price() }}</small>

        </div>


        <div class="col-md-12">
            Produkto kategorija: {{ $product->category->title }}
        </div>
    </div>

@endsection