@include('../layout.header')

<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
	<div id="kt_content_container" class="container-xxl">

		<!-- Associado -->
			<div class="row g-5 g-xl-8" style="padding-top: 0px important!;">
					<div class="col-xl-3">
						<div class="card card-xl-stretch mb-xl-5">
							<div class="card-header border-0 py-3">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bolder fs-3 mb-1">Criar Títulos</span>
									<span class="text-muted fw-bold fs-7">Tela para criação de títulos</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/titulo.png') }}" class="h-70px mb-2">
									<p class="text-center fs-6 pb-5 mb-2">
										Gerencie os títulos cadastrados.
									</p>
									<a href="{{route('criarTitulos.index')}}" class="btn btn-primary w-100 py-3">Titulos</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3">
						<div class="card card-xl-stretch mb-xl-5">
							<div class="card-header border-0 py-3">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bolder fs-3 mb-1">Emitir Títulos</span>
									<span class="text-muted fw-bold fs-7">Tela para emissão de títulos</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/emitir.png') }}" class="h-70px mb-2">
									<p class="text-center fs-6 pb-5 mb-2">
										Emita títulos para uma carteira.
									</p>
							
									<a href="{{route('emitirTitulos.index')}}" class="btn btn-primary w-100 py-3">Emissão</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3">
						<div class="card card-xl-stretch mb-xl-5">
							<div class="card-header border-0 py-3">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bolder fs-3 mb-1">Auditoria</span>
									<span class="text-muted fw-bold fs-7">Tela para rastreio e auditoria</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/solicitacao.png') }}" class="h-70px mb-2">
									<p class="text-center fs-6 pb-5 mb-2">
										Analise os dados dos Títulos.
									</p>
									<a href="" class="btn btn-primary w-100 py-3">Acompanhar</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3">
						<div class="card card-xl-stretch mb-xl-5">
							<div class="card-header border-0 py-3">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bolder fs-3 mb-1">Títulos à vencer</span>
									<span class="text-muted fw-bold fs-7">Gerencie o resgate</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/vencer.png') }}" class="h-70px mb-2">
									<p class="text-center fs-6 pb-5 mb-2">
									Gerencie o resgate dos títulos.
									</p>
									
									<a href="{{route('titulosAVencer.index')}}" class="btn btn-primary w-100 py-3">Acessar</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3">
						<div class="card card-xl-stretch mb-xl-5">
							<div class="card-header border-0 py-3">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bolder fs-3 mb-1">Carteiras Autorizadas</span>
									<span class="text-muted fw-bold fs-7">Autorize carteiras a gerenciar token</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/autorizacao.png') }}" class="h-70px mb-2">
									<p class="text-center fs-6 pb-5 mb-2">
									Gerencie as carteiras autorizadas.
									</p>
									<br>
									<a href="{{route('autorizarCateiras.index')}}" class="btn btn-primary w-100 py-3">Acessar</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3">
						<div class="card card-xl-stretch mb-xl-5">
							<div class="card-header border-0 py-3">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bolder fs-3 mb-1">BlackList</span>
									<span class="text-muted fw-bold fs-7">Carteiras Bloqueadas</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/negado.png') }}" class="h-70px mb-2">
									<p class="text-center fs-6 pb-5 mb-2">
									Gerencie as careteiras bloqueadas.
									</p>
									<br>
									<a href="{{route('blockListCateiras.index')}}" class="btn btn-primary w-100 py-3">Acessar</a>
								</div>
							</div>
						</div>
					</div>
			</div>

	</div>
</div>

@include('../layout.footer')