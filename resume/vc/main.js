(function(){var c=document,d="length",e=" translation",h=" using Google Translate?",i=".",j="Google has automatically translated this page to: ",k="Powered by ",l="Translate",m="Translate everything to ",n="Translate this page to: ",o="Translated to: ",p="Turn off ",q="Turn off for: ",r="View this page in: ",s="var ",u=this;function v(a,t){var f=a.split(i),b=u;!(f[0]in b)&&b.execScript&&b.execScript(s+f[0]);for(var g;f[d]&&(g=f.shift());)!f[d]&&void 0!==t?b[g]=t:b=b[g]?b[g]:b[g]={}}Math.floor(2147483648*Math.random()).toString(36);var w={"0":l,1:"Cancel",2:"Close",3:function(a){return j+a},4:function(a){return o+a},5:"Error: The server could not complete your request. Try again later.",6:"Learn more",7:function(a){return k+a},8:l,9:"Translation in progress",10:function(a){return n+(a+h)},11:function(a){return r+a},12:"Show original",13:"The content of this local file will be sent to Google for translation using a secure connection.",14:"The content of this secure page will be sent to Google for translation using a secure connection.",
15:"The content of this intranet page will be sent to Google for translation using a secure connection.",16:"Select Language",17:function(a){return p+(a+e)},18:function(a){return q+a},19:"Always hide",20:"Original text:",21:"Contribute a better translation",22:"Contribute",23:"Translate all",24:"Restore all",25:"Cancel all",26:"Translate sections to my language",27:function(a){return m+a},28:"Show original languages",29:"Options",30:"Turn off translation for this site",31:null,32:"Show alternative translations",
33:"Click on words above to get alternative translations",34:"Use",35:"Drag with shift key to reorder",36:"Click for alternative translations",37:"Hold down the shift key, click, and drag the words above to reorder.",38:"Thank you for contributing your translation suggestion to Google Translate.",39:"Manage translation for this site",40:"Click a word for alternative translations, or double-click to edit directly",41:"Original text",42:l};var x=window.google&&google.translate&&google.translate._const;
if(x){var y;a:{for(var z=[],A=["8,0.01,20120530"],B=0;B<A[d];++B){var C=A[B].split(","),D=C[0];if(D){var E=Number(C[1]);if(E&&!(0.1<E||0>E)){var F=Number(C[2]),G=new Date,H=1E4*G.getFullYear()+100*(G.getMonth()+1)+G.getDate();F&&!(F<H)&&z.push({version:D,a:E,b:F})}}}for(var I=0,J=window.location.href.match(/google\.translate\.element\.random=([\d\.]+)/),K=Number(J&&J[1])||Math.random(),B=0;B<z[d];++B){var L=z[B],I=I+L.a;if(1<=I)break;if(K<I){y=L.version;break a}}y="9"}var M="/translate_static/js/element/%s/element_main.js".replace("%s",
y);if("0"==y){var N=" translate_static js element %s element_main.js".split(" ");N[N[d]-1]="main.js";M=N.join("/").replace("%s",y)}var O=("https:"==window.location.protocol?"https://":"http://")+x._pah+M,P=c.createElement("script");P.type="text/javascript";P.charset="UTF-8";P.src=O;var Q=c.getElementsByTagName("head")[0];Q||(Q=c.body.parentNode.appendChild(c.createElement("head")));Q.appendChild(P);v("google.translate.m",w);v("google.translate.v",y)};})()
