@extends('master')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <form name="" id="contactForm" novalidate="" action="/createform" method="POST">
          @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Judul</label>
                <input name="judul" autocomplete="off" type="email" class="form-control" placeholder="Judul">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group floating-label-form-group controls">
              <label>Author</label>
              <input autocomplete="off" name="author" type="email" class="form-control" placeholder="Author">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Content</label>
              <textarea rows="5" class="form-control" placeholder="Content" name="content"></textarea>
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