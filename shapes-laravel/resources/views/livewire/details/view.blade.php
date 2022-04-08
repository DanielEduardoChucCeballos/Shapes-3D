@section('title', __('Details'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Detalles </h4>
						</div>
						<div wire:poll.60s>
							<!--code><h5>{{ now()->format('H:i:s') }} UTC</h5></code-->
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar...">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Agregar detalle
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.details.create')
						@include('livewire.details.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Peso</th>
								<th>Longitud</th>
								<th>Ancho</th>
								<th>Precio</th>
								<th>Color de filamento Id</th>
								<th>Relleno Id</th>
								<th>Acabado Id</th>
								<td>Opciones</td>
							</tr>
						</thead>
						<tbody>
							@foreach($details as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->height }}</td>
								<td>{{ $row->length }}</td>
								<td>{{ $row->width }}</td>
								<td>{{ $row->price }}</td>
								<td>{{ $row->filamentColor->color->name }}</td>
								<td>{{ $row->filling->name }}</td>
								<td>{{ $row->finish->name }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Desea borrar {{$row->name}}? \nEsta informacion no podrá ser recuperada!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Borrar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $details->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
