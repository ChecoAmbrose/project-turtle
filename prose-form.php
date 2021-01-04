<?php


   $fecha=date("d-m-Y");
   $hora=date("H:i:s");
   $to ="info@metrologiaprofesional.com";
   $headers = "Content-type: text/html; charset= UTF-8 \r\n";
   $headers .= "From:".$_POST["Nombre"]."\r\n";          
   $headers .= "X-Mailer:PHP/".phpversion()."\n"; 
   $headers .= "Mime-Version: 1.0\n";  
   $tema="Contacto desde el Sitio Web";
   $mensaje = "
                       <table border='0' cellspacing='2' cellpadding='2'>

                          <tr>
                            <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
                            <td width='80%' align='left'>".$_POST["Nombre"]."</td>
                          </tr>
                          
                          <tr>
                          <td align='center' bgcolor='#FFFFCC'><strong>Telefono:</strong></td>
                          <td align='left'>".$_POST["Telefono"]."</td>
                        </tr>

                        <tr>
                        <td align='center' bgcolor='#FFFFCC'><strong>Correo:</strong></td>
                        <td align='left'>".$_POST["Correo"]."</td>
                        </tr>

                          <tr>
                            <td align='center' bgcolor='#FFFFCC'><strong>Empresa:</strong></td>
                            <td align='left'>".$_POST["Empresa"]."</td>
                          </tr>

                            <tr>
                            <td align='center' bgcolor='#FFFFCC'><strong>Comentarios:</strong></td>
                            <td align='left'>".$_POST["Comentarios"]."</td>
                          </tr>

                            <tr>
                            <td align='center' bgcolor='#FFFFCC'><strong>Instrumento:</strong></td>
                            <td align='left'>".$_POST["Instrumento"]."</td>
                          </tr>

                            <tr>
                            <td align='center' bgcolor='#FFFFCC'><strong>Descripcion del servicio:</strong></td>
                            <td align='left'>".$_POST["Descripcion"]."</td>
                          </tr>

                        </table>
                        Enviado: $fecha a las $hora\n\n"; 
          
    mail ($to, $tema, $mensaje, $headers);
    echo "<script>alert('Correo Enviado.')</script>";
    echo "<script> setTimeout(\location.href='index.html'\",1000</script>";
  
?>
