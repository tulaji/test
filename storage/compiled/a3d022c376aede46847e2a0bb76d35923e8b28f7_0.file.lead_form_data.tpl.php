<?php
/* Smarty version 3.1.36, created on 2021-01-19 17:59:08
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/lead_form_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6007643c500dc8_22485671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3d022c376aede46847e2a0bb76d35923e8b28f7' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/lead_form_data.tpl',
      1 => 1598098796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6007643c500dc8_22485671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_538873796007643c4d10c4_30271813', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17574310166007643c4de148_68669873', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_538873796007643c4d10c4_30271813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_538873796007643c4d10c4_30271813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div style="max-width: 1000px; width: 100%;" class="mx-auto">
        <div class="panel">
            <div class="panel-hdr">
                <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Form Builder'];?>
</h2>
                <div class="panel-toolbar">
                    <div class="btn-group">
                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/form/<?php echo $_smarty_tpl->tpl_vars['lead_form']->value->uuid;?>
/" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Preview'];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
leads/form-embed/<?php echo $_smarty_tpl->tpl_vars['lead_form']->value->id;?>
/" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Embed'];?>
</a>
                    </div>
                </div>
            </div>
            <div class="panel-container">
                <div class="panel-content">



                    <div id="clx_form_builder_wrap"></div>


                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_17574310166007643c4de148_68669873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_17574310166007643c4de148_68669873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/form-builder.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>

        $(function () {

            var $clx_form_builder_wrap = $('#clx_form_builder_wrap');


            var formBuilder = $clx_form_builder_wrap.formBuilder({
                disableFields: [
                    'autocomplete',
                    'button',
                    'checkbox',
                    'checkbox-group',
                    'date',
                    'hidden',
                    'number',
                    'radio-group',
                    'select',
                    'text',
                    'textarea',
                    'datetime-local',
                    'file',
                ],
                disabledActionButtons: [
                    'data',
                    'clear'
                ],
                controlPosition: 'left',
                controlOrder: [
                    'header',
                    'paragraph',
                ],
                inputSets: [
                    {
                        "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['First Name'];?>
",
                        "name": "first_name",
                        "fields": [
                            {
                                "subtype": "",
                                "type": "text",
                                "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['First Name'];?>
",
                                "className": "form-control",
                                "name": "first_name",
                                "required": true
                            }
                        ]
                    },
                    {
                        "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Last Name'];?>
",
                        "name": "last_name",
                        "fields": [
                            {
                                "subtype": "",
                                "type": "text",
                                "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Last Name'];?>
",
                                "className": "form-control",
                                "name": "last_name",
                                "required": true
                            }
                        ]
                    },
                    {
                        "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
",
                        "name": "title",
                        "fields": [
                            {
                                "subtype": "",
                                "type": "text",
                                "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
",
                                "className": "form-control",
                                "name": "title"
                            }
                        ]
                    },
                    {
                        "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
",
                        "name": "company",
                        "fields": [
                            {
                                "subtype": "",
                                "type": "text",
                                "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
",
                                "className": "form-control",
                                "name": "company",
                                "required": true
                            }
                        ]
                    },
                    {
                        "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
",
                        "name": "email",
                        "fields": [
                            {
                                "subtype": "email",
                                "type": "text",
                                "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
",
                                "className": "form-control",
                                "name": "email"
                            }
                        ]
                    },
                    {
                        "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
",
                        "name": "phone",
                        "fields": [
                            {
                                "subtype": "",
                                "type": "text",
                                "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
",
                                "className": "form-control",
                                "name": "phone"
                            }
                        ]
                    },
                    {
                        "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
",
                        "name": "street",
                        "fields": [
                            {
                                "subtype": "",
                                "type": "text",
                                "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
",
                                "className": "form-control",
                                "name": "street"
                            }
                        ]
                    },
                    {
                        "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
",
                        "name": "city",
                        "fields": [
                            {
                                "subtype": "",
                                "type": "text",
                                "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
",
                                "className": "form-control",
                                "name": "city"
                            }
                        ]
                    },
                    {
                        "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
",
                        "name": "state",
                        "fields": [
                            {
                                "subtype": "",
                                "type": "text",
                                "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
",
                                "className": "form-control",
                                "name": "state"
                            }
                        ]
                    },
                    {
                        "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
",
                        "name": "zip",
                        "fields": [
                            {
                                "subtype": "",
                                "type": "text",
                                "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
",
                                "className": "form-control",
                                "name": "zip"
                            }
                        ]
                    },
                    {
                        "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
",
                        "name": "country",
                        "fields": [
                            {
                                "subtype": "",
                                "type": "select",
                                "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
",
                                "className": "custom-select",
                                "name": "country",
                                "values": [
                                    {
                                        "label": "",
                                        "value": "",
                                        "selected": false
                                    },
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Countries::list(), 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                    {
                                        "label": "<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
",
                                        "value": "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
",
                                        "selected": <?php if (strtoupper($_smarty_tpl->tpl_vars['config']->value['country_code']) == $_smarty_tpl->tpl_vars['key']->value) {?> true <?php } else { ?> false<?php }?>
                                    },
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                ]
                            }
                        ]
                    },
                    {
                        "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
",
                        "name": "description",
                        "fields": [
                            {
                                "subtype": "",
                                "type": "textarea",
                                "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
",
                                "className": "form-control",
                                "name": "memo"
                            }
                        ]
                    },
                    {
                        "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Website'];?>
",
                        "name": "website",
                        "fields": [
                            {
                                "subtype": "",
                                "type": "text",
                                "label": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Website'];?>
",
                                "className": "form-control",
                                "name": "website"
                            }
                        ]
                    }
                ],
                <?php if ($_smarty_tpl->tpl_vars['lead_form']->value->form_data) {?>
                formData: <?php echo $_smarty_tpl->tpl_vars['lead_form']->value->form_data;?>
,
                <?php }?>
                onSave: function(event, formData) {
                    $.post( base_url + 'leads/save-form-data', {
                        id: <?php echo $_smarty_tpl->tpl_vars['lead_form']->value->id;?>
,
                        form_data: formData,
                    })
                        .done(function( data ) {

                            location.reload();

                        }).fail(function (error) {
                        console.log(error);
                    });
                },
            });



        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
