@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 col-sm-12">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-10"><h3>Tabla de Favoritos</h3></div>
						<div class="col-md-2 "><a href="home/create" class="btn btn-primary">Agregar</a></div>
					</div>				
				</div>

				<div class="card-body">
					<table class="table table-hover" style="width=100%">
						<thead class="thead-dark">
							<tr>
								<th scope="col">URL</th>
								<th scope="col">Título</th>
								<th scope="col">Tema</th>
								<th colspan="3">Acciones</th>
							</tr>                         
						</thead>
						<tbody>
							
							@foreach ($pages as $page)
							<tr>
								<td><a href="{{ $page->url }}">{{ $page->url }}</a></td>
								<td>{{ $page->title }}</td>
								<td>{{ $page->topic }}</td>
								<td>
									<a href="{{ route('edit', ['id' => $page->id]) }}" class="btn btn-warning">
										<i class="fas fa-edit"></i>
									</a>
								</td>
								<td>
									<form action="{{ route('destroy', ['id' => $page->id]) }}" method="POST">
    								@csrf
    								@method('delete')
    							<button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
									</form>
								</td>								
							</tr>
							@endforeach

						</tbody>	
					</table>
				</div>
				
			</div>
		</div>        
	</div>
</div>

@endsection
