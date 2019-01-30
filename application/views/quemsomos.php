<style>
.active{
    color: #f27020;
    background-color: #414042;
}
</style>
<section id="sobre" class="about-us">
	<div class="container">
		<figure>
			<a title="Tuuls" href="" data-scroll="0"><img src="<?php echo url::base(); ?>images/logo_tuuls-white.svg" alt="" class="img-fluid"></a>
		</figure>
		<?php echo $quemsomos[0]->QUS_TUULS; ?>
		<ul class="tabs">
		  <li class="active" rel="tab1"><a class="active btn btn-primary btn-sobre" href="#collapse1" role="button" rel="tab1">
	    <span>PROPÓSITO</span>
	  	</a></li>
		  <li rel="tab2"><a class="btn btn-primary btn-sobre" href="#collapse2" role="button" rel="tab2">
	    <span>MISSÃO</span>
	  	</a></li>
		  <li rel="tab3"><a class="btn btn-primary btn-sobre" href="#collapse3" role="button" rel="tab3">
	    <span>VISÃO</span>
	  	</a></li>
			<li rel="tab4"><a class="btn btn-primary btn-sobre" href="#collapse4" role="button" rel="tab4">
	    <span>VALORES</span>
	  	</a></li>
		</ul>
	</div>
	<div class="about-us-desc">
		<div class="container">
			<div class="tab-container">
				<div class="tab_content" id="tab1" rel="tab1">
				  <div class="card card-body">
				    <?php echo $quemsomos[0]->QUS_PROPOSITO; ?>
				  </div>
				</div>
				<div class="tab_content" id="tab2"rel="tab2">
				  <div class="card card-body">
				    <?php echo $quemsomos[0]->QUS_MISSAO; ?>
				  </div>
				</div>
				<div class="tab_content" id="tab3"rel="tab3">
				  <div class="card card-body">
				    <?php echo $quemsomos[0]->QUS_VISAO; ?>
				  </div>
				</div>
				<div class="tab_content" id="tab4"rel="tab4">
				  <div class="card card-body">
				    <?php echo $quemsomos[0]->QUS_VALORES; ?>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	$(".tab_content").hide();
		$(".tab_content:first").show();
		$("ul.tabs li a").click(function() {
		$(".tab_content").hide();
      var activeTab = $(this).attr("rel");
      $(".active").removeClass("active");
      $(this).addClass("active");
		$("#"+activeTab).fadeIn();
	$(".tab_drawer_heading").removeClass("d_active");
	$(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	});
	$(".tab_drawer_heading").click(function() {

      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel");
      $("#"+d_activeTab).fadeIn();

	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");

	  $("ul.tabs li a").removeClass("active");
	  $("ul.tabs li [rel^='"+d_activeTab+"'] a").addClass("active");
    });
	$('ul.tabs li a').last().addClass("tab_last");
</script>