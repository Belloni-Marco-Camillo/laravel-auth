@extends('layouts.admin')

@section('content')
    <div class="container text-center">
        <form action="{{route('admin.posts.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">tile</label>
              <input type="title" class="form-control" id="title" aria-describedby="titleHelper" value="{{old ('title')}}">
            </div>

            <div class="form-group">
              <label for="cover_img">cover_img</label>
              <input type="text" name="cover_img" id="cover_img" class="form-control">
            </div>

            <div class="form-group">
                <label for="creator">creator</label>
                <input type="title" class="form-control" id="creator" aria-describedby="createHelper" value="{{old ('create')}}">
            </div>

            <div class="form-group">
                <label for="text_body">text_body</label>
                <textarea name="text_body" id="text_body" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    

@endsection