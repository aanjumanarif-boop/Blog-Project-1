@extends('admin.master')
@section('content')

<!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12 mt-3">
                <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Message</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
            
                      <tr>
                          <th style="width: 10px">#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Message</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($messages as $message)
                          <tr class="align-middle">
                          <td>{{$loop->index+1}}</td>
                          <td>{{$messages->Name?? 'Not found'}}</td>
                          <td>{{$messages->Email?? 'Not found'}}</td>
                          <td>{{$messages->Phone?? 'Not found'}}</td>
                          <td>{{$messages->message}}</td>
                          <td>
                     
                           <a href="{{url('/admin/contact-messages/delete/'.$message->id)}}" onclick="return confirm('Are you sure')" class="btn btn-danger">Deleit</a>

                          </td>
                        </tr>
                      @endforeach
 
                      </tbody>
                    </table>
                  </div>
                  {{-- {{$blogs->links('pagination::bootstrap-5')}} --}}
                </div>
              </div>
             </div>
           </div>
         @endsection