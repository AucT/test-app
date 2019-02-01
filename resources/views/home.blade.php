@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif



                        @if(count($users))
                            <table class="table">
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Country</th>
                                    <th></th>
                                </tr>


                                @foreach($users as $user)

                                    <tr>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->last_name }}
                                        </td>
                                        <td>
                                            {{ $user->country->name }}
                                        </td>
                                        <td><a href="{{ route('users.show', ['user' => $user->id]) }}">View</a></td>
                                    </tr>

                                @endforeach
                            </table>

                            @if ($users->total() > $users->count())
                                {!! $users->links() !!}
                            @endif

                        @else

                            <p>No users yet</p>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
