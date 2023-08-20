@extends('layouts.app')

@section('title', 'todos | details')


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
					<h1>{{$todo->name}}</h1>
				</div>
				<div class="card-body">
					<p>{{$todo->details}}</p>
					<a href="{{route('todos.edit', $todo->id)}}" class="btn btn-primary btn-sm">Edit</a> ||
					<a href="{{route('todos.destroy', $todo->id)}}" class="btn btn-danger btn-sm">Delete</a>
				</div>
			</div>
		</div>

	</div>	

@endsection