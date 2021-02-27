@extends('admin.layouts.header')
@push('scripts')
<script type="text/javascript">
    var route = "{{ route('autocomplete') }}";
    $('#search').typeahead({
        source:  function (term, process) {
        return $.get(route, { term: term }, function (data) {
                return process(data);
            });
        }
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
                            <input id="search" name="search" type="text" class="form-control search" placeholder="Search" />
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
                                        @foreach($allusers as $users)
                                            <tr>
                                                <td><img src="../{{ $users->image }}" height="50rem"></td>
                                                <td>{{ $users->name }}</td>
                                                <td>{{ $users->email }}</td>
                                                <td>{{ $users->regno }}</td>
                                                <td>{{ $users->designation }}</td>
                                                <td>{{ $users->organisation }}</td>
                                                <td>{{ $users->phoneno }}</td>
                                                <td>{{ $users->status }}</td>
                                                <td>{{ $users->batch }}</td>
                                                <td>{{ $users->temp_city }}</td>
                                                <td>
                                                    <form action="/admin/disableUsers" method="post" class="storyForm">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $users->id }}">
                                                        <input type="hidden" name="status" value="{{ $users->is_active }}">
                                                        <button style="background-color: white;border: white;" class="btn-d"><i class="fa fa-ban" aria-hidden="true" data-toggle="tooltip" title="Disable Comment"></i>Disable</button>
                                                    </form>
                                                </td>
                                                <td style="text-align: center;"><a href="{{ route('deleteUsers', ['id' => $users->id]) }}" class="btn btn-danger btn-del"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                                {{ $allusers->links() }}
                                @if($Disabled > 0)
                                <a href="/admin/disabledUsers" class="btn btn-warning">Disabled Users</a>
                                @else
                                
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@include('admin.layouts.footer')
@endsection