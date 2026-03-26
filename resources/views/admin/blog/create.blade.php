@extends('admin.master')

@section('content')
    <!--begin::Quick Example-->
    <div class="row g-4 container mt-4">
    <div class="col-md-12 ">
                <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header">
                    <div class="card-title">Add New Blog</div>
                  </div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{url('/admin-store-blog')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="title" class="form-label">Blog title</label>
                        <input type="text" name="title" class="form-control" id="title" required />
                        
                      </div>
                      <div class="mb-3">
                        <label for="subtitle" class="form-label">Blog subtitle</label>
                        <input type="text" name="subtitle"  class="form-control" id="subtitle" required/>
                      </div>
                     <div class="mb-3">
                        <label for="author_name" class="form-label">author name</label>
                        <input type="text" name="author_name"  class="form-control" id="author_name" required/>
                      </div>
                     <div class="mb-3">
                        <label for="Blog_details" class="form-label">Blog details</label>
                        <textarea name="Blog_details" class="form-control" id="summernote" required></textarea>
                      </div>
                      <div class="input-group mb-3">
                        <input type="file" name="image" class="form-control" id="image" accept="image/*" required/>
                        <label class="input-group-text" for="image">Uplode image</label>
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Quick Example-->

    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
  $('#summernote').summernote();
});
    </script>
@endpush