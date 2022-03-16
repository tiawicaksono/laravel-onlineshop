@extends('layouts.app')

@section('style')
<style>
    div.item {
        /* To correctly align image, regardless of content height: */
        vertical-align: top;
        display: inline-block;
        /* To horizontally center images and caption */
        text-align: center;
        /* The width of the container also implies margin around the images. */
        width: 120px;
    }
    .item img {
        width: 100px;
        height: 100px;
    }
    .item .caption {
        /* Make the caption a block so it occupies its own line. */
        display: block;
    }
    .item a{
      color: black;
      text-decoration: none;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 m-0 p-0">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{URL::asset('/images/banner/banner1.png')}}" width="100%" />
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{URL::asset('/images/banner/banner2.png')}}" width="100%" />
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{URL::asset('/images/banner/banner3.png')}}" width="100%" />
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="col-md-12 mb-3">
                <img src="{{URL::asset('/images/1.png')}}" width="100%" />
            </div>
            <div class="col-md-12">
                <img src="{{URL::asset('/images/2.png')}}" width="100%" />
            </div>
        </div>
    </div>

    <div class="row mt-5">
      <div class="row">
        <h5 class="fw-bold">CATEGORIES</h5>
      </div>
      <div class="row">
        <div id="myCarousel" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  @foreach($first as $colNo=>$result)
                    @if($colNo%10==0)
                      @php echo "<div class='row'>"; @endphp
                    @endif
                    
                    <div class="item">
                      <a href="{{ url('showproduct',['id' => $result->id]); }}">
                        <img src="{{URL::asset('/images/icon_category/'.$result->icon);}}"/>
                        <span class="caption">{{$result->category_name}}</span>
                      </a>
                    </div>
                    
                    @php $colNo++; @endphp
      
                    @if($colNo%10==0)
                      @php echo "</div>"; @endphp
                    @endif
                    
                  @endforeach
              </div>
              <div class="carousel-item">
                  @foreach($second as $colNo=>$result)
                    @if($colNo%10==0)
                      @php echo "<div class='row'>"; @endphp
                    @endif
                    
                    <div class="item">
                      <a href="{{ url('showproduct',['id' => $result->id]); }}">
                        <img src="{{URL::asset('/images/icon_category/'.$result->icon);}}"/>
                        <span class="caption">{{$result->category_name}}</span>
                      </a>
                    </div>
                    @php $colNo++; @endphp
      
                    @if($colNo%10==0)
                      @php echo "</div>"; @endphp
                    @endif
                  @endforeach
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
      </div>
    </div>
</div>
@endsection