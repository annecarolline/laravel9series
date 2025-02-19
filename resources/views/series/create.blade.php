<x-layout title="Nova Série" breadcrumb0="Séries" breadcrumb1="Nova">
	<main>
		<form action="/series/salvar" method="post">
			<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
				@csrf
				<div class="row">
					
					<div class="col-12 mb-3">
						<label class="form-label" for="titulo">Título:</label>
						<input class="form-control" id="titulo" name="titulo" type="text" placeholder="Insira o título da série aqui" required autofocus>
					</div>
				</div>

					
				<div class="row">
					<div class="col-3 mb-3">
						<label class="form-label" for="ano">Ano:</label>
						<select class="form-control" id="ano" name="ano">
							<option value=''>Selecione o ano aqui</option>
							<option value='2006'>2006</option>
						</select>
					</div>

					<div class="col-9 mb-3">
						<label class="form-label" for="categoria">Categoria:</label>
						<input class="form-control" id="categoria" name="categoria" type="text" placeholder="Insira a categoria da série aqui">
					</div>
				</div>

				<div class="row">
					<div class="col-12 mb-3">
						<label class="form-label" for="elenco">Elenco:</label>
						<input class="form-control" id="elenco" name="elenco" type="text" placeholder="Insira o elenco da série aqui">
					</div>
				</div>

				<div class="col-12 mb-3 mt-lg-3">
					<button type="submit" class="btn btn-success">Salvar</button>
				</div>
			</div>
		</form>
	</main>
</x-layout>