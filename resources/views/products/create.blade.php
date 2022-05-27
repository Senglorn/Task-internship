@extends('layouts.master')

@section('title', 'Create Product')

@section('content')

    <div class="row">
        <div class="col-md-12 mt-3">
            <h2>Add New Product</h2>
            <hr>
        </div>
    
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Sorry!</strong> You have some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Details:</strong>
                            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp; Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection