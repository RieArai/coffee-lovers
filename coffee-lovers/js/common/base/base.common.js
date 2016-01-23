/* =======================================================================
base.lightbox
========================================================================== */
baseJS.fn.lightbox = function(cls) {
	
	var trigger  = $(cls);
	var lightbox = new Lightbox;
	
	trigger.each(function(index) {
		
		var target = $(this);
		var title  = target.attr("title") || "";
		
		lightbox.add('<img src="' + target.attr("href") + '" alt="' + title + '" />');
		
		target.click(function() {
			
			lightbox.show(index);
			return false;
			
		});
		
	});
	
	function Lightbox(id) {

		var _this,_id;
		var _body,_window,_parent,_bg,_content,_include,_caption,_prev,_next;
		var _counter,_current;

		(function() {

			_this = {};
			_id   = id || "lightbox";
			
			_body   = $("body");
			_window = $(window);

			setHTML();
			
			_parent  = $("#" + _id + "");
			_bg      = _parent.find("#" + _id + "-bg").css("opacity",.8);
			_content = _parent.find("#" + _id + "-content");
			_include = _parent.find("#" + _id + "-include");
			_caption = _parent.find("#" + _id + "-caption");
			_prev    = _parent.find("#" + _id + "-prev");
			_next    = _parent.find("#" + _id + "-next");
			_counter = 0;
			_current = 0;

			_window.on({ resize:set, scroll:set });

			_bg.on("click",hide);
			_parent.find("#" + _id + "-close").on("click",hide);
			
			_prev.on("mousedown",prev);
			_next.on("mousedown",next);

			return false;

		})();

			/* =======================================================================
			Public - Method
			========================================================================== */
			_this.add  = add;
			_this.show = show;

		/* =======================================================================
		Set HTML
		========================================================================== */
		function setHTML() {

			var html = '';

			html += '<div id="' + _id + '">';
			html += '<div class="bg" id="' + _id + '-bg">&nbsp;</div>';
			html += '<div class="content" id="' + _id + '-content">';
			html += '<ul id="' + _id + '-include"></ul>';
			html += '<p id="' + _id + '-caption"></p>';
			html += '<ul id="' + _id + '-navi">';
			html += '<li id="' + _id + '-prev">&lt;</li>';
			html += '<li id="' + _id + '-next">&gt;</li>';
			html += '</ul>';
			html += '</div>';
			html += '<p class="close" id="' + _id + '-close">×</p>';
			html += '</div>';

			_body.append(html);

			return false;

		}

		/* =======================================================================
		Add
		========================================================================== */
		function add(html) {

			_include.append($('<li>').attr("id","' + _id + '-include" + _counter).html(html));
			return _counter++;

		}

		/* =======================================================================
		Show
		========================================================================== */
		function show(num) {

			_parent.fadeIn(300);

			var target = _include.find("li").hide().eq(num).show();
			var img    = target.find("img");
			var width  = img.width();
			var height = img.height();
			
			_current = num;
			_caption.text(img.attr("alt"));
			
			set();
			
			if (_counter == 1) return false;

			_prev.show().css("top",(height - _prev.height()) / 2);
			_next.show().css("top",(height - _next.height()) / 2);

			if (num == 0) _prev.hide();
			else if (num == _counter - 1) _next.hide();

			return false;

		}

		/* =======================================================================
		Hide
		========================================================================== */
		function hide() {

			stop();
			_parent.fadeOut(300);

			return false;

		}

		/* =======================================================================
		Prev
		========================================================================== */
		function prev() {

			stop();
			show(--_current);

			return false;

		}

		/* =======================================================================
		Next
		========================================================================== */
		function next() {

			stop();
			show(++_current);

			return false;

		}

		/* =======================================================================
		Stop
		========================================================================== */
		function stop() {

			_include.find("li").eq(_current).hide();
			return false;

		}

		/* =======================================================================
		Set
		========================================================================== */
		function set() {

			var bodyH = _body.height();
			
			var win       = _window;
			var content   = _content;
			var winH      = win.height();
			var contentH  = content.outerHeight();
			var top       = win.scrollTop();
			var maxT      = bodyH - contentH;
			
			if (top > maxT) top = maxT;
			
			_parent.height(bodyH);
			content.css({ top:top, height:winH - 60,padding:'30px' });

			return false;

		}

		return _this;

	}
	
	return false;
	
}

/* =======================================================================
base.scroll
========================================================================== */
baseJS.fn.scroll = function(speed) {
	
	$("a[href^=#]").each(function() {
		
		var target = $(this);
		var rel    = target.attr("rel");
		
		if (rel != "nonScroll") {
			
			var href = target.attr("href");

			target.on("click",function() {

				var goal = (href == "#") ? 0 : $(href).offset().top;
				$("html,body").animate({ scrollTop:goal }, speed, "easeOutSine");
				
				return false;

			});

		}
		
	});
	
	return false;
	
}

/* =======================================================================
base.fade
========================================================================== */
baseJS.fn.fade = function(data) {
	
	if (_.isMobile) return false;
	
	var targets = data[0].split(",");
	var length  = targets.length;
	var speed   = data[1];
	var alpha   = data[2];
	
	for (var i = 0; i < length; i++) {
		
		$(targets[i]).on({

			mouseover : function() {
				
				$(this).stop().fadeTo(speed,alpha);
				return false;
			
			},

			mouseout : function() {
				
				$(this).stop().fadeTo(speed,1);
				return false;
				
			}

		});
		
	}
	
	return false;
	
}

/* =======================================================================
base.rollover
========================================================================== */
baseJS.fn.rollover = function(data) {
	
	if (_.isMobile) return false;
	
	var offsign = data[0];
	var onsign  = data[1];
	
	$.fn.extend({
		
		rollover :function() {
			
			var $target = $(this);
			var $img    = $target.find("img");
			
			if (!$img.length) return this;
			
			var off = $img.prop("src");
			if (!(new RegExp(offsign).test(off))) return this;
			
			var on = off.replace(offsign,onsign);
			
			$target.on({
				
				mouseover : function() {
					
					$img.prop("src",on);
					return false;
					
				},
				
				mouseout : function() {
					
					if ($target.hasClass("active") || $target.hasClass("current")) return false;
					$img.prop("src",off);
					
					return false;
					
				}
				
			});
			
			return this;
			
		}
		
	});
	
	$("#all").find("a,.funcbutton").each(function() { $(this).rollover(); });
	
	return false;
	
}

/* =======================================================================
base.tooltip
========================================================================== */
baseJS.fn.tooltip = function(data) {
	
	var array  = $(data[0]);
	var length = array.length;
	var speed  = data[1];
	
	var style = data[2] || {
		
		position   : "absolute",
		right      : "-20px",
		top        : "-20px",
		padding    : "2px 5px",
		background : "#000",
		color      : "#fff"
		
	}
	
	for (var i = 0; i < length; i++) {
		
		var target  = array.eq(i).css({ display:"inline", position:"relative" });
		target.append($("<span />",{ text:target.attr("title") }).css(style).addClass("tooltip-body").hide());
		
	}
	
	array.on({
		
		mouseover : function() {

			$(this).find(".tooltip-body").stop().fadeIn(speed);
			return false;

		},
		
		mouseout : function() {

			$(this).find(".tooltip-body").stop().fadeOut(speed);
			return false;

		}
		
	});
	
	return false;
	
}

/* =======================================================================
base.showcase
========================================================================== */
baseJS.fn.showcase = function(cls) {
	
	var height = 0;
	
	$(cls).find("li").each(function() {
		
		var h = $(this).height();
		if (h > height) height = h;
		
	}).height(height);
	
	return false;
	
}

/* =======================================================================
base.tab
========================================================================== */
baseJS.fn.tab = function(data) {
	
	var isCookie    = data[1];
	var current     = "current";
	var cookieData  = "BaseCookieData";
	var cookieClass = "_cookie";
	
	$(data[0]).each(function() {
		
		var anchors = $(this).find("a[href^=#], area[href^=#]");
		var tabBody = null;
		
		anchors.each(function() {
			
			var target   = $(this);
			var selecter = "#" + target.attr("href").split("#")[1];
			
			if (tabBody) tabBody = tabBody.add(selecter);
			else tabBody = $(selecter);
			
			target.off("click").on("click",function() {
				
				anchors.removeClass(current);
				$(this).addClass(current);
				
				tabBody.hide();
				$(selecter).show();
				
				if (isCookie) $.cookie(cookieData,selecter + cookieClass,{ expires: 7 });
				
				return false;
			
			});
		
		});
		
		tabBody.hide();
		
		if (isCookie) {
			
			var pattern = new RegExp("#");
			var data    = $.cookie(cookieData);
			
			if (pattern.test(data)) {
				anchors.filter(data).trigger("click");
			} else {
				anchors.filter(":first").trigger("click");
			}
		
		} else {
			
			anchors.filter(":first").trigger("click");
		
		}
	
	});
	
	return false;
	
}

/* =======================================================================
base.selfLink
========================================================================== */
baseJS.fn.selfLink = function(data) {
	
	var area     = data[0].split(",");
	var imgName  = { current:data[1], parent:data[2] };
	var isChange = { current:true, parent:true };
	
	for (var p in imgName) {
		if (imgName[p] == "") isChange[p] = false;
	}
	
	var analyzeURI  = baseJS.analyzeURI;
	var locationURL = location.href;
	
	for (p in area) {
		
		$(area[p] + ((area[p]) ? " " : "") + "a[href]").each(function() {
			
			var target = $(this);
			var href   = target.attr("href");
			
			if (!(/^#/.test(href))) {
				
				var uri   = analyzeURI(href);
				var isImg = false;
				var onImg = "";

				if ((uri.absolutePath == locationURL) && !uri.fragment) {

					target.addClass("current");
					isImg = isChange.current;
					onImg = imgName.current;

				} else if (locationURL.search(uri.absolutePath) > -1) {

					target.addClass("parent");
					isImg = isChange.parent;
					onImg = imgName.parent;

				}

				if (isImg) {

					target.find("img").each(function() {
						
						var img    = $(this);
						var splits = img.attr("src").split(data[3] + ".");
						var src    = "";

						if (splits[1] != null) {

							src = splits[0] + onImg + "." + splits[1];
							img.attr("src",src);

						}

					}).end().filter(".current").on("click",function() { return false; });

				}
				
			}
		
		});
		
	}
	
	return false;
	
}

/* =======================================================================
base.external
========================================================================== */
baseJS.fn.external = function(data) {
	
	var uri = baseJS.analyzeURI(location.href);
	var obj = $('a[href^="http://"]').not('a[href^="' + uri.schema + '://' + uri.host + '"]');
	var cls = "external";
	
	obj.addClass(cls);
	
	$("." + cls).on("click",function() {
		
		window.open($(this).attr("href"),"_blank");
		return false;
	
	});
	
	return false;
	
}

/* =======================================================================
base.ga
========================================================================== */
baseJS.fn.ga = function(id) {
	
	(function(i,s,o,g,r,a,m) {
		
		i['GoogleAnalyticsObject'] = r;
		
		i[r] = i[r] || function() { (i[r].q = i[r].q || []).push(arguments) },i[r].l = 1 * new Date();
		a = s.createElement(o),m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a,m);
		
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	window.ga('create',id,'auto');
	window.ga('send','pageview');
	
	return false;
	
}