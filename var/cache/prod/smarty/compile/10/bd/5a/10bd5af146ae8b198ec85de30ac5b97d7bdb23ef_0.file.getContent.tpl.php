<?php
/* Smarty version 3.1.33, created on 2020-08-12 14:20:37
  from 'C:\wamp64\www\prestashop\modules\gradi\views\templates\hook\getContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f344105554201_72385299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10bd5af146ae8b198ec85de30ac5b97d7bdb23ef' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\gradi\\views\\templates\\hook\\getContent.tpl',
      1 => 1597259986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f344105554201_72385299 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['savedForm']->value)) {?>
    <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['savedForm']->value;?>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['errorForm']->value)) {?>
    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['errorForm']->value;?>
</div>
<?php }?>   
<div class="panel col-8">
    <h3><i class="icon icon-credit-card"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gradi Adsense','mod'=>'GradiAdsense'),$_smarty_tpl ) );?>
</h3>
    <h2 id="texto"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Crea tu banner prublicitario!','mod'=>'GradiAdsense'),$_smarty_tpl ) );?>
</h2><br />

    <form method="POST" enctype="multipart/form-data">
        <label for="title">Titulo de la publicación</label>
        <input name="title" id="title" type="text" placeholder="Titulo de la publicidad" required/><br />
        <label for="description">Descripción</label>
        <input name="description" id="description" type="text" placeholder="Descripción corta de la publicidad" 
               required /><br />
        <label for="label">Label</label>
        <input name="label" id="label" type="text" placeholder="Label del contenido" 
               required /><br />
        <label for="url">Url a apuntar</label>
        <input name="url" id="url" type="text" placeholder="Url a apuntar" required/><br />
        <label for="imagen">Imagen del banner (recomendado 1114 * 213)</label>
        <input name="imagen" id="imagen" type="file" placeholder="Imagen de publicidad" /><br />

        <input name="enviar" class="btn btn-success" type="submit"/><br />
    </form>
</div> </br>

<div class="panel col-8">
    <h3><i class="icon icon-credit-card"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lista de Banners','mod'=>'GradiAdsense'),$_smarty_tpl ) );?>
</h3>
    <p id="entradas">
    <h2 id="texto"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lista de banners!','mod'=>'GradiAdsense'),$_smarty_tpl ) );?>
</h2><br />
    <?php if (isset($_smarty_tpl->tpl_vars['statusNeg']->value)) {?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['statusNeg']->value;?>
</div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['statusPos']->value)) {?>
        <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['statusPos']->value;?>
 ¡Actualiza!</div>
    <?php }?>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Label</th>
                <th scope="col">Url</th>
                <th scope="col">Switch</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allBanners']->value, 'banner');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
?>
                <tr>
                    <td scope="row"><?php echo $_smarty_tpl->tpl_vars['banner']->value['id_GradiAdsense'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['banner']->value['title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['banner']->value['label'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
</td>

            <form method="post">
                <input style="display: none" name="id_gradi" id="id_gradi" type="text" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value['id_GradiAdsense'];?>
"/>
                <input style="display: none" name="swicth_g" id="swicth_g" type="text" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value['switch'];?>
"/>
                <td><input <?php if ($_smarty_tpl->tpl_vars['banner']->value['switch'] == 'enable') {?> style="color: green;"<?php }?> style="color: red;" type="submit" name="updateBanner" id="updateBanner" href="#" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value['switch'];?>
"/></td>
            </form> 
            <form method="post">
                <input style="display: none" name="id_gradi" id="id_gradi" type="text" value="<?php echo $_smarty_tpl->tpl_vars['banner']->value['id_GradiAdsense'];?>
"/>
                <td><input class="btn btn-danger" type="submit" value="Borrar" name="borrarBanner" id="borrarBanner" /></td>
            </form>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>


</div>
<?php }
}
