
@extends('layouts.app')

@section('title', 'todos | Home')


@section('content')
	<div class="row mt-5 justify-content-center">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header">
					<h1>All Task</h1>
				</div>
				<div class="card-body">
					<ul class="list-group">
						@foreach ($todos as  $todo)
						<li class="list-group-item">{{$todo->name}}
							<a href="{{route('todos.show', $todo->id)}}" class="btn btn-primary btn-sm float-end">View</a>

							@if(!$todo->completed)
							<a href="{{route('todos.completed', $todo->id)}}" class="btn btn-warning btn-sm mx-2 float-end">Pending</a>
							@endif
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>

	</div>	
	@endsection
