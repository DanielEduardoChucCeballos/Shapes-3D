@section('title', __('Personal Informations'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Información personal </h4>
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
						<i class="fa fa-plus"> </i>Agregar información personal
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.personal-informations.create')
						@include('livewire.personal-informations.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Negocio</th>
								<th>Dirección</th>
								<th>Email</th>
								<th>Contacto</th>
								<td>Opciones</td>
							</tr>
						</thead>
						<tbody>
							@foreach($personalInformations as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->name }}</td>
								<td>{{ $row->lastname }}</td>
								<td>{{ $row->business }}</td>
								<td>{{ $row->address }}</td>
								<td>{{ $row->email }}</td>
								<td>{{ $row->phone }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									...
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confime si desea borrar el siguiente registro:\n{{$row->name}} {{$row->lastname}}\n{{$row->business}}\n{{$row->phone}}? \nEstos datos no pueden ser recuperados')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Borrar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $personalInformations->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
