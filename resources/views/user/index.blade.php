@extends('layouts.app')
@section('content')

<!-- /.row -->
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <td class="align-middle"><h3>Data User</h3></h3>
 
            <div class="card-tools">
            <div class="input-group input-group-sm" style="width:350px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
            
              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>

              <td><div>  <a href="{{ route('user.create') }}" button class="btn btn-primary">+Add</a>
        </div></td>
              
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

                <tbody>
           
                    @foreach($data as $d)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $d->name }}</td>
                            <td class="align-middle">{{ $d->email }}</td>
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="#" class="btn btn-success"><i class="fas fa-pen"></i></a>
                                    <form action="{{ route('user.destroy', $d->id) }}" method="POST" type="button" class="nav-link text-danger  p-0" onsubmit="return confirm('Delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="nav-link text-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                        </tr>
                    @endforeach
            
            </tbody>
          </table>
        </div>
      
      </div>
      
    </div>
  </div>


    </table>
@endsection