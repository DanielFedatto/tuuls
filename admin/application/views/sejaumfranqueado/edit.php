<section id="formulario">
    <div class="infos">
        <h1>Seja um Franqueado</h1>
    </div>
    
    <div class="col-md-12">
        <div class="box box-info">
            <form action="<?php echo url::base() ?>sejaumfranqueado/save" class="form-horizontal" id="formEdit" name="formEdit" method="post">
                
            <div class="box-body">
	
        <!--SE NECESSÁRIO, EXPLICAÇÃO-->
        <!--<p></p>-->
        <!--FORMULARIO COM INFORMACOES-->
                <input type="hidden" id="SEF_ID" readonly name="SEF_ID" value="<?php echo $sejaumfranqueado["SEF_ID"] ?>">
    
        <div class="form-group">
            <label for="SEF_NOME" class="col-sm-2 control-label">Nome *</label>
            <div class="col-sm-10">
                
                <input type="text" validar="texto"  class="form-control  " placeholder="Nome" value="<?php if($sejaumfranqueado) echo $sejaumfranqueado["SEF_NOME"] ?>" id="SEF_NOME" name="SEF_NOME" >
            </div>
        </div>
                            
        <div class="form-group">
            <label for="SEF_EMAIL" class="col-sm-2 control-label">Email *</label>
            <div class="col-sm-10">
                
                <input type="text" validar="email"  class="form-control  " placeholder="Email" value="<?php if($sejaumfranqueado) echo $sejaumfranqueado["SEF_EMAIL"] ?>" id="SEF_EMAIL" name="SEF_EMAIL" >
            </div>
        </div>
                            
        <div class="form-group">
            <label for="SEF_TELEFONE" class="col-sm-2 control-label">Telefone</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                <input type="text"   class="form-control  fone" placeholder="Telefone" value="<?php if($sejaumfranqueado) echo $sejaumfranqueado["SEF_TELEFONE"] ?>" id="SEF_TELEFONE" name="SEF_TELEFONE" onblur="verificaTelefone(this)">
            </div>
        </div>
                            
        <div class="form-group">
            <label for="SEF_CELULAR" class="col-sm-2 control-label">Celular *</label>
            <div class="col-sm-10">
                
                <input type="text" validar="texto"  class="form-control  " placeholder="Celular" value="<?php if($sejaumfranqueado) echo $sejaumfranqueado["SEF_CELULAR"] ?>" id="SEF_CELULAR" name="SEF_CELULAR" >
            </div>
        </div>
                            
        <div class="form-group">
            <label for="SEF_RG" class="col-sm-2 control-label">RG</label>
            <div class="col-sm-10">
                
                <input type="text"   class="form-control  " placeholder="RG" value="<?php if($sejaumfranqueado) echo $sejaumfranqueado["SEF_RG"] ?>" id="SEF_RG" name="SEF_RG" >
            </div>
        </div>
                            
        <div class="form-group">
            <label for="SEF_CPF" class="col-sm-2 control-label">CPF</label>
            <div class="col-sm-10">
                
                <input type="text"   class="form-control  " placeholder="CPF" value="<?php if($sejaumfranqueado) echo $sejaumfranqueado["SEF_CPF"] ?>" id="SEF_CPF" name="SEF_CPF" >
            </div>
        </div>
                            
        <div class="form-group">
            <label for="SEF_ENDERECO" class="col-sm-2 control-label">Endereço *</label>
            <div class="col-sm-10">
                
                <input type="text" validar="texto"  class="form-control  " placeholder="Endereço" value="<?php if($sejaumfranqueado) echo $sejaumfranqueado["SEF_ENDERECO"] ?>" id="SEF_ENDERECO" name="SEF_ENDERECO" >
            </div>
        </div>
                            
        <div class="form-group">
            <label for="SEF_CIDADE" class="col-sm-2 control-label">Cidade *</label>
            <div class="col-sm-10">
                
                <input type="text" validar="texto"  class="form-control  " placeholder="Cidade" value="<?php if($sejaumfranqueado) echo $sejaumfranqueado["SEF_CIDADE"] ?>" id="SEF_CIDADE" name="SEF_CIDADE" >
            </div>
        </div>
                            
        <div class="form-group">
            <label for="SEF_UF" class="col-sm-2 control-label">UF *</label>
            <div class="col-sm-10">
                
                <input type="text" validar="texto"  class="form-control  " placeholder="UF" value="<?php if($sejaumfranqueado) echo $sejaumfranqueado["SEF_UF"] ?>" id="SEF_UF" name="SEF_UF" >
            </div>
        </div>
                            
        <div class="form-group">
            <label for="SEF_PROFISSAO" class="col-sm-2 control-label">Profissão</label>
            <div class="col-sm-10">
                
                <input type="text"   class="form-control  " placeholder="Profissão" value="<?php if($sejaumfranqueado) echo $sejaumfranqueado["SEF_PROFISSAO"] ?>" id="SEF_PROFISSAO" name="SEF_PROFISSAO" >
            </div>
        </div>
                            
        <div class="form-group">
            <label for="SEF_NASCIMENTO" class="col-sm-2 control-label">Nascimento</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input type="text"   class="form-control data pequeno" placeholder="Nascimento" value="<?php if($sejaumfranqueado) echo Controller_Index::aaaammdd_ddmmaaaa($sejaumfranqueado["SEF_NASCIMENTO"]) ?>" id="SEF_NASCIMENTO" name="SEF_NASCIMENTO">
            </div>
        </div>
                            
        <div class="form-group multiplo" label="Capacidade Investimento">
            <label for="SEF_CAPACIDADE_INVESTIMENTO" class="col-sm-2 control-label">Capacidade Investimento</label>
            <div class="col-sm-10">
            <input type="radio" name="SEF_CAPACIDADE_INVESTIMENTO" <?php if ($sejaumfranqueado["SEF_CAPACIDADE_INVESTIMENTO"] == "1") echo "checked"; ?> id="CAPACIDADE_INVESTIMENTO1" value="1" validar="radio"> ATÉ R$ 100.000,00 &nbsp;&nbsp;&nbsp;
            <!--<label for="CAPACIDADE_INVESTIMENTO1" class="col-sm-2 control-label">1</label>-->
            <input type="radio" name="SEF_CAPACIDADE_INVESTIMENTO" <?php if ($sejaumfranqueado["SEF_CAPACIDADE_INVESTIMENTO"] == "2") echo "checked"; ?> id="CAPACIDADE_INVESTIMENTO2" value="2" validar="radio"> DE R$ 100.000,00 ATÉ R$ 250.000,00 &nbsp;&nbsp;&nbsp;
            <!--<label for="CAPACIDADE_INVESTIMENTO2" class="col-sm-2 control-label">2</label>-->
            <input type="radio" name="SEF_CAPACIDADE_INVESTIMENTO" <?php if ($sejaumfranqueado["SEF_CAPACIDADE_INVESTIMENTO"] == "3") echo "checked"; ?> id="CAPACIDADE_INVESTIMENTO3" value="3" validar="radio"> DE R$ 300.000,00 ATÉ R$ 450.000,00 &nbsp;&nbsp;&nbsp;
            <!--<label for="CAPACIDADE_INVESTIMENTO3" class="col-sm-2 control-label">3</label>-->
            <input type="radio" name="SEF_CAPACIDADE_INVESTIMENTO" <?php if ($sejaumfranqueado["SEF_CAPACIDADE_INVESTIMENTO"] == "4") echo "checked"; ?> id="CAPACIDADE_INVESTIMENTO4" value="4" validar="radio"> ACIMA DE R$ 500.000,00 &nbsp;&nbsp;&nbsp;
            <!--<label for="CAPACIDADE_INVESTIMENTO4" class="col-sm-2 control-label">4</label>-->
            </div>
        </div>
                                        
        <div class="form-group">
            <label for="SEF_CIDADE_INTERESSE" class="col-sm-2 control-label">Cidade Interesse</label>
            <div class="col-sm-10">
                
                <input type="text"   class="form-control  " placeholder="Cidade Interesse" value="<?php if($sejaumfranqueado) echo $sejaumfranqueado["SEF_CIDADE_INTERESSE"] ?>" id="SEF_CIDADE_INTERESSE" name="SEF_CIDADE_INTERESSE" >
            </div>
        </div>
                            
        <div class="form-group">
            <label for="SEF_UF_INTERESSE" class="col-sm-2 control-label">UF Interesse</label>
            <div class="col-sm-10">
                
                <input type="text"   class="form-control  " placeholder="UF Interesse" value="<?php if($sejaumfranqueado) echo $sejaumfranqueado["SEF_UF_INTERESSE"] ?>" id="SEF_UF_INTERESSE" name="SEF_UF_INTERESSE" >
            </div>
        </div>
                                        
        <div class="form-group multiplo" label="Outra Atividade">
            <label for="SEF_OUTRA_ATIVIDADE" class="col-sm-2 control-label">EXERCERÁ OUTRA ATIVIDADE ALÉM DA OPERAÇÃO DA LOJA?</label>
            <div class="col-sm-10">
            <input type="radio" name="SEF_OUTRA_ATIVIDADE" <?php if ($sejaumfranqueado["SEF_OUTRA_ATIVIDADE"] == "S") echo "checked"; ?> id="OUTRA_ATIVIDADESim" value="S" validar="radio"> Sim &nbsp;&nbsp;&nbsp;
            <!--<label for="OUTRA_ATIVIDADESim" class="col-sm-2 control-label">Sim</label>-->
            <input type="radio" name="SEF_OUTRA_ATIVIDADE" <?php if ($sejaumfranqueado["SEF_OUTRA_ATIVIDADE"] == "N") echo "checked"; ?> id="OUTRA_ATIVIDADENão" value="N" validar="radio"> Não &nbsp;&nbsp;&nbsp;
            <!--<label for="OUTRA_ATIVIDADENão" class="col-sm-2 control-label">Não</label>-->
            </div>
        </div>
                                        
        <div class="form-group multiplo" label="Disponibilidade">
            <label for="SEF_DISPONIBILIDADE" class="col-sm-2 control-label">QUAL SUA DISPONIBILIDADE DIÁRIA DE HORAS PARA SEREM DEDICADAS À LOJA? </label>
            <div class="col-sm-10">
            <input type="radio" name="SEF_DISPONIBILIDADE" <?php if ($sejaumfranqueado["SEF_DISPONIBILIDADE"] == "1") echo "checked"; ?> id="DISPONIBILIDADE1" value="1" validar="radio"> ATÉ 4 HORAS &nbsp;&nbsp;&nbsp;
            <!--<label for="DISPONIBILIDADE1" class="col-sm-2 control-label">1</label>-->
            <input type="radio" name="SEF_DISPONIBILIDADE" <?php if ($sejaumfranqueado["SEF_DISPONIBILIDADE"] == "2") echo "checked"; ?> id="DISPONIBILIDADE2" value="2" validar="radio"> DE 6H A 8H &nbsp;&nbsp;&nbsp;
            <!--<label for="DISPONIBILIDADE2" class="col-sm-2 control-label">2</label>-->
            <input type="radio" name="SEF_DISPONIBILIDADE" <?php if ($sejaumfranqueado["SEF_DISPONIBILIDADE"] == "3") echo "checked"; ?> id="DISPONIBILIDADE3" value="3" validar="radio"> INTEGRAL &nbsp;&nbsp;&nbsp;
            <!--<label for="DISPONIBILIDADE3" class="col-sm-2 control-label">3</label>-->
            </div>
        </div>
                                        
        <div class="form-group multiplo" label="Experiência">
            <label for="SEF_EXPERIENCIA" class="col-sm-2 control-label">VOCÊ POSSUI EXPERIÊNCIA EM VAREJO? </label>
            <div class="col-sm-10">
            <input type="radio" name="SEF_EXPERIENCIA" <?php if ($sejaumfranqueado["SEF_EXPERIENCIA"] == "S") echo "checked"; ?> id="EXPERIENCIASim" value="S" validar="radio"> Sim &nbsp;&nbsp;&nbsp;
            <!--<label for="EXPERIENCIASim" class="col-sm-2 control-label">Sim</label>-->
            <input type="radio" name="SEF_EXPERIENCIA" <?php if ($sejaumfranqueado["SEF_EXPERIENCIA"] == "N") echo "checked"; ?> id="EXPERIENCIANão" value="N" validar="radio"> Não &nbsp;&nbsp;&nbsp;
            <!--<label for="EXPERIENCIANão" class="col-sm-2 control-label">Não</label>-->
            </div>
        </div>
                                        
        <div class="form-group multiplo" label="Sócio">
            <label for="SEF_SOCIO" class="col-sm-2 control-label">EXISTIRÁ ALGUM (A) SÓCIO (A) NO EMPREENDIMENTO?*  </label>
            <div class="col-sm-10">
            <input type="radio" name="SEF_SOCIO" <?php if ($sejaumfranqueado["SEF_SOCIO"] == "S") echo "checked"; ?> id="SOCIOSim" value="S" validar="radio"> Sim &nbsp;&nbsp;&nbsp;
            <!--<label for="SOCIOSim" class="col-sm-2 control-label">Sim</label>-->
            <input type="radio" name="SEF_SOCIO" <?php if ($sejaumfranqueado["SEF_SOCIO"] == "N") echo "checked"; ?> id="SOCIONão" value="N" validar="radio"> Não &nbsp;&nbsp;&nbsp;
            <!--<label for="SOCIONão" class="col-sm-2 control-label">Não</label>-->
            </div>
        </div>
                                        
        <div class="form-group multiplo" label="Dispoe Ponto">
            <label for="SEF_DISPOE_PONTO" class="col-sm-2 control-label">DISPÕE DE PONTO COMERCIAL (PRÓPRIO OU ALUGADO) PARA MONTAGEM DE LOJA TUULS?</label>
            <div class="col-sm-10">
            <input type="radio" name="SEF_DISPOE_PONTO" <?php if ($sejaumfranqueado["SEF_DISPOE_PONTO"] == "S") echo "checked"; ?> id="DISPOE_PONTOSim" value="S" validar="radio"> Sim &nbsp;&nbsp;&nbsp;
            <!--<label for="DISPOE_PONTOSim" class="col-sm-2 control-label">Sim</label>-->
            <input type="radio" name="SEF_DISPOE_PONTO" <?php if ($sejaumfranqueado["SEF_DISPOE_PONTO"] == "N") echo "checked"; ?> id="DISPOE_PONTONão" value="N" validar="radio"> Não &nbsp;&nbsp;&nbsp;
            <!--<label for="DISPOE_PONTONão" class="col-sm-2 control-label">Não</label>-->
            </div>
        </div>
                                        
        <div class="form-group multiplo" label="Outra Franquia">
            <label for="SEF_OUTRA_FRANQUIA" class="col-sm-2 control-label">JÁ POSSUI ALGUMA FRANQUIA DE OUTRA MARCA</label>
            <div class="col-sm-10">
            <input type="radio" name="SEF_OUTRA_FRANQUIA" <?php if ($sejaumfranqueado["SEF_OUTRA_FRANQUIA"] == "S") echo "checked"; ?> id="OUTRA_FRANQUIASim" value="S" validar="radio"> Sim &nbsp;&nbsp;&nbsp;
            <!--<label for="OUTRA_FRANQUIASim" class="col-sm-2 control-label">Sim</label>-->
            <input type="radio" name="SEF_OUTRA_FRANQUIA" <?php if ($sejaumfranqueado["SEF_OUTRA_FRANQUIA"] == "N") echo "checked"; ?> id="OUTRA_FRANQUIANão" value="N" validar="radio"> Não &nbsp;&nbsp;&nbsp;
            <!--<label for="OUTRA_FRANQUIANão" class="col-sm-2 control-label">Não</label>-->
            </div>
        </div>
                                        
        <div class="form-group">
            <label for="SEF_QUAL" class="col-sm-2 control-label">Qual</label>
            <div class="col-sm-10">
                
                <input type="text"   class="form-control  " placeholder="Qual" value="<?php if($sejaumfranqueado) echo $sejaumfranqueado["SEF_QUAL"] ?>" id="SEF_QUAL" name="SEF_QUAL" >
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