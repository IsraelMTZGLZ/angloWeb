/**
* jQuery asSpinner v0.4.3
* https://github.com/amazingSurge/jquery-asSpinner
*
* Copyright (c) amazingSurge
* Released under the LGPL-3.0 license
*/
!function(e,s){if("function"==typeof define&&define.amd)define(["jquery"],s);else if("undefined"!=typeof exports)s(require("jquery"));else{var i={exports:{}};s(e.jQuery),e.jqueryAsSpinnerEs=i.exports}}(this,function(e){"use strict";function s(e,s){if(!(e instanceof s))throw new TypeError("Cannot call a class as a function")}var i=function(e){return e&&e.__esModule?e:{default:e}}(e),t=function(){function e(e,s){for(var i=0;i<s.length;i++){var t=s[i];t.enumerable=t.enumerable||!1,t.configurable=!0,"value"in t&&(t.writable=!0),Object.defineProperty(e,t.key,t)}}return function(s,i,t){return i&&e(s.prototype,i),t&&e(s,t),s}}(),n={namespace:"asSpinner",skin:null,disabled:!1,min:-10,max:10,step:1,name:null,precision:0,rule:null,looping:!0,mousewheel:!1,format:function(e){return e},parse:function(e){return parseFloat(e)}},a={defaults:{min:null,max:null,step:1,precision:0},currency:{min:0,max:99999,step:.01,precision:2},quantity:{min:1,max:999,step:1,precision:0},percent:{min:1,max:100,step:1,precision:0},month:{min:1,max:12,step:1,precision:0},day:{min:1,max:31,step:1,precision:0},hour:{min:0,max:23,step:1,precision:0},minute:{min:1,max:59,step:1,precision:0},second:{min:1,max:59,step:1,precision:0}},o=function(){function e(t,o){if(s(this,e),this.element=t,this.$element=(0,i.default)(t),this.options=i.default.extend({},n,o,this.$element.data()),this.namespace=this.options.namespace,this.options.rule){var u=this,r=["min","max","step","precision"];i.default.each(r,function(e,s){u[s]=a[u.options.rule][s]})}else this.min=this.options.min,this.max=this.options.max,this.step=this.options.step,this.precision=this.options.precision;this.disabled=this.options.disabled,this.$element.prop("disabled")&&(this.disabled=!0),this.value=this.options.parse(this.$element.val()),this.mousewheel=this.options.mousewheel,this.mousewheel&&!i.default.event.special.mousewheel&&(this.mousewheel=!1),this.eventBinded=!1,this.spinTimeout=null,this.isFocused=!1,this.classes={disabled:this.namespace+"_disabled",skin:this.namespace+"_"+this.options.skin,focus:this.namespace+"_focus",control:this.namespace+"-control",down:this.namespace+"-down",up:this.namespace+"-up",wrap:this.namespace},this._trigger("init"),this.init()}return t(e,[{key:"init",value:function(){this.$control=(0,i.default)('<div class="'+this.namespace+'-control"><span class="'+this.classes.up+'"></span><span class="'+this.classes.down+'"></span></div>'),this.$wrap=this.$element.wrap('<div tabindex="0" class="'+this.classes.wrap+'"></div>').parent(),this.$down=this.$control.find("."+this.classes.down),this.$up=this.$control.find("."+this.classes.up),this.options.skin&&this.$wrap.addClass(this.classes.skin),this.$control.appendTo(this.$wrap),!1===this.disabled?this.bindEvent():this.disable(),this._trigger("ready")}},{key:"_trigger",value:function(e){for(var s=arguments.length,i=Array(s>1?s-1:0),t=1;t<s;t++)i[t-1]=arguments[t];var n=[this].concat(i);this.$element.trigger("asSpinner::"+e,n);var a="on"+(e=e.replace(/\b\w+\b/g,function(e){return e.substring(0,1).toUpperCase()+e.substring(1)}));"function"==typeof this.options[a]&&this.options[a].apply(this,i)}},{key:"spin",value:function(e,s){var i=this;!function s(t){clearTimeout(i.spinTimeout),i.spinTimeout=setTimeout(function(){e.call(i),s(60)},t)}(s||500)}},{key:"bindEvent",value:function(){var e=this;this.eventBinded=!0,this.$wrap.on("focus.asSpinner",function(){e.$wrap.addClass(e.classes.focus)}).on("blur.asSpinner",function(){e.isFocused||e.$wrap.removeClass(e.classes.focus)}),this.$down.on("mousedown.asSpinner",function(){(0,i.default)(document).one("mouseup.asSpinner",function(){clearTimeout(e.spinTimeout)}),e.spin(e.spinDown)}).on("mouseup.asSpinner",function(){clearTimeout(e.spinTimeout),(0,i.default)(document).off("mouseup.asSpinner")}).on("click.asSpinner",function(){e.spinDown()}),this.$up.on("mousedown.asSpinner",function(){(0,i.default)(document).one("mouseup.asSpinner",function(){clearTimeout(e.spinTimeout)}),e.spin(e.spinUp)}).on("mouseup.asSpinner",function(){clearTimeout(e.spinTimeout),(0,i.default)(document).off("mouseup.asSpinner")}).on("click.asSpinner",function(){e.spinUp()}),this.$element.on("focus.asSpinner",function(){e.isFocused=!0,e.$wrap.addClass(e.classes.focus),(0,i.default)(this).on("keydown.asSpinner",function(s){var i=s.keyCode||s.which;return 38===i?(e.applyValue(),e.spinUp(),!1):40===i?(e.applyValue(),e.spinDown(),!1):void(i<=57&&i>=48&&setTimeout(function(){},0))}),!0===e.mousewheel&&(0,i.default)(this).mousewheel(function(s,i){return i>0?e.spinUp():e.spinDown(),!1})}).on("blur.asSpinner",function(){e.isFocused=!1,e.$wrap.removeClass(e.classes.focus),(0,i.default)(this).off("keydown.asSpinner"),!0===e.mousewheel&&(0,i.default)(this).unmousewheel(),e.applyValue()})}},{key:"unbindEvent",value:function(){this.eventBinded=!1,this.$element.off(".asSpinner"),this.$down.off(".asSpinner"),this.$up.off(".asSpinner"),this.$wrap.off(".asSpinner")}},{key:"isNumber",value:function(e){return!("number"!=typeof e||!i.default.isNumeric(e))}},{key:"isOutOfBounds",value:function(e){return e<this.min?-1:e>this.max?1:0}},{key:"applyValue",value:function(){this.options.format(this.value)!==this.$element.val()&&this.set(this.options.parse(this.$element.val()))}},{key:"_set",value:function(e){isNaN(e)&&(e=this.min);var s=this.isOutOfBounds(e);0!==s&&(e=!0===this.options.looping?1===s?this.min:this.max:-1===s?this.min:this.max),this.value=e=Number(e).toFixed(this.precision),this.$element.val(this.options.format(this.value))}},{key:"set",value:function(e){this._set(e),this._trigger("change",this.value)}},{key:"get",value:function(){return this.value}},{key:"update",value:function(e){var s=this;return["min","max","precision","step"].forEach(function(i){e[i]&&(s[i]=e[i])}),e.value&&this.set(e.value),this}},{key:"val",value:function(e){if(!e)return this.get();this.set(this.options.parse(e))}},{key:"spinDown",value:function(){return i.default.isNumeric(this.value)||(this.value=0),this.value=parseFloat(this.value)-parseFloat(this.step),this.set(this.value),this}},{key:"spinUp",value:function(){return i.default.isNumeric(this.value)||(this.value=0),this.value=parseFloat(this.value)+parseFloat(this.step),this.set(this.value),this}},{key:"enable",value:function(){return this.disabled=!1,this.$wrap.removeClass(this.classes.disabled),this.$element.prop("disabled",!1),!1===this.eventBinded&&this.bindEvent(),this._trigger("enable"),this}},{key:"disable",value:function(){return this.disabled=!0,this.$element.prop("disabled",!0),this.$wrap.addClass(this.classes.disabled),this.unbindEvent(),this._trigger("disable"),this}},{key:"destroy",value:function(){return this.unbindEvent(),this.$control.remove(),this.$element.unwrap(),this._trigger("destroy"),this}}],[{key:"setDefaults",value:function(e){i.default.extend(n,i.default.isPlainObject(e)&&e)}}]),e}(),u={version:"0.4.3"},r=i.default.fn.asSpinner,l=function(e){for(var s=arguments.length,t=Array(s>1?s-1:0),n=1;n<s;n++)t[n-1]=arguments[n];if("string"==typeof e){var a=e;if(/^_/.test(a))return!1;if(!(/^(get)$/.test(a)||"val"===a&&0===t.length))return this.each(function(){var e=i.default.data(this,"asSpinner");e&&"function"==typeof e[a]&&e[a].apply(e,t)});var u=this.first().data("asSpinner");if(u&&"function"==typeof u[a])return u[a].apply(u,t)}return this.each(function(){(0,i.default)(this).data("asSpinner")||(0,i.default)(this).data("asSpinner",new o(this,e))})};i.default.fn.asSpinner=l,i.default.asSpinner=i.default.extend({setDefaults:o.setDefaults,noConflict:function(){return i.default.fn.asSpinner=r,l}},u)});
//# source MappingURL=jquery-asSpinner.min.js.map
