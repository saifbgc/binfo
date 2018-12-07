@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<!-- Site Content ============ -->
<section class="p_b70 p_t70">

<div class="container clearfix">
{{--
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif	
--}}
<div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="add-listing-bg">
                    	
                    	{!! Form::open(['route' => 'frontend.user.addlisting.post' , 'files' => true]) !!}	

						<div class="row">
							
							<div class="col-md-12 col-sm-12 col-xs-12">
								
								
								<div class="listing-title-area">
									
									<div class="form-group {{ $errors->has('name') ? 'alert alert-danger' :'' }}">
							            {!! Form::label('name', 'Name') !!}<span>*</span>
            							{!! Form::text('name', null, ['placeholder' => 'Put Listing title here and tell the name of your business to the world','class'=>'form-control']) !!}
            							{!! $errors->first('name','<span class="help-block">:message</span>') !!}
							        </div>
									
								</div>
								
								
								
								
								<div class="listing-title-area">
									
									<div class="form-group {{ $errors->has('category_id') ? 'alert alert-danger' :'' }}">
							            {!! Form::label('category_id', 'Category') !!}<span>*</span>
							            
							            	<div class="single-query form-group">
                                            <div class="intro">
							            {!! Form::select('category_id', $categories, null, ['placeholder' => '... Select Category ...','class'=>'form-control']) !!}
							            
								            </div>
	                                        </div>
	                                        
	                                        {!! $errors->first('category_id','<span class="help-block">:message</span>') !!}
							        </div>
									
								</div>
								
								<div class="listing-title-area">
									<div class="form-group">
									 {!! Form::label('description', 'Description') !!}
									 {!! Form::textarea ('description', null, ['placeholder' => 'Put Listing description here and decribe your business to the world','class'=>'form-control']) !!}
									 </div>
								</div>
								
								
								<div class="listing-title-area">
									
									<div class="form-group">
							            {!! Form::label('registered_with', 'Owner') !!}
            							{!! Form::text('registered_with', null, ['placeholder' => 'Owner of this Business','class'=>'form-control']) !!}
							        </div>
									
								</div>
								
								<div class="listing-title-area">
									
									<div class="form-group {{ $errors->has('founded_at') ? 'alert alert-danger' :'' }}">
							            {!! Form::label('founded_at', 'Founded') !!}<span>*</span>
            							{!! Form::text('founded_at', null, ['placeholder' => 'Business Founded','class'=>'form-control']) !!}
            							{!! $errors->first('founded_at','<span class="help-block">:message</span>') !!}
							        </div>
									
								</div>
								
								<div class="listing-title-area">
									<div class="form-group {{ $errors->has('phone') ? 'alert alert-danger' :'' }}">
									 {!! Form::label('phone', 'Phone') !!}
									 {!! Form::text ('phone', null, ['placeholder' => 'Ex: 018XXXXXXXX, 019XXXXXXXX','class'=>'form-control']) !!}
									 {!! $errors->first('phone','<span class="help-block">:message</span>') !!}
									 </div>
								</div>
								
								<div class="listing-title-area">
									<div class="form-group {{ $errors->has('email') ? 'alert alert-danger' :'' }}">
									 {!! Form::label('email', 'Email') !!}
									 {!! Form::text ('email', null, ['placeholder' => 'Ex: someone@somewhere.com','class'=>'form-control']) !!}
									 {!! $errors->first('email','<span class="help-block">:message</span>') !!}
									 </div>
								</div>
								
								<div class="listing-title-area">
									<div class="form-group {{ $errors->has('website') ? 'alert alert-danger' :'' }}">
									 {!! Form::label('website', 'Website') !!}
									 {!! Form::text ('website', null, ['placeholder' => 'http://','class'=>'form-control']) !!}
									 {!! $errors->first('website','<span class="help-block">:message</span>') !!}
									 </div>
								</div>
								
								<div class="listing-title-area">
									<div class="form-group">
								            {!! Form::label('division_id', 'Division') !!}
								            
								            	<div class="single-query form-group">
	                                            <div class="divisionlist">
								            {!! Form::select('division_id', $division, null, ['placeholder' => '... Select Division ...','class'=>'form-control']) !!}
								            
									            </div>
		                                        </div>
							        </div>
								</div>
								
								{{--
								<div class="listing-title-area">
									<div class="form-group">
								            {!! Form::label('test_id', 'Test') !!}
								            
								            	<div class="single-query form-group">
	                                            <div class="">
								            {!! Form::select('test_id', [], null, ['placeholder' => '... Select Test ...','class'=>'form-control']) !!}
								            
									            </div>
		                                        </div>
							        </div>
								</div>
								--}}
								
								<div id="district_id_section" class="listing-title-area" style="display:none;">
									<div class="form-group">
								            {!! Form::label('district_id', 'District') !!}
								            
								            	<div class="single-query form-group">
	                                            <div class="districtlist">
								            {!! Form::select('district_id', [], null, ['placeholder' => '... Select District ...','class'=>'form-control']) !!}
								            
									            </div>
		                                        </div>
							        </div>
								</div>
								
								
								<div class="listing-title-area">
									<div class="form-group">
									 {!! Form::label('address', 'Address') !!}
									 {!! Form::textarea ('address', null, ['placeholder' => 'Address','class'=>'form-control']) !!}
									 </div>
								</div>
								
								<div class="listing-title-area">
									
									<div class="form-group {{ $errors->has('working_hour') ? 'alert alert-danger' :'' }}">
							            {!! Form::label('working_hour', 'Working Hour') !!}
            							{!! Form::text('working_hour', null, ['placeholder' => 'Ex: 10-12','class'=>'form-control']) !!}
							        	{!! $errors->first('working_hour','<span class="help-block">:message</span>') !!}
							        </div>
									
								</div>
								
								<div class="listing-title-area">
									
									<div class="form-group">
							            {!! Form::label('off_days', 'Off Days') !!}
            							{!! Form::text('off_days', "friday, saturday", ['placeholder' => 'Ex: Friday, Saturday','class'=>'form-control']) !!}
							        </div>
									
								</div>
								
								<div class="listing-title-area">
									<div class="form-group">
									 {!! Form::label('additional_information', 'Additional Information') !!}
									 {!! Form::textarea ('additional_information', null, ['placeholder' => 'Put Listing additional information here and decribe your business to the world','class'=>'form-control']) !!}
									 </div>
								</div>
								
								
								
								
							</div>
							
						</div>
						
						<div class="row">

                            <div class="col-md-12">
                                <label>Social Media Informations 
                                </label>
                            </div>

                            <div class="col-md-6 col-sm-6 col-sm-12">
                                <div class="form-group">
                                    
                                    {!! Form::text('facebook_url', null, ['placeholder' => 'Your Facebook URL','class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('googleplus_url', null, ['placeholder' => 'Your Google Plus URL','class'=>'form-control']) !!}
                                    
                                </div>
                                <div class="form-group">
                                   
                                    {!! Form::text('instagram_url', null, ['placeholder' => 'Your Instagram URL','class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-sm-12">
                                <div class="form-group">
                                	{!! Form::text('twitter_url', null, ['placeholder' => 'Your Twitter URL','class'=>'form-control']) !!}
                                    
                                </div>
                                <div class="form-group">
                                	{!! Form::text('linkedin_url', null, ['placeholder' => 'Your LinkedIn URL','class'=>'form-control']) !!}
                                    
                                </div>
                                <div class="form-group">
                                	{!! Form::text('youtube_url', null, ['placeholder' => 'Your Youtube URL','class'=>'form-control']) !!}
                                    
                                </div>
                            </div>

                        </div>
						
						
						<div class="row">
							
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group {{ $errors->has('phone') ? 'alert alert-danger' :'' }}">
									{!! Form::label('logo', 'Logo') !!}
									{!! Form::file('logo'); !!}
									{{--
									<div id="file-submit" class="dropzone dz-clickable">
										 {!! Form::file('logo'); !!}
										<div class="dz-default dz-message"><span>Click or Drop Images Here</span>
	                                    </div>
									</div>
									--}}
									
									{!! $errors->first('logo','<span class="help-block">:message</span>') !!}
							    </div>
							    
							    
							    
						
							</div>
							
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									{!! Form::button('Add',['type'=>'submit']) !!}
								</div>
							</div>
							
						</div>	

						{!! Form::close() !!}

					</div>
				</div>
</div>	
	








               	

</div>

</section>

@endsection


@prepend('after-scripts')
<script src="{{url('js/dropzone.min.js')}}"></script>
@endprepend

{{-- comment --}}

@push('after-styles')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.11/combined/css/gijgo.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/tokenfield-typeahead.min.css">
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



@endpush

@push('after-scripts')
<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.11/combined/js/gijgo.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.min.js"></script>
@endpush

@push('after-scripts')

<script>
	
	//test
	/*
	$("#test_id").zelect({
		//initial: "one",
		loader: function(term, page, callback) {
			callback(['one','two']);
		}
		
	});
	
	*/
	var url = '{!! url("/districtlist") !!}';
	/*
	$('.divisionlist select').on('change', function(evt, item) { 
		
		$('#district_id_section').show();
		
		var parent = item.value;
		
		
		$.get(url+'?parent=' + parent, function(data) {
			
			$('.districtlist select').resetZelect();
			
			//var optionArray = [];
			$('#test_id').empty();
			$.each(data, function(key, value) {
				var option = $("<option></option>")
	                  .attr("value", key)		                  
	                  .text(value);
	                  
	            //optionArray.push({key:value});       

				//$('.districtlist select').append(option);
				//$('#district_id').append(option);
				//$('#test_id').append(option);
				//$('.testid select').zelectItem('', true);
				//$('').resetZelect();
				
				$('#test_id').append(option);
				
				
			});
			//console.log(optionArray);
			//$('.testid').addClass('intro'); 
			//$(".testid select").zelect({})
			
			//$('#test_id').resetZelect();
			
		});
		
		
		
   });*/

	$('#division_id').change(function(e) {
		$('#district_id_section').show();
		var parent = e.target.value;
		$.get(url+'?parent=' + parent, function(data) {
			$('#district_id').empty();
			$.each(data, function(key, value) {
				var option = $("<option></option>")
	                  .attr("value", key)		                  
	                  .text(value);

				$('#district_id').append(option);
			});
		});
	});
	
	$('#founded_at').datepicker({
            //uiLibrary: 'bootstrap4',
            showOnFocus: true, 
            showRightIcon: false,
            format:'yyyy-mm-dd' 
        });
	
	$('#off_days').tokenfield({
  autocomplete: {
    source: ['friday','saturday','sunday','monday','tuesday','wednesday','thursday'],
    delay: 100,
    limit:7
  },
  showAutocompleteOnFocus: true
});


$('#off_days').on('tokenfield:createtoken', function (event) {
    var existingTokens = $(this).tokenfield('getTokens');
    $.each(existingTokens, function(index, token) {
        if (token.value === event.attrs.value)
            event.preventDefault();
    });
});
	
</script>

@endpush