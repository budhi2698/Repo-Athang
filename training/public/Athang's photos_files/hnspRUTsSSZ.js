;/*FB_PKG_DELIM*/

__d("MToastAction",["cx","CSS","DOM","setTimeoutAcrossTransitions"],(function(a,b,c,d,e,f,g,h){"use strict";function i(a,b){var e=d("DOM").create("div",null,a);d("DOM").appendContent(document.body,e);c("setTimeoutAcrossTransitions")(function(){return c("CSS").addClass(e,"_4zke")},b);c("setTimeoutAcrossTransitions")(function(){return d("DOM").remove(e)},b+1e3)}function a(a,b){a=d("DOM").create("div",{className:"_3fcy"},a);a=d("DOM").create("div",{className:"_2jow _3fc-"},a);i(a,b)}g.showToast=i;g.showDefaultToast=a}),98);
__d("Deferred",["Promise"],(function(a,b,c,d,e,f){"use strict";b("Promise").resolve();a=function(){function a(a){var c=this;a=a||b("Promise");this.$1=!1;this.$2=new a(function(a,b){c.$3=a,c.$4=b})}var c=a.prototype;c.getPromise=function(){return this.$2};c.resolve=function(a){this.$1=!0,this.$3(a)};c.reject=function(a){this.$1=!0,this.$4(a)};c.isSettled=function(){return this.$1};return a}();f["default"]=a}),66);
__d("isInstagramURI",[],(function(a,b,c,d,e,f){var g=null;function a(a){if(a.isEmpty()&&a.toString()!=="#")return!1;if(!a.getDomain()&&!a.getProtocol())return!1;if(a.getProtocol()!=="https")return!1;g||(g=new RegExp("(^|\\.)instagram\\.com$","i"));return g.test(a.getDomain())}f["default"]=a}),66);
__d("keyMirror",["unrecoverableViolation"],(function(a,b,c,d,e,f,g){"use strict";function a(a){var b={};if(!(a instanceof Object&&!Array.isArray(a)))throw c("unrecoverableViolation")("keyMirror(...): Argument must be an object.","comet_infra");for(var d in a){if(!Object.prototype.hasOwnProperty.call(a,d))continue;b[d]=d}return b}g["default"]=a}),98);
__d("intersectionObserverEntryIsIntersecting",[],(function(a,b,c,d,e,f){"use strict";function a(a){return a.isIntersecting!=null?a.isIntersecting:a.intersectionRatio>0||a.intersectionRect&&(a.intersectionRect.height>0||a.intersectionRect.width>0)}f["default"]=a}),66);
__d("MqttLongPollingHookCollection",[],(function(a,b,c,d,e,f){"use strict";a=function(){function a(){this.$1=new Set()}var b=a.prototype;b.addHook=function(a){this.$1.add(a)};b.removeHook=function(a){this.$1["delete"](a)};b.onPollRequestSent=function(){this.$1.forEach(function(a){a.onPollRequestSent()})};b.onPollRequestSuccess=function(){this.$1.forEach(function(a){a.onPollRequestSuccess()})};b.onPollResponse=function(a){this.$1.forEach(function(b){b.onPollResponse(a)})};b.onPollFinish=function(){this.$1.forEach(function(a){a.onPollFinish()})};b.onPollRequestFailed=function(a){this.$1.forEach(function(b){b.onPollRequestFailed(a)})};b.onPollShutdownAbort=function(){this.$1.forEach(function(a){a.onPollShutdownAbort()})};return a}();f["default"]=a}),66);
__d("PromiseResult",["Promise"],(function(a,b,c,d,e,f){"use strict";a=function(){function a(){var a=this;this.promise=new(b("Promise"))(function(b,c){a.$1=b,a.$2=c})}var c=a.prototype;c.resolve=function(a){this.$1(a)};c.reject=function(a){this.$2(a)};return a}();f["default"]=a}),66);
__d("MqttFetchClient",["MqttEnv","MqttProtocolCodec","MqttUserName","MqttUtils","Promise","PromiseResult"],(function(a,b,c,d,e,f,g){"use strict";var h="fetch_pull",i="fetch_pull_finish",j="fetch_",k=6e4,l="action",m="chunked",n="send",o="true",p=5,q=20,r=10,s=5e3,t=typeof window!=="undefined"?window:self;a=function(){function a(){this.$1="",this.$2=d("MqttEnv").Env.getLoggerInstance(),this.$3=0,this.$4="",this.$5=new(c("MqttUserName"))("",0,1,"",0,!0),this.$6=function(){},this.$7=function(a){},this.$8=function(){},this.$9=function(a){},this.$10=0,this.$11=0,this.$12=0,this.$13=0,this.$14="Ready",this.$15=[],this.$16=[],this.$17=null,this.$18=!1,this.$19=0}a.isSupported=function(){return typeof t.fetch==="function"};var e=a.prototype;e.run=function(a,b,d,e,f,g,h,i){this.$1=c("MqttUtils").endpointWithSessionId(a,b),this.$3=b,this.$4=d,this.$5=e,this.$6=f,this.$7=g,this.$8=h,this.$9=i,this.$20()};e.isTopicSupported=function(a){return!0};e.publish=function(a,d){if(this.$14!=="ReceivingData"){this.$2.bumpCounter(j+"publish."+a+".invalidstate");return b("Promise").reject("not connected")}else{this.$2.bumpCounter(j+"publish."+a+".publish");var e=new(c("PromiseResult"))();a={topic:a,payload:d,promiseResult:e};this.$15.push(a);this.$21();return e.promise}};e.abort=function(){this.$6=function(){},this.$7=function(a){},this.$8=function(){},this.$9=function(a){}};e.$22=function(a){var b=this;a.forEach(function(a){b.$2.bumpCounter(j+"publish."+a.topic+".resolved"),a.promiseResult.resolve()});this.$12+=a.length};e.$23=function(a,b){var c=this;a.forEach(function(a){c.$2.bumpCounter(j+"publish."+a.topic+".rejected"),a.promiseResult.reject(b)})};e.$24=function(a,b,c,d){var e=a.map(function(a){return a.topic}).join(",");this.$2.debugTrace("FetchClient","Fetch publish request failed. Publishes:"+e+", retry:"+c);this.$2.bumpCounter(j+"publish_request_failed");this.$14!=="ReceivingData"||c===p?(this.$23(a,d),this.$18=!1,this.$2.bumpCounter(j+"publish_request_failed_final"),this.$21()):this.$25(a,b,c+1)};e.$26=function(a,b,c,d){if(!d.ok){this.$2.bumpCounter(j+"publish_request_failed.http."+d.status);if(d.status===409){this.$19++;if(this.$19>=r){this.$2.bumpCounter(j+"409_reset");this.$27(new Error("Too many 409 errors"));return}}this.$24(a,b,c,this.$28(d));return}this.$2.bumpCounter(j+"publish_request_success");b=a.map(function(a){return a.topic}).join(",");this.$2.debugTrace("FetchClient","Fetch publish request success. Publishes:"+b+", retry:"+c);this.$22(a);this.$18=!1;this.$21()};e.$21=function(){if(this.$14!=="ReceivingData")return;if(this.$18)return;if(this.$15.length===0&&this.$16.length===0)return;this.$18=!0;var a=this.$15.slice(0,q);this.$15=this.$15.slice(q,this.$15.length);this.$17!=null&&d("MqttEnv").Env.clearTimeout(this.$17);this.$17=null;var b=this.$16.slice(0,q);this.$16=this.$16.slice(q,this.$16.length);this.$25(a,b,0)};e.$25=function(a,b,e){var f=this,g=a.map(function(a){return a.topic}).join(",");this.$2.debugTrace("FetchClient","Fetch publish request sent. Publishes:"+g+", retry:"+e);g=c("MqttUtils").endpointWithExtraParameter(this.$1,l,n);var h=a.map(function(a){return{topic:a.topic,payload:a.payload,qos:0,messageId:d("MqttEnv").Env.random()}});h=this.$5.gen(this.$3,[],h,b);this.$2.bumpCounter(j+"publish_request");c("MqttUtils").promiseDoneWithTimeout(t.fetch(g,{method:"POST",mode:"cors",cache:"no-cache",credentials:"include",referrer:"no-referrer",body:h,keepalive:!1}),function(c){return f.$26(a,b,e,c)},function(c){return f.$24(a,b,e,c)},k)};e.$29=function(a){a=a.message;this.$2.debugTrace("FetchClient","Fetch request failed with error:"+a);this.$9(a);this.$30(!1,a);this.$2.bumpCounter(j+"error");this.$14="Error"};e.$31=function(a){var b=this;this.$2.debugTrace("FetchClient","Fetch response data received");a=d("MqttProtocolCodec").decodeByteMessages(new Uint8Array(a));a=a.messages;var c=a.filter(function(a){return a.messageType===d("MqttProtocolCodec").MESSAGE_TYPE.PINGREQ});a=a.filter(function(a){return a.messageType===d("MqttProtocolCodec").MESSAGE_TYPE.PUBLISH}).map(function(a){if(!(a instanceof d("MqttProtocolCodec").WireMessage.Publish))return{};a=a;a.qos===1&&a.messageIdentifier!=null&&(b.$16.push(a.messageIdentifier),b.$17==null&&(b.$17=d("MqttEnv").Env.setTimeout(function(){b.$21()},s)));return{topic:a.topic,payload:a.payloadMessage,qos:a.qos}});for(var e=a,f=Array.isArray(e),g=0,e=f?e:e[typeof Symbol==="function"?Symbol.iterator:"@@iterator"]();;){var h;if(f){if(g>=e.length)break;h=e[g++]}else{g=e.next();if(g.done)break;h=g.value}h=h;this.$2.bumpCounter(j+"response_"+((h=h.topic)!=null?h:"void"))}a&&a.length>0&&(this.$13+=a.length,this.$7(a));c&&c.length>0&&this.$32()};e.$32=function(){this.$2.debugTrace("FetchClient","Got server ping request"),this.$2.bumpCounter(j+"ping")};e.$27=function(a){this.$2.debugTrace("FetchClient","Fetch request ended: "+a.toString()),this.$2.bumpCounter(j+"done"),this.$33(a.message),this.$8(),this.$14="Done"};e.$34=function(a,b,d){var e=this;if(d!=null)try{this.$31(d)}catch(a){this.$27(a);this.$2.bumpCounter(j+"dataDecodeException");return}if(b){this.$27(new Error("EOF"));return}c("MqttUtils").promiseDone(a.read(),function(c){var b=c.done;c=c.value;return e.$34(a,b,c)},function(a){return e.$27(a)})};e.$35=function(a){if(!a.ok){this.$2.bumpCounter(j+"error.http."+a.status);this.$29(this.$28(a));return}a=a.body;if(!a){this.$29(new Error("Empty body"));return}a=a.getReader();this.$6();this.$2.bumpCounter(j+"success");this.$30(!0,null);this.$11=Date.now();this.$14="ReceivingData";this.$2.debugTrace("FetchClient","Fetch request success");this.$34(a,!1,null)};e.$33=function(a){this.$2.eventLogPullFinish({pullEventName:i,sessionID:this.$3,duration:Date.now()-this.$11,errorMessage:a,publishReceived:this.$13,publishSent:this.$12})};e.$30=function(a,b){this.$2.eventLogPull({pullEventName:h,sessionID:this.$3,status:a,duration:Date.now()-this.$10,hostname:this.$1,errorMessage:b})};e.$20=function(){var a=this;if(this.$14!=="Ready")return;this.$2.debugTrace("FetchClient","Sending fetch request");this.$2.bumpCounter(j+"request");this.$10=Date.now();var b=c("MqttUtils").endpointWithExtraParameter(this.$1,m,o);c("MqttUtils").promiseDoneWithTimeout(t.fetch(b,{method:"POST",mode:"cors",cache:"no-cache",credentials:"include",referrer:"no-referrer",body:this.$4,keepalive:!1}),function(b){return a.$35(b)},function(b){return a.$29(b)},k)};e.$28=function(a){return new Error("Http error, status="+a.status)};return a}();g["default"]=a}),98);
__d("MqttLongPollingClient",["MqttEnv","MqttProtocolCodec","MqttUserName","Promise","XHRRequest","getCrossOriginTransport"],(function(a,b,c,d,e,f,g){"use strict";var h=120*1e3,i="simple_pull",j="longpolling_";a=function(){function a(){this.$3="",this.$4=0,this.$2=d("MqttEnv").Env.getLoggerInstance(),this.$1="Ready",this.$5="",this.$6=new(c("MqttUserName"))("",0,1,"",0,!0),this.$7=function(){},this.$8=function(a){},this.$9=function(){},this.$10=function(a){},this.$11=0,this.$12=null,this.$13=new Set(["/t_ms","/messenger_sync_get_diffs","/messenger_sync_create_queue","/webrtc","/rtc_multi"])}var e=a.prototype;e.run=function(a,b,c,d,e,f,g,h){this.$3=a,this.$4=b,this.$5=c,this.$6=d,this.$7=e,this.$8=f,this.$9=g,this.$10=h,this.$14(this.$5)};e.isTopicSupported=function(a){return this.$13.has(a)};e.publish=function(a,c){return b("Promise").reject("not supported")};e.abort=function(){this.$12!=null&&this.$12.abort("Disconnected")};e.$15=function(a,b){if(this.$1===a)return;this.$1=a;a==="Error"&&b!=null&&this.$10(b);this.$2.debugTrace("LongPollingClient","_changeStatus : "+a)};e.$16=function(a){if(this.$1!=="RequestSend")return;if(!a){this.$17("EmptyResponse",null);return}this.$7();this.$2.bumpCounter(j+"success");this.$18(!0,null);this.$15("ResponseReceived");a=d("MqttProtocolCodec").decodeByteMessages(new Uint8Array(a));a=a.messages.filter(function(a){return a instanceof d("MqttProtocolCodec").WireMessage.Publish}).map(function(a){if(a instanceof d("MqttProtocolCodec").WireMessage.Publish){a=a;return{topic:a.topic,payload:a.payloadMessage,qos:a.qos}}else return{}});this.$8(a);this.$9()};e.$17=function(a,b){b=b!=null?b.message:"null";this.$2.debugTrace("LongPollingClient Error","Poll failed with error:"+a+", errorMsg:"+b);this.$18(!1,a+":"+b);this.$2.bumpCounter(j+"error."+a);this.$15("Error",a)};e.$18=function(a,b){this.$2.eventLogPull({pullEventName:i,sessionID:this.$4,status:a,duration:Date.now()-this.$11,hostname:this.$3,errorMessage:b})};e.$14=function(a){var b=this;if(this.$1!=="Ready"||this.$12)return;this.$2.bumpCounter(j+"request");try{this.$11=Date.now(),this.$12=new(c("XHRRequest"))(this.$3).setResponseType("arraybuffer").setRawData(a).setTransportBuilder(c("getCrossOriginTransport").withCredentials).setResponseHandler(function(a){return b.$16(a)}).setNetworkFailureHandler(function(a){b.$17("Network",a)}).setErrorHandler(function(a){b.$17("Error",a)}).setAbortHandler(function(a){b.$17("Abort",null)}).setTimeoutHandler(function(){b.$17("Timeout",null)}).setTimeout(h).send(),this.$15("RequestSend")}catch(a){this.$17("Error",a)}};return a}();g["default"]=a}),98);
__d("exponentialBackoff",["MqttEnv"],(function(a,b,c,d,e,f,g){function a(a,b){b===void 0&&(b=null);var c=null,e=0;function f(){for(var f=arguments.length,g=new Array(f),h=0;h<f;h++)g[h]=arguments[h];var i=function(){a.apply(b,g)};if(c===null){var j=Math.max(0,Math.pow(2,Math.min(e,6))*(1e3+d("MqttEnv").Env.random()*100)-2e3);c=d("MqttEnv").Env.setTimeout(function(){i(),c=null},j)}e++}f.reset=function(){e=0,c!=null&&(d("MqttEnv").Env.clearTimeout(c),c=null)};f.isPending=function(){return c!=null};return f}g["default"]=a}),98);
__d("MqttLongPollingRunner",["MqttEnv","MqttFetchClient","MqttLongPollingClient","MqttLongPollingHookCollection","MqttTypes","MqttUtils","Promise","exponentialBackoff"],(function(a,b,c,d,e,f,g){"use strict";var h=4,i=1e3,j=3e3,k="mqtt_should_longpoll",l="last_lp",m="yes",n="no";a=function(){function a(a,b,e,f,g,h,i,j,k){var l=this;this.$23=function(){try{if(!l.$29())return;l.$5.debugTrace("LongPollingRunner","_startPollingIfNecessary called");var a=l.$30();l.$14=a;var b=l.$9(),e=l.$10();b=b.filter(function(b){return a.isTopicSupported(b)});e=e.filter(function(b){return a.isTopicSupported(b.topic)});if(b.length===0&&e.length===0){l.$5.debugTrace("LongPollingRunner","Poll skipped, nothing to do");l.$14=null;d("MqttEnv").Env.setTimeout(function(){l.$23()},1e3);return}var f=c("MqttUtils").generateSessionId();a.run(l.$6,f,l.$7.gen(f,b,e),l.$7,function(){return l.$31()},function(a){return l.$32(a)},function(){return l.$33()},function(a){return l.$34(a)});l.$19.onPollRequestSent();f=b.join(",");b=e.map(function(a){return a.topic}).join(",");l.$5.debugTrace("LongPollingRunner","Making a poll request to "+l.$6+". SubscribedTopics:"+f+". Publishes:"+b)}catch(a){a&&l.$5.logErrorWarn(a,"lp_js_error"),l.$11(new(d("MqttTypes").MqttChannelError)(!1,"js error lp",a)),l.$34("lp_js_error")}};this.$6=a;this.$7=b;this.$1=f;this.$2=0;this.$3=e;this.$4=c("MqttUtils").hasWSSupport();this.$5=d("MqttEnv").Env.getLoggerInstance();this.$8=g;this.$9=h;this.$10=i;this.$11=j;this.$12=k;this.$13=!1;this.$14=null;this.$15="LPInactive";this.$16="NotSent";this.$17=0;this.$19=new(c("MqttLongPollingHookCollection"))();this.$18=c("exponentialBackoff")(this.$23,this);this.$20=0;this.$21=n;a=d("MqttEnv").Env.genGk(d("MqttEnv").MqttGkNames.mqtt_lp_use_fetch);b=c("MqttFetchClient").isSupported();a?this.$5.bumpCounter("fetch_gk_pass"):this.$5.bumpCounter("fetch_gk_fail");b?this.$5.bumpCounter("fetch_api_supported"):this.$5.bumpCounter("fetch_api_not_supported");this.$22=a&&b}var e=a.prototype;e.addHook=function(a){this.$19.addHook(a)};e.start=function(){var a=this;this.$21=d("MqttEnv").Env.configRead(l,n);this.$5.debugTrace("LongPollingRunner","Runner loaded, last status "+this.$21);this.$20=Date.now();this.$23();d("MqttEnv").Env.setTimeout(function(){a.$23()},i+100);d("MqttEnv").Env.setTimeout(function(){a.$23()},j+100)};e.shutdown=function(){this.$5.debugTrace("LongPollingRunner","Shutdown called"),this.$14&&this.$14.abort(),this.$19.onPollShutdownAbort(),this.$14=null};e.canPublish=function(){return this.$15==="LPActive"&&this.$16==="ReceivingData"};e.publish=function(a,c,e){return d("MqttEnv").Env.genGk(d("MqttEnv").MqttGkNames.mqtt_enable_publish_over_polling)&&(this.$14&&this.$14.isTopicSupported(a))?this.$14.publish(a,c):b("Promise").reject()};e.onConnectAttempt=function(){};e.onConnectFailure=function(){this.$2++,this.$23()};e.onConnected=function(){};e.onConnectSuccess=function(){this.$1=!0,d("MqttEnv").Env.configWrite(l,null)};e.onConnectionLost=function(){};e.onConnectionDisconnect=function(){};e.onSubscribe=function(a){};e.onUnsubscribe=function(a){};e.onPublish=function(a){};e.onMessage=function(a){};e.onWSFatal=function(){this.$3=!0,this.$23()};e.getStatus=function(){return this.$15};e.getRequestStatus=function(){return this.$16};e.$24=function(a){a!==this.$15&&(this.$5.debugTrace("LongPollingRunner","status changed to "+a+" from "+this.$15),this.$15=a,this.$12(this.$15,this.$16))};e.$25=function(a){if(!this.$22)return;a!==this.$16&&(this.$5.debugTrace("LongPollingRunner","request status changed to "+a+" from "+this.$16),this.$16=a,this.$12(this.$15,this.$16))};e.$26=function(){this.$17=0};e.$27=function(){this.$17++,this.$17>=h&&this.$24("LPError")};e.$28=function(){var a=d("MqttEnv").Env.genGk(d("MqttEnv").MqttGkNames.mqtt_lp_no_delay),b=d("MqttEnv").Env.genGk(d("MqttEnv").MqttGkNames.mqtt_ws_polling_enabled),c=d("MqttEnv").Env.genGk(d("MqttEnv").MqttGkNames.mqtt_fast_lp);this.$5.debugTrace("LongPollingRunner","_shouldPoll? pollNow:"+String(a)+" enabled:"+String(b)+" fastPoll:"+String(c)+" hasWSSupport:"+String(this.$4)+" hasWsSuccessBefore:"+String(this.$1)+" failureCount:"+this.$2+" wsFatal:"+String(this.$3));if(!b)return!1;if(a){this.$5.bumpCounter(k+".nd");return!0}if(!this.$4){this.$5.bumpCounter(k+".na");return!0}if(this.$3){this.$5.bumpCounter(k+".fatal");return!0}if(this.$1)return!1;if(c){b=Date.now()-this.$20;if(this.$21===m){if(this.$2>=1)return!0;if(b>i){this.$5.bumpCounter(k+".fastdelay");return!0}}else if(b>j){this.$5.bumpCounter(k+".regulardelay");return!0}}if(this.$2>=3){this.$5.bumpCounter(k+".failure");return!0}return!1};e.$29=function(){if(this.$14!=null)return!1;var a=this.$28();!this.$13&&a&&(this.$5.bumpCounter("polling_kickin"),this.$13=!0,this.$24("LPActive"),this.$26());this.$13&&!a&&(this.$5.bumpCounter("polling_stopped"),this.$13=!1,this.$24("LPInactive"),this.$26());return a};e.$30=function(){if(this.$22){this.$5.debugTrace("LongPollingRunner","Creating polling client using Fetch API");return new(c("MqttFetchClient"))()}else{this.$5.debugTrace("LongPollingRunner","Creating regular Polling client");return new(c("MqttLongPollingClient"))()}};e.$31=function(){this.$5.debugTrace("LongPollingRunner","Poll success"),this.$19.onPollRequestSuccess(),this.$18.reset(),this.$24("LPActive"),this.$26(),d("MqttEnv").Env.configWrite(l,m),this.$25("ReceivingData")};e.$32=function(a){var b=a.map(function(a){return a.topic}).join(",");this.$5.debugTrace("LongPollingRunner","Poll response received, message received:"+b);for(b=0;b<a.length;b++){var c=a[b];this.$19.onPollResponse(c.topic);this.$8(c.topic,c.payload,c.qos)}};e.$33=function(){this.$5.debugTrace("LongPollingRunner","Poll finish"),this.$19.onPollFinish(),this.$14&&this.$14.abort(),this.$14=null,this.$23(),this.$25("NotSent")};e.$34=function(a){this.$19.onPollRequestFailed(a),this.$14&&this.$14.abort(),this.$14=null,this.$18(),this.$27(),this.$25("NotSent")};return a}();g["default"]=a}),98);