(function(e) {
	
	e.easeOutSine = function (x,t,b,c,d) {
		return c * Math.sin(t / d * (Math.PI / 2)) + b;
	};
	
	e.easeInSine = function (x,t,b,c,d) {
		return -c * Math.cos(t / d * (Math.PI / 2)) + c + b;
	};
	
	e.easeInOutSine = function (x,t,b,c,d) {
		return -c / 2 * (Math.cos(Math.PI * t / d) - 1) + b;
	};
	
	e.easeInQuart = function (x,t,b,c,d) {
		
		return c * (t /= d) * t * t * t + b;
	
	};
	
	e.easeOutCubic = function (x,t,b,c,d) {
		
		return c * ((t = t / d - 1) * t * t + 1) + b;
		
	};
	
	e.easeInOutExpo = function (x,t,b,c,d) {

		if (t == 0) return b;
		if (t == d) return b + c;
		if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
		return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;

	};

	e.easeInBack = function (x,t,b,c,d,s) {

		if (s == undefined) s = 1.70158;
		return c * (t /= d) * t * ((s + 1) * t - s) + b;

	};
	
	e.easeOutBack = function (x,t,b,c,d,s) {
		
		if (s == undefined) s = 1.70158;
		return c * ((t = t / d - 1) * t * ((s + 1) * t + s) + 1) + b;
	
	};
	
	e.easeOutElastic = function (x,t,b,c,d) {
		
		var s = 1.70158;
		var p = 0;
		var a = c;
		
		if (t == 0) return b;
		if ((t /= d) == 1) return b + c;
		if (!p) p = d * .3;
		if (a < Math.abs(c)) { a = c; var s = p / 4; }
		else var s = p / (2 * Math.PI) * Math.asin (c / a);
		return a * Math.pow(2,-10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p ) + c + b;
	
	};
	
	e.easeOutBounce = function (x,t,b,c,d) {
		
		if ((t /= d) < (1 / 2.75)) return c * (7.5625 * t * t) + b;
		else if (t < (2 / 2.75)) return c * (7.5625 * (t -= (1.5 / 2.75)) * t + .75) + b;
		else if (t < (2.5 / 2.75)) return c * (7.5625 * (t -= (2.25 / 2.75)) * t + .9375) + b;
		else return c*(7.5625 * (t -= (2.625 / 2.75)) * t + .984375) + b;
	
	};
	
})($.easing);

$(document).ready(baseJS.onReady);