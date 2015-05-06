<!-- 想去的地方 -->
<table class="atable">
    <colgroup>
    <col width="250">
    <col width="350">
    <col width="150">
    <col width="250">
    </colgroup><tbody><tr>
        <th colspan="4" class="th_w">常用的网络</th>
    </tr>
    <tr>
        <th>名字</th>
        <th>介绍</th>
        <th>类型（001-学习，002-娱乐）</th>
        <th>操作</th>
    </tr>
    <{assign var="rank" value=1}>
    <{foreach from = $comnet item = temp key= k}>			        
    <tr <{if $rank % 2 == 1}>class="tr_alt"<{/if}>>
      <td class="tc"><{$temp.netname}></td>
      <td><{$temp.netintro}></td>
      <td><{$temp.nettype}></td>
      <td class="tc">
       <a href="#">编辑</a> | <a href="#">删除</a> 
      </td>
    </tr>
    <{assign var="rank" value=$rank+1}>
    <{/foreach}>
</tbody>
</table>