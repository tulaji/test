<?php
/* Smarty version 3.1.36, created on 2021-01-04 08:36:22
  from '/Users/razib/Documents/valet/business-suite/apps/wcsuite/views/includes/base_js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff319d6d2e677_88098171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '845b74cad9b67782767fd519881828993c03c0b0' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/wcsuite/views/includes/base_js.tpl',
      1 => 1609767322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff319d6d2e677_88098171 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(function () {
        let $switch_store = $('#switch_store');
        $switch_store.on('change',function () {
            if($switch_store.val())
                {
                    if($switch_store.val() === '---AddNewStore---')
                        {
                            window.location = base_url + 'wcsuite/app/store/'
                        }
                    else{
                        window.location = base_url + 'wcsuite/app/make-default-integration/' + $switch_store.val();
                    }
                }
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
