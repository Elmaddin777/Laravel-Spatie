@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard 
                
                <div class="card-body">
                    <form class="" action="" method="post">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" rows="8" cols="80" class="form-control">{{ $post->body }}</textarea>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
