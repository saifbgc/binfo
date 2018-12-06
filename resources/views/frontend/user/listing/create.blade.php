@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<!-- Site Content ============ -->
<section class="p_b70 p_t70">

<div class="container clearfix">
	

<div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="add-listing-bg">
                    	
                    	{!! Form::open(['route' => 'frontend.user.addlisting.post' , 'files' => true]) !!}	

						<div class="row">
							
							<div class="col-md-12 col-sm-12 col-xs-12">
								
								
								<div class="listing-title-area">
									
									<div class="form-group">
							            {!! Form::label('name', 'Name') !!}
            							{!! Form::text('name', null, ['placeholder' => 'Put Listing title here and tell the name of your business to the world','class'=>'form-control']) !!}
							        </div>
									
								</div>
								
								
								
								
								<div class="listing-title-area">
									
									<div class="form-group">
							            {!! Form::label('category', 'Category') !!}
							            
							            	<div class="single-query form-group">
                                            <div class="intro">
							            {!! Form::select('category_id', $categories, null, ['placeholder' => '... Select Category ...','class'=>'form-control']) !!}
							            
								            </div>
	                                        </div>
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
									<div class="form-group">
									 {!! Form::label('phone', 'Phone') !!}
									 {!! Form::text ('phone', null, ['placeholder' => 'Ex: 018XXXXXXXX, 019XXXXXXXX','class'=>'form-control']) !!}
									 </div>
								</div>
								
								<div class="listing-title-area">
									<div class="form-group">
									 {!! Form::label('website', 'Website') !!}
									 {!! Form::text ('website', null, ['placeholder' => 'http://','class'=>'form-control']) !!}
									 </div>
								</div>
								
								<div class="listing-title-area">
									<div class="form-group">
								            {!! Form::label('division_id', 'Division') !!}
								            
								            	<div class="single-query form-group">
	                                            <div class="intro">
								            {!! Form::select('division_id', $division, null, ['placeholder' => '... Select Division ...','class'=>'form-control']) !!}
								            
									            </div>
		                                        </div>
							        </div>
								</div>
								
								
								<div id="district_id_section" class="listing-title-area" style="display:none;">
									<div class="form-group">
								            {!! Form::label('district_id', 'District') !!}
								            
								            	<div class="single-query form-group">
	                                            <div class="intro">
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
									
									<div class="form-group">
							            {!! Form::label('working_hour', 'Working Hour') !!}
            							{!! Form::text('working_hour', null, ['placeholder' => 'Ex: 10-12','class'=>'form-control']) !!}
							        </div>
									
								</div>
								
								<div class="listing-title-area">
									
									<div class="form-group">
							            {!! Form::label('off_days', 'Off Days') !!}
            							{!! Form::text('off_days', null, ['placeholder' => 'Ex: Friday, Saturday','class'=>'form-control']) !!}
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
                                <label>Social Media Informations <span>*</span>
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
								<div class="form-group">
									{!! Form::label('logo', 'Logo') !!}
									<div id="file-submit" class="dropzone dz-clickable">
										 {!! Form::file('logo'); !!}
										<div class="dz-default dz-message"><span>Click or Drop Images Here</span>
	                                    </div>
									</div>
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

@push('after-scripts')

<script>
	var url = '{!! url("/districtlist") !!}';

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
</script>

@endpush