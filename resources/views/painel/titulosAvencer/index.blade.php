@include('../layout.header')

<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Títulos à Vencer</span>
                    <div class="p-3">
                        <td class="text-end">
                            <a href="{{route('home.index')}}"  class="btn btn-sm btn-light-primary">
                                Voltar
                            </a>
                        </td>
                    </div>
                </div>

                <div class="card-body py-3">
                    <div class="table-responsive">

                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-2" style="font-size: 13px;">

                            <thead>
                                <tr class="fw-bolder text-muted bg-secondary">
                                    <th class="min-w-125px ps-2 rounded-start">Nome</th>
                                    <th class="min-w-125px">Data de Vencimento</th>
                                    <th class="min-w-125px">CPF</th>
                                    <th class="min-w-125px">Carteira</th>
                                    <th class="min-w-90px">Valor</th>
                                    <th class="min-w-100px">Quantidade</th>
                                    <th class="min-w-125px">Tipo de Resgate</th>
                                    <th class="min-w-125px rounded-end"></th>
                                </tr>
                            </thead>

                            <tbody>
                                    <tr>
                                        <td>Tesouro Selic 2023</td>
                                        <td>05/12/2023</td>
                                        <td>998.536.590-93</td>
                                        <td>0xbd592906ec857680C53F255722EeE3A847d36886</td>
                                        <td>-</td>
                                        <td>13</td>
                                        <td>Dinheiro</td>
                                        <td class="text-end">
                                            <a href="#"  class="btn btn-sm btn-success">
                                            <i class="fas fa-solid fa-file-contract fs-3"></i>
                                                Resgate
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tesouro Selic 2023</td>
                                        <td>05/12/2023</td>
                                        <td>026.683.930-43</td>
                                        <td>0xbd592906ec857680C53F255722EeE3A847d332a6</td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>Dinheiro</td>
                                        <td class="text-end">
                                            <a href="#"  class="btn btn-sm btn-success">
                                            <i class="fas fa-solid fa-file-contract fs-3"></i>
                                                Resgate
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tesouro IPCA+ 2023</td>
                                        <td>10/12/2023</td>
                                        <td>879.999.640-50</td>
                                        <td>0xbd592906ec857680C53F2557228s43g687d36886</td>
                                        <td>-</td>
                                        <td>20</td>
                                        <td>Carteira Digital</td>
                                        <td class="text-end">
                                            <a href="#"  class="btn btn-sm btn-success">
                                            <i class="fas fa-solid fa-file-contract fs-3"></i>
                                                Resgate
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tesouro IPCA+ 2023</td>
                                        <td>05/12/2023</td>
                                        <td>761.371.850-60</td>
                                        <td>0xbd592906ec857680C53F255722EeE3A847d36446</td>
                                        <td>-</td>
                                        <td>5</td>
                                        <td>Dinheiro</td>
                                        <td class="text-end">
                                            <a href="#"  class="btn btn-sm btn-success">
                                            <i class="fas fa-solid fa-file-contract fs-3"></i>
                                                Resgate
                                            </a>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>


            </div>
    </div>
</div>

@include('../layout.footer')
