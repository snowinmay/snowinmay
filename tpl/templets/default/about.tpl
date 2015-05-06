<!-- 关于我 by prince yu 2013-7-8 -->
<div id="about">
	<h6>关于我</h6>
	<ul>
		<{foreach from = $arr item = temp }>			        
		<li class="<{$temp.asname}>"><a href="#"><{$temp.catname}></a></li>
		<{/foreach}>
	</ul>
	<h6 class="showme">关于我</h6>
</div>