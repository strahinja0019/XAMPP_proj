@extends('layouts.main')

@section('content')

<!--
<h1>Add new company</h1>

<a href="{{ route('companies.index') }}">Back to all Contacts</a>
-->
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Add New Company</strong>
              </div>           
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">Company</label>
                      <div class="col-md-9">
                        <input type="text" name="name" id="name" class="form-control is-invalid">
                        <div class="invalid-feedback">
                          Please choose a username.
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="address" class="col-md-3 col-form-label">Address</label>
                      <div class="col-md-9">
                        <input type="text" name="address" id="address" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="website" class="col-md-3 col-form-label">Website</label>
                      <div class="col-md-9">
                        <input type="text" name="website" id="website" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <input type="text" name="email" id="email" class="form-control">
                      </div>
                    </div>

                    

                    

                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a href="index.html" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</main>



@endsection