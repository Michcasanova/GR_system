<style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
.midnight-blue{
	background:#CAFFCF;
	padding: 4px 4px 4px;
	color:#7AB7E4;
	font-weight:bold;
	font-size:12px;
}
.silver{
	background:white;
	padding: 3px 4px 3px;
}
.clouds{
	background:#7AB7E4;
	padding: 3px 4px 3px;
}
.border-top{
	border-top: solid 1px #7AB7E4;
	
}
.border-left{
	border-left: solid 1px #7AB7E4;
}
.border-right{
	border-right: solid 1px #7AB7E4;
}
.border-bottom{
	border-bottom: solid 1px #7AB7E4;
}
table.page_footer {width: 100%; border: none; background-color: white; padding: 2mm;border-collapse:collapse; border: none;}
}
-->
</style>
<page backtop="15mm" backbottom="15mm" backleft="15mm" backright="15mm" style="font-size: 12pt; font-family: arial" >
        <page_footer>
            
                <table cellspacing="0" style="width: 100%;">
        <tr>

            <td style="width: 10%; color: #444444;">
             
                
            </td>
            
			<td style="width: 80%; color: #61B809;font-size:10px;text-align:center">
             
				<br>   <span style="color: #61B809;font-size:16px;font-weight:bold">CERTIFICADO DE CARGA DEL CONTENEDOR</span><br> 
			
            </td>
<td style="width: 10%;text-align:right">
		
			</td>
			
        </tr>
    </table>
            
            
            
            
             <table cellspacing="0" style="width: 100%;">
        <tr>

            <td style="width: 10%; color: #444444;">
             
                
            </td>
            
			<td style="width: 80%; color: #61B809;font-size:9px;text-align:JUSTIFY">
             
				<br>DECLARO QUE LAS MERCANCIAS DESCRITAS ARRIBA HAN SIDO CARGADAS EN EL CONTENEDOR CON LA REGLAMENTACIÓN PARA EL TRANSPORTE TERRESTRE DE MATERIALES Y RESIDUOS PELIGROSOS ASI COMO LA REGULACIÓN INTERNACIONAL.<br> 
			
            </td>
			<td style="width: 10%;text-align:right">
		
			</td>
			
        </tr>
    </table>
        <table class="page_footer">
            <tr>

                <td style="width: 50%; text-align: center">
             
                </td>
                <td style="width: 50%; color: #61B809;text-align: right">
                    FIRMA ______________________________.
                </td>
            </tr>
        </table>
    </page_footer>
                    <table cellspacing="0" style="width: 100%;">
        <tr>

            <td style="width: 10%; color: #444444;">
             
                
            </td>
            
			<td style="width: 60%; color: #61B809;font-size:10px;text-align:center">
             
				<br>   <span style="color: #61B809;font-size:16px;font-weight:bold"></span><br> 
			
            </td>
<td style="width: 30%;text-align:right">
			<br>   <span style="color: #61B809;font-size:7px;font-weight:bold">CARTA PORTE/DOCUMENTO DE EMBARQUE</span><br> 
			</td>
			
        </tr>
    </table>

    <table cellspacing="0" style="width: 100%;">
        <tr>

            <td style="width: 25%; color: #444444;">
                <img style="width: 100%;" src="../../img/logo.jpg" alt="Logo"><br>
                
            </td>
			<td style="width: 50%; color: #61B809;font-size:10px;text-align:center">
                <span style="color: #61B809;font-size:16px;font-weight:bold"><?php echo NOMBRE_EMPRESA;?></span>
				<br><?php echo DIRECCION_EMPRESA;?><br> 
				Teléfono: <?php echo TELEFONO_EMPRESA;?><br>
				Email: <?php echo EMAIL_EMPRESA;?>
                
            </td>
           
			<td style="color: #EF0303; width: 25%;text-align:right">
			Nº <?php echo $numero_factura;?>
			</td>
			
        </tr>
    </table>
    <br>
    
<table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
        <tr>
           <td style="width:35%;" class='midnight-blue'>LUGAR DE EXPEDICION: <?php echo DIRECCION_EMPRESA;?> </td>
		  <td style="width:25%;" class='midnight-blue'></td>
		   <td style="width:40%;" class='midnight-blue'>FECHA DE EXPEDICION: <?php echo date("d/m/Y", strtotime($fecha_factura));?> </td>
        </tr>
		<tr>
           <td style="width:35%;">
			<?php 
				$sql_user=mysqli_query($con,"select * from users where user_id='$id_vendedor'");
				$rw_user=mysqli_fetch_array($sql_user);
				
			?>
		   </td>
		  <td style="width:25%;"></td>
		   <td style="width:40%;" >
				
		   </td>
        </tr>
		
        
   
    </table>
	<br>
	
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
        <tr>
           <td style="width:50%;" class='midnight-blue'>ORIGEN</td>
        </tr>
		<tr>
           <td style="width:50%;" >
			<?php 
				$sql_cliente=mysqli_query($con,"select * from clientes where id_cliente='$id_cliente'");
				$rw_cliente=mysqli_fetch_array($sql_cliente);
				echo $rw_cliente['nombre_cliente'];
				echo "<br>";
				echo $rw_cliente['direccion_cliente'];
				echo "<br> Teléfono: ";
				echo $rw_cliente['telefono_cliente'];
				echo "<br> Email: ";
				echo $rw_cliente['email_cliente'];
               echo "<br> RFC: ";
				echo $rw_cliente['rfc'];
			?>
			
		   </td>
        </tr>
        
   
    </table>
    
    

    

       <br>
		
  
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
        <tr>
            <th style="width: 10%;text-align:center" class='midnight-blue'>CANT.</th>
            <th style="width: 60%" class='midnight-blue'>DESCRIPCION</th>
            <th style="width: 15%;text-align: right" class='midnight-blue'></th>
            <th style="width: 15%;text-align: right" class='midnight-blue'></th>
            
        </tr>

<?php
$nums=1;
$sumador_total=0;
$sql=mysqli_query($con, "select * from products, detalle_factura, facturas where products.id_producto=detalle_factura.id_producto and detalle_factura.numero_factura=facturas.numero_factura and facturas.id_factura='".$id_factura."'");

while ($row=mysqli_fetch_array($sql))
	{
	$id_producto=$row["id_producto"];
	$codigo_producto=$row['codigo_producto'];
	$cantidad=$row['cantidad'];
	$nombre_producto=$row['nombre_producto'];
	
	$precio_venta=$row['precio_venta'];
	$precio_venta_f=number_format($precio_venta,2);//Formateo variables
	$precio_venta_r=str_replace(",","",$precio_venta_f);//Reemplazo las comas
	$precio_total=$precio_venta_r*$cantidad;
	$precio_total_f=number_format($precio_total,2);//Precio total formateado
	$precio_total_r=str_replace(",","",$precio_total_f);//Reemplazo las comas
	$sumador_total+=$precio_total_r;//Sumador
	if ($nums%2==0){
		$clase="clouds";
	} else {
		$clase="silver";
	}
	?>

        <tr>
            <td class='<?php echo $clase;?>' style="width: 10%; text-align: center"><?php echo $cantidad; ?></td>
            <td class='<?php echo $clase;?>' style="width: 60%; text-align: left"><?php echo $nombre_producto;?></td>
            <td class='<?php echo $clase;?>' style="width: 15%; text-align: right"></td>
            <td class='<?php echo $clase;?>' style="width: 15%; text-align: right"></td>
            
        </tr>

	<?php 

	
	$nums++;
	}
	$subtotal=number_format($sumador_total,2,'.','');
	$total_iva=($subtotal * TAX )/100;
	$total_iva=number_format($total_iva,2,'.','');
	$total_factura=$subtotal+$total_iva;
?>
	  
        <tr>
            <td colspan="3" style="widtd: 85%; text-align: right;"> </td>
            <td style="widtd: 15%; text-align: right;"></td>
        </tr>
		<tr>
            <td colspan="3" style="widtd: 85%; text-align: right;"> </td>
            <td style="widtd: 15%; text-align: right;"> </td>
        </tr><tr>
            <td colspan="3" style="widtd: 85%; text-align: right;"> </td>
            <td style="widtd: 15%; text-align: right;"> </td>
        </tr>
    </table>
	
	
	
	<br>
	
	
	
	  

</page>

