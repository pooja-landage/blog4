@extends('layouts.app1')
@section('content')

        <!-- Top News Start-->
        <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 tn-left">
                    <div class="row tn-slider">
                            @foreach($all as $all )
                            
                            <div class="col-md-6">
                                <div class="cn-img">
                                <img src="{{ Voyager::image( $all ->image ) }}" width="450px" height="350px" style="width:100%">
					            <div class="cn-title">
                                        <a href="{{url('blog')}}/{{$all->id}}">{{ $all ->title }}</a>
                                </div>
                                </div>
                            </div>
                            @endforeach

                    </div>
                    </div>
                    <div class="col-md-6 tn-right">
                        <div class="row">
                            @foreach($sport as $sport )
                            <div class="col-md-6">
                                <div class="tn-img">
                                <img src="{{ Voyager::image( $sport ->image ) }}" width="225px" height="175px" style="width:100%">
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$sport->id}}">{{ $sport ->title }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Sports</h2>
                        <div class="row cn-slider">
                            @foreach($play as $play)
                            
                            <div class="col-md-6">
                                <div class="cn-img">
                                <img src="{{ Voyager::image( $play->image ) }}" style="width:100%" width="350px" height="223px">
					            <div class="cn-title">
                                        <a href="{{url('blog')}}/{{$play->id}}">{{ $play->title }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Technology</h2>
                        <div class="row cn-slider">
                            @foreach($technology as $technology)
                            
                            <div class="col-md-6">
                                <div class="cn-img">
                                <img src="{{ Voyager::image( $technology->image ) }}" style="width:100%" width="350px" height="223px">
					            <div class="cn-title">
                                        <a href="{{url('blog')}}/{{$technology->id}}">{{ $technology->title }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Business</h2>
                        <div class="row cn-slider">
                            @foreach($business as $business)
                            <div class="col-md-6">
                                <div class="cn-img">
                                <img src="{{ Voyager::image( $business->image ) }}" style="width:100%" width="350px" height="223px">
					            <div class="cn-title">
                                        <a href="{{url('blog')}}/{{$business->id}}">{{ $business->title }}</a>
                                </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Entertainment</h2>
                        <div class="row cn-slider">
                            @foreach($entertainment as $entertainment)
                            <div class="col-md-6">
                                <div class="cn-img">
                                <img src="{{ Voyager::image( $entertainment->image ) }}" style="width:100%" width="350px" height="223px">
					            <div class="cn-title">
                                        <a href="{{url('blog')}}/{{$entertainment->id}}">{{ $entertainment->title }}</a>
                                </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->
        
        <!-- Tab News Start-->
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="featured" class="container tab-pane active">
                                @foreach($featured as $featured )
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{ Voyager::image( $featured->image ) }} " style="width:100%" >
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$featured ->id}}">{{$featured ->title}}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div id="popular" class="container tab-pane fade">
                                @foreach($popular as $popular )
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{ Voyager::image( $popular->image ) }} " style="width:100%" >
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$popular ->id}}">{{$popular ->title}}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div id="latest" class="container tab-pane fade">
                                @foreach($lastest as $lastest )
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{ Voyager::image( $lastest->image ) }} " style="width:100%" >
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$lastest ->id}}">{{$lastest ->title}}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                                @foreach($viewed as $viewed )
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{ Voyager::image( $viewed->image ) }} " style="width:100%" >
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$viewed ->id}}">{{$viewed ->title}}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div id="m-read" class="container tab-pane fade">
                                @foreach($read as $read )
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{ Voyager::image( $read->image ) }} " style="width:100%" >
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$read ->id}}">{{$read ->title}}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div id="m-recent" class="container tab-pane fade">
                                @foreach($recent as $recent )
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{ Voyager::image( $recent->image ) }} " style="width:100%" >
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$recent ->id}}">{{$recent ->title}}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab News Start-->

        <!-- Main News Start-->
        <div class="main-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                    <div class="row">
                    @foreach($feat as $all )
                        
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="{{ Voyager::image( $all ->image ) }}" width="350px" height="223px" style="width:100%">
                                <div class="mn-title">
                                    <a href="{{url('blog')}}/{{$all->id}}">{{ $all ->title }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </div>
                            
                            
                        
                    </div>

                    <div class="col-lg-3">
                        <div class="mn-list">
                            <h2>Read More</h2>
                            <ul>
                                <li><a href="{{url('blog')}}/{{$all->id}}">{{$all->title}}</a></li>
                                <li><a href="{{url('blog')}}/{{$all->id}}">{{$business->title}}</a></li>
                                <li><a href="{{url('blog')}}/{{$all->id}}">{{$business->title}}</a></li>
                                <li><a href="{{url('blog')}}/{{$all->id}}">{{$sport ->title}}</a></li>
                                <li><a href="{{url('blog')}}/{{$all->id}}">{{$entertainment ->title}}</a></li>
                                <li><a href="{{url('blog')}}/{{$all->id}}">{{$technology ->title}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->

        @endsection  