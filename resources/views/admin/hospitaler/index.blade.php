@extends('admin.layout.base')

@section('title', 'Hospital ')

@section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
        @if(Setting::get('demo_mode') == 1)
        <div class="col-md-12" style="height:50px;color:red;">
                    ** Demo Mode : No Permission to Edit and Delete.
                </div>
                @endif
            <h5 class="mb-1">
                Hospital
                @if(Setting::get('demo_mode', 0) == 1)
                <span class="pull-right">(*personal information hidden in demo)</span>
                @endif
            </h5>
            <a href="{{ route('admin.hospital-manager.create') }}" style="margin-left: 1em;" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> @lang('admin.account-manager.add_new_account_manager')</a>
            <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hospitalers as $index => $hospitaler)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $hospitaler->name }}</td>
                        @if(Setting::get('demo_mode', 0) == 1)
                        <td>{{ substr($hospitaler->email, 0, 3).'****'.substr($hospitaler->email, strpos($dispatcher->email, "@")) }}</td>
                        @else
                        <td>{{ $hospitaler->email }}</td>
                        @endif
                        @if(Setting::get('demo_mode', 0) == 1)
                        <td>{{ substr($hospitaler->mobile, 0, 5).'****' }}</td>
                        @else
                        <td>{{ $hospitaler->mobile }}</td>
                        @endif
                        <td>
                            <form action="{{ route('admin.hospital-manager.destroy', $hospitaler->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                @if( Setting::get('demo_mode') == 0)
                                <a href="{{ route('admin.hospital-manager.edit', $hospitaler->id) }}" class="btn btn-info"><i class="fa fa-pencil"></i>Edit</a>
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
                                @endif
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection