@extends('layouts.app')

@section('title','Slider')

@push('css')

@endpush

@section('content')
  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Slider</h4>
                </div>
                <div class="card-body">
                      <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Slider Title</label>
                          <input type="text" class="form-control" name="title">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Slider Sub Title</label>
                          <input type="text" class="form-control" name="sub_title">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Image</label>
                          <input type="file" name="image">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>

        </div>
    </div>
</div>


@endsection


@push('js')

@endpush