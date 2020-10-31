<?php
include 'head.php';
// si he pulsado el boton calcular
if (isset($_REQUEST['btn_calcular']))
{
    
    $actividad= $_REQUEST['cmb_actividad'];
    $radio_peso = $_REQUEST['rb_tipo_peso'];
    $peso = $_REQUEST['peso'];
    $altura = $_REQUEST['altura'];
    $radio_edad = $_REQUEST['edad'];
    $radio_sexo = $_REQUEST ['rb_sexo'];
    $TBM = 0;
  

    if ($radio_peso == 0)
    {
        $conversion = $peso / 2.20;
    }else{
        $conversion = $peso;
    }

    if ($TBM == 0)
    // Calculamos El hombre
    {
        $TBM * 66 + (9.6 * $peso) + (1.8 * $altura) - (4.7 * $radio_edad);
    }
    // Calculamos La mujer
    else{
        $TMB * 655 + (13.7 * $peso) + (5 * $altura) - (6.8 * $radio_edad);
    }

   echo 'El resultado del calculo es : ' .$TMB;

}
echo'  

     <div class="postcontent">
      <h2>Calculadora Harris-Benedict   </h2>
              <form action="" method="post">              
                    <p>
                    <form>
                        <table align="center" border="2">

                            <tr>
                                <td align="right">Nivel de Actividad:</td>  
                                <td colspan=2>
                                    <select name="cmb_actividad">
                                    <option value="1,2">Sedentario</option>
                                    <option value="1,375">Actividad Ligera</option>
                                    <option value="1,55">Actividad Moderada</option>
                                    <option value="1,725">Actividad Intensa</option>
                                    <option value="1,9">Actividad Muy Intensa</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="right"><label for="txt_peso">Peso : </label></td>
                                <td>
                                
                                    <input type="text"   id="txt_peso" name="peso" size="7" /> 
                                </td>
                            </tr>
                            <tr>
                                <td ></td>
                                <td>
                                    <input type="radio"  name="rb_tipo_peso"  checked="checked" value="0"/>Kilos	
                                    <input type="radio"  name="rb_tipo_peso"  value="1"/>Libras
                                    </td>
                             </tr>  
                            <tr>
                               <td align="right"><label for="txt_altura">Altura ( en cm )</label></td>
                               <td>
                                 <input type="text"   id="txt_altura" name="altura" size="7" /> cm
                               </td>
                            </tr>
                            <tr>
                            <td align="right"><label for="txt_edad">Edad ( en años )</label></td>
                            <td>
                            
                                <input type="text"   id="txt_edad" name="edad" size="7" /> Años
                            </td>
                        </tr>
                            <tr>
                                <td align="right">Sexo :</td>
                                <td>
                                    <input type="radio"  name="rb_sexo"  checked="checked" value="66"/>Hombre	
                                    <input type="radio"  name="rb_sexo"  value="655"/>Mujer
                                    </td>
                             </tr>  
                            
                            
                            <tr>
                                <td colspan="2">
                                    <div align="center"><strong>
                                           
                                            <input name="btn_calcular" type="submit" id="btn_calcular" value="Calcular"/>
                                        </strong>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br>
                    <label for="txt_calorias">Las calorias recomendadas diarias son :</label>
                        	
                        <input type="text" id="txt_calorias" name="TBM" size="5" /> calorias

                    



                </div>


                <div style="clear: both;"></div>
            </div>
        </div>
       
';

include 'pie.php';

