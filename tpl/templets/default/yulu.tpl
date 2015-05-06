<!-- 想去的地方 -->
<table class="atable">
    <colgroup>
    <col width="500">
    <col width="100">
    <col width="100">
    <col width="100">
    <col width="200">
    </colgroup><tbody><tr>
        <th colspan="5" class="th_w">哒哒语录</th>
    </tr>
    <tr>
        <th>内容</th>
        <th>类型</th>
        <th>出处</th>
        <th>备注</th>
        <th>操作</th>
    </tr>
    <{assign var="rank" value=1}>
    <{foreach from = $quot item = temp key= k}>			        
    <tr <{if $rank % 2 == 1}>class="tr_alt"<{/if}>>
      <td class="tc"><{$temp.content}></td>
      <td><{$temp.qtype}></td>
      <td><{$temp.qfrom}></td>
      <td><{$temp.qother}></td>
      <td class="tc">
       <a href="#">编辑</a> | <a href="#">删除</a> 
      </td>
    </tr>
    <{assign var="rank" value=$rank+1}>
    <{/foreach}>
</tbody>
</table>