@extends('dashboard.layouts.master')

@section('title', "| Edit Category")

@section('content')

	{{ Form::model($category, ['route' => ['admin.category.update', $category->id], 'method' => "PUT"]) }}

		{{ Form::label('name', "Title:") }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}

		{{ Form::submit('Save Changes', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;']) }}
	{{ Form::close() }}

@endsection
