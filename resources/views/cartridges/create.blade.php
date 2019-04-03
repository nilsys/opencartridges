@extends('layouts.app')

@section('content')
@if(auth()->user())
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-neon">Register a new cartridge</div>
                <form class="needs-validation" novalidate>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title" class="form-label">{{ __('cartridges.title') }} <span class="text-danger">*</span></label>
                            <input type="text" id="title" name="title" class="form-control form-control-sm" required>
                        </div>

                        <div class="form-group">
                            <label for="manufacturer" class="form-label">{{ __('app.manufacturer') }} <span class="text-danger">*</span></label>
                            <select name="manufacturer" id="manufacturer" class="form-control" required>
                                <option value="" selected="">{{ __('app.choose-option') }}</option>
                                @foreach($Manufacturers as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('manufacturer'))
                            <div class="invalid-feedback">
                                <span class="text-danger">{{ $errors->first('manufacturer') }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="series" class="form-label">{{ __('app.serie') }} <span class="text-danger">*</span></label>
                            <select id="series" name="series" class="form-control" required>
                                <option value="" selected="">{{ __('app.choose-option') }}</option>
                                @foreach($Manufacturers as $item)
                                    @foreach($item->series as $serie)
                                        <option value="{{ $serie->name }}" data-chained="{{ $item->name }}">{{ $serie->name }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                            @if ($errors->has('serie'))
                            <div class="invalid-feedback">
                                <span class="text-danger">{{ $errors->first('serie') }}</span>
                            </div>
                            @endif                            
                        </div>

                        <div class="form-group">
                            <label for="model" class="form-label">{{ __('app.model') }} <span class="text-danger">*</span></label>
                            <select id="model" name="models" class="form-control" multiple="multiple" required>
                                @foreach($Series as $SeriesItem)
                                    @foreach($SeriesItem->models as $ModelItem)
                                        <option value="{{ $ModelItem->name }}" data-chained="{{ $SeriesItem->name }}">{{ $ModelItem->name }}</option>
                                    @endforeach
                                @endforeach
                            </select>

                            @if ($errors->has('model'))
                            <div class="invalid-feedback">
                                <span class="text-danger">{{ $errors->first('model') }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="vendorCode" class="form-label">{{ __('cartridges.vendor_code') }} <span class="text-danger">*</span></label>
                            <input type="text" id="vendorCode" name="vendor_code" class="form-control form-control-sm" required>
                        </div>

                    </div>

                    <div class="card-footer text-muted">
                        <button type="button" id="btn-submit" class="btn btn-primary">{{ __('app.save') }}</button>
                        <button type="reset" class="btn btn-danger">{{ __('app.reset') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        $("#manufacturer").select2({theme: 'classic'});
        $("#series").select2({theme: 'classic'}).chained("#manufacturer");
        $("#model").select2({theme: 'classic'}).chained("#series");

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#btn-submit").click(function(e){
            e.preventDefault();
            var manufacturer = $("select[name=manufacturer]").val();
            var serie = $("select[name=series]").val();
            var model = $("select[name=models]").val();

            var title = $("input[name=title]").val();
            var vendor_code = $("input[name=vendor_code]").val();

            $.ajax({
                url: '{{ url('/ajaxRequest') }}',
                type:'POST',
                data:{manufacturer:manufacturer, serie:serie, model:model, title:title, vendor_code:vendor_code},
                datatype: 'JSON',
                success: function (data) {
                    if($.isEmptyObject(data.error)){
                        // $('#btn-submit').prop('disabled', 'disabled');
                        bootbox.confirm(data.success, function(result){
                        /* your callback code */ 
                    });
                        console.log(data);
                    } else {
                        bootbox.alert(data.error[0]);
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
</script>
@endpush

@else
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <h5>{{ __('auth.unauthenticated')}}</h5><hr>
                    <p>{{ __('auth.required') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
