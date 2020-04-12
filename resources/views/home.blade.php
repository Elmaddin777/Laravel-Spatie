@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard 
                  
                  @can('write_post')
                    <a href="{{ route('post.insert') }}" class="float-right">add+</a></div>
                  @endcan
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($posts as $post)
                      {{ $post->body }} 
                      @can('edit_post')
                        <a href="{{ route('post.edit', $post->id) }}" class="float-right">edit</a>
                      @endcan
                      <br><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
