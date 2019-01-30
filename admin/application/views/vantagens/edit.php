<section id="formulario">
    <div class="infos">
        <h1>Vantagens</h1>
    </div>
    
    <div class="col-md-12">
        <div class="box box-info">
            <form action="<?php echo url::base() ?>vantagens/save" class="form-horizontal" id="formEdit" name="formEdit" method="post">
                
            <div class="box-body">
	
        <!--SE NECESSÁRIO, EXPLICAÇÃO-->
        <!--<p></p>-->
        <!--FORMULARIO COM INFORMACOES-->
                <input type="hidden" id="VAN_ID" readonly name="VAN_ID" value="<?php echo $vantagens["VAN_ID"] ?>">
    
        <div class="form-group">
            <label for="VAN_TITULO" class="col-sm-2 control-label">Título *</label>
            <div class="col-sm-10">
                
                <input type="text" validar="texto"  class="form-control  " placeholder="Título" value="<?php if($vantagens) echo $vantagens["VAN_TITULO"] ?>" id="VAN_TITULO" name="VAN_TITULO" >
            </div>
        </div>
                            
                </div>

                <div class="box-footer">
                    <p class="legenda"><em>*</em> Campos obrigatórios.</p>
                    <button type="submit" class="btn pull-right btn-success" id="salvar">Salvar</button>
                    <button type="reset" class="btn btn-danger" onClick="history.go(-1)" id="limpa" >Cancelar</button>
                </div></form>
        </div>
    </div>
</section>