<!DOCTYPE html>
<html lang="pt">
    <head>
        <title><?php echo $titulo; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=8,chrome=1" />

        <link href="<?php echo url::base(); ?>admin/css/style.css" type="text/css" rel="stylesheet" />

        <script type="text/javascript">
            var URLBASE = "<?php echo url::base() ?>";
        </script>

        <!--JQUERY-->
        <script src="<?php echo url::base() ?>js/jquery-1.8.2.min.js" type="text/javascript"></script>
        <!--FIM JQUERY-->
    </head>
    <body >
        <div id="quatrocentos">
            <p class="numero">404</p>
            <div id="info">
                <img src="<?php echo url::base() ?>assets/images/logo-zamil.png" alt="" class="logo">
                <p class="mensagem"><strong>Ops!</strong><br/>Página não encontrada.<br/>
                <a href="<?php echo url::base() ?>">Voltar para o site</a></p>				
            </div>
        </div>
    </body>
</html>