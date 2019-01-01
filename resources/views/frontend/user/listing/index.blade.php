@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . 'My Listing')

@section('content')
<!-- Site Content ============ -->
<section class="p_b70 p_t70">

<div class="container clearfix">

<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <table class="table table-bordered">
    <tr>
    <th>
    Name
    </th>
    <th>
    Category
    </th>    
    <th>    
    </th>
    </tr>
    @foreach ($listings as $listing)
        <tr>
        <td>
        {{ $listing->name }}
        </td>
        <td>
        {{ $listing->category->name }}
        </td>
        <td>
        <a class="btn btn-primary" href="{{url('mylisting/'.$listing->id)}}">Show Details</a>
        </td>
        </tr>
    @endforeach
    </table>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">

{{ $listings->links() }}
    </div>
</div>


</div>

</section>

@endsection