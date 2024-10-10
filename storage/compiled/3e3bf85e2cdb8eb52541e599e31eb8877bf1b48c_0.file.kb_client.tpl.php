<?php
/* Smarty version 3.1.36, created on 2020-06-19 04:32:41
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/kb_client.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5eec78294321e2_76742090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e3bf85e2cdb8eb52541e599e31eb8877bf1b48c' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/kb_client.tpl',
      1 => 1592330615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eec78294321e2_76742090 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3824837765eec782942d5d0_59984754', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21308324055eec7829431209_86619869', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "content"} */
class Block_3824837765eec782942d5d0_59984754 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3824837765eec782942d5d0_59984754',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="ib-search-bar" style="margin-bottom: 30px;">
                <div class="input-group">
                    <input type="text" class="form-control" id="ib_search_input" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
..." autofocus> </div>
            </div>


            <table class="table table-bordered filter-table" id="tbl_articles">
                <thead>
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</th>

                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>

                    <tr>

                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kb/<?php echo $_smarty_tpl->tpl_vars['article']->value->slug;?>
" id="k<?php echo $_smarty_tpl->tpl_vars['article']->value->id;?>
" class="kb_view"><?php echo $_smarty_tpl->tpl_vars['article']->value->title;?>
</a> </td>



                    </tr>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>
            </table>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_21308324055eec7829431209_86619869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_21308324055eec7829431209_86619869',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/js/filtertable.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function() {



            $('#tbl_articles').filterTable({
                inputSelector: '#ib_search_input',
                ignoreColumns: [1],
                minRows: 1
            });


        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
