@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')

	<div clas="container">

		<h3 class="center">Adicionar curso</h3>

		<div class="row">
			<form class="" action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
				<!-- Validação do formulário -->
				{{ csrf_field() }}

				@include('admin.cursos._form')

				<button class="btn tael" type="submit">Salvar</button>

			</form>
		</div>
	</div>

@endsection
