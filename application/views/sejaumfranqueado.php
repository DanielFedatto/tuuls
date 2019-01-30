<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>  
<script type="text/javascript">
    var meus_campos = {
        'SEF_EMAIL': 'email',
        'SEF_NOME': 'nome',
        'SEF_RG': 'RG',
        'SEF_CPF': 'CPF',
        'SEF_ENDERECO': 'Endereço',
        'SEF_CIDADE': 'cidade',
        'SEF_UF': 'estado',
        'SEF_PROFISSAO': 'Profissão',
        'SEF_NASCIMENTO': 'Data de nascimento',
        'SEF_CIDADE_INTERESSE': 'Cidade de interesse',
        'SEF_UF_INTERESSE': 'estado',
        'SEF_QUAL': 'Já possui outra franquia?',
        'SEF_CAPACIDADE_INVESTIMENTO': 'Capacidade de Investimento',
        'SEF_OUTRA_ATIVIDADE': 'EXERCERÁ OUTRA ATIVIDADE ALÉM DA OPERAÇÃO DA LOJA?',
        'SEF_DISPONIBILIDADE': 'QUAL SUA DISPONIBILIDADE DIÁRIA DE HORAS PARA SEREM DEDICADAS À LOJA?',
        'SEF_EXPERIENCIA': 'VOCÊ POSSUI EXPERIÊNCIA EM VAREJO?',
        'SEF_SOCIO': 'EXISTIRÁ ALGUM (A) SÓCIO (A) NO EMPREENDIMENTO?',
        'SEF_DISPOE_PONTO': 'DISPÕE DE PONTO COMERCIAL (PRÓPRIO OU ALUGADO) PARA MONTAGEM DE LOJA TUULS?',
        'SEF_OUTRA_FRANQUIA': 'JÁ POSSUI ALGUMA FRANQUIA DE OUTRA MARCA?'
     };
    options = { fieldMapping: meus_campos };
    RdIntegration.integrate('d3b70064c3e552ba74c9900ae5093e3b', 'Formulário Seja um Franqueado', options);  
</script>
<section id="franqueado" class="franqueado">
	<div class="container">
		<h2>SEJA UM FRANQUEADO</h2>
		<div class="row">
			<form action="#" class="franqueado-form col-lg-12" id="formFranqueado">
				<div class="form-row">
					<div class="form-group col-lg-6 offset-lg-6">
						<div class="input-group">
							<div class="input-group-prepend">
		          	            <div class="input-group-text"></div>
		        	        </div>
		      		        <input type="text" autocomplete="name" class="form-control" label="Nome" id="SEF_NOME" name="SEF_NOME" validar="texto" placeholder="NOME">
						</div>
	    		    </div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-6 offset-lg-6">
						<div class="input-group">
							<div class="input-group-prepend">
		          	<div class="input-group-text"></div>
		        	</div>
		      		<input type="email" autocomplete="email" class="form-control" label="E-mail" id="SEF_EMAIL" name="SEF_EMAIL" validar="email" placeholder="E-MAIL">
						</div>
	    		</div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-6 offset-lg-6">
						<div class="input-group">
							<div class="input-group-prepend">
		          	<div class="input-group-text"></div>
		        	</div>
		      		<input type="phone" class="form-control fone" label="Telefone" id="SEF_TELEFONE" name="SEF_TELEFONE" placeholder="TELEFONE" onchange="verificaTelefone(this);">
						</div>
	    		</div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-6 offset-lg-6">
						<div class="input-group">
							<div class="input-group-prepend">
		          	<div class="input-group-text"></div>
		        	</div>
		      		<input type="phone" class="form-control fone" label="Celular" id="SEF_CELULAR" name="SEF_CELULAR" validar="texto" placeholder="CELULAR" onchange="verificaTelefone(this);">
						</div>
	    		</div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-6 offset-lg-6">
						<div class="input-group">
							<div class="input-group-prepend">
		          	<div class="input-group-text"></div>
		        	</div>
		      		<input type="text" class="form-control" label="RG" id="SEF_RG" name="SEF_RG" validar="texto" placeholder="RG">
						</div>
	    		</div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-6 offset-lg-6">
						<div class="input-group">
							<div class="input-group-prepend">
		          	<div class="input-group-text"></div>
		        	</div>
		      		<input type="text" class="form-control cpf" label="CPF" id="SEF_CPF" name="SEF_CPF" validar="cpf" placeholder="CPF">
						</div>
	    		</div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-6 offset-lg-6">
						<div class="input-group">
							<div class="input-group-prepend">
		          	<div class="input-group-text"></div>
		        	</div>
		      		<input autocomplete="text" type="text" class="form-control" label="Endereço" id="SEF_ENDERECO" name="SEF_ENDERECO" validar="texto" placeholder="ENDEREÇO">
						</div>
	    		</div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-5 offset-lg-6">
						<div class="input-group">
							<div class="input-group-prepend">
		          	<div class="input-group-text"></div>
		        	</div>
							<input autocomplete="text" type="text" class="form-control" label="Cidade" id="SEF_CIDADE" name="SEF_CIDADE" validar="texto" placeholder="CIDADE">
						</div>
	    		</div>
					<div class="form-group col-lg-1">
						<div class="input-group">
							<div class="input-group-prepend">
		          	<div class="input-group-text"></div>
		        	</div>
						<input autocomplete="text" type="text" class="form-control uf" label="UF" id="SEF_UF" name="SEF_UF" validar="texto" placeholder="UF" style="text-transform: uppercase;">
						</div>
	    		</div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-6 offset-lg-6">
						<div class="input-group">
							<div class="input-group-prepend">
		          	<div class="input-group-text"></div>
		        	</div>
		      		<input autocomplete="text" type="text" class="form-control" label="Qual sua profissão" id="SEF_PROFISSAO" name="SEF_PROFISSAO" validar="texto" placeholder="QUAL SUA PROFISSÃO">
						</div>
	    		</div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-6 offset-lg-6">
						<div class="input-group">
							<div class="input-group-prepend">
		          	<div class="input-group-text"></div>
		        	</div>
		      		<input autocomplete="date" type="text" class="form-control data" label="Data Nascimento" id="SEF_NASCIMENTO" name="SEF_NASCIMENTO" validar="texto" placeholder="DATA NASCIMENTO">
						</div>
	    		</div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-6 offset-lg-6">
						<div class="input-group">
							<div class="input-group-prepend">
		          	<div class="input-group-text"></div>
		        	</div>
							<select class="custom-select" label="Capacidade de Investimento" id="SEF_CAPACIDADE_INVESTIMENTO" name="SEF_CAPACIDADE_INVESTIMENTO" validar="texto">
						    <option selected>CAPACIDADE DE INVESTIMENTO</option>
						    <option value="1">ATÉ R$ 100.000,00</option>
						    <option value="2">DE R$100.000,00 ATÉ R$250.000,00</option>
						    <option value="3">DE R$300.000,00 ATÉ R$450.000,00</option>
								<option value="4">ACIMA DE R$500.000,00</option>
						  </select>
						</div>
	    		</div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-5 offset-lg-6">
						<div class="input-group">
							<div class="input-group-prepend">
		          	<div class="input-group-text"></div>
		        	</div>
						<input autocomplete="text" type="text" class="form-control" label="Cidade de Interesse" id="SEF_CIDADE_INTERESSE" name="SEF_CIDADE_INTERESSE" validar="texto" placeholder="CIDADE DE INTERESSE">
						</div>
	    		</div>
					<div class="form-group col-lg-1">
						<div class="input-group">
							<div class="input-group-prepend">
		          	<div class="input-group-text"></div>
		        	</div>
						<input autocomplete="text" type="text" class="form-control uf" label="UF Interesse" id="SEF_UF_INTERESSE" name="SEF_UF_INTERESSE" validar="texto" placeholder="UF" style="text-transform: uppercase;">
						</div>
	    		</div>
				</div>
				<h2>QUESTIONARIO DE PRÉ-ANALISE</h2>
				
				<div class="form-row">
					<div class="form-group col-lg-12">
						EXERCERÁ OUTRA ATIVIDADE ALÉM DA OPERAÇÃO DA LOJA?
						<div class="input-group">
							<div class="input-group-prepend">

		        	        </div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" name="SEF_OUTRA_ATIVIDADE" id="SEF_OUTRA_ATIVIDADESim" checked value="S" class="custom-control-input">
							  <label class="custom-control-label" for="SEF_OUTRA_ATIVIDADESim">SIM</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" name="SEF_OUTRA_ATIVIDADE" id="SEF_OUTRA_ATIVIDADENao" value="N" class="custom-control-input">
							  <label class="custom-control-label" for="SEF_OUTRA_ATIVIDADENao">NÃO</label>
							</div>
						</div>
	    		    </div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-12">
						QUAL SUA DISPONIBILIDADE DIÁRIA DE HORAS PARA SEREM DEDICADAS À LOJA?
						<div class="input-group">
							<div class="input-group-prepend">

		        	        </div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" name="SEF_DISPONIBILIDADE" id="SEF_DISPONIBILIDADE1" checked value="1" class="custom-control-input">
							  <label class="custom-control-label" for="SEF_DISPONIBILIDADE1">ATÉ 4 HORAS</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" name="SEF_DISPONIBILIDADE" id="SEF_DISPONIBILIDADE2" value="2" class="custom-control-input">
							  <label class="custom-control-label" for="SEF_DISPONIBILIDADE2">DE 6H A 8H</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" name="SEF_DISPONIBILIDADE" id="SEF_DISPONIBILIDADE3" value="3" class="custom-control-input">
							  <label class="custom-control-label" for="SEF_DISPONIBILIDADE3">INTEGRAL</label>
							</div>
						</div>
	    		    </div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-12">
						VOCÊ POSSUI EXPERIÊNCIA EM VAREJO?
						<div class="input-group">
							<div class="input-group-prepend">

		        	        </div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" name="SEF_EXPERIENCIA" id="SEF_EXPERIENCIASim" checked value="S" class="custom-control-input">
							  <label class="custom-control-label" for="SEF_EXPERIENCIASim">SIM</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" name="SEF_EXPERIENCIA" id="SEF_EXPERIENCIANao" value="N" class="custom-control-input">
							  <label class="custom-control-label" for="SEF_EXPERIENCIANao">NÃO</label>
							</div>
						</div>
	    		    </div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-12">
						EXISTIRÁ ALGUM (A) SÓCIO (A) NO EMPREENDIMENTO?
						<div class="input-group">
							<div class="input-group-prepend">

		        	        </div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" name="SEF_SOCIO" id="SEF_SOCIOSim" checked value="S" class="custom-control-input">
							  <label class="custom-control-label" for="SEF_SOCIOSim">SIM</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" name="SEF_SOCIO" id="SEF_SOCIONao" value="N" class="custom-control-input">
							  <label class="custom-control-label" for="SEF_SOCIONao">NÃO</label>
							</div>
						</div>
	    		    </div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-12">
						DISPÕE DE PONTO COMERCIAL (PRÓPRIO OU ALUGADO) PARA MONTAGEM DE LOJA TUULS?
						<div class="input-group">
							<div class="input-group-prepend">

		        	        </div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" name="SEF_DISPOE_PONTO" id="SEF_DISPOE_PONTOSim" checked value="S" class="custom-control-input">
							  <label class="custom-control-label" for="SEF_DISPOE_PONTOSim">SIM</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" name="SEF_DISPOE_PONTO" id="SEF_DISPOE_PONTONao" value="N" class="custom-control-input">
							  <label class="custom-control-label" for="SEF_DISPOE_PONTONao">NÃO</label>
							</div>
						</div>
	    		    </div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-12">
						JÁ POSSUI ALGUMA FRANQUIA DE OUTRA MARCA?
						<div class="input-group">
							<div class="input-group-prepend">

		        	        </div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" name="SEF_OUTRA_FRANQUIA" id="SEF_OUTRA_FRANQUIASim" checked value="S" class="custom-control-input">
							  <label class="custom-control-label" for="SEF_OUTRA_FRANQUIASim">SIM</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
							  <input type="radio" name="SEF_OUTRA_FRANQUIA" id="SEF_OUTRA_FRANQUIANao" value="N" class="custom-control-input">
							  <label class="custom-control-label" for="SEF_OUTRA_FRANQUIANao">NÃO</label>
							</div>
						</div>
	    		    </div>
				</div>
				
				<div class="form-row">
					<div class="form-group col-lg-6">
						<div class="input-group">
							<div class="input-group-prepend">
		          	            <div class="input-group-text"></div>
		        	        </div>
		      		        <input type="text" autocomplete="Qual" class="form-control" label="Qual" id="SEF_QUAL" name="SEF_QUAL" placeholder="QUAL?">
						</div>
	    		    </div>
				</div>
				
				<div class="btn-submit d-flex justify-content-end">
				    <span id="franqueado-loading" style="display: none;"><img src="<?php echo url::base(); ?>images/loading.svg"></span>
				    <span id="details-contact" style="display: none;"></span>
					<div class="button-container">
						<div class="submit">ENVIAR</div>
						<button type="submit" id="salvarFranqueado" class="btn btn-primary">ENVIAR</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>