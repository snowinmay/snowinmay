<!DOCTYPE html>
<html lang="zh">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Keywords" content="">
<meta name="description" content="记录工作，生活，学习中的网页作品！">
<title>网页作品 - snowinmay</title>
<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,user-scalable=no">
<link rel="stylesheet" type="text/css" href="/snowinmay/media/works.css">
</head>
<body style="zoom: 1;   background-color: #fff;">
<div id="content">
    <div class="guide">
        <div class="wrapper">
            <nav class="site-list">
                <a class="item" href="http://www.snowinmay.net/" target="_blank">主页</a>
                <a class="item" href="http://snowinmay.net/blog" target="_blank">博客</a>
                <a class="item" href="http://www.cnblogs.com/snowinmay/" target="_blank">北京之旅</a>
                <a class="item" href="http://weibo.com/123114623/home?wvr=5" target="_blank">微博</a>          
            </nav>
        </div>
    </div>
  <div class="wrapper">
    <div id="catalog">
    <{foreach from = $categories item = temp key= k}>
    <{if <{$temp.treeid}> == 1}>
    <section data-catalog="<{$temp.asname}>"><!--<{$temp.catname}>-->
      <header>
          <h2 class="icon-<{$temp.asname}>"><{$temp.catname}></h2>
       </header>
       <ul class="website-list">        
           <{foreach from = $works item = temp2 key= key}>
           <{if <{$temp2.catid  == $temp.catid }>}>
          <li <{if <{$temp2.istop == 1}> &&  <{$time_now - $temp2.addtime < $time_diff }> }>
            class="new-item"
            <{elseif <{$temp2.istop == 1}> }>
            class="hot-item"
            <{elseif <{$time_now - $temp2.addtime < $time_diff }> }>
            class="new-item"
            <{/if}>>
            <a href="<{$temp2.metadescription}>" class="website" target="_blank"><{$temp2.productname}></a>
            <p class="description"><{$temp2.summary}> </p>
          </li>
           <{/if}>
          <{/foreach}>
        </ul>
    </section>
    <{/if}>
    <{/foreach}>
    </div>
  </div>
</div>
<footer id="footer">
    <div class="wrapper">
        <nav id="nav">
            <a href="http://www.snowinmay.net/" target="_blank">主页</a>
            <a href="http://blog.snowinmay.net/" target="_blank">博客</a>
            <a href="http://www.cnblogs.com/snowinmay/" target="_blank">北京之旅</a>
            <a href="http://weibo.com/123114623/home?wvr=5" target="_blank">微博</a>    
        </nav>   
        <div id="copyright"><span>Copyright © 2014</span> <span>本网站模版设计及制作都来自网络，特此声明。</span></div>
    </div>
</footer>
</body>
</html>