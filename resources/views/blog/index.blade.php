  @extends('master')

  @section('content')
    <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
          <div class="container">
              <div class="row">
                  <div class="col">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @elseif (session('berhasil'))
                    <div class="alert alert-success">
                      {{ session('berhasil') }}
                    </div>
                    @endif
                      @foreach ($json as $item => $obj)
                      <div class="post-preview mb-3">
                          <div class="card" style="">
                              <div class="card-body">
                                  <div class="float-right">
                                      <a href="{{route('edit',['item'=>$item])}}" class="card-title">Edit Berita</a>|
                                      <a href="{{route('delete',['item'=>$item])}}" class="card-title">Hapus Berita</a>
                                  </div>
                                  <h6 class="card-subtitle mb-2 text-muted">{{$obj['judul']}}</h6>
                                  <p class="card-text">Posted by {{$obj['author']}} created post {{$obj['datetime_submitted']}}</p>
                                  <p class="card-text">{{Str::limit($obj['content'], 20, ' ...')}}</p>
                              </div>
                              <div class="clearfix mt-2">
                                  <a class="float-right" href="{{route('show',['id'=>$item])}}">Baca Selengkapnya</a>
                              </div>
                        </div>
                      </div>
                      @endforeach
                  </div>
            </div>
        <!-- Pager -->
              </div>
      </div>
   </div>
  </div>
  <hr>  
  @endsection
  