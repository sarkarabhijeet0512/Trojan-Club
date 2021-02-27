@extends('admin.layouts.header')
@push('scripts')
<style type="text/css">
    label{
            margin-top: 2rem;
            margin-bottom:0!important; 
    }
</style>
@section('content')
<section>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Users Feedback Data</h6>
                            <input id="search" name="search" type="text" class="form-control search" placeholder="Search" />
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($feedback as $getfeedback)
                                            <tr>
                                                <td>{{ $getfeedback->name }}</td>
                                                <td>{{ $getfeedback->email }}</td>
                                                <td>{{ $getfeedback->phone }}</td>
                                                <td>{{ $getfeedback->message  }}</td>
                                                <td style="text-align: center;"><a href="" class="btn btn-danger btn-del"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                                {{ $feedback->links() }}
                            </div>
                        </div>
                    </div>
</section>

@include('admin.layouts.footer')
@endsection