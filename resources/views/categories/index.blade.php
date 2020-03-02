@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @foreach($categories as $item)

                <div>
                    Kategorija: {{ $item->title }}
                    <ul>
                        @foreach($item->products as $product)
                            <li>
                                <a href="{{ route('products.show', $product->id) }}">
                                    {{ $product->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            @endforeach
        </div>
    </div>
@endsection