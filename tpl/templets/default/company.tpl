<!-- 工作信息 -->
<table class="atable">
    <colgroup>
    <col width="150">
    <col width="100">
    <col width="150">
    <col width="100">
    <col width="250">
    <col width="250">
    </colgroup><tbody><tr>
        <th colspan="6" class="th_w">公司列表</th>
    </tr>
    <tr>
        <th>公司名称</th>
        <th>地点</th>
        <th>时间</th>
        <th>公司类型</th>
        <th>主要做的事</th>
        <th>操作</th>
    </tr>
    <{assign var="rank" value=1}>
    <{foreach from = $company item = temp key= k}>			        
    <tr <{if $rank % 2 == 1}>class="tr_alt"<{/if}>>
      <td class="tc"><{$temp.compname}></td>
      <td><{$temp.compadd}></td>
      <td><{$temp.comptime}></td>
      <td class="tc"><{$temp.comptype}></td>
      <td class="tc"><{$temp.compthing}></td>
      <td class="tc">
       <a href="#">编辑</a> | <a href="#">删除</a> 
      </td>
    </tr>
    <{assign var="rank" value=$rank+1}>
    <{/foreach}>
</tbody>
</table>	