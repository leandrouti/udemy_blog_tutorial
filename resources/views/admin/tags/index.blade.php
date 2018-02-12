@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Tags
        </div>

        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>Tag</th><th>Edit</th><th>Delete</th>
                </thead>

                <tbody>
                    @if($tags->count() > 0)
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{ $tag->tag }}</td>
                                <td>
                                    <a href="{{ route('tags.edit', ['id' => $tag->id ]) }}" class="btn btn-xs btn-info">Edit
                                </td>
                                
                                <td>
                                    <a href="{{ route('tags.delete', ['id' => $tag->id ]) }}" class="btn btn-xs btn-danger">X
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="5" class="text-center">No Tags</td></tr>
                    @endif

                </tbody>
            </table>
        
        </div>
        
        
    
    </div>
    

@stop