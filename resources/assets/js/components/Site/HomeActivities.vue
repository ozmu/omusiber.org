<template>
  <div id="activities">
		<div class="heading main centered">
			<h3 class="uppercase lg-title"><span class="titles">{{ header }}</span></h3>
		</div>
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-md-12 md-padding main-content">
					<div class="blog-posts timeline full">
						<div class="post-item">
							<div class="timeline_date">
									<span class="inner_date main-bg">
										<span class="day">10</span>
										<span class="month">Mart</span>
									</span>
								<span class="year">2018</span>
							</div>
							<article class="post-content">
								<div class="post-image main-border bot-4-border">
									<a href="#">
										<img src="/assets/images/activities/omuctf18.jpg" alt="OMUCTF'18">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="#">OMUCTF'18</a></h4>
											<ul class="post-meta">
												<li><i class="fa fa-info"></i><span class="activity-over">Henüz başlamadı</span></li>
												<li><i class="fa fa-bolt"></i><a href="#">Yarışma</a></li>
												<li><i class="fa fa-user"></i><a href="#">OMUSiber</a></li>
												<li><a href="#"><i class="fa fa-map-signs"></i><span>ctf.omusiber.org</span></a></li>
											</ul>
										</div>
									</div>
									<p>OMUSiber tarafından poineTR'nin katkılarıyla hazırlanan OMUCTF'18 iki aşamalı gerçekleşecektir. Detaylı bilgi için: <a class="more_btn main-color" href="https://omusiber.org/ctf">omusiber.org/ctf</a></p>
								</div>
							</article>
						</div>
						<div class="post-item">
							<div class="timeline_date">
									<span class="inner_date main-bg">
										<span class="day">21</span>
										<span class="month">Ekim</span>
									</span>
								<span class="year">2017</span>
							</div>
							<article class="post-content">
								<div class="post-image main-border bot-4-border">
									<a href="#">
										<img src="/assets/images/activities/pwnlydays.jpg" alt="Pwnlydays">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="#">Pwnlydays</a></h4>
											<ul class="post-meta">
												<li><i class="fa fa-info"></i><span class="activity-over">Bitti</span></li>
												<li><i class="fa fa-bolt"></i><a href="#">Eğitim</a></li>
												<li><i class="fa fa-user"></i><a href="#">Canyoupwnme</a></li>
												<li><a href="#"><i class="fa fa-map-signs"></i><span>Mühendislik Fakültesi</span></a></li>
											</ul>
										</div>
									</div>
									<p>Günümüzde yaşanan gelişmelerden sonra fiziksel olduğu kadar siber alanda da güvenliğin son derece önemli olduğu ortaya çıkmış ve bu konuda hassasiyet artmıştır. Malesef ki bu gelişim sürecinde Türkçe kaynak ve test ortamı gibi öğretici unsurlar oldukça azdır.  <a class="more_btn main-color" href="#">Devamını oku..</a></p>
								</div>
							</article>
						</div>
						<div class="post-item">
							<div class="timeline_date">
									<span class="inner_date main-bg">
										<span class="day">5</span>
										<span class="month">Mart</span>
									</span>
								<span class="year">2017</span>
							</div>
							<article class="post-content">
								<div class="post-image main-border bot-4-border">
									<a href="#">
										<img src="assets/images/activities/omuctf17.jpg" alt="Our Blog post image goes here">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="#">OMUCTF'17</a></h4>
											<ul class="post-meta">
												<li><i class="fa fa-info"></i><span class="activity-over">Bitti</span></li>
												<li class="meta-user"><i class="fa fa-bolt"></i><a href="#">Yarışma</a></li>
												<li class="meta_date"><i class="fa fa-user"></i><a href="#">OmuSiber</a></li>
												<li><a href="#"><i class="fa fa-map-signs"></i><span>Online</span></a></li>
											</ul>
										</div>
									</div>
									<p> OMUCTF’17, Siber Güvenlik Topluluğu olarak insanların düşünme ve araştırma becerilerini geliştirmelerini amaçlayarak gerçekleştirdiğimiz yarışmasıdır.<a class="more_btn main-color" href="#">Devamını oku..</a></p>
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
    props: ['header']
  
}
</script>

