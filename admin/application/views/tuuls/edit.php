<section id="formulario">
    <div class="infos">
        <h1>Tuuls</h1>
    </div>
    
    <div class="col-md-12">
        <div class="box box-info">
            <form action="<?php echo url::base() ?>tuuls/save" class="form-horizontal" id="formEdit" name="formEdit" method="post">
                
            <div class="box-body">
	
        <!--SE NECESSÁRIO, EXPLICAÇÃO-->
        <!--<p></p>-->
        <!--FORMULARIO COM INFORMACOES-->
                <input type="hidden" id="TUU_ID" readonly name="TUU_ID" value="<?php echo $tuuls["TUU_ID"] ?>">
    
        <div class="form-group">
            <label for="TUU_TITULO" class="col-sm-2 control-label">Título *</label>
            <div class="col-sm-10">
                
                <input type="text" validar="texto"  class="form-control  " placeholder="Título" value="<?php if($tuuls) echo $tuuls["TUU_TITULO"] ?>" id="TUU_TITULO" name="TUU_TITULO" >
            </div>
        </div>
                            
        <div class="form-group">
            <label for="TUU_TEXTO" class="col-sm-2 control-label">Texto *</label>
            <div class="col-sm-10">
                <textarea  class="form-control ckeditor" placeholder="Texto" id="TUU_TEXTO" name="TUU_TEXTO">
                    <?php if($tuuls) echo $tuuls["TUU_TEXTO"] ?>
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

    var editorTUU_TEXTO = CKEDITOR.replace( "TUU_TEXTO" );
    CKFinder.setupCKEditor( editorTUU_TEXTO, "<?php echo url::base()?>js/ckfinder/" ) ;
}
// ]]>
</script>