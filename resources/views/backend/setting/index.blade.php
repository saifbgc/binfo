@extends('backend.layouts.app')

@section('title', app_name() . ' | '. __('labels.backend.access.settings.management'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @lang('labels.backend.access.settings.management')
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
            
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered" id="settings-table">
                        <thead>
                        <tr>
                            <th>@lang('labels.backend.access.settings.table.key')</th>
                            <th>@lang('labels.backend.access.settings.table.value')</th>
                            <th>@lang('labels.general.actions')</th>
                            <th>@lang('labels.general.actions')</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                        </thead>
                        
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection
@push('after-scripts')
<script>
$(function() {
    $('#settings-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('admin.settings.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'key', name: 'key' },
            { data: 'value', name: 'value' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush
