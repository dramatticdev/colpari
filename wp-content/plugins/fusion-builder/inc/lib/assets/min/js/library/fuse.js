!function(a,b){"object"==typeof exports&&"object"==typeof module?module.exports=b():"function"==typeof define&&define.amd?define("Fuse",[],b):"object"==typeof exports?exports.Fuse=b():a.Fuse=b()}(this,function(){return function(a){function b(d){if(c[d])return c[d].exports;var e=c[d]={i:d,l:!1,exports:{}};return a[d].call(e.exports,e,e.exports,b),e.l=!0,e.exports}var c={};return b.m=a,b.c=c,b.i=function(a){return a},b.d=function(a,c,d){b.o(a,c)||Object.defineProperty(a,c,{configurable:!1,enumerable:!0,get:d})},b.n=function(a){var c=a&&a.__esModule?function(){return a.default}:function(){return a};return b.d(c,"a",c),c},b.o=function(a,b){return Object.prototype.hasOwnProperty.call(a,b)},b.p="",b(b.s=8)}([function(a,b,c){"use strict";a.exports=function(a){return Array.isArray?Array.isArray(a):"[object Array]"===Object.prototype.toString.call(a)}},function(a,b,c){"use strict";function d(a,b){if(!(a instanceof b))throw new TypeError("Cannot call a class as a function")}var e=function(){function a(a,b){for(var c=0;c<b.length;c++){var d=b[c];d.enumerable=d.enumerable||!1,d.configurable=!0,"value"in d&&(d.writable=!0),Object.defineProperty(a,d.key,d)}}return function(b,c,d){return c&&a(b.prototype,c),d&&a(b,d),b}}(),f=c(5),g=c(7),h=c(4),i=function(){function a(b,c){var e=c.location,f=void 0===e?0:e,g=c.distance,i=void 0===g?100:g,j=c.threshold,k=void 0===j?.6:j,l=c.maxPatternLength,m=void 0===l?32:l,n=c.isCaseSensitive,o=void 0!==n&&n,p=c.tokenSeparator,q=void 0===p?/ +/g:p,r=c.findAllMatches,s=void 0!==r&&r,t=c.minMatchCharLength,u=void 0===t?1:t;d(this,a),this.options={location:f,distance:i,threshold:k,maxPatternLength:m,isCaseSensitive:o,tokenSeparator:q,findAllMatches:s,minMatchCharLength:u},this.pattern=this.options.isCaseSensitive?b:b.toLowerCase(),this.pattern.length<=m&&(this.patternAlphabet=h(this.pattern))}return e(a,[{key:"search",value:function(a){if(this.options.isCaseSensitive||(a=a.toLowerCase()),this.pattern===a)return{isMatch:!0,score:0,matchedIndices:[[0,a.length-1]]};var b=this.options,c=b.maxPatternLength,d=b.tokenSeparator;if(this.pattern.length>c)return f(a,this.pattern,d);var e=this.options,h=e.location,i=e.distance,j=e.threshold,k=e.findAllMatches,l=e.minMatchCharLength;return g(a,this.pattern,this.patternAlphabet,{location:h,distance:i,threshold:j,findAllMatches:k,minMatchCharLength:l})}}]),a}();a.exports=i},function(a,b,c){"use strict";var d=c(0),e=function a(b,c,e){if(c){var f=c.indexOf("."),g=c,h=null;-1!==f&&(g=c.slice(0,f),h=c.slice(f+1));var i=b[g];if(null!==i&&void 0!==i)if(h||"string"!=typeof i&&"number"!=typeof i)if(d(i))for(var j=0,k=i.length;j<k;j+=1)a(i[j],h,e);else h&&a(i,h,e);else e.push(i.toString())}else e.push(b);return e};a.exports=function(a,b){return e(a,b,[])}},function(a,b,c){"use strict";a.exports=function(){for(var a=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],b=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1,c=[],d=-1,e=-1,f=0,g=a.length;f<g;f+=1){var h=a[f];h&&-1===d?d=f:h||-1===d||(e=f-1,e-d+1>=b&&c.push([d,e]),d=-1)}return a[f-1]&&f-d>=b&&c.push([d,f-1]),c}},function(a,b,c){"use strict";a.exports=function(a){for(var b={},c=a.length,d=0;d<c;d+=1)b[a.charAt(d)]=0;for(var e=0;e<c;e+=1)b[a.charAt(e)]|=1<<c-e-1;return b}},function(a,b,c){"use strict";var d=/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g;a.exports=function(a,b){var c=arguments.length>2&&void 0!==arguments[2]?arguments[2]:/ +/g,e=new RegExp(b.replace(d,"\\$&").replace(c,"|")),f=a.match(e),g=!!f,h=[];if(g)for(var i=0,j=f.length;i<j;i+=1){var k=f[i];h.push([a.indexOf(k),k.length-1])}return{score:g?.5:1,isMatch:g,matchedIndices:h}}},function(a,b,c){"use strict";a.exports=function(a,b){var c=b.errors,d=void 0===c?0:c,e=b.currentLocation,f=void 0===e?0:e,g=b.expectedLocation,h=void 0===g?0:g,i=b.distance,j=void 0===i?100:i,k=d/a.length,l=Math.abs(h-f);return j?k+l/j:l?1:k}},function(a,b,c){"use strict";var d=c(6),e=c(3);a.exports=function(a,b,c,f){for(var g=f.location,h=void 0===g?0:g,i=f.distance,j=void 0===i?100:i,k=f.threshold,l=void 0===k?.6:k,m=f.findAllMatches,n=void 0!==m&&m,o=f.minMatchCharLength,p=void 0===o?1:o,q=h,r=a.length,s=l,t=a.indexOf(b,q),u=b.length,v=[],w=0;w<r;w+=1)v[w]=0;if(-1!==t){var x=d(b,{errors:0,currentLocation:t,expectedLocation:q,distance:j});if(s=Math.min(x,s),-1!==(t=a.lastIndexOf(b,q+u))){var y=d(b,{errors:0,currentLocation:t,expectedLocation:q,distance:j});s=Math.min(y,s)}}t=-1;for(var z=[],A=1,B=u+r,C=1<<u-1,D=0;D<u;D+=1){for(var E=0,F=B;E<F;){d(b,{errors:D,currentLocation:q+F,expectedLocation:q,distance:j})<=s?E=F:B=F,F=Math.floor((B-E)/2+E)}B=F;var G=Math.max(1,q-F+1),H=n?r:Math.min(q+F,r)+u,I=Array(H+2);I[H+1]=(1<<D)-1;for(var J=H;J>=G;J-=1){var K=J-1,L=c[a.charAt(K)];if(L&&(v[K]=1),I[J]=(I[J+1]<<1|1)&L,0!==D&&(I[J]|=(z[J+1]|z[J])<<1|1|z[J+1]),I[J]&C&&(A=d(b,{errors:D,currentLocation:K,expectedLocation:q,distance:j}))<=s){if(s=A,(t=K)<=q)break;G=Math.max(1,2*q-t)}}if(d(b,{errors:D+1,currentLocation:q,expectedLocation:q,distance:j})>s)break;z=I}return{isMatch:t>=0,score:0===A?.001:A,matchedIndices:e(v,p)}}},function(a,b,c){"use strict";function d(a,b){if(!(a instanceof b))throw new TypeError("Cannot call a class as a function")}var e=function(){function a(a,b){for(var c=0;c<b.length;c++){var d=b[c];d.enumerable=d.enumerable||!1,d.configurable=!0,"value"in d&&(d.writable=!0),Object.defineProperty(a,d.key,d)}}return function(b,c,d){return c&&a(b.prototype,c),d&&a(b,d),b}}(),f=c(1),g=c(2),h=c(0),i=function(){function a(b,c){var e=c.location,f=void 0===e?0:e,h=c.distance,i=void 0===h?100:h,j=c.threshold,k=void 0===j?.6:j,l=c.maxPatternLength,m=void 0===l?32:l,n=c.caseSensitive,o=void 0!==n&&n,p=c.tokenSeparator,q=void 0===p?/ +/g:p,r=c.findAllMatches,s=void 0!==r&&r,t=c.minMatchCharLength,u=void 0===t?1:t,v=c.id,w=void 0===v?null:v,x=c.keys,y=void 0===x?[]:x,z=c.shouldSort,A=void 0===z||z,B=c.getFn,C=void 0===B?g:B,D=c.sortFn,E=void 0===D?function(a,b){return a.score-b.score}:D,F=c.tokenize,G=void 0!==F&&F,H=c.matchAllTokens,I=void 0!==H&&H,J=c.includeMatches,K=void 0!==J&&J,L=c.includeScore,M=void 0!==L&&L,N=c.verbose,O=void 0!==N&&N;d(this,a),this.options={location:f,distance:i,threshold:k,maxPatternLength:m,isCaseSensitive:o,tokenSeparator:q,findAllMatches:s,minMatchCharLength:u,id:w,keys:y,includeMatches:K,includeScore:M,shouldSort:A,getFn:C,sortFn:E,verbose:O,tokenize:G,matchAllTokens:I},this.setCollection(b)}return e(a,[{key:"setCollection",value:function(a){return this.list=a,a}},{key:"search",value:function(a){this._log('---------\nSearch pattern: "'+a+'"');var b=this._prepareSearchers(a),c=b.tokenSearchers,d=b.fullSearcher,e=this._search(c,d),f=e.weights,g=e.results;return this._computeScore(f,g),this.options.shouldSort&&this._sort(g),this._format(g)}},{key:"_prepareSearchers",value:function(){var a=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",b=[];if(this.options.tokenize)for(var c=a.split(this.options.tokenSeparator),d=0,e=c.length;d<e;d+=1)b.push(new f(c[d],this.options));return{tokenSearchers:b,fullSearcher:new f(a,this.options)}}},{key:"_search",value:function(){var a=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],b=arguments[1],c=this.list,d={},e=[];if("string"==typeof c[0]){for(var f=0,g=c.length;f<g;f+=1)this._analyze({key:"",value:c[f],record:f,index:f},{resultMap:d,results:e,tokenSearchers:a,fullSearcher:b});return{weights:null,results:e}}for(var h={},i=0,j=c.length;i<j;i+=1)for(var k=c[i],l=0,m=this.options.keys.length;l<m;l+=1){var n=this.options.keys[l];if("string"!=typeof n){if(h[n.name]={weight:1-n.weight||1},n.weight<=0||n.weight>1)throw new Error("Key weight has to be > 0 and <= 1");n=n.name}else h[n]={weight:1};this._analyze({key:n,value:this.options.getFn(k,n),record:k,index:i},{resultMap:d,results:e,tokenSearchers:a,fullSearcher:b})}return{weights:h,results:e}}},{key:"_analyze",value:function(a,b){var c=a.key,d=a.arrayIndex,e=void 0===d?-1:d,f=a.value,g=a.record,i=a.index,j=b.tokenSearchers,k=void 0===j?[]:j,l=b.fullSearcher,m=void 0===l?[]:l,n=b.resultMap,o=void 0===n?{}:n,p=b.results,q=void 0===p?[]:p;if(void 0!==f&&null!==f){var r=!1,s=-1,t=0;if("string"==typeof f){this._log("\nKey: "+(""===c?"-":c));var u=m.search(f);if(this._log('Full text: "'+f+'", score: '+u.score),this.options.tokenize){for(var v=f.split(this.options.tokenSeparator),w=[],x=0;x<k.length;x+=1){var y=k[x];this._log('\nPattern: "'+y.pattern+'"');for(var z=!1,A=0;A<v.length;A+=1){var B=v[A],C=y.search(B),D={};C.isMatch?(D[B]=C.score,r=!0,z=!0,w.push(C.score)):(D[B]=1,this.options.matchAllTokens||w.push(1)),this._log('Token: "'+B+'", score: '+D[B])}z&&(t+=1)}s=w[0];for(var E=w.length,F=1;F<E;F+=1)s+=w[F];s/=E,this._log("Token score average:",s)}var G=u.score;s>-1&&(G=(G+s)/2),this._log("Score average:",G);var H=!this.options.tokenize||!this.options.matchAllTokens||t>=k.length;if(this._log("\nCheck Matches: "+H),(r||u.isMatch)&&H){var I=o[i];I?I.output.push({key:c,arrayIndex:e,value:f,score:G,matchedIndices:u.matchedIndices}):(o[i]={item:g,output:[{key:c,arrayIndex:e,value:f,score:G,matchedIndices:u.matchedIndices}]},q.push(o[i]))}}else if(h(f))for(var J=0,K=f.length;J<K;J+=1)this._analyze({key:c,arrayIndex:J,value:f[J],record:g,index:i},{resultMap:o,results:q,tokenSearchers:k,fullSearcher:m})}}},{key:"_computeScore",value:function(a,b){this._log("\n\nComputing score:\n");for(var c=0,d=b.length;c<d;c+=1){for(var e=b[c].output,f=e.length,g=1,h=1,i=0;i<f;i+=1){var j=a?a[e[i].key].weight:1,k=1===j?e[i].score:e[i].score||.001,l=k*j;1!==j?h=Math.min(h,l):(e[i].nScore=l,g*=l)}b[c].score=1===h?g:h,this._log(b[c])}}},{key:"_sort",value:function(a){this._log("\n\nSorting...."),a.sort(this.options.sortFn)}},{key:"_format",value:function(a){var b=[];this.options.verbose&&this._log("\n\nOutput:\n\n",JSON.stringify(a));var c=[];this.options.includeMatches&&c.push(function(a,b){var c=a.output;b.matches=[];for(var d=0,e=c.length;d<e;d+=1){var f=c[d];if(0!==f.matchedIndices.length){var g={indices:f.matchedIndices,value:f.value};f.key&&(g.key=f.key),f.hasOwnProperty("arrayIndex")&&f.arrayIndex>-1&&(g.arrayIndex=f.arrayIndex),b.matches.push(g)}}}),this.options.includeScore&&c.push(function(a,b){b.score=a.score});for(var d=0,e=a.length;d<e;d+=1){var f=a[d];if(this.options.id&&(f.item=this.options.getFn(f.item,this.options.id)[0]),c.length){for(var g={item:f.item},h=0,i=c.length;h<i;h+=1)c[h](f,g);b.push(g)}else b.push(f.item)}return b}},{key:"_log",value:function(){if(this.options.verbose){var a;(a=console).log.apply(a,arguments)}}}]),a}();a.exports=i}])});