<!DOCTYPE html>
<html>
    
    <body>
        <section id="contenedor_serv">
        <div id="gallery" class="content">
            <!--<div id="controls" class="controls"></div>-->
            <div class="slideshow-container">
                <div id="loading" class="loader"></div>
                <div id="slideshow_m" class="slideshow_m"></div>
            </div>
            <!--<div id="caption" class="caption-container"></div>-->
        </div>
        <div id="thumbs-2" class="navigation">
            <ul class="thumbs noscript">
                <li>
                    <a class="thumb" name="leaf" href="images/img_cncn/c_g_1.jpg" title="Title #0">
                        <img src="images/img_cncn/c_s_1.jpg" alt="Title #0" />
                    </a>
                    <div class="caption">
                        <div class="download">
                            <a href="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_b.jpg">Download Original</a>
                        </div>
                        <div class="image-title">Title #0</div>
                        <div class="image-desc">Description</div>
                    </div>
                </li>
                <li>
                    <a class="thumb" name="leaf" href="images/img_cncn/c_g_2.jpg" title="Title #0">
                        <img src="images/img_cncn/c_s_2.jpg" alt="Title #0" />
                    </a>
                    <div class="caption">
                        <div class="download">
                            <a href="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_b.jpg">Download Original</a>
                        </div>
                        <div class="image-title">Title #0</div>
                        <div class="image-desc">Description</div>
                    </div>
                </li>
                <li>
                    <a class="thumb" name="leaf" href="images/img_cncn/c_g_3.jpg" title="Title #0">
                        <img src="images/img_cncn/c_s_3.jpg" alt="Title #0" />
                    </a>
                    <div class="caption">
                        <div class="download">
                            <a href="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_b.jpg">Download Original</a>
                        </div>
                        <div class="image-title">Title #0</div>
                        <div class="image-desc">Description</div>
                    </div>
                </li>
                <li>
                    <a class="thumb" name="leaf" href="images/img_cncn/c_g_4.jpg" title="Title #0">
                        <img src="images/img_cncn/c_s_4.jpg" alt="Title #0" />
                    </a>
                    <div class="caption">
                        <div class="download">
                            <a href="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_b.jpg">Download Original</a>
                        </div>
                        <div class="image-title">Title #0</div>
                        <div class="image-desc">Description</div>
                    </div>
                </li>
                <li>
                    <a class="thumb" name="leaf" href="images/img_cncn/c_g_5.jpg" title="Title #0">
                        <img src="images/img_cncn/c_s_5.jpg" alt="Title #0" />
                    </a>
                    <div class="caption">
                        <div class="download">
                            <a href="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_b.jpg">Download Original</a>
                        </div>
                        <div class="image-title">Title #0</div>
                        <div class="image-desc">Description</div>
                    </div>
                </li>
                
               
               
            </ul>
        </div>
        <div style="clear: both;"></div>
         <script>
            	jQuery(document).ready(function($) {
				// We only want these styles applied when javascript is enabled
				$('div.navigation').css({'width' : '274px', 'float' : 'left', 'margin':'1em'});
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs-2 ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs-2').galleriffic({
					delay:                     2500,
					numThumbs:                 15,
					preloadAhead:              10,
					enableTopPager:            true,
					enableBottomPager:         false,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow_m',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          true,
					renderNavControls:         true,
					playLinkText:              'Play Slideshow_m',
					pauseLinkText:             'Pause Slideshow_m',
					prevLinkText:              '&lsaquo; Previous Photo',
					nextLinkText:              'Next Photo &rsaquo;',
					nextPageLinkText:          'Next &rsaquo;',
					prevPageLinkText:          '&lsaquo; Prev',
					enableHistory:             false,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});
			});
            
        </script>
    </section>
        </body>
    
</html>
