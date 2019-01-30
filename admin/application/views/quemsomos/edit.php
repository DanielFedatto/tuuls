<section id="formulario">
    <div class="infos">
        <h1>Quem Somos</h1>
    </div>
    
    <div class="col-md-12">
        <div class="box box-info">
            <form action="<?php echo url::base() ?>quemsomos/save" class="form-horizontal" id="formEdit" name="formEdit" method="post">
                
            <div class="box-body">
	
        <!--SE NECESSÁRIO, EXPLICAÇÃO-->
        <!--<p></p>-->
        <!--FORMULARIO COM INFORMACOES-->
                <input type="hidden" id="QUS_ID" readonly name="QUS_ID" value="<?php echo $quemsomos["QUS_ID"] ?>">
    
        <div class="form-group">
            <label for="QUS_TITULO" class="col-sm-2 control-label">Título *</label>
            <div class="col-sm-10">
                
                <input type="text" validar="texto"  class="form-control  " placeholder="Título" value="<?php if($quemsomos) echo $quemsomos["QUS_TITULO"] ?>" id="QUS_TITULO" name="QUS_TITULO" >
            </div>
        </div>
                            
        <div class="form-group">
            <label for="QUS_TUULS" class="col-sm-2 control-label">Tuuls *</label>
            <div class="col-sm-10">
                <textarea  class="form-control ckeditor" placeholder="Tuuls" id="QUS_TUULS" name="QUS_TUULS">
                    <?php if($quemsomos) echo $quemsomos["QUS_TUULS"] ?>
                </textarea>
            </div>
        </div>
                                        
        <div class="form-group">
            <label for="QUS_PROPOSITO" class="col-sm-2 control-label">Propósito *</label>
            <div class="col-sm-10">
                <textarea  class="form-control ckeditor" placeholder="Propósito" id="QUS_PROPOSITO" name="QUS_PROPOSITO">
                    <?php if($quemsomos) echo $quemsomos["QUS_PROPOSITO"] ?>
                </textarea>
            </div>
        </div>
                                        
        <div class="form-group">
            <label for="QUS_MISSAO" class="col-sm-2 control-label">Missão *</label>
            <div class="col-sm-10">
                <textarea  class="form-control ckeditor" placeholder="Missão" id="QUS_MISSAO" name="QUS_MISSAO">
                    <?php if($quemsomos) echo $quemsomos["QUS_MISSAO"] ?>
                </textarea>
            </div>
        </div>
                                        
        <div class="form-group">
            <label for="QUS_VISAO" class="col-sm-2 control-label">Visão *</label>
            <div class="col-sm-10">
                <textarea  class="form-control ckeditor" placeholder="Visão" id="QUS_VISAO" name="QUS_VISAO">
                    <?php if($quemsomos) echo $quemsomos["QUS_VISAO"] ?>
                </textarea>
            </div>
        </div>
                                        
        <div class="form-group">
            <label for="QUS_VALORES" class="col-sm-2 control-label">Valores *</label>
            <div class="col-sm-10">
                <textarea  class="form-control ckeditor" placeholder="Valores" id="QUS_VALORES" name="QUS_VALORES">
                    <?php if($quemsomos) echo $quemsomos["QUS_VALORES"] ?>
                </textarea>
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
                    
<script type="text/javascript" src="<?php echo url::base(); ?>js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo url::base(); ?>js/ckfinder/ckfinder.js"></script>

<script type="text/javascript">// <![CDATA[

// This is a check for the CKEditor class. If not defined, the paths must be checked.

if ( typeof CKEDITOR == "undefined" ){

    document.write(

        "<strong><span style='color: #ff0000'>Error</span>: CKEditor not found</strong>." +

        "This sample assumes that CKEditor (not included with CKFinder) is installed in" +

        "the '/ckeditor/' path. If you have it installed in a different place, just edit" +

        "this file, changing the wrong paths in the &lt;head&gt; (line 5) and the 'BasePath'" +

        "value (line 32)." ) ;

}else{

    var editorQUS_TUULS = CKEDITOR.replace( "QUS_TUULS" );
    CKFinder.setupCKEditor( editorQUS_TUULS, "<?php echo url::base()?>js/ckfinder/" ) ;
    var editorQUS_PROPOSITO = CKEDITOR.replace( "QUS_PROPOSITO" );
    CKFinder.setupCKEditor( editorQUS_PROPOSITO, "<?php echo url::base()?>js/ckfinder/" ) ;
    var editorQUS_MISSAO = CKEDITOR.replace( "QUS_MISSAO" );
    CKFinder.setupCKEditor( editorQUS_MISSAO, "<?php echo url::base()?>js/ckfinder/" ) ;
    var editorQUS_VISAO = CKEDITOR.replace( "QUS_VISAO" );
    CKFinder.setupCKEditor( editorQUS_VISAO, "<?php echo url::base()?>js/ckfinder/" ) ;
    var editorQUS_VALORES = CKEDITOR.replace( "QUS_VALORES" );
    CKFinder.setupCKEditor( editorQUS_VALORES, "<?php echo url::base()?>js/ckfinder/" ) ;
}
// ]]>
</script>