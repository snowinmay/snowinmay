<!-- 看过的书 -->
<table class="atable">
    <colgroup>
    <col width="150">
    <col width="100">
    <col width="150">
    <col width="100">
    <col width="250">
    <col width="250">
    </colgroup><tbody><tr>
        <th colspan="6" class="th_w">看过的电影/书/电视</th>
    </tr>
    <tr>
        <th>书名</th>
        <th>类别</th>
        <th>阅读次数</th>
        <th>背景图片</th>
        <th>状态（001-已读，002-在读，003-想读）</th>
        <th>操作</th>
    </tr>
    <{assign var="rank" value=1}>
    <{foreach from = $book item = temp key= k}>			        
    <tr <{if $rank % 2 == 1}>class="tr_alt"<{/if}>>
      <td class="tc"><{$temp.bookname}></td>
      <td><{$temp.booktype}></td>
      <td><{$temp.readtimes}></td>
      <td class="tc"><{$temp.bookbg}></td>
      <td class="tc"><{$temp.bookstate}></td>
      <td class="tc">
       <a href="#">编辑</a> | <a href="#">删除</a> 
      </td>
    </tr>
    <{assign var="rank" value=$rank+1}>
    <{/foreach}>
</tbody>
</table>