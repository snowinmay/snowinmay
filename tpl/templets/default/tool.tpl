<!-- 想去的地方 -->
<table class="atable">
    <colgroup>
    <col width="100">
    <col width="100">
    <col width="500">
    <col width="100">
    <col width="200">
    </colgroup><tbody><tr>
        <th colspan="5" class="th_w">常用的工具</th>
    </tr>
    <tr>
        <th>名称</th>
        <th>类型</th>
        <th>介绍</th>
        <th>使用情况</th>
        <th>操作</th>
    </tr>
    <{assign var="rank" value=1}>
    <{foreach from = $tool item = temp key= k}>			        
    <tr <{if $rank % 2 == 1}>class="tr_alt"<{/if}>>
      <td class="tc"><{$temp.tname}></td>
      <td><{$temp.ttype}></td>
      <td><{$temp.tintro}></td>
      <td><{$temp.tuse}></td>
      <td class="tc">
       <a href="#">编辑</a> | <a href="#">删除</a> 
      </td>
    </tr>
    <{assign var="rank" value=$rank+1}>
    <{/foreach}>
</tbody>
</table>