@extends('cms.parent')

@section('title','Create Income Type')
@section('page-name','Create Income Type')
@section('main-page','Income Types')
@section('sub-page','Create Income Type')

@section('styles')
    <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('cms/plugins/toastr/toastr.min.css') }}">
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Income Type</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="create_form">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="name">Details</label>
                    <input type="text" class="form-control" id="details" placeholder="Enter details">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-switch">
                      <input type="checkbox" name="active" class="custom-control-input" id="active">
                      <label class="custom-control-label" for="active">Active Status</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" onclick="performStore()" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
    <!-- Toastr -->
    <script src="{{ asset('cms/plugins/toastr/toastr.min.js') }}"></script>

    <script>
      function performStore(){
        let data = {
          name: document.getElementById ('name').value,
          details: document.getElementById ('details').value,
          active: document.getElementById('active').checked,
        }
        store('/cms/admin/income-types', data)
      }
    </script>

@endsection
