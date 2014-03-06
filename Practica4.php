<?php
    define("IVA",0.16);
  
    $leche=12.50;
    $huevo=6.19;
	$frijol=30.16;
    $carne=90.99;
	$pollo=20.23;
	$subtotal=$leche+$huevo+$frijol+$carne+$pollo;
    $iva=$subtotal*IVA;
    $total=$subtotal+$iva;
	
	?>
	
	<html>
	<body>
	<table  border="1">
	 <tr>
	  <td>leche</td>
	  <td><?php echo ("$".$leche); ?></td>
	 </tr>
	 <tr>
	  <td>huevo</td>
	  <td><?php echo ("$".$huevo); ?></td>
	 </tr>
	  <tr>
	   <td>frijol</td>
	  <td><?php echo ("$".$frijol); ?></td>
	 </tr>
	 <tr>
	  <td>carne</td>
	  <td><?php echo ("$".$carne); ?></td>
	 </tr>  
	  <td>pollo</td>
	  <td><?php echo ("$".$pollo); ?></td>
	 </tr>
	<tr>
	  <td>subtotal</td>
	  <td><?php echo ("$".$subtotal); ?></td>
	 </tr>
	 <tr>
	  <td>IVA</td>
	  <td><?php echo ("$".$iva); ?></td>
	 </tr>
	  <tr>
	  <td>total</td>
	  <td><?php echo ("$".$total); ?></td>
	 </tr>
	</table>
	</body>
    </html>