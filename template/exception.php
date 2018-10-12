use Fratily\Debug\ExceptionView;
use Fratily\Debug\FileView;
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?=$h(ExceptionView::getTitle($exception))?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="./style/component/code.css">
        <link rel="stylesheet" href="https://cdn.rawgit.com/utatti/perfect-scrollbar/54103fab/css/perfect-scrollbar.css">
        <style>#menu li a,details summary{cursor:pointer}.center-container,h1{padding:0;height:auto}#menu li,.horizon-scroll,body{position:relative}#menu li,#menu ul,h1{display:block}#main-wrapper,#menu li{width:100%;transition:all .3s ease}*,dl.table dd{box-sizing:border-box}.code li code,body{word-wrap:break-word}abbr[title]{border-bottom:none;cursor:help;text-decoration:none}h1{margin:0;width:auto;font-size:14px;line-height:30px;font-weight:400;color:#f9f9f9}.center-container{margin:0 auto;width:100%;max-width:1024px;border:0}@media (max-width:1024px){.center-container{padding:0 2%}}.horizon-scroll{overflow:visible;width:100%;height:auto}#menu,body,html{height:100vh;overflow:hidden}#menu li a,#menu ul{height:100%;padding:0}body,html{margin:0;width:100vw;min-width:300px;padding:0}body{overflow:hidden}#menu{position:fixed;top:0;left:0;width:240px;background:#333}#menu ul{overflow:hidden;list-style:none;margin:0;width:100%;border:0}#menu li{overflow:hidden;margin:0;height:40px;padding:0;font-size:18px;line-height:40px;color:#eee}#menu li.selected,#menu li:hover{background:#aaa;color:#111}#menu li div{position:absolute;display:flex;justify-content:center;align-items:center;margin:0;width:40px;height:40px;padding:0}#main,.code{position:relative}#menu li div svg{width:25px;height:25px;fill:currentColor}#menu li a{display:block;margin:0 0 0 50px;width:calc(100% - 50px)}#main-wrapper{height:auto;min-height:100vh;background:#f9f9f9}#menu~#main-wrapper{width:calc(100% - 40px);transform:translateX(40px)}#header,#header .title,#main,dd,dl.table,section,section>header{width:100%}#menu:hover~#main-wrapper{transform:translateX(240px)}#header{overflow:hidden;height:auto;background:#333}#header .title{height:auto;padding:5px 0;font-size:.8em;color:#eee}#header .message{width:100%;height:auto;padding:10px 0;font-size:1.5em;font-weight:700;color:#fff}#main{overflow:visible;height:auto;padding-bottom:30px}section{margin:30px auto 0;height:auto;padding:5px 2%;box-shadow:0 0 2px #ddd}section>header{margin:0 auto 10px;height:auto;padding:0 0 5px;border-bottom:2px #555 solid}section>header h2{display:block;margin:0;padding:0;font-size:1.2em}dd,dt{margin:5px auto 0}dt{padding:5px 0 0}dd{padding:0 0 10px 4%}dl.split dt{border-top:1px #ddd solid}dl.split dt:first-of-type{border:none}dl.split :last-child{margin-bottom:0;padding-bottom:0}dl.table{margin:0;height:auto;padding:0;box-shadow:0 0 1px 1px #ddd;background:#ddd}dl.table dd,dl.table dt{height:auto;min-height:1em;padding:5px}.code,.code ol,dl.table dd{background:#fff}dl.table dt{float:left;margin:0;width:30%;border-top:1px #fff solid}dl.table dd{margin:0 0 0 30%;width:70%;border-top:1px #ddd solid}dl.table dd+dd{border-top-style:dotted}dl.table dd:first-of-type,dl.table dt:first-of-type{border:none}dl.table dd:after{content:"";display:block;clear:both}@media (max-width:500px){dl.table dt{float:none;width:100%}dl.table dd{box-sizing:border-box;margin:0;width:100%;padding:5px 5px 5px 4%}}.code{overflow:hidden;padding:.1em 0}.code ol{margin:0 0 0 4em;width:calc(100% - 4em);height:auto;padding:0}.code li,.code li div{width:100%;height:auto}.code li{margin:0;min-height:1.4em;padding:0;border-left:1px #ddd solid;font-size:1em;line-height:1.4em;color:#666}.code li div{display:flex}.ps__rail-x,.ps__rail-y{display:none;opacity:0;position:absolute}.code li.highlight{background:#f7e5a1}.code li code{width:auto;height:auto;min-height:1.4em;color:#222;word-break:break-all}.code li code:last-child{flex:1}.ps{overflow:hidden!important;overflow-anchor:none;-ms-overflow-style:none;touch-action:auto;-ms-touch-action:auto}.ps__rail-x{transition:background-color .2s linear,opacity .2s linear;-webkit-transition:background-color .2s linear,opacity .2s linear;height:15px;bottom:0}.ps__rail-y{transition:background-color .2s linear,opacity .2s linear;-webkit-transition:background-color .2s linear,opacity .2s linear;width:15px;right:0}.ps--active-x>.ps__rail-x,.ps--active-y>.ps__rail-y{display:block;background-color:transparent}.ps--focus>.ps__rail-x,.ps--focus>.ps__rail-y,.ps--scrolling-x>.ps__rail-x,.ps--scrolling-y>.ps__rail-y,.ps:hover>.ps__rail-x,.ps:hover>.ps__rail-y{opacity:.6}.ps .ps__rail-x.ps--clicking,.ps .ps__rail-x:focus,.ps .ps__rail-x:hover,.ps .ps__rail-y.ps--clicking,.ps .ps__rail-y:focus,.ps .ps__rail-y:hover{background-color:#eee;opacity:.9}.ps__thumb-x,.ps__thumb-y{background-color:#aaa;border-radius:6px;position:absolute}.ps__thumb-x{transition:background-color .2s linear,height .2s ease-in-out;-webkit-transition:background-color .2s linear,height .2s ease-in-out;height:6px;bottom:2px}.ps__thumb-y{transition:background-color .2s linear,width .2s ease-in-out;-webkit-transition:background-color .2s linear,width .2s ease-in-out;width:6px;right:2px}.ps__rail-x.ps--clicking .ps__thumb-x,.ps__rail-x:focus>.ps__thumb-x,.ps__rail-x:hover>.ps__thumb-x{background-color:#999;height:11px}.ps__rail-y.ps--clicking .ps__thumb-y,.ps__rail-y:focus>.ps__thumb-y,.ps__rail-y:hover>.ps__thumb-y{background-color:#999;width:11px}@supports (-ms-overflow-style:none){.ps{overflow:auto!important}}@media screen and (-ms-high-contrast:active),(-ms-high-contrast:none){.ps{overflow:auto!important}}#header .title{background:#9e3a38}#header .message{background:#b0413e}</style>
    </head>
    <body>
        <div id="main-wrapper">
            <header id="header">
                <div class="title">
                    <div class="center-container">
                        <abbr title="<?=$h(get_class($exception))?>"><?=$h(ExceptionView::getTitle($exception))?></abbr>
                    </div>
                </div>
                <div class="message">
                    <div class="center-container">
                        <span><?=$h($exception->getMessage())?></span>
                    </div>
                </div>
            </header>
            <main id="main">
                <div class="center-container">
                    <?php foreach($exceptions as $exception): ?>
                    <section>
                        <header>
                            <h2>
                                <abbr title="<?=$h(get_class($exception))?>"><?=$h(ExceptionView::getTitle($exception))?></abbr>
                            </h2>
                        </header>
                        <dl class="split">
                            <dt>in <?=$h($exception->getFile())?> line <?=$h($exception->getLine())?></dt>
                            <dd>
                                <details>
                                    <summary>source code</summary>
                                    <div class="code">
<?php
$lines  = FileView::getLines($exception->getFile, $exception->getLine() - 5, $exception->getLine() + 5);
$start  = min(array_keys($lines));
?>
                                        <ol start="<?=$h($start)?>">
                                            <?php foreach($lines as $line => $data): ?>
                                            <li<?=($line === $exception->getLine() ? ' class="highlight"' : "")?>><div><code><?=$h($data["indent"])?></code><code><?=$h($data["text"])?></code></div></li>
                                            <?php endforeach; ?>
                                        </ol>
                                    </div>
                                </details>
                            </dd>
                            <?php foreach($exception->getTrace() as $trace): ?>
                            <dt>in <?=$h($trace["file"])?> line <?=$h($trace["line"])?></dt>
                            <dd>
                                <details>
                                    <summary>source code</summary>
                                    <div class="code">
<?php
$lines  = FileView::getLines($trace["file"], $trace["line"] - 5, $trace["line"] + 5);
$start  = min(array_keys($lines));
?>
                                        <ol start="<?=$h($start)?>">
                                            <?php foreach($lines as $line => $data): ?>
                                            <li<?=($line === $trace["line"] ? ' class="highlight"' : "")?>><div><code><?=$h($data["indent"])?></code><code><?=$h($data["text"])?></code></div></li>
                                            <?php endforeach; ?>
                                        </ol>
                                    </div>
                                </details>
                            </dd>
                            <?php endforeach; ?>
                    </section>
                    <?php endforeach; ?>
                </div>
            </main>
        </div>
        <script>
            /*!
             * perfect-scrollbar v1.4.0
             * (c) 2018 Hyunje Jun
             * @license MIT
             */
            !function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.PerfectScrollbar=e()}(this,function(){"use strict";function t(t){return getComputedStyle(t)}function e(t,e){for(var i in e){var l=e[i];"number"==typeof l&&(l+="px"),t.style[i]=l}return t}function i(t){var e=document.createElement("div");return e.className=t,e}function l(t,e){if(!f)throw new Error("No element matching method supported");return f.call(t,e)}function r(t){t.remove?t.remove():t.parentNode&&t.parentNode.removeChild(t)}function n(t,e){return Array.prototype.filter.call(t.children,function(t){return l(t,e)})}function o(t,e){var i=t.element.classList,l=p.state.scrolling(e);i.contains(l)?clearTimeout(b[e]):i.add(l)}function s(t,e){b[e]=setTimeout(function(){return t.isAlive&&t.element.classList.remove(p.state.scrolling(e))},t.settings.scrollingThreshold)}function a(t){if("function"==typeof window.CustomEvent)return new CustomEvent(t);var e=document.createEvent("CustomEvent");return e.initCustomEvent(t,!1,!1,void 0),e}function c(t,e,i,l,r){var n=i[0],c=i[1],h=i[2],u=i[3],d=i[4],f=i[5];void 0===l&&(l=!0),void 0===r&&(r=!1);var p,b,g=t.element;t.reach[u]=null,g[h]<1&&(t.reach[u]="start"),g[h]>t[n]-t[c]-1&&(t.reach[u]="end"),e&&(g.dispatchEvent(a("ps-scroll-"+u)),e<0?g.dispatchEvent(a("ps-scroll-"+d)):e>0&&g.dispatchEvent(a("ps-scroll-"+f)),l&&(o(p=t,b=u),s(p,b))),t.reach[u]&&(e||r)&&g.dispatchEvent(a("ps-"+u+"-reach-"+t.reach[u]))}function h(t){return parseInt(t,10)||0}function u(t,e){return t.settings.minScrollbarLength&&(e=Math.max(e,t.settings.minScrollbarLength)),t.settings.maxScrollbarLength&&(e=Math.min(e,t.settings.maxScrollbarLength)),e}function d(t,e){function i(e){g[d]=v+Y*(e[a]-m),o(t,f),w(t),e.stopPropagation(),e.preventDefault()}function l(){s(t,f),t[b].classList.remove(p.state.clicking),t.event.unbind(t.ownerDocument,"mousemove",i)}var r=e[0],n=e[1],a=e[2],c=e[3],h=e[4],u=e[5],d=e[6],f=e[7],b=e[8],g=t.element,v=null,m=null,Y=null;t.event.bind(t[h],"mousedown",function(e){v=g[d],m=e[a],Y=(t[n]-t[r])/(t[c]-t[u]),t.event.bind(t.ownerDocument,"mousemove",i),t.event.once(t.ownerDocument,"mouseup",l),t[b].classList.add(p.state.clicking),e.stopPropagation(),e.preventDefault()})}var f="undefined"!=typeof Element&&(Element.prototype.matches||Element.prototype.webkitMatchesSelector||Element.prototype.mozMatchesSelector||Element.prototype.msMatchesSelector),p={main:"ps",element:{thumb:function(t){return"ps__thumb-"+t},rail:function(t){return"ps__rail-"+t},consuming:"ps__child--consume"},state:{focus:"ps--focus",clicking:"ps--clicking",active:function(t){return"ps--active-"+t},scrolling:function(t){return"ps--scrolling-"+t}}},b={x:null,y:null},g=function(t){this.element=t,this.handlers={}},v={isEmpty:{configurable:!0}};g.prototype.bind=function(t,e){void 0===this.handlers[t]&&(this.handlers[t]=[]),this.handlers[t].push(e),this.element.addEventListener(t,e,!1)},g.prototype.unbind=function(t,e){var i=this;this.handlers[t]=this.handlers[t].filter(function(l){return!(!e||l===e)||(i.element.removeEventListener(t,l,!1),!1)})},g.prototype.unbindAll=function(){for(var t in this.handlers)this.unbind(t)},v.isEmpty.get=function(){var t=this;return Object.keys(this.handlers).every(function(e){return 0===t.handlers[e].length})},Object.defineProperties(g.prototype,v);var m=function(){this.eventElements=[]};m.prototype.eventElement=function(t){var e=this.eventElements.filter(function(e){return e.element===t})[0];return e||(e=new g(t),this.eventElements.push(e)),e},m.prototype.bind=function(t,e,i){this.eventElement(t).bind(e,i)},m.prototype.unbind=function(t,e,i){var l=this.eventElement(t);l.unbind(e,i),l.isEmpty&&this.eventElements.splice(this.eventElements.indexOf(l),1)},m.prototype.unbindAll=function(){this.eventElements.forEach(function(t){return t.unbindAll()}),this.eventElements=[]},m.prototype.once=function(t,e,i){var l=this.eventElement(t),r=function(t){l.unbind(e,r),i(t)};l.bind(e,r)};var Y=function(t,e,i,l,r){var n;if(void 0===l&&(l=!0),void 0===r&&(r=!1),"top"===e)n=["contentHeight","containerHeight","scrollTop","y","up","down"];else{if("left"!==e)throw new Error("A proper axis should be provided");n=["contentWidth","containerWidth","scrollLeft","x","left","right"]}c(t,i,n,l,r)},X={isWebKit:"undefined"!=typeof document&&"WebkitAppearance"in document.documentElement.style,supportsTouch:"undefined"!=typeof window&&("ontouchstart"in window||window.DocumentTouch&&document instanceof window.DocumentTouch),supportsIePointer:"undefined"!=typeof navigator&&navigator.msMaxTouchPoints,isChrome:"undefined"!=typeof navigator&&/Chrome/i.test(navigator&&navigator.userAgent)},w=function(t){var i=t.element,l=Math.floor(i.scrollTop);t.containerWidth=i.clientWidth,t.containerHeight=i.clientHeight,t.contentWidth=i.scrollWidth,t.contentHeight=i.scrollHeight,i.contains(t.scrollbarXRail)||(n(i,p.element.rail("x")).forEach(function(t){return r(t)}),i.appendChild(t.scrollbarXRail)),i.contains(t.scrollbarYRail)||(n(i,p.element.rail("y")).forEach(function(t){return r(t)}),i.appendChild(t.scrollbarYRail)),!t.settings.suppressScrollX&&t.containerWidth+t.settings.scrollXMarginOffset<t.contentWidth?(t.scrollbarXActive=!0,t.railXWidth=t.containerWidth-t.railXMarginWidth,t.railXRatio=t.containerWidth/t.railXWidth,t.scrollbarXWidth=u(t,h(t.railXWidth*t.containerWidth/t.contentWidth)),t.scrollbarXLeft=h((t.negativeScrollAdjustment+i.scrollLeft)*(t.railXWidth-t.scrollbarXWidth)/(t.contentWidth-t.containerWidth))):t.scrollbarXActive=!1,!t.settings.suppressScrollY&&t.containerHeight+t.settings.scrollYMarginOffset<t.contentHeight?(t.scrollbarYActive=!0,t.railYHeight=t.containerHeight-t.railYMarginHeight,t.railYRatio=t.containerHeight/t.railYHeight,t.scrollbarYHeight=u(t,h(t.railYHeight*t.containerHeight/t.contentHeight)),t.scrollbarYTop=h(l*(t.railYHeight-t.scrollbarYHeight)/(t.contentHeight-t.containerHeight))):t.scrollbarYActive=!1,t.scrollbarXLeft>=t.railXWidth-t.scrollbarXWidth&&(t.scrollbarXLeft=t.railXWidth-t.scrollbarXWidth),t.scrollbarYTop>=t.railYHeight-t.scrollbarYHeight&&(t.scrollbarYTop=t.railYHeight-t.scrollbarYHeight),function(t,i){var l={width:i.railXWidth},r=Math.floor(t.scrollTop);i.isRtl?l.left=i.negativeScrollAdjustment+t.scrollLeft+i.containerWidth-i.contentWidth:l.left=t.scrollLeft,i.isScrollbarXUsingBottom?l.bottom=i.scrollbarXBottom-r:l.top=i.scrollbarXTop+r,e(i.scrollbarXRail,l);var n={top:r,height:i.railYHeight};i.isScrollbarYUsingRight?i.isRtl?n.right=i.contentWidth-(i.negativeScrollAdjustment+t.scrollLeft)-i.scrollbarYRight-i.scrollbarYOuterWidth:n.right=i.scrollbarYRight-t.scrollLeft:i.isRtl?n.left=i.negativeScrollAdjustment+t.scrollLeft+2*i.containerWidth-i.contentWidth-i.scrollbarYLeft-i.scrollbarYOuterWidth:n.left=i.scrollbarYLeft+t.scrollLeft,e(i.scrollbarYRail,n),e(i.scrollbarX,{left:i.scrollbarXLeft,width:i.scrollbarXWidth-i.railBorderXWidth}),e(i.scrollbarY,{top:i.scrollbarYTop,height:i.scrollbarYHeight-i.railBorderYWidth})}(i,t),t.scrollbarXActive?i.classList.add(p.state.active("x")):(i.classList.remove(p.state.active("x")),t.scrollbarXWidth=0,t.scrollbarXLeft=0,i.scrollLeft=0),t.scrollbarYActive?i.classList.add(p.state.active("y")):(i.classList.remove(p.state.active("y")),t.scrollbarYHeight=0,t.scrollbarYTop=0,i.scrollTop=0)},y={"click-rail":function(t){t.event.bind(t.scrollbarY,"mousedown",function(t){return t.stopPropagation()}),t.event.bind(t.scrollbarYRail,"mousedown",function(e){var i=e.pageY-window.pageYOffset-t.scrollbarYRail.getBoundingClientRect().top>t.scrollbarYTop?1:-1;t.element.scrollTop+=i*t.containerHeight,w(t),e.stopPropagation()}),t.event.bind(t.scrollbarX,"mousedown",function(t){return t.stopPropagation()}),t.event.bind(t.scrollbarXRail,"mousedown",function(e){var i=e.pageX-window.pageXOffset-t.scrollbarXRail.getBoundingClientRect().left>t.scrollbarXLeft?1:-1;t.element.scrollLeft+=i*t.containerWidth,w(t),e.stopPropagation()})},"drag-thumb":function(t){d(t,["containerWidth","contentWidth","pageX","railXWidth","scrollbarX","scrollbarXWidth","scrollLeft","x","scrollbarXRail"]),d(t,["containerHeight","contentHeight","pageY","railYHeight","scrollbarY","scrollbarYHeight","scrollTop","y","scrollbarYRail"])},keyboard:function(t){var e=t.element;t.event.bind(t.ownerDocument,"keydown",function(i){if(!(i.isDefaultPrevented&&i.isDefaultPrevented()||i.defaultPrevented)&&(l(e,":hover")||l(t.scrollbarX,":focus")||l(t.scrollbarY,":focus"))){var r=document.activeElement?document.activeElement:t.ownerDocument.activeElement;if(r){if("IFRAME"===r.tagName)r=r.contentDocument.activeElement;else for(;r.shadowRoot;)r=r.shadowRoot.activeElement;if(l(s=r,"input,[contenteditable]")||l(s,"select,[contenteditable]")||l(s,"textarea,[contenteditable]")||l(s,"button,[contenteditable]"))return}var n=0,o=0;switch(i.which){case 37:n=i.metaKey?-t.contentWidth:i.altKey?-t.containerWidth:-30;break;case 38:o=i.metaKey?t.contentHeight:i.altKey?t.containerHeight:30;break;case 39:n=i.metaKey?t.contentWidth:i.altKey?t.containerWidth:30;break;case 40:o=i.metaKey?-t.contentHeight:i.altKey?-t.containerHeight:-30;break;case 32:o=i.shiftKey?t.containerHeight:-t.containerHeight;break;case 33:o=t.containerHeight;break;case 34:o=-t.containerHeight;break;case 36:o=t.contentHeight;break;case 35:o=-t.contentHeight;break;default:return}t.settings.suppressScrollX&&0!==n||t.settings.suppressScrollY&&0!==o||(e.scrollTop-=o,e.scrollLeft+=n,w(t),function(i,l){var r=Math.floor(e.scrollTop);if(0===i){if(!t.scrollbarYActive)return!1;if(0===r&&l>0||r>=t.contentHeight-t.containerHeight&&l<0)return!t.settings.wheelPropagation}var n=e.scrollLeft;if(0===l){if(!t.scrollbarXActive)return!1;if(0===n&&i<0||n>=t.contentWidth-t.containerWidth&&i>0)return!t.settings.wheelPropagation}return!0}(n,o)&&i.preventDefault())}var s})},wheel:function(e){function i(i){var r,n,o,s,a,c,h,u,d,f,b=(n=(r=i).deltaX,o=-1*r.deltaY,void 0!==n&&void 0!==o||(n=-1*r.wheelDeltaX/6,o=r.wheelDeltaY/6),r.deltaMode&&1===r.deltaMode&&(n*=10,o*=10),n!=n&&o!=o&&(n=0,o=r.wheelDelta),r.shiftKey?[-o,-n]:[n,o]),g=b[0],v=b[1];if(!function(e,i,r){if(!X.isWebKit&&l.querySelector("select:focus"))return!0;if(!l.contains(e))return!1;for(var n=e;n&&n!==l;){if(n.classList.contains(p.element.consuming))return!0;var o=t(n);if([o.overflow,o.overflowX,o.overflowY].join("").match(/(scroll|auto)/)){var s=n.scrollHeight-n.clientHeight;if(s>0&&!(0===n.scrollTop&&r>0||n.scrollTop===s&&r<0))return!0;var a=n.scrollWidth-n.clientWidth;if(a>0&&!(0===n.scrollLeft&&i<0||n.scrollLeft===a&&i>0))return!0}n=n.parentNode}return!1}(i.target,g,v)){var m=!1;e.settings.useBothWheelAxes?e.scrollbarYActive&&!e.scrollbarXActive?(v?l.scrollTop-=v*e.settings.wheelSpeed:l.scrollTop+=g*e.settings.wheelSpeed,m=!0):e.scrollbarXActive&&!e.scrollbarYActive&&(g?l.scrollLeft+=g*e.settings.wheelSpeed:l.scrollLeft-=v*e.settings.wheelSpeed,m=!0):(l.scrollTop-=v*e.settings.wheelSpeed,l.scrollLeft+=g*e.settings.wheelSpeed),w(e),(m=m||(s=g,a=v,c=Math.floor(l.scrollTop),h=0===l.scrollTop,u=c+l.offsetHeight===l.scrollHeight,d=0===l.scrollLeft,f=l.scrollLeft+l.offsetWidth===l.scrollWidth,!(Math.abs(a)>Math.abs(s)?h||u:d||f)||!e.settings.wheelPropagation))&&!i.ctrlKey&&(i.stopPropagation(),i.preventDefault())}}var l=e.element;void 0!==window.onwheel?e.event.bind(l,"wheel",i):void 0!==window.onmousewheel&&e.event.bind(l,"mousewheel",i)},touch:function(e){function i(t,i){a.scrollTop-=i,a.scrollLeft-=t,w(e)}function l(t){return t.targetTouches?t.targetTouches[0]:t}function r(t){return!(t.pointerType&&"pen"===t.pointerType&&0===t.buttons||(!t.targetTouches||1!==t.targetTouches.length)&&(!t.pointerType||"mouse"===t.pointerType||t.pointerType===t.MSPOINTER_TYPE_MOUSE))}function n(t){if(r(t)){var e=l(t);c.pageX=e.pageX,c.pageY=e.pageY,h=(new Date).getTime(),null!==d&&clearInterval(d)}}function o(n){if(r(n)){var o=l(n),s={pageX:o.pageX,pageY:o.pageY},d=s.pageX-c.pageX,f=s.pageY-c.pageY;if(function(e,i,l){if(!a.contains(e))return!1;for(var r=e;r&&r!==a;){if(r.classList.contains(p.element.consuming))return!0;var n=t(r);if([n.overflow,n.overflowX,n.overflowY].join("").match(/(scroll|auto)/)){var o=r.scrollHeight-r.clientHeight;if(o>0&&!(0===r.scrollTop&&l>0||r.scrollTop===o&&l<0))return!0;var s=r.scrollLeft-r.clientWidth;if(s>0&&!(0===r.scrollLeft&&i<0||r.scrollLeft===s&&i>0))return!0}r=r.parentNode}return!1}(n.target,d,f))return;i(d,f),c=s;var b=(new Date).getTime(),g=b-h;g>0&&(u.x=d/g,u.y=f/g,h=b),function(t,i){var l=Math.floor(a.scrollTop),r=a.scrollLeft,n=Math.abs(t),o=Math.abs(i);if(o>n){if(i<0&&l===e.contentHeight-e.containerHeight||i>0&&0===l)return 0===window.scrollY&&i>0&&X.isChrome}else if(n>o&&(t<0&&r===e.contentWidth-e.containerWidth||t>0&&0===r))return!0;return!0}(d,f)&&n.preventDefault()}}function s(){e.settings.swipeEasing&&(clearInterval(d),d=setInterval(function(){e.isInitialized?clearInterval(d):u.x||u.y?Math.abs(u.x)<.01&&Math.abs(u.y)<.01?clearInterval(d):(i(30*u.x,30*u.y),u.x*=.8,u.y*=.8):clearInterval(d)},10))}if(X.supportsTouch||X.supportsIePointer){var a=e.element,c={},h=0,u={},d=null;X.supportsTouch?(e.event.bind(a,"touchstart",n),e.event.bind(a,"touchmove",o),e.event.bind(a,"touchend",s)):X.supportsIePointer&&(window.PointerEvent?(e.event.bind(a,"pointerdown",n),e.event.bind(a,"pointermove",o),e.event.bind(a,"pointerup",s)):window.MSPointerEvent&&(e.event.bind(a,"MSPointerDown",n),e.event.bind(a,"MSPointerMove",o),e.event.bind(a,"MSPointerUp",s)))}}},W=function(l,r){var n=this;if(void 0===r&&(r={}),"string"==typeof l&&(l=document.querySelector(l)),!l||!l.nodeName)throw new Error("no element is specified to initialize PerfectScrollbar");this.element=l,l.classList.add(p.main),this.settings={handlers:["click-rail","drag-thumb","keyboard","wheel","touch"],maxScrollbarLength:null,minScrollbarLength:null,scrollingThreshold:1e3,scrollXMarginOffset:0,scrollYMarginOffset:0,suppressScrollX:!1,suppressScrollY:!1,swipeEasing:!0,useBothWheelAxes:!1,wheelPropagation:!0,wheelSpeed:1};for(var o in r)n.settings[o]=r[o];this.containerWidth=null,this.containerHeight=null,this.contentWidth=null,this.contentHeight=null;var s,a,c=function(){return l.classList.add(p.state.focus)},u=function(){return l.classList.remove(p.state.focus)};this.isRtl="rtl"===t(l).direction,this.isNegativeScroll=(a=l.scrollLeft,l.scrollLeft=-1,s=l.scrollLeft<0,l.scrollLeft=a,s),this.negativeScrollAdjustment=this.isNegativeScroll?l.scrollWidth-l.clientWidth:0,this.event=new m,this.ownerDocument=l.ownerDocument||document,this.scrollbarXRail=i(p.element.rail("x")),l.appendChild(this.scrollbarXRail),this.scrollbarX=i(p.element.thumb("x")),this.scrollbarXRail.appendChild(this.scrollbarX),this.scrollbarX.setAttribute("tabindex",0),this.event.bind(this.scrollbarX,"focus",c),this.event.bind(this.scrollbarX,"blur",u),this.scrollbarXActive=null,this.scrollbarXWidth=null,this.scrollbarXLeft=null;var d=t(this.scrollbarXRail);this.scrollbarXBottom=parseInt(d.bottom,10),isNaN(this.scrollbarXBottom)?(this.isScrollbarXUsingBottom=!1,this.scrollbarXTop=h(d.top)):this.isScrollbarXUsingBottom=!0,this.railBorderXWidth=h(d.borderLeftWidth)+h(d.borderRightWidth),e(this.scrollbarXRail,{display:"block"}),this.railXMarginWidth=h(d.marginLeft)+h(d.marginRight),e(this.scrollbarXRail,{display:""}),this.railXWidth=null,this.railXRatio=null,this.scrollbarYRail=i(p.element.rail("y")),l.appendChild(this.scrollbarYRail),this.scrollbarY=i(p.element.thumb("y")),this.scrollbarYRail.appendChild(this.scrollbarY),this.scrollbarY.setAttribute("tabindex",0),this.event.bind(this.scrollbarY,"focus",c),this.event.bind(this.scrollbarY,"blur",u),this.scrollbarYActive=null,this.scrollbarYHeight=null,this.scrollbarYTop=null;var f,b,g=t(this.scrollbarYRail);this.scrollbarYRight=parseInt(g.right,10),isNaN(this.scrollbarYRight)?(this.isScrollbarYUsingRight=!1,this.scrollbarYLeft=h(g.left)):this.isScrollbarYUsingRight=!0,this.scrollbarYOuterWidth=this.isRtl?(f=this.scrollbarY,h((b=t(f)).width)+h(b.paddingLeft)+h(b.paddingRight)+h(b.borderLeftWidth)+h(b.borderRightWidth)):null,this.railBorderYWidth=h(g.borderTopWidth)+h(g.borderBottomWidth),e(this.scrollbarYRail,{display:"block"}),this.railYMarginHeight=h(g.marginTop)+h(g.marginBottom),e(this.scrollbarYRail,{display:""}),this.railYHeight=null,this.railYRatio=null,this.reach={x:l.scrollLeft<=0?"start":l.scrollLeft>=this.contentWidth-this.containerWidth?"end":null,y:l.scrollTop<=0?"start":l.scrollTop>=this.contentHeight-this.containerHeight?"end":null},this.isAlive=!0,this.settings.handlers.forEach(function(t){return y[t](n)}),this.lastScrollTop=Math.floor(l.scrollTop),this.lastScrollLeft=l.scrollLeft,this.event.bind(this.element,"scroll",function(t){return n.onScroll(t)}),w(this)};return W.prototype.update=function(){this.isAlive&&(this.negativeScrollAdjustment=this.isNegativeScroll?this.element.scrollWidth-this.element.clientWidth:0,e(this.scrollbarXRail,{display:"block"}),e(this.scrollbarYRail,{display:"block"}),this.railXMarginWidth=h(t(this.scrollbarXRail).marginLeft)+h(t(this.scrollbarXRail).marginRight),this.railYMarginHeight=h(t(this.scrollbarYRail).marginTop)+h(t(this.scrollbarYRail).marginBottom),e(this.scrollbarXRail,{display:"none"}),e(this.scrollbarYRail,{display:"none"}),w(this),Y(this,"top",0,!1,!0),Y(this,"left",0,!1,!0),e(this.scrollbarXRail,{display:""}),e(this.scrollbarYRail,{display:""}))},W.prototype.onScroll=function(t){this.isAlive&&(w(this),Y(this,"top",this.element.scrollTop-this.lastScrollTop),Y(this,"left",this.element.scrollLeft-this.lastScrollLeft),this.lastScrollTop=Math.floor(this.element.scrollTop),this.lastScrollLeft=this.element.scrollLeft)},W.prototype.destroy=function(){this.isAlive&&(this.event.unbindAll(),r(this.scrollbarX),r(this.scrollbarY),r(this.scrollbarXRail),r(this.scrollbarYRail),this.removePsClasses(),this.element=null,this.scrollbarX=null,this.scrollbarY=null,this.scrollbarXRail=null,this.scrollbarYRail=null,this.isAlive=!1)},W.prototype.removePsClasses=function(){this.element.className=this.element.className.split(" ").filter(function(t){return!t.match(/^ps([-_].+|)$/)}).join(" ")},W});
            !function(){new PerfectScrollbar("body",{suppressScrollX:!0});for(var t=document.querySelectorAll("ul.tabs li"),e=t.length,n="selected",s=function(t){return"string"!=typeof t?[]:document.querySelectorAll('[data-tabs-tab="'+t+'"]')},a=function(t){for(var e=s(t),a=e.length,r=0;r<a;r++)e[r].classList.contains(n)&&e[r].classList.remove(n)},r=function(t){for(var e=s(t),a=e.length,r=0;r<a;r++)e[r].classList.contains(n)||e[r].classList.add(n)},l=function(t){return void 0===t.dataset.tabsTab?null:t.dataset.tabsTab},c=0;c<e;c++)t[c].addEventListener("click",function(){for(var t=this.parentNode.children,e=t.length,n=0;n<e;n++)a(l(t[n]));r(l(this))},!1)}();
        </script>
    </body>
</html>