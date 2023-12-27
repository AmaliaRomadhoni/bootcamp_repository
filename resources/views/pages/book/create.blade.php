@extends('layouts.app')
@section('content')

<h1 class="mb-0">Form Create</h1>
<hr />

    <form action="{{ route('book.store') }}" method="POST">
    
     
        @csrf


        
            <div class="form-group" mb-3>
                <label for="title">Title</label>
                <input type="text" name="name" class="form-control" placeholder="">
              @error('name')
              <small>
                {{ $message}}</small>
                @enderror
              </div>

             
  
              <div class="form-group">
                <label for="title">Author</label>
                <input type="text" name="author" class="form-control" placeholder="">
                @error('author')
                <small>
                  {{ $message}}</small>
                  @enderror
              </div>
  
              <div class="form-group">
                <label for="title">Year</label>
                <input type="text" name="year" class="form-control" placeholder="">
                @error('year')
                <small>
                  {{ $message}}</small>
                  @enderror
              </div>

              <div class="form-group">
                <label for="title">Deskripsi</label>
                <textarea class="form-control" name="description"></textarea>
                @error('description')
                <small>
                  {{ $message}}</small>
                  @enderror
            </div>
       
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection