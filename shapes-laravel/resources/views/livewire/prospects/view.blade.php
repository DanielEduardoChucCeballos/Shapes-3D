@section('title', __('Prospects'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Posibles clientes </h4>
						</div>
						<div wire:poll.60s>
							<!--code><h5>{{ now()->format('H:i:s') }} UTC</h5></code-->
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Prospects">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Agregar
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.prospects.create')
						@include('livewire.prospects.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Detail Id</th>
								<th>Personal Information Id</th>
								<th>Description Model Id</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($prospects as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>
									{{ $row->detail->height }}<br>
									{{ $row->detail->length }}<br>
									{{ $row->detail->width }}<br>
									{{ $row->detail->price }}<br>
									{{ $row->detail->filamentColor->color->name }}<br>
									{{ $row->detail->filling->name }}<br>
									{{ $row->detail->finish->name }}<br>
								</td>
								<td>{{ $row->personalInformation->name }}</td>
								<td>{{ $row->descriptionModel->model }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Prospect id {{$row->id}}? \nDeleted Prospects cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $prospects->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
