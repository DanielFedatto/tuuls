<section id="blog" class="blog">
	<div class="container">
		<h2>BLOG</h2>
		<div class="row">
		    <?php 
		    $i=1;
		    foreach($blog as $blo){ ?>
    			<div class="col-lg-3 blog-index-wrap">
    			    <?php
    			    $imgBlog = glob("admin/upload/blog/thumb_".$blo->BLO_ID.".*"); 
		            if($imgBlog){ ?>
        				<figure>
        					<a title="<?php echo $blo->BLO_TITULO; ?>" href="<?php echo url::base(); ?>blog/post/<?php echo $blo->BLO_ID; ?>/<?php echo Controller_Index::arrumaURL($blo->BLO_TITULO); ?>">
        						<img src="<?php echo url::base().$imgBlog[0]; ?>" alt="<?php echo $blo->BLO_TITULO; ?>" class="img-fluid">
        					</a>
        				</figure>
    				<?php
    				} ?>
    				<div class="post-date">
    					<!-- Mostra apenas os posts na data clicada -->
    					<a title="Data da postagem" href="<?php echo url::base(); ?>blog/post/<?php echo $blo->BLO_ID; ?>/<?php echo Controller_Index::arrumaURL($blo->BLO_TITULO); ?>"><?php echo Controller_Index::dataextenso($blo->BLO_DATA);?></a>
    				</div>
    				<div class="post-ttl">
    					<a  title="<?php echo $blo->BLO_TITULO; ?>" class="text-justify" href="<?php echo url::base(); ?>blog/post/<?php echo $blo->BLO_ID; ?>/<?php echo Controller_Index::arrumaURL($blo->BLO_TITULO); ?>"><?php echo $blo->BLO_TITULO; ?></a>
    				</div>
    				<div class="post-content">
    						<?php echo Controller_Index::limitar_palavras($blo->BLO_TEXTO, 30); ?>
    				</div>
    			</div>
    			
			    <?php
			    if($i == 4){
			        ?>
			        </div>
		            <div class="border"></div>
		            <div class="row">
			        <?php
			        $i = 0;
			    }
			    $i++;
			} ?>
		</div>
		
		<?php echo $pagination; ?>
		
	</div>
</section>