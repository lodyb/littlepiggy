@extends('tpl/base')

@section('hero')
    <h1>Users</h1>
@stop

@section('content')
<div class="list-table">
@foreach ($data as $user)
	<div class="list-item">
		<div class="avatar" style="width:5rem;">
			<div class="avatar-image image"></div>
		</div>
		<div class="name">
			<div>{{$user['name']}}</div>
			<div>{{$user['user_first_name']}} {{$user['user_last_name']}}</div>
		</div>
		<div class="role">
			<div>{{config("custom.roles.".$user['user_type'])}}</div>
		</div>
		<div class="action">
			<button>edit</button>
			<button>ban</button>
		</div>
	</div>
@endforeach
</div>
@stop