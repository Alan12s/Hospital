<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">
<link href="<?php echo base_url();?>css/Estilo.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/Tablas.css">
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/jquery.dataTables.js"></script>    
<title>Editar Insumo</title>
</head>
<body>
    <center>
        <table border="0" class="ventanas" width="650" cellspacing="0" cellpadding="0">
            <tr>
                <td class="tabla_ventanas_login" colspan="3">
                    <legend align="center">.: Editar Insumo :.</legend>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <form method="post" action="<?php echo site_url('insumos/edit/'.$insumo->ID); ?>" class="form-horizontal">
                        <center>
                            <table border="0">
                                <tr>
                                    <td><label for="nombre">Nombre:</label></td>
                                    <td>
                                        <input type="text" name="nombre" id="nombre" size="50" value="<?php echo $insumo->nombre; ?>" placeholder="Nombre del Insumo" required class="form-control">
                                    </td>
                                    <td><font color="red"><?php echo form_error('nombre'); ?></font></td>
                                </tr>
                                <tr>
                                    <td><label for="descripcion">Descripción:</label></td>
                                    <td>
                                        <textarea name="descripcion" id="descripcion" rows="3" cols="50" placeholder="Descripción del Insumo" required class="form-control"><?php echo $insumo->descripcion; ?></textarea>
                                    </td>
                                    <td><font color="red"><?php echo form_error('descripcion'); ?></font></td>
                                </tr>
                                <tr>
                                    <td><label for="cantidad">Cantidad:</label></td>
                                    <td>
                                        <input type="number" name="cantidad" id="cantidad" size="50" value="<?php echo $insumo->cantidad; ?>" placeholder="Cantidad" required class="form-control">
                                    </td>
                                    <td><font color="red"><?php echo form_error('cantidad'); ?></font></td>
                                </tr>
                                <tr>
                                    <td><label for="precio">Precio:</label></td>
                                    <td>
                                        <input type="text" name="precio" id="precio" size="50" value="<?php echo $insumo->precio; ?>" placeholder="Precio" required class="form-control">
                                    </td>
                                    <td><font color="red"><?php echo form_error('precio'); ?></font></td>
                                </tr>
                                <tr>
                                    <td><label for="fecha_ingreso">Fecha de Ingreso:</label></td>
                                    <td>
                                        <input type="date" name="fecha_ingreso" id="fecha_ingreso" size="50" value="<?php echo $insumo->fecha_ingreso; ?>" required class="form-control">
                                    </td>
                                    <td><font color="red"><?php echo form_error('fecha_ingreso'); ?></font></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><hr/></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <center>
                                            <button type="submit" class="btn btn-success">Guardar</button>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                        </center>
                    </form>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
