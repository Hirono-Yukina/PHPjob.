@extends('layouts.app')
@section('title', 'つぶやき　一覧')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
            <div class="card p-3">本文</div>
                <form class="card p-3 mb-2" action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">


                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <div class="card-body">
                            <div class="w-ful mx-auto">
                            <input class="form-control" type="text" name="body" value="{{ old('body') }}">
                            </div>
                        </div>
                        
                    </div>
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="text-right">
                        <input type="submit" class="btn btn-primary" value="つぶやく">
                    </div>
                    
                </form>
                <div>
                    @foreach($posts as $post)
                    <div class="card p-2">
                    @foreach($users as $user)
                    @if($post->user_id == $user->id)
                    <div>{{ $user->name}}</div>
                    <div class="text-right">{{ $post->created_at}}</div>
                    <div>{{ $post->body}}</div>
                    @if($post->user_id == Auth::user()->id)
                    <div class="text-right"><a class="text-danger" href="{{ action('PostController@delete',['id'=>$post->id]) }}">削除</a></div>
                    @endif
                    @endif
                    @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection