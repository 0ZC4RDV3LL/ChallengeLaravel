@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h3>Formulario de Favoritos</h3>
					<a href=" {{ url()->previous() }} " class="btn btn-primary">Volver</a>
				</div>

				<div class="card-body">

					<form action="./store" method="POST">
						@csrf
						<div class="form-group">
							<label for="url">URL</label>
							<input type="text" name="url" id="url" class="form-control">
						</div>
						<div class="form-group">
							<label for="url">Título</label>
							<input type="text" name="titulo" id="titulo" class="form-control">
						</div>
						<div class="form-group">
							<label for="tema">Tema</label>
							<input type="text" name="tema" id="tema" class="form-control">
						</div>						
						<div>
							<input type="submit" value="Ingresar" class="btn btn-success">
						</div>

					</form>
					
				</div>
			</div>
		</div>        
	</div>
</div>

@endsection
