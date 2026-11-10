@extends('layouts.main')

@section('content')


<main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Companies</h2>
                    <div class="ml-auto">
                      <a href="{{ route('companies.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6"></div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col">
                        <div class="input-group mb-3">
                          <select class="custom-select">
                            <option value="" selected>All Companies</option>
                            <option value="1">Company One</option>
                          </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Website</th>
                      <th scope="col">Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($companies as $index => $company)

                      <tr>
                      <th scope="row">{{$index + 1}}</th>
                      <td>{{$company->name}}</td>
                      <td>{{$company->address}}</td>
                      <td>{{$company->website}}</td>
                      <td>{{$company->email}}</td>
                      <td width="150">
                        <a href="{{ route('companies.show',$company->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="form.html" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                      </td>
                    </tr>

                    @endforeach


                    
                  </tbody>
                </table> 


              </div>
            </div>
          </div>
        </div>
      </div>
</main>




@endsection