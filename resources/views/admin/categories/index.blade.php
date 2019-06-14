@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    @include('include.messages')
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-primary">Add New</a><br><br>
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @forelse ($categories as $category)
                        <tr>
                            <td>{{ $category->name}}</td>
                            <td>{{ $category->description}}</td>
                            <td>
                                <a href="{{ route('admin.categories.edit', $category->id)}}" class="btn btn-sm btn-primary">Edit</a>
                            </td>
                            <td>    
                                <form method="POST" action="{{ route('admin.categories.destroy', $category->id) }}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-sm btn-danger" type="submit" value="Delete" onClick="return confirm('Are you sure')">
                                </form>
                                
                            </td>
                        </tr>    
                        @empty
                        <tr>
                            <td colspan="4">No Categories Found</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
