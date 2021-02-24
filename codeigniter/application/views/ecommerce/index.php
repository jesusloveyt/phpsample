
<!--<div class="container-fluid">-->
<!--	<div class="row">-->
<!--		<div class="col-sm-12">-->
<!--			<div class="iq-card">-->
<!--				<div class="iq-card-header d-flex justify-content-between">-->
<!--					<div class="iq-header-title">-->
<!--						<h4 class="card-title">--><?php //echo isset($pageTitle) ? $pageTitle : 'List' ?><!--</h4>-->
<!--					</div>-->
<!--					<div class="iq-card-header-toolbar d-flex align-items-center">-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="ais-InstantSearch">
				<div class="row">
					<div class="col-md-3">
						<div class="left-panel">
							<div class="iq-filter-border iq-card py-2 px-3">
								<div id="clear-refinements" class="float-right"></div>
								<h4>Filter </h4>
							</div>
							<div class="iq-filter-border iq-card">
								<h5 class="card-title">Prices</h5>
								<div id="numeric-menu"></div>
							</div>
							<div class="iq-filter-border iq-card">
								<h5 class="card-title">Brands</h5>
								<div id="brand-list"></div>
							</div>
							<div class="iq-filter-border iq-card">
								<h5 class="card-title">Rating</h5>
								<div id="rating-menu"></div>
							</div>
							<div class="iq-filter-border iq-card">
								<h5 class="card-title">Free Shipping</h5>
								<div id="toggle-refinement"></div>
							</div>
						</div>
					</div>
					<div class="col-md-9">
						<div class="right-panel">
							<div class="row">
								<div class="col-md-12">
									<div class="iq-card py-2 px-3">
										<div class="row">
											<div class="align-self-center d-flex col-lg-8 col-6">
												<div id="stats"></div>
											</div>
											<div class="col-lg-4 col-6">
												<div class="d-flex justify-content-between">
													<div id="sort-by" class="iq-algolia-sort"></div>
													<!--<div class="d-flex">
														<button type="button" class="btn mr-2 btn-primary">
															<i class="ri-grid-fill mr-0"></i>
														</button>
														<button type="button" class="btn btn- iq-bg-primary">
															<i class="ri-list-unordered mr-0"></i>
														</button>
													</div>-->
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="iq-card">
										<div class="d-flex iq-algolia-search">
											<div id="searchbox" class="ais-SearchBox"></div>
											<div id="powered-by" class="d-flex align-content-center"></div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="iq-product-layout-grid">
										<div id="hits"></div>
									</div>
								</div>
								<div class="col-md-12">
									<div id="pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	function addToCart(item) {
		if (item !== undefined){
			console.log(item)
		}
	}

	function addToWish(item) {
		if (item !== undefined){
			console.log(item)
		}
	}
</script>
