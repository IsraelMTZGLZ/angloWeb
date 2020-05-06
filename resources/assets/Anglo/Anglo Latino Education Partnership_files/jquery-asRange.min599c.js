/**
* asRange v0.3.4
* https://github.com/amazingSurge/jquery-asRange
*
* Copyright (c) amazingSurge
* Released under the LGPL-3.0 license
*/
!function(t,e){if("function"==typeof define&&define.amd)define(["jquery"],e);else if("undefined"!=typeof exports)e(require("jquery"));else{var i={exports:{}};e(t.jQuery),t.jqueryAsRangeEs=i.exports}}(this,function(t){"use strict";function e(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function i(t){var e=t.originalEvent;return e.touches&&e.touches.length&&e.touches[0]&&(e=e.touches[0]),e}var s=function(t){return t&&t.__esModule?t:{default:t}}(t),n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},a=function(){function t(t,e){for(var i=0;i<e.length;i++){var s=e[i];s.enumerable=s.enumerable||!1,s.configurable=!0,"value"in s&&(s.writable=!0),Object.defineProperty(t,s.key,s)}}return function(e,i,s){return i&&t(e.prototype,i),s&&t(e,s),e}}(),o={namespace:"asRange",skin:null,max:100,min:0,value:null,step:10,limit:!0,range:!1,direction:"h",keyboard:!0,replaceFirst:!1,tip:!0,scale:!0,format:function(t){return t}},r=function(){function t(i,n,a){e(this,t),this.$element=i,this.uid=n,this.parent=a,this.options=s.default.extend(!0,{},this.parent.options),this.direction=this.options.direction,this.value=null,this.classes={active:this.parent.namespace+"-pointer_active"}}return a(t,[{key:"mousedown",value:function(t){var e=this.parent.direction.axis,n=this.parent.direction.position,a=this.parent.$wrap.offset();this.$element.trigger(this.parent.namespace+"::moveStart",this),this.data={},this.data.start=t[e],this.data.position=t[e]-a[n];var o=this.parent.getValueFromPosition(this.data.position);return this.set(o),s.default.each(this.parent.pointer,function(t,e){e.deactive()}),this.active(),this.mousemove=function(t){var s=i(t),n=this.parent.getValueFromPosition(this.data.position+(s[e]||this.data.start)-this.data.start);return this.set(n),t.preventDefault(),!1},this.mouseup=function(){return(0,s.default)(document).off(".asRange mousemove.asRange touchend.asRange mouseup.asRange touchcancel.asRange"),this.$element.trigger(this.parent.namespace+"::moveEnd",this),!1},(0,s.default)(document).on("touchmove.asRange mousemove.asRange",s.default.proxy(this.mousemove,this)).on("touchend.asRange mouseup.asRange",s.default.proxy(this.mouseup,this)),!1}},{key:"active",value:function(){this.$element.addClass(this.classes.active)}},{key:"deactive",value:function(){this.$element.removeClass(this.classes.active)}},{key:"set",value:function(t){this.value!==t&&(this.parent.step&&(t=this.matchStep(t)),!0===this.options.limit?t=this.matchLimit(t):(t<=this.parent.min&&(t=this.parent.min),t>=this.parent.max&&(t=this.parent.max)),this.value=t,this.updatePosition(),this.$element.focus(),this.$element.trigger(this.parent.namespace+"::move",this))}},{key:"updatePosition",value:function(){var t={};t[this.parent.direction.position]=this.getPercent()+"%",this.$element.css(t)}},{key:"getPercent",value:function(){return(this.value-this.parent.min)/this.parent.interval*100}},{key:"get",value:function(){return this.value}},{key:"matchStep",value:function(t){var e=this.parent.step,i=e.toString().split(".")[1];return t=Math.round(t/e)*e,i&&(t=t.toFixed(i.length)),parseFloat(t)}},{key:"matchLimit",value:function(t){var e=void 0,i=void 0,s=this.parent.pointer;return e=1===this.uid?this.parent.min:s[this.uid-2].value,i=s[this.uid]&&null!==s[this.uid].value?s[this.uid].value:this.parent.max,t<=e&&(t=e),t>=i&&(t=i),t}},{key:"destroy",value:function(){this.$element.off(".asRange"),this.$element.remove()}}]),t}(),u={defaults:{scale:{valuesNumber:3,gap:1,grid:5}},init:function(t){var e=s.default.extend({},this.defaults,t.options.scale).scale;e.values=[],e.values.push(t.min);for(var i=(t.max-t.min)/(e.valuesNumber-1),n=1;n<=e.valuesNumber-2;n++)e.values.push(i*n);e.values.push(t.max);var a={scale:t.namespace+"-scale",lines:t.namespace+"-scale-lines",grid:t.namespace+"-scale-grid",inlineGrid:t.namespace+"-scale-inlineGrid",values:t.namespace+"-scale-values"},o=e.values.length,r=((e.grid-1)*(e.gap+1)+e.gap)*(o-1)+o,u=100/(r-1),l=100/(o-1);this.$scale=(0,s.default)("<div></div>").addClass(a.scale),this.$lines=(0,s.default)("<ul></ul>").addClass(a.lines),this.$values=(0,s.default)("<ul></ul>").addClass(a.values);for(var h=0;h<r;h++){(0===h||h===r||h%((r-1)/(o-1))==0?(0,s.default)('<li class="'+a.grid+'"></li>'):h%e.grid==0?(0,s.default)('<li class="'+a.inlineGrid+'"></li>'):(0,s.default)("<li></li>")).css({left:u*h+"%"}).appendTo(this.$lines)}for(var p=0;p<o;p++)(0,s.default)("<li><span>"+e.values[p]+"</span></li>").css({left:l*p+"%"}).appendTo(this.$values);this.$lines.add(this.$values).appendTo(this.$scale),this.$scale.appendTo(t.$wrap)},update:function(t){this.$scale.remove(),this.init(t)}},l={defaults:{},init:function(t){var e=this;if(this.$arrow=(0,s.default)("<span></span>").appendTo(t.$wrap),this.$arrow.addClass(t.namespace+"-selected"),!1===t.options.range&&t.p1.$element.on(t.namespace+"::move",function(t,i){e.$arrow.css({left:0,width:i.getPercent()+"%"})}),!0===t.options.range){var i=function(){var i=t.p2.getPercent()-t.p1.getPercent(),s=void 0;i>=0?s=t.p1.getPercent():(i=-i,s=t.p2.getPercent()),e.$arrow.css({left:s+"%",width:i+"%"})};t.p1.$element.on(t.namespace+"::move",i),t.p2.$element.on(t.namespace+"::move",i)}}},h={defaults:{active:"always"},init:function(t){var e=this,i=s.default.extend({},this.defaults,t.options.tip);this.opts=i,this.classes={tip:t.namespace+"-tip",show:t.namespace+"-tip-show"},s.default.each(t.pointer,function(i,a){var o=(0,s.default)("<span></span>").appendTo(t.pointer[i].$element);o.addClass(e.classes.tip),"onMove"===e.opts.active&&(o.css({display:"none"}),a.$element.on(t.namespace+"::moveEnd",function(){return e.hide(o),!1}).on(t.namespace+"::moveStart",function(){return e.show(o),!1})),a.$element.on(t.namespace+"::move",function(){var e=void 0;if(e=t.options.range?t.get()[i]:t.get(),"function"==typeof t.options.format)if(t.options.replaceFirst&&"number"!=typeof e){if("string"==typeof t.options.replaceFirst&&(e=t.options.replaceFirst),"object"===n(t.options.replaceFirst))for(var s in t.options.replaceFirst)Object.hasOwnProperty(t.options.replaceFirst,s)&&(e=t.options.replaceFirst[s])}else e=t.options.format(e);return o.text(e),!1})})},show:function(t){t.addClass(this.classes.show),t.css({display:"block"})},hide:function(t){t.removeClass(this.classes.show),t.css({display:"none"})}},p={},c=function(){function t(i,n){var a=this;e(this,t);var r={};if(this.element=i,this.$element=(0,s.default)(i),this.$element.is("input")){var u=this.$element.val();"string"==typeof u&&(r.value=u.split(",")),s.default.each(["min","max","step"],function(t,e){var i=parseFloat(a.$element.attr(e));isNaN(i)||(r[e]=i)}),this.$element.css({display:"none"}),this.$wrap=(0,s.default)("<div></div>"),this.$element.after(this.$wrap)}else this.$wrap=this.$element;if(this.options=s.default.extend({},o,n,this.$element.data(),r),this.namespace=this.options.namespace,this.components=s.default.extend(!0,{},p),this.options.range&&(this.options.replaceFirst=!1),this.value=this.options.value,null===this.value&&(this.value=this.options.min),this.options.range?s.default.isArray(this.value)?1===this.value.length&&(this.value[1]=this.value[0]):this.value=[this.value,this.value]:s.default.isArray(this.value)&&(this.value=this.value[0]),this.min=this.options.min,this.max=this.options.max,this.step=this.options.step,this.interval=this.max-this.min,this.initialized=!1,this.updating=!1,this.disabled=!1,"v"===this.options.direction?this.direction={axis:"pageY",position:"top"}:this.direction={axis:"pageX",position:"left"},this.$wrap.addClass(this.namespace),this.options.skin&&this.$wrap.addClass(this.namespace+"_"+this.options.skin),this.max<this.min||this.step>=this.interval)throw new Error("error options about max min step");this.init()}return a(t,[{key:"init",value:function(){this.$wrap.append('<div class="'+this.namespace+'-bar" />'),this.buildPointers(),this.components.selected.init(this),!1!==this.options.tip&&this.components.tip.init(this),!1!==this.options.scale&&this.components.scale.init(this),this.set(this.value),this.bindEvents(),this._trigger("ready"),this.initialized=!0}},{key:"_trigger",value:function(t){for(var e=arguments.length,i=Array(e>1?e-1:0),s=1;s<e;s++)i[s-1]=arguments[s];var n=[this].concat(i);this.$element.trigger(this.namespace+"::"+t,n);var a="on"+(t=t.replace(/\b\w+\b/g,function(t){return t.substring(0,1).toUpperCase()+t.substring(1)}));"function"==typeof this.options[a]&&this.options[a].apply(this,i)}},{key:"buildPointers",value:function(){this.pointer=[];var t=1;this.options.range&&(t=2);for(var e=1;e<=t;e++){var i=(0,s.default)('<div class="'+this.namespace+"-pointer "+this.namespace+"-pointer-"+e+'"></div>').appendTo(this.$wrap),n=new r(i,e,this);this.pointer.push(n)}this.p1=this.pointer[0],this.options.range&&(this.p2=this.pointer[1])}},{key:"bindEvents",value:function(){var t=this,e=this;this.$wrap.on("touchstart.asRange mousedown.asRange",function(t){if(!0!==e.disabled){if((t=i(t)).which?3===t.which:2===t.button)return!1;var s=e.$wrap.offset(),n=t[e.direction.axis]-s[e.direction.position];return e.getAdjacentPointer(n).mousedown(t),!1}}),this.$element.is("input")&&this.$element.on(this.namespace+"::change",function(){var e=t.get();t.$element.val(e)}),s.default.each(this.pointer,function(i,s){s.$element.on(t.namespace+"::move",function(){return e.value=e.get(),!(!e.initialized||e.updating)&&(e._trigger("change",e.value),!1)})})}},{key:"getValueFromPosition",value:function(t){return t>0?this.min+t/this.getLength()*this.interval:0}},{key:"getAdjacentPointer",value:function(t){var e=this.getValueFromPosition(t);if(this.options.range){var i=this.p1.value,s=this.p2.value,n=Math.abs(i-s);return i<=s?e>i+n/2?this.p2:this.p1:e>s+n/2?this.p1:this.p2}return this.p1}},{key:"getLength",value:function(){return"v"===this.options.direction?this.$wrap.height():this.$wrap.width()}},{key:"update",value:function(t){var e=this;this.updating=!0,s.default.each(["max","min","step","limit","value"],function(i,s){t[s]&&(e[s]=t[s])}),(t.max||t.min)&&this.setInterval(t.min,t.max),t.value||(this.value=t.min),s.default.each(this.components,function(t,i){"function"==typeof i.update&&i.update(e)}),this.set(this.value),this._trigger("update"),this.updating=!1}},{key:"get",value:function(){var t=[];if(s.default.each(this.pointer,function(e,i){t[e]=i.get()}),this.options.range)return t;if(t[0]===this.options.min&&("string"==typeof this.options.replaceFirst&&(t[0]=this.options.replaceFirst),"object"===n(this.options.replaceFirst)))for(var e in this.options.replaceFirst)Object.hasOwnProperty(this.options.replaceFirst,e)&&(t[0]=e);return t[0]}},{key:"set",value:function(t){if(this.options.range){if("number"==typeof t&&(t=[t]),!s.default.isArray(t))return;s.default.each(this.pointer,function(e,i){i.set(t[e])})}else this.p1.set(t);this.value=t}},{key:"val",value:function(t){return t?(this.set(t),this):this.get()}},{key:"setInterval",value:function(t,e){this.min=t,this.max=e,this.interval=e-t}},{key:"enable",value:function(){return this.disabled=!1,this.$wrap.removeClass(this.namespace+"_disabled"),this._trigger("enable"),this}},{key:"disable",value:function(){return this.disabled=!0,this.$wrap.addClass(this.namespace+"_disabled"),this._trigger("disable"),this}},{key:"destroy",value:function(){s.default.each(this.pointer,function(t,e){e.destroy()}),this.$wrap.destroy(),this._trigger("destroy")}}],[{key:"registerComponent",value:function(t,e){p[t]=e}},{key:"setDefaults",value:function(t){s.default.extend(o,s.default.isPlainObject(t)&&t)}}]),t}();c.registerComponent("scale",u),c.registerComponent("selected",l),c.registerComponent("tip",h),function(){var t=(0,s.default)(document);t.on("asRange::ready",function(e,i){var n=void 0,a={keys:{UP:38,DOWN:40,LEFT:37,RIGHT:39,RETURN:13,ESCAPE:27,BACKSPACE:8,SPACE:32},map:{},bound:!1,press:function(t){var e=t.keyCode||t.which;if(e in a.map&&"function"==typeof a.map[e])return a.map[e](t),!1},attach:function(e){var i=void 0,s=void 0;for(i in e)e.hasOwnProperty(i)&&((s=i.toUpperCase())in a.keys?a.map[a.keys[s]]=e[i]:a.map[s]=e[i]);a.bound||(a.bound=!0,t.bind("keydown",a.press))},detach:function(){a.bound=!1,a.map={},t.unbind("keydown",a.press)}};!0===i.options.keyboard&&s.default.each(i.pointer,function(t,e){n=i.options.step?i.options.step:1;var s=function(){var t=e.value;e.set(t-n)},o=function(){var t=e.value;e.set(t+n)};e.$element.attr("tabindex","0").on("focus",function(){return a.attach({left:s,right:o}),!1}).on("blur",function(){return a.detach(),!1})})})}();var d={version:"0.3.4"},f=s.default.fn.asRange,v=function(t){for(var e=arguments.length,i=Array(e>1?e-1:0),n=1;n<e;n++)i[n-1]=arguments[n];if("string"==typeof t){var a=t;if(/^_/.test(a))return!1;if(!(/^(get)$/.test(a)||"val"===a&&0===i.length))return this.each(function(){var t=s.default.data(this,"asRange");t&&"function"==typeof t[a]&&t[a].apply(t,i)});var o=this.first().data("asRange");if(o&&"function"==typeof o[a])return o[a].apply(o,i)}return this.each(function(){(0,s.default)(this).data("asRange")||(0,s.default)(this).data("asRange",new c(this,t))})};s.default.fn.asRange=v,s.default.asRange=s.default.extend({setDefaults:c.setDefaults,noConflict:function(){return s.default.fn.asRange=f,v}},d)});
//# source MappingURL=jquery-asRange.min.js.map