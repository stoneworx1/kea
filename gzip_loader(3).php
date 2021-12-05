
/*--- BEGIN: /home/kinkeaca/public_html/plugins/jquery/jquery.ui.core.min.js---*/
/*! jQuery UI - v1.10.4 - 2015-07-05
* http://jqueryui.com
* Copyright 2015 jQuery Foundation and other contributors; Licensed MIT */

(function(e,t){function i(t,i){var n,a,o,r=t.nodeName.toLowerCase();return"area"===r?(n=t.parentNode,a=n.name,t.href&&a&&"map"===n.nodeName.toLowerCase()?(o=e("img[usemap=#"+a+"]")[0],!!o&&s(o)):!1):(/input|select|textarea|button|object/.test(r)?!t.disabled:"a"===r?t.href||i:i)&&s(t)}function s(t){return e.expr.filters.visible(t)&&!e(t).parents().addBack().filter(function(){return"hidden"===e.css(this,"visibility")}).length}var n=0,a=/^ui-id-\d+$/;e.ui=e.ui||{},e.extend(e.ui,{version:"1.10.4",keyCode:{BACKSPACE:8,COMMA:188,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,LEFT:37,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SPACE:32,TAB:9,UP:38}}),e.fn.extend({focus:function(t){return function(i,s){return"number"==typeof i?this.each(function(){var t=this;setTimeout(function(){e(t).focus(),s&&s.call(t)},i)}):t.apply(this,arguments)}}(e.fn.focus),scrollParent:function(){var t;return t=e.ui.ie&&/(static|relative)/.test(this.css("position"))||/absolute/.test(this.css("position"))?this.parents().filter(function(){return/(relative|absolute|fixed)/.test(e.css(this,"position"))&&/(auto|scroll)/.test(e.css(this,"overflow")+e.css(this,"overflow-y")+e.css(this,"overflow-x"))}).eq(0):this.parents().filter(function(){return/(auto|scroll)/.test(e.css(this,"overflow")+e.css(this,"overflow-y")+e.css(this,"overflow-x"))}).eq(0),/fixed/.test(this.css("position"))||!t.length?e(document):t},zIndex:function(i){if(i!==t)return this.css("zIndex",i);if(this.length)for(var s,n,a=e(this[0]);a.length&&a[0]!==document;){if(s=a.css("position"),("absolute"===s||"relative"===s||"fixed"===s)&&(n=parseInt(a.css("zIndex"),10),!isNaN(n)&&0!==n))return n;a=a.parent()}return 0},uniqueId:function(){return this.each(function(){this.id||(this.id="ui-id-"+ ++n)})},removeUniqueId:function(){return this.each(function(){a.test(this.id)&&e(this).removeAttr("id")})}}),e.extend(e.expr[":"],{data:e.expr.createPseudo?e.expr.createPseudo(function(t){return function(i){return!!e.data(i,t)}}):function(t,i,s){return!!e.data(t,s[3])},focusable:function(t){return i(t,!isNaN(e.attr(t,"tabindex")))},tabbable:function(t){var s=e.attr(t,"tabindex"),n=isNaN(s);return(n||s>=0)&&i(t,!n)}}),e("<a>").outerWidth(1).jquery||e.each(["Width","Height"],function(i,s){function n(t,i,s,n){return e.each(a,function(){i-=parseFloat(e.css(t,"padding"+this))||0,s&&(i-=parseFloat(e.css(t,"border"+this+"Width"))||0),n&&(i-=parseFloat(e.css(t,"margin"+this))||0)}),i}var a="Width"===s?["Left","Right"]:["Top","Bottom"],o=s.toLowerCase(),r={innerWidth:e.fn.innerWidth,innerHeight:e.fn.innerHeight,outerWidth:e.fn.outerWidth,outerHeight:e.fn.outerHeight};e.fn["inner"+s]=function(i){return i===t?r["inner"+s].call(this):this.each(function(){e(this).css(o,n(this,i)+"px")})},e.fn["outer"+s]=function(t,i){return"number"!=typeof t?r["outer"+s].call(this,t):this.each(function(){e(this).css(o,n(this,t,!0,i)+"px")})}}),e.fn.addBack||(e.fn.addBack=function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}),e("<a>").data("a-b","a").removeData("a-b").data("a-b")&&(e.fn.removeData=function(t){return function(i){return arguments.length?t.call(this,e.camelCase(i)):t.call(this)}}(e.fn.removeData)),e.ui.ie=!!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()),e.support.selectstart="onselectstart"in document.createElement("div"),e.fn.extend({disableSelection:function(){return this.bind((e.support.selectstart?"selectstart":"mousedown")+".ui-disableSelection",function(e){e.preventDefault()})},enableSelection:function(){return this.unbind(".ui-disableSelection")}}),e.extend(e.ui,{plugin:{add:function(t,i,s){var n,a=e.ui[t].prototype;for(n in s)a.plugins[n]=a.plugins[n]||[],a.plugins[n].push([i,s[n]])},call:function(e,t,i){var s,n=e.plugins[t];if(n&&e.element[0].parentNode&&11!==e.element[0].parentNode.nodeType)for(s=0;n.length>s;s++)e.options[n[s][0]]&&n[s][1].apply(e.element,i)}},hasScroll:function(t,i){if("hidden"===e(t).css("overflow"))return!1;var s=i&&"left"===i?"scrollLeft":"scrollTop",n=!1;return t[s]>0?!0:(t[s]=1,n=t[s]>0,t[s]=0,n)}})})(jQuery);;
/*--- END: /home/kinkeaca/public_html/plugins/jquery/jquery.ui.core.min.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/plugins/jquery/jquery.ui.widget.min.js---*/
/*! jQuery UI - v1.10.4 - 2015-07-05
* http://jqueryui.com
* Copyright 2015 jQuery Foundation and other contributors; Licensed MIT */

(function(e,t){var i=0,s=Array.prototype.slice,n=e.cleanData;e.cleanData=function(t){for(var i,s=0;null!=(i=t[s]);s++)try{e(i).triggerHandler("remove")}catch(a){}n(t)},e.widget=function(i,s,n){var a,o,r,h,l={},u=i.split(".")[0];i=i.split(".")[1],a=u+"-"+i,n||(n=s,s=e.Widget),e.expr[":"][a.toLowerCase()]=function(t){return!!e.data(t,a)},e[u]=e[u]||{},o=e[u][i],r=e[u][i]=function(e,i){return this._createWidget?(arguments.length&&this._createWidget(e,i),t):new r(e,i)},e.extend(r,o,{version:n.version,_proto:e.extend({},n),_childConstructors:[]}),h=new s,h.options=e.widget.extend({},h.options),e.each(n,function(i,n){return e.isFunction(n)?(l[i]=function(){var e=function(){return s.prototype[i].apply(this,arguments)},t=function(e){return s.prototype[i].apply(this,e)};return function(){var i,s=this._super,a=this._superApply;return this._super=e,this._superApply=t,i=n.apply(this,arguments),this._super=s,this._superApply=a,i}}(),t):(l[i]=n,t)}),r.prototype=e.widget.extend(h,{widgetEventPrefix:o?h.widgetEventPrefix||i:i},l,{constructor:r,namespace:u,widgetName:i,widgetFullName:a}),o?(e.each(o._childConstructors,function(t,i){var s=i.prototype;e.widget(s.namespace+"."+s.widgetName,r,i._proto)}),delete o._childConstructors):s._childConstructors.push(r),e.widget.bridge(i,r)},e.widget.extend=function(i){for(var n,a,o=s.call(arguments,1),r=0,h=o.length;h>r;r++)for(n in o[r])a=o[r][n],o[r].hasOwnProperty(n)&&a!==t&&(i[n]=e.isPlainObject(a)?e.isPlainObject(i[n])?e.widget.extend({},i[n],a):e.widget.extend({},a):a);return i},e.widget.bridge=function(i,n){var a=n.prototype.widgetFullName||i;e.fn[i]=function(o){var r="string"==typeof o,h=s.call(arguments,1),l=this;return o=!r&&h.length?e.widget.extend.apply(null,[o].concat(h)):o,r?this.each(function(){var s,n=e.data(this,a);return n?e.isFunction(n[o])&&"_"!==o.charAt(0)?(s=n[o].apply(n,h),s!==n&&s!==t?(l=s&&s.jquery?l.pushStack(s.get()):s,!1):t):e.error("no such method '"+o+"' for "+i+" widget instance"):e.error("cannot call methods on "+i+" prior to initialization; "+"attempted to call method '"+o+"'")}):this.each(function(){var t=e.data(this,a);t?t.option(o||{})._init():e.data(this,a,new n(o,this))}),l}},e.Widget=function(){},e.Widget._childConstructors=[],e.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",defaultElement:"<div>",options:{disabled:!1,create:null},_createWidget:function(t,s){s=e(s||this.defaultElement||this)[0],this.element=e(s),this.uuid=i++,this.eventNamespace="."+this.widgetName+this.uuid,this.options=e.widget.extend({},this.options,this._getCreateOptions(),t),this.bindings=e(),this.hoverable=e(),this.focusable=e(),s!==this&&(e.data(s,this.widgetFullName,this),this._on(!0,this.element,{remove:function(e){e.target===s&&this.destroy()}}),this.document=e(s.style?s.ownerDocument:s.document||s),this.window=e(this.document[0].defaultView||this.document[0].parentWindow)),this._create(),this._trigger("create",null,this._getCreateEventData()),this._init()},_getCreateOptions:e.noop,_getCreateEventData:e.noop,_create:e.noop,_init:e.noop,destroy:function(){this._destroy(),this.element.unbind(this.eventNamespace).removeData(this.widgetName).removeData(this.widgetFullName).removeData(e.camelCase(this.widgetFullName)),this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName+"-disabled "+"ui-state-disabled"),this.bindings.unbind(this.eventNamespace),this.hoverable.removeClass("ui-state-hover"),this.focusable.removeClass("ui-state-focus")},_destroy:e.noop,widget:function(){return this.element},option:function(i,s){var n,a,o,r=i;if(0===arguments.length)return e.widget.extend({},this.options);if("string"==typeof i)if(r={},n=i.split("."),i=n.shift(),n.length){for(a=r[i]=e.widget.extend({},this.options[i]),o=0;n.length-1>o;o++)a[n[o]]=a[n[o]]||{},a=a[n[o]];if(i=n.pop(),1===arguments.length)return a[i]===t?null:a[i];a[i]=s}else{if(1===arguments.length)return this.options[i]===t?null:this.options[i];r[i]=s}return this._setOptions(r),this},_setOptions:function(e){var t;for(t in e)this._setOption(t,e[t]);return this},_setOption:function(e,t){return this.options[e]=t,"disabled"===e&&(this.widget().toggleClass(this.widgetFullName+"-disabled ui-state-disabled",!!t).attr("aria-disabled",t),this.hoverable.removeClass("ui-state-hover"),this.focusable.removeClass("ui-state-focus")),this},enable:function(){return this._setOption("disabled",!1)},disable:function(){return this._setOption("disabled",!0)},_on:function(i,s,n){var a,o=this;"boolean"!=typeof i&&(n=s,s=i,i=!1),n?(s=a=e(s),this.bindings=this.bindings.add(s)):(n=s,s=this.element,a=this.widget()),e.each(n,function(n,r){function h(){return i||o.options.disabled!==!0&&!e(this).hasClass("ui-state-disabled")?("string"==typeof r?o[r]:r).apply(o,arguments):t}"string"!=typeof r&&(h.guid=r.guid=r.guid||h.guid||e.guid++);var l=n.match(/^(\w+)\s*(.*)$/),u=l[1]+o.eventNamespace,d=l[2];d?a.delegate(d,u,h):s.bind(u,h)})},_off:function(e,t){t=(t||"").split(" ").join(this.eventNamespace+" ")+this.eventNamespace,e.unbind(t).undelegate(t)},_delay:function(e,t){function i(){return("string"==typeof e?s[e]:e).apply(s,arguments)}var s=this;return setTimeout(i,t||0)},_hoverable:function(t){this.hoverable=this.hoverable.add(t),this._on(t,{mouseenter:function(t){e(t.currentTarget).addClass("ui-state-hover")},mouseleave:function(t){e(t.currentTarget).removeClass("ui-state-hover")}})},_focusable:function(t){this.focusable=this.focusable.add(t),this._on(t,{focusin:function(t){e(t.currentTarget).addClass("ui-state-focus")},focusout:function(t){e(t.currentTarget).removeClass("ui-state-focus")}})},_trigger:function(t,i,s){var n,a,o=this.options[t];if(s=s||{},i=e.Event(i),i.type=(t===this.widgetEventPrefix?t:this.widgetEventPrefix+t).toLowerCase(),i.target=this.element[0],a=i.originalEvent)for(n in a)n in i||(i[n]=a[n]);return this.element.trigger(i,s),!(e.isFunction(o)&&o.apply(this.element[0],[i].concat(s))===!1||i.isDefaultPrevented())}},e.each({show:"fadeIn",hide:"fadeOut"},function(t,i){e.Widget.prototype["_"+t]=function(s,n,a){"string"==typeof n&&(n={effect:n});var o,r=n?n===!0||"number"==typeof n?i:n.effect||i:t;n=n||{},"number"==typeof n&&(n={duration:n}),o=!e.isEmptyObject(n),n.complete=a,n.delay&&s.delay(n.delay),o&&e.effects&&e.effects.effect[r]?s[t](n):r!==t&&s[r]?s[r](n.duration,n.easing,a):s.queue(function(i){e(this)[t](),a&&a.call(s[0]),i()})}})})(jQuery);;
/*--- END: /home/kinkeaca/public_html/plugins/jquery/jquery.ui.widget.min.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/plugins/jquery/jquery.ui.mouse.min.js---*/
/*! jQuery UI - v1.10.4 - 2015-07-05
* http://jqueryui.com
* Copyright 2015 jQuery Foundation and other contributors; Licensed MIT */

(function(e){var t=!1;e(document).mouseup(function(){t=!1}),e.widget("ui.mouse",{version:"1.10.4",options:{cancel:"input,textarea,button,select,option",distance:1,delay:0},_mouseInit:function(){var t=this;this.element.bind("mousedown."+this.widgetName,function(e){return t._mouseDown(e)}).bind("click."+this.widgetName,function(i){return!0===e.data(i.target,t.widgetName+".preventClickEvent")?(e.removeData(i.target,t.widgetName+".preventClickEvent"),i.stopImmediatePropagation(),!1):undefined}),this.started=!1},_mouseDestroy:function(){this.element.unbind("."+this.widgetName),this._mouseMoveDelegate&&e(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate)},_mouseDown:function(i){if(!t){this._mouseStarted&&this._mouseUp(i),this._mouseDownEvent=i;var s=this,n=1===i.which,a="string"==typeof this.options.cancel&&i.target.nodeName?e(i.target).closest(this.options.cancel).length:!1;return n&&!a&&this._mouseCapture(i)?(this.mouseDelayMet=!this.options.delay,this.mouseDelayMet||(this._mouseDelayTimer=setTimeout(function(){s.mouseDelayMet=!0},this.options.delay)),this._mouseDistanceMet(i)&&this._mouseDelayMet(i)&&(this._mouseStarted=this._mouseStart(i)!==!1,!this._mouseStarted)?(i.preventDefault(),!0):(!0===e.data(i.target,this.widgetName+".preventClickEvent")&&e.removeData(i.target,this.widgetName+".preventClickEvent"),this._mouseMoveDelegate=function(e){return s._mouseMove(e)},this._mouseUpDelegate=function(e){return s._mouseUp(e)},e(document).bind("mousemove."+this.widgetName,this._mouseMoveDelegate).bind("mouseup."+this.widgetName,this._mouseUpDelegate),i.preventDefault(),t=!0,!0)):!0}},_mouseMove:function(t){return e.ui.ie&&(!document.documentMode||9>document.documentMode)&&!t.button?this._mouseUp(t):this._mouseStarted?(this._mouseDrag(t),t.preventDefault()):(this._mouseDistanceMet(t)&&this._mouseDelayMet(t)&&(this._mouseStarted=this._mouseStart(this._mouseDownEvent,t)!==!1,this._mouseStarted?this._mouseDrag(t):this._mouseUp(t)),!this._mouseStarted)},_mouseUp:function(t){return e(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate),this._mouseStarted&&(this._mouseStarted=!1,t.target===this._mouseDownEvent.target&&e.data(t.target,this.widgetName+".preventClickEvent",!0),this._mouseStop(t)),!1},_mouseDistanceMet:function(e){return Math.max(Math.abs(this._mouseDownEvent.pageX-e.pageX),Math.abs(this._mouseDownEvent.pageY-e.pageY))>=this.options.distance},_mouseDelayMet:function(){return this.mouseDelayMet},_mouseStart:function(){},_mouseDrag:function(){},_mouseStop:function(){},_mouseCapture:function(){return!0}})})(jQuery);;
/*--- END: /home/kinkeaca/public_html/plugins/jquery/jquery.ui.mouse.min.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/plugins/jquery/jquery.ui.slider.min.js---*/
/*! jQuery UI - v1.10.4 - 2015-07-05
* http://jqueryui.com
* Copyright 2015 jQuery Foundation and other contributors; Licensed MIT */

(function(e){var t=5;e.widget("ui.slider",e.ui.mouse,{version:"1.10.4",widgetEventPrefix:"slide",options:{animate:!1,distance:0,max:100,min:0,orientation:"horizontal",range:!1,step:1,value:0,values:null,change:null,slide:null,start:null,stop:null},_create:function(){this._keySliding=!1,this._mouseSliding=!1,this._animateOff=!0,this._handleIndex=null,this._detectOrientation(),this._mouseInit(),this.element.addClass("ui-slider ui-slider-"+this.orientation+" ui-widget"+" ui-widget-content"+" ui-corner-all"),this._refresh(),this._setOption("disabled",this.options.disabled),this._animateOff=!1},_refresh:function(){this._createRange(),this._createHandles(),this._setupEvents(),this._refreshValue()},_createHandles:function(){var t,i,s=this.options,n=this.element.find(".ui-slider-handle").addClass("ui-state-default ui-corner-all"),a="<a class='ui-slider-handle ui-state-default ui-corner-all' href='#'></a>",o=[];for(i=s.values&&s.values.length||1,n.length>i&&(n.slice(i).remove(),n=n.slice(0,i)),t=n.length;i>t;t++)o.push(a);this.handles=n.add(e(o.join("")).appendTo(this.element)),this.handle=this.handles.eq(0),this.handles.each(function(t){e(this).data("ui-slider-handle-index",t)})},_createRange:function(){var t=this.options,i="";t.range?(t.range===!0&&(t.values?t.values.length&&2!==t.values.length?t.values=[t.values[0],t.values[0]]:e.isArray(t.values)&&(t.values=t.values.slice(0)):t.values=[this._valueMin(),this._valueMin()]),this.range&&this.range.length?this.range.removeClass("ui-slider-range-min ui-slider-range-max").css({left:"",bottom:""}):(this.range=e("<div></div>").appendTo(this.element),i="ui-slider-range ui-widget-header ui-corner-all"),this.range.addClass(i+("min"===t.range||"max"===t.range?" ui-slider-range-"+t.range:""))):(this.range&&this.range.remove(),this.range=null)},_setupEvents:function(){var e=this.handles.add(this.range).filter("a");this._off(e),this._on(e,this._handleEvents),this._hoverable(e),this._focusable(e)},_destroy:function(){this.handles.remove(),this.range&&this.range.remove(),this.element.removeClass("ui-slider ui-slider-horizontal ui-slider-vertical ui-widget ui-widget-content ui-corner-all"),this._mouseDestroy()},_mouseCapture:function(t){var i,s,n,a,o,r,h,l,u=this,d=this.options;return d.disabled?!1:(this.elementSize={width:this.element.outerWidth(),height:this.element.outerHeight()},this.elementOffset=this.element.offset(),i={x:t.pageX,y:t.pageY},s=this._normValueFromMouse(i),n=this._valueMax()-this._valueMin()+1,this.handles.each(function(t){var i=Math.abs(s-u.values(t));(n>i||n===i&&(t===u._lastChangedValue||u.values(t)===d.min))&&(n=i,a=e(this),o=t)}),r=this._start(t,o),r===!1?!1:(this._mouseSliding=!0,this._handleIndex=o,a.addClass("ui-state-active").focus(),h=a.offset(),l=!e(t.target).parents().addBack().is(".ui-slider-handle"),this._clickOffset=l?{left:0,top:0}:{left:t.pageX-h.left-a.width()/2,top:t.pageY-h.top-a.height()/2-(parseInt(a.css("borderTopWidth"),10)||0)-(parseInt(a.css("borderBottomWidth"),10)||0)+(parseInt(a.css("marginTop"),10)||0)},this.handles.hasClass("ui-state-hover")||this._slide(t,o,s),this._animateOff=!0,!0))},_mouseStart:function(){return!0},_mouseDrag:function(e){var t={x:e.pageX,y:e.pageY},i=this._normValueFromMouse(t);return this._slide(e,this._handleIndex,i),!1},_mouseStop:function(e){return this.handles.removeClass("ui-state-active"),this._mouseSliding=!1,this._stop(e,this._handleIndex),this._change(e,this._handleIndex),this._handleIndex=null,this._clickOffset=null,this._animateOff=!1,!1},_detectOrientation:function(){this.orientation="vertical"===this.options.orientation?"vertical":"horizontal"},_normValueFromMouse:function(e){var t,i,s,n,a;return"horizontal"===this.orientation?(t=this.elementSize.width,i=e.x-this.elementOffset.left-(this._clickOffset?this._clickOffset.left:0)):(t=this.elementSize.height,i=e.y-this.elementOffset.top-(this._clickOffset?this._clickOffset.top:0)),s=i/t,s>1&&(s=1),0>s&&(s=0),"vertical"===this.orientation&&(s=1-s),n=this._valueMax()-this._valueMin(),a=this._valueMin()+s*n,this._trimAlignValue(a)},_start:function(e,t){var i={handle:this.handles[t],value:this.value()};return this.options.values&&this.options.values.length&&(i.value=this.values(t),i.values=this.values()),this._trigger("start",e,i)},_slide:function(e,t,i){var s,n,a;this.options.values&&this.options.values.length?(s=this.values(t?0:1),2===this.options.values.length&&this.options.range===!0&&(0===t&&i>s||1===t&&s>i)&&(i=s),i!==this.values(t)&&(n=this.values(),n[t]=i,a=this._trigger("slide",e,{handle:this.handles[t],value:i,values:n}),s=this.values(t?0:1),a!==!1&&this.values(t,i))):i!==this.value()&&(a=this._trigger("slide",e,{handle:this.handles[t],value:i}),a!==!1&&this.value(i))},_stop:function(e,t){var i={handle:this.handles[t],value:this.value()};this.options.values&&this.options.values.length&&(i.value=this.values(t),i.values=this.values()),this._trigger("stop",e,i)},_change:function(e,t){if(!this._keySliding&&!this._mouseSliding){var i={handle:this.handles[t],value:this.value()};this.options.values&&this.options.values.length&&(i.value=this.values(t),i.values=this.values()),this._lastChangedValue=t,this._trigger("change",e,i)}},value:function(e){return arguments.length?(this.options.value=this._trimAlignValue(e),this._refreshValue(),this._change(null,0),undefined):this._value()},values:function(t,i){var s,n,a;if(arguments.length>1)return this.options.values[t]=this._trimAlignValue(i),this._refreshValue(),this._change(null,t),undefined;if(!arguments.length)return this._values();if(!e.isArray(arguments[0]))return this.options.values&&this.options.values.length?this._values(t):this.value();for(s=this.options.values,n=arguments[0],a=0;s.length>a;a+=1)s[a]=this._trimAlignValue(n[a]),this._change(null,a);this._refreshValue()},_setOption:function(t,i){var s,n=0;switch("range"===t&&this.options.range===!0&&("min"===i?(this.options.value=this._values(0),this.options.values=null):"max"===i&&(this.options.value=this._values(this.options.values.length-1),this.options.values=null)),e.isArray(this.options.values)&&(n=this.options.values.length),e.Widget.prototype._setOption.apply(this,arguments),t){case"orientation":this._detectOrientation(),this.element.removeClass("ui-slider-horizontal ui-slider-vertical").addClass("ui-slider-"+this.orientation),this._refreshValue();break;case"value":this._animateOff=!0,this._refreshValue(),this._change(null,0),this._animateOff=!1;break;case"values":for(this._animateOff=!0,this._refreshValue(),s=0;n>s;s+=1)this._change(null,s);this._animateOff=!1;break;case"min":case"max":this._animateOff=!0,this._refreshValue(),this._animateOff=!1;break;case"range":this._animateOff=!0,this._refresh(),this._animateOff=!1}},_value:function(){var e=this.options.value;return e=this._trimAlignValue(e)},_values:function(e){var t,i,s;if(arguments.length)return t=this.options.values[e],t=this._trimAlignValue(t);if(this.options.values&&this.options.values.length){for(i=this.options.values.slice(),s=0;i.length>s;s+=1)i[s]=this._trimAlignValue(i[s]);return i}return[]},_trimAlignValue:function(e){if(this._valueMin()>=e)return this._valueMin();if(e>=this._valueMax())return this._valueMax();var t=this.options.step>0?this.options.step:1,i=(e-this._valueMin())%t,s=e-i;return 2*Math.abs(i)>=t&&(s+=i>0?t:-t),parseFloat(s.toFixed(5))},_valueMin:function(){return this.options.min},_valueMax:function(){return this.options.max},_refreshValue:function(){var t,i,s,n,a,o=this.options.range,r=this.options,h=this,l=this._animateOff?!1:r.animate,u={};this.options.values&&this.options.values.length?this.handles.each(function(s){i=100*((h.values(s)-h._valueMin())/(h._valueMax()-h._valueMin())),u["horizontal"===h.orientation?"left":"bottom"]=i+"%",e(this).stop(1,1)[l?"animate":"css"](u,r.animate),h.options.range===!0&&("horizontal"===h.orientation?(0===s&&h.range.stop(1,1)[l?"animate":"css"]({left:i+"%"},r.animate),1===s&&h.range[l?"animate":"css"]({width:i-t+"%"},{queue:!1,duration:r.animate})):(0===s&&h.range.stop(1,1)[l?"animate":"css"]({bottom:i+"%"},r.animate),1===s&&h.range[l?"animate":"css"]({height:i-t+"%"},{queue:!1,duration:r.animate}))),t=i}):(s=this.value(),n=this._valueMin(),a=this._valueMax(),i=a!==n?100*((s-n)/(a-n)):0,u["horizontal"===this.orientation?"left":"bottom"]=i+"%",this.handle.stop(1,1)[l?"animate":"css"](u,r.animate),"min"===o&&"horizontal"===this.orientation&&this.range.stop(1,1)[l?"animate":"css"]({width:i+"%"},r.animate),"max"===o&&"horizontal"===this.orientation&&this.range[l?"animate":"css"]({width:100-i+"%"},{queue:!1,duration:r.animate}),"min"===o&&"vertical"===this.orientation&&this.range.stop(1,1)[l?"animate":"css"]({height:i+"%"},r.animate),"max"===o&&"vertical"===this.orientation&&this.range[l?"animate":"css"]({height:100-i+"%"},{queue:!1,duration:r.animate}))},_handleEvents:{keydown:function(i){var s,n,a,o,r=e(i.target).data("ui-slider-handle-index");switch(i.keyCode){case e.ui.keyCode.HOME:case e.ui.keyCode.END:case e.ui.keyCode.PAGE_UP:case e.ui.keyCode.PAGE_DOWN:case e.ui.keyCode.UP:case e.ui.keyCode.RIGHT:case e.ui.keyCode.DOWN:case e.ui.keyCode.LEFT:if(i.preventDefault(),!this._keySliding&&(this._keySliding=!0,e(i.target).addClass("ui-state-active"),s=this._start(i,r),s===!1))return}switch(o=this.options.step,n=a=this.options.values&&this.options.values.length?this.values(r):this.value(),i.keyCode){case e.ui.keyCode.HOME:a=this._valueMin();break;case e.ui.keyCode.END:a=this._valueMax();break;case e.ui.keyCode.PAGE_UP:a=this._trimAlignValue(n+(this._valueMax()-this._valueMin())/t);break;case e.ui.keyCode.PAGE_DOWN:a=this._trimAlignValue(n-(this._valueMax()-this._valueMin())/t);break;case e.ui.keyCode.UP:case e.ui.keyCode.RIGHT:if(n===this._valueMax())return;a=this._trimAlignValue(n+o);break;case e.ui.keyCode.DOWN:case e.ui.keyCode.LEFT:if(n===this._valueMin())return;a=this._trimAlignValue(n-o)}this._slide(i,r,a)},click:function(e){e.preventDefault()},keyup:function(t){var i=e(t.target).data("ui-slider-handle-index");this._keySliding&&(this._keySliding=!1,this._stop(t,i),this._change(t,i),e(t.target).removeClass("ui-state-active"))}}})})(jQuery);;
/*--- END: /home/kinkeaca/public_html/plugins/jquery/jquery.ui.slider.min.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/plugins/jquery/jquery.ui.datepicker.min.js---*/
/*! jQuery UI - v1.10.4 - 2015-07-05
* http://jqueryui.com
* Copyright 2015 jQuery Foundation and other contributors; Licensed MIT */

(function(e,t){function i(){this._curInst=null,this._keyEvent=!1,this._disabledInputs=[],this._datepickerShowing=!1,this._inDialog=!1,this._mainDivId="ui-datepicker-div",this._inlineClass="ui-datepicker-inline",this._appendClass="ui-datepicker-append",this._triggerClass="ui-datepicker-trigger",this._dialogClass="ui-datepicker-dialog",this._disableClass="ui-datepicker-disabled",this._unselectableClass="ui-datepicker-unselectable",this._currentClass="ui-datepicker-current-day",this._dayOverClass="ui-datepicker-days-cell-over",this.regional=[],this.regional[""]={closeText:"Done",prevText:"Prev",nextText:"Next",currentText:"Today",monthNames:["January","February","March","April","May","June","July","August","September","October","November","December"],monthNamesShort:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],dayNames:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],dayNamesShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],dayNamesMin:["Su","Mo","Tu","We","Th","Fr","Sa"],weekHeader:"Wk",dateFormat:"mm/dd/yy",firstDay:0,isRTL:!1,showMonthAfterYear:!1,yearSuffix:""},this._defaults={showOn:"focus",showAnim:"fadeIn",showOptions:{},defaultDate:null,appendText:"",buttonText:"...",buttonImage:"",buttonImageOnly:!1,hideIfNoPrevNext:!1,navigationAsDateFormat:!1,gotoCurrent:!1,changeMonth:!1,changeYear:!1,yearRange:"c-10:c+10",showOtherMonths:!1,selectOtherMonths:!1,showWeek:!1,calculateWeek:this.iso8601Week,shortYearCutoff:"+10",minDate:null,maxDate:null,duration:"fast",beforeShowDay:null,beforeShow:null,onSelect:null,onChangeMonthYear:null,onClose:null,numberOfMonths:1,showCurrentAtPos:0,stepMonths:1,stepBigMonths:12,altField:"",altFormat:"",constrainInput:!0,showButtonPanel:!1,autoSize:!1,disabled:!1},e.extend(this._defaults,this.regional[""]),this.dpDiv=s(e("<div id='"+this._mainDivId+"' class='ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>"))}function s(t){var i="button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a";return t.delegate(i,"mouseout",function(){e(this).removeClass("ui-state-hover"),-1!==this.className.indexOf("ui-datepicker-prev")&&e(this).removeClass("ui-datepicker-prev-hover"),-1!==this.className.indexOf("ui-datepicker-next")&&e(this).removeClass("ui-datepicker-next-hover")}).delegate(i,"mouseover",function(){e.datepicker._isDisabledDatepicker(a.inline?t.parent()[0]:a.input[0])||(e(this).parents(".ui-datepicker-calendar").find("a").removeClass("ui-state-hover"),e(this).addClass("ui-state-hover"),-1!==this.className.indexOf("ui-datepicker-prev")&&e(this).addClass("ui-datepicker-prev-hover"),-1!==this.className.indexOf("ui-datepicker-next")&&e(this).addClass("ui-datepicker-next-hover"))})}function n(t,i){e.extend(t,i);for(var s in i)null==i[s]&&(t[s]=i[s]);return t}e.extend(e.ui,{datepicker:{version:"1.10.4"}});var a,o="datepicker";e.extend(i.prototype,{markerClassName:"hasDatepicker",maxRows:4,_widgetDatepicker:function(){return this.dpDiv},setDefaults:function(e){return n(this._defaults,e||{}),this},_attachDatepicker:function(t,i){var s,n,a;s=t.nodeName.toLowerCase(),n="div"===s||"span"===s,t.id||(this.uuid+=1,t.id="dp"+this.uuid),a=this._newInst(e(t),n),a.settings=e.extend({},i||{}),"input"===s?this._connectDatepicker(t,a):n&&this._inlineDatepicker(t,a)},_newInst:function(t,i){var n=t[0].id.replace(/([^A-Za-z0-9_\-])/g,"\\\\$1");return{id:n,input:t,selectedDay:0,selectedMonth:0,selectedYear:0,drawMonth:0,drawYear:0,inline:i,dpDiv:i?s(e("<div class='"+this._inlineClass+" ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all'></div>")):this.dpDiv}},_connectDatepicker:function(t,i){var s=e(t);i.append=e([]),i.trigger=e([]),s.hasClass(this.markerClassName)||(this._attachments(s,i),s.addClass(this.markerClassName).keydown(this._doKeyDown).keypress(this._doKeyPress).keyup(this._doKeyUp),this._autoSize(i),e.data(t,o,i),i.settings.disabled&&this._disableDatepicker(t))},_attachments:function(t,i){var s,n,a,o=this._get(i,"appendText"),r=this._get(i,"isRTL");i.append&&i.append.remove(),o&&(i.append=e("<span class='"+this._appendClass+"'>"+o+"</span>"),t[r?"before":"after"](i.append)),t.unbind("focus",this._showDatepicker),i.trigger&&i.trigger.remove(),s=this._get(i,"showOn"),("focus"===s||"both"===s)&&t.focus(this._showDatepicker),("button"===s||"both"===s)&&(n=this._get(i,"buttonText"),a=this._get(i,"buttonImage"),i.trigger=e(this._get(i,"buttonImageOnly")?e("<img/>").addClass(this._triggerClass).attr({src:a,alt:n,title:n}):e("<button type='button'></button>").addClass(this._triggerClass).html(a?e("<img/>").attr({src:a,alt:n,title:n}):n)),t[r?"before":"after"](i.trigger),i.trigger.click(function(){return e.datepicker._datepickerShowing&&e.datepicker._lastInput===t[0]?e.datepicker._hideDatepicker():e.datepicker._datepickerShowing&&e.datepicker._lastInput!==t[0]?(e.datepicker._hideDatepicker(),e.datepicker._showDatepicker(t[0])):e.datepicker._showDatepicker(t[0]),!1}))},_autoSize:function(e){if(this._get(e,"autoSize")&&!e.inline){var t,i,s,n,a=new Date(2009,11,20),o=this._get(e,"dateFormat");o.match(/[DM]/)&&(t=function(e){for(i=0,s=0,n=0;e.length>n;n++)e[n].length>i&&(i=e[n].length,s=n);return s},a.setMonth(t(this._get(e,o.match(/MM/)?"monthNames":"monthNamesShort"))),a.setDate(t(this._get(e,o.match(/DD/)?"dayNames":"dayNamesShort"))+20-a.getDay())),e.input.attr("size",this._formatDate(e,a).length)}},_inlineDatepicker:function(t,i){var s=e(t);s.hasClass(this.markerClassName)||(s.addClass(this.markerClassName).append(i.dpDiv),e.data(t,o,i),this._setDate(i,this._getDefaultDate(i),!0),this._updateDatepicker(i),this._updateAlternate(i),i.settings.disabled&&this._disableDatepicker(t),i.dpDiv.css("display","block"))},_dialogDatepicker:function(t,i,s,a,r){var h,l,u,d,c,p=this._dialogInst;return p||(this.uuid+=1,h="dp"+this.uuid,this._dialogInput=e("<input type='text' id='"+h+"' style='position: absolute; top: -100px; width: 0px;'/>"),this._dialogInput.keydown(this._doKeyDown),e("body").append(this._dialogInput),p=this._dialogInst=this._newInst(this._dialogInput,!1),p.settings={},e.data(this._dialogInput[0],o,p)),n(p.settings,a||{}),i=i&&i.constructor===Date?this._formatDate(p,i):i,this._dialogInput.val(i),this._pos=r?r.length?r:[r.pageX,r.pageY]:null,this._pos||(l=document.documentElement.clientWidth,u=document.documentElement.clientHeight,d=document.documentElement.scrollLeft||document.body.scrollLeft,c=document.documentElement.scrollTop||document.body.scrollTop,this._pos=[l/2-100+d,u/2-150+c]),this._dialogInput.css("left",this._pos[0]+20+"px").css("top",this._pos[1]+"px"),p.settings.onSelect=s,this._inDialog=!0,this.dpDiv.addClass(this._dialogClass),this._showDatepicker(this._dialogInput[0]),e.blockUI&&e.blockUI(this.dpDiv),e.data(this._dialogInput[0],o,p),this},_destroyDatepicker:function(t){var i,s=e(t),n=e.data(t,o);s.hasClass(this.markerClassName)&&(i=t.nodeName.toLowerCase(),e.removeData(t,o),"input"===i?(n.append.remove(),n.trigger.remove(),s.removeClass(this.markerClassName).unbind("focus",this._showDatepicker).unbind("keydown",this._doKeyDown).unbind("keypress",this._doKeyPress).unbind("keyup",this._doKeyUp)):("div"===i||"span"===i)&&s.removeClass(this.markerClassName).empty())},_enableDatepicker:function(t){var i,s,n=e(t),a=e.data(t,o);n.hasClass(this.markerClassName)&&(i=t.nodeName.toLowerCase(),"input"===i?(t.disabled=!1,a.trigger.filter("button").each(function(){this.disabled=!1}).end().filter("img").css({opacity:"1.0",cursor:""})):("div"===i||"span"===i)&&(s=n.children("."+this._inlineClass),s.children().removeClass("ui-state-disabled"),s.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled",!1)),this._disabledInputs=e.map(this._disabledInputs,function(e){return e===t?null:e}))},_disableDatepicker:function(t){var i,s,n=e(t),a=e.data(t,o);n.hasClass(this.markerClassName)&&(i=t.nodeName.toLowerCase(),"input"===i?(t.disabled=!0,a.trigger.filter("button").each(function(){this.disabled=!0}).end().filter("img").css({opacity:"0.5",cursor:"default"})):("div"===i||"span"===i)&&(s=n.children("."+this._inlineClass),s.children().addClass("ui-state-disabled"),s.find("select.ui-datepicker-month, select.ui-datepicker-year").prop("disabled",!0)),this._disabledInputs=e.map(this._disabledInputs,function(e){return e===t?null:e}),this._disabledInputs[this._disabledInputs.length]=t)},_isDisabledDatepicker:function(e){if(!e)return!1;for(var t=0;this._disabledInputs.length>t;t++)if(this._disabledInputs[t]===e)return!0;return!1},_getInst:function(t){try{return e.data(t,o)}catch(i){throw"Missing instance data for this datepicker"}},_optionDatepicker:function(i,s,a){var o,r,h,l,u=this._getInst(i);return 2===arguments.length&&"string"==typeof s?"defaults"===s?e.extend({},e.datepicker._defaults):u?"all"===s?e.extend({},u.settings):this._get(u,s):null:(o=s||{},"string"==typeof s&&(o={},o[s]=a),u&&(this._curInst===u&&this._hideDatepicker(),r=this._getDateDatepicker(i,!0),h=this._getMinMaxDate(u,"min"),l=this._getMinMaxDate(u,"max"),n(u.settings,o),null!==h&&o.dateFormat!==t&&o.minDate===t&&(u.settings.minDate=this._formatDate(u,h)),null!==l&&o.dateFormat!==t&&o.maxDate===t&&(u.settings.maxDate=this._formatDate(u,l)),"disabled"in o&&(o.disabled?this._disableDatepicker(i):this._enableDatepicker(i)),this._attachments(e(i),u),this._autoSize(u),this._setDate(u,r),this._updateAlternate(u),this._updateDatepicker(u)),t)},_changeDatepicker:function(e,t,i){this._optionDatepicker(e,t,i)},_refreshDatepicker:function(e){var t=this._getInst(e);t&&this._updateDatepicker(t)},_setDateDatepicker:function(e,t){var i=this._getInst(e);i&&(this._setDate(i,t),this._updateDatepicker(i),this._updateAlternate(i))},_getDateDatepicker:function(e,t){var i=this._getInst(e);return i&&!i.inline&&this._setDateFromField(i,t),i?this._getDate(i):null},_doKeyDown:function(t){var i,s,n,a=e.datepicker._getInst(t.target),o=!0,r=a.dpDiv.is(".ui-datepicker-rtl");if(a._keyEvent=!0,e.datepicker._datepickerShowing)switch(t.keyCode){case 9:e.datepicker._hideDatepicker(),o=!1;break;case 13:return n=e("td."+e.datepicker._dayOverClass+":not(."+e.datepicker._currentClass+")",a.dpDiv),n[0]&&e.datepicker._selectDay(t.target,a.selectedMonth,a.selectedYear,n[0]),i=e.datepicker._get(a,"onSelect"),i?(s=e.datepicker._formatDate(a),i.apply(a.input?a.input[0]:null,[s,a])):e.datepicker._hideDatepicker(),!1;case 27:e.datepicker._hideDatepicker();break;case 33:e.datepicker._adjustDate(t.target,t.ctrlKey?-e.datepicker._get(a,"stepBigMonths"):-e.datepicker._get(a,"stepMonths"),"M");break;case 34:e.datepicker._adjustDate(t.target,t.ctrlKey?+e.datepicker._get(a,"stepBigMonths"):+e.datepicker._get(a,"stepMonths"),"M");break;case 35:(t.ctrlKey||t.metaKey)&&e.datepicker._clearDate(t.target),o=t.ctrlKey||t.metaKey;break;case 36:(t.ctrlKey||t.metaKey)&&e.datepicker._gotoToday(t.target),o=t.ctrlKey||t.metaKey;break;case 37:(t.ctrlKey||t.metaKey)&&e.datepicker._adjustDate(t.target,r?1:-1,"D"),o=t.ctrlKey||t.metaKey,t.originalEvent.altKey&&e.datepicker._adjustDate(t.target,t.ctrlKey?-e.datepicker._get(a,"stepBigMonths"):-e.datepicker._get(a,"stepMonths"),"M");break;case 38:(t.ctrlKey||t.metaKey)&&e.datepicker._adjustDate(t.target,-7,"D"),o=t.ctrlKey||t.metaKey;break;case 39:(t.ctrlKey||t.metaKey)&&e.datepicker._adjustDate(t.target,r?-1:1,"D"),o=t.ctrlKey||t.metaKey,t.originalEvent.altKey&&e.datepicker._adjustDate(t.target,t.ctrlKey?+e.datepicker._get(a,"stepBigMonths"):+e.datepicker._get(a,"stepMonths"),"M");break;case 40:(t.ctrlKey||t.metaKey)&&e.datepicker._adjustDate(t.target,7,"D"),o=t.ctrlKey||t.metaKey;break;default:o=!1}else 36===t.keyCode&&t.ctrlKey?e.datepicker._showDatepicker(this):o=!1;o&&(t.preventDefault(),t.stopPropagation())},_doKeyPress:function(i){var s,n,a=e.datepicker._getInst(i.target);return e.datepicker._get(a,"constrainInput")?(s=e.datepicker._possibleChars(e.datepicker._get(a,"dateFormat")),n=String.fromCharCode(null==i.charCode?i.keyCode:i.charCode),i.ctrlKey||i.metaKey||" ">n||!s||s.indexOf(n)>-1):t},_doKeyUp:function(t){var i,s=e.datepicker._getInst(t.target);if(s.input.val()!==s.lastVal)try{i=e.datepicker.parseDate(e.datepicker._get(s,"dateFormat"),s.input?s.input.val():null,e.datepicker._getFormatConfig(s)),i&&(e.datepicker._setDateFromField(s),e.datepicker._updateAlternate(s),e.datepicker._updateDatepicker(s))}catch(n){}return!0},_showDatepicker:function(t){if(t=t.target||t,"input"!==t.nodeName.toLowerCase()&&(t=e("input",t.parentNode)[0]),!e.datepicker._isDisabledDatepicker(t)&&e.datepicker._lastInput!==t){var i,s,a,o,r,h,l;i=e.datepicker._getInst(t),e.datepicker._curInst&&e.datepicker._curInst!==i&&(e.datepicker._curInst.dpDiv.stop(!0,!0),i&&e.datepicker._datepickerShowing&&e.datepicker._hideDatepicker(e.datepicker._curInst.input[0])),s=e.datepicker._get(i,"beforeShow"),a=s?s.apply(t,[t,i]):{},a!==!1&&(n(i.settings,a),i.lastVal=null,e.datepicker._lastInput=t,e.datepicker._setDateFromField(i),e.datepicker._inDialog&&(t.value=""),e.datepicker._pos||(e.datepicker._pos=e.datepicker._findPos(t),e.datepicker._pos[1]+=t.offsetHeight),o=!1,e(t).parents().each(function(){return o|="fixed"===e(this).css("position"),!o}),r={left:e.datepicker._pos[0],top:e.datepicker._pos[1]},e.datepicker._pos=null,i.dpDiv.empty(),i.dpDiv.css({position:"absolute",display:"block",top:"-1000px"}),e.datepicker._updateDatepicker(i),r=e.datepicker._checkOffset(i,r,o),i.dpDiv.css({position:e.datepicker._inDialog&&e.blockUI?"static":o?"fixed":"absolute",display:"none",left:r.left+"px",top:r.top+"px"}),i.inline||(h=e.datepicker._get(i,"showAnim"),l=e.datepicker._get(i,"duration"),i.dpDiv.zIndex(e(t).zIndex()+1),e.datepicker._datepickerShowing=!0,e.effects&&e.effects.effect[h]?i.dpDiv.show(h,e.datepicker._get(i,"showOptions"),l):i.dpDiv[h||"show"](h?l:null),e.datepicker._shouldFocusInput(i)&&i.input.focus(),e.datepicker._curInst=i))}},_updateDatepicker:function(t){this.maxRows=4,a=t,t.dpDiv.empty().append(this._generateHTML(t)),this._attachHandlers(t),t.dpDiv.find("."+this._dayOverClass+" a").mouseover();var i,s=this._getNumberOfMonths(t),n=s[1],o=17;t.dpDiv.removeClass("ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4").width(""),n>1&&t.dpDiv.addClass("ui-datepicker-multi-"+n).css("width",o*n+"em"),t.dpDiv[(1!==s[0]||1!==s[1]?"add":"remove")+"Class"]("ui-datepicker-multi"),t.dpDiv[(this._get(t,"isRTL")?"add":"remove")+"Class"]("ui-datepicker-rtl"),t===e.datepicker._curInst&&e.datepicker._datepickerShowing&&e.datepicker._shouldFocusInput(t)&&t.input.focus(),t.yearshtml&&(i=t.yearshtml,setTimeout(function(){i===t.yearshtml&&t.yearshtml&&t.dpDiv.find("select.ui-datepicker-year:first").replaceWith(t.yearshtml),i=t.yearshtml=null},0))},_shouldFocusInput:function(e){return e.input&&e.input.is(":visible")&&!e.input.is(":disabled")&&!e.input.is(":focus")},_checkOffset:function(t,i,s){var n=t.dpDiv.outerWidth(),a=t.dpDiv.outerHeight(),o=t.input?t.input.outerWidth():0,r=t.input?t.input.outerHeight():0,h=document.documentElement.clientWidth+(s?0:e(document).scrollLeft()),l=document.documentElement.clientHeight+(s?0:e(document).scrollTop());return i.left-=this._get(t,"isRTL")?n-o:0,i.left-=s&&i.left===t.input.offset().left?e(document).scrollLeft():0,i.top-=s&&i.top===t.input.offset().top+r?e(document).scrollTop():0,i.left-=Math.min(i.left,i.left+n>h&&h>n?Math.abs(i.left+n-h):0),i.top-=Math.min(i.top,i.top+a>l&&l>a?Math.abs(a+r):0),i},_findPos:function(t){for(var i,s=this._getInst(t),n=this._get(s,"isRTL");t&&("hidden"===t.type||1!==t.nodeType||e.expr.filters.hidden(t));)t=t[n?"previousSibling":"nextSibling"];return i=e(t).offset(),[i.left,i.top]},_hideDatepicker:function(t){var i,s,n,a,r=this._curInst;!r||t&&r!==e.data(t,o)||this._datepickerShowing&&(i=this._get(r,"showAnim"),s=this._get(r,"duration"),n=function(){e.datepicker._tidyDialog(r)},e.effects&&(e.effects.effect[i]||e.effects[i])?r.dpDiv.hide(i,e.datepicker._get(r,"showOptions"),s,n):r.dpDiv["slideDown"===i?"slideUp":"fadeIn"===i?"fadeOut":"hide"](i?s:null,n),i||n(),this._datepickerShowing=!1,a=this._get(r,"onClose"),a&&a.apply(r.input?r.input[0]:null,[r.input?r.input.val():"",r]),this._lastInput=null,this._inDialog&&(this._dialogInput.css({position:"absolute",left:"0",top:"-100px"}),e.blockUI&&(e.unblockUI(),e("body").append(this.dpDiv))),this._inDialog=!1)},_tidyDialog:function(e){e.dpDiv.removeClass(this._dialogClass).unbind(".ui-datepicker-calendar")},_checkExternalClick:function(t){if(e.datepicker._curInst){var i=e(t.target),s=e.datepicker._getInst(i[0]);(i[0].id!==e.datepicker._mainDivId&&0===i.parents("#"+e.datepicker._mainDivId).length&&!i.hasClass(e.datepicker.markerClassName)&&!i.closest("."+e.datepicker._triggerClass).length&&e.datepicker._datepickerShowing&&(!e.datepicker._inDialog||!e.blockUI)||i.hasClass(e.datepicker.markerClassName)&&e.datepicker._curInst!==s)&&e.datepicker._hideDatepicker()}},_adjustDate:function(t,i,s){var n=e(t),a=this._getInst(n[0]);this._isDisabledDatepicker(n[0])||(this._adjustInstDate(a,i+("M"===s?this._get(a,"showCurrentAtPos"):0),s),this._updateDatepicker(a))},_gotoToday:function(t){var i,s=e(t),n=this._getInst(s[0]);this._get(n,"gotoCurrent")&&n.currentDay?(n.selectedDay=n.currentDay,n.drawMonth=n.selectedMonth=n.currentMonth,n.drawYear=n.selectedYear=n.currentYear):(i=new Date,n.selectedDay=i.getDate(),n.drawMonth=n.selectedMonth=i.getMonth(),n.drawYear=n.selectedYear=i.getFullYear()),this._notifyChange(n),this._adjustDate(s)},_selectMonthYear:function(t,i,s){var n=e(t),a=this._getInst(n[0]);a["selected"+("M"===s?"Month":"Year")]=a["draw"+("M"===s?"Month":"Year")]=parseInt(i.options[i.selectedIndex].value,10),this._notifyChange(a),this._adjustDate(n)},_selectDay:function(t,i,s,n){var a,o=e(t);e(n).hasClass(this._unselectableClass)||this._isDisabledDatepicker(o[0])||(a=this._getInst(o[0]),a.selectedDay=a.currentDay=e("a",n).html(),a.selectedMonth=a.currentMonth=i,a.selectedYear=a.currentYear=s,this._selectDate(t,this._formatDate(a,a.currentDay,a.currentMonth,a.currentYear)))},_clearDate:function(t){var i=e(t);this._selectDate(i,"")},_selectDate:function(t,i){var s,n=e(t),a=this._getInst(n[0]);i=null!=i?i:this._formatDate(a),a.input&&a.input.val(i),this._updateAlternate(a),s=this._get(a,"onSelect"),s?s.apply(a.input?a.input[0]:null,[i,a]):a.input&&a.input.trigger("change"),a.inline?this._updateDatepicker(a):(this._hideDatepicker(),this._lastInput=a.input[0],"object"!=typeof a.input[0]&&a.input.focus(),this._lastInput=null)},_updateAlternate:function(t){var i,s,n,a=this._get(t,"altField");a&&(i=this._get(t,"altFormat")||this._get(t,"dateFormat"),s=this._getDate(t),n=this.formatDate(i,s,this._getFormatConfig(t)),e(a).each(function(){e(this).val(n)}))},noWeekends:function(e){var t=e.getDay();return[t>0&&6>t,""]},iso8601Week:function(e){var t,i=new Date(e.getTime());return i.setDate(i.getDate()+4-(i.getDay()||7)),t=i.getTime(),i.setMonth(0),i.setDate(1),Math.floor(Math.round((t-i)/864e5)/7)+1},parseDate:function(i,s,n){if(null==i||null==s)throw"Invalid arguments";if(s="object"==typeof s?""+s:s+"",""===s)return null;var a,o,r,h,l=0,u=(n?n.shortYearCutoff:null)||this._defaults.shortYearCutoff,d="string"!=typeof u?u:(new Date).getFullYear()%100+parseInt(u,10),c=(n?n.dayNamesShort:null)||this._defaults.dayNamesShort,p=(n?n.dayNames:null)||this._defaults.dayNames,f=(n?n.monthNamesShort:null)||this._defaults.monthNamesShort,m=(n?n.monthNames:null)||this._defaults.monthNames,g=-1,v=-1,b=-1,_=-1,y=!1,x=function(e){var t=i.length>a+1&&i.charAt(a+1)===e;return t&&a++,t},w=function(e){var t=x(e),i="@"===e?14:"!"===e?20:"y"===e&&t?4:"o"===e?3:2,n=RegExp("^\\d{1,"+i+"}"),a=s.substring(l).match(n);if(!a)throw"Missing number at position "+l;return l+=a[0].length,parseInt(a[0],10)},k=function(i,n,a){var o=-1,r=e.map(x(i)?a:n,function(e,t){return[[t,e]]}).sort(function(e,t){return-(e[1].length-t[1].length)});if(e.each(r,function(e,i){var n=i[1];return s.substr(l,n.length).toLowerCase()===n.toLowerCase()?(o=i[0],l+=n.length,!1):t}),-1!==o)return o+1;throw"Unknown name at position "+l},D=function(){if(s.charAt(l)!==i.charAt(a))throw"Unexpected literal at position "+l;l++};for(a=0;i.length>a;a++)if(y)"'"!==i.charAt(a)||x("'")?D():y=!1;else switch(i.charAt(a)){case"d":b=w("d");break;case"D":k("D",c,p);break;case"o":_=w("o");break;case"m":v=w("m");break;case"M":v=k("M",f,m);break;case"y":g=w("y");break;case"@":h=new Date(w("@")),g=h.getFullYear(),v=h.getMonth()+1,b=h.getDate();break;case"!":h=new Date((w("!")-this._ticksTo1970)/1e4),g=h.getFullYear(),v=h.getMonth()+1,b=h.getDate();break;case"'":x("'")?D():y=!0;break;default:D()}if(s.length>l&&(r=s.substr(l),!/^\s+/.test(r)))throw"Extra/unparsed characters found in date: "+r;if(-1===g?g=(new Date).getFullYear():100>g&&(g+=(new Date).getFullYear()-(new Date).getFullYear()%100+(d>=g?0:-100)),_>-1)for(v=1,b=_;;){if(o=this._getDaysInMonth(g,v-1),o>=b)break;v++,b-=o}if(h=this._daylightSavingAdjust(new Date(g,v-1,b)),h.getFullYear()!==g||h.getMonth()+1!==v||h.getDate()!==b)throw"Invalid date";return h},ATOM:"yy-mm-dd",COOKIE:"D, dd M yy",ISO_8601:"yy-mm-dd",RFC_822:"D, d M y",RFC_850:"DD, dd-M-y",RFC_1036:"D, d M y",RFC_1123:"D, d M yy",RFC_2822:"D, d M yy",RSS:"D, d M y",TICKS:"!",TIMESTAMP:"@",W3C:"yy-mm-dd",_ticksTo1970:1e7*60*60*24*(718685+Math.floor(492.5)-Math.floor(19.7)+Math.floor(4.925)),formatDate:function(e,t,i){if(!t)return"";var s,n=(i?i.dayNamesShort:null)||this._defaults.dayNamesShort,a=(i?i.dayNames:null)||this._defaults.dayNames,o=(i?i.monthNamesShort:null)||this._defaults.monthNamesShort,r=(i?i.monthNames:null)||this._defaults.monthNames,h=function(t){var i=e.length>s+1&&e.charAt(s+1)===t;return i&&s++,i},l=function(e,t,i){var s=""+t;if(h(e))for(;i>s.length;)s="0"+s;return s},u=function(e,t,i,s){return h(e)?s[t]:i[t]},d="",c=!1;if(t)for(s=0;e.length>s;s++)if(c)"'"!==e.charAt(s)||h("'")?d+=e.charAt(s):c=!1;else switch(e.charAt(s)){case"d":d+=l("d",t.getDate(),2);break;case"D":d+=u("D",t.getDay(),n,a);break;case"o":d+=l("o",Math.round((new Date(t.getFullYear(),t.getMonth(),t.getDate()).getTime()-new Date(t.getFullYear(),0,0).getTime())/864e5),3);break;case"m":d+=l("m",t.getMonth()+1,2);break;case"M":d+=u("M",t.getMonth(),o,r);break;case"y":d+=h("y")?t.getFullYear():(10>t.getYear()%100?"0":"")+t.getYear()%100;break;case"@":d+=t.getTime();break;case"!":d+=1e4*t.getTime()+this._ticksTo1970;break;case"'":h("'")?d+="'":c=!0;break;default:d+=e.charAt(s)}return d},_possibleChars:function(e){var t,i="",s=!1,n=function(i){var s=e.length>t+1&&e.charAt(t+1)===i;return s&&t++,s};for(t=0;e.length>t;t++)if(s)"'"!==e.charAt(t)||n("'")?i+=e.charAt(t):s=!1;else switch(e.charAt(t)){case"d":case"m":case"y":case"@":i+="0123456789";break;case"D":case"M":return null;case"'":n("'")?i+="'":s=!0;break;default:i+=e.charAt(t)}return i},_get:function(e,i){return e.settings[i]!==t?e.settings[i]:this._defaults[i]},_setDateFromField:function(e,t){if(e.input.val()!==e.lastVal){var i=this._get(e,"dateFormat"),s=e.lastVal=e.input?e.input.val():null,n=this._getDefaultDate(e),a=n,o=this._getFormatConfig(e);try{a=this.parseDate(i,s,o)||n}catch(r){s=t?"":s}e.selectedDay=a.getDate(),e.drawMonth=e.selectedMonth=a.getMonth(),e.drawYear=e.selectedYear=a.getFullYear(),e.currentDay=s?a.getDate():0,e.currentMonth=s?a.getMonth():0,e.currentYear=s?a.getFullYear():0,this._adjustInstDate(e)}},_getDefaultDate:function(e){return this._restrictMinMax(e,this._determineDate(e,this._get(e,"defaultDate"),new Date))},_determineDate:function(t,i,s){var n=function(e){var t=new Date;return t.setDate(t.getDate()+e),t},a=function(i){try{return e.datepicker.parseDate(e.datepicker._get(t,"dateFormat"),i,e.datepicker._getFormatConfig(t))}catch(s){}for(var n=(i.toLowerCase().match(/^c/)?e.datepicker._getDate(t):null)||new Date,a=n.getFullYear(),o=n.getMonth(),r=n.getDate(),h=/([+\-]?[0-9]+)\s*(d|D|w|W|m|M|y|Y)?/g,l=h.exec(i);l;){switch(l[2]||"d"){case"d":case"D":r+=parseInt(l[1],10);break;case"w":case"W":r+=7*parseInt(l[1],10);break;case"m":case"M":o+=parseInt(l[1],10),r=Math.min(r,e.datepicker._getDaysInMonth(a,o));break;case"y":case"Y":a+=parseInt(l[1],10),r=Math.min(r,e.datepicker._getDaysInMonth(a,o))}l=h.exec(i)}return new Date(a,o,r)},o=null==i||""===i?s:"string"==typeof i?a(i):"number"==typeof i?isNaN(i)?s:n(i):new Date(i.getTime());return o=o&&"Invalid Date"==""+o?s:o,o&&(o.setHours(0),o.setMinutes(0),o.setSeconds(0),o.setMilliseconds(0)),this._daylightSavingAdjust(o)},_daylightSavingAdjust:function(e){return e?(e.setHours(e.getHours()>12?e.getHours()+2:0),e):null},_setDate:function(e,t,i){var s=!t,n=e.selectedMonth,a=e.selectedYear,o=this._restrictMinMax(e,this._determineDate(e,t,new Date));e.selectedDay=e.currentDay=o.getDate(),e.drawMonth=e.selectedMonth=e.currentMonth=o.getMonth(),e.drawYear=e.selectedYear=e.currentYear=o.getFullYear(),n===e.selectedMonth&&a===e.selectedYear||i||this._notifyChange(e),this._adjustInstDate(e),e.input&&e.input.val(s?"":this._formatDate(e))},_getDate:function(e){var t=!e.currentYear||e.input&&""===e.input.val()?null:this._daylightSavingAdjust(new Date(e.currentYear,e.currentMonth,e.currentDay));return t},_attachHandlers:function(t){var i=this._get(t,"stepMonths"),s="#"+t.id.replace(/\\\\/g,"\\");t.dpDiv.find("[data-handler]").map(function(){var t={prev:function(){e.datepicker._adjustDate(s,-i,"M")},next:function(){e.datepicker._adjustDate(s,+i,"M")},hide:function(){e.datepicker._hideDatepicker()},today:function(){e.datepicker._gotoToday(s)},selectDay:function(){return e.datepicker._selectDay(s,+this.getAttribute("data-month"),+this.getAttribute("data-year"),this),!1},selectMonth:function(){return e.datepicker._selectMonthYear(s,this,"M"),!1},selectYear:function(){return e.datepicker._selectMonthYear(s,this,"Y"),!1}};e(this).bind(this.getAttribute("data-event"),t[this.getAttribute("data-handler")])})},_generateHTML:function(e){var t,i,s,n,a,o,r,h,l,u,d,c,p,f,m,g,v,b,_,y,x,w,k,D,T,S,M,N,C,P,z,I,A,H,E,W,F,O,R,L=new Date,j=this._daylightSavingAdjust(new Date(L.getFullYear(),L.getMonth(),L.getDate())),Y=this._get(e,"isRTL"),B=this._get(e,"showButtonPanel"),J=this._get(e,"hideIfNoPrevNext"),K=this._get(e,"navigationAsDateFormat"),q=this._getNumberOfMonths(e),U=this._get(e,"showCurrentAtPos"),V=this._get(e,"stepMonths"),G=1!==q[0]||1!==q[1],X=this._daylightSavingAdjust(e.currentDay?new Date(e.currentYear,e.currentMonth,e.currentDay):new Date(9999,9,9)),Q=this._getMinMaxDate(e,"min"),$=this._getMinMaxDate(e,"max"),Z=e.drawMonth-U,et=e.drawYear;if(0>Z&&(Z+=12,et--),$)for(t=this._daylightSavingAdjust(new Date($.getFullYear(),$.getMonth()-q[0]*q[1]+1,$.getDate())),t=Q&&Q>t?Q:t;this._daylightSavingAdjust(new Date(et,Z,1))>t;)Z--,0>Z&&(Z=11,et--);for(e.drawMonth=Z,e.drawYear=et,i=this._get(e,"prevText"),i=K?this.formatDate(i,this._daylightSavingAdjust(new Date(et,Z-V,1)),this._getFormatConfig(e)):i,s=this._canAdjustMonth(e,-1,et,Z)?"<a class='ui-datepicker-prev ui-corner-all' data-handler='prev' data-event='click' title='"+i+"'><span class='ui-icon ui-icon-circle-triangle-"+(Y?"e":"w")+"'>"+i+"</span></a>":J?"":"<a class='ui-datepicker-prev ui-corner-all ui-state-disabled' title='"+i+"'><span class='ui-icon ui-icon-circle-triangle-"+(Y?"e":"w")+"'>"+i+"</span></a>",n=this._get(e,"nextText"),n=K?this.formatDate(n,this._daylightSavingAdjust(new Date(et,Z+V,1)),this._getFormatConfig(e)):n,a=this._canAdjustMonth(e,1,et,Z)?"<a class='ui-datepicker-next ui-corner-all' data-handler='next' data-event='click' title='"+n+"'><span class='ui-icon ui-icon-circle-triangle-"+(Y?"w":"e")+"'>"+n+"</span></a>":J?"":"<a class='ui-datepicker-next ui-corner-all ui-state-disabled' title='"+n+"'><span class='ui-icon ui-icon-circle-triangle-"+(Y?"w":"e")+"'>"+n+"</span></a>",o=this._get(e,"currentText"),r=this._get(e,"gotoCurrent")&&e.currentDay?X:j,o=K?this.formatDate(o,r,this._getFormatConfig(e)):o,h=e.inline?"":"<button type='button' class='ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all' data-handler='hide' data-event='click'>"+this._get(e,"closeText")+"</button>",l=B?"<div class='ui-datepicker-buttonpane ui-widget-content'>"+(Y?h:"")+(this._isInRange(e,r)?"<button type='button' class='ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all' data-handler='today' data-event='click'>"+o+"</button>":"")+(Y?"":h)+"</div>":"",u=parseInt(this._get(e,"firstDay"),10),u=isNaN(u)?0:u,d=this._get(e,"showWeek"),c=this._get(e,"dayNames"),p=this._get(e,"dayNamesMin"),f=this._get(e,"monthNames"),m=this._get(e,"monthNamesShort"),g=this._get(e,"beforeShowDay"),v=this._get(e,"showOtherMonths"),b=this._get(e,"selectOtherMonths"),_=this._getDefaultDate(e),y="",w=0;q[0]>w;w++){for(k="",this.maxRows=4,D=0;q[1]>D;D++){if(T=this._daylightSavingAdjust(new Date(et,Z,e.selectedDay)),S=" ui-corner-all",M="",G){if(M+="<div class='ui-datepicker-group",q[1]>1)switch(D){case 0:M+=" ui-datepicker-group-first",S=" ui-corner-"+(Y?"right":"left");break;case q[1]-1:M+=" ui-datepicker-group-last",S=" ui-corner-"+(Y?"left":"right");break;default:M+=" ui-datepicker-group-middle",S=""}M+="'>"}for(M+="<div class='ui-datepicker-header ui-widget-header ui-helper-clearfix"+S+"'>"+(/all|left/.test(S)&&0===w?Y?a:s:"")+(/all|right/.test(S)&&0===w?Y?s:a:"")+this._generateMonthYearHeader(e,Z,et,Q,$,w>0||D>0,f,m)+"</div><table class='ui-datepicker-calendar'><thead>"+"<tr>",N=d?"<th class='ui-datepicker-week-col'>"+this._get(e,"weekHeader")+"</th>":"",x=0;7>x;x++)C=(x+u)%7,N+="<th"+((x+u+6)%7>=5?" class='ui-datepicker-week-end'":"")+">"+"<span title='"+c[C]+"'>"+p[C]+"</span></th>";for(M+=N+"</tr></thead><tbody>",P=this._getDaysInMonth(et,Z),et===e.selectedYear&&Z===e.selectedMonth&&(e.selectedDay=Math.min(e.selectedDay,P)),z=(this._getFirstDayOfMonth(et,Z)-u+7)%7,I=Math.ceil((z+P)/7),A=G?this.maxRows>I?this.maxRows:I:I,this.maxRows=A,H=this._daylightSavingAdjust(new Date(et,Z,1-z)),E=0;A>E;E++){for(M+="<tr>",W=d?"<td class='ui-datepicker-week-col'>"+this._get(e,"calculateWeek")(H)+"</td>":"",x=0;7>x;x++)F=g?g.apply(e.input?e.input[0]:null,[H]):[!0,""],O=H.getMonth()!==Z,R=O&&!b||!F[0]||Q&&Q>H||$&&H>$,W+="<td class='"+((x+u+6)%7>=5?" ui-datepicker-week-end":"")+(O?" ui-datepicker-other-month":"")+(H.getTime()===T.getTime()&&Z===e.selectedMonth&&e._keyEvent||_.getTime()===H.getTime()&&_.getTime()===T.getTime()?" "+this._dayOverClass:"")+(R?" "+this._unselectableClass+" ui-state-disabled":"")+(O&&!v?"":" "+F[1]+(H.getTime()===X.getTime()?" "+this._currentClass:"")+(H.getTime()===j.getTime()?" ui-datepicker-today":""))+"'"+(O&&!v||!F[2]?"":" title='"+F[2].replace(/'/g,"&#39;")+"'")+(R?"":" data-handler='selectDay' data-event='click' data-month='"+H.getMonth()+"' data-year='"+H.getFullYear()+"'")+">"+(O&&!v?"&#xa0;":R?"<span class='ui-state-default'>"+H.getDate()+"</span>":"<a class='ui-state-default"+(H.getTime()===j.getTime()?" ui-state-highlight":"")+(H.getTime()===X.getTime()?" ui-state-active":"")+(O?" ui-priority-secondary":"")+"' href='#'>"+H.getDate()+"</a>")+"</td>",H.setDate(H.getDate()+1),H=this._daylightSavingAdjust(H);M+=W+"</tr>"}Z++,Z>11&&(Z=0,et++),M+="</tbody></table>"+(G?"</div>"+(q[0]>0&&D===q[1]-1?"<div class='ui-datepicker-row-break'></div>":""):""),k+=M}y+=k}return y+=l,e._keyEvent=!1,y},_generateMonthYearHeader:function(e,t,i,s,n,a,o,r){var h,l,u,d,c,p,f,m,g=this._get(e,"changeMonth"),v=this._get(e,"changeYear"),b=this._get(e,"showMonthAfterYear"),_="<div class='ui-datepicker-title'>",y="";if(a||!g)y+="<span class='ui-datepicker-month'>"+o[t]+"</span>";else{for(h=s&&s.getFullYear()===i,l=n&&n.getFullYear()===i,y+="<select class='ui-datepicker-month' data-handler='selectMonth' data-event='change'>",u=0;12>u;u++)(!h||u>=s.getMonth())&&(!l||n.getMonth()>=u)&&(y+="<option value='"+u+"'"+(u===t?" selected='selected'":"")+">"+r[u]+"</option>");y+="</select>"}if(b||(_+=y+(!a&&g&&v?"":"&#xa0;")),!e.yearshtml)if(e.yearshtml="",a||!v)_+="<span class='ui-datepicker-year'>"+i+"</span>";else{for(d=this._get(e,"yearRange").split(":"),c=(new Date).getFullYear(),p=function(e){var t=e.match(/c[+\-].*/)?i+parseInt(e.substring(1),10):e.match(/[+\-].*/)?c+parseInt(e,10):parseInt(e,10);
return isNaN(t)?c:t},f=p(d[0]),m=Math.max(f,p(d[1]||"")),f=s?Math.max(f,s.getFullYear()):f,m=n?Math.min(m,n.getFullYear()):m,e.yearshtml+="<select class='ui-datepicker-year' data-handler='selectYear' data-event='change'>";m>=f;f++)e.yearshtml+="<option value='"+f+"'"+(f===i?" selected='selected'":"")+">"+f+"</option>";e.yearshtml+="</select>",_+=e.yearshtml,e.yearshtml=null}return _+=this._get(e,"yearSuffix"),b&&(_+=(!a&&g&&v?"":"&#xa0;")+y),_+="</div>"},_adjustInstDate:function(e,t,i){var s=e.drawYear+("Y"===i?t:0),n=e.drawMonth+("M"===i?t:0),a=Math.min(e.selectedDay,this._getDaysInMonth(s,n))+("D"===i?t:0),o=this._restrictMinMax(e,this._daylightSavingAdjust(new Date(s,n,a)));e.selectedDay=o.getDate(),e.drawMonth=e.selectedMonth=o.getMonth(),e.drawYear=e.selectedYear=o.getFullYear(),("M"===i||"Y"===i)&&this._notifyChange(e)},_restrictMinMax:function(e,t){var i=this._getMinMaxDate(e,"min"),s=this._getMinMaxDate(e,"max"),n=i&&i>t?i:t;return s&&n>s?s:n},_notifyChange:function(e){var t=this._get(e,"onChangeMonthYear");t&&t.apply(e.input?e.input[0]:null,[e.selectedYear,e.selectedMonth+1,e])},_getNumberOfMonths:function(e){var t=this._get(e,"numberOfMonths");return null==t?[1,1]:"number"==typeof t?[1,t]:t},_getMinMaxDate:function(e,t){return this._determineDate(e,this._get(e,t+"Date"),null)},_getDaysInMonth:function(e,t){return 32-this._daylightSavingAdjust(new Date(e,t,32)).getDate()},_getFirstDayOfMonth:function(e,t){return new Date(e,t,1).getDay()},_canAdjustMonth:function(e,t,i,s){var n=this._getNumberOfMonths(e),a=this._daylightSavingAdjust(new Date(i,s+(0>t?t:n[0]*n[1]),1));return 0>t&&a.setDate(this._getDaysInMonth(a.getFullYear(),a.getMonth())),this._isInRange(e,a)},_isInRange:function(e,t){var i,s,n=this._getMinMaxDate(e,"min"),a=this._getMinMaxDate(e,"max"),o=null,r=null,h=this._get(e,"yearRange");return h&&(i=h.split(":"),s=(new Date).getFullYear(),o=parseInt(i[0],10),r=parseInt(i[1],10),i[0].match(/[+\-].*/)&&(o+=s),i[1].match(/[+\-].*/)&&(r+=s)),(!n||t.getTime()>=n.getTime())&&(!a||t.getTime()<=a.getTime())&&(!o||t.getFullYear()>=o)&&(!r||r>=t.getFullYear())},_getFormatConfig:function(e){var t=this._get(e,"shortYearCutoff");return t="string"!=typeof t?t:(new Date).getFullYear()%100+parseInt(t,10),{shortYearCutoff:t,dayNamesShort:this._get(e,"dayNamesShort"),dayNames:this._get(e,"dayNames"),monthNamesShort:this._get(e,"monthNamesShort"),monthNames:this._get(e,"monthNames")}},_formatDate:function(e,t,i,s){t||(e.currentDay=e.selectedDay,e.currentMonth=e.selectedMonth,e.currentYear=e.selectedYear);var n=t?"object"==typeof t?t:this._daylightSavingAdjust(new Date(s,i,t)):this._daylightSavingAdjust(new Date(e.currentYear,e.currentMonth,e.currentDay));return this.formatDate(this._get(e,"dateFormat"),n,this._getFormatConfig(e))}}),e.fn.datepicker=function(t){if(!this.length)return this;e.datepicker.initialized||(e(document).mousedown(e.datepicker._checkExternalClick),e.datepicker.initialized=!0),0===e("#"+e.datepicker._mainDivId).length&&e("body").append(e.datepicker.dpDiv);var i=Array.prototype.slice.call(arguments,1);return"string"!=typeof t||"isDisabled"!==t&&"getDate"!==t&&"widget"!==t?"option"===t&&2===arguments.length&&"string"==typeof arguments[1]?e.datepicker["_"+t+"Datepicker"].apply(e.datepicker,[this[0]].concat(i)):this.each(function(){"string"==typeof t?e.datepicker["_"+t+"Datepicker"].apply(e.datepicker,[this].concat(i)):e.datepicker._attachDatepicker(this,t)}):e.datepicker["_"+t+"Datepicker"].apply(e.datepicker,[this[0]].concat(i))},e.datepicker=new i,e.datepicker.initialized=!1,e.datepicker.uuid=(new Date).getTime(),e.datepicker.version="1.10.4"})(jQuery);;
/*--- END: /home/kinkeaca/public_html/plugins/jquery/jquery.ui.datepicker.min.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/plugins/jquery/i18n/jquery.ui.datepicker-en-GB.js---*/
/* English/UK initialisation for the jQuery UI date picker plugin. */
/* Written by Stuart. */
jQuery(function($){
	$.datepicker.regional['en-GB'] = {
		closeText: 'Done',
		prevText: 'Prev',
		nextText: 'Next',
		currentText: 'Today',
		monthNames: ['January','February','March','April','May','June',
		'July','August','September','October','November','December'],
		monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
		'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
		dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
		dayNamesMin: ['Su','Mo','Tu','We','Th','Fr','Sa'],
		weekHeader: 'Wk',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['en-GB']);
});
;
/*--- END: /home/kinkeaca/public_html/plugins/jquery/i18n/jquery.ui.datepicker-en-GB.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/plugins/jquery/jquery-ui-timepicker-addon.min.js---*/
/*! jQuery Timepicker Addon - v1.6.1 - 2015-11-14
* http://trentrichardson.com/examples/timepicker
* Copyright (c) 2015 Trent Richardson; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","jquery-ui"],a):a(jQuery)}(function($){if($.ui.timepicker=$.ui.timepicker||{},!$.ui.timepicker.version){$.extend($.ui,{timepicker:{version:"1.6.1"}});var Timepicker=function(){this.regional=[],this.regional[""]={currentText:"Now",closeText:"Done",amNames:["AM","A"],pmNames:["PM","P"],timeFormat:"HH:mm",timeSuffix:"",timeOnlyTitle:"Choose Time",timeText:"Time",hourText:"Hour",minuteText:"Minute",secondText:"Second",millisecText:"Millisecond",microsecText:"Microsecond",timezoneText:"Time Zone",isRTL:!1},this._defaults={showButtonPanel:!0,timeOnly:!1,timeOnlyShowDate:!1,showHour:null,showMinute:null,showSecond:null,showMillisec:null,showMicrosec:null,showTimezone:null,showTime:!0,stepHour:1,stepMinute:1,stepSecond:1,stepMillisec:1,stepMicrosec:1,hour:0,minute:0,second:0,millisec:0,microsec:0,timezone:null,hourMin:0,minuteMin:0,secondMin:0,millisecMin:0,microsecMin:0,hourMax:23,minuteMax:59,secondMax:59,millisecMax:999,microsecMax:999,minDateTime:null,maxDateTime:null,maxTime:null,minTime:null,onSelect:null,hourGrid:0,minuteGrid:0,secondGrid:0,millisecGrid:0,microsecGrid:0,alwaysSetTime:!0,separator:" ",altFieldTimeOnly:!0,altTimeFormat:null,altSeparator:null,altTimeSuffix:null,altRedirectFocus:!0,pickerTimeFormat:null,pickerTimeSuffix:null,showTimepicker:!0,timezoneList:null,addSliderAccess:!1,sliderAccessArgs:null,controlType:"slider",oneLine:!1,defaultValue:null,parse:"strict",afterInject:null},$.extend(this._defaults,this.regional[""])};$.extend(Timepicker.prototype,{$input:null,$altInput:null,$timeObj:null,inst:null,hour_slider:null,minute_slider:null,second_slider:null,millisec_slider:null,microsec_slider:null,timezone_select:null,maxTime:null,minTime:null,hour:0,minute:0,second:0,millisec:0,microsec:0,timezone:null,hourMinOriginal:null,minuteMinOriginal:null,secondMinOriginal:null,millisecMinOriginal:null,microsecMinOriginal:null,hourMaxOriginal:null,minuteMaxOriginal:null,secondMaxOriginal:null,millisecMaxOriginal:null,microsecMaxOriginal:null,ampm:"",formattedDate:"",formattedTime:"",formattedDateTime:"",timezoneList:null,units:["hour","minute","second","millisec","microsec"],support:{},control:null,setDefaults:function(a){return extendRemove(this._defaults,a||{}),this},_newInst:function($input,opts){var tp_inst=new Timepicker,inlineSettings={},fns={},overrides,i;for(var attrName in this._defaults)if(this._defaults.hasOwnProperty(attrName)){var attrValue=$input.attr("time:"+attrName);if(attrValue)try{inlineSettings[attrName]=eval(attrValue)}catch(err){inlineSettings[attrName]=attrValue}}overrides={beforeShow:function(a,b){return $.isFunction(tp_inst._defaults.evnts.beforeShow)?tp_inst._defaults.evnts.beforeShow.call($input[0],a,b,tp_inst):void 0},onChangeMonthYear:function(a,b,c){$.isFunction(tp_inst._defaults.evnts.onChangeMonthYear)&&tp_inst._defaults.evnts.onChangeMonthYear.call($input[0],a,b,c,tp_inst)},onClose:function(a,b){tp_inst.timeDefined===!0&&""!==$input.val()&&tp_inst._updateDateTime(b),$.isFunction(tp_inst._defaults.evnts.onClose)&&tp_inst._defaults.evnts.onClose.call($input[0],a,b,tp_inst)}};for(i in overrides)overrides.hasOwnProperty(i)&&(fns[i]=opts[i]||this._defaults[i]||null);tp_inst._defaults=$.extend({},this._defaults,inlineSettings,opts,overrides,{evnts:fns,timepicker:tp_inst}),tp_inst.amNames=$.map(tp_inst._defaults.amNames,function(a){return a.toUpperCase()}),tp_inst.pmNames=$.map(tp_inst._defaults.pmNames,function(a){return a.toUpperCase()}),tp_inst.support=detectSupport(tp_inst._defaults.timeFormat+(tp_inst._defaults.pickerTimeFormat?tp_inst._defaults.pickerTimeFormat:"")+(tp_inst._defaults.altTimeFormat?tp_inst._defaults.altTimeFormat:"")),"string"==typeof tp_inst._defaults.controlType?("slider"===tp_inst._defaults.controlType&&"undefined"==typeof $.ui.slider&&(tp_inst._defaults.controlType="select"),tp_inst.control=tp_inst._controls[tp_inst._defaults.controlType]):tp_inst.control=tp_inst._defaults.controlType;var timezoneList=[-720,-660,-600,-570,-540,-480,-420,-360,-300,-270,-240,-210,-180,-120,-60,0,60,120,180,210,240,270,300,330,345,360,390,420,480,525,540,570,600,630,660,690,720,765,780,840];null!==tp_inst._defaults.timezoneList&&(timezoneList=tp_inst._defaults.timezoneList);var tzl=timezoneList.length,tzi=0,tzv=null;if(tzl>0&&"object"!=typeof timezoneList[0])for(;tzl>tzi;tzi++)tzv=timezoneList[tzi],timezoneList[tzi]={value:tzv,label:$.timepicker.timezoneOffsetString(tzv,tp_inst.support.iso8601)};return tp_inst._defaults.timezoneList=timezoneList,tp_inst.timezone=null!==tp_inst._defaults.timezone?$.timepicker.timezoneOffsetNumber(tp_inst._defaults.timezone):-1*(new Date).getTimezoneOffset(),tp_inst.hour=tp_inst._defaults.hour<tp_inst._defaults.hourMin?tp_inst._defaults.hourMin:tp_inst._defaults.hour>tp_inst._defaults.hourMax?tp_inst._defaults.hourMax:tp_inst._defaults.hour,tp_inst.minute=tp_inst._defaults.minute<tp_inst._defaults.minuteMin?tp_inst._defaults.minuteMin:tp_inst._defaults.minute>tp_inst._defaults.minuteMax?tp_inst._defaults.minuteMax:tp_inst._defaults.minute,tp_inst.second=tp_inst._defaults.second<tp_inst._defaults.secondMin?tp_inst._defaults.secondMin:tp_inst._defaults.second>tp_inst._defaults.secondMax?tp_inst._defaults.secondMax:tp_inst._defaults.second,tp_inst.millisec=tp_inst._defaults.millisec<tp_inst._defaults.millisecMin?tp_inst._defaults.millisecMin:tp_inst._defaults.millisec>tp_inst._defaults.millisecMax?tp_inst._defaults.millisecMax:tp_inst._defaults.millisec,tp_inst.microsec=tp_inst._defaults.microsec<tp_inst._defaults.microsecMin?tp_inst._defaults.microsecMin:tp_inst._defaults.microsec>tp_inst._defaults.microsecMax?tp_inst._defaults.microsecMax:tp_inst._defaults.microsec,tp_inst.ampm="",tp_inst.$input=$input,tp_inst._defaults.altField&&(tp_inst.$altInput=$(tp_inst._defaults.altField),tp_inst._defaults.altRedirectFocus===!0&&tp_inst.$altInput.css({cursor:"pointer"}).focus(function(){$input.trigger("focus")})),(0===tp_inst._defaults.minDate||0===tp_inst._defaults.minDateTime)&&(tp_inst._defaults.minDate=new Date),(0===tp_inst._defaults.maxDate||0===tp_inst._defaults.maxDateTime)&&(tp_inst._defaults.maxDate=new Date),void 0!==tp_inst._defaults.minDate&&tp_inst._defaults.minDate instanceof Date&&(tp_inst._defaults.minDateTime=new Date(tp_inst._defaults.minDate.getTime())),void 0!==tp_inst._defaults.minDateTime&&tp_inst._defaults.minDateTime instanceof Date&&(tp_inst._defaults.minDate=new Date(tp_inst._defaults.minDateTime.getTime())),void 0!==tp_inst._defaults.maxDate&&tp_inst._defaults.maxDate instanceof Date&&(tp_inst._defaults.maxDateTime=new Date(tp_inst._defaults.maxDate.getTime())),void 0!==tp_inst._defaults.maxDateTime&&tp_inst._defaults.maxDateTime instanceof Date&&(tp_inst._defaults.maxDate=new Date(tp_inst._defaults.maxDateTime.getTime())),tp_inst.$input.bind("focus",function(){tp_inst._onFocus()}),tp_inst},_addTimePicker:function(a){var b=$.trim(this.$altInput&&this._defaults.altFieldTimeOnly?this.$input.val()+" "+this.$altInput.val():this.$input.val());this.timeDefined=this._parseTime(b),this._limitMinMaxDateTime(a,!1),this._injectTimePicker(),this._afterInject()},_parseTime:function(a,b){if(this.inst||(this.inst=$.datepicker._getInst(this.$input[0])),b||!this._defaults.timeOnly){var c=$.datepicker._get(this.inst,"dateFormat");try{var d=parseDateTimeInternal(c,this._defaults.timeFormat,a,$.datepicker._getFormatConfig(this.inst),this._defaults);if(!d.timeObj)return!1;$.extend(this,d.timeObj)}catch(e){return $.timepicker.log("Error parsing the date/time string: "+e+"\ndate/time string = "+a+"\ntimeFormat = "+this._defaults.timeFormat+"\ndateFormat = "+c),!1}return!0}var f=$.datepicker.parseTime(this._defaults.timeFormat,a,this._defaults);return f?($.extend(this,f),!0):!1},_afterInject:function(){var a=this.inst.settings;$.isFunction(a.afterInject)&&a.afterInject.call(this)},_injectTimePicker:function(){var a=this.inst.dpDiv,b=this.inst.settings,c=this,d="",e="",f=null,g={},h={},i=null,j=0,k=0;if(0===a.find("div.ui-timepicker-div").length&&b.showTimepicker){var l=" ui_tpicker_unit_hide",m='<div class="ui-timepicker-div'+(b.isRTL?" ui-timepicker-rtl":"")+(b.oneLine&&"select"===b.controlType?" ui-timepicker-oneLine":"")+'"><dl><dt class="ui_tpicker_time_label'+(b.showTime?"":l)+'">'+b.timeText+'</dt><dd class="ui_tpicker_time '+(b.showTime?"":l)+'"><input class="ui_tpicker_time_input" '+(b.timeInput?"":"disabled")+"/></dd>";for(j=0,k=this.units.length;k>j;j++){if(d=this.units[j],e=d.substr(0,1).toUpperCase()+d.substr(1),f=null!==b["show"+e]?b["show"+e]:this.support[d],g[d]=parseInt(b[d+"Max"]-(b[d+"Max"]-b[d+"Min"])%b["step"+e],10),h[d]=0,m+='<dt class="ui_tpicker_'+d+"_label"+(f?"":l)+'">'+b[d+"Text"]+'</dt><dd class="ui_tpicker_'+d+(f?"":l)+'"><div class="ui_tpicker_'+d+"_slider"+(f?"":l)+'"></div>',f&&b[d+"Grid"]>0){if(m+='<div style="padding-left: 1px"><table class="ui-tpicker-grid-label"><tr>',"hour"===d)for(var n=b[d+"Min"];n<=g[d];n+=parseInt(b[d+"Grid"],10)){h[d]++;var o=$.datepicker.formatTime(this.support.ampm?"hht":"HH",{hour:n},b);m+='<td data-for="'+d+'">'+o+"</td>"}else for(var p=b[d+"Min"];p<=g[d];p+=parseInt(b[d+"Grid"],10))h[d]++,m+='<td data-for="'+d+'">'+(10>p?"0":"")+p+"</td>";m+="</tr></table></div>"}m+="</dd>"}var q=null!==b.showTimezone?b.showTimezone:this.support.timezone;m+='<dt class="ui_tpicker_timezone_label'+(q?"":l)+'">'+b.timezoneText+"</dt>",m+='<dd class="ui_tpicker_timezone'+(q?"":l)+'"></dd>',m+="</dl></div>";var r=$(m);for(b.timeOnly===!0&&(r.prepend('<div class="ui-widget-header ui-helper-clearfix ui-corner-all"><div class="ui-datepicker-title">'+b.timeOnlyTitle+"</div></div>"),a.find(".ui-datepicker-header, .ui-datepicker-calendar").hide()),j=0,k=c.units.length;k>j;j++)d=c.units[j],e=d.substr(0,1).toUpperCase()+d.substr(1),f=null!==b["show"+e]?b["show"+e]:this.support[d],c[d+"_slider"]=c.control.create(c,r.find(".ui_tpicker_"+d+"_slider"),d,c[d],b[d+"Min"],g[d],b["step"+e]),f&&b[d+"Grid"]>0&&(i=100*h[d]*b[d+"Grid"]/(g[d]-b[d+"Min"]),r.find(".ui_tpicker_"+d+" table").css({width:i+"%",marginLeft:b.isRTL?"0":i/(-2*h[d])+"%",marginRight:b.isRTL?i/(-2*h[d])+"%":"0",borderCollapse:"collapse"}).find("td").click(function(a){var b=$(this),e=b.html(),f=parseInt(e.replace(/[^0-9]/g),10),g=e.replace(/[^apm]/gi),h=b.data("for");"hour"===h&&(-1!==g.indexOf("p")&&12>f?f+=12:-1!==g.indexOf("a")&&12===f&&(f=0)),c.control.value(c,c[h+"_slider"],d,f),c._onTimeChange(),c._onSelectHandler()}).css({cursor:"pointer",width:100/h[d]+"%",textAlign:"center",overflow:"hidden"}));if(this.timezone_select=r.find(".ui_tpicker_timezone").append("<select></select>").find("select"),$.fn.append.apply(this.timezone_select,$.map(b.timezoneList,function(a,b){return $("<option />").val("object"==typeof a?a.value:a).text("object"==typeof a?a.label:a)})),"undefined"!=typeof this.timezone&&null!==this.timezone&&""!==this.timezone){var s=-1*new Date(this.inst.selectedYear,this.inst.selectedMonth,this.inst.selectedDay,12).getTimezoneOffset();s===this.timezone?selectLocalTimezone(c):this.timezone_select.val(this.timezone)}else"undefined"!=typeof this.hour&&null!==this.hour&&""!==this.hour?this.timezone_select.val(b.timezone):selectLocalTimezone(c);this.timezone_select.change(function(){c._onTimeChange(),c._onSelectHandler(),c._afterInject()});var t=a.find(".ui-datepicker-buttonpane");if(t.length?t.before(r):a.append(r),this.$timeObj=r.find(".ui_tpicker_time_input"),this.$timeObj.change(function(){var a=c.inst.settings.timeFormat,b=$.datepicker.parseTime(a,this.value),d=new Date;b?(d.setHours(b.hour),d.setMinutes(b.minute),d.setSeconds(b.second),$.datepicker._setTime(c.inst,d)):(this.value=c.formattedTime,this.blur())}),null!==this.inst){var u=this.timeDefined;this._onTimeChange(),this.timeDefined=u}if(this._defaults.addSliderAccess){var v=this._defaults.sliderAccessArgs,w=this._defaults.isRTL;v.isRTL=w,setTimeout(function(){if(0===r.find(".ui-slider-access").length){r.find(".ui-slider:visible").sliderAccess(v);var a=r.find(".ui-slider-access:eq(0)").outerWidth(!0);a&&r.find("table:visible").each(function(){var b=$(this),c=b.outerWidth(),d=b.css(w?"marginRight":"marginLeft").toString().replace("%",""),e=c-a,f=d*e/c+"%",g={width:e,marginRight:0,marginLeft:0};g[w?"marginRight":"marginLeft"]=f,b.css(g)})}},10)}c._limitMinMaxDateTime(this.inst,!0)}},_limitMinMaxDateTime:function(a,b){var c=this._defaults,d=new Date(a.selectedYear,a.selectedMonth,a.selectedDay);if(this._defaults.showTimepicker){if(null!==$.datepicker._get(a,"minDateTime")&&void 0!==$.datepicker._get(a,"minDateTime")&&d){var e=$.datepicker._get(a,"minDateTime"),f=new Date(e.getFullYear(),e.getMonth(),e.getDate(),0,0,0,0);(null===this.hourMinOriginal||null===this.minuteMinOriginal||null===this.secondMinOriginal||null===this.millisecMinOriginal||null===this.microsecMinOriginal)&&(this.hourMinOriginal=c.hourMin,this.minuteMinOriginal=c.minuteMin,this.secondMinOriginal=c.secondMin,this.millisecMinOriginal=c.millisecMin,this.microsecMinOriginal=c.microsecMin),a.settings.timeOnly||f.getTime()===d.getTime()?(this._defaults.hourMin=e.getHours(),this.hour<=this._defaults.hourMin?(this.hour=this._defaults.hourMin,this._defaults.minuteMin=e.getMinutes(),this.minute<=this._defaults.minuteMin?(this.minute=this._defaults.minuteMin,this._defaults.secondMin=e.getSeconds(),this.second<=this._defaults.secondMin?(this.second=this._defaults.secondMin,this._defaults.millisecMin=e.getMilliseconds(),this.millisec<=this._defaults.millisecMin?(this.millisec=this._defaults.millisecMin,this._defaults.microsecMin=e.getMicroseconds()):(this.microsec<this._defaults.microsecMin&&(this.microsec=this._defaults.microsecMin),this._defaults.microsecMin=this.microsecMinOriginal)):(this._defaults.millisecMin=this.millisecMinOriginal,this._defaults.microsecMin=this.microsecMinOriginal)):(this._defaults.secondMin=this.secondMinOriginal,this._defaults.millisecMin=this.millisecMinOriginal,this._defaults.microsecMin=this.microsecMinOriginal)):(this._defaults.minuteMin=this.minuteMinOriginal,this._defaults.secondMin=this.secondMinOriginal,this._defaults.millisecMin=this.millisecMinOriginal,this._defaults.microsecMin=this.microsecMinOriginal)):(this._defaults.hourMin=this.hourMinOriginal,this._defaults.minuteMin=this.minuteMinOriginal,this._defaults.secondMin=this.secondMinOriginal,this._defaults.millisecMin=this.millisecMinOriginal,this._defaults.microsecMin=this.microsecMinOriginal)}if(null!==$.datepicker._get(a,"maxDateTime")&&void 0!==$.datepicker._get(a,"maxDateTime")&&d){var g=$.datepicker._get(a,"maxDateTime"),h=new Date(g.getFullYear(),g.getMonth(),g.getDate(),0,0,0,0);(null===this.hourMaxOriginal||null===this.minuteMaxOriginal||null===this.secondMaxOriginal||null===this.millisecMaxOriginal)&&(this.hourMaxOriginal=c.hourMax,this.minuteMaxOriginal=c.minuteMax,this.secondMaxOriginal=c.secondMax,this.millisecMaxOriginal=c.millisecMax,this.microsecMaxOriginal=c.microsecMax),a.settings.timeOnly||h.getTime()===d.getTime()?(this._defaults.hourMax=g.getHours(),this.hour>=this._defaults.hourMax?(this.hour=this._defaults.hourMax,this._defaults.minuteMax=g.getMinutes(),this.minute>=this._defaults.minuteMax?(this.minute=this._defaults.minuteMax,this._defaults.secondMax=g.getSeconds(),this.second>=this._defaults.secondMax?(this.second=this._defaults.secondMax,this._defaults.millisecMax=g.getMilliseconds(),this.millisec>=this._defaults.millisecMax?(this.millisec=this._defaults.millisecMax,this._defaults.microsecMax=g.getMicroseconds()):(this.microsec>this._defaults.microsecMax&&(this.microsec=this._defaults.microsecMax),this._defaults.microsecMax=this.microsecMaxOriginal)):(this._defaults.millisecMax=this.millisecMaxOriginal,this._defaults.microsecMax=this.microsecMaxOriginal)):(this._defaults.secondMax=this.secondMaxOriginal,this._defaults.millisecMax=this.millisecMaxOriginal,this._defaults.microsecMax=this.microsecMaxOriginal)):(this._defaults.minuteMax=this.minuteMaxOriginal,this._defaults.secondMax=this.secondMaxOriginal,this._defaults.millisecMax=this.millisecMaxOriginal,this._defaults.microsecMax=this.microsecMaxOriginal)):(this._defaults.hourMax=this.hourMaxOriginal,this._defaults.minuteMax=this.minuteMaxOriginal,this._defaults.secondMax=this.secondMaxOriginal,this._defaults.millisecMax=this.millisecMaxOriginal,this._defaults.microsecMax=this.microsecMaxOriginal)}if(null!==a.settings.minTime){var i=new Date("01/01/1970 "+a.settings.minTime);this.hour<i.getHours()?(this.hour=this._defaults.hourMin=i.getHours(),this.minute=this._defaults.minuteMin=i.getMinutes()):this.hour===i.getHours()&&this.minute<i.getMinutes()?this.minute=this._defaults.minuteMin=i.getMinutes():this._defaults.hourMin<i.getHours()?(this._defaults.hourMin=i.getHours(),this._defaults.minuteMin=i.getMinutes()):this._defaults.hourMin===i.getHours()===this.hour&&this._defaults.minuteMin<i.getMinutes()?this._defaults.minuteMin=i.getMinutes():this._defaults.minuteMin=0}if(null!==a.settings.maxTime){var j=new Date("01/01/1970 "+a.settings.maxTime);this.hour>j.getHours()?(this.hour=this._defaults.hourMax=j.getHours(),this.minute=this._defaults.minuteMax=j.getMinutes()):this.hour===j.getHours()&&this.minute>j.getMinutes()?this.minute=this._defaults.minuteMax=j.getMinutes():this._defaults.hourMax>j.getHours()?(this._defaults.hourMax=j.getHours(),this._defaults.minuteMax=j.getMinutes()):this._defaults.hourMax===j.getHours()===this.hour&&this._defaults.minuteMax>j.getMinutes()?this._defaults.minuteMax=j.getMinutes():this._defaults.minuteMax=59}if(void 0!==b&&b===!0){var k=parseInt(this._defaults.hourMax-(this._defaults.hourMax-this._defaults.hourMin)%this._defaults.stepHour,10),l=parseInt(this._defaults.minuteMax-(this._defaults.minuteMax-this._defaults.minuteMin)%this._defaults.stepMinute,10),m=parseInt(this._defaults.secondMax-(this._defaults.secondMax-this._defaults.secondMin)%this._defaults.stepSecond,10),n=parseInt(this._defaults.millisecMax-(this._defaults.millisecMax-this._defaults.millisecMin)%this._defaults.stepMillisec,10),o=parseInt(this._defaults.microsecMax-(this._defaults.microsecMax-this._defaults.microsecMin)%this._defaults.stepMicrosec,10);this.hour_slider&&(this.control.options(this,this.hour_slider,"hour",{min:this._defaults.hourMin,max:k,step:this._defaults.stepHour}),this.control.value(this,this.hour_slider,"hour",this.hour-this.hour%this._defaults.stepHour)),this.minute_slider&&(this.control.options(this,this.minute_slider,"minute",{min:this._defaults.minuteMin,max:l,step:this._defaults.stepMinute}),this.control.value(this,this.minute_slider,"minute",this.minute-this.minute%this._defaults.stepMinute)),this.second_slider&&(this.control.options(this,this.second_slider,"second",{min:this._defaults.secondMin,max:m,step:this._defaults.stepSecond}),this.control.value(this,this.second_slider,"second",this.second-this.second%this._defaults.stepSecond)),this.millisec_slider&&(this.control.options(this,this.millisec_slider,"millisec",{min:this._defaults.millisecMin,max:n,step:this._defaults.stepMillisec}),this.control.value(this,this.millisec_slider,"millisec",this.millisec-this.millisec%this._defaults.stepMillisec)),this.microsec_slider&&(this.control.options(this,this.microsec_slider,"microsec",{min:this._defaults.microsecMin,max:o,step:this._defaults.stepMicrosec}),this.control.value(this,this.microsec_slider,"microsec",this.microsec-this.microsec%this._defaults.stepMicrosec))}}},_onTimeChange:function(){if(this._defaults.showTimepicker){var a=this.hour_slider?this.control.value(this,this.hour_slider,"hour"):!1,b=this.minute_slider?this.control.value(this,this.minute_slider,"minute"):!1,c=this.second_slider?this.control.value(this,this.second_slider,"second"):!1,d=this.millisec_slider?this.control.value(this,this.millisec_slider,"millisec"):!1,e=this.microsec_slider?this.control.value(this,this.microsec_slider,"microsec"):!1,f=this.timezone_select?this.timezone_select.val():!1,g=this._defaults,h=g.pickerTimeFormat||g.timeFormat,i=g.pickerTimeSuffix||g.timeSuffix;"object"==typeof a&&(a=!1),"object"==typeof b&&(b=!1),"object"==typeof c&&(c=!1),"object"==typeof d&&(d=!1),"object"==typeof e&&(e=!1),"object"==typeof f&&(f=!1),a!==!1&&(a=parseInt(a,10)),b!==!1&&(b=parseInt(b,10)),c!==!1&&(c=parseInt(c,10)),d!==!1&&(d=parseInt(d,10)),e!==!1&&(e=parseInt(e,10)),f!==!1&&(f=f.toString());var j=g[12>a?"amNames":"pmNames"][0],k=a!==parseInt(this.hour,10)||b!==parseInt(this.minute,10)||c!==parseInt(this.second,10)||d!==parseInt(this.millisec,10)||e!==parseInt(this.microsec,10)||this.ampm.length>0&&12>a!=(-1!==$.inArray(this.ampm.toUpperCase(),this.amNames))||null!==this.timezone&&f!==this.timezone.toString();if(k&&(a!==!1&&(this.hour=a),b!==!1&&(this.minute=b),c!==!1&&(this.second=c),d!==!1&&(this.millisec=d),e!==!1&&(this.microsec=e),f!==!1&&(this.timezone=f),this.inst||(this.inst=$.datepicker._getInst(this.$input[0])),this._limitMinMaxDateTime(this.inst,!0)),this.support.ampm&&(this.ampm=j),this.formattedTime=$.datepicker.formatTime(g.timeFormat,this,g),this.$timeObj){var l=this.$timeObj[0].selectionStart,m=this.$timeObj[0].selectionEnd;h===g.timeFormat?this.$timeObj.val(this.formattedTime+i):this.$timeObj.val($.datepicker.formatTime(h,this,g)+i),this.$timeObj[0].setSelectionRange(l,m)}this.timeDefined=!0,k&&this._updateDateTime()}},_onSelectHandler:function(){var a=this._defaults.onSelect||this.inst.settings.onSelect,b=this.$input?this.$input[0]:null;a&&b&&a.apply(b,[this.formattedDateTime,this])},_updateDateTime:function(a){a=this.inst||a;var b=a.currentYear>0?new Date(a.currentYear,a.currentMonth,a.currentDay):new Date(a.selectedYear,a.selectedMonth,a.selectedDay),c=$.datepicker._daylightSavingAdjust(b),d=$.datepicker._get(a,"dateFormat"),e=$.datepicker._getFormatConfig(a),f=null!==c&&this.timeDefined;this.formattedDate=$.datepicker.formatDate(d,null===c?new Date:c,e);var g=this.formattedDate;if(""===a.lastVal&&(a.currentYear=a.selectedYear,a.currentMonth=a.selectedMonth,a.currentDay=a.selectedDay),this._defaults.timeOnly===!0&&this._defaults.timeOnlyShowDate===!1?g=this.formattedTime:(this._defaults.timeOnly!==!0&&(this._defaults.alwaysSetTime||f)||this._defaults.timeOnly===!0&&this._defaults.timeOnlyShowDate===!0)&&(g+=this._defaults.separator+this.formattedTime+this._defaults.timeSuffix),this.formattedDateTime=g,this._defaults.showTimepicker)if(this.$altInput&&this._defaults.timeOnly===!1&&this._defaults.altFieldTimeOnly===!0)this.$altInput.val(this.formattedTime),this.$input.val(this.formattedDate);else if(this.$altInput){this.$input.val(g);var h="",i=null!==this._defaults.altSeparator?this._defaults.altSeparator:this._defaults.separator,j=null!==this._defaults.altTimeSuffix?this._defaults.altTimeSuffix:this._defaults.timeSuffix;this._defaults.timeOnly||(h=this._defaults.altFormat?$.datepicker.formatDate(this._defaults.altFormat,null===c?new Date:c,e):this.formattedDate,h&&(h+=i)),h+=null!==this._defaults.altTimeFormat?$.datepicker.formatTime(this._defaults.altTimeFormat,this,this._defaults)+j:this.formattedTime+j,this.$altInput.val(h)}else this.$input.val(g);else this.$input.val(this.formattedDate);this.$input.trigger("change")},_onFocus:function(){if(!this.$input.val()&&this._defaults.defaultValue){this.$input.val(this._defaults.defaultValue);var a=$.datepicker._getInst(this.$input.get(0)),b=$.datepicker._get(a,"timepicker");if(b&&b._defaults.timeOnly&&a.input.val()!==a.lastVal)try{$.datepicker._updateDatepicker(a)}catch(c){$.timepicker.log(c)}}},_controls:{slider:{create:function(a,b,c,d,e,f,g){var h=a._defaults.isRTL;return b.prop("slide",null).slider({orientation:"horizontal",value:h?-1*d:d,min:h?-1*f:e,max:h?-1*e:f,step:g,slide:function(b,d){a.control.value(a,$(this),c,h?-1*d.value:d.value),a._onTimeChange()},stop:function(b,c){a._onSelectHandler()}})},options:function(a,b,c,d,e){if(a._defaults.isRTL){if("string"==typeof d)return"min"===d||"max"===d?void 0!==e?b.slider(d,-1*e):Math.abs(b.slider(d)):b.slider(d);var f=d.min,g=d.max;return d.min=d.max=null,void 0!==f&&(d.max=-1*f),void 0!==g&&(d.min=-1*g),b.slider(d)}return"string"==typeof d&&void 0!==e?b.slider(d,e):b.slider(d)},value:function(a,b,c,d){return a._defaults.isRTL?void 0!==d?b.slider("value",-1*d):Math.abs(b.slider("value")):void 0!==d?b.slider("value",d):b.slider("value")}},select:{create:function(a,b,c,d,e,f,g){for(var h='<select class="ui-timepicker-select ui-state-default ui-corner-all" data-unit="'+c+'" data-min="'+e+'" data-max="'+f+'" data-step="'+g+'">',i=a._defaults.pickerTimeFormat||a._defaults.timeFormat,j=e;f>=j;j+=g)h+='<option value="'+j+'"'+(j===d?" selected":"")+">",h+="hour"===c?$.datepicker.formatTime($.trim(i.replace(/[^ht ]/gi,"")),{hour:j},a._defaults):"millisec"===c||"microsec"===c||j>=10?j:"0"+j.toString(),h+="</option>";return h+="</select>",b.children("select").remove(),$(h).appendTo(b).change(function(b){a._onTimeChange(),a._onSelectHandler(),a._afterInject()}),b},options:function(a,b,c,d,e){var f={},g=b.children("select");if("string"==typeof d){if(void 0===e)return g.data(d);f[d]=e}else f=d;return a.control.create(a,b,g.data("unit"),g.val(),f.min>=0?f.min:g.data("min"),f.max||g.data("max"),f.step||g.data("step"))},value:function(a,b,c,d){var e=b.children("select");return void 0!==d?e.val(d):e.val()}}}}),$.fn.extend({timepicker:function(a){a=a||{};var b=Array.prototype.slice.call(arguments);return"object"==typeof a&&(b[0]=$.extend(a,{timeOnly:!0})),$(this).each(function(){$.fn.datetimepicker.apply($(this),b)})},datetimepicker:function(a){a=a||{};var b=arguments;return"string"==typeof a?"getDate"===a||"option"===a&&2===b.length&&"string"==typeof b[1]?$.fn.datepicker.apply($(this[0]),b):this.each(function(){var a=$(this);a.datepicker.apply(a,b)}):this.each(function(){var b=$(this);b.datepicker($.timepicker._newInst(b,a)._defaults)})}}),$.datepicker.parseDateTime=function(a,b,c,d,e){var f=parseDateTimeInternal(a,b,c,d,e);if(f.timeObj){var g=f.timeObj;f.date.setHours(g.hour,g.minute,g.second,g.millisec),f.date.setMicroseconds(g.microsec)}return f.date},$.datepicker.parseTime=function(a,b,c){var d=extendRemove(extendRemove({},$.timepicker._defaults),c||{}),e=(-1!==a.replace(/\'.*?\'/g,"").indexOf("Z"),function(a,b,c){var d,e=function(a,b){var c=[];return a&&$.merge(c,a),b&&$.merge(c,b),c=$.map(c,function(a){return a.replace(/[.*+?|()\[\]{}\\]/g,"\\$&")}),"("+c.join("|")+")?"},f=function(a){var b=a.toLowerCase().match(/(h{1,2}|m{1,2}|s{1,2}|l{1}|c{1}|t{1,2}|z|'.*?')/g),c={h:-1,m:-1,s:-1,l:-1,c:-1,t:-1,z:-1};if(b)for(var d=0;d<b.length;d++)-1===c[b[d].toString().charAt(0)]&&(c[b[d].toString().charAt(0)]=d+1);return c},g="^"+a.toString().replace(/([hH]{1,2}|mm?|ss?|[tT]{1,2}|[zZ]|[lc]|'.*?')/g,function(a){var b=a.length;switch(a.charAt(0).toLowerCase()){case"h":return 1===b?"(\\d?\\d)":"(\\d{"+b+"})";case"m":return 1===b?"(\\d?\\d)":"(\\d{"+b+"})";case"s":return 1===b?"(\\d?\\d)":"(\\d{"+b+"})";case"l":return"(\\d?\\d?\\d)";case"c":return"(\\d?\\d?\\d)";case"z":return"(z|[-+]\\d\\d:?\\d\\d|\\S+)?";case"t":return e(c.amNames,c.pmNames);default:return"("+a.replace(/\'/g,"").replace(/(\.|\$|\^|\\|\/|\(|\)|\[|\]|\?|\+|\*)/g,function(a){return"\\"+a})+")?"}}).replace(/\s/g,"\\s?")+c.timeSuffix+"$",h=f(a),i="";d=b.match(new RegExp(g,"i"));var j={hour:0,minute:0,second:0,millisec:0,microsec:0};return d?(-1!==h.t&&(void 0===d[h.t]||0===d[h.t].length?(i="",j.ampm=""):(i=-1!==$.inArray(d[h.t].toUpperCase(),$.map(c.amNames,function(a,b){return a.toUpperCase()}))?"AM":"PM",j.ampm=c["AM"===i?"amNames":"pmNames"][0])),-1!==h.h&&("AM"===i&&"12"===d[h.h]?j.hour=0:"PM"===i&&"12"!==d[h.h]?j.hour=parseInt(d[h.h],10)+12:j.hour=Number(d[h.h])),-1!==h.m&&(j.minute=Number(d[h.m])),-1!==h.s&&(j.second=Number(d[h.s])),-1!==h.l&&(j.millisec=Number(d[h.l])),-1!==h.c&&(j.microsec=Number(d[h.c])),-1!==h.z&&void 0!==d[h.z]&&(j.timezone=$.timepicker.timezoneOffsetNumber(d[h.z])),j):!1}),f=function(a,b,c){try{var d=new Date("2012-01-01 "+b);if(isNaN(d.getTime())&&(d=new Date("2012-01-01T"+b),isNaN(d.getTime())&&(d=new Date("01/01/2012 "+b),isNaN(d.getTime()))))throw"Unable to parse time with native Date: "+b;return{hour:d.getHours(),minute:d.getMinutes(),second:d.getSeconds(),millisec:d.getMilliseconds(),microsec:d.getMicroseconds(),timezone:-1*d.getTimezoneOffset()}}catch(f){try{return e(a,b,c)}catch(g){$.timepicker.log("Unable to parse \ntimeString: "+b+"\ntimeFormat: "+a)}}return!1};return"function"==typeof d.parse?d.parse(a,b,d):"loose"===d.parse?f(a,b,d):e(a,b,d)},$.datepicker.formatTime=function(a,b,c){c=c||{},c=$.extend({},$.timepicker._defaults,c),b=$.extend({hour:0,minute:0,second:0,millisec:0,microsec:0,timezone:null},b);var d=a,e=c.amNames[0],f=parseInt(b.hour,10);return f>11&&(e=c.pmNames[0]),d=d.replace(/(?:HH?|hh?|mm?|ss?|[tT]{1,2}|[zZ]|[lc]|'.*?')/g,function(a){switch(a){case"HH":return("0"+f).slice(-2);case"H":return f;case"hh":return("0"+convert24to12(f)).slice(-2);case"h":return convert24to12(f);case"mm":return("0"+b.minute).slice(-2);case"m":return b.minute;case"ss":return("0"+b.second).slice(-2);case"s":return b.second;case"l":return("00"+b.millisec).slice(-3);case"c":return("00"+b.microsec).slice(-3);case"z":return $.timepicker.timezoneOffsetString(null===b.timezone?c.timezone:b.timezone,!1);case"Z":return $.timepicker.timezoneOffsetString(null===b.timezone?c.timezone:b.timezone,!0);case"T":return e.charAt(0).toUpperCase();case"TT":return e.toUpperCase();case"t":return e.charAt(0).toLowerCase();case"tt":return e.toLowerCase();default:return a.replace(/'/g,"")}})},$.datepicker._base_selectDate=$.datepicker._selectDate,$.datepicker._selectDate=function(a,b){var c,d=this._getInst($(a)[0]),e=this._get(d,"timepicker");e&&d.settings.showTimepicker?(e._limitMinMaxDateTime(d,!0),c=d.inline,d.inline=d.stay_open=!0,this._base_selectDate(a,b),d.inline=c,d.stay_open=!1,this._notifyChange(d),this._updateDatepicker(d)):this._base_selectDate(a,b)},$.datepicker._base_updateDatepicker=$.datepicker._updateDatepicker,$.datepicker._updateDatepicker=function(a){var b=a.input[0];if(!($.datepicker._curInst&&$.datepicker._curInst!==a&&$.datepicker._datepickerShowing&&$.datepicker._lastInput!==b||"boolean"==typeof a.stay_open&&a.stay_open!==!1)){this._base_updateDatepicker(a);var c=this._get(a,"timepicker");c&&c._addTimePicker(a)}},$.datepicker._base_doKeyPress=$.datepicker._doKeyPress,$.datepicker._doKeyPress=function(a){var b=$.datepicker._getInst(a.target),c=$.datepicker._get(b,"timepicker");if(c&&$.datepicker._get(b,"constrainInput")){var d=c.support.ampm,e=null!==c._defaults.showTimezone?c._defaults.showTimezone:c.support.timezone,f=$.datepicker._possibleChars($.datepicker._get(b,"dateFormat")),g=c._defaults.timeFormat.toString().replace(/[hms]/g,"").replace(/TT/g,d?"APM":"").replace(/Tt/g,d?"AaPpMm":"").replace(/tT/g,d?"AaPpMm":"").replace(/T/g,d?"AP":"").replace(/tt/g,d?"apm":"").replace(/t/g,d?"ap":"")+" "+c._defaults.separator+c._defaults.timeSuffix+(e?c._defaults.timezoneList.join(""):"")+c._defaults.amNames.join("")+c._defaults.pmNames.join("")+f,h=String.fromCharCode(void 0===a.charCode?a.keyCode:a.charCode);return a.ctrlKey||" ">h||!f||g.indexOf(h)>-1}return $.datepicker._base_doKeyPress(a)},$.datepicker._base_updateAlternate=$.datepicker._updateAlternate,$.datepicker._updateAlternate=function(a){var b=this._get(a,"timepicker");if(b){var c=b._defaults.altField;if(c){var d=(b._defaults.altFormat||b._defaults.dateFormat,this._getDate(a)),e=$.datepicker._getFormatConfig(a),f="",g=b._defaults.altSeparator?b._defaults.altSeparator:b._defaults.separator,h=b._defaults.altTimeSuffix?b._defaults.altTimeSuffix:b._defaults.timeSuffix,i=null!==b._defaults.altTimeFormat?b._defaults.altTimeFormat:b._defaults.timeFormat;f+=$.datepicker.formatTime(i,b,b._defaults)+h,b._defaults.timeOnly||b._defaults.altFieldTimeOnly||null===d||(f=b._defaults.altFormat?$.datepicker.formatDate(b._defaults.altFormat,d,e)+g+f:b.formattedDate+g+f),$(c).val(a.input.val()?f:"")}}else $.datepicker._base_updateAlternate(a)},$.datepicker._base_doKeyUp=$.datepicker._doKeyUp,$.datepicker._doKeyUp=function(a){var b=$.datepicker._getInst(a.target),c=$.datepicker._get(b,"timepicker");
if(c&&c._defaults.timeOnly&&b.input.val()!==b.lastVal)try{$.datepicker._updateDatepicker(b)}catch(d){$.timepicker.log(d)}return $.datepicker._base_doKeyUp(a)},$.datepicker._base_gotoToday=$.datepicker._gotoToday,$.datepicker._gotoToday=function(a){var b=this._getInst($(a)[0]);this._base_gotoToday(a);var c=this._get(b,"timepicker"),d=$.timepicker.timezoneOffsetNumber(c.timezone),e=new Date;e.setMinutes(e.getMinutes()+e.getTimezoneOffset()+d),this._setTime(b,e),this._setDate(b,e),c._onSelectHandler()},$.datepicker._disableTimepickerDatepicker=function(a){var b=this._getInst(a);if(b){var c=this._get(b,"timepicker");$(a).datepicker("getDate"),c&&(b.settings.showTimepicker=!1,c._defaults.showTimepicker=!1,c._updateDateTime(b))}},$.datepicker._enableTimepickerDatepicker=function(a){var b=this._getInst(a);if(b){var c=this._get(b,"timepicker");$(a).datepicker("getDate"),c&&(b.settings.showTimepicker=!0,c._defaults.showTimepicker=!0,c._addTimePicker(b),c._updateDateTime(b))}},$.datepicker._setTime=function(a,b){var c=this._get(a,"timepicker");if(c){var d=c._defaults;c.hour=b?b.getHours():d.hour,c.minute=b?b.getMinutes():d.minute,c.second=b?b.getSeconds():d.second,c.millisec=b?b.getMilliseconds():d.millisec,c.microsec=b?b.getMicroseconds():d.microsec,c._limitMinMaxDateTime(a,!0),c._onTimeChange(),c._updateDateTime(a)}},$.datepicker._setTimeDatepicker=function(a,b,c){var d=this._getInst(a);if(d){var e=this._get(d,"timepicker");if(e){this._setDateFromField(d);var f;b&&("string"==typeof b?(e._parseTime(b,c),f=new Date,f.setHours(e.hour,e.minute,e.second,e.millisec),f.setMicroseconds(e.microsec)):(f=new Date(b.getTime()),f.setMicroseconds(b.getMicroseconds())),"Invalid Date"===f.toString()&&(f=void 0),this._setTime(d,f))}}},$.datepicker._base_setDateDatepicker=$.datepicker._setDateDatepicker,$.datepicker._setDateDatepicker=function(a,b){var c=this._getInst(a),d=b;if(c){"string"==typeof b&&(d=new Date(b),d.getTime()||(this._base_setDateDatepicker.apply(this,arguments),d=$(a).datepicker("getDate")));var e,f=this._get(c,"timepicker");d instanceof Date?(e=new Date(d.getTime()),e.setMicroseconds(d.getMicroseconds())):e=d,f&&e&&(f.support.timezone||null!==f._defaults.timezone||(f.timezone=-1*e.getTimezoneOffset()),d=$.timepicker.timezoneAdjust(d,f.timezone),e=$.timepicker.timezoneAdjust(e,f.timezone)),this._updateDatepicker(c),this._base_setDateDatepicker.apply(this,arguments),this._setTimeDatepicker(a,e,!0)}},$.datepicker._base_getDateDatepicker=$.datepicker._getDateDatepicker,$.datepicker._getDateDatepicker=function(a,b){var c=this._getInst(a);if(c){var d=this._get(c,"timepicker");if(d){void 0===c.lastVal&&this._setDateFromField(c,b);var e=this._getDate(c),f=$.trim(d.$altInput&&d._defaults.altFieldTimeOnly?d.$input.val()+" "+d.$altInput.val():d.$input.val());return e&&d._parseTime(f,!c.settings.timeOnly)&&(e.setHours(d.hour,d.minute,d.second,d.millisec),e.setMicroseconds(d.microsec),null!=d.timezone&&(d.support.timezone||null!==d._defaults.timezone||(d.timezone=-1*e.getTimezoneOffset()),e=$.timepicker.timezoneAdjust(e,d.timezone))),e}return this._base_getDateDatepicker(a,b)}},$.datepicker._base_parseDate=$.datepicker.parseDate,$.datepicker.parseDate=function(a,b,c){var d;try{d=this._base_parseDate(a,b,c)}catch(e){if(!(e.indexOf(":")>=0))throw e;d=this._base_parseDate(a,b.substring(0,b.length-(e.length-e.indexOf(":")-2)),c),$.timepicker.log("Error parsing the date string: "+e+"\ndate string = "+b+"\ndate format = "+a)}return d},$.datepicker._base_formatDate=$.datepicker._formatDate,$.datepicker._formatDate=function(a,b,c,d){var e=this._get(a,"timepicker");return e?(e._updateDateTime(a),e.$input.val()):this._base_formatDate(a)},$.datepicker._base_optionDatepicker=$.datepicker._optionDatepicker,$.datepicker._optionDatepicker=function(a,b,c){var d,e=this._getInst(a);if(!e)return null;var f=this._get(e,"timepicker");if(f){var g,h,i,j,k=null,l=null,m=null,n=f._defaults.evnts,o={};if("string"==typeof b){if("minDate"===b||"minDateTime"===b)k=c;else if("maxDate"===b||"maxDateTime"===b)l=c;else if("onSelect"===b)m=c;else if(n.hasOwnProperty(b)){if("undefined"==typeof c)return n[b];o[b]=c,d={}}}else if("object"==typeof b){b.minDate?k=b.minDate:b.minDateTime?k=b.minDateTime:b.maxDate?l=b.maxDate:b.maxDateTime&&(l=b.maxDateTime);for(g in n)n.hasOwnProperty(g)&&b[g]&&(o[g]=b[g])}for(g in o)o.hasOwnProperty(g)&&(n[g]=o[g],d||(d=$.extend({},b)),delete d[g]);if(d&&isEmptyObject(d))return;if(k?(k=0===k?new Date:new Date(k),f._defaults.minDate=k,f._defaults.minDateTime=k):l?(l=0===l?new Date:new Date(l),f._defaults.maxDate=l,f._defaults.maxDateTime=l):m&&(f._defaults.onSelect=m),k||l)return j=$(a),i=j.datetimepicker("getDate"),h=this._base_optionDatepicker.call($.datepicker,a,d||b,c),j.datetimepicker("setDate",i),h}return void 0===c?this._base_optionDatepicker.call($.datepicker,a,b):this._base_optionDatepicker.call($.datepicker,a,d||b,c)};var isEmptyObject=function(a){var b;for(b in a)if(a.hasOwnProperty(b))return!1;return!0},extendRemove=function(a,b){$.extend(a,b);for(var c in b)(null===b[c]||void 0===b[c])&&(a[c]=b[c]);return a},detectSupport=function(a){var b=a.replace(/'.*?'/g,"").toLowerCase(),c=function(a,b){return-1!==a.indexOf(b)?!0:!1};return{hour:c(b,"h"),minute:c(b,"m"),second:c(b,"s"),millisec:c(b,"l"),microsec:c(b,"c"),timezone:c(b,"z"),ampm:c(b,"t")&&c(a,"h"),iso8601:c(a,"Z")}},convert24to12=function(a){return a%=12,0===a&&(a=12),String(a)},computeEffectiveSetting=function(a,b){return a&&a[b]?a[b]:$.timepicker._defaults[b]},splitDateTime=function(a,b){var c=computeEffectiveSetting(b,"separator"),d=computeEffectiveSetting(b,"timeFormat"),e=d.split(c),f=e.length,g=a.split(c),h=g.length;return h>1?{dateString:g.splice(0,h-f).join(c),timeString:g.splice(0,f).join(c)}:{dateString:a,timeString:""}},parseDateTimeInternal=function(a,b,c,d,e){var f,g,h;if(g=splitDateTime(c,e),f=$.datepicker._base_parseDate(a,g.dateString,d),""===g.timeString)return{date:f};if(h=$.datepicker.parseTime(b,g.timeString,e),!h)throw"Wrong time format";return{date:f,timeObj:h}},selectLocalTimezone=function(a,b){if(a&&a.timezone_select){var c=b||new Date;a.timezone_select.val(-c.getTimezoneOffset())}};$.timepicker=new Timepicker,$.timepicker.timezoneOffsetString=function(a,b){if(isNaN(a)||a>840||-720>a)return a;var c=a,d=c%60,e=(c-d)/60,f=b?":":"",g=(c>=0?"+":"-")+("0"+Math.abs(e)).slice(-2)+f+("0"+Math.abs(d)).slice(-2);return"+00:00"===g?"Z":g},$.timepicker.timezoneOffsetNumber=function(a){var b=a.toString().replace(":","");return"Z"===b.toUpperCase()?0:/^(\-|\+)\d{4}$/.test(b)?("-"===b.substr(0,1)?-1:1)*(60*parseInt(b.substr(1,2),10)+parseInt(b.substr(3,2),10)):a},$.timepicker.timezoneAdjust=function(a,b){var c=$.timepicker.timezoneOffsetNumber(b);return isNaN(c)||a.setMinutes(a.getMinutes()+-a.getTimezoneOffset()-c),a},$.timepicker.timeRange=function(a,b,c){return $.timepicker.handleRange("timepicker",a,b,c)},$.timepicker.datetimeRange=function(a,b,c){$.timepicker.handleRange("datetimepicker",a,b,c)},$.timepicker.dateRange=function(a,b,c){$.timepicker.handleRange("datepicker",a,b,c)},$.timepicker.handleRange=function(a,b,c,d){function e(e,f){var g=b[a]("getDate"),h=c[a]("getDate"),i=e[a]("getDate");if(null!==g){var j=new Date(g.getTime()),k=new Date(g.getTime());j.setMilliseconds(j.getMilliseconds()+d.minInterval),k.setMilliseconds(k.getMilliseconds()+d.maxInterval),d.minInterval>0&&j>h?c[a]("setDate",j):d.maxInterval>0&&h>k?c[a]("setDate",k):g>h&&f[a]("setDate",i)}}function f(b,c,e){if(b.val()){var f=b[a].call(b,"getDate");null!==f&&d.minInterval>0&&("minDate"===e&&f.setMilliseconds(f.getMilliseconds()+d.minInterval),"maxDate"===e&&f.setMilliseconds(f.getMilliseconds()-d.minInterval)),f.getTime&&c[a].call(c,"option",e,f)}}d=$.extend({},{minInterval:0,maxInterval:0,start:{},end:{}},d);var g=!1;return"timepicker"===a&&(g=!0,a="datetimepicker"),$.fn[a].call(b,$.extend({timeOnly:g,onClose:function(a,b){e($(this),c)},onSelect:function(a){f($(this),c,"minDate")}},d,d.start)),$.fn[a].call(c,$.extend({timeOnly:g,onClose:function(a,c){e($(this),b)},onSelect:function(a){f($(this),b,"maxDate")}},d,d.end)),e(b,c),f(b,c,"minDate"),f(c,b,"maxDate"),$([b.get(0),c.get(0)])},$.timepicker.log=function(){window.console&&window.console.log.apply(window.console,Array.prototype.slice.call(arguments))},$.timepicker._util={_extendRemove:extendRemove,_isEmptyObject:isEmptyObject,_convert24to12:convert24to12,_detectSupport:detectSupport,_selectLocalTimezone:selectLocalTimezone,_computeEffectiveSetting:computeEffectiveSetting,_splitDateTime:splitDateTime,_parseDateTimeInternal:parseDateTimeInternal},Date.prototype.getMicroseconds||(Date.prototype.microseconds=0,Date.prototype.getMicroseconds=function(){return this.microseconds},Date.prototype.setMicroseconds=function(a){return this.setMilliseconds(this.getMilliseconds()+Math.floor(a/1e3)),this.microseconds=a%1e3,this}),$.timepicker.version="1.6.1"}});;
/*--- END: /home/kinkeaca/public_html/plugins/jquery/jquery-ui-timepicker-addon.min.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/plugins/jquery/jquery-ui-sliderAccess.js---*/
/*
 * jQuery UI Slider Access
 * By: Trent Richardson [http://trentrichardson.com]
 * Version 0.3
 * Last Modified: 10/20/2012
 * 
 * Copyright 2011 Trent Richardson
 * Dual licensed under the MIT and GPL licenses.
 * http://trentrichardson.com/Impromptu/GPL-LICENSE.txt
 * http://trentrichardson.com/Impromptu/MIT-LICENSE.txt
 * 
 */
 (function($){

	$.fn.extend({
		sliderAccess: function(options){
			options = options || {};
			options.touchonly = options.touchonly !== undefined? options.touchonly : true; // by default only show it if touch device

			if(options.touchonly === true && !("ontouchend" in document)){
				return $(this);
			}
				
			return $(this).each(function(i,obj){
						var $t = $(this),
							o = $.extend({},{ 
											where: 'after',
											step: $t.slider('option','step'), 
											upIcon: 'ui-icon-plus', 
											downIcon: 'ui-icon-minus',
											text: false,
											upText: '+',
											downText: '-',
											buttonset: true,
											buttonsetTag: 'span',
											isRTL: false
										}, options),
							$buttons = $('<'+ o.buttonsetTag +' class="ui-slider-access">'+
											'<button data-icon="'+ o.downIcon +'" data-step="'+ (o.isRTL? o.step : o.step*-1) +'">'+ o.downText +'</button>'+
											'<button data-icon="'+ o.upIcon +'" data-step="'+ (o.isRTL? o.step*-1 : o.step) +'">'+ o.upText +'</button>'+
										'</'+ o.buttonsetTag +'>');

						$buttons.children('button').each(function(j, jobj){
							var $jt = $(this);
							$jt.button({ 
											text: o.text, 
											icons: { primary: $jt.data('icon') }
										})
								.click(function(e){
											var step = $jt.data('step'),
												curr = $t.slider('value'),
												newval = curr += step*1,
												minval = $t.slider('option','min'),
												maxval = $t.slider('option','max'),
												slidee = $t.slider("option", "slide") || function(){},
												stope = $t.slider("option", "stop") || function(){};

											e.preventDefault();
											
											if(newval < minval || newval > maxval){
												return;
											}
											
											$t.slider('value', newval);

											slidee.call($t, null, { value: newval });
											stope.call($t, null, { value: newval });
										});
						});
						
						// before or after					
						$t[o.where]($buttons);

						if(o.buttonset){
							$buttons.removeClass('ui-corner-right').removeClass('ui-corner-left').buttonset();
							$buttons.eq(0).addClass('ui-corner-left');
							$buttons.eq(1).addClass('ui-corner-right');
						}

						// adjust the width so we don't break the original layout
						var bOuterWidth = $buttons.css({
									marginLeft: ((o.where === 'after' && !o.isRTL) || (o.where === 'before' && o.isRTL)? 10:0), 
									marginRight: ((o.where === 'before' && !o.isRTL) || (o.where === 'after' && o.isRTL)? 10:0)
								}).outerWidth(true) + 5;
						var tOuterWidth = $t.outerWidth(true);
						$t.css('display','inline-block').width(tOuterWidth-bOuterWidth);
					});		
		}
	});

})(jQuery);;
/*--- END: /home/kinkeaca/public_html/plugins/jquery/jquery-ui-sliderAccess.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/inc/js/view_edit.js---*/
// submits edit form located on view profile page
function submitViewEditForm(eForm, iPageBlockID, sSuccessUrl) {
    if( !eForm )
        return false;
    
    hideEditFormErrors( eForm );
    
    $(eForm).ajaxSubmit({
        success: function(sResponce) {
            try {
                var aErrors = eval(sResponce);
            } catch(e) {
                return false;
            }
            
            var bHaveErrors = doShowEditErrors( aErrors, eForm );
            
            if (!bHaveErrors) {
                loadDynamicBlock(iPageBlockID, sSuccessUrl);
                closeDynamicPopupBlock();
            }
        }
    } );
    
    return false;
}

function hideEditFormErrors( eForm ) {
    $( '.error', eForm ).removeClass( 'error' );
}

function doShowEditErrors( aErrors, eForm ) {
    if( !aErrors || !eForm )
        return false;
    
    var bHaveErrors = false;
    
    for( var iInd = 0; iInd < aErrors.length; iInd ++ ) {
        var aErrorsInd = aErrors[iInd];
        for( var sField in aErrorsInd ) {
            var sError = aErrorsInd[ sField ];
            bHaveErrors = true;
            
            doShowError( eForm, sField, iInd, sError );
        }
    }
    
    return bHaveErrors;
}

function doShowError( eForm, sField, iInd, sError ) {
    var $Field = $( "[name='" + sField + "']", eForm ); // single (system) field
    if( !$Field.length ) // couple field
        $Field = $( "[name='" + sField + '[' + iInd + ']' + "']", eForm );
    if( !$Field.length ) // couple multi-select
        $Field = $( "[name='" + sField + '[' + iInd + '][]' + "']", eForm );
    if( !$Field.length ) // couple range (two fields)
        $Field = $( "[name='" + sField + '[' + iInd + '][0]' + "'],[name='" + sField + '[' + iInd + '][1]' + "']", eForm );

    $Field.parents('.bx-form-element:first').addClass('bx-form-element-error').find('.bx-form-error > [float_info]').attr('float_info', sError);
}
;
/*--- END: /home/kinkeaca/public_html/inc/js/view_edit.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/flash/modules/global/js/swfobject.js---*/
/*	SWFObject v2.2 <http://code.google.com/p/swfobject/> 
	is released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/
var swfobject=function(){var D="undefined",r="object",S="Shockwave Flash",W="ShockwaveFlash.ShockwaveFlash",q="application/x-shockwave-flash",R="SWFObjectExprInst",x="onreadystatechange",O=window,j=document,t=navigator,T=false,U=[h],o=[],N=[],I=[],l,Q,E,B,J=false,a=false,n,G,m=true,M=function(){var aa=typeof j.getElementById!=D&&typeof j.getElementsByTagName!=D&&typeof j.createElement!=D,ah=t.userAgent.toLowerCase(),Y=t.platform.toLowerCase(),ae=Y?/win/.test(Y):/win/.test(ah),ac=Y?/mac/.test(Y):/mac/.test(ah),af=/webkit/.test(ah)?parseFloat(ah.replace(/^.*webkit\/(\d+(\.\d+)?).*$/,"$1")):false,X=!+"\v1",ag=[0,0,0],ab=null;if(typeof t.plugins!=D&&typeof t.plugins[S]==r){ab=t.plugins[S].description;if(ab&&!(typeof t.mimeTypes!=D&&t.mimeTypes[q]&&!t.mimeTypes[q].enabledPlugin)){T=true;X=false;ab=ab.replace(/^.*\s+(\S+\s+\S+$)/,"$1");ag[0]=parseInt(ab.replace(/^(.*)\..*$/,"$1"),10);ag[1]=parseInt(ab.replace(/^.*\.(.*)\s.*$/,"$1"),10);ag[2]=/[a-zA-Z]/.test(ab)?parseInt(ab.replace(/^.*[a-zA-Z]+(.*)$/,"$1"),10):0}}else{if(typeof O.ActiveXObject!=D){try{var ad=new ActiveXObject(W);if(ad){ab=ad.GetVariable("$version");if(ab){X=true;ab=ab.split(" ")[1].split(",");ag=[parseInt(ab[0],10),parseInt(ab[1],10),parseInt(ab[2],10)]}}}catch(Z){}}}return{w3:aa,pv:ag,wk:af,ie:X,win:ae,mac:ac}}(),k=function(){if(!M.w3){return}if((typeof j.readyState!=D&&j.readyState=="complete")||(typeof j.readyState==D&&(j.getElementsByTagName("body")[0]||j.body))){f()}if(!J){if(typeof j.addEventListener!=D){j.addEventListener("DOMContentLoaded",f,false)}if(M.ie&&M.win){j.attachEvent(x,function(){if(j.readyState=="complete"){j.detachEvent(x,arguments.callee);f()}});if(O==top){(function(){if(J){return}try{j.documentElement.doScroll("left")}catch(X){setTimeout(arguments.callee,0);return}f()})()}}if(M.wk){(function(){if(J){return}if(!/loaded|complete/.test(j.readyState)){setTimeout(arguments.callee,0);return}f()})()}s(f)}}();function f(){if(J){return}try{var Z=j.getElementsByTagName("body")[0].appendChild(C("span"));Z.parentNode.removeChild(Z)}catch(aa){return}J=true;var X=U.length;for(var Y=0;Y<X;Y++){U[Y]()}}function K(X){if(J){X()}else{U[U.length]=X}}function s(Y){if(typeof O.addEventListener!=D){O.addEventListener("load",Y,false)}else{if(typeof j.addEventListener!=D){j.addEventListener("load",Y,false)}else{if(typeof O.attachEvent!=D){i(O,"onload",Y)}else{if(typeof O.onload=="function"){var X=O.onload;O.onload=function(){X();Y()}}else{O.onload=Y}}}}}function h(){if(T){V()}else{H()}}function V(){var X=j.getElementsByTagName("body")[0];var aa=C(r);aa.setAttribute("type",q);var Z=X.appendChild(aa);if(Z){var Y=0;(function(){if(typeof Z.GetVariable!=D){var ab=Z.GetVariable("$version");if(ab){ab=ab.split(" ")[1].split(",");M.pv=[parseInt(ab[0],10),parseInt(ab[1],10),parseInt(ab[2],10)]}}else{if(Y<10){Y++;setTimeout(arguments.callee,10);return}}X.removeChild(aa);Z=null;H()})()}else{H()}}function H(){var ag=o.length;if(ag>0){for(var af=0;af<ag;af++){var Y=o[af].id;var ab=o[af].callbackFn;var aa={success:false,id:Y};if(M.pv[0]>0){var ae=c(Y);if(ae){if(F(o[af].swfVersion)&&!(M.wk&&M.wk<312)){w(Y,true);if(ab){aa.success=true;aa.ref=z(Y);ab(aa)}}else{if(o[af].expressInstall&&A()){var ai={};ai.data=o[af].expressInstall;ai.width=ae.getAttribute("width")||"0";ai.height=ae.getAttribute("height")||"0";if(ae.getAttribute("class")){ai.styleclass=ae.getAttribute("class")}if(ae.getAttribute("align")){ai.align=ae.getAttribute("align")}var ah={};var X=ae.getElementsByTagName("param");var ac=X.length;for(var ad=0;ad<ac;ad++){if(X[ad].getAttribute("name").toLowerCase()!="movie"){ah[X[ad].getAttribute("name")]=X[ad].getAttribute("value")}}P(ai,ah,Y,ab)}else{p(ae);if(ab){ab(aa)}}}}}else{w(Y,true);if(ab){var Z=z(Y);if(Z&&typeof Z.SetVariable!=D){aa.success=true;aa.ref=Z}ab(aa)}}}}}function z(aa){var X=null;var Y=c(aa);if(Y&&Y.nodeName=="OBJECT"){if(typeof Y.SetVariable!=D){X=Y}else{var Z=Y.getElementsByTagName(r)[0];if(Z){X=Z}}}return X}function A(){return !a&&F("6.0.65")&&(M.win||M.mac)&&!(M.wk&&M.wk<312)}function P(aa,ab,X,Z){a=true;E=Z||null;B={success:false,id:X};var ae=c(X);if(ae){if(ae.nodeName=="OBJECT"){l=g(ae);Q=null}else{l=ae;Q=X}aa.id=R;if(typeof aa.width==D||(!/%$/.test(aa.width)&&parseInt(aa.width,10)<310)){aa.width="310"}if(typeof aa.height==D||(!/%$/.test(aa.height)&&parseInt(aa.height,10)<137)){aa.height="137"}j.title=j.title.slice(0,47)+" - Flash Player Installation";var ad=M.ie&&M.win?"ActiveX":"PlugIn",ac="MMredirectURL="+O.location.toString().replace(/&/g,"%26")+"&MMplayerType="+ad+"&MMdoctitle="+j.title;if(typeof ab.flashvars!=D){ab.flashvars+="&"+ac}else{ab.flashvars=ac}if(M.ie&&M.win&&ae.readyState!=4){var Y=C("div");X+="SWFObjectNew";Y.setAttribute("id",X);ae.parentNode.insertBefore(Y,ae);ae.style.display="none";(function(){if(ae.readyState==4){ae.parentNode.removeChild(ae)}else{setTimeout(arguments.callee,10)}})()}u(aa,ab,X)}}function p(Y){if(M.ie&&M.win&&Y.readyState!=4){var X=C("div");Y.parentNode.insertBefore(X,Y);X.parentNode.replaceChild(g(Y),X);Y.style.display="none";(function(){if(Y.readyState==4){Y.parentNode.removeChild(Y)}else{setTimeout(arguments.callee,10)}})()}else{Y.parentNode.replaceChild(g(Y),Y)}}function g(ab){var aa=C("div");if(M.win&&M.ie){aa.innerHTML=ab.innerHTML}else{var Y=ab.getElementsByTagName(r)[0];if(Y){var ad=Y.childNodes;if(ad){var X=ad.length;for(var Z=0;Z<X;Z++){if(!(ad[Z].nodeType==1&&ad[Z].nodeName=="PARAM")&&!(ad[Z].nodeType==8)){aa.appendChild(ad[Z].cloneNode(true))}}}}}return aa}function u(ai,ag,Y){var X,aa=c(Y);if(M.wk&&M.wk<312){return X}if(aa){if(typeof ai.id==D){ai.id=Y}if(M.ie&&M.win){var ah="";for(var ae in ai){if(ai[ae]!=Object.prototype[ae]){if(ae.toLowerCase()=="data"){ag.movie=ai[ae]}else{if(ae.toLowerCase()=="styleclass"){ah+=' class="'+ai[ae]+'"'}else{if(ae.toLowerCase()!="classid"){ah+=" "+ae+'="'+ai[ae]+'"'}}}}}var af="";for(var ad in ag){if(ag[ad]!=Object.prototype[ad]){af+='<param name="'+ad+'" value="'+ag[ad]+'" />'}}aa.outerHTML='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'+ah+">"+af+"</object>";N[N.length]=ai.id;X=c(ai.id)}else{var Z=C(r);Z.setAttribute("type",q);for(var ac in ai){if(ai[ac]!=Object.prototype[ac]){if(ac.toLowerCase()=="styleclass"){Z.setAttribute("class",ai[ac])}else{if(ac.toLowerCase()!="classid"){Z.setAttribute(ac,ai[ac])}}}}for(var ab in ag){if(ag[ab]!=Object.prototype[ab]&&ab.toLowerCase()!="movie"){e(Z,ab,ag[ab])}}aa.parentNode.replaceChild(Z,aa);X=Z}}return X}function e(Z,X,Y){var aa=C("param");aa.setAttribute("name",X);aa.setAttribute("value",Y);Z.appendChild(aa)}function y(Y){var X=c(Y);if(X&&X.nodeName=="OBJECT"){if(M.ie&&M.win){X.style.display="none";(function(){if(X.readyState==4){b(Y)}else{setTimeout(arguments.callee,10)}})()}else{X.parentNode.removeChild(X)}}}function b(Z){var Y=c(Z);if(Y){for(var X in Y){if(typeof Y[X]=="function"){Y[X]=null}}Y.parentNode.removeChild(Y)}}function c(Z){var X=null;try{X=j.getElementById(Z)}catch(Y){}return X}function C(X){return j.createElement(X)}function i(Z,X,Y){Z.attachEvent(X,Y);I[I.length]=[Z,X,Y]}function F(Z){var Y=M.pv,X=Z.split(".");X[0]=parseInt(X[0],10);X[1]=parseInt(X[1],10)||0;X[2]=parseInt(X[2],10)||0;return(Y[0]>X[0]||(Y[0]==X[0]&&Y[1]>X[1])||(Y[0]==X[0]&&Y[1]==X[1]&&Y[2]>=X[2]))?true:false}function v(ac,Y,ad,ab){if(M.ie&&M.mac){return}var aa=j.getElementsByTagName("head")[0];if(!aa){return}var X=(ad&&typeof ad=="string")?ad:"screen";if(ab){n=null;G=null}if(!n||G!=X){var Z=C("style");Z.setAttribute("type","text/css");Z.setAttribute("media",X);n=aa.appendChild(Z);if(M.ie&&M.win&&typeof j.styleSheets!=D&&j.styleSheets.length>0){n=j.styleSheets[j.styleSheets.length-1]}G=X}if(M.ie&&M.win){if(n&&typeof n.addRule==r){n.addRule(ac,Y)}}else{if(n&&typeof j.createTextNode!=D){n.appendChild(j.createTextNode(ac+" {"+Y+"}"))}}}function w(Z,X){if(!m){return}var Y=X?"visible":"hidden";if(J&&c(Z)){c(Z).style.visibility=Y}else{v("#"+Z,"visibility:"+Y)}}function L(Y){var Z=/[\\\"<>\.;]/;var X=Z.exec(Y)!=null;return X&&typeof encodeURIComponent!=D?encodeURIComponent(Y):Y}var d=function(){if(M.ie&&M.win){window.attachEvent("onunload",function(){var ac=I.length;for(var ab=0;ab<ac;ab++){I[ab][0].detachEvent(I[ab][1],I[ab][2])}var Z=N.length;for(var aa=0;aa<Z;aa++){y(N[aa])}for(var Y in M){M[Y]=null}M=null;for(var X in swfobject){swfobject[X]=null}swfobject=null})}}();return{registerObject:function(ab,X,aa,Z){if(M.w3&&ab&&X){var Y={};Y.id=ab;Y.swfVersion=X;Y.expressInstall=aa;Y.callbackFn=Z;o[o.length]=Y;w(ab,false)}else{if(Z){Z({success:false,id:ab})}}},getObjectById:function(X){if(M.w3){return z(X)}},embedSWF:function(ab,ah,ae,ag,Y,aa,Z,ad,af,ac){var X={success:false,id:ah};if(M.w3&&!(M.wk&&M.wk<312)&&ab&&ah&&ae&&ag&&Y){w(ah,false);K(function(){ae+="";ag+="";var aj={};if(af&&typeof af===r){for(var al in af){aj[al]=af[al]}}aj.data=ab;aj.width=ae;aj.height=ag;var am={};if(ad&&typeof ad===r){for(var ak in ad){am[ak]=ad[ak]}}if(Z&&typeof Z===r){for(var ai in Z){if(typeof am.flashvars!=D){am.flashvars+="&"+ai+"="+Z[ai]}else{am.flashvars=ai+"="+Z[ai]}}}if(F(Y)){var an=u(aj,am,ah);if(aj.id==ah){w(ah,true)}X.success=true;X.ref=an}else{if(aa&&A()){aj.data=aa;P(aj,am,ah,ac);return}else{w(ah,true)}}if(ac){ac(X)}})}else{if(ac){ac(X)}}},switchOffAutoHideShow:function(){m=false},ua:M,getFlashPlayerVersion:function(){return{major:M.pv[0],minor:M.pv[1],release:M.pv[2]}},hasFlashPlayerVersion:F,createSWF:function(Z,Y,X){if(M.w3){return u(Z,Y,X)}else{return undefined}},showExpressInstall:function(Z,aa,X,Y){if(M.w3&&A()){P(Z,aa,X,Y)}},removeSWF:function(X){if(M.w3){y(X)}},createCSS:function(aa,Z,Y,X){if(M.w3){v(aa,Z,Y,X)}},addDomLoadEvent:K,addLoadEvent:s,getQueryParamValue:function(aa){var Z=j.location.search||j.location.hash;if(Z){if(/\?/.test(Z)){Z=Z.split("?")[1]}if(aa==null){return L(Z)}var Y=Z.split("&");for(var X=0;X<Y.length;X++){if(Y[X].substring(0,Y[X].indexOf("="))==aa){return L(Y[X].substring((Y[X].indexOf("=")+1)))}}}return""},expressInstallCallback:function(){if(a){var X=c(R);if(X&&l){X.parentNode.replaceChild(l,X);if(Q){w(Q,true);if(M.ie&&M.win){l.style.display="block"}}if(E){E(B)}}a=false}}}}();;
/*--- END: /home/kinkeaca/public_html/flash/modules/global/js/swfobject.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/modules/boonex/messenger/js/invite.js---*/
var BxMsgInvitationHeight = 300;
var BxMsgInviteInterval;
var sBxMsgTemplate = "";
var aBxMsgMessages = new Array();
var aBxMsgInvitations = new Object();

function BxMsgUpdate() {
    var oDate = new Date();
    $.get (
        sBxMsgUpdateUrl,
        {_t: oDate.getTime()},
        function(xXml) {
			var aMessages = xXml.getElementsByTagName("msg");
			for(var i=0; i<aMessages.length; i++)
				aBxMsgMessages.push({
					'sender': aMessages[i].getAttribute("sender"),
					'nick': aMessages[i].getAttribute("nick"),
					'profile': aMessages[i].getAttribute("profile"),
					'text': aMessages[i].firstChild.nodeValue
				});
			if(aBxMsgMessages.length) BxMsgShowInvitations();
        },
		'xml'
    );
	BxMsgInviteInterval = setTimeout('BxMsgUpdate();', BxMsgUpdateInterval);
}

function BxMsgShowInvitations() {
    if (sBxMsgTemplate.length) {
		for(var i=0; i<aBxMsgMessages.length; i++)
			BxMsgShowInvitation(aBxMsgMessages[i]);
		aBxMsgMessages.length = 0;
    } else {
        $.get(
            sBxMsgGetUrl + "get_invitation",
            {},
            function(data) {
                // trim needed for Safari. LOL
				sBxMsgTemplate = $.trim(data);
				BxMsgShowInvitations();
            },
            'html'
        );
    }
}

function BxMsgShowInvitation(oMessage) {
	if(aBxMsgInvitations[oMessage["sender"]]) return;
	
	var sContents = sBxMsgTemplate.split("__sender_id__").join(oMessage["sender"]);
	sContents = sContents.split("__sender_nickname__").join(oMessage["nick"]);
	sContents = sContents.split("__sender_profile__").join(oMessage["profile"]);
	sContents = sContents.split("__invitation_text__").join(oMessage["text"]);

	$.get(
		sBxMsgGetUrl + "get_thumbnail/" + oMessage["sender"],
		{},
		function(data) {
			// trim needed for Safari. LOL
			sContents = sContents.split("__sender_thumbnail__").join($.trim(data));
			aBxMsgInvitations[oMessage["sender"]] = $(sContents).prependTo('body');
			BxMsgRefreshPositions();
		},
		'html'
	);
}

function BxMsgRemoveInvitation(iSender) {
	aBxMsgInvitations[iSender].remove();
	aBxMsgInvitations[iSender] = null;
	BxMsgRefreshPositions();
}

function BxMsgRefreshPositions() {
	var iTopCount = 0;
	for(var i in aBxMsgInvitations)
	{
		if(aBxMsgInvitations[i] == null) continue;
		aBxMsgInvitations[i].attr('style', "top:" + (BxMsgTopMargin + iTopCount * BxMsgInvitationHeight) + "px");
		iTopCount++;
	}
}

function BxMsgPerformAction(iSender, sAction) {
	switch(sAction) {
		case "accept":
			openRayWidget("im", "user", sBxMsgMemberId, sBxMsgMemberPassword, iSender);
			break;
		case "spam":
		case "block":
            $.post(sBxMsgSiteUrl + 'list_pop.php?action=' + sAction, { ID: iSender } );
			break;
		case "decline":
		default:
			break;
	}
	BxMsgRemoveInvitation(iSender);
};
/*--- END: /home/kinkeaca/public_html/modules/boonex/messenger/js/invite.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/plugins/emoji-picker/js/jquery.emojipicker.js---*/
;(function($) {

  var pluginName = "emojiPicker",
      defaults = {
        width: '200',
        height: '350',
        position: 'bottom',
        fadeTime: 100,
        iconColor: 'black',
        iconBackgroundColor: '#eee',
        container: 'body',
        button: true
      };

  var MIN_WIDTH = 200,
      MAX_WIDTH = 600,
      MIN_HEIGHT = 100,
      MAX_HEIGHT = 350,
      MAX_ICON_HEIGHT = 50;

  function Plugin( element, options ) {

    this.element = element;
    this.$el = $(element);

    this.settings = $.extend( {}, defaults, options );

    this.$container = $(this.settings.container);

    // (type) Safety first
    this.settings.width = parseInt(this.settings.width);
    this.settings.height = parseInt(this.settings.height);

    // Check for valid width/height
    if(this.settings.width >= MAX_WIDTH) {
      this.settings.width = MAX_WIDTH;
    } else if (this.settings.width < MIN_WIDTH) {
      this.settings.width = MIN_WIDTH;
    }
    if (this.settings.height >= MAX_HEIGHT) {
      this.settings.height = MAX_HEIGHT;
    } else if (this.settings.height < MIN_HEIGHT) {
      this.settings.height = MIN_HEIGHT;
    }

    // Do not enable if on mobile device (emojis already present)
    if(!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
      this.init();
    }

  }

  $.extend(Plugin.prototype, {

    init: function() {
      this.active = false;
      this.addPickerIcon();
      this.createPicker();
      this.listen();
    },

    addPickerIcon: function() {
      var elementHeight = this.$el.outerHeight();
      var iconHeight = elementHeight > MAX_ICON_HEIGHT ?
        MAX_ICON_HEIGHT :
        elementHeight;
      var objectWidth = this.$el.width();

      this.$el.width(objectWidth)

      this.$wrapper = this.$el
        .wrap("<div class='emojiPickerIconWrap'></div>")
        .parent()

      if (this.settings.button) {
        this.$icon = $('<div class="emojiPickerIcon"></div>')
          .height(iconHeight)
          .width(iconHeight)
          .addClass(this.settings.iconColor)
          .css('backgroundColor', this.settings.iconBackgroundColor);
          this.$wrapper.append( this.$icon );
      }

    },

    createPicker: function() {

      // Show template
      this.$picker = $( getPickerHTML() )
        .appendTo( this.$container )
        .width(this.settings.width)
        .height(this.settings.height)
        .css('z-index',10000);

      // Picker height
      this.$picker.find('section')
        .height(parseInt(this.settings.height) - 40); // 40 is height of the tabs

      // Tab size based on width
      if (this.settings.width < 240) {
        this.$picker.find('.emoji').css({'width':'1em', 'height':'1em'});
      }

    },

    listen: function() {

      // Clicking on the picker icon
      this.$wrapper.find('.emojiPickerIcon')
        .click( $.proxy(this.iconClicked, this) );

      // Click event for emoji
      this.$picker.find('section div')
        .click( $.proxy(this.emojiClicked, this) );

      // Click event for active tab
      this.$picker.find('nav .tab')
        .click( $.proxy(this.emojiCategoryClicked, this) );

      this.$picker.click( $.proxy(this.pickerClicked, this) );

      $(document.body).click( $.proxy(this.clickOutside, this) );
    },

    updatePosition: function() {
      var top, left;
      if (this.settings.container === 'body') {
          top = this.$el.offset().top + this.$el.height();
          left = this.$el.offset().left;
      }
      else {
          top = this.$el.position().top + this.$el.height();
          left = this.$el.position().left;
      }

      // Picker position
      // switch(this.settings.position) {
      //   case 'top':
      //     var top = parseInt(this.settings.height) + 20;
      //     this.$pickerWrap.css({'top': -top + 'px', 'right':'0'});
      //     break;
      //   case 'bottom':
      //     this.$pickerWrap.css({'right':'0'});
      //     break;
      //   case 'left':
      //     var left = this.$icon.width() + 10;
      //     this.$pickerWrap.css({'top':'-10px', 'right': left + 'px'});
      //     break;
      //   case 'right':
      //     var right = parseInt(this.settings.width) + this.$icon.width() - 30;
      //     this.$pickerWrap.css({'top':'-10px', 'right': -right + 'px'});
      //     break;
      // }

      this.$picker.css({
          top: top + 15,
          left: left + this.$el.outerWidth() - this.settings.width
      });
      return this;
    },

    hide: function() {
      this.$picker.hide(this.settings.fadeTime, 'linear', function() {
        this.active = false;
      }.bind(this));
    },

    show: function() {
      this.$el.focus();
      this.updatePosition();
      this.$picker.show(this.settings.fadeTime, 'linear', function() {
        this.active = true;
      }.bind(this));
    },

    /************
     *  EVENTS  *
     ************/

    iconClicked : function(e) {
      if ( this.$picker.is(':hidden') ) {
        this.show();
      } else {
        this.hide();
      }
    },

    emojiClicked: function(e) {
      var emojiShortcode = $(e.target).attr('class').split('emoji-')[1];
      var emojiUnicode = toUnicode(findEmoji(emojiShortcode).unicode);

      insertAtCaret(this.element, emojiUnicode);
    },

    emojiCategoryClicked: function(e) {
      var section = '';

      // Update tab
      this.$picker.find('nav .tab').removeClass('active');
      if ($(e.target).parent().hasClass('tab')) {
        section = $(e.target).parent().attr('data-tab');
        $(e.target).parent('.tab').addClass('active');
      } else {
        section = $(e.target).attr('data-tab');
        $(e.target).addClass('active');
      }

      // Update section
      this.$picker.find('section').addClass('hidden');//.hide();
      this.$picker.find('section.' + section).removeClass('hidden');//.show();
    },

    pickerClicked: function(e) {
      e.stopPropagation();
    },

    clickOutside: function(e) {
      if ( this.active ) {
        this.hide();
      }
    }

  });

  $.fn[ pluginName ] = function ( options ) {

    // Calling a function
    if (typeof options === 'string') {
      this.each(function() {
        var plugin = $.data( this, pluginName );
        switch(options) {
          case 'toggle':
            plugin.iconClicked();
          break;
        }
      });
      return this;
    }

    this.each(function() {
      // Don't attach to the same element twice
      if ( !$.data( this, pluginName ) ) {
        $.data( this, pluginName, new Plugin( this, options ) );
      }
    });
    return this;
  };

  /* ---------------------------------------------------------------------- */

  function getPickerHTML() {
    var nodes = [];
    var categories = [
      { name: 'emotion',  symbol: 'grinning' },
      { name: 'animal',   symbol: 'whale' },
      { name: 'food',     symbol: 'hamburger' },
      { name: 'folderol', symbol: 'sunny' },
      { name: 'thing',    symbol: 'kiss' },
      { name: 'travel',   symbol: 'rocket' }
    ];
    var aliases = {
      'people':    'emotion',
      'symbol':    'thing',
      'undefined': 'thing'
    }
    var items = {};

    // Re-Sort Emoji table
    $.each($.fn.emojiPicker.emojis, function(i, emoji) {
      var category = aliases[ emoji.category ] || emoji.category;
      items[ category ] = items[ category ] || [];
      items[ category ].push( emoji );
    });

    nodes.push('<div class="emojiPicker">');
    nodes.push('<nav>');
    for (var i in categories) {
      nodes.push('<div class="tab' +
      ( i == 0 ? ' active' : '' ) +
      '" data-tab="' +
      categories[i].name +
      '"><div class="emoji emoji-' +
      categories[i].symbol +
      '"></div></div>');
    }
    nodes.push('</nav>');
    for (var i in categories) {
      nodes.push('<section class="' +
        categories[i].name +
        ( i == 0 ? '' : ' hidden' ) +
        '">');
      for (var j in items[ categories[i].name ] ) {
        var emoji = items[ categories[i].name ][ j ];
        nodes.push('<div class="emoji emoji-' + emoji.shortcode + '"></div>');
      }
      nodes.push('</section>');
    }
    nodes.push('</div>');
    return nodes.join("\n");
  }

  function findEmoji(emojiShortcode) {
    var emojis = $.fn.emojiPicker.emojis;
    for (var i = 0; i < emojis.length; i++) {
      if (emojis[i].shortcode == emojiShortcode) {
        return emojis[i];
      }
    }
  }

  function insertAtCaret(inputField, myValue) {
    if (document.selection) {
      //For browsers like Internet Explorer
      inputField.focus();
      var sel = document.selection.createRange();
      sel.text = myValue;
      inputField.focus();
    }
    else if (inputField.selectionStart || inputField.selectionStart == '0') {
      //For browsers like Firefox and Webkit based
      var startPos = inputField.selectionStart;
      var endPos = inputField.selectionEnd;
      var scrollTop = inputField.scrollTop;
      inputField.value = inputField.value.substring(0, startPos)+myValue+inputField.value.substring(endPos,inputField.value.length);
      inputField.focus();
      inputField.selectionStart = startPos + myValue.length;
      inputField.selectionEnd = startPos + myValue.length;
      inputField.scrollTop = scrollTop;
    } else {
      inputField.focus();
      inputField.value += myValue;
    }
  }

  function toUnicode(code) {
    var codes = code.split('-').map(function(value, index) {
      return parseInt(value, 16);
    });
    return String.fromCodePoint.apply(null, codes);
  }

  if (!String.fromCodePoint) {
    // ES6 Unicode Shims 0.1 , © 2012 Steven Levithan http://slevithan.com/ , MIT License
    String.fromCodePoint = function fromCodePoint () {
        var chars = [], point, offset, units, i;
        for (i = 0; i < arguments.length; ++i) {
            point = arguments[i];
            offset = point - 0x10000;
            units = point > 0xFFFF ? [0xD800 + (offset >> 10), 0xDC00 + (offset & 0x3FF)] : [point];
            chars.push(String.fromCharCode.apply(null, units));
        }
        return chars.join("");
    }
  }

})(jQuery);
;
/*--- END: /home/kinkeaca/public_html/plugins/emoji-picker/js/jquery.emojipicker.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/plugins/emoji-picker/js/jquery.emojipicker.tw.js---*/
$(function() {
$.fn.emojiPicker.emojis = [
  {
    "name": "bangbang",
    "unicode": "203C",
    "shortcode": "bangbang",
    "description": "DOUBLE EXCLAMATION MARK",
    "category": "symbol"
  },
  {
    "name": "interrobang",
    "unicode": "2049",
    "shortcode": "interrobang",
    "description": "EXCLAMATION QUESTION MARK",
    "category": "folderol"
  },
  {
    "name": "tm",
    "unicode": "2122",
    "shortcode": "tm",
    "description": "TRADE MARK SIGN",
    "category": "folderol"
  },
  {
    "name": "information_source",
    "unicode": "2139",
    "shortcode": "information_source",
    "description": "INFORMATION SOURCE",
    "category": "folderol"
  },
  {
    "name": "left_right_arrow",
    "unicode": "2194",
    "shortcode": "left_right_arrow",
    "description": "LEFT RIGHT ARROW",
    "category": "folderol"
  },
  {
    "name": "arrow_up_down",
    "unicode": "2195",
    "shortcode": "arrow_up_down",
    "description": "UP DOWN ARROW",
    "category": "folderol"
  },
  {
    "name": "arrow_upper_left",
    "unicode": "2196",
    "shortcode": "arrow_upper_left",
    "description": "NORTH WEST ARROW",
    "category": "folderol"
  },
  {
    "name": "arrow_upper_right",
    "unicode": "2197",
    "shortcode": "arrow_upper_right",
    "description": "NORTH EAST ARROW",
    "category": "folderol"
  },
  {
    "name": "arrow_lower_right",
    "unicode": "2198",
    "shortcode": "arrow_lower_right",
    "description": "SOUTH EAST ARROW",
    "category": "folderol"
  },
  {
    "name": "arrow_lower_left",
    "unicode": "2199",
    "shortcode": "arrow_lower_left",
    "description": "SOUTH WEST ARROW",
    "category": "folderol"
  },
  {
    "name": "leftwards_arrow_with_hook",
    "unicode": "21A9",
    "shortcode": "leftwards_arrow_with_hook",
    "description": "LEFTWARDS ARROW WITH HOOK",
    "category": "folderol"
  },
  {
    "name": "arrow_right_hook",
    "unicode": "21AA",
    "shortcode": "arrow_right_hook",
    "description": "RIGHTWARDS ARROW WITH HOOK",
    "category": "folderol"
  },
  {
    "name": "watch",
    "unicode": "231A",
    "shortcode": "watch",
    "description": "WATCH",
    "category": "thing"
  },
  {
    "name": "hourglass",
    "unicode": "231B",
    "shortcode": "hourglass",
    "description": "HOURGLASS",
    "category": "thing"
  },
  {
    "name": "fast_forward",
    "unicode": "23E9",
    "shortcode": "fast_forward",
    "description": "BLACK RIGHT-POINTING DOUBLE TRIANGLE"
  },
  {
    "name": "rewind",
    "unicode": "23EA",
    "shortcode": "rewind",
    "description": "BLACK LEFT-POINTING DOUBLE TRIANGLE",
    "category": "thing"
  },
  {
    "name": "arrow_double_up",
    "unicode": "23EB",
    "shortcode": "arrow_double_up",
    "description": "BLACK UP-POINTING DOUBLE TRIANGLE",
    "category": "folderol"
  },
  {
    "name": "arrow_double_down",
    "unicode": "23EC",
    "shortcode": "arrow_double_down",
    "description": "BLACK DOWN-POINTING DOUBLE TRIANGLE",
    "category": "folderol"
  },
  {
    "name": "alarm_clock",
    "unicode": "23F0",
    "shortcode": "alarm_clock",
    "description": "ALARM CLOCK",
    "category": "thing"
  },
  {
    "name": "hourglass_flowing_sand",
    "unicode": "23F3",
    "shortcode": "hourglass_flowing_sand",
    "description": "HOURGLASS WITH FLOWING SAND",
    "category": "thing"
  },
  {
    "name": "m",
    "unicode": "24C2",
    "shortcode": "m",
    "description": "CIRCLED LATIN CAPITAL LETTER M",
    "category": "folderol"
  },
  {
    "name": "black_small_square",
    "unicode": "25AA",
    "shortcode": "black_small_square",
    "description": "BLACK SMALL SQUARE",
    "category": "folderol"
  },
  {
    "name": "white_small_square",
    "unicode": "25AB",
    "shortcode": "white_small_square",
    "description": "WHITE SMALL SQUARE",
    "category": "folderol"
  },
  {
    "name": "arrow_forward",
    "unicode": "25B6",
    "shortcode": "arrow_forward",
    "description": "BLACK RIGHT-POINTING TRIANGLE",
    "category": "folderol"
  },
  {
    "name": "arrow_backward",
    "unicode": "25C0",
    "shortcode": "arrow_backward",
    "description": "BLACK LEFT-POINTING TRIANGLE",
    "category": "folderol"
  },
  {
    "name": "white_medium_square",
    "unicode": "25FB",
    "shortcode": "white_medium_square",
    "description": "WHITE MEDIUM SQUARE",
    "category": "folderol"
  },
  {
    "name": "black_medium_square",
    "unicode": "25FC",
    "shortcode": "black_medium_square",
    "description": "BLACK MEDIUM SQUARE",
    "category": "folderol"
  },
  {
    "name": "white_medium_small_square",
    "unicode": "25FD",
    "shortcode": "white_medium_small_square",
    "description": "WHITE MEDIUM SMALL SQUARE",
    "category": "folderol"
  },
  {
    "name": "black_medium_small_square",
    "unicode": "25FE",
    "shortcode": "black_medium_small_square",
    "description": "BLACK MEDIUM SMALL SQUARE",
    "category": "folderol"
  },
  {
    "name": "sunny",
    "unicode": "2600",
    "shortcode": "sunny",
    "description": "BLACK SUN WITH RAYS",
    "category": "thing"
  },
  {
    "name": "cloud",
    "unicode": "2601",
    "shortcode": "cloud",
    "description": "CLOUD",
    "category": "thing"
  },
  {
    "name": "phone",
    "unicode": "260E",
    "shortcode": "phone",
    "description": "BLACK TELEPHONE",
    "category": "thing"
  },
  {
    "name": "ballot_box_with_check",
    "unicode": "2611",
    "shortcode": "ballot_box_with_check",
    "description": "BALLOT BOX WITH CHECK",
    "category": "thing"
  },
  {
    "name": "umbrella",
    "unicode": "2614",
    "shortcode": "umbrella",
    "description": "UMBRELLA WITH RAIN DROPS",
    "category": "thing"
  },
  {
    "name": "coffee",
    "unicode": "2615",
    "shortcode": "coffee",
    "description": "HOT BEVERAGE",
    "category": "thing"
  },
  {
    "name": "point_up",
    "unicode": "261D",
    "shortcode": "point_up",
    "description": "WHITE UP POINTING INDEX",
    "category": "people"
  },
  {
    "name": "relaxed",
    "unicode": "263A",
    "shortcode": "relaxed",
    "description": "WHITE SMILING FACE",
    "category": "emotion"
  },
  {
    "name": "aries",
    "unicode": "2648",
    "shortcode": "aries",
    "description": "ARIES",
    "category": "folderol"
  },
  {
    "name": "taurus",
    "unicode": "2649",
    "shortcode": "taurus",
    "description": "TAURUS",
    "category": "folderol"
  },
  {
    "name": "gemini",
    "unicode": "264A",
    "shortcode": "gemini",
    "description": "GEMINI",
    "category": "folderol"
  },
  {
    "name": "cancer",
    "unicode": "264B",
    "shortcode": "cancer",
    "description": "CANCER",
    "category": "folderol"
  },
  {
    "name": "leo",
    "unicode": "264C",
    "shortcode": "leo",
    "description": "LEO",
    "category": "folderol"
  },
  {
    "name": "virgo",
    "unicode": "264D",
    "shortcode": "virgo",
    "description": "VIRGO",
    "category": "folderol"
  },
  {
    "name": "libra",
    "unicode": "264E",
    "shortcode": "libra",
    "description": "LIBRA",
    "category": "folderol"
  },
  {
    "name": "scorpius",
    "unicode": "264F",
    "shortcode": "scorpius",
    "description": "SCORPIUS",
    "category": "folderol"
  },
  {
    "name": "sagittarius",
    "unicode": "2650",
    "shortcode": "sagittarius",
    "description": "SAGITTARIUS",
    "category": "folderol"
  },
  {
    "name": "capricorn",
    "unicode": "2651",
    "shortcode": "capricorn",
    "description": "CAPRICORN",
    "category": "folderol"
  },
  {
    "name": "aquarius",
    "unicode": "2652",
    "shortcode": "aquarius",
    "description": "AQUARIUS",
    "category": "folderol"
  },
  {
    "name": "pisces",
    "unicode": "2653",
    "shortcode": "pisces",
    "description": "PISCES",
    "category": "folderol"
  },
  {
    "name": "spades",
    "unicode": "2660",
    "shortcode": "spades",
    "description": "BLACK SPADE SUIT",
    "category": "folderol"
  },
  {
    "name": "clubs",
    "unicode": "2663",
    "shortcode": "clubs",
    "description": "BLACK CLUB SUIT",
    "category": "folderol"
  },
  {
    "name": "hearts",
    "unicode": "2665",
    "shortcode": "hearts",
    "description": "BLACK HEART SUIT",
    "category": "folderol"
  },
  {
    "name": "diamonds",
    "unicode": "2666",
    "shortcode": "diamonds",
    "description": "BLACK DIAMOND SUIT",
    "category": "folderol"
  },
  {
    "name": "hotsprings",
    "unicode": "2668",
    "shortcode": "hotsprings",
    "description": "HOT SPRINGS",
    "category": "thing"
  },
  {
    "name": "recycle",
    "unicode": "267B",
    "shortcode": "recycle",
    "description": "BLACK UNIVERSAL RECYCLING SYMBOL",
    "category": "folderol"
  },
  {
    "name": "wheelchair",
    "unicode": "267F",
    "shortcode": "wheelchair",
    "description": "WHEELCHAIR SYMBOL",
    "category": "thing"
  },
  {
    "name": "anchor",
    "unicode": "2693",
    "shortcode": "anchor",
    "description": "ANCHOR",
    "category": "thing"
  },
  {
    "name": "warning",
    "unicode": "26A0",
    "shortcode": "warning",
    "description": "WARNING SIGN",
    "category": "thing"
  },
  {
    "name": "zap",
    "unicode": "26A1",
    "shortcode": "zap",
    "description": "HIGH VOLTAGE SIGN",
    "category": "thing"
  },
  {
    "name": "white_circle",
    "unicode": "26AA",
    "shortcode": "white_circle",
    "description": "MEDIUM WHITE CIRCLE",
    "category": "folderol"
  },
  {
    "name": "black_circle",
    "unicode": "26AB",
    "shortcode": "black_circle",
    "description": "MEDIUM BLACK CIRCLE",
    "category": "folderol"
  },
  {
    "name": "soccer",
    "unicode": "26BD",
    "shortcode": "soccer",
    "description": "SOCCER BALL",
    "category": "thing"
  },
  {
    "name": "baseball",
    "unicode": "26BE",
    "shortcode": "baseball",
    "description": "BASEBALL",
    "category": "thing"
  },
  {
    "name": "snowman",
    "unicode": "26C4",
    "shortcode": "snowman",
    "description": "SNOWMAN WITHOUT SNOW",
    "category": "thing"
  },
  {
    "name": "partly_sunny",
    "unicode": "26C5",
    "shortcode": "partly_sunny",
    "description": "SUN BEHIND CLOUD",
    "category": "thing"
  },
  {
    "name": "ophiuchus",
    "unicode": "26CE",
    "shortcode": "ophiuchus",
    "description": "OPHIUCHUS",
    "category": "folderol"
  },
  {
    "name": "no_entry",
    "unicode": "26D4",
    "shortcode": "no_entry",
    "description": "NO ENTRY",
    "category": "folderol"
  },
  {
    "name": "church",
    "unicode": "26EA",
    "shortcode": "church",
    "description": "CHURCH",
    "category": "travel"
  },
  {
    "name": "fountain",
    "unicode": "26F2",
    "shortcode": "fountain",
    "description": "FOUNTAIN",
    "category": "travel"
  },
  {
    "name": "golf",
    "unicode": "26F3",
    "shortcode": "golf",
    "description": "FLAG IN HOLE",
    "category": "travel"
  },
  {
    "name": "boat",
    "unicode": "26F5",
    "shortcode": "boat",
    "description": "SAILBOAT",
    "category": "travel"
  },
  {
    "name": "tent",
    "unicode": "26FA",
    "shortcode": "tent",
    "description": "TENT",
    "category": "travel"
  },
  {
    "name": "fuelpump",
    "unicode": "26FD",
    "shortcode": "fuelpump",
    "description": "FUEL PUMP",
    "category": "travel"
  },
  {
    "name": "scissors",
    "unicode": "2702",
    "shortcode": "scissors",
    "description": "BLACK SCISSORS",
    "category": "thing"
  },
  {
    "name": "white_check_mark",
    "unicode": "2705",
    "shortcode": "white_check_mark",
    "description": "WHITE HEAVY CHECK MARK",
    "category": "folderol"
  },
  {
    "name": "airplane",
    "unicode": "2708",
    "shortcode": "airplane",
    "description": "AIRPLANE",
    "category": "thing"
  },
  {
    "name": "email",
    "unicode": "2709",
    "shortcode": "email",
    "description": "ENVELOPE",
    "category": "thing"
  },
  {
    "name": "fist",
    "unicode": "270A",
    "shortcode": "fist",
    "description": "RAISED FIST",
    "category": "people"
  },
  {
    "name": "hand",
    "unicode": "270B",
    "shortcode": "hand",
    "description": "RAISED HAND",
    "category": "people"
  },
  {
    "name": "v",
    "unicode": "270C",
    "shortcode": "v",
    "description": "VICTORY HAND",
    "category": "folderol"
  },
  {
    "name": "pencil2",
    "unicode": "270F",
    "shortcode": "pencil2",
    "description": "PENCIL",
    "category": "thing"
  },
  {
    "name": "black_nib",
    "unicode": "2712",
    "shortcode": "black_nib",
    "description": "BLACK NIB",
    "category": "folderol"
  },
  {
    "name": "heavy_check_mark",
    "unicode": "2714",
    "shortcode": "heavy_check_mark",
    "description": "HEAVY CHECK MARK",
    "category": "folderol"
  },
  {
    "name": "heavy_multiplication_x",
    "unicode": "2716",
    "shortcode": "heavy_multiplication_x",
    "description": "HEAVY MULTIPLICATION X",
    "category": "folderol"
  },
  {
    "name": "sparkles",
    "unicode": "2728",
    "shortcode": "sparkles",
    "description": "SPARKLES",
    "category": "folderol"
  },
  {
    "name": "eight_spoked_asterisk",
    "unicode": "2733",
    "shortcode": "eight_spoked_asterisk",
    "description": "EIGHT SPOKED ASTERISK",
    "category": "folderol"
  },
  {
    "name": "eight_pointed_black_star",
    "unicode": "2734",
    "shortcode": "eight_pointed_black_star",
    "description": "EIGHT POINTED BLACK STAR",
    "category": "folderol"
  },
  {
    "name": "snowflake",
    "unicode": "2744",
    "shortcode": "snowflake",
    "description": "SNOWFLAKE",
    "category": "thing"
  },
  {
    "name": "sparkle",
    "unicode": "2747",
    "shortcode": "sparkle",
    "description": "SPARKLE",
    "category": "thing"
  },
  {
    "name": "x",
    "unicode": "274C",
    "shortcode": "x",
    "description": "CROSS MARK",
    "category": "folderol"
  },
  {
    "name": "negative_squared_cross_mark",
    "unicode": "274E",
    "shortcode": "negative_squared_cross_mark",
    "description": "NEGATIVE SQUARED CROSS MARK",
    "category": "folderol"
  },
  {
    "name": "question",
    "unicode": "2753",
    "shortcode": "question",
    "description": "BLACK QUESTION MARK ORNAMENT",
    "category": "folderol"
  },
  {
    "name": "grey_question",
    "unicode": "2754",
    "shortcode": "grey_question",
    "description": "WHITE QUESTION MARK ORNAMENT",
    "category": "folderol"
  },
  {
    "name": "grey_exclamation",
    "unicode": "2755",
    "shortcode": "grey_exclamation",
    "description": "WHITE EXCLAMATION MARK ORNAMENT",
    "category": "folderol"
  },
  {
    "name": "exclamation",
    "unicode": "2757",
    "shortcode": "exclamation",
    "description": "HEAVY EXCLAMATION MARK SYMBOL",
    "category": "folderol"
  },
  {
    "name": "heart",
    "unicode": "2764",
    "shortcode": "heart",
    "description": "HEAVY BLACK HEART",
    "category": "folderol"
  },
  {
    "name": "heavy_plus_sign",
    "unicode": "2795",
    "shortcode": "heavy_plus_sign",
    "description": "HEAVY PLUS SIGN",
    "category": "folderol"
  },
  {
    "name": "heavy_minus_sign",
    "unicode": "2796",
    "shortcode": "heavy_minus_sign",
    "description": "HEAVY MINUS SIGN",
    "category": "folderol"
  },
  {
    "name": "heavy_division_sign",
    "unicode": "2797",
    "shortcode": "heavy_division_sign",
    "description": "HEAVY DIVISION SIGN",
    "category": "folderol"
  },
  {
    "name": "arrow_right",
    "unicode": "27A1",
    "shortcode": "arrow_right",
    "description": "BLACK RIGHTWARDS ARROW",
    "category": "folderol"
  },
  {
    "name": "curly_loop",
    "unicode": "27B0",
    "shortcode": "curly_loop",
    "description": "CURLY LOOP",
    "category": "folderol"
  },
  {
    "name": "loop",
    "unicode": "27BF",
    "shortcode": "loop",
    "description": "DOUBLE CURLY LOOP",
    "category": "folderol"
  },
  {
    "name": "arrow_heading_up",
    "unicode": "2934",
    "shortcode": "arrow_heading_up",
    "description": "ARROW POINTING RIGHTWARDS THEN CURVING UPWARDS",
    "category": "folderol"
  },
  {
    "name": "arrow_heading_down",
    "unicode": "2935",
    "shortcode": "arrow_heading_down",
    "description": "ARROW POINTING RIGHTWARDS THEN CURVING DOWNWARDS",
    "category": "folderol"
  },
  {
    "name": "arrow_left",
    "unicode": "2B05",
    "shortcode": "arrow_left",
    "description": "LEFTWARDS BLACK ARROW",
    "category": "folderol"
  },
  {
    "name": "arrow_up",
    "unicode": "2B06",
    "shortcode": "arrow_up",
    "description": "UPWARDS BLACK ARROW",
    "category": "folderol"
  },
  {
    "name": "arrow_down",
    "unicode": "2B07",
    "shortcode": "arrow_down",
    "description": "DOWNWARDS BLACK ARROW",
    "category": "folderol"
  },
  {
    "name": "black_large_square",
    "unicode": "2B1B",
    "shortcode": "black_large_square",
    "description": "BLACK LARGE SQUARE",
    "category": "folderol"
  },
  {
    "name": "white_large_square",
    "unicode": "2B1C",
    "shortcode": "white_large_square",
    "description": "WHITE LARGE SQUARE",
    "category": "folderol"
  },
  {
    "name": "star",
    "unicode": "2B50",
    "shortcode": "star",
    "description": "WHITE MEDIUM STAR",
    "category": "thing"
  },
  {
    "name": "o",
    "unicode": "2B55",
    "shortcode": "o",
    "description": "HEAVY LARGE CIRCLE",
    "category": "folderol"
  },
  {
    "name": "wavy_dash",
    "unicode": "3030",
    "shortcode": "wavy_dash",
    "description": "WAVY DASH",
    "category": "folderol"
  },
  {
    "name": "part_alternation_mark",
    "unicode": "303D",
    "shortcode": "part_alternation_mark",
    "description": "PART ALTERNATION MARK",
    "category": "folderol"
  },
  {
    "name": "congratulations",
    "unicode": "3297",
    "shortcode": "congratulations",
    "description": "CIRCLED IDEOGRAPH CONGRATULATION",
    "category": "folderol"
  },
  {
    "name": "secret",
    "unicode": "3299",
    "shortcode": "secret",
    "description": "CIRCLED IDEOGRAPH SECRET",
    "category": "folderol"
  },
  {
    "name": "mahjong",
    "unicode": "1F004",
    "shortcode": "mahjong",
    "description": "MAHJONG TILE RED DRAGON",
    "category": "folderol"
  },
  {
    "name": "black_joker",
    "unicode": "1F0CF",
    "shortcode": "black_joker",
    "description": "PLAYING CARD BLACK JOKER",
    "category": "folderol"
  },
  {
    "name": "a",
    "unicode": "1F170",
    "shortcode": "a",
    "description": "NEGATIVE SQUARED LATIN CAPITAL LETTER A",
    "category": "folderol"
  },
  {
    "name": "b",
    "unicode": "1F171",
    "shortcode": "b",
    "description": "NEGATIVE SQUARED LATIN CAPITAL LETTER B",
    "category": "folderol"
  },
  {
    "name": "o2",
    "unicode": "1F17E",
    "shortcode": "o2",
    "description": "NEGATIVE SQUARED LATIN CAPITAL LETTER O",
    "category": "folderol"
  },
  {
    "name": "parking",
    "unicode": "1F17F",
    "shortcode": "parking",
    "description": "NEGATIVE SQUARED LATIN CAPITAL LETTER P",
    "category": "folderol"
  },
  {
    "name": "ab",
    "unicode": "1F18E",
    "shortcode": "ab",
    "description": "NEGATIVE SQUARED AB",
    "category": "folderol"
  },
  {
    "name": "cl",
    "unicode": "1F191",
    "shortcode": "cl",
    "description": "SQUARED CL",
    "category": "folderol"
  },
  {
    "name": "cool",
    "unicode": "1F192",
    "shortcode": "cool",
    "description": "SQUARED COOL",
    "category": "folderol"
  },
  {
    "name": "free",
    "unicode": "1F193",
    "shortcode": "free",
    "description": "SQUARED FREE",
    "category": "folderol"
  },
  {
    "name": "id",
    "unicode": "1F194",
    "shortcode": "id",
    "description": "SQUARED ID",
    "category": "folderol"
  },
  {
    "name": "new",
    "unicode": "1F195",
    "shortcode": "new",
    "description": "SQUARED NEW",
    "category": "folderol"
  },
  {
    "name": "ng",
    "unicode": "1F196",
    "shortcode": "ng",
    "description": "SQUARED NG",
    "category": "folderol"
  },
  {
    "name": "ok",
    "unicode": "1F197",
    "shortcode": "ok",
    "description": "SQUARED OK",
    "category": "folderol"
  },
  {
    "name": "sos",
    "unicode": "1F198",
    "shortcode": "sos",
    "description": "SQUARED SOS",
    "category": "folderol"
  },
  {
    "name": "up",
    "unicode": "1F199",
    "shortcode": "up",
    "description": "SQUARED UP WITH EXCLAMATION MARK",
    "category": "folderol"
  },
  {
    "name": "vs",
    "unicode": "1F19A",
    "shortcode": "vs",
    "description": "SQUARED VS",
    "category": "folderol"
  },
  {
    "name": "koko",
    "unicode": "1F201",
    "shortcode": "koko",
    "description": "SQUARED KATAKANA KOKO",
    "category": "folderol"
  },
  {
    "name": "sa",
    "unicode": "1F202",
    "shortcode": "sa",
    "description": "SQUARED KATAKANA SA",
    "category": "folderol"
  },
  {
    "name": "u7121",
    "unicode": "1F21A",
    "shortcode": "u7121",
    "description": "SQUARED CJK UNIFIED IDEOGRAPH-7121",
    "category": "folderol"
  },
  {
    "name": "u6307",
    "unicode": "1F22F",
    "shortcode": "u6307",
    "description": "SQUARED CJK UNIFIED IDEOGRAPH-6307",
    "category": "folderol"
  },
  {
    "name": "u7981",
    "unicode": "1F232",
    "shortcode": "u7981",
    "description": "SQUARED CJK UNIFIED IDEOGRAPH-7981",
    "category": "folderol"
  },
  {
    "name": "u7a7a",
    "unicode": "1F233",
    "shortcode": "u7a7a",
    "description": "SQUARED CJK UNIFIED IDEOGRAPH-7A7A",
    "category": "folderol"
  },
  {
    "name": "u5408",
    "unicode": "1F234",
    "shortcode": "u5408",
    "description": "SQUARED CJK UNIFIED IDEOGRAPH-5408",
    "category": "folderol"
  },
  {
    "name": "u6e80",
    "unicode": "1F235",
    "shortcode": "u6e80",
    "description": "SQUARED CJK UNIFIED IDEOGRAPH-6E80",
    "category": "folderol"
  },
  {
    "name": "u6709",
    "unicode": "1F236",
    "shortcode": "u6709",
    "description": "SQUARED CJK UNIFIED IDEOGRAPH-6709",
    "category": "folderol"
  },
  {
    "name": "u6708",
    "unicode": "1F237",
    "shortcode": "u6708",
    "description": "SQUARED CJK UNIFIED IDEOGRAPH-6708",
    "category": "folderol"
  },
  {
    "name": "u7533",
    "unicode": "1F238",
    "shortcode": "u7533",
    "description": "SQUARED CJK UNIFIED IDEOGRAPH-7533",
    "category": "folderol"
  },
  {
    "name": "u5272",
    "unicode": "1F239",
    "shortcode": "u5272",
    "description": "SQUARED CJK UNIFIED IDEOGRAPH-5272",
    "category": "folderol"
  },
  {
    "name": "u55b6",
    "unicode": "1F23A",
    "shortcode": "u55b6",
    "description": "SQUARED CJK UNIFIED IDEOGRAPH-55B6",
    "category": "folderol"
  },
  {
    "name": "ideograph_advantage",
    "unicode": "1F250",
    "shortcode": "ideograph_advantage",
    "description": "CIRCLED IDEOGRAPH ADVANTAGE",
    "category": "folderol"
  },
  {
    "name": "accept",
    "unicode": "1F251",
    "shortcode": "accept",
    "description": "CIRCLED IDEOGRAPH ACCEPT",
    "category": "folderol"
  },
  {
    "name": "cyclone",
    "unicode": "1F300",
    "shortcode": "cyclone",
    "description": "CYCLONE",
    "category": "thing"
  },
  {
    "name": "foggy",
    "unicode": "1F301",
    "shortcode": "foggy",
    "description": "FOGGY",
    "category": "thing"
  },
  {
    "name": "closed_umbrella",
    "unicode": "1F302",
    "shortcode": "closed_umbrella",
    "description": "CLOSED UMBRELLA",
    "category": "thing"
  },
  {
    "name": "night_with_stars",
    "unicode": "1F303",
    "shortcode": "night_with_stars",
    "description": "NIGHT WITH STARS",
    "category": "thing"
  },
  {
    "name": "sunrise_over_mountains",
    "unicode": "1F304",
    "shortcode": "sunrise_over_mountains",
    "description": "SUNRISE OVER MOUNTAINS",
    "category": "thing"
  },
  {
    "name": "sunrise",
    "unicode": "1F305",
    "shortcode": "sunrise",
    "description": "SUNRISE",
    "category": "thing"
  },
  {
    "name": "city_sunset",
    "unicode": "1F306",
    "shortcode": "city_sunset",
    "description": "CITYSCAPE AT DUSK",
    "category": "thing"
  },
  {
    "name": "city_sunrise",
    "unicode": "1F307",
    "shortcode": "city_sunrise",
    "description": "SUNSET OVER BUILDINGS",
    "category": "thing"
  },
  {
    "name": "rainbow",
    "unicode": "1F308",
    "shortcode": "rainbow",
    "description": "RAINBOW",
    "category": "thing"
  },
  {
    "name": "bridge_at_night",
    "unicode": "1F309",
    "shortcode": "bridge_at_night",
    "description": "BRIDGE AT NIGHT",
    "category": "thing"
  },
  {
    "name": "ocean",
    "unicode": "1F30A",
    "shortcode": "ocean",
    "description": "WATER WAVE",
    "category": "thing"
  },
  {
    "name": "volcano",
    "unicode": "1F30B",
    "shortcode": "volcano",
    "description": "VOLCANO",
    "category": "thing"
  },
  {
    "name": "milky_way",
    "unicode": "1F30C",
    "shortcode": "milky_way",
    "description": "MILKY WAY",
    "category": "thing"
  },
  {
    "name": "earth_africa",
    "unicode": "1F30D",
    "shortcode": "earth_africa",
    "description": "EARTH GLOBE EUROPE-AFRICA",
    "category": "thing"
  },
  {
    "name": "earth_americas",
    "unicode": "1F30E",
    "shortcode": "earth_americas",
    "description": "EARTH GLOBE AMERICAS",
    "category": "thing"
  },
  {
    "name": "earth_asia",
    "unicode": "1F30F",
    "shortcode": "earth_asia",
    "description": "EARTH GLOBE ASIA-AUSTRALIA",
    "category": "thing"
  },
  {
    "name": "globe_with_meridians",
    "unicode": "1F310",
    "shortcode": "globe_with_meridians",
    "description": "GLOBE WITH MERIDIANS",
    "category": "thing"
  },
  {
    "name": "new_moon",
    "unicode": "1F311",
    "shortcode": "new_moon",
    "description": "NEW MOON SYMBOL",
    "category": "thing"
  },
  {
    "name": "waxing_crescent_moon",
    "unicode": "1F312",
    "shortcode": "waxing_crescent_moon",
    "description": "WAXING CRESCENT MOON SYMBOL",
    "category": "thing"
  },
  {
    "name": "first_quarter_moon",
    "unicode": "1F313",
    "shortcode": "first_quarter_moon",
    "description": "FIRST QUARTER MOON SYMBOL",
    "category": "thing"
  },
  {
    "name": "moon",
    "unicode": "1F314",
    "shortcode": "moon",
    "description": "WAXING GIBBOUS MOON SYMBOL",
    "category": "thing"
  },
  {
    "name": "full_moon",
    "unicode": "1F315",
    "shortcode": "full_moon",
    "description": "FULL MOON SYMBOL",
    "category": "thing"
  },
  {
    "name": "waning_gibbous_moon",
    "unicode": "1F316",
    "shortcode": "waning_gibbous_moon",
    "description": "WANING GIBBOUS MOON SYMBOL",
    "category": "thing"
  },
  {
    "name": "last_quarter_moon",
    "unicode": "1F317",
    "shortcode": "last_quarter_moon",
    "description": "LAST QUARTER MOON SYMBOL",
    "category": "thing"
  },
  {
    "name": "waning_crescent_moon",
    "unicode": "1F318",
    "shortcode": "waning_crescent_moon",
    "description": "WANING CRESCENT MOON SYMBOL",
    "category": "thing"
  },
  {
    "name": "crescent_moon",
    "unicode": "1F319",
    "shortcode": "crescent_moon",
    "description": "CRESCENT MOON",
    "category": "thing"
  },
  {
    "name": "new_moon_with_face",
    "unicode": "1F31A",
    "shortcode": "new_moon_with_face",
    "description": "NEW MOON WITH FACE",
    "category": "thing"
  },
  {
    "name": "first_quarter_moon_with_face",
    "unicode": "1F31B",
    "shortcode": "first_quarter_moon_with_face",
    "description": "FIRST QUARTER MOON WITH FACE",
    "category": "thing"
  },
  {
    "name": "last_quarter_moon_with_face",
    "unicode": "1F31C",
    "shortcode": "last_quarter_moon_with_face",
    "description": "LAST QUARTER MOON WITH FACE",
    "category": "thing"
  },
  {
    "name": "full_moon_with_face",
    "unicode": "1F31D",
    "shortcode": "full_moon_with_face",
    "description": "FULL MOON WITH FACE",
    "category": "thing"
  },
  {
    "name": "sun_with_face",
    "unicode": "1F31E",
    "shortcode": "sun_with_face",
    "description": "SUN WITH FACE",
    "category": "thing"
  },
  {
    "name": "star2",
    "unicode": "1F31F",
    "shortcode": "star2",
    "description": "GLOWING STAR",
    "category": "thing"
  },
  {
    "name": "stars",
    "unicode": "1F320",
    "shortcode": "stars",
    "description": "SHOOTING STAR",
    "category": "thing"
  },
  {
    "name": "chestnut",
    "unicode": "1F330",
    "shortcode": "chestnut",
    "description": "CHESTNUT",
    "category": "thing"
  },
  {
    "name": "seedling",
    "unicode": "1F331",
    "shortcode": "seedling",
    "description": "SEEDLING",
    "category": "thing"
  },
  {
    "name": "evergreen_tree",
    "unicode": "1F332",
    "shortcode": "evergreen_tree",
    "description": "EVERGREEN TREE",
    "category": "thing"
  },
  {
    "name": "deciduous_tree",
    "unicode": "1F333",
    "shortcode": "deciduous_tree",
    "description": "DECIDUOUS TREE",
    "category": "thing"
  },
  {
    "name": "palm_tree",
    "unicode": "1F334",
    "shortcode": "palm_tree",
    "description": "PALM TREE",
    "category": "thing"
  },
  {
    "name": "cactus",
    "unicode": "1F335",
    "shortcode": "cactus",
    "description": "CACTUS",
    "category": "thing"
  },
  {
    "name": "tulip",
    "unicode": "1F337",
    "shortcode": "tulip",
    "description": "TULIP",
    "category": "thing"
  },
  {
    "name": "cherry_blossom",
    "unicode": "1F338",
    "shortcode": "cherry_blossom",
    "description": "CHERRY BLOSSOM",
    "category": "thing"
  },
  {
    "name": "rose",
    "unicode": "1F339",
    "shortcode": "rose",
    "description": "ROSE",
    "category": "thing"
  },
  {
    "name": "hibiscus",
    "unicode": "1F33A",
    "shortcode": "hibiscus",
    "description": "HIBISCUS",
    "category": "thing"
  },
  {
    "name": "sunflower",
    "unicode": "1F33B",
    "shortcode": "sunflower",
    "description": "SUNFLOWER",
    "category": "thing"
  },
  {
    "name": "blossom",
    "unicode": "1F33C",
    "shortcode": "blossom",
    "description": "BLOSSOM",
    "category": "thing"
  },
  {
    "name": "corn",
    "unicode": "1F33D",
    "shortcode": "corn",
    "description": "EAR OF MAIZE",
    "category": "thing"
  },
  {
    "name": "ear_of_rice",
    "unicode": "1F33E",
    "shortcode": "ear_of_rice",
    "description": "EAR OF RICE",
    "category": "thing"
  },
  {
    "name": "herb",
    "unicode": "1F33F",
    "shortcode": "herb",
    "description": "HERB",
    "category": "thing"
  },
  {
    "name": "four_leaf_clover",
    "unicode": "1F340",
    "shortcode": "four_leaf_clover",
    "description": "FOUR LEAF CLOVER",
    "category": "thing"
  },
  {
    "name": "maple_leaf",
    "unicode": "1F341",
    "shortcode": "maple_leaf",
    "description": "MAPLE LEAF",
    "category": "thing"
  },
  {
    "name": "fallen_leaf",
    "unicode": "1F342",
    "shortcode": "fallen_leaf",
    "description": "FALLEN LEAF",
    "category": "thing"
  },
  {
    "name": "leaves",
    "unicode": "1F343",
    "shortcode": "leaves",
    "description": "LEAF FLUTTERING IN WIND",
    "category": "thing"
  },
  {
    "name": "mushroom",
    "unicode": "1F344",
    "shortcode": "mushroom",
    "description": "MUSHROOM",
    "category": "food"
  },
  {
    "name": "tomato",
    "unicode": "1F345",
    "shortcode": "tomato",
    "description": "TOMATO",
    "category": "food"
  },
  {
    "name": "eggplant",
    "unicode": "1F346",
    "shortcode": "eggplant",
    "description": "AUBERGINE",
    "category": "food"
  },
  {
    "name": "grapes",
    "unicode": "1F347",
    "shortcode": "grapes",
    "description": "GRAPES",
    "category": "food"
  },
  {
    "name": "melon",
    "unicode": "1F348",
    "shortcode": "melon",
    "description": "MELON",
    "category": "food"
  },
  {
    "name": "watermelon",
    "unicode": "1F349",
    "shortcode": "watermelon",
    "description": "WATERMELON",
    "category": "food"
  },
  {
    "name": "tangerine",
    "unicode": "1F34A",
    "shortcode": "tangerine",
    "description": "TANGERINE",
    "category": "food"
  },
  {
    "name": "lemon",
    "unicode": "1F34B",
    "shortcode": "lemon",
    "description": "LEMON",
    "category": "food"
  },
  {
    "name": "banana",
    "unicode": "1F34C",
    "shortcode": "banana",
    "description": "BANANA",
    "category": "food"
  },
  {
    "name": "pineapple",
    "unicode": "1F34D",
    "shortcode": "pineapple",
    "description": "PINEAPPLE",
    "category": "food"
  },
  {
    "name": "apple",
    "unicode": "1F34E",
    "shortcode": "apple",
    "description": "RED APPLE",
    "category": "food"
  },
  {
    "name": "green_apple",
    "unicode": "1F34F",
    "shortcode": "green_apple",
    "description": "GREEN APPLE",
    "category": "food"
  },
  {
    "name": "pear",
    "unicode": "1F350",
    "shortcode": "pear",
    "description": "PEAR",
    "category": "food"
  },
  {
    "name": "peach",
    "unicode": "1F351",
    "shortcode": "peach",
    "description": "PEACH",
    "category": "food"
  },
  {
    "name": "cherries",
    "unicode": "1F352",
    "shortcode": "cherries",
    "description": "CHERRIES",
    "category": "food"
  },
  {
    "name": "strawberry",
    "unicode": "1F353",
    "shortcode": "strawberry",
    "description": "STRAWBERRY",
    "category": "food"
  },
  {
    "name": "hamburger",
    "unicode": "1F354",
    "shortcode": "hamburger",
    "description": "HAMBURGER",
    "category": "food"
  },
  {
    "name": "pizza",
    "unicode": "1F355",
    "shortcode": "pizza",
    "description": "SLICE OF PIZZA",
    "category": "food"
  },
  {
    "name": "meat_on_bone",
    "unicode": "1F356",
    "shortcode": "meat_on_bone",
    "description": "MEAT ON BONE",
    "category": "food"
  },
  {
    "name": "poultry_leg",
    "unicode": "1F357",
    "shortcode": "poultry_leg",
    "description": "POULTRY LEG",
    "category": "food"
  },
  {
    "name": "rice_cracker",
    "unicode": "1F358",
    "shortcode": "rice_cracker",
    "description": "RICE CRACKER",
    "category": "food"
  },
  {
    "name": "rice_ball",
    "unicode": "1F359",
    "shortcode": "rice_ball",
    "description": "RICE BALL",
    "category": "food"
  },
  {
    "name": "rice",
    "unicode": "1F35A",
    "shortcode": "rice",
    "description": "COOKED RICE",
    "category": "food"
  },
  {
    "name": "curry",
    "unicode": "1F35B",
    "shortcode": "curry",
    "description": "CURRY AND RICE",
    "category": "food"
  },
  {
    "name": "ramen",
    "unicode": "1F35C",
    "shortcode": "ramen",
    "description": "STEAMING BOWL",
    "category": "food"
  },
  {
    "name": "spaghetti",
    "unicode": "1F35D",
    "shortcode": "spaghetti",
    "description": "SPAGHETTI",
    "category": "food"
  },
  {
    "name": "bread",
    "unicode": "1F35E",
    "shortcode": "bread",
    "description": "BREAD",
    "category": "food"
  },
  {
    "name": "fries",
    "unicode": "1F35F",
    "shortcode": "fries",
    "description": "FRENCH FRIES",
    "category": "food"
  },
  {
    "name": "sweet_potato",
    "unicode": "1F360",
    "shortcode": "sweet_potato",
    "description": "ROASTED SWEET POTATO",
    "category": "food"
  },
  {
    "name": "dango",
    "unicode": "1F361",
    "shortcode": "dango",
    "description": "DANGO",
    "category": "food"
  },
  {
    "name": "oden",
    "unicode": "1F362",
    "shortcode": "oden",
    "description": "ODEN",
    "category": "food"
  },
  {
    "name": "sushi",
    "unicode": "1F363",
    "shortcode": "sushi",
    "description": "SUSHI",
    "category": "food"
  },
  {
    "name": "fried_shrimp",
    "unicode": "1F364",
    "shortcode": "fried_shrimp",
    "description": "FRIED SHRIMP",
    "category": "food"
  },
  {
    "name": "fish_cake",
    "unicode": "1F365",
    "shortcode": "fish_cake",
    "description": "FISH CAKE WITH SWIRL DESIGN",
    "category": "food"
  },
  {
    "name": "icecream",
    "unicode": "1F366",
    "shortcode": "icecream",
    "description": "SOFT ICE CREAM",
    "category": "food"
  },
  {
    "name": "shaved_ice",
    "unicode": "1F367",
    "shortcode": "shaved_ice",
    "description": "SHAVED ICE",
    "category": "food"
  },
  {
    "name": "ice_cream",
    "unicode": "1F368",
    "shortcode": "ice_cream",
    "description": "ICE CREAM",
    "category": "food"
  },
  {
    "name": "doughnut",
    "unicode": "1F369",
    "shortcode": "doughnut",
    "description": "DOUGHNUT",
    "category": "food"
  },
  {
    "name": "cookie",
    "unicode": "1F36A",
    "shortcode": "cookie",
    "description": "COOKIE",
    "category": "food"
  },
  {
    "name": "chocolate_bar",
    "unicode": "1F36B",
    "shortcode": "chocolate_bar",
    "description": "CHOCOLATE BAR",
    "category": "food"
  },
  {
    "name": "candy",
    "unicode": "1F36C",
    "shortcode": "candy",
    "description": "CANDY",
    "category": "food"
  },
  {
    "name": "lollipop",
    "unicode": "1F36D",
    "shortcode": "lollipop",
    "description": "LOLLIPOP",
    "category": "food"
  },
  {
    "name": "custard",
    "unicode": "1F36E",
    "shortcode": "custard",
    "description": "CUSTARD",
    "category": "food"
  },
  {
    "name": "honey_pot",
    "unicode": "1F36F",
    "shortcode": "honey_pot",
    "description": "HONEY POT",
    "category": "food"
  },
  {
    "name": "cake",
    "unicode": "1F370",
    "shortcode": "cake",
    "description": "SHORTCAKE",
    "category": "food"
  },
  {
    "name": "bento",
    "unicode": "1F371",
    "shortcode": "bento",
    "description": "BENTO BOX",
    "category": "food"
  },
  {
    "name": "stew",
    "unicode": "1F372",
    "shortcode": "stew",
    "description": "POT OF FOOD",
    "category": "food"
  },
  {
    "name": "egg",
    "unicode": "1F373",
    "shortcode": "egg",
    "description": "COOKING",
    "category": "food"
  },
  {
    "name": "fork_and_knife",
    "unicode": "1F374",
    "shortcode": "fork_and_knife",
    "description": "FORK AND KNIFE",
    "category": "food"
  },
  {
    "name": "tea",
    "unicode": "1F375",
    "shortcode": "tea",
    "description": "TEACUP WITHOUT HANDLE",
    "category": "food"
  },
  {
    "name": "sake",
    "unicode": "1F376",
    "shortcode": "sake",
    "description": "SAKE BOTTLE AND CUP",
    "category": "food"
  },
  {
    "name": "wine_glass",
    "unicode": "1F377",
    "shortcode": "wine_glass",
    "description": "WINE GLASS",
    "category": "food"
  },
  {
    "name": "cocktail",
    "unicode": "1F378",
    "shortcode": "cocktail",
    "description": "COCKTAIL GLASS",
    "category": "food"
  },
  {
    "name": "tropical_drink",
    "unicode": "1F379",
    "shortcode": "tropical_drink",
    "description": "TROPICAL DRINK",
    "category": "food"
  },
  {
    "name": "beer",
    "unicode": "1F37A",
    "shortcode": "beer",
    "description": "BEER MUG",
    "category": "food"
  },
  {
    "name": "beers",
    "unicode": "1F37B",
    "shortcode": "beers",
    "description": "CLINKING BEER MUGS",
    "category": "food"
  },
  {
    "name": "baby_bottle",
    "unicode": "1F37C",
    "shortcode": "baby_bottle",
    "description": "BABY BOTTLE",
    "category": "food"
  },
  {
    "name": "ribbon",
    "unicode": "1F380",
    "shortcode": "ribbon",
    "description": "RIBBON",
    "category": "thing"
  },
  {
    "name": "gift",
    "unicode": "1F381",
    "shortcode": "gift",
    "description": "WRAPPED PRESENT",
    "category": "thing"
  },
  {
    "name": "birthday",
    "unicode": "1F382",
    "shortcode": "birthday",
    "description": "BIRTHDAY CAKE",
    "category": "thing"
  },
  {
    "name": "jack_o_lantern",
    "unicode": "1F383",
    "shortcode": "jack_o_lantern",
    "description": "JACK-O-LANTERN",
    "category": "thing"
  },
  {
    "name": "christmas_tree",
    "unicode": "1F384",
    "shortcode": "christmas_tree",
    "description": "CHRISTMAS TREE",
    "category": "thing"
  },
  {
    "name": "santa",
    "unicode": "1F385",
    "shortcode": "santa",
    "description": "FATHER CHRISTMAS",
    "category": "thing"
  },
  {
    "name": "fireworks",
    "unicode": "1F386",
    "shortcode": "fireworks",
    "description": "FIREWORKS",
    "category": "thing"
  },
  {
    "name": "sparkler",
    "unicode": "1F387",
    "shortcode": "sparkler",
    "description": "FIREWORK SPARKLER",
    "category": "thing"
  },
  {
    "name": "balloon",
    "unicode": "1F388",
    "shortcode": "balloon",
    "description": "BALLOON",
    "category": "thing"
  },
  {
    "name": "tada",
    "unicode": "1F389",
    "shortcode": "tada",
    "description": "PARTY POPPER",
    "category": "thing"
  },
  {
    "name": "confetti_ball",
    "unicode": "1F38A",
    "shortcode": "confetti_ball",
    "description": "CONFETTI BALL",
    "category": "thing"
  },
  {
    "name": "tanabata_tree",
    "unicode": "1F38B",
    "shortcode": "tanabata_tree",
    "description": "TANABATA TREE",
    "category": "thing"
  },
  {
    "name": "crossed_flags",
    "unicode": "1F38C",
    "shortcode": "crossed_flags",
    "description": "CROSSED FLAGS",
    "category": "thing"
  },
  {
    "name": "bamboo",
    "unicode": "1F38D",
    "shortcode": "bamboo",
    "description": "PINE DECORATION",
    "category": "thing"
  },
  {
    "name": "dolls",
    "unicode": "1F38E",
    "shortcode": "dolls",
    "description": "JAPANESE DOLLS",
    "category": "thing"
  },
  {
    "name": "flags",
    "unicode": "1F38F",
    "shortcode": "flags",
    "description": "CARP STREAMER",
    "category": "thing"
  },
  {
    "name": "wind_chime",
    "unicode": "1F390",
    "shortcode": "wind_chime",
    "description": "WIND CHIME",
    "category": "thing"
  },
  {
    "name": "rice_scene",
    "unicode": "1F391",
    "shortcode": "rice_scene",
    "description": "MOON VIEWING CEREMONY",
    "category": "thing"
  },
  {
    "name": "school_satchel",
    "unicode": "1F392",
    "shortcode": "school_satchel",
    "description": "SCHOOL SATCHEL",
    "category": "thing"
  },
  {
    "name": "mortar_board",
    "unicode": "1F393",
    "shortcode": "mortar_board",
    "description": "GRADUATION CAP",
    "category": "thing"
  },
  {
    "name": "carousel_horse",
    "unicode": "1F3A0",
    "shortcode": "carousel_horse",
    "description": "CAROUSEL HORSE",
    "category": "thing"
  },
  {
    "name": "ferris_wheel",
    "unicode": "1F3A1",
    "shortcode": "ferris_wheel",
    "description": "FERRIS WHEEL",
    "category": "thing"
  },
  {
    "name": "roller_coaster",
    "unicode": "1F3A2",
    "shortcode": "roller_coaster",
    "description": "ROLLER COASTER",
    "category": "thing"
  },
  {
    "name": "fishing_pole_and_fish",
    "unicode": "1F3A3",
    "shortcode": "fishing_pole_and_fish",
    "description": "FISHING POLE AND FISH",
    "category": "thing"
  },
  {
    "name": "microphone",
    "unicode": "1F3A4",
    "shortcode": "microphone",
    "description": "MICROPHONE",
    "category": "thing"
  },
  {
    "name": "movie_camera",
    "unicode": "1F3A5",
    "shortcode": "movie_camera",
    "description": "MOVIE CAMERA",
    "category": "thing"
  },
  {
    "name": "cinema",
    "unicode": "1F3A6",
    "shortcode": "cinema",
    "description": "CINEMA",
    "category": "thing"
  },
  {
    "name": "headphones",
    "unicode": "1F3A7",
    "shortcode": "headphones",
    "description": "HEADPHONE",
    "category": "thing"
  },
  {
    "name": "art",
    "unicode": "1F3A8",
    "shortcode": "art",
    "description": "ARTIST PALETTE",
    "category": "thing"
  },
  {
    "name": "tophat",
    "unicode": "1F3A9",
    "shortcode": "tophat",
    "description": "TOP HAT",
    "category": "thing"
  },
  {
    "name": "circus_tent",
    "unicode": "1F3AA",
    "shortcode": "circus_tent",
    "description": "CIRCUS TENT",
    "category": "thing"
  },
  {
    "name": "ticket",
    "unicode": "1F3AB",
    "shortcode": "ticket",
    "description": "TICKET",
    "category": "thing"
  },
  {
    "name": "clapper",
    "unicode": "1F3AC",
    "shortcode": "clapper",
    "description": "CLAPPER BOARD",
    "category": "thing"
  },
  {
    "name": "performing_arts",
    "unicode": "1F3AD",
    "shortcode": "performing_arts",
    "description": "PERFORMING ARTS",
    "category": "thing"
  },
  {
    "name": "video_game",
    "unicode": "1F3AE",
    "shortcode": "video_game",
    "description": "VIDEO GAME",
    "category": "thing"
  },
  {
    "name": "dart",
    "unicode": "1F3AF",
    "shortcode": "dart",
    "description": "DIRECT HIT",
    "category": "thing"
  },
  {
    "name": "slot_machine",
    "unicode": "1F3B0",
    "shortcode": "slot_machine",
    "description": "SLOT MACHINE",
    "category": "thing"
  },
  {
    "name": "8ball",
    "unicode": "1F3B1",
    "shortcode": "8ball",
    "description": "BILLIARDS",
    "category": "thing"
  },
  {
    "name": "game_die",
    "unicode": "1F3B2",
    "shortcode": "game_die",
    "description": "GAME DIE",
    "category": "thing"
  },
  {
    "name": "bowling",
    "unicode": "1F3B3",
    "shortcode": "bowling",
    "description": "BOWLING",
    "category": "thing"
  },
  {
    "name": "flower_playing_cards",
    "unicode": "1F3B4",
    "shortcode": "flower_playing_cards",
    "description": "FLOWER PLAYING CARDS",
    "category": "thing"
  },
  {
    "name": "musical_note",
    "unicode": "1F3B5",
    "shortcode": "musical_note",
    "description": "MUSICAL NOTE",
    "category": "thing"
  },
  {
    "name": "notes",
    "unicode": "1F3B6",
    "shortcode": "notes",
    "description": "MULTIPLE MUSICAL NOTES",
    "category": "thing"
  },
  {
    "name": "saxophone",
    "unicode": "1F3B7",
    "shortcode": "saxophone",
    "description": "SAXOPHONE",
    "category": "thing"
  },
  {
    "name": "guitar",
    "unicode": "1F3B8",
    "shortcode": "guitar",
    "description": "GUITAR",
    "category": "thing"
  },
  {
    "name": "musical_keyboard",
    "unicode": "1F3B9",
    "shortcode": "musical_keyboard",
    "description": "MUSICAL KEYBOARD",
    "category": "thing"
  },
  {
    "name": "trumpet",
    "unicode": "1F3BA",
    "shortcode": "trumpet",
    "description": "TRUMPET",
    "category": "thing"
  },
  {
    "name": "violin",
    "unicode": "1F3BB",
    "shortcode": "violin",
    "description": "VIOLIN",
    "category": "thing"
  },
  {
    "name": "musical_score",
    "unicode": "1F3BC",
    "shortcode": "musical_score",
    "description": "MUSICAL SCORE",
    "category": "thing"
  },
  {
    "name": "running_shirt_with_sash",
    "unicode": "1F3BD",
    "shortcode": "running_shirt_with_sash",
    "description": "RUNNING SHIRT WITH SASH",
    "category": "thing"
  },
  {
    "name": "tennis",
    "unicode": "1F3BE",
    "shortcode": "tennis",
    "description": "TENNIS RACQUET AND BALL",
    "category": "thing"
  },
  {
    "name": "ski",
    "unicode": "1F3BF",
    "shortcode": "ski",
    "description": "SKI AND SKI BOOT",
    "category": "thing"
  },
  {
    "name": "basketball",
    "unicode": "1F3C0",
    "shortcode": "basketball",
    "description": "BASKETBALL AND HOOP",
    "category": "thing"
  },
  {
    "name": "checkered_flag",
    "unicode": "1F3C1",
    "shortcode": "checkered_flag",
    "description": "CHEQUERED FLAG",
    "category": "thing"
  },
  {
    "name": "snowboarder",
    "unicode": "1F3C2",
    "shortcode": "snowboarder",
    "description": "SNOWBOARDER",
    "category": "people"
  },
  {
    "name": "runner",
    "unicode": "1F3C3",
    "shortcode": "runner",
    "description": "RUNNER",
    "category": "people"
  },
  {
    "name": "surfer",
    "unicode": "1F3C4",
    "shortcode": "surfer",
    "description": "SURFER",
    "category": "people"
  },
  {
    "name": "trophy",
    "unicode": "1F3C6",
    "shortcode": "trophy",
    "description": "TROPHY",
    "category": "people"
  },
  {
    "name": "horse_racing",
    "unicode": "1F3C7",
    "shortcode": "horse_racing",
    "description": "HORSE RACING",
    "category": "people"
  },
  {
    "name": "football",
    "unicode": "1F3C8",
    "shortcode": "football",
    "description": "AMERICAN FOOTBALL",
    "category": "people"
  },
  {
    "name": "rugby_football",
    "unicode": "1F3C9",
    "shortcode": "rugby_football",
    "description": "RUGBY FOOTBALL",
    "category": "people"
  },
  {
    "name": "swimmer",
    "unicode": "1F3CA",
    "shortcode": "swimmer",
    "description": "SWIMMER",
    "category": "people"
  },
  {
    "name": "house",
    "unicode": "1F3E0",
    "shortcode": "house",
    "description": "HOUSE BUILDING",
    "category": "travel"
  },
  {
    "name": "house_with_garden",
    "unicode": "1F3E1",
    "shortcode": "house_with_garden",
    "description": "HOUSE WITH GARDEN",
    "category": "travel"
  },
  {
    "name": "office",
    "unicode": "1F3E2",
    "shortcode": "office",
    "description": "OFFICE BUILDING",
    "category": "travel"
  },
  {
    "name": "post_office",
    "unicode": "1F3E3",
    "shortcode": "post_office",
    "description": "JAPANESE POST OFFICE",
    "category": "travel"
  },
  {
    "name": "european_post_office",
    "unicode": "1F3E4",
    "shortcode": "european_post_office",
    "description": "EUROPEAN POST OFFICE",
    "category": "travel"
  },
  {
    "name": "hospital",
    "unicode": "1F3E5",
    "shortcode": "hospital",
    "description": "HOSPITAL",
    "category": "travel"
  },
  {
    "name": "bank",
    "unicode": "1F3E6",
    "shortcode": "bank",
    "description": "BANK",
    "category": "travel"
  },
  {
    "name": "atm",
    "unicode": "1F3E7",
    "shortcode": "atm",
    "description": "AUTOMATED TELLER MACHINE",
    "category": "travel"
  },
  {
    "name": "hotel",
    "unicode": "1F3E8",
    "shortcode": "hotel",
    "description": "HOTEL",
    "category": "travel"
  },
  {
    "name": "love_hotel",
    "unicode": "1F3E9",
    "shortcode": "love_hotel",
    "description": "LOVE HOTEL",
    "category": "travel"
  },
  {
    "name": "convenience_store",
    "unicode": "1F3EA",
    "shortcode": "convenience_store",
    "description": "CONVENIENCE STORE",
    "category": "travel"
  },
  {
    "name": "school",
    "unicode": "1F3EB",
    "shortcode": "school",
    "description": "SCHOOL",
    "category": "travel"
  },
  {
    "name": "department_store",
    "unicode": "1F3EC",
    "shortcode": "department_store",
    "description": "DEPARTMENT STORE",
    "category": "travel"
  },
  {
    "name": "factory",
    "unicode": "1F3ED",
    "shortcode": "factory",
    "description": "FACTORY",
    "category": "travel"
  },
  {
    "name": "izakaya_lantern",
    "unicode": "1F3EE",
    "shortcode": "izakaya_lantern",
    "description": "IZAKAYA LANTERN",
    "category": "travel"
  },
  {
    "name": "japanese_castle",
    "unicode": "1F3EF",
    "shortcode": "japanese_castle",
    "description": "JAPANESE CASTLE",
    "category": "travel"
  },
  {
    "name": "european_castle",
    "unicode": "1F3F0",
    "shortcode": "european_castle",
    "description": "EUROPEAN CASTLE",
    "category": "travel"
  },
  {
    "name": "rat",
    "unicode": "1F400",
    "shortcode": "rat",
    "description": "RAT",
    "category": "animal"
  },
  {
    "name": "mouse2",
    "unicode": "1F401",
    "shortcode": "mouse2",
    "description": "MOUSE",
    "category": "animal"
  },
  {
    "name": "ox",
    "unicode": "1F402",
    "shortcode": "ox",
    "description": "OX",
    "category": "animal"
  },
  {
    "name": "water_buffalo",
    "unicode": "1F403",
    "shortcode": "water_buffalo",
    "description": "WATER BUFFALO",
    "category": "animal"
  },
  {
    "name": "cow2",
    "unicode": "1F404",
    "shortcode": "cow2",
    "description": "COW",
    "category": "animal"
  },
  {
    "name": "tiger2",
    "unicode": "1F405",
    "shortcode": "tiger2",
    "description": "TIGER",
    "category": "animal"
  },
  {
    "name": "leopard",
    "unicode": "1F406",
    "shortcode": "leopard",
    "description": "LEOPARD",
    "category": "animal"
  },
  {
    "name": "rabbit2",
    "unicode": "1F407",
    "shortcode": "rabbit2",
    "description": "RABBIT",
    "category": "animal"
  },
  {
    "name": "cat2",
    "unicode": "1F408",
    "shortcode": "cat2",
    "description": "CAT",
    "category": "animal"
  },
  {
    "name": "dragon",
    "unicode": "1F409",
    "shortcode": "dragon",
    "description": "DRAGON",
    "category": "animal"
  },
  {
    "name": "crocodile",
    "unicode": "1F40A",
    "shortcode": "crocodile",
    "description": "CROCODILE",
    "category": "animal"
  },
  {
    "name": "whale2",
    "unicode": "1F40B",
    "shortcode": "whale2",
    "description": "WHALE",
    "category": "animal"
  },
  {
    "name": "snail",
    "unicode": "1F40C",
    "shortcode": "snail",
    "description": "SNAIL",
    "category": "animal"
  },
  {
    "name": "snake",
    "unicode": "1F40D",
    "shortcode": "snake",
    "description": "SNAKE",
    "category": "animal"
  },
  {
    "name": "racehorse",
    "unicode": "1F40E",
    "shortcode": "racehorse",
    "description": "HORSE",
    "category": "animal"
  },
  {
    "name": "ram",
    "unicode": "1F40F",
    "shortcode": "ram",
    "description": "RAM",
    "category": "animal"
  },
  {
    "name": "goat",
    "unicode": "1F410",
    "shortcode": "goat",
    "description": "GOAT",
    "category": "animal"
  },
  {
    "name": "sheep",
    "unicode": "1F411",
    "shortcode": "sheep",
    "description": "SHEEP",
    "category": "animal"
  },
  {
    "name": "monkey",
    "unicode": "1F412",
    "shortcode": "monkey",
    "description": "MONKEY",
    "category": "animal"
  },
  {
    "name": "rooster",
    "unicode": "1F413",
    "shortcode": "rooster",
    "description": "ROOSTER",
    "category": "animal"
  },
  {
    "name": "chicken",
    "unicode": "1F414",
    "shortcode": "chicken",
    "description": "CHICKEN",
    "category": "animal"
  },
  {
    "name": "dog2",
    "unicode": "1F415",
    "shortcode": "dog2",
    "description": "DOG",
    "category": "animal"
  },
  {
    "name": "pig2",
    "unicode": "1F416",
    "shortcode": "pig2",
    "description": "PIG",
    "category": "animal"
  },
  {
    "name": "boar",
    "unicode": "1F417",
    "shortcode": "boar",
    "description": "BOAR",
    "category": "animal"
  },
  {
    "name": "elephant",
    "unicode": "1F418",
    "shortcode": "elephant",
    "description": "ELEPHANT",
    "category": "animal"
  },
  {
    "name": "octopus",
    "unicode": "1F419",
    "shortcode": "octopus",
    "description": "OCTOPUS",
    "category": "animal"
  },
  {
    "name": "shell",
    "unicode": "1F41A",
    "shortcode": "shell",
    "description": "SPIRAL SHELL",
    "category": "animal"
  },
  {
    "name": "bug",
    "unicode": "1F41B",
    "shortcode": "bug",
    "description": "BUG",
    "category": "animal"
  },
  {
    "name": "ant",
    "unicode": "1F41C",
    "shortcode": "ant",
    "description": "ANT",
    "category": "animal"
  },
  {
    "name": "bee",
    "unicode": "1F41D",
    "shortcode": "bee",
    "description": "HONEYBEE",
    "category": "animal"
  },
  {
    "name": "beetle",
    "unicode": "1F41E",
    "shortcode": "beetle",
    "description": "LADY BEETLE",
    "category": "animal"
  },
  {
    "name": "fish",
    "unicode": "1F41F",
    "shortcode": "fish",
    "description": "FISH",
    "category": "animal"
  },
  {
    "name": "tropical_fish",
    "unicode": "1F420",
    "shortcode": "tropical_fish",
    "description": "TROPICAL FISH",
    "category": "animal"
  },
  {
    "name": "blowfish",
    "unicode": "1F421",
    "shortcode": "blowfish",
    "description": "BLOWFISH",
    "category": "animal"
  },
  {
    "name": "turtle",
    "unicode": "1F422",
    "shortcode": "turtle",
    "description": "TURTLE",
    "category": "animal"
  },
  {
    "name": "hatching_chick",
    "unicode": "1F423",
    "shortcode": "hatching_chick",
    "description": "HATCHING CHICK",
    "category": "animal"
  },
  {
    "name": "baby_chick",
    "unicode": "1F424",
    "shortcode": "baby_chick",
    "description": "BABY CHICK",
    "category": "animal"
  },
  {
    "name": "hatched_chick",
    "unicode": "1F425",
    "shortcode": "hatched_chick",
    "description": "FRONT-FACING BABY CHICK",
    "category": "animal"
  },
  {
    "name": "bird",
    "unicode": "1F426",
    "shortcode": "bird",
    "description": "BIRD",
    "category": "animal"
  },
  {
    "name": "penguin",
    "unicode": "1F427",
    "shortcode": "penguin",
    "description": "PENGUIN",
    "category": "animal"
  },
  {
    "name": "koala",
    "unicode": "1F428",
    "shortcode": "koala",
    "description": "KOALA",
    "category": "animal"
  },
  {
    "name": "poodle",
    "unicode": "1F429",
    "shortcode": "poodle",
    "description": "POODLE",
    "category": "animal"
  },
  {
    "name": "dromedary_camel",
    "unicode": "1F42A",
    "shortcode": "dromedary_camel",
    "description": "DROMEDARY CAMEL",
    "category": "animal"
  },
  {
    "name": "camel",
    "unicode": "1F42B",
    "shortcode": "camel",
    "description": "BACTRIAN CAMEL",
    "category": "animal"
  },
  {
    "name": "dolphin",
    "unicode": "1F42C",
    "shortcode": "dolphin",
    "description": "DOLPHIN",
    "category": "animal"
  },
  {
    "name": "mouse",
    "unicode": "1F42D",
    "shortcode": "mouse",
    "description": "MOUSE FACE",
    "category": "animal"
  },
  {
    "name": "cow",
    "unicode": "1F42E",
    "shortcode": "cow",
    "description": "COW FACE",
    "category": "animal"
  },
  {
    "name": "tiger",
    "unicode": "1F42F",
    "shortcode": "tiger",
    "description": "TIGER FACE",
    "category": "animal"
  },
  {
    "name": "rabbit",
    "unicode": "1F430",
    "shortcode": "rabbit",
    "description": "RABBIT FACE",
    "category": "animal"
  },
  {
    "name": "cat",
    "unicode": "1F431",
    "shortcode": "cat",
    "description": "CAT FACE",
    "category": "animal"
  },
  {
    "name": "dragon_face",
    "unicode": "1F432",
    "shortcode": "dragon_face",
    "description": "DRAGON FACE",
    "category": "animal"
  },
  {
    "name": "whale",
    "unicode": "1F433",
    "shortcode": "whale",
    "description": "SPOUTING WHALE",
    "category": "animal"
  },
  {
    "name": "horse",
    "unicode": "1F434",
    "shortcode": "horse",
    "description": "HORSE FACE",
    "category": "animal"
  },
  {
    "name": "monkey_face",
    "unicode": "1F435",
    "shortcode": "monkey_face",
    "description": "MONKEY FACE",
    "category": "animal"
  },
  {
    "name": "dog",
    "unicode": "1F436",
    "shortcode": "dog",
    "description": "DOG FACE",
    "category": "animal"
  },
  {
    "name": "pig",
    "unicode": "1F437",
    "shortcode": "pig",
    "description": "PIG FACE",
    "category": "animal"
  },
  {
    "name": "frog",
    "unicode": "1F438",
    "shortcode": "frog",
    "description": "FROG FACE",
    "category": "animal"
  },
  {
    "name": "hamster",
    "unicode": "1F439",
    "shortcode": "hamster",
    "description": "HAMSTER FACE",
    "category": "animal"
  },
  {
    "name": "wolf",
    "unicode": "1F43A",
    "shortcode": "wolf",
    "description": "WOLF FACE",
    "category": "animal"
  },
  {
    "name": "bear",
    "unicode": "1F43B",
    "shortcode": "bear",
    "description": "BEAR FACE",
    "category": "animal"
  },
  {
    "name": "panda_face",
    "unicode": "1F43C",
    "shortcode": "panda_face",
    "description": "PANDA FACE",
    "category": "animal"
  },
  {
    "name": "pig_nose",
    "unicode": "1F43D",
    "shortcode": "pig_nose",
    "description": "PIG NOSE",
    "category": "animal"
  },
  {
    "name": "feet",
    "unicode": "1F43E",
    "shortcode": "feet",
    "description": "PAW PRINTS",
    "category": "people"
  },
  {
    "name": "eyes",
    "unicode": "1F440",
    "shortcode": "eyes",
    "description": "EYES",
    "category": "people"
  },
  {
    "name": "ear",
    "unicode": "1F442",
    "shortcode": "ear",
    "description": "EAR",
    "category": "people"
  },
  {
    "name": "nose",
    "unicode": "1F443",
    "shortcode": "nose",
    "description": "NOSE",
    "category": "people"
  },
  {
    "name": "lips",
    "unicode": "1F444",
    "shortcode": "lips",
    "description": "MOUTH",
    "category": "people"
  },
  {
    "name": "tongue",
    "unicode": "1F445",
    "shortcode": "tongue",
    "description": "TONGUE",
    "category": "people"
  },
  {
    "name": "point_up_2",
    "unicode": "1F446",
    "shortcode": "point_up_2",
    "description": "WHITE UP POINTING BACKHAND INDEX",
    "category": "people"
  },
  {
    "name": "point_down",
    "unicode": "1F447",
    "shortcode": "point_down",
    "description": "WHITE DOWN POINTING BACKHAND INDEX",
    "category": "people"
  },
  {
    "name": "point_left",
    "unicode": "1F448",
    "shortcode": "point_left",
    "description": "WHITE LEFT POINTING BACKHAND INDEX",
    "category": "people"
  },
  {
    "name": "point_right",
    "unicode": "1F449",
    "shortcode": "point_right",
    "description": "WHITE RIGHT POINTING BACKHAND INDEX",
    "category": "people"
  },
  {
    "name": "facepunch",
    "unicode": "1F44A",
    "shortcode": "facepunch",
    "description": "FISTED HAND SIGN",
    "category": "people"
  },
  {
    "name": "wave",
    "unicode": "1F44B",
    "shortcode": "wave",
    "description": "WAVING HAND SIGN",
    "category": "people"
  },
  {
    "name": "ok_hand",
    "unicode": "1F44C",
    "shortcode": "ok_hand",
    "description": "OK HAND SIGN",
    "category": "people"
  },
  {
    "name": "+1",
    "unicode": "1F44D",
    "shortcode": "plus1",
    "description": "THUMBS UP SIGN",
    "category": "people"
  },
  {
    "name": "-1",
    "unicode": "1F44E",
    "shortcode": "-1",
    "description": "THUMBS DOWN SIGN",
    "category": "people"
  },
  {
    "name": "clap",
    "unicode": "1F44F",
    "shortcode": "clap",
    "description": "CLAPPING HANDS SIGN",
    "category": "people"
  },
  {
    "name": "open_hands",
    "unicode": "1F450",
    "shortcode": "open_hands",
    "description": "OPEN HANDS SIGN",
    "category": "people"
  },
  {
    "name": "crown",
    "unicode": "1F451",
    "shortcode": "crown",
    "description": "CROWN",
    "category": "people"
  },
  {
    "name": "womans_hat",
    "unicode": "1F452",
    "shortcode": "womans_hat",
    "description": "WOMANS HAT",
    "category": "people"
  },
  {
    "name": "eyeglasses",
    "unicode": "1F453",
    "shortcode": "eyeglasses",
    "description": "EYEGLASSES",
    "category": "people"
  },
  {
    "name": "necktie",
    "unicode": "1F454",
    "shortcode": "necktie",
    "description": "NECKTIE",
    "category": "people"
  },
  {
    "name": "shirt",
    "unicode": "1F455",
    "shortcode": "shirt",
    "description": "T-SHIRT",
    "category": "people"
  },
  {
    "name": "jeans",
    "unicode": "1F456",
    "shortcode": "jeans",
    "description": "JEANS",
    "category": "people"
  },
  {
    "name": "dress",
    "unicode": "1F457",
    "shortcode": "dress",
    "description": "DRESS",
    "category": "people"
  },
  {
    "name": "kimono",
    "unicode": "1F458",
    "shortcode": "kimono",
    "description": "KIMONO",
    "category": "people"
  },
  {
    "name": "bikini",
    "unicode": "1F459",
    "shortcode": "bikini",
    "description": "BIKINI",
    "category": "people"
  },
  {
    "name": "womans_clothes",
    "unicode": "1F45A",
    "shortcode": "womans_clothes",
    "description": "WOMANS CLOTHES",
    "category": "people"
  },
  {
    "name": "purse",
    "unicode": "1F45B",
    "shortcode": "purse",
    "description": "PURSE",
    "category": "people"
  },
  {
    "name": "handbag",
    "unicode": "1F45C",
    "shortcode": "handbag",
    "description": "HANDBAG",
    "category": "people"
  },
  {
    "name": "pouch",
    "unicode": "1F45D",
    "shortcode": "pouch",
    "description": "POUCH",
    "category": "people"
  },
  {
    "name": "mans_shoe",
    "unicode": "1F45E",
    "shortcode": "mans_shoe",
    "description": "MANS SHOE",
    "category": "people"
  },
  {
    "name": "athletic_shoe",
    "unicode": "1F45F",
    "shortcode": "athletic_shoe",
    "description": "ATHLETIC SHOE",
    "category": "people"
  },
  {
    "name": "high_heel",
    "unicode": "1F460",
    "shortcode": "high_heel",
    "description": "HIGH-HEELED SHOE",
    "category": "people"
  },
  {
    "name": "sandal",
    "unicode": "1F461",
    "shortcode": "sandal",
    "description": "WOMANS SANDAL",
    "category": "people"
  },
  {
    "name": "boot",
    "unicode": "1F462",
    "shortcode": "boot",
    "description": "WOMANS BOOTS",
    "category": "people"
  },
  {
    "name": "footprints",
    "unicode": "1F463",
    "shortcode": "footprints",
    "description": "FOOTPRINTS",
    "category": "people"
  },
  {
    "name": "bust_in_silhouette",
    "unicode": "1F464",
    "shortcode": "bust_in_silhouette",
    "description": "BUST IN SILHOUETTE",
    "category": "people"
  },
  {
    "name": "busts_in_silhouette",
    "unicode": "1F465",
    "shortcode": "busts_in_silhouette",
    "description": "BUSTS IN SILHOUETTE",
    "category": "people"
  },
  {
    "name": "boy",
    "unicode": "1F466",
    "shortcode": "boy",
    "description": "BOY",
    "category": "people"
  },
  {
    "name": "girl",
    "unicode": "1F467",
    "shortcode": "girl",
    "description": "GIRL",
    "category": "people"
  },
  {
    "name": "man",
    "unicode": "1F468",
    "shortcode": "man",
    "description": "MAN",
    "category": "people"
  },
  {
    "name": "woman",
    "unicode": "1F469",
    "shortcode": "woman",
    "description": "WOMAN",
    "category": "people"
  },
  {
    "name": "family",
    "unicode": "1F46A",
    "shortcode": "family",
    "description": "FAMILY",
    "category": "people"
  },
  {
    "name": "couple",
    "unicode": "1F46B",
    "shortcode": "couple",
    "description": "MAN AND WOMAN HOLDING HANDS",
    "category": "people"
  },
  {
    "name": "two_men_holding_hands",
    "unicode": "1F46C",
    "shortcode": "two_men_holding_hands",
    "description": "TWO MEN HOLDING HANDS",
    "category": "people"
  },
  {
    "name": "two_women_holding_hands",
    "unicode": "1F46D",
    "shortcode": "two_women_holding_hands",
    "description": "TWO WOMEN HOLDING HANDS",
    "category": "people"
  },
  {
    "name": "cop",
    "unicode": "1F46E",
    "shortcode": "cop",
    "description": "POLICE OFFICER",
    "category": "people"
  },
  {
    "name": "dancers",
    "unicode": "1F46F",
    "shortcode": "dancers",
    "description": "WOMAN WITH BUNNY EARS",
    "category": "people"
  },
  {
    "name": "bride_with_veil",
    "unicode": "1F470",
    "shortcode": "bride_with_veil",
    "description": "BRIDE WITH VEIL",
    "category": "people"
  },
  {
    "name": "person_with_blond_hair",
    "unicode": "1F471",
    "shortcode": "person_with_blond_hair",
    "description": "PERSON WITH BLOND HAIR",
    "category": "people"
  },
  {
    "name": "man_with_gua_pi_mao",
    "unicode": "1F472",
    "shortcode": "man_with_gua_pi_mao",
    "description": "MAN WITH GUA PI MAO",
    "category": "people"
  },
  {
    "name": "man_with_turban",
    "unicode": "1F473",
    "shortcode": "man_with_turban",
    "description": "MAN WITH TURBAN",
    "category": "people"
  },
  {
    "name": "older_man",
    "unicode": "1F474",
    "shortcode": "older_man",
    "description": "OLDER MAN",
    "category": "people"
  },
  {
    "name": "older_woman",
    "unicode": "1F475",
    "shortcode": "older_woman",
    "description": "OLDER WOMAN",
    "category": "people"
  },
  {
    "name": "baby",
    "unicode": "1F476",
    "shortcode": "baby",
    "description": "BABY",
    "category": "people"
  },
  {
    "name": "construction_worker",
    "unicode": "1F477",
    "shortcode": "construction_worker",
    "description": "CONSTRUCTION WORKER",
    "category": "people"
  },
  {
    "name": "princess",
    "unicode": "1F478",
    "shortcode": "princess",
    "description": "PRINCESS",
    "category": "people"
  },
  {
    "name": "japanese_ogre",
    "unicode": "1F479",
    "shortcode": "japanese_ogre",
    "description": "JAPANESE OGRE",
    "category": "people"
  },
  {
    "name": "japanese_goblin",
    "unicode": "1F47A",
    "shortcode": "japanese_goblin",
    "description": "JAPANESE GOBLIN",
    "category": "people"
  },
  {
    "name": "ghost",
    "unicode": "1F47B",
    "shortcode": "ghost",
    "description": "GHOST",
    "category": "people"
  },
  {
    "name": "angel",
    "unicode": "1F47C",
    "shortcode": "angel",
    "description": "BABY ANGEL",
    "category": "people"
  },
  {
    "name": "alien",
    "unicode": "1F47D",
    "shortcode": "alien",
    "description": "EXTRATERRESTRIAL ALIEN",
    "category": "people"
  },
  {
    "name": "space_invader",
    "unicode": "1F47E",
    "shortcode": "space_invader",
    "description": "ALIEN MONSTER",
    "category": "people"
  },
  {
    "name": "imp",
    "unicode": "1F47F",
    "shortcode": "imp",
    "description": "IMP",
    "category": "people"
  },
  {
    "name": "skull",
    "unicode": "1F480",
    "shortcode": "skull",
    "description": "SKULL",
    "category": "people"
  },
  {
    "name": "information_desk_person",
    "unicode": "1F481",
    "shortcode": "information_desk_person",
    "description": "INFORMATION DESK PERSON",
    "category": "people"
  },
  {
    "name": "guardsman",
    "unicode": "1F482",
    "shortcode": "guardsman",
    "description": "GUARDSMAN",
    "category": "people"
  },
  {
    "name": "dancer",
    "unicode": "1F483",
    "shortcode": "dancer",
    "description": "DANCER",
    "category": "people"
  },
  {
    "name": "lipstick",
    "unicode": "1F484",
    "shortcode": "lipstick",
    "description": "LIPSTICK",
    "category": "people"
  },
  {
    "name": "nail_care",
    "unicode": "1F485",
    "shortcode": "nail_care",
    "description": "NAIL POLISH",
    "category": "people"
  },
  {
    "name": "massage",
    "unicode": "1F486",
    "shortcode": "massage",
    "description": "FACE MASSAGE",
    "category": "people"
  },
  {
    "name": "haircut",
    "unicode": "1F487",
    "shortcode": "haircut",
    "description": "HAIRCUT",
    "category": "people"
  },
  {
    "name": "barber",
    "unicode": "1F488",
    "shortcode": "barber",
    "description": "BARBER POLE",
    "category": "people"
  },
  {
    "name": "syringe",
    "unicode": "1F489",
    "shortcode": "syringe",
    "description": "SYRINGE",
    "category": "emotion"
  },
  {
    "name": "pill",
    "unicode": "1F48A",
    "shortcode": "pill",
    "description": "PILL",
    "category": "emotion"
  },
  {
    "name": "kiss",
    "unicode": "1F48B",
    "shortcode": "kiss",
    "description": "KISS MARK",
    "category": "emotion"
  },
  {
    "name": "love_letter",
    "unicode": "1F48C",
    "shortcode": "love_letter",
    "description": "LOVE LETTER",
    "category": "emotion"
  },
  {
    "name": "ring",
    "unicode": "1F48D",
    "shortcode": "ring",
    "description": "RING",
    "category": "emotion"
  },
  {
    "name": "gem",
    "unicode": "1F48E",
    "shortcode": "gem",
    "description": "GEM STONE",
    "category": "emotion"
  },
  {
    "name": "couplekiss",
    "unicode": "1F48F",
    "shortcode": "couplekiss",
    "description": "KISS",
    "category": "emotion"
  },
  {
    "name": "bouquet",
    "unicode": "1F490",
    "shortcode": "bouquet",
    "description": "BOUQUET",
    "category": "emotion"
  },
  {
    "name": "couple_with_heart",
    "unicode": "1F491",
    "shortcode": "couple_with_heart",
    "description": "COUPLE WITH HEART",
    "category": "emotion"
  },
  {
    "name": "wedding",
    "unicode": "1F492",
    "shortcode": "wedding",
    "description": "WEDDING",
    "category": "emotion"
  },
  {
    "name": "heartbeat",
    "unicode": "1F493",
    "shortcode": "heartbeat",
    "description": "BEATING HEART",
    "category": "emotion"
  },
  {
    "name": "broken_heart",
    "unicode": "1F494",
    "shortcode": "broken_heart",
    "description": "BROKEN HEART",
    "category": "emotion"
  },
  {
    "name": "two_hearts",
    "unicode": "1F495",
    "shortcode": "two_hearts",
    "description": "TWO HEARTS",
    "category": "emotion"
  },
  {
    "name": "sparkling_heart",
    "unicode": "1F496",
    "shortcode": "sparkling_heart",
    "description": "SPARKLING HEART",
    "category": "emotion"
  },
  {
    "name": "heartpulse",
    "unicode": "1F497",
    "shortcode": "heartpulse",
    "description": "GROWING HEART",
    "category": "emotion"
  },
  {
    "name": "cupid",
    "unicode": "1F498",
    "shortcode": "cupid",
    "description": "HEART WITH ARROW",
    "category": "emotion"
  },
  {
    "name": "blue_heart",
    "unicode": "1F499",
    "shortcode": "blue_heart",
    "description": "BLUE HEART",
    "category": "emotion"
  },
  {
    "name": "green_heart",
    "unicode": "1F49A",
    "shortcode": "green_heart",
    "description": "GREEN HEART",
    "category": "emotion"
  },
  {
    "name": "yellow_heart",
    "unicode": "1F49B",
    "shortcode": "yellow_heart",
    "description": "YELLOW HEART",
    "category": "emotion"
  },
  {
    "name": "purple_heart",
    "unicode": "1F49C",
    "shortcode": "purple_heart",
    "description": "PURPLE HEART",
    "category": "emotion"
  },
  {
    "name": "gift_heart",
    "unicode": "1F49D",
    "shortcode": "gift_heart",
    "description": "HEART WITH RIBBON",
    "category": "emotion"
  },
  {
    "name": "revolving_hearts",
    "unicode": "1F49E",
    "shortcode": "revolving_hearts",
    "description": "REVOLVING HEARTS",
    "category": "emotion"
  },
  {
    "name": "heart_decoration",
    "unicode": "1F49F",
    "shortcode": "heart_decoration",
    "description": "HEART DECORATION",
    "category": "emotion"
  },
  {
    "name": "diamond_shape_with_a_dot_inside",
    "unicode": "1F4A0",
    "shortcode": "diamond_shape_with_a_dot_inside",
    "description": "DIAMOND SHAPE WITH A DOT INSIDE",
    "category": "emotion"
  },
  {
    "name": "bulb",
    "unicode": "1F4A1",
    "shortcode": "bulb",
    "description": "ELECTRIC LIGHT BULB",
    "category": "emotion"
  },
  {
    "name": "anger",
    "unicode": "1F4A2",
    "shortcode": "anger",
    "description": "ANGER SYMBOL",
    "category": "emotion"
  },
  {
    "name": "bomb",
    "unicode": "1F4A3",
    "shortcode": "bomb",
    "description": "BOMB",
    "category": "emotion"
  },
  {
    "name": "zzz",
    "unicode": "1F4A4",
    "shortcode": "zzz",
    "description": "SLEEPING SYMBOL",
    "category": "emotion"
  },
  {
    "name": "boom",
    "unicode": "1F4A5",
    "shortcode": "boom",
    "description": "COLLISION SYMBOL",
    "category": "emotion"
  },
  {
    "name": "sweat_drops",
    "unicode": "1F4A6",
    "shortcode": "sweat_drops",
    "description": "SPLASHING SWEAT SYMBOL",
    "category": "emotion"
  },
  {
    "name": "droplet",
    "unicode": "1F4A7",
    "shortcode": "droplet",
    "description": "DROPLET",
    "category": "emotion"
  },
  {
    "name": "dash",
    "unicode": "1F4A8",
    "shortcode": "dash",
    "description": "DASH SYMBOL",
    "category": "emotion"
  },
  {
    "name": "hankey",
    "unicode": "1F4A9",
    "shortcode": "hankey",
    "description": "PILE OF POO",
    "category": "emotion"
  },
  {
    "name": "muscle",
    "unicode": "1F4AA",
    "shortcode": "muscle",
    "description": "FLEXED BICEPS",
    "category": "emotion"
  },
  {
    "name": "dizzy",
    "unicode": "1F4AB",
    "shortcode": "dizzy",
    "description": "DIZZY SYMBOL",
    "category": "emotion"
  },
  {
    "name": "speech_balloon",
    "unicode": "1F4AC",
    "shortcode": "speech_balloon",
    "description": "SPEECH BALLOON",
    "category": "emotion"
  },
  {
    "name": "thought_balloon",
    "unicode": "1F4AD",
    "shortcode": "thought_balloon",
    "description": "THOUGHT BALLOON",
    "category": "emotion"
  },
  {
    "name": "white_flower",
    "unicode": "1F4AE",
    "shortcode": "white_flower",
    "description": "WHITE FLOWER",
    "category": "emotion"
  },
  {
    "name": "100",
    "unicode": "1F4AF",
    "shortcode": "100",
    "description": "HUNDRED POINTS SYMBOL",
    "category": "emotion"
  },
  {
    "name": "moneybag",
    "unicode": "1F4B0",
    "shortcode": "moneybag",
    "description": "MONEY BAG",
    "category": "emotion"
  },
  {
    "name": "currency_exchange",
    "unicode": "1F4B1",
    "shortcode": "currency_exchange",
    "description": "CURRENCY EXCHANGE",
    "category": "emotion"
  },
  {
    "name": "heavy_dollar_sign",
    "unicode": "1F4B2",
    "shortcode": "heavy_dollar_sign",
    "description": "HEAVY DOLLAR SIGN",
    "category": "emotion"
  },
  {
    "name": "credit_card",
    "unicode": "1F4B3",
    "shortcode": "credit_card",
    "description": "CREDIT CARD",
    "category": "emotion"
  },
  {
    "name": "yen",
    "unicode": "1F4B4",
    "shortcode": "yen",
    "description": "BANKNOTE WITH YEN SIGN",
    "category": "emotion"
  },
  {
    "name": "dollar",
    "unicode": "1F4B5",
    "shortcode": "dollar",
    "description": "BANKNOTE WITH DOLLAR SIGN",
    "category": "emotion"
  },
  {
    "name": "euro",
    "unicode": "1F4B6",
    "shortcode": "euro",
    "description": "BANKNOTE WITH EURO SIGN",
    "category": "emotion"
  },
  {
    "name": "pound",
    "unicode": "1F4B7",
    "shortcode": "pound",
    "description": "BANKNOTE WITH POUND SIGN",
    "category": "emotion"
  },
  {
    "name": "money_with_wings",
    "unicode": "1F4B8",
    "shortcode": "money_with_wings",
    "description": "MONEY WITH WINGS",
    "category": "emotion"
  },
  {
    "name": "chart",
    "unicode": "1F4B9",
    "shortcode": "chart",
    "description": "CHART WITH UPWARDS TREND AND YEN SIGN",
    "category": "thing"
  },
  {
    "name": "seat",
    "unicode": "1F4BA",
    "shortcode": "seat",
    "description": "SEAT",
    "category": "thing"
  },
  {
    "name": "computer",
    "unicode": "1F4BB",
    "shortcode": "computer",
    "description": "PERSONAL COMPUTER",
    "category": "thing"
  },
  {
    "name": "briefcase",
    "unicode": "1F4BC",
    "shortcode": "briefcase",
    "description": "BRIEFCASE",
    "category": "thing"
  },
  {
    "name": "minidisc",
    "unicode": "1F4BD",
    "shortcode": "minidisc",
    "description": "MINIDISC",
    "category": "thing"
  },
  {
    "name": "floppy_disk",
    "unicode": "1F4BE",
    "shortcode": "floppy_disk",
    "description": "FLOPPY DISK",
    "category": "thing"
  },
  {
    "name": "cd",
    "unicode": "1F4BF",
    "shortcode": "cd",
    "description": "OPTICAL DISC",
    "category": "thing"
  },
  {
    "name": "dvd",
    "unicode": "1F4C0",
    "shortcode": "dvd",
    "description": "DVD",
    "category": "thing"
  },
  {
    "name": "file_folder",
    "unicode": "1F4C1",
    "shortcode": "file_folder",
    "description": "FILE FOLDER",
    "category": "thing"
  },
  {
    "name": "open_file_folder",
    "unicode": "1F4C2",
    "shortcode": "open_file_folder",
    "description": "OPEN FILE FOLDER",
    "category": "thing"
  },
  {
    "name": "page_with_curl",
    "unicode": "1F4C3",
    "shortcode": "page_with_curl",
    "description": "PAGE WITH CURL",
    "category": "thing"
  },
  {
    "name": "page_facing_up",
    "unicode": "1F4C4",
    "shortcode": "page_facing_up",
    "description": "PAGE FACING UP",
    "category": "thing"
  },
  {
    "name": "date",
    "unicode": "1F4C5",
    "shortcode": "date",
    "description": "CALENDAR",
    "category": "thing"
  },
  {
    "name": "calendar",
    "unicode": "1F4C6",
    "shortcode": "calendar",
    "description": "TEAR-OFF CALENDAR",
    "category": "thing"
  },
  {
    "name": "card_index",
    "unicode": "1F4C7",
    "shortcode": "card_index",
    "description": "CARD INDEX",
    "category": "thing"
  },
  {
    "name": "chart_with_upwards_trend",
    "unicode": "1F4C8",
    "shortcode": "chart_with_upwards_trend",
    "description": "CHART WITH UPWARDS TREND",
    "category": "thing"
  },
  {
    "name": "chart_with_downwards_trend",
    "unicode": "1F4C9",
    "shortcode": "chart_with_downwards_trend",
    "description": "CHART WITH DOWNWARDS TREND",
    "category": "thing"
  },
  {
    "name": "bar_chart",
    "unicode": "1F4CA",
    "shortcode": "bar_chart",
    "description": "BAR CHART",
    "category": "thing"
  },
  {
    "name": "clipboard",
    "unicode": "1F4CB",
    "shortcode": "clipboard",
    "description": "CLIPBOARD",
    "category": "thing"
  },
  {
    "name": "pushpin",
    "unicode": "1F4CC",
    "shortcode": "pushpin",
    "description": "PUSHPIN",
    "category": "thing"
  },
  {
    "name": "round_pushpin",
    "unicode": "1F4CD",
    "shortcode": "round_pushpin",
    "description": "ROUND PUSHPIN",
    "category": "thing"
  },
  {
    "name": "paperclip",
    "unicode": "1F4CE",
    "shortcode": "paperclip",
    "description": "PAPERCLIP",
    "category": "thing"
  },
  {
    "name": "straight_ruler",
    "unicode": "1F4CF",
    "shortcode": "straight_ruler",
    "description": "STRAIGHT RULER",
    "category": "thing"
  },
  {
    "name": "triangular_ruler",
    "unicode": "1F4D0",
    "shortcode": "triangular_ruler",
    "description": "TRIANGULAR RULER",
    "category": "thing"
  },
  {
    "name": "bookmark_tabs",
    "unicode": "1F4D1",
    "shortcode": "bookmark_tabs",
    "description": "BOOKMARK TABS",
    "category": "thing"
  },
  {
    "name": "ledger",
    "unicode": "1F4D2",
    "shortcode": "ledger",
    "description": "LEDGER",
    "category": "thing"
  },
  {
    "name": "notebook",
    "unicode": "1F4D3",
    "shortcode": "notebook",
    "description": "NOTEBOOK",
    "category": "thing"
  },
  {
    "name": "notebook_with_decorative_cover",
    "unicode": "1F4D4",
    "shortcode": "notebook_with_decorative_cover",
    "description": "NOTEBOOK WITH DECORATIVE COVER",
    "category": "thing"
  },
  {
    "name": "closed_book",
    "unicode": "1F4D5",
    "shortcode": "closed_book",
    "description": "CLOSED BOOK",
    "category": "thing"
  },
  {
    "name": "book",
    "unicode": "1F4D6",
    "shortcode": "book",
    "description": "OPEN BOOK",
    "category": "thing"
  },
  {
    "name": "green_book",
    "unicode": "1F4D7",
    "shortcode": "green_book",
    "description": "GREEN BOOK",
    "category": "thing"
  },
  {
    "name": "blue_book",
    "unicode": "1F4D8",
    "shortcode": "blue_book",
    "description": "BLUE BOOK",
    "category": "thing"
  },
  {
    "name": "orange_book",
    "unicode": "1F4D9",
    "shortcode": "orange_book",
    "description": "ORANGE BOOK",
    "category": "thing"
  },
  {
    "name": "books",
    "unicode": "1F4DA",
    "shortcode": "books",
    "description": "BOOKS",
    "category": "thing"
  },
  {
    "name": "name_badge",
    "unicode": "1F4DB",
    "shortcode": "name_badge",
    "description": "NAME BADGE",
    "category": "thing"
  },
  {
    "name": "scroll",
    "unicode": "1F4DC",
    "shortcode": "scroll",
    "description": "SCROLL",
    "category": "thing"
  },
  {
    "name": "memo",
    "unicode": "1F4DD",
    "shortcode": "memo",
    "description": "MEMO",
    "category": "thing"
  },
  {
    "name": "telephone_receiver",
    "unicode": "1F4DE",
    "shortcode": "telephone_receiver",
    "description": "TELEPHONE RECEIVER",
    "category": "thing"
  },
  {
    "name": "pager",
    "unicode": "1F4DF",
    "shortcode": "pager",
    "description": "PAGER",
    "category": "thing"
  },
  {
    "name": "fax",
    "unicode": "1F4E0",
    "shortcode": "fax",
    "description": "FAX MACHINE",
    "category": "thing"
  },
  {
    "name": "satellite",
    "unicode": "1F4E1",
    "shortcode": "satellite",
    "description": "SATELLITE ANTENNA",
    "category": "thing"
  },
  {
    "name": "loudspeaker",
    "unicode": "1F4E2",
    "shortcode": "loudspeaker",
    "description": "PUBLIC ADDRESS LOUDSPEAKER",
    "category": "thing"
  },
  {
    "name": "mega",
    "unicode": "1F4E3",
    "shortcode": "mega",
    "description": "CHEERING MEGAPHONE",
    "category": "thing"
  },
  {
    "name": "outbox_tray",
    "unicode": "1F4E4",
    "shortcode": "outbox_tray",
    "description": "OUTBOX TRAY",
    "category": "thing"
  },
  {
    "name": "inbox_tray",
    "unicode": "1F4E5",
    "shortcode": "inbox_tray",
    "description": "INBOX TRAY",
    "category": "thing"
  },
  {
    "name": "package",
    "unicode": "1F4E6",
    "shortcode": "package",
    "description": "PACKAGE",
    "category": "thing"
  },
  {
    "name": "e-mail",
    "unicode": "1F4E7",
    "shortcode": "e-mail",
    "description": "E-MAIL SYMBOL",
    "category": "thing"
  },
  {
    "name": "incoming_envelope",
    "unicode": "1F4E8",
    "shortcode": "incoming_envelope",
    "description": "INCOMING ENVELOPE",
    "category": "thing"
  },
  {
    "name": "envelope_with_arrow",
    "unicode": "1F4E9",
    "shortcode": "envelope_with_arrow",
    "description": "ENVELOPE WITH DOWNWARDS ARROW ABOVE",
    "category": "thing"
  },
  {
    "name": "mailbox_closed",
    "unicode": "1F4EA",
    "shortcode": "mailbox_closed",
    "description": "CLOSED MAILBOX WITH LOWERED FLAG",
    "category": "thing"
  },
  {
    "name": "mailbox",
    "unicode": "1F4EB",
    "shortcode": "mailbox",
    "description": "CLOSED MAILBOX WITH RAISED FLAG",
    "category": "thing"
  },
  {
    "name": "mailbox_with_mail",
    "unicode": "1F4EC",
    "shortcode": "mailbox_with_mail",
    "description": "OPEN MAILBOX WITH RAISED FLAG",
    "category": "thing"
  },
  {
    "name": "mailbox_with_no_mail",
    "unicode": "1F4ED",
    "shortcode": "mailbox_with_no_mail",
    "description": "OPEN MAILBOX WITH LOWERED FLAG",
    "category": "thing"
  },
  {
    "name": "postbox",
    "unicode": "1F4EE",
    "shortcode": "postbox",
    "description": "POSTBOX",
    "category": "thing"
  },
  {
    "name": "postal_horn",
    "unicode": "1F4EF",
    "shortcode": "postal_horn",
    "description": "POSTAL HORN",
    "category": "thing"
  },
  {
    "name": "newspaper",
    "unicode": "1F4F0",
    "shortcode": "newspaper",
    "description": "NEWSPAPER",
    "category": "thing"
  },
  {
    "name": "iphone",
    "unicode": "1F4F1",
    "shortcode": "iphone",
    "description": "MOBILE PHONE",
    "category": "thing"
  },
  {
    "name": "calling",
    "unicode": "1F4F2",
    "shortcode": "calling",
    "description": "MOBILE PHONE WITH RIGHTWARDS ARROW AT LEFT",
    "category": "thing"
  },
  {
    "name": "vibration_mode",
    "unicode": "1F4F3",
    "shortcode": "vibration_mode",
    "description": "VIBRATION MODE",
    "category": "thing"
  },
  {
    "name": "mobile_phone_off",
    "unicode": "1F4F4",
    "shortcode": "mobile_phone_off",
    "description": "MOBILE PHONE OFF",
    "category": "thing"
  },
  {
    "name": "no_mobile_phones",
    "unicode": "1F4F5",
    "shortcode": "no_mobile_phones",
    "description": "NO MOBILE PHONES",
    "category": "thing"
  },
  {
    "name": "signal_strength",
    "unicode": "1F4F6",
    "shortcode": "signal_strength",
    "description": "ANTENNA WITH BARS",
    "category": "thing"
  },
  {
    "name": "camera",
    "unicode": "1F4F7",
    "shortcode": "camera",
    "description": "CAMERA",
    "category": "thing"
  },
  {
    "name": "video_camera",
    "unicode": "1F4F9",
    "shortcode": "video_camera",
    "description": "VIDEO CAMERA",
    "category": "thing"
  },
  {
    "name": "tv",
    "unicode": "1F4FA",
    "shortcode": "tv",
    "description": "TELEVISION",
    "category": "thing"
  },
  {
    "name": "radio",
    "unicode": "1F4FB",
    "shortcode": "radio",
    "description": "RADIO",
    "category": "thing"
  },
  {
    "name": "vhs",
    "unicode": "1F4FC",
    "shortcode": "vhs",
    "description": "VIDEOCASSETTE",
    "category": "thing"
  },
  {
    "name": "twisted_rightwards_arrows",
    "unicode": "1F500",
    "shortcode": "twisted_rightwards_arrows",
    "description": "TWISTED RIGHTWARDS ARROWS",
    "category": "thing"
  },
  {
    "name": "repeat",
    "unicode": "1F501",
    "shortcode": "repeat",
    "description": "CLOCKWISE RIGHTWARDS AND LEFTWARDS OPEN CIRCLE ARROWS",
    "category": "thing"
  },
  {
    "name": "repeat_one",
    "unicode": "1F502",
    "shortcode": "repeat_one",
    "description": "CLOCKWISE RIGHTWARDS AND LEFTWARDS OPEN CIRCLE ARROWS WITH CIRCLED ONE OVERLAY",
    "category": "thing"
  },
  {
    "name": "arrows_clockwise",
    "unicode": "1F503",
    "shortcode": "arrows_clockwise",
    "description": "CLOCKWISE DOWNWARDS AND UPWARDS OPEN CIRCLE ARROWS",
    "category": "thing"
  },
  {
    "name": "arrows_counterclockwise",
    "unicode": "1F504",
    "shortcode": "arrows_counterclockwise",
    "description": "ANTICLOCKWISE DOWNWARDS AND UPWARDS OPEN CIRCLE ARROWS",
    "category": "thing"
  },
  {
    "name": "low_brightness",
    "unicode": "1F505",
    "shortcode": "low_brightness",
    "description": "LOW BRIGHTNESS SYMBOL",
    "category": "thing"
  },
  {
    "name": "high_brightness",
    "unicode": "1F506",
    "shortcode": "high_brightness",
    "description": "HIGH BRIGHTNESS SYMBOL",
    "category": "thing"
  },
  {
    "name": "mute",
    "unicode": "1F507",
    "shortcode": "mute",
    "description": "SPEAKER WITH CANCELLATION STROKE",
    "category": "thing"
  },
  {
    "name": "speaker",
    "unicode": "1F508",
    "shortcode": "speaker",
    "description": "SPEAKER",
    "category": "thing"
  },
  {
    "name": "sound",
    "unicode": "1F509",
    "shortcode": "sound",
    "description": "SPEAKER WITH ONE SOUND WAVE",
    "category": "thing"
  },
  {
    "name": "loud_sound",
    "unicode": "1F50A",
    "shortcode": "loud_sound",
    "description": "SPEAKER WITH THREE SOUND WAVES",
    "category": "thing"
  },
  {
    "name": "battery",
    "unicode": "1F50B",
    "shortcode": "battery",
    "description": "BATTERY",
    "category": "thing"
  },
  {
    "name": "electric_plug",
    "unicode": "1F50C",
    "shortcode": "electric_plug",
    "description": "ELECTRIC PLUG",
    "category": "thing"
  },
  {
    "name": "mag",
    "unicode": "1F50D",
    "shortcode": "mag",
    "description": "LEFT-POINTING MAGNIFYING GLASS",
    "category": "thing"
  },
  {
    "name": "mag_right",
    "unicode": "1F50E",
    "shortcode": "mag_right",
    "description": "RIGHT-POINTING MAGNIFYING GLASS",
    "category": "thing"
  },
  {
    "name": "lock_with_ink_pen",
    "unicode": "1F50F",
    "shortcode": "lock_with_ink_pen",
    "description": "LOCK WITH INK PEN",
    "category": "thing"
  },
  {
    "name": "closed_lock_with_key",
    "unicode": "1F510",
    "shortcode": "closed_lock_with_key",
    "description": "CLOSED LOCK WITH KEY",
    "category": "thing"
  },
  {
    "name": "key",
    "unicode": "1F511",
    "shortcode": "key",
    "description": "KEY",
    "category": "thing"
  },
  {
    "name": "lock",
    "unicode": "1F512",
    "shortcode": "lock",
    "description": "LOCK",
    "category": "thing"
  },
  {
    "name": "unlock",
    "unicode": "1F513",
    "shortcode": "unlock",
    "description": "OPEN LOCK",
    "category": "thing"
  },
  {
    "name": "bell",
    "unicode": "1F514",
    "shortcode": "bell",
    "description": "BELL",
    "category": "thing"
  },
  {
    "name": "no_bell",
    "unicode": "1F515",
    "shortcode": "no_bell",
    "description": "BELL WITH CANCELLATION STROKE",
    "category": "thing"
  },
  {
    "name": "bookmark",
    "unicode": "1F516",
    "shortcode": "bookmark",
    "description": "BOOKMARK",
    "category": "folderol"
  },
  {
    "name": "link",
    "unicode": "1F517",
    "shortcode": "link",
    "description": "LINK SYMBOL",
    "category": "folderol"
  },
  {
    "name": "radio_button",
    "unicode": "1F518",
    "shortcode": "radio_button",
    "description": "RADIO BUTTON",
    "category": "folderol"
  },
  {
    "name": "back",
    "unicode": "1F519",
    "shortcode": "back",
    "description": "BACK WITH LEFTWARDS ARROW ABOVE",
    "category": "folderol"
  },
  {
    "name": "end",
    "unicode": "1F51A",
    "shortcode": "end",
    "description": "END WITH LEFTWARDS ARROW ABOVE",
    "category": "folderol"
  },
  {
    "name": "on",
    "unicode": "1F51B",
    "shortcode": "on",
    "description": "ON WITH EXCLAMATION MARK WITH LEFT RIGHT ARROW ABOVE",
    "category": "folderol"
  },
  {
    "name": "soon",
    "unicode": "1F51C",
    "shortcode": "soon",
    "description": "SOON WITH RIGHTWARDS ARROW ABOVE",
    "category": "folderol"
  },
  {
    "name": "top",
    "unicode": "1F51D",
    "shortcode": "top",
    "description": "TOP WITH UPWARDS ARROW ABOVE",
    "category": "folderol"
  },
  {
    "name": "underage",
    "unicode": "1F51E",
    "shortcode": "underage",
    "description": "NO ONE UNDER EIGHTEEN SYMBOL",
    "category": "folderol"
  },
  {
    "name": "keycap_ten",
    "unicode": "1F51F",
    "shortcode": "keycap_ten",
    "description": "KEYCAP TEN",
    "category": "folderol"
  },
  {
    "name": "capital_abcd",
    "unicode": "1F520",
    "shortcode": "capital_abcd",
    "description": "INPUT SYMBOL FOR LATIN CAPITAL LETTERS",
    "category": "folderol"
  },
  {
    "name": "abcd",
    "unicode": "1F521",
    "shortcode": "abcd",
    "description": "INPUT SYMBOL FOR LATIN SMALL LETTERS",
    "category": "folderol"
  },
  {
    "name": "1234",
    "unicode": "1F522",
    "shortcode": "1234",
    "description": "INPUT SYMBOL FOR NUMBERS",
    "category": "folderol"
  },
  {
    "name": "symbols",
    "unicode": "1F523",
    "shortcode": "symbols",
    "description": "INPUT SYMBOL FOR SYMBOLS",
    "category": "folderol"
  },
  {
    "name": "abc",
    "unicode": "1F524",
    "shortcode": "abc",
    "description": "INPUT SYMBOL FOR LATIN LETTERS",
    "category": "folderol"
  },
  {
    "name": "fire",
    "unicode": "1F525",
    "shortcode": "fire",
    "description": "FIRE",
    "category": "thing"
  },
  {
    "name": "flashlight",
    "unicode": "1F526",
    "shortcode": "flashlight",
    "description": "ELECTRIC TORCH",
    "category": "thing"
  },
  {
    "name": "wrench",
    "unicode": "1F527",
    "shortcode": "wrench",
    "description": "WRENCH",
    "category": "thing"
  },
  {
    "name": "hammer",
    "unicode": "1F528",
    "shortcode": "hammer",
    "description": "HAMMER",
    "category": "thing"
  },
  {
    "name": "nut_and_bolt",
    "unicode": "1F529",
    "shortcode": "nut_and_bolt",
    "description": "NUT AND BOLT",
    "category": "thing"
  },
  {
    "name": "hocho",
    "unicode": "1F52A",
    "shortcode": "hocho",
    "description": "HOCHO",
    "category": "thing"
  },
  {
    "name": "gun",
    "unicode": "1F52B",
    "shortcode": "gun",
    "description": "PISTOL",
    "category": "thing"
  },
  {
    "name": "microscope",
    "unicode": "1F52C",
    "shortcode": "microscope",
    "description": "MICROSCOPE",
    "category": "thing"
  },
  {
    "name": "telescope",
    "unicode": "1F52D",
    "shortcode": "telescope",
    "description": "TELESCOPE",
    "category": "thing"
  },
  {
    "name": "crystal_ball",
    "unicode": "1F52E",
    "shortcode": "crystal_ball",
    "description": "CRYSTAL BALL",
    "category": "thing"
  },
  {
    "name": "six_pointed_star",
    "unicode": "1F52F",
    "shortcode": "six_pointed_star",
    "description": "SIX POINTED STAR WITH MIDDLE DOT",
    "category": "thing"
  },
  {
    "name": "beginner",
    "unicode": "1F530",
    "shortcode": "beginner",
    "description": "JAPANESE SYMBOL FOR BEGINNER",
    "category": "thing"
  },
  {
    "name": "trident",
    "unicode": "1F531",
    "shortcode": "trident",
    "description": "TRIDENT EMBLEM",
    "category": "thing"
  },
  {
    "name": "black_square_button",
    "unicode": "1F532",
    "shortcode": "black_square_button",
    "description": "BLACK SQUARE BUTTON",
    "category": "folderol"
  },
  {
    "name": "white_square_button",
    "unicode": "1F533",
    "shortcode": "white_square_button",
    "description": "WHITE SQUARE BUTTON",
    "category": "folderol"
  },
  {
    "name": "red_circle",
    "unicode": "1F534",
    "shortcode": "red_circle",
    "description": "LARGE RED CIRCLE",
    "category": "folderol"
  },
  {
    "name": "large_blue_circle",
    "unicode": "1F535",
    "shortcode": "large_blue_circle",
    "description": "LARGE BLUE CIRCLE",
    "category": "folderol"
  },
  {
    "name": "large_orange_diamond",
    "unicode": "1F536",
    "shortcode": "large_orange_diamond",
    "description": "LARGE ORANGE DIAMOND",
    "category": "folderol"
  },
  {
    "name": "large_blue_diamond",
    "unicode": "1F537",
    "shortcode": "large_blue_diamond",
    "description": "LARGE BLUE DIAMOND",
    "category": "folderol"
  },
  {
    "name": "small_orange_diamond",
    "unicode": "1F538",
    "shortcode": "small_orange_diamond",
    "description": "SMALL ORANGE DIAMOND",
    "category": "folderol"
  },
  {
    "name": "small_blue_diamond",
    "unicode": "1F539",
    "shortcode": "small_blue_diamond",
    "description": "SMALL BLUE DIAMOND",
    "category": "folderol"
  },
  {
    "name": "small_red_triangle",
    "unicode": "1F53A",
    "shortcode": "small_red_triangle",
    "description": "UP-POINTING RED TRIANGLE",
    "category": "folderol"
  },
  {
    "name": "small_red_triangle_down",
    "unicode": "1F53B",
    "shortcode": "small_red_triangle_down",
    "description": "DOWN-POINTING RED TRIANGLE",
    "category": "folderol"
  },
  {
    "name": "arrow_up_small",
    "unicode": "1F53C",
    "shortcode": "arrow_up_small",
    "description": "UP-POINTING SMALL RED TRIANGLE",
    "category": "folderol"
  },
  {
    "name": "arrow_down_small",
    "unicode": "1F53D",
    "shortcode": "arrow_down_small",
    "description": "DOWN-POINTING SMALL RED TRIANGLE",
    "category": "folderol"
  },
  {
    "name": "clock1",
    "unicode": "1F550",
    "shortcode": "clock1",
    "description": "CLOCK FACE ONE OCLOCK",
    "category": "folderol"
  },
  {
    "name": "clock2",
    "unicode": "1F551",
    "shortcode": "clock2",
    "description": "CLOCK FACE TWO OCLOCK",
    "category": "folderol"
  },
  {
    "name": "clock3",
    "unicode": "1F552",
    "shortcode": "clock3",
    "description": "CLOCK FACE THREE OCLOCK",
    "category": "folderol"
  },
  {
    "name": "clock4",
    "unicode": "1F553",
    "shortcode": "clock4",
    "description": "CLOCK FACE FOUR OCLOCK",
    "category": "folderol"
  },
  {
    "name": "clock5",
    "unicode": "1F554",
    "shortcode": "clock5",
    "description": "CLOCK FACE FIVE OCLOCK",
    "category": "folderol"
  },
  {
    "name": "clock6",
    "unicode": "1F555",
    "shortcode": "clock6",
    "description": "CLOCK FACE SIX OCLOCK",
    "category": "folderol"
  },
  {
    "name": "clock7",
    "unicode": "1F556",
    "shortcode": "clock7",
    "description": "CLOCK FACE SEVEN OCLOCK",
    "category": "folderol"
  },
  {
    "name": "clock8",
    "unicode": "1F557",
    "shortcode": "clock8",
    "description": "CLOCK FACE EIGHT OCLOCK",
    "category": "folderol"
  },
  {
    "name": "clock9",
    "unicode": "1F558",
    "shortcode": "clock9",
    "description": "CLOCK FACE NINE OCLOCK",
    "category": "folderol"
  },
  {
    "name": "clock10",
    "unicode": "1F559",
    "shortcode": "clock10",
    "description": "CLOCK FACE TEN OCLOCK",
    "category": "folderol"
  },
  {
    "name": "clock11",
    "unicode": "1F55A",
    "shortcode": "clock11",
    "description": "CLOCK FACE ELEVEN OCLOCK",
    "category": "folderol"
  },
  {
    "name": "clock12",
    "unicode": "1F55B",
    "shortcode": "clock12",
    "description": "CLOCK FACE TWELVE OCLOCK",
    "category": "folderol"
  },
  {
    "name": "clock130",
    "unicode": "1F55C",
    "shortcode": "clock130",
    "description": "CLOCK FACE ONE-THIRTY",
    "category": "folderol"
  },
  {
    "name": "clock230",
    "unicode": "1F55D",
    "shortcode": "clock230",
    "description": "CLOCK FACE TWO-THIRTY",
    "category": "folderol"
  },
  {
    "name": "clock330",
    "unicode": "1F55E",
    "shortcode": "clock330",
    "description": "CLOCK FACE THREE-THIRTY",
    "category": "folderol"
  },
  {
    "name": "clock430",
    "unicode": "1F55F",
    "shortcode": "clock430",
    "description": "CLOCK FACE FOUR-THIRTY",
    "category": "folderol"
  },
  {
    "name": "clock530",
    "unicode": "1F560",
    "shortcode": "clock530",
    "description": "CLOCK FACE FIVE-THIRTY",
    "category": "folderol"
  },
  {
    "name": "clock630",
    "unicode": "1F561",
    "shortcode": "clock630",
    "description": "CLOCK FACE SIX-THIRTY",
    "category": "folderol"
  },
  {
    "name": "clock730",
    "unicode": "1F562",
    "shortcode": "clock730",
    "description": "CLOCK FACE SEVEN-THIRTY",
    "category": "folderol"
  },
  {
    "name": "clock830",
    "unicode": "1F563",
    "shortcode": "clock830",
    "description": "CLOCK FACE EIGHT-THIRTY",
    "category": "folderol"
  },
  {
    "name": "clock930",
    "unicode": "1F564",
    "shortcode": "clock930",
    "description": "CLOCK FACE NINE-THIRTY",
    "category": "folderol"
  },
  {
    "name": "clock1030",
    "unicode": "1F565",
    "shortcode": "clock1030",
    "description": "CLOCK FACE TEN-THIRTY",
    "category": "folderol"
  },
  {
    "name": "clock1130",
    "unicode": "1F566",
    "shortcode": "clock1130",
    "description": "CLOCK FACE ELEVEN-THIRTY",
    "category": "folderol"
  },
  {
    "name": "clock1230",
    "unicode": "1F567",
    "shortcode": "clock1230",
    "description": "CLOCK FACE TWELVE-THIRTY",
    "category": "folderol"
  },
  {
    "name": "mount_fuji",
    "unicode": "1F5FB",
    "shortcode": "mount_fuji",
    "description": "MOUNT FUJI",
    "category": "travel"
  },
  {
    "name": "tokyo_tower",
    "unicode": "1F5FC",
    "shortcode": "tokyo_tower",
    "description": "TOKYO TOWER",
    "category": "travel"
  },
  {
    "name": "statue_of_liberty",
    "unicode": "1F5FD",
    "shortcode": "statue_of_liberty",
    "description": "STATUE OF LIBERTY",
    "category": "travel"
  },
  {
    "name": "japan",
    "unicode": "1F5FE",
    "shortcode": "japan",
    "description": "SILHOUETTE OF JAPAN",
    "category": "travel"
  },
  {
    "name": "moyai",
    "unicode": "1F5FF",
    "shortcode": "moyai",
    "description": "MOYAI",
    "category": "travel"
  },
  {
    "name": "grinning",
    "unicode": "1F600",
    "shortcode": "grinning",
    "description": "GRINNING FACE",
    "category": "people"
  },
  {
    "name": "grin",
    "unicode": "1F601",
    "shortcode": "grin",
    "description": "GRINNING FACE WITH SMILING EYES",
    "category": "people"
  },
  {
    "name": "joy",
    "unicode": "1F602",
    "shortcode": "joy",
    "description": "FACE WITH TEARS OF JOY",
    "category": "people"
  },
  {
    "name": "smiley",
    "unicode": "1F603",
    "shortcode": "smiley",
    "description": "SMILING FACE WITH OPEN MOUTH",
    "category": "people"
  },
  {
    "name": "smile",
    "unicode": "1F604",
    "shortcode": "smile",
    "description": "SMILING FACE WITH OPEN MOUTH AND SMILING EYES",
    "category": "people"
  },
  {
    "name": "sweat_smile",
    "unicode": "1F605",
    "shortcode": "sweat_smile",
    "description": "SMILING FACE WITH OPEN MOUTH AND COLD SWEAT",
    "category": "people"
  },
  {
    "name": "laughing",
    "unicode": "1F606",
    "shortcode": "laughing",
    "description": "SMILING FACE WITH OPEN MOUTH AND TIGHTLY-CLOSED EYES",
    "category": "people"
  },
  {
    "name": "innocent",
    "unicode": "1F607",
    "shortcode": "innocent",
    "description": "SMILING FACE WITH HALO",
    "category": "people"
  },
  {
    "name": "smiling_imp",
    "unicode": "1F608",
    "shortcode": "smiling_imp",
    "description": "SMILING FACE WITH HORNS",
    "category": "people"
  },
  {
    "name": "wink",
    "unicode": "1F609",
    "shortcode": "wink",
    "description": "WINKING FACE",
    "category": "people"
  },
  {
    "name": "blush",
    "unicode": "1F60A",
    "shortcode": "blush",
    "description": "SMILING FACE WITH SMILING EYES",
    "category": "people"
  },
  {
    "name": "yum",
    "unicode": "1F60B",
    "shortcode": "yum",
    "description": "FACE SAVOURING DELICIOUS FOOD",
    "category": "people"
  },
  {
    "name": "relieved",
    "unicode": "1F60C",
    "shortcode": "relieved",
    "description": "RELIEVED FACE",
    "category": "people"
  },
  {
    "name": "heart_eyes",
    "unicode": "1F60D",
    "shortcode": "heart_eyes",
    "description": "SMILING FACE WITH HEART-SHAPED EYES",
    "category": "people"
  },
  {
    "name": "sunglasses",
    "unicode": "1F60E",
    "shortcode": "sunglasses",
    "description": "SMILING FACE WITH SUNGLASSES",
    "category": "people"
  },
  {
    "name": "smirk",
    "unicode": "1F60F",
    "shortcode": "smirk",
    "description": "SMIRKING FACE",
    "category": "people"
  },
  {
    "name": "neutral_face",
    "unicode": "1F610",
    "shortcode": "neutral_face",
    "description": "NEUTRAL FACE",
    "category": "people"
  },
  {
    "name": "expressionless",
    "unicode": "1F611",
    "shortcode": "expressionless",
    "description": "EXPRESSIONLESS FACE",
    "category": "people"
  },
  {
    "name": "unamused",
    "unicode": "1F612",
    "shortcode": "unamused",
    "description": "UNAMUSED FACE",
    "category": "people"
  },
  {
    "name": "sweat",
    "unicode": "1F613",
    "shortcode": "sweat",
    "description": "FACE WITH COLD SWEAT",
    "category": "people"
  },
  {
    "name": "pensive",
    "unicode": "1F614",
    "shortcode": "pensive",
    "description": "PENSIVE FACE",
    "category": "people"
  },
  {
    "name": "confused",
    "unicode": "1F615",
    "shortcode": "confused",
    "description": "CONFUSED FACE",
    "category": "people"
  },
  {
    "name": "confounded",
    "unicode": "1F616",
    "shortcode": "confounded",
    "description": "CONFOUNDED FACE",
    "category": "people"
  },
  {
    "name": "kissing",
    "unicode": "1F617",
    "shortcode": "kissing",
    "description": "KISSING FACE",
    "category": "people"
  },
  {
    "name": "kissing_heart",
    "unicode": "1F618",
    "shortcode": "kissing_heart",
    "description": "FACE THROWING A KISS",
    "category": "people"
  },
  {
    "name": "kissing_smiling_eyes",
    "unicode": "1F619",
    "shortcode": "kissing_smiling_eyes",
    "description": "KISSING FACE WITH SMILING EYES",
    "category": "people"
  },
  {
    "name": "kissing_closed_eyes",
    "unicode": "1F61A",
    "shortcode": "kissing_closed_eyes",
    "description": "KISSING FACE WITH CLOSED EYES",
    "category": "people"
  },
  {
    "name": "stuck_out_tongue",
    "unicode": "1F61B",
    "shortcode": "stuck_out_tongue",
    "description": "FACE WITH STUCK-OUT TONGUE",
    "category": "people"
  },
  {
    "name": "stuck_out_tongue_winking_eye",
    "unicode": "1F61C",
    "shortcode": "stuck_out_tongue_winking_eye",
    "description": "FACE WITH STUCK-OUT TONGUE AND WINKING EYE",
    "category": "people"
  },
  {
    "name": "stuck_out_tongue_closed_eyes",
    "unicode": "1F61D",
    "shortcode": "stuck_out_tongue_closed_eyes",
    "description": "FACE WITH STUCK-OUT TONGUE AND TIGHTLY-CLOSED EYES",
    "category": "people"
  },
  {
    "name": "disappointed",
    "unicode": "1F61E",
    "shortcode": "disappointed",
    "description": "DISAPPOINTED FACE",
    "category": "people"
  },
  {
    "name": "worried",
    "unicode": "1F61F",
    "shortcode": "worried",
    "description": "WORRIED FACE",
    "category": "people"
  },
  {
    "name": "angry",
    "unicode": "1F620",
    "shortcode": "angry",
    "description": "ANGRY FACE",
    "category": "people"
  },
  {
    "name": "rage",
    "unicode": "1F621",
    "shortcode": "rage",
    "description": "POUTING FACE",
    "category": "people"
  },
  {
    "name": "cry",
    "unicode": "1F622",
    "shortcode": "cry",
    "description": "CRYING FACE",
    "category": "people"
  },
  {
    "name": "persevere",
    "unicode": "1F623",
    "shortcode": "persevere",
    "description": "PERSEVERING FACE",
    "category": "people"
  },
  {
    "name": "triumph",
    "unicode": "1F624",
    "shortcode": "triumph",
    "description": "FACE WITH LOOK OF TRIUMPH",
    "category": "people"
  },
  {
    "name": "disappointed_relieved",
    "unicode": "1F625",
    "shortcode": "disappointed_relieved",
    "description": "DISAPPOINTED BUT RELIEVED FACE",
    "category": "people"
  },
  {
    "name": "frowning",
    "unicode": "1F626",
    "shortcode": "frowning",
    "description": "FROWNING FACE WITH OPEN MOUTH",
    "category": "people"
  },
  {
    "name": "anguished",
    "unicode": "1F627",
    "shortcode": "anguished",
    "description": "ANGUISHED FACE",
    "category": "people"
  },
  {
    "name": "fearful",
    "unicode": "1F628",
    "shortcode": "fearful",
    "description": "FEARFUL FACE",
    "category": "people"
  },
  {
    "name": "weary",
    "unicode": "1F629",
    "shortcode": "weary",
    "description": "WEARY FACE",
    "category": "people"
  },
  {
    "name": "sleepy",
    "unicode": "1F62A",
    "shortcode": "sleepy",
    "description": "SLEEPY FACE",
    "category": "people"
  },
  {
    "name": "tired_face",
    "unicode": "1F62B",
    "shortcode": "tired_face",
    "description": "TIRED FACE",
    "category": "people"
  },
  {
    "name": "grimacing",
    "unicode": "1F62C",
    "shortcode": "grimacing",
    "description": "GRIMACING FACE",
    "category": "people"
  },
  {
    "name": "sob",
    "unicode": "1F62D",
    "shortcode": "sob",
    "description": "LOUDLY CRYING FACE",
    "category": "people"
  },
  {
    "name": "open_mouth",
    "unicode": "1F62E",
    "shortcode": "open_mouth",
    "description": "FACE WITH OPEN MOUTH",
    "category": "people"
  },
  {
    "name": "hushed",
    "unicode": "1F62F",
    "shortcode": "hushed",
    "description": "HUSHED FACE",
    "category": "people"
  },
  {
    "name": "cold_sweat",
    "unicode": "1F630",
    "shortcode": "cold_sweat",
    "description": "FACE WITH OPEN MOUTH AND COLD SWEAT",
    "category": "people"
  },
  {
    "name": "scream",
    "unicode": "1F631",
    "shortcode": "scream",
    "description": "FACE SCREAMING IN FEAR",
    "category": "people"
  },
  {
    "name": "astonished",
    "unicode": "1F632",
    "shortcode": "astonished",
    "description": "ASTONISHED FACE",
    "category": "people"
  },
  {
    "name": "flushed",
    "unicode": "1F633",
    "shortcode": "flushed",
    "description": "FLUSHED FACE",
    "category": "people"
  },
  {
    "name": "sleeping",
    "unicode": "1F634",
    "shortcode": "sleeping",
    "description": "SLEEPING FACE",
    "category": "people"
  },
  {
    "name": "dizzy_face",
    "unicode": "1F635",
    "shortcode": "dizzy_face",
    "description": "DIZZY FACE",
    "category": "people"
  },
  {
    "name": "no_mouth",
    "unicode": "1F636",
    "shortcode": "no_mouth",
    "description": "FACE WITHOUT MOUTH",
    "category": "people"
  },
  {
    "name": "mask",
    "unicode": "1F637",
    "shortcode": "mask",
    "description": "FACE WITH MEDICAL MASK",
    "category": "people"
  },
  {
    "name": "smile_cat",
    "unicode": "1F638",
    "shortcode": "smile_cat",
    "description": "GRINNING CAT FACE WITH SMILING EYES",
    "category": "people"
  },
  {
    "name": "joy_cat",
    "unicode": "1F639",
    "shortcode": "joy_cat",
    "description": "CAT FACE WITH TEARS OF JOY",
    "category": "people"
  },
  {
    "name": "smiley_cat",
    "unicode": "1F63A",
    "shortcode": "smiley_cat",
    "description": "SMILING CAT FACE WITH OPEN MOUTH",
    "category": "people"
  },
  {
    "name": "heart_eyes_cat",
    "unicode": "1F63B",
    "shortcode": "heart_eyes_cat",
    "description": "SMILING CAT FACE WITH HEART-SHAPED EYES",
    "category": "people"
  },
  {
    "name": "smirk_cat",
    "unicode": "1F63C",
    "shortcode": "smirk_cat",
    "description": "CAT FACE WITH WRY SMILE",
    "category": "people"
  },
  {
    "name": "kissing_cat",
    "unicode": "1F63D",
    "shortcode": "kissing_cat",
    "description": "KISSING CAT FACE WITH CLOSED EYES",
    "category": "people"
  },
  {
    "name": "pouting_cat",
    "unicode": "1F63E",
    "shortcode": "pouting_cat",
    "description": "POUTING CAT FACE",
    "category": "people"
  },
  {
    "name": "crying_cat_face",
    "unicode": "1F63F",
    "shortcode": "crying_cat_face",
    "description": "CRYING CAT FACE",
    "category": "people"
  },
  {
    "name": "scream_cat",
    "unicode": "1F640",
    "shortcode": "scream_cat",
    "description": "WEARY CAT FACE",
    "category": "people"
  },
  {
    "name": "no_good",
    "unicode": "1F645",
    "shortcode": "no_good",
    "description": "FACE WITH NO GOOD GESTURE",
    "category": "people"
  },
  {
    "name": "ok_woman",
    "unicode": "1F646",
    "shortcode": "ok_woman",
    "description": "FACE WITH OK GESTURE",
    "category": "people"
  },
  {
    "name": "bow",
    "unicode": "1F647",
    "shortcode": "bow",
    "description": "PERSON BOWING DEEPLY",
    "category": "people"
  },
  {
    "name": "see_no_evil",
    "unicode": "1F648",
    "shortcode": "see_no_evil",
    "description": "SEE-NO-EVIL MONKEY",
    "category": "people"
  },
  {
    "name": "hear_no_evil",
    "unicode": "1F649",
    "shortcode": "hear_no_evil",
    "description": "HEAR-NO-EVIL MONKEY",
    "category": "people"
  },
  {
    "name": "speak_no_evil",
    "unicode": "1F64A",
    "shortcode": "speak_no_evil",
    "description": "SPEAK-NO-EVIL MONKEY",
    "category": "people"
  },
  {
    "name": "raising_hand",
    "unicode": "1F64B",
    "shortcode": "raising_hand",
    "description": "HAPPY PERSON RAISING ONE HAND",
    "category": "people"
  },
  {
    "name": "raised_hands",
    "unicode": "1F64C",
    "shortcode": "raised_hands",
    "description": "PERSON RAISING BOTH HANDS IN CELEBRATION",
    "category": "people"
  },
  {
    "name": "person_frowning",
    "unicode": "1F64D",
    "shortcode": "person_frowning",
    "description": "PERSON FROWNING",
    "category": "people"
  },
  {
    "name": "person_with_pouting_face",
    "unicode": "1F64E",
    "shortcode": "person_with_pouting_face",
    "description": "PERSON WITH POUTING FACE",
    "category": "people"
  },
  {
    "name": "pray",
    "unicode": "1F64F",
    "shortcode": "pray",
    "description": "PERSON WITH FOLDED HANDS",
    "category": "people"
  },
  {
    "name": "rocket",
    "unicode": "1F680",
    "shortcode": "rocket",
    "description": "ROCKET",
    "category": "travel"
  },
  {
    "name": "helicopter",
    "unicode": "1F681",
    "shortcode": "helicopter",
    "description": "HELICOPTER",
    "category": "travel"
  },
  {
    "name": "steam_locomotive",
    "unicode": "1F682",
    "shortcode": "steam_locomotive",
    "description": "STEAM LOCOMOTIVE",
    "category": "travel"
  },
  {
    "name": "railway_car",
    "unicode": "1F683",
    "shortcode": "railway_car",
    "description": "RAILWAY CAR",
    "category": "travel"
  },
  {
    "name": "bullettrain_side",
    "unicode": "1F684",
    "shortcode": "bullettrain_side",
    "description": "HIGH-SPEED TRAIN",
    "category": "travel"
  },
  {
    "name": "bullettrain_front",
    "unicode": "1F685",
    "shortcode": "bullettrain_front",
    "description": "HIGH-SPEED TRAIN WITH BULLET NOSE",
    "category": "travel"
  },
  {
    "name": "train2",
    "unicode": "1F686",
    "shortcode": "train2",
    "description": "TRAIN",
    "category": "travel"
  },
  {
    "name": "metro",
    "unicode": "1F687",
    "shortcode": "metro",
    "description": "METRO",
    "category": "travel"
  },
  {
    "name": "light_rail",
    "unicode": "1F688",
    "shortcode": "light_rail",
    "description": "LIGHT RAIL",
    "category": "travel"
  },
  {
    "name": "station",
    "unicode": "1F689",
    "shortcode": "station",
    "description": "STATION",
    "category": "travel"
  },
  {
    "name": "tram",
    "unicode": "1F68A",
    "shortcode": "tram",
    "description": "TRAM",
    "category": "travel"
  },
  {
    "name": "train",
    "unicode": "1F68B",
    "shortcode": "train",
    "description": "TRAM CAR",
    "category": "travel"
  },
  {
    "name": "bus",
    "unicode": "1F68C",
    "shortcode": "bus",
    "description": "BUS",
    "category": "travel"
  },
  {
    "name": "oncoming_bus",
    "unicode": "1F68D",
    "shortcode": "oncoming_bus",
    "description": "ONCOMING BUS",
    "category": "travel"
  },
  {
    "name": "trolleybus",
    "unicode": "1F68E",
    "shortcode": "trolleybus",
    "description": "TROLLEYBUS",
    "category": "travel"
  },
  {
    "name": "busstop",
    "unicode": "1F68F",
    "shortcode": "busstop",
    "description": "BUS STOP",
    "category": "travel"
  },
  {
    "name": "minibus",
    "unicode": "1F690",
    "shortcode": "minibus",
    "description": "MINIBUS",
    "category": "travel"
  },
  {
    "name": "ambulance",
    "unicode": "1F691",
    "shortcode": "ambulance",
    "description": "AMBULANCE",
    "category": "travel"
  },
  {
    "name": "fire_engine",
    "unicode": "1F692",
    "shortcode": "fire_engine",
    "description": "FIRE ENGINE",
    "category": "travel"
  },
  {
    "name": "police_car",
    "unicode": "1F693",
    "shortcode": "police_car",
    "description": "POLICE CAR",
    "category": "travel"
  },
  {
    "name": "oncoming_police_car",
    "unicode": "1F694",
    "shortcode": "oncoming_police_car",
    "description": "ONCOMING POLICE CAR",
    "category": "travel"
  },
  {
    "name": "taxi",
    "unicode": "1F695",
    "shortcode": "taxi",
    "description": "TAXI",
    "category": "travel"
  },
  {
    "name": "oncoming_taxi",
    "unicode": "1F696",
    "shortcode": "oncoming_taxi",
    "description": "ONCOMING TAXI",
    "category": "travel"
  },
  {
    "name": "car",
    "unicode": "1F697",
    "shortcode": "car",
    "description": "AUTOMOBILE",
    "category": "travel"
  },
  {
    "name": "oncoming_automobile",
    "unicode": "1F698",
    "shortcode": "oncoming_automobile",
    "description": "ONCOMING AUTOMOBILE",
    "category": "travel"
  },
  {
    "name": "blue_car",
    "unicode": "1F699",
    "shortcode": "blue_car",
    "description": "RECREATIONAL VEHICLE",
    "category": "travel"
  },
  {
    "name": "truck",
    "unicode": "1F69A",
    "shortcode": "truck",
    "description": "DELIVERY TRUCK",
    "category": "travel"
  },
  {
    "name": "articulated_lorry",
    "unicode": "1F69B",
    "shortcode": "articulated_lorry",
    "description": "ARTICULATED LORRY",
    "category": "travel"
  },
  {
    "name": "tractor",
    "unicode": "1F69C",
    "shortcode": "tractor",
    "description": "TRACTOR",
    "category": "travel"
  },
  {
    "name": "monorail",
    "unicode": "1F69D",
    "shortcode": "monorail",
    "description": "MONORAIL",
    "category": "travel"
  },
  {
    "name": "mountain_railway",
    "unicode": "1F69E",
    "shortcode": "mountain_railway",
    "description": "MOUNTAIN RAILWAY",
    "category": "travel"
  },
  {
    "name": "suspension_railway",
    "unicode": "1F69F",
    "shortcode": "suspension_railway",
    "description": "SUSPENSION RAILWAY",
    "category": "travel"
  },
  {
    "name": "mountain_cableway",
    "unicode": "1F6A0",
    "shortcode": "mountain_cableway",
    "description": "MOUNTAIN CABLEWAY",
    "category": "travel"
  },
  {
    "name": "aerial_tramway",
    "unicode": "1F6A1",
    "shortcode": "aerial_tramway",
    "description": "AERIAL TRAMWAY",
    "category": "travel"
  },
  {
    "name": "ship",
    "unicode": "1F6A2",
    "shortcode": "ship",
    "description": "SHIP",
    "category": "travel"
  },
  {
    "name": "rowboat",
    "unicode": "1F6A3",
    "shortcode": "rowboat",
    "description": "ROWBOAT",
    "category": "travel"
  },
  {
    "name": "speedboat",
    "unicode": "1F6A4",
    "shortcode": "speedboat",
    "description": "SPEEDBOAT",
    "category": "travel"
  },
  {
    "name": "traffic_light",
    "unicode": "1F6A5",
    "shortcode": "traffic_light",
    "description": "HORIZONTAL TRAFFIC LIGHT",
    "category": "travel"
  },
  {
    "name": "vertical_traffic_light",
    "unicode": "1F6A6",
    "shortcode": "vertical_traffic_light",
    "description": "VERTICAL TRAFFIC LIGHT",
    "category": "travel"
  },
  {
    "name": "construction",
    "unicode": "1F6A7",
    "shortcode": "construction",
    "description": "CONSTRUCTION SIGN",
    "category": "travel"
  },
  {
    "name": "rotating_light",
    "unicode": "1F6A8",
    "shortcode": "rotating_light",
    "description": "POLICE CARS REVOLVING LIGHT",
    "category": "travel"
  },
  {
    "name": "triangular_flag_on_post",
    "unicode": "1F6A9",
    "shortcode": "triangular_flag_on_post",
    "description": "TRIANGULAR FLAG ON POST",
    "category": "travel"
  },
  {
    "name": "door",
    "unicode": "1F6AA",
    "shortcode": "door",
    "description": "DOOR",
    "category": "travel"
  },
  {
    "name": "no_entry_sign",
    "unicode": "1F6AB",
    "shortcode": "no_entry_sign",
    "description": "NO ENTRY SIGN",
    "category": "travel"
  },
  {
    "name": "smoking",
    "unicode": "1F6AC",
    "shortcode": "smoking",
    "description": "SMOKING SYMBOL",
    "category": "travel"
  },
  {
    "name": "no_smoking",
    "unicode": "1F6AD",
    "shortcode": "no_smoking",
    "description": "NO SMOKING SYMBOL",
    "category": "travel"
  },
  {
    "name": "put_litter_in_its_place",
    "unicode": "1F6AE",
    "shortcode": "put_litter_in_its_place",
    "description": "PUT LITTER IN ITS PLACE SYMBOL",
    "category": "travel"
  },
  {
    "name": "do_not_litter",
    "unicode": "1F6AF",
    "shortcode": "do_not_litter",
    "description": "DO NOT LITTER SYMBOL",
    "category": "travel"
  },
  {
    "name": "potable_water",
    "unicode": "1F6B0",
    "shortcode": "potable_water",
    "description": "POTABLE WATER SYMBOL",
    "category": "travel"
  },
  {
    "name": "non-potable_water",
    "unicode": "1F6B1",
    "shortcode": "non-potable_water",
    "description": "NON-POTABLE WATER SYMBOL",
    "category": "travel"
  },
  {
    "name": "bike",
    "unicode": "1F6B2",
    "shortcode": "bike",
    "description": "BICYCLE",
    "category": "travel"
  },
  {
    "name": "no_bicycles",
    "unicode": "1F6B3",
    "shortcode": "no_bicycles",
    "description": "NO BICYCLES",
    "category": "travel"
  },
  {
    "name": "bicyclist",
    "unicode": "1F6B4",
    "shortcode": "bicyclist",
    "description": "BICYCLIST",
    "category": "travel"
  },
  {
    "name": "mountain_bicyclist",
    "unicode": "1F6B5",
    "shortcode": "mountain_bicyclist",
    "description": "MOUNTAIN BICYCLIST",
    "category": "travel"
  },
  {
    "name": "walking",
    "unicode": "1F6B6",
    "shortcode": "walking",
    "description": "PEDESTRIAN",
    "category": "travel"
  },
  {
    "name": "no_pedestrians",
    "unicode": "1F6B7",
    "shortcode": "no_pedestrians",
    "description": "NO PEDESTRIANS",
    "category": "travel"
  },
  {
    "name": "children_crossing",
    "unicode": "1F6B8",
    "shortcode": "children_crossing",
    "description": "CHILDREN CROSSING",
    "category": "travel"
  },
  {
    "name": "mens",
    "unicode": "1F6B9",
    "shortcode": "mens",
    "description": "MENS SYMBOL",
    "category": "travel"
  },
  {
    "name": "womens",
    "unicode": "1F6BA",
    "shortcode": "womens",
    "description": "WOMENS SYMBOL",
    "category": "travel"
  },
  {
    "name": "restroom",
    "unicode": "1F6BB",
    "shortcode": "restroom",
    "description": "RESTROOM",
    "category": "travel"
  },
  {
    "name": "baby_symbol",
    "unicode": "1F6BC",
    "shortcode": "baby_symbol",
    "description": "BABY SYMBOL",
    "category": "travel"
  },
  {
    "name": "toilet",
    "unicode": "1F6BD",
    "shortcode": "toilet",
    "description": "TOILET",
    "category": "travel"
  },
  {
    "name": "wc",
    "unicode": "1F6BE",
    "shortcode": "wc",
    "description": "WATER CLOSET",
    "category": "travel"
  },
  {
    "name": "shower",
    "unicode": "1F6BF",
    "shortcode": "shower",
    "description": "SHOWER",
    "category": "travel"
  },
  {
    "name": "bath",
    "unicode": "1F6C0",
    "shortcode": "bath",
    "description": "BATH",
    "category": "travel"
  },
  {
    "name": "bathtub",
    "unicode": "1F6C1",
    "shortcode": "bathtub",
    "description": "BATHTUB",
    "category": "travel"
  },
  {
    "name": "passport_control",
    "unicode": "1F6C2",
    "shortcode": "passport_control",
    "description": "PASSPORT CONTROL",
    "category": "travel"
  },
  {
    "name": "customs",
    "unicode": "1F6C3",
    "shortcode": "customs",
    "description": "CUSTOMS",
    "category": "travel"
  },
  {
    "name": "baggage_claim",
    "unicode": "1F6C4",
    "shortcode": "baggage_claim",
    "description": "BAGGAGE CLAIM",
    "category": "travel"
  },
  {
    "name": "left_luggage",
    "unicode": "1F6C5",
    "shortcode": "left_luggage",
    "description": "LEFT LUGGAGE",
    "category": "travel"
  },
  {
    "name": "hash",
    "unicode": "0023-20E3",
    "shortcode": "hash",
    "description": "HASH KEY",
    "category": "folderol"
  },
  {
    "name": "zero",
    "unicode": "0030-20E3",
    "shortcode": "zero",
    "description": "KEYCAP 0",
    "category": "folderol"
  },
  {
    "name": "one",
    "unicode": "0031-20E3",
    "shortcode": "one",
    "description": "KEYCAP 1",
    "category": "folderol"
  },
  {
    "name": "two",
    "unicode": "0032-20E3",
    "shortcode": "two",
    "description": "KEYCAP 2",
    "category": "folderol"
  },
  {
    "name": "three",
    "unicode": "0033-20E3",
    "shortcode": "three",
    "description": "KEYCAP 3",
    "category": "folderol"
  },
  {
    "name": "four",
    "unicode": "0034-20E3",
    "shortcode": "four",
    "description": "KEYCAP 4",
    "category": "folderol"
  },
  {
    "name": "five",
    "unicode": "0035-20E3",
    "shortcode": "five",
    "description": "KEYCAP 5",
    "category": "folderol"
  },
  {
    "name": "six",
    "unicode": "0036-20E3",
    "shortcode": "six",
    "description": "KEYCAP 6",
    "category": "folderol"
  },
  {
    "name": "seven",
    "unicode": "0037-20E3",
    "shortcode": "seven",
    "description": "KEYCAP 7",
    "category": "folderol"
  },
  {
    "name": "eight",
    "unicode": "0038-20E3",
    "shortcode": "eight",
    "description": "KEYCAP 8",
    "category": "folderol"
  },
  {
    "name": "nine",
    "unicode": "0039-20E3",
    "shortcode": "nine",
    "description": "KEYCAP 9",
    "category": "folderol"
  },
  {
    "name": "flag-cn",
    "unicode": "1F1E8-1F1F3",
    "shortcode": "flag-cn",
    "description": "REGIONAL INDICATOR SYMBOL LETTERS CN",
    "category": "folderol"
  },
  {
    "name": "flag-de",
    "unicode": "1F1E9-1F1EA",
    "shortcode": "flag-de",
    "description": "REGIONAL INDICATOR SYMBOL LETTERS DE",
    "category": "folderol"
  },
  {
    "name": "flag-es",
    "unicode": "1F1EA-1F1F8",
    "shortcode": "flag-es",
    "description": "REGIONAL INDICATOR SYMBOL LETTERS ES",
    "category": "folderol"
  },
  {
    "name": "flag-fr",
    "unicode": "1F1EB-1F1F7",
    "shortcode": "flag-fr",
    "description": "REGIONAL INDICATOR SYMBOL LETTERS FR",
    "category": "folderol"
  },
  {
    "name": "flag-gb",
    "unicode": "1F1EC-1F1E7",
    "shortcode": "flag-gb",
    "description": "REGIONAL INDICATOR SYMBOL LETTERS GB",
    "category": "folderol"
  },
  {
    "name": "flag-it",
    "unicode": "1F1EE-1F1F9",
    "shortcode": "flag-it",
    "description": "REGIONAL INDICATOR SYMBOL LETTERS IT",
    "category": "folderol"
  },
  {
    "name": "flag-jp",
    "unicode": "1F1EF-1F1F5",
    "shortcode": "flag-jp",
    "description": "REGIONAL INDICATOR SYMBOL LETTERS JP",
    "category": "folderol"
  },
  {
    "name": "flag-kr",
    "unicode": "1F1F0-1F1F7",
    "shortcode": "flag-kr",
    "description": "REGIONAL INDICATOR SYMBOL LETTERS KR",
    "category": "folderol"
  },
  {
    "name": "flag-ru",
    "unicode": "1F1F7-1F1FA",
    "shortcode": "flag-ru",
    "description": "REGIONAL INDICATOR SYMBOL LETTERS RU",
    "category": "folderol"
  },
  {
    "name": "flag-us",
    "unicode": "1F1FA-1F1F8",
    "shortcode": "flag-us",
    "description": "REGIONAL INDICATOR SYMBOL LETTERS US",
    "category": "folderol"
  }
]
});
;
/*--- END: /home/kinkeaca/public_html/plugins/emoji-picker/js/jquery.emojipicker.tw.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/modules/boonex/simple_messenger/js/messenger_core.js---*/

    function BxSimpleMessenger()
    {
        // contain some chat box's settings;
        this.chatBoxSettings = new Object(),
        // contain all defined chat's boxes ;
        this.oDefinedChatBoxes  = new Object(),
        this.systemMessages = new Object(),
        this.isSent = true,
        this.bFirstRender = false,
        this.isProcessed  = true;
        this.mCorkHandler = '';
        this.isProcessedBlocked = false;

        /**
         * Function will send message from logged member ;
         *
         * @param  : e (system event) ;
         * @param  : evElement (object) (link on current field);
         * @param  : iRecipientId (integer) - recipient's Id;
         */
        this.sendMessage = function(e, evElement, iRecipientId)
        {
            var self = this;

            if(!this.isSent) {
                alert(this.systemMessages.waitMessage);
                return false;
            }

            if( !e ) {
                if( window.event ) { //Internet Explorer
                  e = window.event;
                } 
                else { //total failure, we have no way of referencing the event
                  return false;
                }
            }

            var n = e.keyCode ? e.keyCode : e.charCode; 

            if (n == 13) { //Enter
                if (e.preventDefault) 
                    e.preventDefault(); 
                else
                    e.returnValue = false;
                var sMessage = $.trim($(evElement).attr('value'));
                if ( !sMessage ) {
                    alert(this.systemMessages.emptyMessage);
                }
                else {
                    var _sRandom = Math.random();
                    this.isSent = false;

                    this.isProcessedBlocked =  true;
                    // stop the deserted notify procces;
                    clearTimeout(this.chatBoxSettings.updateTimeNotifyHandler);
                    this.chatBoxSettings.updateTimeNotifyHandler = '';

                    // send new message ;
                    $.post(this.chatBoxSettings.sPageReceiver + '/send_message/' + iRecipientId + '&_r=' + _sRandom, {message : encodeURIComponent(sMessage)}, 
                        function(sAnswer)
                        {
                            self.isSent = true;
                            var _self = self;

                            if(sAnswer) {
                                alert(sAnswer);
                            }
                            else {
                                // clear input field ;
                                $(evElement).attr('value', '');

                                self.loadMessageBlock( iRecipientId, 
                                    function() 
                                    { 
                                        // show the chat's box if he is not visible;
                                        var $el = $('#' + self.chatBoxSettings.sHistoryBlockPrefix + iRecipientId);
                                        if($el.css('visibility') == 'hidden') {
                                            self.showChatWindow(self.chatBoxSettings.sHistoryBlockPrefix + iRecipientId, $el.parent());
                                        }
                                    }
                                );
                            }

                            self.isProcessedBlocked =  false;
                            self.messageNotification();
                        }
                    );
                }
                return false;
            }
            return true;
        },

        /**
         * Function will load message block ;
         *
         * @param  : iRecipientId (integer) - recipient id;
         * @return : Html presentation data ;
         */
        this.loadMessageBlock = function(iRecipientId, callback)
        {
            var self = this;

            // if chat box not defined;
            if ( !this.checkChatBox(iRecipientId) ) {
                var _sRandom = Math.random();  

                // get new chat box ;
                $.get(this.chatBoxSettings.sPageReceiver + '/get_chat_box/' + iRecipientId + '&_r=' + _sRandom, 
                    function(sData)
                    {
                        // procces received data;
                        self.proccesReceivedData(sData);

                        if(typeof callback != 'undefined') {
                            callback();
                        }
                    }
                );
            }
            else {
                if(typeof callback != 'undefined') {
                        callback();
                }
            }
        },

        /**
         * Function will check new messages for current member ;
         *
         * @param : callback (string) - callback function's name;
         */
        this.messageNotification = function(callback)
        {
            if(this.isProcessedBlocked) {
                return;
            }

            // if data not processed start the cork function;
            if(!this.isProcessed) {
                this.cork();
            }
            else {
                var self = this;
                var iDefinedChatBoxes = this.oDefinedChatBoxes.boxes.length;
                var iLastMessageId = 0;
                var _sRandom = Math.random();
                
                var sRegisteredChatBoxes = '';

                // procces all registered chat's boxes;
                for( var i = 0; i < iDefinedChatBoxes; i++ )  
                {
                    // need define the last message's Id for current chat box;
                    iLastMessageId = this.oDefinedChatBoxes.boxes[i].last_message;
                    sRegisteredChatBoxes += this.oDefinedChatBoxes.boxes[i].box_id + ':' + iLastMessageId + ',';
                }

                // script will back chat's boxes;
                $.getJSON(this.chatBoxSettings.sPageReceiver + '/new_messages&_r=' + _sRandom, {'registered_chat_boxes': sRegisteredChatBoxes}, 
                    function(sData){

                        self.proccesReceivedData(sData);

                        if(typeof callback != 'undefined') {
                            callback();
                        }

                        if(self.isProcessed && !self.isProcessedBlocked) {
                            // start notificator again ;
                            self.chatBoxSettings.updateTimeNotifyHandler = setTimeout(function(){
                                self.messageNotification();
                            },self.chatBoxSettings.updateTime);
                        }
                    }
                );
            }
        },

        this.cork = function()
        {
            var self = this;

            if(this.isProcessed && !self.isProcessedBlocked) {
                clearInterval(this.mCorkHandler);
                this.messageNotification();
            }
            else {
                this.mCorkHandler = setTimeout(function(){
                    self.cork();
                }, 100);
            }
        },

        /**
         * Function will stop the active flashing signal;
         *
         * @param : iChatBoxIndex (integer) - chat box's index;
         */
        this.stopBlink = function(iChatBoxIndex)
        {
            if( typeof this.oDefinedChatBoxes.boxes[iChatBoxIndex] != 'undefined'){ 
                clearInterval(this.oDefinedChatBoxes.boxes[iChatBoxIndex].blink_handler);
                this.oDefinedChatBoxes.boxes[iChatBoxIndex].blink_handler ='';
                this.oDefinedChatBoxes.boxes[iChatBoxIndex].blink_value   ='';
            }
        },

        /**
         * Function will set the blink mode for reciving block;
         *
         * @param : iChatBoxIndex (integer) - object id;
         * @param : oBlockId (object);
         */
        this.setBlinkMode = function(iChatBoxIndex, $oBlock)
        { 
            var self = this;

            // call the flash effect;
            var rHandler = setInterval(
                function()
                {
                    // define the chat box's blink handler;
                    self.oDefinedChatBoxes.boxes[iChatBoxIndex].blink_handler = rHandler;

                    // define the first value for flash effect;
                    if(!self.oDefinedChatBoxes.boxes[iChatBoxIndex].blink_value) {
                        self.oDefinedChatBoxes.boxes[iChatBoxIndex].blink_value = 0;
                    }

                    var $oParents = $oBlock.parents('.' + self.chatBoxSettings.sChatBox + ':first');
                    // set chat box's background as colored;
                    $oParents.addClass('active_chat_block_blink_effect');

                    // set chat box's background as not colored;
                    setTimeout(
                        function() 
                        {
                            $oParents.removeClass('active_chat_block_blink_effect');

                            //increment the blink value;
                            self.oDefinedChatBoxes.boxes[iChatBoxIndex].blink_value++;

                            if( self.oDefinedChatBoxes.boxes[iChatBoxIndex].blink_value >= self.chatBoxSettings.iMaxBlinkCounter) {
                                if( !$oParents.hasClass('active_chat_block_blink_effect') ) {
                                    $oParents.addClass('active_chat_block_blink_effect');
                                }

                                self.stopBlink(iChatBoxIndex);
                                return;
                            }
                        }, 
                        500
                    );

                }, 1000
            );
        },

        /**
         * Function will scroll content;
         *
         * @param : oEl (object) - message's container;
         */
        this.elScroll = function(oEl)
        {
            // define the chat boxe's childrens height;
            iHeight = this.getChatBoxContentHeight(oEl);
            oEl.scrollTop(iHeight);
        },

        /**
         * Function will procces and evaluate received code (data must will be in JSON format);
         *
         * @param : sData (string) - data that need to procces and eveluate ;
         */
        this.proccesReceivedData = function(oResponse)
        {
            if(this.isProcessedBlocked) {
                return;
            }

            // if page receiver return some content;
            if (oResponse)  {
                this.isProcessed = false;
                var self = this;

                var iResponseCount = oResponse.senders.length;

                for( var i = 0; i < iResponseCount; i++ ) 
                {
                    // define sender's id;
                    var iSenderId  = oResponse.senders[i].sender_id;

                    if(!iSenderId) {
                        continue;
                    }

                    // define the object index;
                    var iChatBoxIndex   = this.getChatBoxObjectIndex(iSenderId);

                    // set as defined received chat box if not registered;
                    var bBoxUndefined = false;
                    if ( !this.checkChatBox(iSenderId) )
                    {
                        this.oDefinedChatBoxes.boxes[this.oDefinedChatBoxes.boxes.length] = 
                            {
                                'box_id'             : iSenderId, 
                                'status'             : oResponse.senders[i].sender_status, 
                                'status_text_update' : oResponse.senders[i].status_update_time,
                                'blink_handler'      : 0,
                                'blink_value'        : 0,
                                'last_message'       : parseInt(oResponse.senders[i].last_message),
                                'count_messages'     : oResponse.senders[i].count_messages
                            }

                            bBoxUndefined = true;
                    }
   
                    // check received data ;
                    if ( oResponse.senders[i].chat_box &&  bBoxUndefined) {
                        // draw new chat box in predefined output's block;
                        $('#' + this.chatBoxSettings.sOutputBlockId).append(oResponse.senders[i].chat_box);
                    }

                    var $oWrapper = $('#' + this.chatBoxSettings.sHistoryBlockPrefix + iSenderId);
                    var $el = $oWrapper.find('div.messages_section:first');

                    // if isset new messages for current chat box;
                    if (oResponse.senders[i].messages_list) {
                        // if chat box's messages come in section as `message_block`;
                        if ( oResponse.senders[i].messages_list != 'built-in') {

                            var iChatBoxHeight =  $el.outerHeight();
                            var iOldChatBoxContentHeight = this.getChatBoxContentHeight($el);
                            var sVisibleState = this.getVisibility($el);

                            if( (sVisibleState == 'hidden' && !this.oDefinedChatBoxes.boxes[iChatBoxIndex].blink_handler) || bBoxUndefined) {
                                // send the flesh signals;
                                this.setBlinkMode(iChatBoxIndex, $el);
                            }

                            // add received messages into current chat box;
                            $el.append(oResponse.senders[i].messages_list);

                            iOldChatBoxContentHeight = iOldChatBoxContentHeight - iChatBoxHeight;
                            if(iOldChatBoxContentHeight <= $el.scrollTop() && sVisibleState == 'visible') {
                                this.elScroll($el);
                            }

                            // count all chat boxe's messages, if count of messages more than  25 for example (see this.iNumberVisibleMessages in BxSimpleMessengerModule.php);
                            // function will delete all odd strings from the current chat box ;
                            if(this.oDefinedChatBoxes.boxes[iChatBoxIndex].count_messages > this.chatBoxSettings.iNumberVisibleMessages) {
                               
                                var $oKids = $('#' + this.chatBoxSettings.sHistoryBlockPrefix + oResponse.senders[i].sender_id + ' div.messages_section').children();
                                var iKidsCount = $oKids.length;

                                var iRowsDelete = iKidsCount - this.chatBoxSettings.iNumberVisibleMessages;
                                this.oDefinedChatBoxes.boxes[iChatBoxIndex].count_messages -= iRowsDelete;

                                for( var j = 0; j < iRowsDelete; j++ )
                                {
                                    $('#' + this.chatBoxSettings.sHistoryBlockPrefix + oResponse.senders[i].sender_id + ' div.messages_section > div:first-child').remove();
                                }
                            }
                        }
                        else {
                            if(this.bFirstRender && oResponse.senders[i].messages_list == 'built-in') {
                                if( this.getVisibility($el) != 'visible') {
                                    this.setBlinkMode(iChatBoxIndex, $el);
                                }
                            }    
                        }
                    }

                    // check the sender's status text and sender's status;
                    if( typeof this.oDefinedChatBoxes.boxes[iChatBoxIndex] != 'undefined' && !bBoxUndefined){ 

                        if( this.oDefinedChatBoxes.boxes[iChatBoxIndex].status_text_update != oResponse.senders[i].status_update_time) {
                            this.getStatusText(iSenderId);
                            this.oDefinedChatBoxes.boxes[iChatBoxIndex].status_text_update = oResponse.senders[i].status_update_time;
                        }

                        if( this.oDefinedChatBoxes.boxes[iChatBoxIndex].status != oResponse.senders[i].sender_status) {
                            this.getSenderStatus(iSenderId);
                            this.oDefinedChatBoxes.boxes[iChatBoxIndex].status = oResponse.senders[i].sender_status;
                        }

                        // define the last messages id for current chat box;
                        this.oDefinedChatBoxes.boxes[iChatBoxIndex].last_message = parseInt(oResponse.senders[i].last_message);
                        // sum count of received messages;
                        if(oResponse.senders[i].count_messages) {
                            this.oDefinedChatBoxes.boxes[iChatBoxIndex].count_messages += parseInt(oResponse.senders[i].count_messages);
                        }
                    }
                }

                // all data was processed;
                this.isProcessed = true;
            }

            if(!this.bFirstRender) {
                this.bFirstRender = true;
            }
        },

        /**
         * Function will define obj visibility option;
         *
         */
        this.getVisibility =  function(oObj)
        {
            var sVisibleState = oObj.css('visibility');
            if(sVisibleState == 'inherit') {
                sVisibleState = oObj.parent().css('visibility');
            }

            return sVisibleState;
        },

        /**
         * Function will get the chat box's sub content height;
         * Need for srolling content into chat box;
         *
         * @param  : $oChatBox (object) - chat box;
         * @return : (integer) - sub content height;
         */
        this.getChatBoxContentHeight = function($oChatBox)
        {
            var iChatBoxContentHeight = 0;

            // define the chat boxe's childrens height;
            $oChatBox.children(':not(.emojiPicker)').each(function(){
                iChatBoxContentHeight = iChatBoxContentHeight + $(this).outerHeight();
            });

            return iChatBoxContentHeight;
        },

        /**
         * Function will check received chat box's id in chatBox object;
         * and if find it will return 1 else 0;
         *
         * @param  : iChatBoxId (integer) - chat box's id;
         * @return : (integer) - will return 1 if isset and 0 if not; 
         */
        this.checkChatBox = function(iChatBoxId)
        {
            var iDefinedChatBoxes = this.oDefinedChatBoxes.boxes.length;
            for( var i = 0; i < iDefinedChatBoxes; i++ )  
            {
                if( this.oDefinedChatBoxes.boxes[i].box_id == iChatBoxId) {
                    return 1;
                }
            }

            return 0;
        },

        /**
         * Function will define the chat box's index;
         *
         * @param  : iSenderId (integer) - sender's id;
         * @return : (integer) - chat box's index;
         */
        this.getChatBoxObjectIndex = function(iSenderId)
        {
            var iDefinedChatBoxes = this.oDefinedChatBoxes.boxes.length;
            var iChatBoxIndex = 0;

            // define current chat box;
            for( var i = 0; i < iDefinedChatBoxes; i++)
            {
                if(this.oDefinedChatBoxes.boxes[i].box_id == iSenderId) {
                    return iChatBoxIndex = i;
                }
            }

            return iChatBoxIndex;
        },

        /**
         * Function will show chat window;
         *
         * @param : sWindowId (string) - window's id;
         */
        this.showChatWindow = function(sWindowId, oParentWindow)
        {  
            var $el = $('#' + sWindowId);
            var $this = this;

            // add emoji
            $el.find('input').addEmojiInput({
                wrapper: $('#' + sWindowId).find('.messages_section'),
                onhide: function (ePicker) {
                    var $oMessagesSection = $el.find('div.messages_section:first');
                    $this.elScroll($oMessagesSection);
                }
            });

            // try to define chat box's parent;
            if(typeof oParentWindow == 'undefined') {
                var oParentWindow = $('#' + sWindowId).parent();
            }

            // set as unactivated;
            if( $el.css('visibility') == 'visible' || $el.css('visibility') == 'inherit' ) {
                $(oParentWindow).removeClass('active_chat_block');
                $el.css('visibility', 'hidden');
            }
            else {
            
                // set as window active;
                var iSenderId = sWindowId.replace(/[^0-9]*/, '');
                var iChatBoxIndex = this.getChatBoxObjectIndex(iSenderId);

                // stop the flash effect if isset;
                this.stopBlink(iChatBoxIndex);

                $(oParentWindow).addClass('active_chat_block');
                $(oParentWindow).removeClass('active_chat_block_blink_effect');
            
                // set chat box's layout position;
                if(this.chatBoxSettings.sMemberMenuPosition  == 'bottom' ) {
                    $el.css('bottom', this.chatBoxSettings.iParentContainerHeight);
                }
                else {
                    $el.css('top', this.chatBoxSettings.iParentContainerHeight);
                }

                $el.css({
                    visibility: 'visible',
                    left: $el.position().left - ($el.offset().left < 0 ? $el.offset().left : 0)
                });

                this.placeTop(sWindowId, this);
            }
            
            // scroll content;
            var $oMessagesSection = $el.find('div.messages_section:first');
            this.elScroll($oMessagesSection);
        },

        /**
         * Function will block all browser's event actions;
         *
         * @param : oCurrentWindow (object) - current chat's window;
         * @param : calback (object) - calback function's name;
        */
        this.facePlate = function(event, oCurrentWindow, calback)
        {
            jQuery.each(jQuery.browser, function(i) {
                if($.browser.msie){
                    event.cancelBubble = true;
                }
                else{
                   event.stopPropagation();
                }
            });

            if(typeof calback != 'undefined') {
                calback(oCurrentWindow, this);
            }
        },

        /**
         * Function will load the chat window on top of all active chat boxes;
         *
         * @param : vCurrentChatWindow (object) or (string) - current chat's window or chat's window id;
         * @param : self (object)               - link on created object;
         */
        this.placeTop = function(vCurrentChatWindow, self)
        {
            var iZindex     = 0;
            var iTempZindex = 0;

            // get max z-index value;
            $('#' + self.chatBoxSettings.sOutputBlockId + ' div.' + self.chatBoxSettings.sChatBox).each(
                function()
                {
                    iTempZindex = parseInt( $(this).css('z-index') );
                    if(iZindex < iTempZindex) {
                        iZindex = iTempZindex;
                    }
                }
            );

            iZindex += 1;
            if(typeof vCurrentChatWindow != 'object') {
                var $el = $('#' + vCurrentChatWindow);
            }
            else {
               var $el = $(vCurrentChatWindow);
            }

            $el.css('z-index', iZindex);
            $el.parent().css('z-index', iZindex);
        },

        /**
         * Function will close the chat window;
         *
         * @param : iSenderId (integer) - message's sender id;
         */
        this.closeChatWindow = function(iSenderId)
        {
            var _sRandom = Math.random();
            var self = this;

            // send the close singnal;
            $.get(this.chatBoxSettings.sPageReceiver + '/close_window/' + iSenderId, {'_r' : _sRandom}, 
                function(sData)
                {
                    var iChatBoxCount = self.oDefinedChatBoxes.boxes.length;
                    for( var i=0; i < iChatBoxCount; i++)
                    {
                        if (typeof self.oDefinedChatBoxes.boxes[i] != 'undefined' 
                                    && self.oDefinedChatBoxes.boxes[i].box_id == iSenderId) {
                            // remove from registered chat boxes;
                            self.oDefinedChatBoxes.boxes.splice(i,1);

                            // remove from DOM;
                            $('#' + self.chatBoxSettings.sHistoryBlockPrefix + iSenderId).parent().remove();
                        }
                    }

                }
            );
        },

        /**
         * Function will get sender's status text;
         *
         * @param : iSenderId (integer) - sender's id;
         */
        this.getStatusText = function(iSenderId)
        {
            var _sRandom = Math.random();

            $('#' + this.chatBoxSettings.sHistoryBlockPrefix + iSenderId).find('.status_text').load
            (
                this.chatBoxSettings.sPageReceiver + '/get_status_text/' + iSenderId + '&_r=' + _sRandom
            );
        },

        /**
         * Function will get sender's status;
         *
         * @param : iSenderId (integer) - sender's id;
         */
        this.getSenderStatus = function(iSenderId)
        {
            var self = this ;
            var _sRandom = Math.random();

            // get new status image path;
            $.get(this.chatBoxSettings.sPageReceiver + '/get_status/' + iSenderId, {_r : _sRandom}, 
                function(sImgPath)
                {
                    $('#' + self.chatBoxSettings.sHistoryBlockPrefix + iSenderId).parent().find('.sender_status').attr('src', sImgPath);
                    self.getSenderThumbnail(iSenderId);
                }
            );
        },

        /**
         * Function will get sender's thumbnail image;
         *
         * @param : iSenderId (integer) - sender's id;
         */     
        this.getSenderThumbnail = function(iSenderId)
        {
            var _sRandom = Math.random();

            $('#' + this.chatBoxSettings.sHistoryBlockPrefix + iSenderId).parent().find('.sender_thumb').load
            (
                this.chatBoxSettings.sPageReceiver + '/get_sender_thumb/' + iSenderId + '&_r=' + _sRandom
            );
        }
    }

    var oSimpleMessenger = new BxSimpleMessenger();
;
/*--- END: /home/kinkeaca/public_html/modules/boonex/simple_messenger/js/messenger_core.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/plugins/loadCSS.js---*/
/*!
loadCSS: load a CSS file asynchronously.
[c]2015 @scottjehl, Filament Group, Inc.
Licensed MIT
*/
(function(w){
	"use strict";
	/* exported loadCSS */
	var loadCSS = function( href, before, media ){
		// Arguments explained:
		// `href` [REQUIRED] is the URL for your CSS file.
		// `before` [OPTIONAL] is the element the script should use as a reference for injecting our stylesheet <link> before
			// By default, loadCSS attempts to inject the link after the last stylesheet or script in the DOM. However, you might desire a more specific location in your document.
		// `media` [OPTIONAL] is the media type or query of the stylesheet. By default it will be 'all'
		var doc = w.document;
		var ss = doc.createElement( "link" );
		var ref;
		if( before ){
			ref = before;
		}
		else {
			var refs = ( doc.body || doc.getElementsByTagName( "head" )[ 0 ] ).childNodes;
			ref = refs[ refs.length - 1];
		}

		var sheets = doc.styleSheets;
		ss.rel = "stylesheet";
		ss.href = href;
		// temporarily set media to something inapplicable to ensure it'll fetch without blocking render
		ss.media = "only x";

		// Inject link
			// Note: the ternary preserves the existing behavior of "before" argument, but we could choose to change the argument to "after" in a later release and standardize on ref.nextSibling for all refs
			// Note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
		ref.parentNode.insertBefore( ss, ( before ? ref : ref.nextSibling ) );
		// A method (exposed on return object for external use) that mimics onload by polling until document.styleSheets until it includes the new sheet.
		var onloadcssdefined = function( cb ){
			var resolvedHref = ss.href;
			var i = sheets.length;
			while( i-- ){
				if( sheets[ i ].href === resolvedHref ){
					return cb();
				}
			}
			setTimeout(function() {
				onloadcssdefined( cb );
			});
		};

		// once loaded, set link's media back to `all` so that the stylesheet applies once it loads
		ss.onloadcssdefined = onloadcssdefined;
		onloadcssdefined(function() {
			ss.media = media || "all";
		});
		return ss;
	};
	// commonjs
	if( typeof module !== "undefined" ){
		module.exports = loadCSS;
	}
	else {
		w.loadCSS = loadCSS;
	}
}( typeof global !== "undefined" ? global : this ));

;
/*--- END: /home/kinkeaca/public_html/plugins/loadCSS.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/inc/js/user_status.js---*/
function BxUserStatus()
{
    // contain path to the site home URL ;
    this.HomeUrl;
    
    // contain true if current profile page ;
    this.bIsProfilePage;

    this.sCurrentStatusElementClass = 'sys-online-offline-changer';
    this.sCurrentStatusElementSelector = '.' + this.sCurrentStatusElementClass;

    this.userStatusInit = function(sHomeUrl, bProfilepage) 
    {
        this.HomeUrl = sHomeUrl;
        this.bIsProfilePage = (bProfilepage) ? true : false;
    };

    /**
     * Function will set member's status 
     *      (are possible values : online, offline, away, busy) ;
     *
     * @param : sStatus   (string)  - member's current status;
     * @param : oObject (object) - current html object ;
     */
    this.setUserStatus = function( sStatus, oObject, isForcePageReload ) 
    {
    	var self = this;
        var sStatus = encodeURIComponent(sStatus);
        var _sRandom = Math.random();

    	$.post(this.HomeUrl + 'list_pop.php?action=change_status' + '&_r=' + _sRandom, { 'status' : sStatus }, function(sData) {
            if ( self.bIsProfilePage || ('undefined' != typeof(isForcePageReload) && isForcePageReload)) {
                document.location.reload();
            } else {
                $(self.sCurrentStatusElementSelector).attr( { 'alt' : sStatus} ).removeClass().addClass(self.sCurrentStatusElementClass + ' sys-icon ' + sData);
                self.closeSubMenu(oObject);
            }
    	});
    };

    /**
     * Function will send new member's status message;
     *
     * @param : e (object) - keyboard event;
     * @param : oObject (object) - current html object (that contain new status message);
     */
    this.sendStatusMessage = function(e, oObject)
    {
        var self = this;

        if( !e ) {
            if( window.event ) { //Internet Explorer
              e = window.event;
            } 
            else { //total failure, we have no way of referencing the event
              return false;
            }
        }

        var n = e.keyCode ? e.keyCode : e.charCode; 

        if (n == 13) { //Enter
			if (e.preventDefault)  
				e.preventDefault();  
			else 
				e.returnValue = false;

            self.PerformSendingStatusMess(oObject);
            return false;
        }

        return true;
    };

    this.PerformSendingStatusMess = function(oObject) {
        var self = this;
        var _sRandom = Math.random();

        $.post( this.HomeUrl + 'list_pop.php?action=change_status_message' + '&_r=' + _sRandom, { status_message : oObject.value }, 
            function(sData) {
                $('#StatusMessage > .sys_sm_text').html(oObject.value).parent().show();
                $('#inloadedStatusMess').html('');
                
                //window.location.href = window.location.href; // Ticket #1359
                if ( self.bIsProfilePage ) {
                    document.location.reload();
                }
                else {
                    // try to close self window;
                    self.closeSubMenu( $(oObject).parents('ul:first') );
                }
            }
        );
    };

    /**
     * Function  will close the current opened member's sub menu;
     *
     * @param : oObject (object) - current object;
     */
    this.closeSubMenu = function (oObject)
    {
        if ( typeof membermenu != 'undefined' ) {
            membermenu.close_popup( $(oObject).attr('id') );
        }
    };
}

;
/*--- END: /home/kinkeaca/public_html/inc/js/user_status.js---*/

/*--- BEGIN: /home/kinkeaca/public_html/inc/js/splash.js---*/
//set animation timing
var animationDelay = 60000;

//loading bar effect
var barAnimationDelay = 3800;
var barWaiting = barAnimationDelay - 3000;

//letters effect
var lettersDelay = 50;

//type effect
var typeLettersDelay = 150;
var selectionDuration = 500;
var typeAnimationDelay = selectionDuration + 800;

//clip effect 
var revealDuration = 600;
var revealAnimationDelay = 1500;

$(document).ready(function() {
	initHeadline();
});
 
function initHeadline() {
	//insert <i> element for each letter of a changing word
	singleLetters($('.bx-cd-headline.letters').find('b'));
	
	//initialise headline animation
	animateHeadline($('.bx-cd-headline'));
}

function animateHeadline($headlines) {
	var duration = animationDelay;
	$headlines.each(function(){
		var headline = $(this);

		if(headline.hasClass('loading-bar')) {
			duration = barAnimationDelay;
			setTimeout(function(){ headline.find('.bx-cd-words-wrapper').addClass('is-loading') }, barWaiting);
		} else if (headline.hasClass('clip')){
			var spanWrapper = headline.find('.bx-cd-words-wrapper'),
				newWidth = spanWrapper.width() + 10
			spanWrapper.css('width', newWidth);
		} else if (!headline.hasClass('type') ) {
			//assign to .bx-cd-words-wrapper the width of its longest word
			var words = headline.find('.bx-cd-words-wrapper .bx-cd-word'),
				width = 0;
			words.each(function(){
				var wordWidth = $(this).width();
			    if (wordWidth > width) width = wordWidth;
			});
			headline.find('.bx-cd-words-wrapper').css('width', width);
		};

		//trigger animation
		setTimeout(function(){ hideWord( headline.find('.is-visible').eq(0) ) }, duration);
	});
}

function singleLetters($clauses) {
	$clauses.each(function(){
		var clause = $(this);
		var selected = clause.hasClass('is-visible');

		var words = clause.text().split(' ');
		for(i in words) {
		
			var letters = words[i].split('');
			for (j in letters) {
				if(clause.parents('.rotate-2').length > 0) 
					letters[j] = '<em>' + letters[j] + '</em>';

				letters[j] = (selected) ? '<i class="in">' + letters[j] + '</i>': '<i>' + letters[j] + '</i>';
			}
			words[i] = letters.join('');
		}
		var newWords = words.join(' ');

		clause.html(newWords);
	});
}

function hideWord($word) {
	var nextWord = takeNext($word);
	
	if($word.parents('.bx-cd-headline').hasClass('type')) {
		var parentSpan = $word.parent('.bx-cd-words-wrapper');
		parentSpan.addClass('selected').removeClass('waiting');	
		setTimeout(function(){ 
			parentSpan.removeClass('selected'); 
			$word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
		}, selectionDuration);
		setTimeout(function(){ showWord(nextWord, typeLettersDelay) }, typeAnimationDelay);
	
	} else if($word.parents('.bx-cd-headline').hasClass('letters')) {
		var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
		hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
		showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);

	}  else if($word.parents('.bx-cd-headline').hasClass('clip')) {
		$word.parents('.bx-cd-words-wrapper').animate({ width : '2px' }, revealDuration, function(){
			switchWord($word, nextWord);
			showWord(nextWord);
		});

	} else if ($word.parents('.bx-cd-headline').hasClass('loading-bar')){
		$word.parents('.bx-cd-words-wrapper').removeClass('is-loading');
		switchWord($word, nextWord);
		setTimeout(function(){ hideWord(nextWord) }, barAnimationDelay);
		setTimeout(function(){ $word.parents('.bx-cd-words-wrapper').addClass('is-loading') }, barWaiting);

	} else {
		switchWord($word, nextWord);
		setTimeout(function(){ hideWord(nextWord) }, animationDelay);
	}
}

function showWord($word, $duration) {
	if($word.parents('.bx-cd-headline').hasClass('type')) {
		showLetter($word.find('i').eq(0), $word, false, $duration);
		$word.addClass('is-visible').removeClass('is-hidden');

	}  else if($word.parents('.bx-cd-headline').hasClass('clip')) {
		$word.parents('.bx-cd-words-wrapper').animate({ 'width' : $word.width() + 10 }, revealDuration, function(){ 
			setTimeout(function(){ hideWord($word) }, revealAnimationDelay); 
		});
	}
}

function hideLetter($letter, $word, $bool, $duration) {
	$letter.removeClass('in').addClass('out');
	
	if(!$letter.is(':last-child')) {
	 	setTimeout(function(){ hideLetter($letter.next(), $word, $bool, $duration); }, $duration);  
	} else if($bool) { 
	 	setTimeout(function(){ hideWord(takeNext($word)) }, animationDelay);
	}

	if($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
		var nextWord = takeNext($word);
		switchWord($word, nextWord);
	} 
}

function showLetter($letter, $word, $bool, $duration) {
	$letter.addClass('in').removeClass('out');
	
	if(!$letter.is(':last-child')) { 
		setTimeout(function(){ showLetter($letter.next(), $word, $bool, $duration); }, $duration); 
	} else { 
		if($word.parents('.bx-cd-headline').hasClass('type')) { setTimeout(function(){ $word.parents('.bx-cd-words-wrapper').addClass('waiting'); }, 200);}
		if(!$bool) { setTimeout(function(){ hideWord($word) }, animationDelay) }
	}
}

function takeNext($word) {
	return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
}

function takePrev($word) {
	return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
}

function switchWord($oldWord, $newWord) {
	$oldWord.removeClass('is-visible').addClass('is-hidden');
	$newWord.removeClass('is-hidden').addClass('is-visible');
};
/*--- END: /home/kinkeaca/public_html/inc/js/splash.js---*/
