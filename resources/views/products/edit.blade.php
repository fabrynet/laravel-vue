@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                  @isset($prod)
                    <h1>
                      Edit Product:
                      {{ $prod -> name }}
                    </h1>
                    <a href="{{ route('products.show', $prod -> id) }}">
                      Show Product
                    </a>
                  @else
                    <h1>New Product</h1>
                    <a href="{{ route('products.index') }}">Index Products</a>
                  @endisset

                </div>

                <div class="card-body">

                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif

                  <form action="
                    @isset($prod)
                      {{ route('products.update', $prod -> id) }}
                    @else
                      {{ route('products.store') }}
                    @endisset
                    "
                    method="post">
                    @csrf
                    @method('POST')

                    <fieldset>
                      <div class="form-group">
                        <label for="img">Img</label>
                        <input class="form-control" type="text" name="img" value=
                          @isset($prod)
                            "{{ $prod -> img }}"
                          @else
                            "https://lorempixel.com/200/300/?59575"
                          @endisset
                        >
                      </div>
                    </fieldset>

                    <div class="form-group">
                      <label for="name">Name</label>
                      <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value=
                        @isset($prod)
                          "{{ $prod -> name }}"
                        @endisset
                        "{{ old('name') }}"
                      required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="short_desc">Short Desc</label>
                      <input class="form-control @error('short_desc') is-invalid @enderror" type="text" name="short_desc" value=
                        @isset($prod)
                          "{{ $prod -> short_desc }}"
                        @endisset
                        "{{ old('short_desc') }}"
                        required>
                        @error('short_desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="desc">Desc</label>
                      <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" rows="8" cols="80"  required>{{ old('desc') }}@isset($prod){{ $prod -> desc }}@endisset
                      </textarea>
                      @error('desc')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="price">Price ($)</label>
                        <input class="form-control" type="number" name="price" value=
                        @isset($prod)
                          "{{ $prod -> price }}"
                        @endisset
                        "{{ old('price') }}"
                          required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="qty">Quantity</label>
                        <input class="form-control" type="number" name="qty" value=
                        @isset($prod)
                          "{{ $prod -> qty }}"
                        @endisset
                        "{{ old('qty') }}"
                          required>
                      </div>
                    </div>

                    <button class="btn btn-primary" type="submit" name="button">
                      @isset($prod)
                        Update
                      @else
                        Create
                      @endisset
                    </button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
