advads={max_per_session:function(e,t){var i=1;if((void 0===t||0===parseInt(t))&&(t=1),this.cookie_exists(e)){if(this.get_cookie(e)>=t)return!0;i+=parseInt(this.get_cookie(e))}return this.set_cookie(e,i),!1},count_up:function(e,t){var i=1;this.cookie_exists(e)&&(i+=parseInt(this.get_cookie(e))),this.set_cookie(e,i)},set_cookie_exists:function(e){return get_cookie(e)?!0:(set_cookie(e,"",0),!1)},get_cookie:function(e){var t,i,o,n=document.cookie.split(";");for(t=0;t<n.length;t++)if(i=n[t].substr(0,n[t].indexOf("=")),o=n[t].substr(n[t].indexOf("=")+1),i=i.replace(/^\s+|\s+$/g,""),i===e)return unescape(o)},set_cookie:function(e,t,i,o,n,s){var r=24*i*60*60;this.set_cookie_sec(e,t,r,o,n,s)},set_cookie_sec:function(e,t,i,o,n,s){var r=new Date;r.setSeconds(r.getSeconds()+parseInt(i)),document.cookie=e+"="+escape(t)+(null==i?"":"; expires="+r.toUTCString())+(null==o?"; path=/":"; path="+o)+(null==n?"":"; domain="+n)+(null==s?"":"; secure")},cookie_exists:function(e){var t=this.get_cookie(e);return null!==t&&""!==t&&void 0!==t?!0:!1},move:function(e,t,i){var o=jQuery(e);if("undefined"==typeof i&&(i={}),"undefined"==typeof i.css&&(i.css={}),"undefined"==typeof i.method&&(i.method="prependTo"),""===t&&"undefined"!=typeof i.target)switch(i.target){case"wrapper":var n="left";"undefined"!=typeof i.offset&&(n=i.offset),t=this.find_wrapper(e,n)}switch(i.method){case"insertBefore":o.insertBefore(t);break;case"insertAfter":o.insertAfter(t);break;case"appendTo":o.appendTo(t);break;case"prependTo":o.prependTo(t);break;default:o.prependTo(t)}},fix_element:function(e,t){var i=jQuery(e),o=i.parent();("static"===o.css("position")||""===o.css("position"))&&o.css("position","relative"),"undefined"!=typeof t&&t.is_invisible&&i.show();var n=parseInt(i.offset().top),s=parseInt(i.offset().left);"undefined"!=typeof t&&t.is_invisible&&i.hide(),i.css("position","fixed").css("top",n+"px").css("left",s+"px")},find_wrapper:function(e,t){var i;return jQuery("body").children().each(function(o,n){if(n.id!==e.substring(1)){var s=jQuery(n);if("right"===t&&s.offset().left+jQuery(s).width()<jQuery(window).width()||"left"===t&&s.offset().left>0)return("static"===s.css("position")||""===s.css("position"))&&s.css("position","relative"),i=n,!1}}),i},center_fixed_element:function(e){var t=jQuery(e),i=jQuery(window).width()/2-parseInt(t.css("width"))/2;t.css("left",i+"px")},center_vertically:function(e){var t=jQuery(e),i=jQuery(window).height()/2-parseInt(t.css("height"))/2;t.css("top",i+"px")},close:function(e){var t=jQuery(e);t.remove()}},jQuery(document).ready(function(){if(localStorage.getItem("advads_frontend_picker")){var e,t=jQuery("<div id='advads-picker-overlay'>"),i=[document.body,document.documentElement,document];t.css({position:"absolute",border:"solid 2px #428bca",backgroundColor:"rgba(66,139,202,0.5)",boxSizing:"border-box",zIndex:1e6,pointerEvents:"none"}).prependTo("body"),jQuery(document).mousemove(function(o){if(o.target!==e){if(~i.indexOf(o.target))return e=null,void t.hide();var n=jQuery(o.target),s=n.offset(),r=n.outerWidth(),a=n.outerHeight();e=o.target,t.css({top:s.top,left:s.left,width:r,height:a}).show(),console.log(jQuery(e).getPath())}}),jQuery(document).click(function(t){var i=jQuery(e).getPath();localStorage.setItem("advads_frontend_element",i),window.location=localStorage.getItem("advads_prev_url")})}}),jQuery.fn.extend({getPath:function(e,t){if("undefined"==typeof e&&(e=""),"undefined"==typeof t&&(t=0),this.is("html"))return"html > "+e;if(3===t)return e;var i=this.get(0).nodeName.toLowerCase(),o=this.attr("id"),n=this.attr("class");return t+=1,"undefined"==typeof o||/\d/.test(o)?"undefined"!=typeof n&&(n=n.split(/[\s\n]+/),n=jQuery.grep(n,function(e,t){return!/\d/.test(e)}),n.length&&(i+="."+n.slice(0,2).join("."))):i+="#"+o,this.siblings(i).length&&(i+=":eq("+this.siblings(i).addBack().not("#advads-picker-overlay").index(this)+")"),""===e?this.parent().getPath(i,t):this.parent().getPath(i+" > "+e,t)}});