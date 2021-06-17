@extends('master')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <form name="" id="contactForm" novalidate="" action="{{route('editform',request()->segment(count(request()->segments())))}}" method="POST">
          @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Judul</label>
                <input autocomplete="off" name="judul" class="form-control" placeholder="Judul" required="" value="{{$all['judul']}}">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group floating-label-form-group controls">
              <label>Author</label>
              <input autocomplete="off" name="author" class="form-control" placeholder="Author" value="{{$all['author']}}">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Content</label>
              <textarea rows="5" class="form-control" placeholder="Content" name="content">{{$all['content']}}</textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection