;/*FB_PKG_DELIM*/

__d("VisibilityListener",[],(function(a,b,c,d,e,f){"use strict";function a(a,b){throw new Error("not supported here")}function b(){return!1}f.getHiddenTime=a;f.supported=b}),66);
__d("NavigationMetricsEnumJS",[],(function(a,b,c,d,e,f){a=Object.freeze({NAVIGATION_START:"navigationStart",UNLOAD_EVENT_START:"unloadEventStart",UNLOAD_EVENT_END:"unloadEventEnd",REDIRECT_START:"redirectStart",REDIRECT_END:"redirectEnd",FETCH_START:"fetchStart",DOMAIN_LOOKUP_START:"domainLookupStart",DOMAIN_LOOKUP_END:"domainLookupEnd",CONNECT_START:"connectStart",CONNECT_END:"connectEnd",SECURE_CONNECTION_START:"secureConnectionStart",REQUEST_START:"requestStart",RESPONSE_START:"responseStart",RESPONSE_END:"responseEnd",DOM_LOADING:"domLoading",DOM_INTERACTIVE:"domInteractive",DOM_CONTENT_LOADED_EVENT_START:"domContentLoadedEventStart",DOM_CONTENT_LOADED_EVENT_END:"domContentLoadedEventEnd",DOM_COMPLETE:"domComplete",LOAD_EVENT_START:"loadEventStart",LOAD_EVENT_END:"loadEventEnd"});f["default"]=a}),66);
__d("NavigationTimingHelper",["NavigationMetricsEnumJS","forEachObject","performance"],(function(a,b,c,d,e,f,g){function h(a,b){var d={};c("forEachObject")(c("NavigationMetricsEnumJS"),function(c){var e=b[c];e&&(d[c]=e+a)});return d}function a(a){if(!a||!c("performance").timing||!c("performance").getEntriesByName)return void 0;a=c("performance").getEntriesByName(a);return a.length===0?void 0:h(c("performance").timing.navigationStart,a[0])}function i(){if(!c("performance").timing||!c("performance").getEntriesByType)return{};var a=c("performance").getEntriesByType("navigation");return!a.length?{}:h(c("performance").timing.navigationStart,a[0])}function b(){if(!c("performance").timing)return void 0;var a=babelHelpers["extends"]({},h(0,c("performance").timing),i());return h(0,a)}g.getAsyncRequestTimings=a;g.getPerformanceNavigationTiming=i;g.getNavTimings=b}),98);
__d("PerfXFlusher",["invariant","Banzai"],(function(a,b,c,d,e,f,g){var h="perfx_custom_logger_endpoint",i=["perfx_page","perfx_page_type","lid"];function j(a){i.forEach(function(b){return g(b in a,'PerfXFlusher: Field "%s" missing in the PerfX payload',b)})}a={flush:function(a){j(a),b("Banzai").post(h,a,{signal:!0})},registerToSendWithBeacon:function(a){b("Banzai").subscribe(b("Banzai").SHUTDOWN,function(){var c=a();c.length&&b("Banzai").post(h,c,{delay:b("Banzai").VITAL_WAIT})})}};c=a;f["default"]=c}),66);
__d("QuicklingRefreshOverheadUtil",["QuicklingConfig","WebStorage","performanceAbsoluteNow"],(function(a,b,c,d,e,f){"use strict";var g,h,i=null,j=1e4;a={onQuicklingStart:function(){i=(g||(g=b("performanceAbsoluteNow")))()},onQuicklingVersionMatch:function(){i=null},onQuicklingRefreshStart:function(){if(!b("QuicklingConfig").logRefreshOverhead||i===null)return;var a=(h||(h=b("WebStorage"))).getSessionStorage();if(!a)return;a.setItem("quickling_refresh_overhead",((g||(g=b("performanceAbsoluteNow")))()-i).toString());a.setItem("quickling_refresh_start",Date.now().toString())},getOverhead:function(a){if(!b("QuicklingConfig").logRefreshOverhead)return null;var c=(h||(h=b("WebStorage"))).getSessionStorageForRead();if(!c)return null;var d=c.getItem("quickling_refresh_start");if(d==null)return null;if(a-parseInt(d,10)>j)return null;a=c.getItem("quickling_refresh_overhead");return a!=null?parseFloat(a):null}};e.exports=a}),null);
__d("pageLoadedViaSWCache",[],(function(a,b,c,d,e,f){function a(){return self.__SW_CACHE__===1}f["default"]=a}),66);
__d("PerfXLogger",["DataAttributeUtils","NavigationMetrics","NavigationTimingHelper","ODS","PerfXFlusher","PerfXSharedFields","QuicklingRefreshOverheadUtil","VisibilityListener","forEachObject","pageLoadedViaSWCache","performanceAbsoluteNow","setTimeoutAcrossTransitions"],(function(a,b,c,d,e,f){var g,h={},i={},j=65*1e3,k=["e2e","tti","all_pagelets_displayed","all_pagelets_loaded","artillery_disable_time"],l={},m={_listenersSetUp:!1,_uploadEarly:!1,_alreadyUploadedEarly:!1,_setupListeners:function(){if(m._listenersSetUp)return;m._subscribeToNavigationMetrics();b("PerfXFlusher").registerToSendWithBeacon(function(){var a=[];b("forEachObject")(h,function(b,c){if(!h[c].sent){b=m.getPayload(c,"unload fired");b!=null&&a.push(b)}});h={};return a});m._listenersSetUp=!0},_init:function(a){var b=a.lid;if(b==null)return;m._alreadyUploadedEarly=!1;m._uploadEarly=!!a.upload_perfx_early;delete a.upload_perfx_early;var c=i[b]||[];delete i[b];if(a.sw_controlled_tags){if(navigator.serviceWorker&&navigator.serviceWorker.controller)for(var d=0;d<a.sw_controlled_tags.length;d++)c.push(a.sw_controlled_tags[d]);delete a.sw_controlled_tags}h[b]=babelHelpers["extends"]({tags:new Set(c),sent:!1},a);m._registerTimeoutSendback(b);m._setupListeners()},initWithNavigationMetricsLID:function(a,c){var d=b("NavigationMetrics").getFullPageLoadLid();if(!d)return;m._init(babelHelpers["extends"]({},c,{lid:d}));if(a&&a.always)for(c=0;c<a.always.length;c++)m.addTag(d,a.always[c]);if(a&&a.swCache&&b("pageLoadedViaSWCache")())for(c=0;c<a.swCache.length;c++)m.addTag(d,a.swCache[c])},init:function(a,b){b!=null&&a.lid!=null&&(l[a.lid]=b),m._init(a)},addTag:function(a,c){m._alreadyUploadedEarly&&b("ODS").bumpEntityKey(2966,"PerfXLateTag",c);var d=h[a];if(d){d.tags.add(c);return}i[a]||(i[a]=[]);i[a].push(c)},addTagWithNavigationMetricsLID:function(a){m._alreadyUploadedEarly&&b("ODS").bumpEntityKey(2966,"PerfXLateTag",a);var c=b("NavigationMetrics").getFullPageLoadLid();if(!c)return;m.addTag(c,a)},_registerTimeoutSendback:function(a){var c=m._getFetchStart(a),d=j;c!=null&&(d-=(g||(g=b("performanceAbsoluteNow")))()-c);b("setTimeoutAcrossTransitions")(function(){return m._uploadPayload(a,"sendback time out")},d)},_subscribeToNavigationMetrics:function(){var a;(a=b("NavigationMetrics")).addRetroactiveListener(a.Events.EVENT_OCCURRED,function(a,b){if(!(a in h))return;k.includes(b.event)&&Object.prototype.hasOwnProperty.call(b,"timestamp")&&b.timestamp!=null&&(h[a][b.event]=b.timestamp);b.event==="all_pagelets_displayed"&&m._uploadEarly&&(k.forEach(function(c){Object.prototype.hasOwnProperty.call(b,c)&&b[c]!=null&&(h[a][c]=b[c])}),m._uploadPayload(a),m._alreadyUploadedEarly=!0)});a.addRetroactiveListener(a.Events.NAVIGATION_DONE,function(a,b){var c=b.serverLID;if(!(c in h))return;k.forEach(function(a){Object.prototype.hasOwnProperty.call(b,a)&&b[a]!=null&&(h[c][a]=b[a])});m._uploadPayload(c)})},_getPayloadWithOffset:function(a,c,d){a=h[a];if(a==null)return null;var e=babelHelpers["extends"]({},a),f=document.querySelector('[id^="hyperfeed_story_id"]');if(f){f=JSON.parse(b("DataAttributeUtils").getDataFt(f));f&&(e.mf_query_id=f.qid)}e.tags=Array.from(a.tags);m._adjustValues(e,c);e.fetch_start=c;if(e.perfx_page_type==="normal"){f=b("NavigationTimingHelper").getNavTimings();f!=null&&f.navigationStart!=null&&(e.nav_to_fetch=c-f.navigationStart);a=b("QuicklingRefreshOverheadUtil").getOverhead(c);a!==null&&(e.quickling_refresh_overhead=a)}d!=null&&(e.sendback_reason=d);b("PerfXSharedFields").addCommonValues(e);b("VisibilityListener").supported()&&e.fetch_start&&e.all_pagelets_displayed&&e.tti&&e.e2e&&(e.tab_hidden_time_dd=b("VisibilityListener").getHiddenTime(e.fetch_start,e.fetch_start+e.all_pagelets_displayed),e.tab_hidden_time_tti=b("VisibilityListener").getHiddenTime(e.fetch_start,e.fetch_start+e.tti),e.tab_hidden_time_e2e=b("VisibilityListener").getHiddenTime(e.fetch_start,e.fetch_start+e.e2e));window&&window.location&&window.location.pathname&&(e.request_uri=window.location.pathname);delete e.sent;return e},_uploadPayload:function(a,c){if(h[a]!=null&&!h[a].sent){c=m.getPayload(a,c);c!=null&&(b("PerfXFlusher").flush(c),h[a].sent=!0)}},getPayload:function(a,b){return m._getPayloadWithOffset(a,m._getFetchStart(a),b)},_getFetchStart:function(a){if(!(a in h))return null;var c=h[a].perfx_page_type;if(c=="quickling")if(!(a in l))return null;else c=b("NavigationTimingHelper").getAsyncRequestTimings(l[a]);else c=b("NavigationTimingHelper").getNavTimings();return!c||!c.fetchStart?null:c.fetchStart},_adjustValues:function(a,b){k.forEach(function(c){Object.prototype.hasOwnProperty.call(a,c)&&(a[c]-=b)})}};e.exports=m}),null);