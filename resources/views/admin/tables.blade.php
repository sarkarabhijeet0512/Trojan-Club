@include('admin.layouts.header')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Users Comment Tables</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Registration No</th>
                                            <th>Comment</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($getComments as $Comments)
                                            <tr>
                                                <td>{{ $Comments->user['name'] }}</td>
                                                <td>{{ $Comments->user['regno'] }}</td>
                                                <td>{{ $Comments->comment }}</td>
                                                <td>{{ $Comments->created_at }}</td>
                                                <td>
                                                    <form action="/admin/disableComments" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $Comments->id }}">
                                                        <input type="hidden" name="status" value="{{ $Comments->is_active }}">
                                                        <button style="background-color: white;border: white;"><i class="fa fa-ban" aria-hidden="true" data-toggle="tooltip" title="Disable Comment"></i>Disable</button>
                                                    </form>
                                                </td>
                                                <td style="text-align: center;"><a href="{{ route('CommentDelete', ['id' => $Comments->id]) }}" class="btn btn-danger btn-del"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                                {{ $getComments->links() }}
                            </div>
                            @if($count > 0)
                                        <a href="/admin/disabledcomments" class="btn btn-danger">Show Disabled Comments</a>
                                    @else
                                    
                                    @endif
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@include('admin.layouts.footer');