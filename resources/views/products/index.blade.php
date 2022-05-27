@extends('layouts.master')

@section('title', 'Products List')

@section('content')

    <div class="row">
        <div class="col-md-12 mt-3">
            <h2>List of Products</h2>
            <hr> 
            <a href="{{ route('products.create') }}">
                <button class="btn btn-success pull-right">
                    <i class="fas fa-plus-circle"></i>&nbsp; Create
                </button>
            </a>
        </div>
    
        <div class="card-body"> 
            {{-- alert success message --}}
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Details</th>
                        <th style="text-align: center; width: 185px;" >Action</th>
                    </tr>
                </thead>
                <tbody class="table-success">
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product-> id }}</td>
                            <td>{{ $product-> name }}</td>
                            <td>{{ $product-> detail }}</td>
                            <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"> <i class="fas fa-eye"></i> </a>
                    
                                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"> <i class="fas fa-edit"></i> </a>

                                    @csrf
                                    @method('DELETE')
                    
                                    <button type="submit" class="btn btn-danger"> <i class="fas fa-trash"></i> </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
