@include('../layouts.header')

<div id="kt_content_container" class="container-fluid">
    <div class="row g-5 g-xl-8">
        <div class="col-xl-12">
            <div class="card-header border-0 pt-5">
                Produto
                <!--begin::Product List-->
                <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Order #{{$compra->id}}</h2>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-175px">Produto</th>
                                        <th class="min-w-100px text-end">ID</th>
                                        <th class="min-w-70px text-center">Quantidade</th>
                                        <th class="min-w-100px text-end">Preço Unitário</th>
                                        <th class="min-w-100px text-end">Total</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600">
                                    <form action="{{ route('titulos.finalizar', ['id' => $compra->id]) }}" method="post">
                                        <!--begin::Products-->
                                        <tr id="produto-row">
                                            <!--begin::Product-->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                                        <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/1.gif);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <!--begin::Title-->
                                                    <div class="ms-5">
                                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="fw-bold text-gray-600 text-hover-primary">{{$titulo->titulo}}</a>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                            </td>
                                            <!--end::Product-->
                                            <!--begin::SKU-->
                                            <td class="text-end">{{$titulo->id}}</td>
                                            <!--end::SKU-->
                                            <!--begin::Quantity-->
                                            <td class="text-end"><input type="number" class="form-control" name="quantidade" id="quantidade" required></td>
                                            <!--end::Quantity-->
                                            <!--begin::Price-->
                                            <td class="text-end"> <input type="hidden" name="valor" id="valor" value="12.5">
												<label  type="number" for="disabledTextInput" class="form-label" name="valor-txt" id="valor-txt"> $12.00</label></td>
                                            <!--end::Price-->
                                            <!--begin::Total-->
                                            <td class="text-end total">$0.00</td>
                                            <!--end::Total-->
                                        </tr>
                                        <!--begin::VAT-->

                                        <!--begin::Grand total-->
                                        <tr>
                                            <td colspan="5" class="fs-3 text-dark text-end">
                                                <div class="d-flex justify-content-end">

                                                    @csrf
                                                    <button type="submit" class="btn btn-success btn-sm">Finalizar</button>
                                    </form>
                                    <form action="{{ route('titulos.cancelar', ['id' => $compra->id]) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm ms-2">Cancelar</button>
                                    </form>
                        </div>
                        </td>
                        </tr>
                        <!--end::Grand total-->
                        </tbody>
                        <!--end::Table head-->
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Product List-->

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Capturar o evento de alteração na quantidade
		document.getElementById("quantidade").addEventListener("input", function() {
			// Obter a quantidade e o preço unitário
			var quantidade = parseFloat(this.value) || 0;
			var precoUnitario = parseFloat(document.getElementById("valor").value) || 0;
	
			// Calcular o total
			var total = quantidade * precoUnitario;
	
			// Atualizar o campo total
			document.querySelector(".total").innerText = '$' + total.toFixed(2);
		});
	});
	</script>
@include('../layouts.footer')
