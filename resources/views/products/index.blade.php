{{-- Nurodome, koki layouta naudosim --}}
@extends('layouts.app')

{{-- sita dalis turi vadintis taip kaip,pavadinata,

resources/views/layouts/app.blade
@yield() dalis
--}}
@section('content')
    <div class="col-sm-12">
        <h1>Produktai</h1>
    </div>

    @foreach($products as $product)
        <div class="col-sm-6">
            <h3>{{ $product->title }}
                {{--<a href="/products/delete/{{ $product->id }}" class="btn btn-sm btn-danger">
                    Istrinti
                </a>--}}

                <a href="{{ route('products.delete', $product->id) }}" class="btn btn-sm btn-danger">
                    Istrinti
                </a>
            </h3>
            <small>{{ $product->price }}€</small>
            <hr>
        </div>
    @endforeach
@endsection