<?php if ( ! is_category() && ! is_home() && ! is_single() && ! is_search() ): ?>
	<div class="container my-5">
		<div class="row">
			<div class="col-lg-6">
				<div class="maps-wrapper">
					<div class="location-maps"></div>
				</div>
			</div>
			<div class="col-lg-6 contact-form">
				Schedule a Meeting

				<?php echo do_shortcode('[hubspot type=form portal=8611993 id=5bcc3402-5d0d-4646-b85e-c5f6d3b227dd]'); ?>
			</div>
		</div>
		<div class="row contact__address">
			<div class="col-sm-5">
				<p class="mb-3">Head Office</p>
				<p>
					Wisma Griya Intan, Jl. Warung Buncit Raya No. 21B<br>
					RT. 001, RW.007, Pejaten Barat, Pasar Minggu<br>
					Kota Jakarta Selatan, DKI Jakarta, 12510
				</p>
			</div>
			<div class="col-sm-4">
				<p class="mb-3">Correspondence</p>
				<p>
					Jl. Kemang Selatan I D No. 5B<br>
					Jakarta Selatan - 12730
				</p>
			</div>
			<div class="col-sm-3">
				<p class="mb-3">Support</p>
				<p>
					<a href="mailto:info@terralogiq.com">info@terralogiq.com</a><br>
					<a href="tel:622122718509">T +62 21-227-185-09</a><br>
					F +62 21-791-901-65					
				</p>
			</div>
		</div>
	</div><br><br><br>
<?php endif ?>
