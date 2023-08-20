@extends('layouts.app')

@section('title', 'todos | create')


@section('content')

	<div class="row mt-5 justify-content-center">
		<div class="col-lg-6">
			@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
      @endif
			<div class="card">
				<div class="card-header">
					<h1>Create Task</h1>
				</div>
				<div class="card-body">
					<form action="{{route('todos.store')}}" method="POST">
						@csrf
						<div class="my-4">
							<label>Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="my-4">
							<label>Details</label>
							<textarea name="details" class="form-control"></textarea>
						</div>
						<div class="d-grid">
							<input type="submit" name="submit" class="btn btn-success" value="Create">
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>	

@endsection