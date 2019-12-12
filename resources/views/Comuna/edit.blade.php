@extends('layouts.app')

@section('title', 'Actualización de Comuna')
@section('title2', 'Actualización de Comuna')
@section('content')

	<div class="row" >
		<div class="col-sm">
			<div class="card" style="margin-top: 10px;">
				<div class="card-body">
					<form method="POST" action="/comuna/{{$comuna->comu_codi}}" accept-charset="UTF-8" style="display:inline">
						@csrf			
						<input type="hidden" name="_method" value="PUT">
						<div class="form-group">
							<label for="comu_nomb">Comuna</label>
							<input type="text" value = '{{$comuna->comu_nomb}}' class="form-control" name="comu_nomb"/>
						</div>
						
						<div class="form-group">
							<label for="muni_codi">Municipio </label>
							<select name='muni_codi' class = 'form-control'>
								<option value="">Seleccione uno ... </option>
								@foreach($municipios as $municipio)
									@if($comuna->muni_codi == $municipio->muni_codi)
										<option selected value = '{{ $municipio->muni_codi }}'> {{ $municipio->muni_nomb }} </option>
									@else
										<option value = '{{ $municipio->muni_codi }}'> {{ $municipio->muni_nomb }} </option>
									@endif
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Actualizar </button>				
					</form>
					<a href="/comuna" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
				</div>
			</div>
		</div>
	</div>

@endsection
