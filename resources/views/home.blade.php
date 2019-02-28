@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Manufacturers and Series</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#">Register Manufacturer</a></li>
                        <li class="list-group-item"><a href="#">Register model serie</a></li>
                        <li class="list-group-item"><a href="#">View all</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('cartridges.recent') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                <thead class="thead-darker">
                    <tr>
                        <th class="col-lg-1">#</th>
                        <th class="col-lg-8">{{ __('cartridges.cartridge') }}</th>
                        <th class="col-lg">{{ __('cartridges.vendor_code') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="https://www.compudealsweb.be/icecat_cache/small/SUIBRLC-3211C_1_2.jpg" class="img-responsive"></td>
                        <td>Brother LC-3211C Cyan Inkt (200 pages) </td>
                        <td>LC3211C</td>
                    </tr>
                    <tr>
                        <td><img src="https://www.compudealsweb.be/icecat_cache/small/SUIBRLC-3211M_1_2.jpg"></td>
                        <td>Brother LC-3211M Magenta Inkt (200 pages)</td>
                        <td>LC3211M</td>
                    </tr>
                    <tr>
                        <td><img src="https://www.compudealsweb.be/icecat_cache/small/SUIBRLC-3211Y_1_2.jpg"></td>
                        <td>Brother LC-3211Y Yellow Inkt (200 pages)</td>
                        <td>LC3211C</td>
                    </tr>
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
