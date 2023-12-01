
<?php

$numerosPares  = array();
for ($i = 0; $i < 10; $i++) {
    $numerosPares[] = $i * 2;
}
foreach ($numerosPares as $numero) {
    echo $numero . "\n";
}

//ejercio b
$array = array("Pedro", "Ana", 34, 1);
print_r($array);

// ejercio c
$arrayAsociativo = array(
    "Nombre" => "Pedro",
    "Apellido" => "Torres",
    "Dirección" => "Av. Mayo 3703",
    "Teléfono" => "1122334455"
);
foreach ($arrayAsociativo as $clave => $valor) {
    echo "$clave: $valor\n";
}


#aca voy a explicar o lo que interpreto que es que en el ejercio A: comenzamos con delarar la lista en la cual es una array y se llama
#numerosPares despues abajo habro un ciclo de repeticion en la cual es un for con la ide que se repita 10 veces dentro de del ciclo colocamos la varible
#que se llama numerosPare[] para que vaya tomando los datos en cada vuelta,los datos, i comienza en cero y va ser nuestro contador hasta que llegue a 10
#el i va ser que sea el indicador para multiplicar y se va a multiplicar siempre por 2,como resulrado:0*2,1*2,2*2,ect

#ejercio b: en este ejercio es bastante parecido a un diccionario de python que tiene clave y valor de manera que si lo le agregamos un valor hablando en php  
#solo mostrara el indice del array tambien se le puede agregar el valor de manera que se puede mostrar por pantalla si es el indice o el valor que le agraguemos

#ejercio c: es lo mismo que explique en el ejercio b pero aca se le agrega un valor como "nombre => pedro "






?>