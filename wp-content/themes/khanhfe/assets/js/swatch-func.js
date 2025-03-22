$(document).ready(function(){
	setTimeout(function(){ 
		SwatchGrid();
	},1000)
});

function SwatchGrid() {

	$('.item_product_main').map(function() {
		var thispro = $(this);
		thispro.find('.option-swath .swatch-element.color').map(function(){
			$(this).find('label').on('click', function(){
				var imgopt = $(this).data('scolor');
				if( imgopt != ''){
					$(this).closest('form').find('.product-image.second-image img').attr('src', imgopt);
				}
			});
		})
	});
	$('.item_product_main').map(function() {
		var Ego_ = $(this);
		var dataid = $(this).data('id'),
			dataurl = $(this).data('url');
		var EgoCallback = function(variant, selector){
			//debugger
			if (variant){
				var form = Ego_;
				for(var i=0,length=variant.options.length; i<length; i++){
					var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');
					if (radioButton.length) {
						radioButton.get(0).checked = true;
					}
				};
			};
			
			var addToCarter = Ego_.find('.btn-buy.addcart'),
				btnNower = Ego_.find('.btn-buy-now-grid'),
				former = Ego_.find('.btn-buy'),
				salelabel = Ego_.find('.product-thumbnail'),
				productPricer = Ego_.find('.price'),
				comparePricer = Ego_.find('.compare-price'),
				addone = '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 17" fill="none"> <circle cx="9" cy="15.7368" r="1.26316" fill="white"></circle> <circle cx="14.0526" cy="15.7368" r="1.26316" fill="white"></circle> <path d="M2.68421 6.05273L1.8421 6.05273" stroke="white" stroke-width="1.5" stroke-linecap="round"></path> <path d="M3.52631 11.1055L2.6842 11.1055" stroke="white" stroke-width="1.5" stroke-linecap="round"></path> <path d="M3.52632 8.5791L1 8.5791" stroke="white" stroke-width="1.5" stroke-linecap="round"></path> <path d="M5.01003 3.94737L6.72226 11.6163C6.87534 12.3019 7.48373 12.7895 8.18622 12.7895H14.6659C15.3684 12.7895 15.9768 12.3019 16.1299 11.6163L17.4342 5.77422C17.6435 4.83706 16.9305 3.94737 15.9703 3.94737H14.6341H12.7895M5.01003 3.94737L4.50902 2.10616C4.33133 1.45315 3.73839 1 3.06164 1H1M5.01003 3.94737H8.21804H9.42105" stroke="white" stroke-width="1.5" stroke-linecap="round"></path> </svg> ';

			if (variant && variant.available) {
				salelabel.removeClass('sale');
				former.removeClass('d-none');
				btnNower.removeAttr('disabled').removeClass('d-none');
				addToCarter.html(addone).removeAttr('disabled');
				if(variant.price == 0){
					productPricer.html('Liên hệ');
					comparePricer.hide();
					former.addClass('d-none');
				}else{
					former.removeClass('d-none');	
					productPricer.html(Bizweb.formatMoney(variant.price, theme.settings.moneyFormat));
					addToCarter.html(addone);
					if ( variant.compare_at_price > variant.price ) {
						comparePricer.html(Bizweb.formatMoney(variant.compare_at_price, theme.settings.moneyFormat)).show();
						var discount = Math.ceil((variant.compare_at_price - variant.price)/variant.compare_at_price*100);
						if (discount > 99) {
							var pt = 99;
						} else {
							var pt = discount
							}
						salelabel.addClass('sale').attr('data-sale', '- '+pt+'%');
					}else {
						comparePricer.hide();   
					}       										
				};
			}else{	
				salelabel.removeClass('sale');
				btnNower.attr('disabled', 'disabled').addClass('d-none');
				addToCarter.html('Hết hàng').attr('disabled', 'disabled');
				if(variant){
					if(variant.price != 0){
						former.removeClass('d-none');
						btnNower.attr('disabled', 'disabled').addClass('d-none');
						productPricer.html(Bizweb.formatMoney(variant.price, theme.settings.moneyFormat));
						if ( variant.compare_at_price > variant.price ) {
							comparePricer.html(Bizweb.formatMoney(variant.compare_at_price, theme.settings.moneyFormat)).show();
							var discount = Math.ceil((variant.compare_at_price - variant.price)/variant.compare_at_price*100);
							if (discount > 99) {
								var pt = 99;
							} else {
								var pt = discount
								}
							salelabel.addClass('sale').attr('data-sale', '- '+pt+'%');
						} else {
							comparePricer.hide();  
						}     
					}else{
						productPricer.html('Liên hệ');
						comparePricer.hide();
						former.addClass('d-none');};
				}else{
					productPricer.html('Liên hệ');
					comparePricer.hide();
					former.addClass('d-none');
				};
			}
		};

		function changeSwatch() {
			if($(this).find('.selector-wrapper').length <= 1) {
				var product_json = '';
				$.ajax ({
					async: false,
					type: "GET",
					url: "/collections/all/products"+dataurl+"?view=json",
					dataType: "json",
					success: function(data) {
						product_json = data;
					}
				})
				new Bizweb.OptionSelectors('product-grid-selectors-'+dataid, {
					product: product_json,
					onVariantSelected: EgoCallback, 
					enableHistoryState: true
				});  
			}
		}


		Ego_.find('.swatch :radio').change(function() {
			changeSwatch();
			var optionIndexs = jQuery(this).closest('.swatch').attr('data-option-index');
			var optionValues = jQuery(this).val();
			jQuery(this)
				.closest('form')
				.find('.single-option-selector')
				.eq(optionIndexs)
				.val(optionValues)
				.trigger('change');

		});

		Ego_.find('.btn-buy-now-grid').on('click', function(){
			var _variantIDs = Ego_.find('#product-grid-selectors-'+dataid).val();
			var _Qtys = parseInt('1');
			if(_variantIDs == null){
				_variantIDs = Ego_.find('#one_variant-'+dataid).val();
			}

			jQuery.ajax({
				type: "POST",
				url: "/cart/add.js",
				data: "quantity=" + _Qtys + "&VariantId=" + _variantIDs,
				dataType: "json",
				success: function(e) {
					window.location = '/checkout';
				},
				error: function(e, t) {
					Bizweb.onError(e, t);
				}
			});
		});
	})

}