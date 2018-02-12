@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Trashed Posts
        </div>
        
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>Image</th><th>Post Name</th><th>Restore</th><th>Delete</th>
                </thead>

                <tbody>
                    @if($posts->count() > 0)
                        @foreach($posts as $post)
                            <tr>
                                <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" height="30%" width="30%" /></td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <a href="{{ route('post.restore', ['id' => $post->id ]) }}" class="btn btn-xs btn-success">Restore
                                </td>
                                
                                <td>
                                    <a href="{{ route('post.kill', ['id' => $post->id ]) }}" class="btn btn-xs btn-danger">Delete
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="5" class="text-center">No trashed posts</td></tr>
                    @endif
                </tbody>
            </table>
        
        </div>
        
        
    
    </div>
    

@stop