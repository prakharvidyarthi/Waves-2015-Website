$(document).ready(function(){var o=$(".grid").masonry({columnWidth:1,itemSelector:".stuff"});o.imagesLoaded().progress(function(){o.masonry("layout")}),baguetteBox.run(".grid",{animation:"slideIn"}),$(".stuff").mouseenter(function(){$(this).css("z-index","10").transition({scale:1.2,opacity:1})}),$(".stuff").mouseleave(function(){$(this).transition({scale:1,opacity:.8}).css("z-index","1")}),$($(window).width()>800?function(){var o=new $.BigVideo({useFlashForFirefox:!1});o.init(),o.show([{type:"video/mp4",src:"lookback/img/lol.mp4"},{type:"video/webm",src:"lookback/img/lol.webm"},{type:"video/ogg",src:"lookback/img/lol.ogv"}],{ambient:!0})}:function(){var o=new $.BigVideo({useFlashForFirefox:!1});o.init(),o.show([{type:"video/mp4",src:"lookback/img/lol_low.mp4"},{type:"video/webm",src:"lookback/img/lol_low.webm"},{type:"video/ogg",src:"lookback/img/lol_low.ogv"}],{ambient:!0})})});