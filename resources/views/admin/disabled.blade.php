@extends('admin.layouts.header')
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(function(){
        setTimeout(function() {
            $('.alert').slideUp();
        }, 3000);
    });
    </script>
@section('content')
    
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Users Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Profile-Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Reg-No</th>
                                            <th>Designation</th>
                                            <th>Organization</th>
                                            <th>Phone No</th>
                                            <th>status</th>
                                            <th>Batch</th>
                                            <th>Current City</th>
                                            <th>Disable</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($disabledusers as $user)
                                            <tr>
                                                <td><img src="../{{ $user->image }}" height="50rem"></td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->regno }}</td>
                                                <td>{{ $user->designation }}</td>
                                                <td>{{ $user->organisation }}</td>
                                                <td>{{ $user->phoneno }}</td>
                                                <td>{{ $user->status }}</td>
                                                <td>{{ $user->batch }}</td>
                                                <td>{{ $user->temp_city }}</td>
                                                <td>
                                                    <form action="/admin/enableUsers" method="post" class="storyForm">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                                        <input type="hidden" name="status" value="{{ $user->is_active }}">
                                                        <button style="background-color: white;border: white;" class="btn-d"><i style="color: #0fe30f;font-size: xx-large;" class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="Enable User"></i>Enable</button>
                                                    </form>
                                                </td>
                                                <td style="text-align: center;"><a href="/delete?id={{ $user->id}}" class="btn btn-danger btn-del"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach
                                    
                                    </tbody>
                                    {{ $disabledusers->links() }}
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@include('admin.layouts.footer')
@endsection