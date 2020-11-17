
setTimeout( function() {
	$("body, a").on("click", Runner.suggests.DestroySuggestDiv);
	$("body").on("click", "input", Runner.suggests.DestroySuggestDiv);
}, 2000);


 
/**
 * search suggests block
 */ 
Runner.suggests = {
	cur: -1,
	suggestValues: [],
	
	DestroySuggestDiv: function() {
		Runner.suggests.cur = -1;
		$("#search_suggest").html("").css("visibility", "hidden");
		$("#search_suggest_iframe").remove();
	},	
	
	moveUp: function( oElement ) {
		var $suggests = $("#search_suggest").children();
		
		if ( !$suggests.length || Runner.suggests.cur < -1 ) {
			return;
		}
		
		Runner.suggests.cur--;
		if ( Runner.suggests.cur == -2 ) {
			Runner.suggests.cur = $suggests.length - 1; 
			oElement.focus(); 
		}
		$suggests.each( function( i, suggest ) {
			suggest.className = i == Runner.suggests.cur ? "suggest_link_over" : "suggest_link";
			if ( i == Runner.suggests.cur ) {
				oElement.value = Runner.suggests.suggestValues[ Runner.suggests.cur ];
			}
		});
	},
		
	moveDown: function( oElement ) {
		var $suggests = $("#search_suggest").children();
		
		if ( !$suggests.length || Runner.suggests.cur >= $suggests.length ) {
			return;
		}
		
		Runner.suggests.cur++;
		$suggests.each( function( i, suggest ) {
			suggest.className = i == Runner.suggests.cur ? "suggest_link_over" : "suggest_link";
			if ( i == Runner.suggests.cur ) {
				oElement.value = Runner.suggests.suggestValues[ Runner.suggests.cur ];
			}
		});

		if ( Runner.suggests.cur == $suggests.length ) {
			Runner.suggests.cur = -1; 
			oElement.focus(); 
		}
	},

	searchSuggest: function( $el ) {
		Runner.suggests.cur = -1;
	
		//Set position for the search suggest
		var offset = $el.offset(),		
			$suggest = $("#search_suggest");	

		$suggest.css({
			top: offset.top + $el.outerHeight() +  "px",
			left: offset.left + ( Runner.isDirRTL() ? $el.outerWidth() - $suggest.outerWidth() : 0 ) + "px" 
		});
	
	},

	onSearchSuggestResponse: function( respObj, setValueFn ) {
		if ( !respObj.success || !respObj.result.length ) {
			Runner.suggests.DestroySuggestDiv();
			return;	
		}
		
		var $suggests = $("#search_suggest")
			.css({ visibility: "visible", 'z-index': 1000 })
			.html("");			

//		Runner.setZindexMaxToElem( $suggests );

		var $suggest, i, j;
		
		for (i = 0, j = 0; i < respObj.result.length; i++, j++) {
			Runner.suggests.suggestValues[j] = respObj.result[i].realValue;
			
			$suggest = $('<div id="suggestDiv' + i + '"></div>')
				.addClass('suggest_link')
				.html( respObj.result[i].value )
				.appendTo( $suggests )
				.bind({
					mouseover: function(e) {
						$("div.suggest_link_over").each(function(){
							this.className = 'suggest_link';
						});
						this.className = 'suggest_link_over';
						Runner.suggests.cur = this.id.substring(10);
					},
					mouseout: function(e) {
						this.className = 'suggest_link';
					}
				})
				.bind('click', { suggest: Runner.suggests.suggestValues[j] }, function(e) {
					if ( typeof setValueFn === 'function' ) {
						setValueFn( e.data.suggest );
					}
					Runner.suggests.DestroySuggestDiv();
				});				
		}
	},	
};
 