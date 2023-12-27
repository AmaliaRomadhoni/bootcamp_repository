@extends('layouts.app')
@section('content')



<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <td class="align-middle"><h3>Data Repository</h3></h3>
 
            <div class="card-tools">
            <div class="input-group input-group-sm" style="width:350px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
            
              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>

              <td><div>  <a href="{{ route('book.create') }}" button class="btn btn-primary">+Add</a>
        </div></td>
              
            </div>
          </div>
        </div>


 <!-- /.card-header -->
 <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <thead>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
                <th>No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($books->count() > 0)
                @foreach($books as $book)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $book->name }}</td>
                        <td class="align-middle">{{ $book->author }}</td>
                        <td class="align-middle">{{ $book->year }}</td>
                        <td class="align-middle">{{ $book->description }}</td>
                        <td class="align-middle">
                            
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('book.show', $book->id)}}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('book.edit', $book->id)}}" class="btn btn-success"><i class="fas fa-pen"></i></a>
                                    <form action="{{ route('book.destroy', $book->id) }}" method="POST" type="button" class="nav-link text-danger  p-0" onsubmit="return confirm('Delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="nav-link text-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                        </tr>
                @endforeach
            @else 
                <tr>
                    <td class="text-center" colspan="5">Book not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection