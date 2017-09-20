@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')

	<div class="container">
		<h3 class="center">Essa é a view cursos</h3>

		<div class="row">
			
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Título</th>
						<th>Descrição</th>
						<th>Imagem</th>
						<th>Publicado</th>
						<th>Ação</th>
					</tr>
				</thead>

				<tbody>

					@foreach($registros as $curso)
						<tr>
							<td>{{ $curso->id }}</td>
							<td>{{ $curso->titulo }}</td>
							<td>{{ $curso->descricao }}</td>
							<td><img width="120" src="{{ asset($curso->imagem) }}" alt="{{ $curso->titulo }}"/></td>
							<td>{{ $curso->publicado }}</td>
							<td>
								<a class="btn indigo lighten-3" href="{{ route('admin.cursos.editar', $curso->id) }}">Editar</a>
								<a class="btn red" href="{{ route('admin.cursos.deletar', $curso->id) }}">Editar</a>
							</td>
						</tr>
					@endforeach

				</tbody>
			</table>
		</div>

		<div>
			<a class="btn indigo teal" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
		</div>

	</div>

@endsection
