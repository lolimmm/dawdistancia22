<?php

/**
 * @author Loli
 * @version 1.0
 * En phpDocumentor la documentación se distribuye en bloques "DocBlock".
 */


/**
 * Este DocBlock documenta la Función suma()
 * Se pide dos parámetros de número entero con los que se va a efectuar una suma,
 * devuelve dato tipo float
 * @param int $num1
 * @param int $num2
 * @return float 
 */
function suma ($num1, $num2) {
    $resultadosuma = $num1 + $num2;
    return $resultadosuma;
}
$suma = suma (24,42);
echo $suma;



/**
 * Este DocBlock documenta la Función mostrarTexto()
 * Nos muestra el texto almacenado en la variable.
 * @param string $texto
 * {@internal Esta información solo es visible en la documentación para desarrolladores}
 */
function mostrarTexto($texto) {
    echo "<strong>El texto a mostrar es el siguiente: </strong>";
    echo $texto;
    }
    mostrarTexto("Este es la última tarea de DAW");

?>
