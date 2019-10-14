@extends('masterlayout')
@section('content')
    <div class="container pb-5 pt-5">
        <div class="row">
            <div class="col-1">
                <h2>GALLERY</h2>
            </div>
        </div>
        <div class="row">
            <div class="column">
                @foreach($galleryImages as $image)
                    @if($loop->index < 8)
                    <a href="#" data-toggle="modal" data-target="#myModal{{$image->id}}">
                        <div class="container-img">
                            <img id="myImg{{$image->id}}" src="{{$image->link}}"
                                 alt="Img{{$image->id}}"
                                 class="image">
                            <div class="overlay">
                                <div class="img-title font-weight-bolder" style="font-size: 35px"><i
                                        class="fas fa-hand-pointer"></i></div>
                            </div>
                        </div>
                    </a>

                    <div class="modal fade" id="myModal{{$image->id}}">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" style="background: rgba(255, 255, 255, 0)">

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                    <img id="img{{$image->id}}" src="{{$image->link}}"
                                         alt="Img{{$image->id}}"
                                         class="image">
                                    <div id="caption">{{$image->description}}</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="column">
                @foreach($galleryImages as $image)
                    @if($loop->index > 7)
                        <a href="#" data-toggle="modal" data-target="#myModal{{$image->id}}">
                            <div class="container-img">
                                <img id="myImg{{$image->id}}" src="{{$image->link}}"
                                     alt="Img{{$image->id}}"
                                     class="image">
                                <div class="overlay">
                                    <div class="img-title font-weight-bolder" style="font-size: 35px"><i
                                            class="fas fa-hand-pointer"></i></div>
                                </div>
                            </div>
                        </a>

                        <div class="modal fade" id="myModal{{$image->id}}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background: rgba(255, 255, 255, 0)">

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                                        <img id="img{{$image->id}}" src="{{$image->link}}"
                                             alt="Img{{$image->id}}"
                                             class="image">
                                        <div id="caption">{{$image->description}}</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
