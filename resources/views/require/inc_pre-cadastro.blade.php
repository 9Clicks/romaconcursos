<div class="modal fade bd-cadastro-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form class="was-validated" action="" method="post">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><span class="icon-pencil1"></span> Preencha os dados abaixo para seu pré-cadastro:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icon-cancel"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" name="inc_nome" class="form-control form-control-lg" id="validationCustom01" required aria-describedby="nomeHelp" placeholder="Nome Completo">
                    <div class="invalid-feedback">
                        Nome completo (obrigatório)..
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" name="inc_email" class="form-control form-control-lg" id="validationCustom02" required aria-describedby="emailHelp" placeholder="E-mail Correto">
                    <div class="invalid-feedback">
                        E-mail (obrigatório).
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <input type="text" name="inc_telefone" class="form-control form-control-lg" id="validationCustom02" required aria-describedby="emailHelp" placeholder="Informe seu Whatsapp">
                                    <div class="invalid-feedback">
                                        Telefone/Whatsapp (obrigatório).
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <select class="form-control form-control-lg" name="inc_ass" id="formControlSelect1" required>
                                        <option value="" selected>Cursos disponiveis</option>
                                        @foreach($appCursos as $detalhes)
                                        <option value="{{ $detalhes->tbl_titulo }}">{{ $detalhes->tbl_titulo }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Selecione o curso que você deseja adquir!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="opacity: 0">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="g-recaptcha" data-sitekey="6Le9hHEUAAAAABxko5as4DFQUJRheXn2FCZ4aUJr"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-lg btn-success"><span class="icon-paperplane"></span> Enviar seu Pré-cadastro</button>
            </div>

            </form>

        </div>
    </div>
</div>