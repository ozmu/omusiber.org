<template>
<div id="projects">
		<div class="heading main centered">
			<h3 class="uppercase lg-title"><span class="titles">{{ header }}</span></h3>
		</div>
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-md-12 md-padding main-content">
					<div class="blog-posts small-image full">
						<div class="post-item">
							<article class="post-content">
								<div class="post-image main-border bot-4-border">
									<a href="#">
										<img src="/assets/images/logo.jpg" alt="Our Blog post image goes here">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="#">OMUVm</a></h4>
											<ul class="post-meta">
												<li class="main-bg"><i class="fa fa-bullhorn"></i></li>
												<li class="meta_date"><i class="fa fa-folder-o"></i>Yarışma</li>
												<li class="meta_date"><i class="fa fa-clock-o"></i>15 Ekim 2017</li>
												<li><i class="fa fa-info"></i><span class="activity-over">Planlanma Aşamasında</span></li>
											</ul>
										</div>
									</div>
									<p>Siber güvenlikte kendini geliştirmek isteyenler için zaafiyetli sanal makine çözmek çok eğlenceli ve bilgi vericidir. OMUVm, kendini geliştirmek isteyen öğrencilerin uğraşması gereken bir vulnerable machine(zaafiyetli makine) dir.<a class="more_btn main-color" href="#">Devamını oku..</a></p>
								</div>
							</article>
						</div>

						<div class="xs-padding">
							<hr class="divider dev-style3">
						</div>
						<div class="post-item projects-right">
							<article class="post-content">
								<div class="post-image main-border bot-4-border">
									<a href="#">
										<img src="/assets/images/logo.jpg" alt="Our Blog post image goes here">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="#">Dökümantasyon</a></h4>
											<ul class="post-meta">
												<li class="main-bg"><i class="fa fa-file"></i></li>
												<li class="meta_date"><i class="fa fa-folder-o"></i>Eğitim</li>
												<li class="meta_date"><i class="fa fa-clock-o"></i>15 May 2017</li>
												<li><i class="fa fa-info"></i><span class="activity-active">Devam Ediyor</span></li>
											</ul>
										</div>
									</div>
									<p>Günümüzde internetin yayılmasıyla devasa bir bilgi birikimine ulaşıldı. Fakat gerçekten yararlı bilgiler olduğu gibi, anlaşılmaz karmaşık bir dile sahip ve yanıltıcı bilgiler de mevcut. Amacımız en sade şekilde insanların konuyu kavrayacağı dökümanlar hazırlamak. <a class="more_btn main-color" href="#">Devamını oku..</a></p>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>  
</template>

<script>
export default {
  props: ['header', ]
}
</script>
