<?php
/* Smarty version 3.1.36, created on 2021-03-22 11:31:05
  from '/var/www/html/pcrm/ui/theme/default/emls.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_605832a147fe56_54991519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '277b856440b237139f31475b2382c2cbf077ea35' => 
    array (
      0 => '/var/www/html/pcrm/ui/theme/default/emls.tpl',
      1 => 1614341524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605832a147fe56_54991519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1049447749605832a145efb7_88658708', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1755557941605832a1478103_36561327', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1049447749605832a145efb7_88658708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1049447749605832a145efb7_88658708',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Settings'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="eml" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/eml-post">


                            <div class="form-group">
                                <label for="email_method"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Email Using'];?>
</label>
                                <select name="email_method" id="email_method" class="form-control">
                                    <option value="phpmail" <?php if ($_smarty_tpl->tpl_vars['e']->value['method'] == 'phpmail') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['PHP mail Function'];?>
</option>


                                    <option value="smtp" <?php if ($_smarty_tpl->tpl_vars['e']->value['method'] == 'smtp') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMTP'];?>
</option>
                                    <option value="mailgun" <?php if ($_smarty_tpl->tpl_vars['e']->value['method'] == 'mailgun') {?>selected="selected" <?php }?>>Mailgun</option>
                                    
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="sysemail"><?php echo $_smarty_tpl->tpl_vars['_L']->value['System Email'];?>
</label>
                                <input type="text" class="form-control" id="sysemail" name="sysemail" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sysEmail'];?>
">
                                <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Outgoing Email Will'];?>
</span>
                            </div>

                            <div id="a_hide">
                                <div class="form-group">
                                    <label for="smtp_host"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMTP Host'];?>
</label>
                                    <input type="text" class="form-control" id="smtp_host" name="smtp_host" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['host'];?>
">

                                </div>

                                <div class="form-group">
                                    <label for="smtp_user"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMTP Username'];?>
</label>
                                    <input type="text" class="form-control" id="smtp_user" name="smtp_user" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['username'];?>
">

                                </div>

                                <div class="form-group">
                                    <label for="smtp_password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMTP Password'];?>
</label>
                                    <input type="password" class="form-control" id="smtp_password" name="smtp_password" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['password'];?>
">

                                </div>

                                <div class="form-group">
                                    <label for="smtp_port"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMTP Port'];?>
</label>
                                    <input type="text" class="form-control" id="smtp_port" name="smtp_port" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['port'];?>
">

                                </div>

                                <div class="form-group">
                                    <label for="smtp_secure"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMTP Secure'];?>
</label>
                                    <select name="smtp_secure" id="smtp_secure" class="form-control">
                                        <option value="" <?php if ($_smarty_tpl->tpl_vars['e']->value['secure'] == '') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                        <option value="tls" <?php if ($_smarty_tpl->tpl_vars['e']->value['secure'] == 'tls') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['TLS'];?>
</option>
                                        <option value="ssl" <?php if ($_smarty_tpl->tpl_vars['e']->value['secure'] == 'ssl') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['SSL'];?>
</option>

                                    </select>

                                </div>

                            </div>

                            <div id="sectionMailgunApi">
                                <div class="form-group">
                                    <label for="mailgun_domain">Mailgun Domain</label>
                                    <input type="text" class="form-control" id="mailgun_domain" name="mailgun_domain" value="<?php echo $_smarty_tpl->tpl_vars['mailgun_domain']->value;?>
">

                                </div>
                                <div class="form-group">
                                    <label for="mailgun_api_key">Mailgun API Key</label>
                                    <input type="text" class="form-control" id="mailgun_api_key" name="mailgun_api_key" value="<?php echo $_smarty_tpl->tpl_vars['mailgun_api_key']->value;?>
">

                                </div>
                            </div>

                            <div id="sectionSparkpostApi">
                                <div class="form-group">
                                    <label for="sparkpost_api_key">Sparkpost Api Key</label>
                                    <input type="text" class="form-control" id="sparkpost_api_key" name="sparkpost_api_key" value="<?php echo $_smarty_tpl->tpl_vars['sparkpost_api_key']->value;?>
">

                                </div>
                            </div>


                            <button type="submit" class="btn btn-success mt-3"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </form>
                    </div>



                </div>
            </div>
        </div>


        <div class="col-md-6">

            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Test Email'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form method="post" id="formEmailTest">
                            <div class="form-group">
                                <label for="email_test_email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                                <input class="form-control" name="email" id="email_test_email">
                            </div>

                            <button type="submit" id="btnEmailTestSubmit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </form>
                        <div class="form-group" style="margin-top: 35px;">
                            <pre><code id="responseArea"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Response'];?>
</code></pre>
                        </div>
                    </div>





                </div>
            </div>


        </div>



    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1755557941605832a1478103_36561327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1755557941605832a1478103_36561327',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            function _check_e_method(){
                var emethod = $( "#email_method" ).val();
                if(emethod === "smtp"){
                    $('#sectionMailgunApi').hide();
                    $('#sectionSparkpostApi').hide();
                    $("#a_hide").show();
                }
                else if(emethod == 'mailgun'){
                    $("#a_hide").hide();
                    $('#sectionMailgunApi').show();
                    $('#sectionSparkpostApi').hide();
                }
                else if(emethod == 'sparkpost'){
                    $("#a_hide").hide();
                    $('#sectionMailgunApi').hide();
                    $('#sectionSparkpostApi').show();
                }
                else{
                    $("#a_hide").hide();
                    $('#sectionMailgunApi').hide();
                    $('#sectionSparkpostApi').hide();
                }



            }
            _check_e_method();
            $( "#email_method" ).change(function() {
                _check_e_method();
            });

            var $formEmailTest = $('#formEmailTest');

            var $btnEmailTestSubmit = $('#btnEmailTestSubmit');

            var $responseArea = $('#responseArea');

            $formEmailTest.on('submit',function (e) {

                e.preventDefault();
                $btnEmailTestSubmit.html('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Working'];?>
...');
                $btnEmailTestSubmit.prop('disabled',true);

                $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/email-test", $formEmailTest.serialize())
                    .done(function( data ) {
                        $btnEmailTestSubmit.html('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
');
                        $btnEmailTestSubmit.prop('disabled',false);
                        $responseArea.html(data);
                    }).fail(function(data) {
                    $btnEmailTestSubmit.html('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
');
                    $btnEmailTestSubmit.prop('disabled',false);
                    spNotify(data.responseText,'error');
                });


            });

        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
