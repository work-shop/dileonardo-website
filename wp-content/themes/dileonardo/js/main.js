'use strict';

global.$ = require('jquery');
global.jQuery = global.$;
window.$ = global.$;

//must use
import { config } from './config.js';
import { loading } from './loading.js';
import { viewportLabel } from './viewport-label.js';
import { linksNewtab } from './links-newtab.js';
import { jqueryAccordian } from './jquery-accordian.js';
import { accordian } from './accordian.js';
import { jumpLinks } from './jump-links.js';
import { modals } from './modals.js';
import { slickSlideshows } from './slick-slideshows.js';
import { sitewideAlert } from './sitewide-alert.js';
import { livereload } from './livereload-client.js';

//optional
import { stickyNav } from './sticky-nav.js';
import { dropdowns } from './dropdowns.js';
import { menuToggle } from './menu-toggle.js';
import { filter } from './filter.js';
import { scrollSpy } from './scroll-spy.js';
import { makeMap } from './map.js';
import { grid } from './grid.js';

//must use 
livereload();
loading(config.loading);
linksNewtab(config.linksNewtab);
viewportLabel(config.viewportLabel);
jqueryAccordian();
accordian();
jumpLinks(config.jumpLinks);
modals(config.modals);
slickSlideshows(config.slickSlideshows);
sitewideAlert();

//optional
stickyNav(config.stickyNav);
dropdowns(config.dropdowns);
menuToggle(config.menuToggle);
scrollSpy(config.scrollSpy);
filter();
makeMap();
grid();
