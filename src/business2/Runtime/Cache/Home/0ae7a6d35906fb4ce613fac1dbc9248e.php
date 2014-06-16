<?php if (!defined('THINK_PATH')) exit();?><form method="post">
     <table class="dv-table" style="width:100%;background:#fafafa;padding:5px;margin-top:5px;">
         <tr><td>软件内部编号：</td><td><?php echo ($s_id); ?></td></tr>
         <tr><td>软件名</td><td><input id="s_Title" name="s_Title" class="easyui-validatebox" required="true" VALUE="<?php echo ($s_Title); ?>"></td></tr>
         <tr><td>软件大小：</td><td><?php echo ($s_size); ?></td></tr>
         <tr><td>软件语言</td><td><input id="s_language" name="s_language" class="easyui-validatebox" required="true" VALUE="<?php echo ($s_language); ?>"></td></tr>
         <tr><td>软件大小：</td><td><?php echo ($s_size); ?></td><td>下载次数：<?php echo ($s_size); ?></td><td>评论次数：<?php echo ($s_comment_times); ?></td></td></tr>
         <tr><td>上传日期：</td><td><?php echo ($s_uploadtime_date); ?></td></tr>
         <tr><td>官网地址</td><td><input id="s_offical_site" name="s_offical_site" class="easyui-validatebox" required="true" VALUE="<?php echo ($s_offical_site); ?>"></td></tr>
         <tr><td>运行平台</td><td><input id="s_plateform" name="s_plateform" class="easyui-validatebox" required="true" VALUE="<?php echo ($s_plateform); ?>"></td></tr>
         <tr><td>网盘分流地址</td><td><input id="s_URL_baidu" name="s_URL_baidu" class="easyui-validatebox" required="true" VALUE="<?php echo ($s_URL_baidu); ?>"></td></tr>
         <tr><td>官网下载地址</td><td><input id="s_URL_offical" name="s_URL_offical" class="easyui-validatebox" required="true" VALUE="<?php echo ($s_URL_offical); ?>"></td></tr>
         <tr><td>软件介绍</td><td><input id="s_Introduction" name="s_Introduction" class="easyui-validatebox" required="true" VALUE="<?php echo ($s_Introduction); ?>"></td></tr>
    </table>
    <div style="padding:5px 0;text-align:right;padding-right:30px">
        <a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="saveItem(<?php echo ($index); ?>)">Save</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" plain="true" onclick="cancelItem(<?php echo ($index); ?>)">Cancel</a>
    </div>
</form>