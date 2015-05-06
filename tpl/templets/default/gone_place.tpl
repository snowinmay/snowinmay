<!-- 去过的地方 -->
<table class="atable">
    <colgroup>
    <col width="150">
    <col width="100">
    <col width="500">
    <col width="250">
    </colgroup><tbody><tr>
        <th colspan="4" class="th_w">去过的地方</th>
    </tr>
    <tr>
        <th>地名</th>
        <th>时间</th>
        <th>回忆</th>
        <th>操作</th>
    </tr>
    <{assign var="rank" value=1}>
    <{foreach from = $gone_place item = temp key= k}>			        
    <tr <{if $rank % 2 == 1}>class="tr_alt"<{/if}>>
      <td class="tc"><{$temp.gonepname}></td>
      <td><{$temp.gonetime}></td>
      <td><{$temp.gonemem}></td>
      <td class="tc">
       <a href="#">编辑</a> | <a href="#">删除</a> 
      </td>
    </tr>
    <{assign var="rank" value=$rank+1}>
    <{/foreach}>
</tbody>
</table>