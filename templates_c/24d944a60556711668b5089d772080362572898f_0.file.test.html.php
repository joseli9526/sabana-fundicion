<?php
/* Smarty version 3.1.30, created on 2018-12-17 21:42:52
  from "C:\xampp2\htdocs\Arbomex\Celaya\SabanaFundicionCambios2\templates\test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c186cbca5cc20_07542982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24d944a60556711668b5089d772080362572898f' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\Arbomex\\Celaya\\SabanaFundicionCambios2\\templates\\test.html',
      1 => 1545104551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5c186cbca5cc20_07542982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div style="width: 100%;">

    <div style="width: 50%; float: left;">
        <table id="table1">
            <thead class="thead-dark">
            <tr>
                <th>col 1</th>
                <th>col 2</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>data 1</td>
                <td>data 2</td>
            </tr>
            <tr>
                <td>data 1</td>
                <td>data 2</td>
            </tr>
            <tr>
                <td>data 1</td>
                <td>data 2</td>
            </tr>
            <tr>
                <td>data 1</td>
                <td>data 2</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div style="width: 50%; float: left;">
        <table id="table2">
            <thead class="thead-dark">
            <tr>
                <th>col 1</th>
                <th>col 2</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>data 1</td>
                <td>data 2</td>
            </tr>
            <tr>
                <td>data 1</td>
                <td>data 2</td>
            </tr>
            <tr>
                <td>data 1</td>
                <td>data 2</td>
            </tr>
            <tr>
                <td>data 1</td>
                <td>data 2</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:pie.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <?php echo '<script'; ?>
>
        $('#table1').DataTable();
        $('#table2').DataTable();
    <?php echo '</script'; ?>
>
<?php }
}
