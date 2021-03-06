@extends('layouts.app')
@include('partials.stylesheet')
@include('partials.header')

<link rel="stylesheet" href="{{asset('css/float.css')}}">
@section('title', 'Page Title')


{{-- <div class="col-md-11 col-md-offset-0"> --}}

<div class="col-sm-10 col-md-12 " >

@section('content')

<div class="panel panel-default">





	

			<div class="panel-body">


	@if(Session::has('success'))

	<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<div id="confirm-message" class="alert alert-success pull-center">
					{{----{{ Session::get('Success') }}----}}

					    Thank You!!!  Your Order is Placed, Wait for few moment
				</div>
			</div>

	</div>

	@endif


	

	<hr>

	<div role="separator" class="divider"> </div>





	<div class="container" >




<h2>{{$name}} </h2>

		

			@foreach($products->chunk(4) as $productChunk)

				<div class="row">
					@foreach($productChunk as $product)




						  	<div class="col-sm-1 col-md-3">
							    <div class="thumbnail">


							      <img src="{{asset($product->imagepath)}}" alt="...">
								      <div class="caption">
								        <h3><strong>{{$product->title}} </strong> </h3>
								        
								        <p class="description">{{$product->description}}</p> 					           		
								       	<div class="pull-left price">Rs.{{$product->price}}</div>
								        <div class="clearfix"><a href="{{ route('product.addToCart',['id'=> $product->id])}}" class="btn btn-success pull-right" role="button">Buy</a> </div>
								      </div>
								</div>
							</div>
					@endforeach
						
				</div>

			@endforeach

	</div>


                    <!--fin buttons -->
	</div>
</div>

<script>
    $('#flash-overlay-modal').modal();
</script>


@stop





