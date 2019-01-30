<section id="blog" class="blog-intern">
	<div class="container">
		<h2>BLOG</h2>
		<?php $imgBlog = glob("admin/upload/blog/".$blog[0]->BLO_ID.".*"); 
		if($imgBlog){ ?>
		<figure>
			<img class="img-fluid" src="<?php echo url::base().$imgBlog[0]; ?>" alt="">
		</figure>
		<?php
		} ?>
		<div class="post-date">
			<!-- Mostra apenas os posts na data clicada -->
			<a title="Data da postagem" href="#"><?php echo Controller_Index::dataextenso($blog[0]->BLO_DATA);?></a>
		</div>
		<div class="post-ttl">
			<a  title="<?php echo $blog[0]->BLO_TITULO; ?>" class="text-justify" href="#"><?php echo $blog[0]->BLO_TITULO; ?></a>
		</div>
		<div class="post-content">
			<?php echo $blog[0]->BLO_TEXTO; ?>
		</div>
	</div>
</section>