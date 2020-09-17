@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Home
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You ({{ $user['name'] }}) are logged in! 
                    <br/>your id is {{ $user['id'] }} and your team id is {{ $user['team_id'] }}
                    <br />Your role is {{ $roles['title'] }}
                    <br/>You have the folowing permissions
					@foreach (array_keys($permissionsArray) as $permission)
					    <p>{{ $permission }}</p>
					@endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
