<?php
/* Smarty version 3.1.36, created on 2021-06-10 15:36:40
  from 'C:\xampp\htdocs\pcrm\pcrm\ui\theme\default\sms_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_60c1e430d640e3_33546063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68f5367c99ececdd07cee5fa8a4b20a62ed822b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pcrm\\pcrm\\ui\\theme\\default\\sms_settings.tpl',
      1 => 1611100324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1e430d640e3_33546063 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124016205260c1e430ced0a4_59209226', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192469045160c1e430d5b7c9_63480572', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_124016205260c1e430ced0a4_59209226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_124016205260c1e430ced0a4_59209226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="mx-auto" style="max-width: 600px; width: 100%">
        <div class="panel">
            <div class="panel-hdr">
                <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings'];?>
</h2>
            </div>

            <div class="panel-container">
                <div class="panel-content">

                    <form id="spForm" method="post" action="">

                        <div class="form-group">
                            <label for="sms_api_handler"><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Handler'];?>
</label>
                            <select class="form-control" id="sms_api_handler" name="sms_api_handler">
                                <option value="Nexmo" <?php if ($_smarty_tpl->tpl_vars['config']->value['sms_api_handler'] == 'Nexmo') {?>selected<?php }?>>Nexmo</option>
                                <option value="Twilio" <?php if ($_smarty_tpl->tpl_vars['config']->value['sms_api_handler'] == 'Twilio') {?>selected<?php }?>>Twilio</option>

                                <option value="Routesms" <?php if ($_smarty_tpl->tpl_vars['config']->value['sms_api_handler'] == 'Routesms') {?>selected<?php }?>>Routesms</option>
                                <option value="Infobip" <?php if ($_smarty_tpl->tpl_vars['config']->value['sms_api_handler'] == 'Infobip') {?>selected<?php }?>>Infobip</option>

                                <option value="Alanood" <?php if ($_smarty_tpl->tpl_vars['config']->value['sms_api_handler'] == 'Alanood') {?>selected<?php }?>>Alanood [UAE]</option>

                                <option value="Textlocal_in" <?php if ($_smarty_tpl->tpl_vars['config']->value['sms_api_handler'] == 'Textlocal_in') {?>selected<?php }?>>Textlocal India</option>

                                <option value="Msg91" <?php if ($_smarty_tpl->tpl_vars['config']->value['sms_api_handler'] == 'Msg91') {?>selected<?php }?>>Msg91</option>
                                <option value="Msg91Local" <?php if ($_smarty_tpl->tpl_vars['config']->value['sms_api_handler'] == 'Msg91Local') {?>selected<?php }?>>Msg91 Local</option>

                                <option value="Custom" <?php if ($_smarty_tpl->tpl_vars['config']->value['sms_api_handler'] == 'Custom') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Custom'];?>
</option>
                            </select>
                        </div>


                        <div class="form-group" id="block_sms_sender_name">
                            <label for="sms_sender_name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sender ID'];?>
</label>
                            <input class="form-control" id="sms_sender_name" name="sms_sender_name" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sms_sender_name'];?>
">
                        </div>


                        <div class="form-group" id="block_sms_req_url">
                            <label for="sms_req_url"><?php echo $_smarty_tpl->tpl_vars['_L']->value['HTTP API URL'];?>
</label>
                            <input class="form-control" id="sms_req_url" name="sms_req_url" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sms_req_url'];?>
">
                        </div>

                        <div class="form-group" id="block_sms_request_method">
                            <label for="sms_request_method"><?php echo $_smarty_tpl->tpl_vars['_L']->value['HTTP Request Method'];?>
</label>

                            <select class="form-control" id="sms_request_method" name="sms_request_method">
                                <option value="GET" <?php if ($_smarty_tpl->tpl_vars['config']->value['sms_request_method'] == 'GET') {?>selected<?php }?>>GET</option>
                                <option value="POST" <?php if ($_smarty_tpl->tpl_vars['config']->value['sms_request_method'] == 'POST') {?>selected<?php }?>>POST</option>
                            </select>
                        </div>

                        <div class="form-group" id="block_sms_http_params">
                            <label for="sms_http_params"><?php echo $_smarty_tpl->tpl_vars['_L']->value['HTTP Parameters'];?>
</label>
                            <textarea class="form-control" name="sms_http_params" id="sms_http_params" rows="4"><?php echo $_smarty_tpl->tpl_vars['config']->value['sms_http_params'];?>
</textarea>
                            <span>You can use this format  to=={{to}},from=={{from}},message=={{message}} as placeholder.</span>
                        </div>

                        <div class="form-group" id="block_sms_auth_username">
                            <label for="sms_auth_username" id="labelUsername">SID</label>
                            <input class="form-control" id="sms_auth_username" name="sms_auth_username" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sms_auth_username'];?>
">
                        </div>

                        <div class="form-group" id="block_sms_auth_password">
                            <label for="sms_auth_password" id="labelPassword"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Token'];?>
</label>
                            <input class="form-control" id="sms_auth_password" name="sms_auth_password" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sms_auth_password'];?>
">
                        </div>


                        <div class="form-group">
                            <button type="submit" id="saveSmsCredentials" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </div>



                    </form>

                </div>
            </div>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_192469045160c1e430d5b7c9_63480572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_192469045160c1e430d5b7c9_63480572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





    <?php echo '<script'; ?>
>



        $(function () {




            var $block_sms_req_url = $("#block_sms_req_url");
            var $block_sms_request_method = $("#block_sms_request_method");

            var $block_sms_sender_name = $("#block_sms_sender_name");

            var $block_sms_auth_username = $("#block_sms_auth_username");
            var $block_sms_auth_password = $("#block_sms_auth_password");

            var $block_sms_http_params = $("#block_sms_http_params");

            var $label_username = $('#labelUsername');
            var $label_password = $('#labelPassword');



            function customParams(status) {



                if(status === 'show'){

                    $block_sms_sender_name.hide();
                    $block_sms_auth_username.hide();
                    $block_sms_auth_password.hide();



                    $block_sms_req_url.show();
                    $block_sms_request_method.show();
                    $block_sms_http_params.show();

                }
                else{

                    $block_sms_sender_name.show();
                    $block_sms_auth_username.show();
                    $block_sms_auth_password.show();

                    $block_sms_req_url.hide();
                    $block_sms_request_method.hide();
                    $block_sms_http_params.hide();

                }

            }


            <?php if (($_smarty_tpl->tpl_vars['config']->value['sms_api_handler']) != 'Custom') {?>
            customParams('hide');
            <?php } else { ?>
            customParams('show');
            <?php }?>

            var $save = $("#saveSmsCredentials");

            $save.on('click', function (e) {
                e.preventDefault();

                $save.prop('disabled',true);

                $.post(base_url + 'sms/init/save-sms-credentials/', $('#spForm').serialize()).done(function (data) {

                    toastr.success(data);
                    $save.prop('disabled',false);


                });

            });

            var $sms_api_handler = $("#sms_api_handler");

            function prepareDriver() {
                var $sms_api_handler_val = $sms_api_handler.val();

                switch ($sms_api_handler_val) {
                    case 'Nexmo':

                        customParams('hide');

                        $label_username.html("API Key");
                        $label_password.html("API Secret");


                        break;


                    case 'Twilio':

                        customParams('hide');

                        $label_username.html("SID");
                        $label_password.html("Token");

                        break;

                    case 'Routesms':

                        customParams('hide');
                        $block_sms_req_url.show();

                        $label_username.html("Username");
                        $label_password.html("Password");

                        break;

                    case 'Alanood':

                        customParams('hide');
                        $block_sms_req_url.show();

                        $label_username.html("Username");
                        $label_password.html("Password");

                        break;


                    case 'Msg91':
                    case 'Msg91Local':


                        customParams('hide');

                        $label_username.html("Authkey");
                        $block_sms_auth_password.hide();

                        break;



                    case 'Textlocal_in':

                        customParams('hide');
                     //   $block_sms_req_url.show();

                        $label_username.html("Username");
                        $label_password.html("Hash / Password");

                        break;

                    case 'Custom':

                        $label_username.html("Username");
                        $label_password.html("Password");

                        customParams('show');



                        break;


                    case 'Infobip':

                        customParams('hide');

                        $label_username.html("Username");
                        $label_password.html("Password");
                        $block_sms_req_url.show();

                        break;



                }
            }

            prepareDriver();

            $sms_api_handler.on('change',function () {

                prepareDriver();


            });



        })
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
