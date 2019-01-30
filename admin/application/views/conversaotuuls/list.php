<section id="lista">
    <h1>Conversão Tuuls</h1>
    
    <!--MENSAGEM DE INCLUSAO, ALTERACAO OU EXCLUSAO-->
    <?php if($mensagem != ""){ ?>
        <?php echo $mensagem ?>
    <?php } ?>
    
    <!--INCLUIR E PESQUISA-->
    <div class="operacoes"><!--<a href="<?php echo url::base() ?>conversaotuuls/edit" class="btn-inserir">Novo</a>--><form id="formBusca" name="formBusca" method="get" action="<?php echo url::base() ?>conversaotuuls/pesquisa" class="pesquisa">
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
                              <span><a href="#" onclick="ordenar('COT_ID', 'asc')" class="seta-acima"></a>
                                  <a href="#" onclick="ordenar('COT_ID', 'desc')" class="seta-abaixo"></a></span>
                          </th>
                          <th>Texto
                              <span><a href="#" onclick="ordenar('COT_TEXTO', 'asc')" class="seta-acima"></a>
                                  <a href="#" onclick="ordenar('COT_TEXTO', 'desc')" class="seta-abaixo"></a></span>
                          </th>
                          <th style="width: 100px"></th>
                      </tr>

                      <?php
                      //SE TEM CADASTRADO, MOSTRA. SENÃO, MOSTRA O AVISO
                      if (count($conversaotuuls) > 0) {
                          foreach($conversaotuuls as $cot){
                              ?>
                              <tr><td><?php echo $cot->COT_ID; ?></td>
                                  <td><?php echo $cot->COT_TEXTO; ?></td>
                                  <td>
                                      <a href="<?php echo url::base() ?>conversaotuuls/edit/<?php echo $cot->COT_ID; ?>" 
                                          class="btn-app-list fa fa-edit"></a><!--
                                          <a onclick="if (window.confirm('Deseja realmente excluir o registro?')) {
                                              location.href = '<?php echo url::base() ?>conversaotuuls/excluir/<?php echo 
                                                  $cot->COT_ID; ?>';
                                          }    
                                         " class="btn-app-list fa fa-trash">--></a>
                                  </td>
                              </tr>
                              <?php
                          }
                      }
                      else {
                          ?>
                          <tr>
                              <td colspan="3" class="naoEncontrado">Nenhum Conversão Tuuls encontrado</td>
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
