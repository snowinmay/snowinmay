<!-- 想去的地方 -->
<table class="atable">
    <colgroup>
    <col width="250">
    <col width="500">
    <col width="250">
    </colgroup><tbody><tr>
        <th colspan="3" class="th_w">去过的地方</th>
    </tr>
    <tr>
        <th>地名</th>
        <th>看点</th>
        <th>操作</th>
    </tr>
    <{assign var="rank" value=1}>
    <{foreach from = $going_place item = temp key= k}>			        
    <tr <{if $rank % 2 == 1}>class="tr_alt"<{/if}>>
      <td class="tc"><{$temp.goingpname}></td>
      <td><{$temp.seeing}></td>
      <td class="tc">
       <a href="#">编辑</a> | <a href="#">删除</a> 
      </td>
    </tr>
    <{assign var="rank" value=$rank+1}>
    <{/foreach}>
</tbody>
</table>