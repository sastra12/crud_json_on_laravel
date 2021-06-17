@extends('master')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
          <div class="container">
              <div class="row">
                  <div class="col">
                      <div class="post-preview mb-3">
                          <div class="card" style="">
                              <div class="card-body">
                                  {{-- <div class="float-right">
                                      <a href="/edit/{{$item}}" class="card-title">Edit Berita</a>|
                                      <a href="{{route('delete',['item'=>$item])}}" class="card-title">Hapus Berita</a>
                                  </div> --}}
                                  <h6 class="card-subtitle mb-2 text-muted">{{$all['judul']}}</h6>
                                  <p class="card-text">Posted by {{$all['author']}} created post {{$all['datetime_submitted']}}</p>
                                  <p class="card-text">{{$all['content']}}</p>
                              </div>
                        </div>
                        <div class="clearfix mt-2">
                            <a class="float-right" href="{{route('back')}}">Kembali</a>
                        </div>
                      </div>
                  </div>
            </div>
        <!-- Pager -->
              </div>
      </div>
   </div>
  </div>
  <hr> 
@endsection