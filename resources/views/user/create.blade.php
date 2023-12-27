@extends('layouts.app')
@section('content')

<h1 class="mb-0">Form Create</h1>
<hr />

    <form action="{{ route('user.store') }}" method="POST">
    
     
        @csrf
        
            <div class="form-group" mb-3>
                <label for="title">Name</label>
                <input type="text" name="name" class="form-control" placeholder="">
              @error('name')
              <small>
                {{ $message}}</small>
                @enderror
              </div>

             
  
              <div class="form-group">
                <label for="title">Email</label>
                <input type="email" name="email" class="form-control" placeholder="">
                @error('author')
                <small>
                  {{ $message}}</small>
                  @enderror
              </div>
  
              <div class="form-group">
                <label for="title">Password</label>
                <input type="password" name="password" class="form-control" placeholder="">
                @error('author')
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