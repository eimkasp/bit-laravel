@extends('layouts.app')


@section('content')
    <div class="col-md-12">
        <h1> Sukurti produkta </h1>
    </div>
    <div class="col-md-6">
        <form method="post" action="{{ route('products.store') }}">
            @csrf

            <div class="form-group">
                <input type="text" required placeholder="Pavadinimas" name="title" class="form-control" />
            </div>

            <div class="form-group">
                <input type="text" required placeholder="Kaina" name="price" class="form-control" />
            </div>

            <div class="form-group">
                <select required name="category_id" class="form-control">
                    <option disabled>Pasirinkite kategorija</option>
                    @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" />
            </div>
        </form>
    </div>

@endsection