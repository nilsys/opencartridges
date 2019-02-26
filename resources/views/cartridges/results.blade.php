@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="shop_toolbar">
            	<div class="btn-toolbar" role="toolbar">
            		<div class="btn-group mr-5" role="group">
            			<button type="button" class="btn btn-primary"><i class="fas fa-list"></i></button>
            			<button type="button" class="btn btn-primary"><i class="fas fa-th-large"></i></button>
            		</div>

            		<form class="form-inline">
            			<label class="sr-only" for="inlineFormInputName2">Name</label>
            			<input type="text" class="form-control mr-sm-2" id="inlineFormInputName2">
            		</form>
            	</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
            	<thead class="thead-dark">
            		<tr>
            			<th scope="col">#</th>
            			<th scope="col">Cartridge</th>
            			<th scope="col">Vendor code</th>
            			<th scope="col">Actions</th>
            		</tr>
            	</thead>
            	<tbody>
            		<tr>
            			<th scope="row">1</th>
            			<td>Mark</td>
            			<td>Otto</td>
            			<td>@mdo</td>
            		</tr>
            		<tr>
            			<th scope="row">2</th>
            			<td>Jacob</td>
            			<td>Thornton</td>
            			<td>@fat</td>
            		</tr>
            		<tr>
            			<th scope="row">3</th>
            			<td>Larry</td>
            			<td>the Bird</td>
            			<td>@twitter</td>
            		</tr>
            	</tbody>
            </table>
        </div>
    </div>    
</div>
@endsection    