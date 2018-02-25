<template>
  <div id="subscribe">
		<div class="heading main centered">
			<h3 class="uppercase lg-title"><span class="titles">{{ header }}</span></h3>
		</div>
		<div class="md-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="text-color">
							{{ content }}
						</p>
					</div>
				</div>
				<div class="row">
					<a class="bttn-unite bttn-lg bttn-primary" href="subscribe">Üye Ol</a>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
  props: ['header', 'content']
}
</script>
