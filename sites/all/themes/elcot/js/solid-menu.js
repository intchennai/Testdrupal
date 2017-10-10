$(document).ready(function() {
	
	var a = {
		init : function() {
			this.cacheDom(), this.bindEvents(), this.loadCarousel()
		},
		cacheDom : function() {
			this.$document = $(document), this.$window = $(window), this.$html = $("html"), this.$body = $("body"), this.$html_body = $("html, body"), this.$owl_carousel = this.$body.find(".owl-carousel")
		},
		bindEvents : function() {
		this.$body.on("click", ".prev-default", function(a) {
				a.preventDefault()
			})
		},
		loadCarousel : function() {
			this.$owl_carousel.length > 0 && this.$owl_carousel.each(function() {
				var a = $(this), b = Boolean(a.attr("data-single-item")), c = a.attr("data-items") ? Number(a.attr("data-items")) : 4, d = a.attr("data-navigation") ? Boolean(a.attr("data-navigation")) : !1, e = a.attr("data-autoplay") ? Number(a.attr("data-autoplay")) : 3e3, f = a.attr("data-stop-on-hover") ? Boolean(a.attr("data-stop-on-hover")) : !1, g = a.attr("data-pagination") ? Boolean(a.attr("data-pagination")) : !0, h = a.attr("data-transition") ? String(a.attr("data-transition")) : !1, i = a.attr("data-items-lg") ? Number(a.attr("data-items-lg")) : 4, j = a.attr("data-items-md") ? Number(a.attr("data-items-md")) : 4, k = a.attr("data-items-sm") ? Number(a.attr("data-items-sm")) : 2, l = a.attr("data-items-xs") ? Number(a.attr("data-items-xs")) : 1;
				1 == b ? a.owlCarousel({
					lazyLoad : !0,
					single_item : !0,
					/*pagination : !1,*/
					autoPlay : e,
					navigation : d,
					navigationText : ["<i  class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
					transitionStyle : h
				}) : a.owlCarousel({
					lazyLoad : !0,
					items : c,
					navigation : d,
					navigationText : ["prev", "next"],
					pagination : g,
					autoPlay : e,
					stopOnHover : f,
					itemsCustom : [[0, l], [400, k], [700, j], [1e3, i], [1200, i], [1600, i]],
					transitionStyle : h
				})
			})
		},



		
		setResizeOptions : function() {
			window.innerWidth <= 767 ? (this.$tab_nav_links.removeClass("prev-default")) : (this.navOptions(), this.$tab_nav_links.addClass("prev-default")), window.innerWidth <= 991 && window.innerWidth > 767 ? this.activateTitle() : this.$a_w_title.removeAttr("title")
		},
		
		scrollSettings : function() {
			var a = this.$back_2_top.attr("data-scroll-distance");
			this.$window.scrollTop() > a ? this.$back_2_top.fadeIn() : (this.$back_2_top.fadeOut(), this.$rocket_idle.show(), this.$rocket_blast.hide())
		},
		
	};
	a.init()
}); 