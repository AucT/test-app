@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">#{{ $user->id }} {{ $user->name }} {{ $user->last_name }}</div>

                    <div class="card-body">
                        <b>Id:</b> {{ $user->id }}

                        <br><b>Name:</b> {{ $user->name }}

                        <br><b>LastName:</b> {{ $user->last_name }}
                        <br><b>Birthday:</b> {{ $user->birthday }}
                        <br><b>Country:</b> {{ $user->country->name }}
                        <br><b>Programming Language:</b> {{ $user->programmingLanguage->name }}
                        <br><b>Registered:</b> {{ $user->created_at }}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
