@extends('hospitaler.layout.base')

@section('title', 'Update Profile ')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">

			<h5 style="margin-bottom: 2em;">Update Profile</h5>
                <!-- @foreach($hospitaler as $data)
                   {{$hospitaler}}
                @endforeach -->
            <form class="form-horizontal" action="{{route('dispatcher.profile.update')}}" method="POST" enctype="multipart/form-data" role="form">
            	{{csrf_field()}}

				<div class="form-group row">
					<label for="name" class="col-xs-2 col-form-label">Name</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{$hospitaler->name }}" name="name" required id="name" placeholder=" Name">
					</div>
				</div>

				<div class="form-group row">
					<label for="email" class="col-xs-2 col-form-label">Email</label>
					<div class="col-xs-10">
						<input class="form-control" type="email" required name="email" value="{{$hospitaler->email }}" id="email" placeholder="Email">
					</div>
				</div>

				<div class="form-group row">
					<label for="mobile" class="col-xs-2 col-form-label">Mobile</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="{{ $hospitaler->mobile }}" name="mobile" required id="mobile" placeholder=" Mobile">
					</div>
				</div>

				<div class="form-group row">
					<label for="zipcode" class="col-xs-2 col-form-label"></label>
					<div class="col-xs-10">
						<button type="submit" class="btn btn-primary">Update Profile</button>
					</div>
				</div>
			</form>
		</div>
    </div>
</div>

@endsection
