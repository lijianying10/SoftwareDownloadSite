<form method="post">
    <?php
    $handle_index = $_GET['index'];
    $handle_index++;
    $page_username=null;
    $page_passwd=null;
    include '../conn.php';
    foreach ($db->tbl_user()->where("u_UID",$handle_index) as $tbl_user) { // get all applications
//        echo "$tbl_user[u_Name]\n"; // print application title
        $page_username="$tbl_user[u_Name]";
        $page_passwd="$tbl_user[u_PWD]";
    }
    ?>

    <table class="dv-table" style="width:100%;background:#fafafa;padding:5px;margin-top:5px;">
        <tr>
            <td>用户名</td>
            <td><input id="User_name" name="User_name" class="easyui-validatebox" required="true" VALUE="<?PHP if($page_username != null){echo $page_username;} ?>"></td>
            <td>密码</td>
            <td><input id="User_password" name="User_password" class="easyui-validatebox" required="true" VALUE="<?PHP if($page_passwd != null){echo $page_username;} ?>"></td>
        </tr>
    </table>
    <div style="padding:5px 0;text-align:right;padding-right:30px">
        <a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="saveItem(<?php echo $_REQUEST['index'];?>)">Save</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" plain="true" onclick="cancelItem(<?php echo $_REQUEST['index'];?>)">Cancel</a>
    </div>
</form>