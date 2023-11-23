@include('../layout.header')
<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">

            <div class="card mb-5 mb-xl-8">

                <div class="card-header border-0 pt-5">
                    <span class="card-label fw-bolder fs-3 mb-1">Editar Título</span>
                    <div class="p-3">
                        <td class="text-end">
                            <a href="{{route('criarTitulos.index')}}"  class="btn btn-sm btn-primary">
                                Voltar
                            </a>
                        </td>
                    </div>
                </div>

                <div class="card-body py-3">
                    <form action="{{route('updateTitulo.update')}}" method="post">
                        @csrf
                        @php
                            $dados = json_decode($titulo->dados);
                        @endphp
                        <div class="form-row p-3">
                            <div class="row">
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Título</span>
                                    <input type="hidden" name="titulo_id" value="{{$titulo->id}}">
                                    <input class="form-control form-control-solid" type="text" name="nome" value="{{$dados->nome}}">
                                </div>
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Data de Vencimento</span>
                                    <input class="form-control form-control-solid" type="date" name="dataVencimento" value="{{$dados->dataVencimento}}">
                                </div>
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Rentabilidade Anual</span>
                                    <input class="form-control form-control-solid" type="text" name="rentabilidadeAnual" value="{{$dados->rentabilidadeAnual}}">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Valor Nominal</span>
                                    <input class="form-control form-control-solid" type="text" name="valorNominal" value="{{$dados->valorNominal}}">
                                </div>
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Alíquota IR</span>
                                    <input class="form-control form-control-solid" type="text" name="aliquotaIR" value="{{$dados->aliquotaIR}}">
                                </div>
                                <div class="col-sm">
                                    <span class="text-dark fs-4">Isenção IOF</span>
                                    <input class="form-control form-control-solid" type="text" name="isencaoIof" value="{{$dados->isentoIOF}}">
                                </div>
                            </div>

                        </div>
                        <div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-light-primary ">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>


            </div>
    </div>
</div>

@include('../layout.footer')
