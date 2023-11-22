@include('../layouts.header')

<div id="kt_content_container" class="container-fluid">
	<div class="row g-5 g-xl-8">
		<div class="col-xl-12">
			<div class="card-header border-0 pt-5">
				Produto <!--begin::Product List-->
				<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
					<!--begin::Card header-->
					<div class="card-header">
						<div class="card-title">
							<h2>Order #14534</h2>
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
										<th class="min-w-175px">Product</th>
										<th class="min-w-100px text-end">SKU</th>
										<th class="min-w-70px text-end">Qty</th>
										<th class="min-w-100px text-end">Unit Price</th>
										<th class="min-w-100px text-end">Total</th>
									</tr>
								</thead>
								<!--end::Table head-->
								<!--begin::Table body-->
								<tbody class="fw-semibold text-gray-600">
									<!--begin::Products-->
									<tr>
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
													<a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="fw-bold text-gray-600 text-hover-primary">Product 1</a>
													<div class="fs-7 text-muted">Delivery Date: 12/09/2022</div>
												</div>
												<!--end::Title-->
											</div>
										</td>
										<!--end::Product-->
										<!--begin::SKU-->
										<td class="text-end">01171007</td>
										<!--end::SKU-->
										<!--begin::Quantity-->
										<td class="text-end">2</td>
										<!--end::Quantity-->
										<!--begin::Price-->
										<td class="text-end">$120.00</td>
										<!--end::Price-->
										<!--begin::Total-->
										<td class="text-end">$240.00</td>
										<!--end::Total-->
									</tr>
									<!--end::Products-->
									<!--begin::Subtotal-->
									<tr>
										<td colspan="4" class="text-end">Subtotal</td>
										<td class="text-end">$264.00</td>
									</tr>
									<!--end::Subtotal-->
									<!--begin::VAT-->
									<tr>
										<td colspan="4" class="text-end">VAT (0%)</td>
										<td class="text-end">$0.00</td>
									</tr>
									<!--end::VAT-->
									<!--begin::Shipping-->
									<tr>
										<td colspan="4" class="text-end">Shipping Rate</td>
										<td class="text-end">$5.00</td>
									</tr>
									<!--end::Shipping-->
									<!--begin::Grand total-->
									<tr>
										<td colspan="4" class="fs-3 text-dark text-end">Grand Total</td>
										<td class="text-dark fs-3 fw-bolder text-end">$269.00</td>
									</tr>
									<tr>
										<td colspan="5" class="fs-3 text-dark text-end">
											<button type="button" class="btn btn-success btn-sm">Finalizar</button>
											<button type="button" class="btn btn-danger btn-sm">Cancelar</button>
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

	@include('../layouts.footer')