<?php
/* Smarty version 3.1.36, created on 2024-10-05 20:34:00
  from 'C:\xampp\htdocs\CRM_FM\ui\theme\default\layouts\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_67015560c1a1f5_63310052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a980e9fe4084e09acbe23ea0ce3ca5bc2e8a7399' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CRM_FM\\ui\\theme\\default\\layouts\\admin.tpl',
      1 => 1728140603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67015560c1a1f5_63310052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81212050767015560b08946_01486823', "head_extras_from_layout");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58662927267015560b0c700_78446149', "content_body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/base.tpl");
}
/* {block "head_extras_from_layout"} */
class Block_81212050767015560b08946_01486823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_extras_from_layout' => 
  array (
    0 => 'Block_81212050767015560b08946_01486823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        var clx_admin_layout = 1;
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "head_extras_from_layout"} */
/* {block "content"} */
class Block_86344222667015560c0a140_97381219 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "content_body"} */
class Block_58662927267015560b0c700_78446149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_58662927267015560b0c700_78446149',
  ),
  'content' => 
  array (
    0 => 'Block_86344222667015560c0a140_97381219',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <aside class="page-sidebar">
        <div class="page-logo">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="page-logo-link d-flex align-items-center position-relative">

                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
"
                        aria-roledescription="logo">
                <?php } else { ?>
                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
"
                        aria-roledescription="logo">
                <?php }?>


                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                    <span class="page-logo-text mr-1"><?php echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];?>
</span>
                <?php } else { ?>
                    <span class="page-logo-text mr-1">Umrao</span>
                <?php }?>



            </a>
        </div>

        <nav id="js-primary-nav" class="primary-nav" role="navigation">

            <div class="info-card">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->img) {?>
                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
/<?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->img;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
" class="profile-image rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                <?php } else { ?>
                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
/ui/lib/img/default-user-avatar.png" class="profile-image rounded-circle"
                        alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                <?php }?>


                <div class="info-card-text">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="d-flex align-items-center text-white">
                        <span class="text-truncate text-truncate-sm d-inline-block">
                            <?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>

                        </span>
                    </a>
                </div>

                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['hide_cover_image'])) && $_smarty_tpl->tpl_vars['config']->value['hide_cover_image'] == 1) {?>

                <?php } else { ?>

                    <img src="<?php echo APP_URL;?>
/ui/theme/default/img/cover-2-lg.png" class="cover" alt="cover">

                <?php }?>



            </div>
            <ul id="js-nav-menu" class="nav-menu">

                <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'util') {?>active open<?php }?>">
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 L7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                    </g>
                </svg>
                            <span class="nav-link-text">User Pass</span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
user_clinic/add"><span class="nav-link-text">Add Clinic Data</span></a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
user_clinic/view"><span class="nav-link-text">Generate Pass</span></a>
                        </li>
                    </ul>
                </li>

                <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'util') {?>active open<?php }?>">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M9,15 L7.5,15 C6.67157288,15 6,15.6715729 6,16.5 C6,17.3284271 6.67157288,18 7.5,18 C8.32842712,18 9,17.3284271 9,16.5 L9,15 Z M9,15 L9,9 L15,9 L15,15 L9,15 Z M15,16.5 C15,17.3284271 15.6715729,18 16.5,18 C17.3284271,18 18,17.3284271 18,16.5 C18,15.6715729 17.3284271,15 16.5,15 L15,15 L15,16.5 Z M16.5,9 C17.3284271,9 18,8.32842712 18,7.5 C18,6.67157288 17.3284271,6 16.5,6 C15.6715729,6 15,6.67157288 15,7.5 L15,9 L16.5,9 Z M9,7.5 C9,6.67157288 8.32842712,6 7.5,6 C6.67157288,6 6,6.67157288 6,7.5 C6,8.32842712 6.67157288,9 7.5,9 L9,9 L9,7.5 Z M11,13 L13,13 L13,11 L11,11 L11,13 Z M13,11 L13,7.5 C13,5.56700338 14.5670034,4 16.5,4 C18.4329966,4 20,5.56700338 20,7.5 C20,9.43299662 18.4329966,11 16.5,11 L13,11 Z M16.5,13 C18.4329966,13 20,14.5670034 20,16.5 C20,18.4329966 18.4329966,20 16.5,20 C14.5670034,20 13,18.4329966 13,16.5 L13,13 L16.5,13 Z M11,16.5 C11,18.4329966 9.43299662,20 7.5,20 C5.56700338,20 4,18.4329966 4,16.5 C4,14.5670034 5.56700338,13 7.5,13 L11,13 L11,16.5 Z M7.5,11 C5.56700338,11 4,9.43299662 4,7.5 C4,5.56700338 5.56700338,4 7.5,4 C9.43299662,4 11,5.56700338 11,7.5 L11,11 L7.5,11 Z"
                                    fill="#000000" fill-rule="nonzero" />
                            </g>



                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Utilities'];?>
 </span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/backups"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Backup'];?>
</span></a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/dbstatus"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Database Status'];?>
</span></a>
                        </li>
                    </ul>
                </li>

                <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'appearance') {?>active open<?php }?>" id="li_appearance">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                    fill="#000000" opacity="0.3" />
                                <path
                                    d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                    fill="#000000" />
                            </g>


                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Appearance'];?>
 </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/ui"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['User Interface'];?>
</span></a>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/customize"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customize'];?>
</span></a>
                        </li>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_admin']->value['appearance'], 'sm_appearance');
$_smarty_tpl->tpl_vars['sm_appearance']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sm_appearance']->value) {
$_smarty_tpl->tpl_vars['sm_appearance']->do_else = false;
?>

                            <?php echo $_smarty_tpl->tpl_vars['sm_appearance']->value;?>



                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/editor"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Editor'];?>
</span></a></li>

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/themes"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Themes'];?>
</span></a></li>

                    </ul>
                </li>

                <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'settings') {?>active open<?php }?>" id="li_settings">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                    fill="#000000" />
                            </g>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings'];?>
 </span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['General Settings'];?>
</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

    </aside>

    <div class="page-content-wrapper">
        <header class="page-header" role="banner">
            <div class="page-logo">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard"
                    class="page-logo-link press-scale-down d-flex align-items-center position-relative">
                    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                        <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
"
                            aria-roledescription="logo">
                    <?php } else { ?>
                        <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
"
                            aria-roledescription="logo">
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                        <span class="page-logo-text mr-1"><?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
</span>
                    <?php } else { ?>
                        <span class="page-logo-text mr-1">CloudOnex</span>
                    <?php }?>


                    <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                </a>
            </div>
            <!-- DOC: nav menu layout change shortcut -->
            <div class="hidden-md-down dropdown-icon-menu position-relative">
                <a href="#" class="header-btn btn js-waves-off svg-icon svg-icon-primary rounded-0" style="border: none;"
                    data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px"
                        height="32px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1"></rect>
                            <rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2" rx="1"></rect>
                            <path
                                d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z"
                                fill="#000000"></path>
                        </g>
                    </svg>
                </a>
                <ul>
                    <li>
                        <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify"
                            title="Minify Navigation">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                    viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path
                                            d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                                        <path
                                            d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                                            transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                                    </g>
                                </svg></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed"
                            title="Lock Navigation">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                    viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <mask fill="white">
                                            <use xlink:href="#path-1" />
                                        </mask>
                                        <g />
                                        <path
                                            d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z"
                                            fill="#000000" />
                                    </g>
                                </svg></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="hidden-lg-up">
                <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                    <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 24 24"
                            version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                                <path
                                    d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
                                    fill="#000000" opacity="0.3" />
                            </g>
                        </svg></span>
                </a>
            </div>

            <div class="ml-auto d-flex">
                <div class="hidden-md-down">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/ui" class="header-icon cursor-pointer">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24"
                                version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect opacity="0.200000003" x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z"
                                        fill="#000000" opacity="0.3" />
                                    <path
                                        d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z"
                                        fill="#000000" />
                                </g>
                            </svg></span>
                    </a>
                </div>

                <div>
                    <a href="javasctipt:;" id="get_activity" class="header-icon cursor-pointer" data-toggle="dropdown">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24"
                                version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                        fill="#000000" />
                                    <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                </g>
                            </svg></span>
                    </a>



                    <div class="dropdown-menu dropdown-menu-animated dropdown-xl">
                        <div
                            class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
                            <h4 class="m-0 text-center color-white">
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Notifications'];?>

                            </h4>
                        </div>

                        <div class="custom-scroll h-100" id="activity_loaded">
                            <div class="text-center my-3">
                                <div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32"
                                        width="32" viewbox="0 0 75 75">
                                        <circle cx="37.5" cy="37.5" r="33.5" stroke-width="6" />
                                    </svg></div>
                            </div>
                        </div>
                        <div
                            class="py-2 px-3 bg-faded d-block rounded-bottom text-center border-faded border-bottom-0 border-right-0 border-left-0">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/activity" class="fs-xs fw-500 ml-auto"><?php echo $_smarty_tpl->tpl_vars['_L']->value['See All Activity'];?>
</a>
                        </div>
                    </div>
                </div>

                <div>
                    <a href="javascript:;" class="header-icon cursor-pointer" data-toggle="modal"
                        data-target=".js-modal-notes">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24"
                                version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                        fill="#000000" opacity="0.3" />
                                    <path
                                        d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                        fill="#000000" />
                                    <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1" />
                                    <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1" />
                                </g>
                            </svg></span>
                    </a>
                </div>
                <div>
                    <a href="#" data-toggle="dropdown" title="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
"
                        class="header-icon d-flex align-items-center justify-content-center ml-2 cursor-pointer">

                        <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" class="profile-image rounded-circle"
                                alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                        <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="profile-image rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                        <?php }?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                        <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                            <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                <span class="mr-2">

                                    <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png"
                                            class="rounded-circle profile-image" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                                    <?php } else { ?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="rounded-circle profile-image"
                                            alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                                    <?php }?>
                                </span>
                                <div class="info-card-text">
                                    <div class="fs-lg text-truncate text-truncate-lg"><?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
</div>
                                    <span class="text-truncate text-truncate-md opacity-80"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="dropdown-item">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Profile'];?>

                        </a>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password" class="dropdown-item">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Change Password'];?>

                        </a>



                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item fw-500 pt-3 pb-3" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>

                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main id="clx-page-content" role="main"
            class="page-content <?php if ((isset($_smarty_tpl->tpl_vars['page_content_extra_class']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['page_content_extra_class']->value;?>
 <?php }?>">


            <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {
echo $_smarty_tpl->tpl_vars['notify']->value;
}?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86344222667015560c0a140_97381219', "content", $this->tplIndex);
?>



        </main>

        <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>


        <div class="modal fade js-modal-notes modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right">
                <div class="modal-content h-100">
                    <div class="dropdown-header bg-primary-900 d-flex align-items-center w-100">
                        <h3 class="text-white mt-2 mb-1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Notes'];?>
</h3>
                        <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body p-0 h-100 d-flex">
                        <textarea class="form-control rounded-0" id="clx_notes_clipboard"
                            placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Whats on your mind'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->notes;?>
</textarea>
                    </div>
                </div>
            </div>
        </div>



    </div>

<?php
}
}
/* {/block "content_body"} */
}
