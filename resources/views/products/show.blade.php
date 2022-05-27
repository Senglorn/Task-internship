@extends('layouts.master')

@section('title', 'Show Product')

@section('content')

    <div class="row">
        <div class="col-md-12 mt-3">
            <h2>Show Product Detail</h2>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12"> 
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Details</th>
                        <th style="text-align: center; width: 140px;" >Action</th>
                    </tr>
                </thead>
                <tbody class="table-success">
                        <tr>
                            <td>{{ $product-> id }}</td>
                            <td>{{ $product-> name }}</td>
                            <td>{{ $product-> detail }}</td>
                            <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    
                                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"> <i class="fas fa-edit"></i> </a>

                                    @csrf
                                    @method('DELETE')
                    
                                    <button type="submit" class="btn btn-danger"> <i class="fas fa-trash"></i> </button>
                                </form>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    <a href="{{ route('products.index') }}">
        <button class="btn btn-danger">
            <i class="fas fa-arrow-left"></i>&nbsp; Back
        </button>
    </a>
    
@endsection