	<form class="validator" method="post" action="dataController.php" >
	    <div class="d_item_box">
	        <p class="demo_p">配置网站基本参数：title，keyword，description，版本，时间。</p>
	        <div class="afield">
	            <label class="t">网站title</label><span class="required">*</span>
	            <div class="main">
	                <input type="text" class="input_text input_text_large" value="<{$netconfigs[0].nettitle}>" name="nettitle">
	            </div>
	             <span class="hint hint_single">网站标题主要显示在浏览器顶部，同时该内容对搜索引擎优化最为重要。</span>
	        </div>				       
	        <div class="afield">
	            <label class="t">网站关键字</label><span class="required">*</span>
	            <div class="main">
	                <textarea rows="3" class="input_text input_text_large" name="netkeyword"><{$netconfigs[0].netkeyword}></textarea>
	            </div>
	             <span class="hint hint_single">网站关键字主要用于搜索引擎优化，让搜索引擎知道网站的类型和内容，提升网站排名。</span>
	        </div>
	        <div class="afield">
	            <label class="t">网站描述</label><span class="required">*</span>
	            <div class="main">
	                <textarea rows="3" class="input_text input_text_large" name="netdes"><{$netconfigs[0].netdes}></textarea>
	            </div>
	             <span class="hint hint_single">网站描述不显示在网站中，但是搜索引擎可以抓取到该内容，在搜索引擎的搜索结果内容中显示。</span>
	        </div>
	        <div class="afield">
	            <label class="t">网站年份</label><span class="required">*</span>
	            <div class="main">
	                <input type="text" class="input_text input_text_large" value="<{$netconfigs[0].netyear}>" name="netyear">
	            </div>
	             <span class="hint hint_single">网站年份显示在网站底部</span>
	        </div>
	         <div class="afield">
	            <label class="t">网站版本</label><span class="required">*</span>
	            <div class="main">
	                <input type="text" class="input_text input_text_large" value="<{$netconfigs[0].netversion}>" name="netversion">
	            </div>
	             <span class="hint hint_single">网站版本显示在网站底部</span>
	        </div>
	        <div class="afield act">
	            <input type="submit" class="btn" value="保存" id="set-weibo-show">
	        </div>
	    </div>
	</form>