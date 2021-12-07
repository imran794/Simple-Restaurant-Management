@extends('layouts.app')

@section('title','Slider')

@push('css')
   <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/dataTables.bootstrap4.min.css') }}">
@endpush

@section('content')
  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Slider List</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                   <table id="table" class="table table-striped table-bordered" style="width:100%">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Image</th>
                        <th>Created AT</th>
                      </thead>
                      <tbody>
                      	@foreach ($sliders as $key=>$slider)
                        <tr>
                          <th>{{ $key + 1 }}</th>
                          <th>{{ $slider->title }}</th>
                          <th>{{ $slider->sub_title }}</th>
                          <th>{{ $slider->image }}</th>
                          <th>{{ $slider->created_at }}</th>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

        </div>
    </div>
</div>


@endsection


@push('js')
<script src="{{ asset('backend/assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
	$(document).ready(function() {
    $('#table').DataTable();
} );
</script>
@endpush