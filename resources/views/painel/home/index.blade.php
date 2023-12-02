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
									<img src="{{ url('assets/imagens/beneficio.png') }}" class="h-70px mb-2">
									<p class="text-center fs-6 pb-5 mb-2">
										Acesse todos os títulos cadastrados.
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
									<img src="{{ url('assets/imagens/anuidade.png') }}" class="h-70px mb-2">
									<p class="text-center fs-6 pb-5 mb-2">
										Acesse os detalhes da Emissão.
									</p>
									<br>
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
									<span class="text-muted fw-bold fs-7">####</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/solicitacao.png') }}" class="h-70px mb-2">
									<p class="text-center fs-6 pb-5 mb-2">
										Acompanhe as solicitações de Títulos.
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
									<span class="text-muted fw-bold fs-7">###########</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/chat.png') }}" class="h-70px mb-2">
									<p class="text-center fs-6 pb-5 mb-2">
									###########
									</p>
									<br>
									<a href="" class="btn btn-primary w-100 py-3">Acessar</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3">
						<div class="card card-xl-stretch mb-xl-5">
							<div class="card-header border-0 py-3">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bolder fs-3 mb-1">Autorizar Carteiras</span>
									<span class="text-muted fw-bold fs-7">###########</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/chat.png') }}" class="h-70px mb-2">
									<p class="text-center fs-6 pb-5 mb-2">
									###########
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
									<span class="text-muted fw-bold fs-7">###########</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/chat.png') }}" class="h-70px mb-2">
									<p class="text-center fs-6 pb-5 mb-2">
									###########
									</p>
									<br>
									<a href="{{route('blackListCateiras.index')}}" class="btn btn-primary w-100 py-3">Acessar</a>
								</div>
							</div>
						</div>
					</div>
				@php
					$a = 0;
				@endphp
				@if ($a > 1)
					
				
					<div class="col-xl-3">
						<div class="card card-xl-stretch mb-xl-5">
							<div class="card-header border-0 py-3">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bolder fs-3 mb-1">Dúvidas</span>
									<span class="text-muted fw-bold fs-7">Tem suas dúvidas</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/duvida.png') }}" class="h-70px mb-2">
									<p class="text-center fs-6 pb-5 mb-2">
									Tire todas as suas dúvidas sobre os benefícios Mutua.
									</p>
									<a href="" class="btn btn-primary w-100 py-3">Conversar</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3">
						<div class="card card-xl-stretch mb-xl-5">
							<div class="card-header border-0 py-3">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bolder fs-3 mb-1">Meu Cadastro</span>
									<span class="text-muted fw-bold fs-7">Atualize o seu Cadastro</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/cadastro.png') }}" class="h-70px mb-2">
									<p class="text-center fs-6 pb-5 mb-2">
									Mantenha o seu cadastro atualizado.
									</p>
									<a href="" class="btn btn-primary w-100 py-3">Atualizar</a>
								</div>
							</div>
						</div>
					</div>
				@endif
			</div>
			@if ($a > 1)
			<div class="row g-5 g-xl-8" style="padding-top: 0px important!;">

				<div class="col-xl-3">
					<div class="card card-xl-stretch mb-xl-5">
						<div class="card-header border-0 py-3">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bolder fs-3 mb-1">Benefícios</span>
							</h3>
						</div>
						<div class="card-body d-flex flex-column">
							<div class="pt-0" align="center">
								<img src="{{ url('assets/imagens/beneficio.png') }}" class="h-70px mb-7">
								<a href="" class="btn btn-primary w-100 py-3">Benefícios</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3">
					<div class="card card-xl-stretch mb-xl-5">
						<div class="card-header border-0 py-3">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bolder fs-3 mb-1">Anuidades</span>
							</h3>
						</div>
						<div class="card-body d-flex flex-column">
							<div class="pt-0" align="center">
								<img src="{{ url('assets/imagens/anuidade.png') }}" class="h-70px mb-7">
								<br>
								<a href="" class="btn btn-primary w-100 py-3">Anuidade</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3">
					<div class="card card-xl-stretch mb-xl-5">
						<div class="card-header border-0 py-3">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bolder fs-3 mb-1">Solicitações</span>
							</h3>
						</div>
						<div class="card-body d-flex flex-column">
							<div class="pt-0" align="center">
								<img src="{{ url('assets/imagens/solicitacao.png') }}" class="h-70px mb-7">
								<a href="" class="btn btn-primary w-100 py-3">Acompanhar</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3">
					<div class="card card-xl-stretch mb-xl-5">
						<div class="card-header border-0 py-3">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bolder fs-3 mb-1">Chat</span>
							</h3>
						</div>
						<div class="card-body d-flex flex-column">
							<div class="pt-0" align="center">
								<img src="{{ url('assets/imagens/chat.png') }}" class="h-70px mb-7">
								<a href="" class="btn btn-primary w-100 py-3">Conversar</a>
							</div>
						</div>
					</div>
				</div>


			</div>
			@endif
	</div>
</div>

@include('../layout.footer')