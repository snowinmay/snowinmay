<!-- 想去的地方 -->
<table class="atable">
    <colgroup>
    <col width="200">
    <col width="200">
    <col width="600">
    <col width="250">
    </colgroup><tbody><tr>
        <th colspan="3" class="th_w">听过的歌</th>
    </tr>
    <tr>
        <th>歌名</th>
        <th>演唱者</th>
        <th>歌曲URL</th>
        <th>操作</th>
    </tr>
    <{assign var="rank" value=1}>
    <{foreach from = $song item = temp key= k}>			        
    <tr <{if $rank % 2 == 1}>class="tr_alt"<{/if}>>
      <td class="tc"><{$temp.songname}></td>
      <td><{$temp.songstar}></td>
      <td><{$temp.songurl}></td>
      <td class="tc">
       <a href="#">编辑</a> | <a href="#">删除</a> 
      </td>
    </tr>
    <{assign var="rank" value=$rank+1}>
    <{/foreach}>
</tbody>
</table>