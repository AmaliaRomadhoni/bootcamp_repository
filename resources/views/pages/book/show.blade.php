@extends('layouts.app')

@section('content')

<h1 class="mb-0">Form Create</Form></h1>
   

    

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="name" class="form-control" placeholder="" value="{{ $book->name }}" readonly>
    </div>

    <div class="form-group">
        <label for="title">Author</label>
        <input type="text" name="author" class="form-control" placeholder="" value="{{ $book->author }}" readonly>
    </div>

    <div class="form-group">
        <label for="title">Year</label>
        <input type="text" name="year" class="form-control" placeholder="" value="{{ $book->year }}" readonly>
    </div>
    <div class="form-group">
        <label for="title">Deskripsi</label>
        <input type="text" name="description" class="form-control" placeholder="" value="{{ $book->description }}" readonly>
    </div>
    
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $book->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $book->updated_at }}" readonly>
        </div>
    </div>
        <div class="row">
            <div class="d-grid">
                <a href="{{ route('book.index') }}" button class="btn btn-secondary">Back</button>
            </div>
        
    </form>
   
      
@endsection