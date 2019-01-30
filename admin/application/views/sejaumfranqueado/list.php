<section id="lista">
    <h1>Seja um Franqueado</h1>
    
    <!--MENSAGEM DE INCLUSAO, ALTERACAO OU EXCLUSAO-->
    <?php if($mensagem != ""){ ?>
        <?php echo $mensagem ?>
    <?php } ?>
    
    <!--INCLUIR E PESQUISA-->
    <div class="operacoes">
        <!--<a href="<?php echo url::base() ?>sejaumfranqueado/edit" class="btn-inserir">Novo</a>-->
        <form id="formBusca" name="formBusca" method="get" action="<?php echo url::base() ?>sejaumfranqueado/pesquisa" class="pesquisa">
            <label for="chave">Pesquise um registro:</label>
            <input type="search" id="chave" name="chave" placeholder="Busca" />
            
            <!--ORDENACAO-->
            <input type="hidden" id="ordem" name="ordem" value="<?php echo $ordem; ?>">
            <input type="hidden" id="sentido" name="sentido" value="<?php echo $sentido; ?>">

            <button type="submit">Buscar</button>
        </form>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">

                      <tr>
                            <th style="width: 70px">#
                              <span><a href="#" onclick="ordenar('SEF_ID', 'asc')" class="seta-acima"></a>
                                  <a href="#" onclick="ordenar('SEF_ID', 'desc')" class="seta-abaixo"></a></span>
                          </th>
                          <th>Nome
                              <span><a href="#" onclick="ordenar('SEF_NOME', 'asc')" class="seta-acima"></a>
                                  <a href="#" onclick="ordenar('SEF_NOME', 'desc')" class="seta-abaixo"></a></span>
                          </th>
                          <th>Email
                              <span><a href="#" onclick="ordenar('SEF_EMAIL', 'asc')" class="seta-acima"></a>
                                  <a href="#" onclick="ordenar('SEF_EMAIL', 'desc')" class="seta-abaixo"></a></span>
                          </th>
                          <th>Telefone
                              <span><a href="#" onclick="ordenar('SEF_TELEFONE', 'asc')" class="seta-acima"></a>
                                  <a href="#" onclick="ordenar('SEF_TELEFONE', 'desc')" class="seta-abaixo"></a></span>
                          </th>
                          <th>Celular
                              <span><a href="#" onclick="ordenar('SEF_CELULAR', 'asc')" class="seta-acima"></a>
                                  <a href="#" onclick="ordenar('SEF_CELULAR', 'desc')" class="seta-abaixo"></a></span>
                          </th>
                          <th>Cidade
                              <span><a href="#" onclick="ordenar('SEF_CIDADE', 'asc')" class="seta-acima"></a>
                                  <a href="#" onclick="ordenar('SEF_CIDADE', 'desc')" class="seta-abaixo"></a></span>
                          </th>
                          <th>UF
                              <span><a href="#" onclick="ordenar('SEF_UF', 'asc')" class="seta-acima"></a>
                                  <a href="#" onclick="ordenar('SEF_UF', 'desc')" class="seta-abaixo"></a></span>
                          </th>
                          <th style="width: 100px"></th>
                      </tr>

                      <?php
                      //SE TEM CADASTRADO, MOSTRA. SENÃO, MOSTRA O AVISO
                      if (count($sejaumfranqueado) > 0) {
                          foreach($sejaumfranqueado as $sef){
                              ?>
                              <tr><td><?php echo $sef->SEF_ID; ?></td>
                                  <td><?php echo $sef->SEF_NOME; ?></td>
                                  <td><?php echo $sef->SEF_EMAIL; ?></td>
                                  <td><?php echo $sef->SEF_TELEFONE; ?></td>
                                  <td><?php echo $sef->SEF_CELULAR; ?></td>
                                  <td><?php echo $sef->SEF_CIDADE; ?></td>
                                  <td><?php echo $sef->SEF_UF; ?></td>
                                  <td>
                                      <a href="<?php echo url::base() ?>sejaumfranqueado/edit/<?php echo $sef->SEF_ID; ?>" 
                                          class="btn-app-list fa fa-edit"></a>
                                          <!--<a onclick="if (window.confirm('Deseja realmente excluir o registro?')) {
                                              location.href = '<?php echo url::base() ?>sejaumfranqueado/excluir/<?php echo 
                                                  $sef->SEF_ID; ?>';
                                          }    
                                         " class="btn-app-list fa fa-trash"></a>-->
                                  </td>
                              </tr>
                              <?php
                          }
                      }
                      else {
                          ?>
                          <tr>
                              <td colspan="8" class="naoEncontrado">Nenhum Sejaum Franqueado encontrado</td>
                          </tr>
                          <?php
                      }
                      ?>

                  </table>
              </div>
    
                <!--EXCLUI TODOS MARCADOS--><!--PAGINACAO-->
                <?php echo $pagination; ?>
            </div>
        </div>
    </div>
</section>

<!--ONDE MONTA O FORMULARIO PARA EXCLUIR OS MARCADOS-->
<div id="formExc"></div>
