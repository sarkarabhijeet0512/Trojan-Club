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
                            <h6 class="m-0 font-weight-bold text-primary">Users Data</h6>
                            <input id="search" name="search" type="text" class="form-control search" placeholder="Search" />
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Event Image</th>
                                            <th>Name</th>
                                            <th>Event Description</th>
                                            <th>Description</th>
                                            <th>Time</th>
                                            <th>Disable</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($events as $getEvents)
                                            <tr>
                                                <td><img src="../{{ $getEvents->image}}" height="115px" width="200px" ></td>
                                                <td>{{ $getEvents->event_title }}</td>
                                                <td>{{ $getEvents->description }}</td>
                                                <td>{{ $getEvents->date }}</td>
                                                <td>TIME</td>
                                                <td>
                                                    <form action="/admin/disableEvents" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $getEvents->id }}">
                                                        <input type="hidden" name="status" value="{{ $getEvents->is_active }}">
                                                        <button style="background-color: white;border: white;" class="btn-d"><i class="fa fa-ban" aria-hidden="true" data-toggle="tooltip" title="Disable Comment"></i>Disable</button>
                                                    </form>
                                                </td>
                                                <td style="text-align: center;"><a href="{{ route('deleteEvents', ['id' => $getEvents->id]) }}" class="btn btn-danger btn-del"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                                {{ $events->links() }}
                            </div>
                        </div>
                    </div>
</section>

@include('admin.layouts.footer')
@endsection