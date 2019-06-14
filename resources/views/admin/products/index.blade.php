@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>
                <div class="card-body">
                    @include('include.messages')
                    <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-primary">Add New</a><br><br>
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                        @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->name}}</td>
                            <td>{{ $product->description}}</td>
                            <td>{{ $product->category->name}}</td>
                            <td>{{ $product->price}}</td>
                            <td>
                                <a href="{{ route('admin.products.edit', $product->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <form method="POST" action="{{ route('admin.products.destroy', $product->id) }}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-sm btn-danger" type="submit" value="Delete" onClick="return confirm('Are you sure')">
                                </form>
                            </td>
                        </tr>    
                        @empty
                        <tr>
                            <td colspan="3">No Product Found</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
