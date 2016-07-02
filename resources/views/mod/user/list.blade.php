@extends('tpl/base')

@section('hero')
    <h1>Users</h1>
@stop

@section('content')
<div class="list-table">
@foreach ($data as $user)
	<div class="list-item">
		<div class="avatar" style="width:5rem;">
			<div class="avatar-image image" style="background-image:url('{{$user['avatar']}}');"></div>
		</div>
		<div class="name">
			<div>{{$user['name']}}</div>
			<div>{{$user['steamid']}}</div>
		</div>
		<div class="action">
			<button>edit</button>
			<button>ban</button>
		</div>
	</div>
@endforeach
</div>
@stop