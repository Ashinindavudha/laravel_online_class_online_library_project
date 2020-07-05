

@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <form action="{{ route('search') }}" method="POST">
    @csrf
    <input type="text" name="query" />
    <input type="submit" class="btn btn-sm btn-primary" value="Search" />
</form>
    </div>
    <div class="row">
        
        <table class="table">
                        <thead>
                            <tr>
                                <th>Company name</th>
                                <th>Category</th>
                                <th>Added on</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($books as $book)
                                <tr>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->category->name }}</td>
                                    <td>{{ $book->created_at }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No companies found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>


    </div>
</div>
@endsection
