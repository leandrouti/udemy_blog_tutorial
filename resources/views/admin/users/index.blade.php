@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Users
        </div>

        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>Avatar</th><th>Name</th><th>Permissions</th><th>Delete</th>
                </thead>

                <tbody>
                    @if($users->count() > 0)
                        @foreach($users as $user)
                            <tr>
                                <td><img src="{{ asset($user->profile->avatar) }}" alt="{{ $user->profile->avatar }}" height="30%" width="30%" /></td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    @if($user->admin)
                                        <a href="{{ route('user.not_admin', ['id' => $user->id ]) }}" class="btn btn-xs btn-danger">Remove Permission</a>
                                    @else
                                        <a href="{{ route('user.admin', ['id' => $user->id ]) }}" class="btn btn-xs btn-success">Make Admin</a>
                                    @endif
                                </td>
                                
                                <td>
                                    @if(Auth::id() != $user->id)
                                        <a href="{{ route('users.delete', ['id' => $user->id ]) }}" class="btn btn-xs btn-danger">Delete
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="5" class="text-center">No User</td></tr>
                    @endif

                </tbody>
            </table>
        
        </div>
        
        
    
    </div>
    

@stop