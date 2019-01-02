@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . $listing->name)

@section('content')
<!-- Site Content ============ -->
<section class="p_b70 p_t70">

<div class="container clearfix">

<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <table class="table table-bordered">
    @if(isset($listing))
        <tr><th>Name</th><td>{{$listing->name}}</td></tr>
        <tr><th>Category</th><td>{{ $listing->category->name }}</td></tr>
        <tr><th></th><td><img src="{{ url('storage/'.$listing->image['path']) }}" class="img-responsive"/></td></tr>
        <tr><th>Division</th><td>{{ $listing->division['name'] }}</td></tr>
        <tr><th>District</th><td>{{ $listing->district['name'] }}</td></tr>

    @endif

    </table>
</div>
</div>

    </div>

</section>

@endsection