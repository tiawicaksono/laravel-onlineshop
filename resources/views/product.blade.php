@extends('layouts.app')

@section('style')
<style>
    
</style>
@endsection
@section('content')
<div class="container">
    <div class="col-md-2">

    </div>
    <div class="col-md-10">
    <div class="col-md-12 mb-3">
      <div class="row" style="background-color: #F5F5F5">
        <div class="col-md-1 pt-1">
          <div class="row">
            sort by : 
          </div>
        </div>
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-3">
              <button class="btn btn-warning form-control  btn-block">Popular</button>
            </div>
            <div class="col-md-3">
              <button id="btnSubmit" class="btn btn-outline-warning form-control btn-block">
                <span style="color: black">Latest</span>
              </button>
            </div>
            <div class="col-md-3">
              <button id="btnSubmit" class="btn btn-outline-warning form-control btn-block">
                <span style="color: black">Top Sales</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
      @foreach ($product as $key => $result)
        @if($key%6==0)
          @php echo "<div class='row'>"; @endphp
        @endif
        <div class="col-md-2 p-0 m-0">
          <div class="card">
            <img src="{{ URL::asset('/images/product/'.$result->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $result->name }}</h5>
              <p class="card-text">{{ substr($result->description,0,20) }}</p>
              <p class="card-text">Rp {{ number_format($result->price) }}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        @php $key++; @endphp
        @if($key%6==0)
          @php echo "</div>"; @endphp
        @endif
      @endforeach
    </div>
</div>
@endsection