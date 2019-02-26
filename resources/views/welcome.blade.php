@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('app.helper') }}</div>
                <form action="{{ route("cartridge.lookup") }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="manufacturer" class="form-label">{{ __('app.manufacturer') }} <span class="text-danger">*</span></label>
                            <select id="manufacturer" name="manufacturer" class="form-control" required>
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
                            <select id="series" name="serie" class="form-control" required>
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
                            <select id="model" name="model" class="form-control" required>
                                <option value="" selected="">{{ __('app.choose-option') }}</option>
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
                    </div>
                    <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i> {{ __('app.search') }}
                        </button>

                        <button type="reset" class="btn btn-danger">{{ __('app.reset') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="clearfix">&nbsp;</div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col-lg-8">Cartridge</th>
                        <th scope="col">Vendor code</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>    
</div>

@push('scripts')
    <script type="text/javascript">
        $("#manufacturer").select2({theme: 'classic'});
        $("#series").select2({theme: 'classic'}).chained("#manufacturer");
        $("#model").select2({theme: 'classic'}).chained("#series");
    </script>
@endpush
@endsection
    