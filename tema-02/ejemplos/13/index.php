<?php

    /**
     * Conversiones de tipos
     */

     $var = 3;
     var_dump($var);

     // Conversiones mediante funciones
     // strval
     $var1 = strval($var);
     echo "<BR>";   
     var_dump($var1);

     // intval
     $var2 = intval($var1);
     echo "<BR>";   
     var_dump($var2);

     // floatval
     $var3 = is_float($var);
     echo "<BR>";   
     var_dump($var3);

     # Conversión (tipo dato) variable
     $var4 = 7.89;
     $var4 = (int) $var4;
     echo "<BR>";
     var_dump($var4);

     $var5=89;
     $var5=(float) $var5;
     echo "<BR>";
     var_dump($var5);

     $var6 = 89;
     $var6 = (string) $var6;
     echo "<BR>";
     var_dump($var6);

     $var7 = 100;
     $var7 = (array) $var7;
     echo "<BR>";
     var_dump($var7);

     // Conversiones
     $var8 = 45;
     settype($var8, "string");
     echo "<BR>";
     var_dump($var8);

     
     $var9 = 40 + "2 razones";
     echo "<BR>";
     var_dump($var9);

     $var10 =  4 + 3.14159;
     echo "<BR>";
     var_dump($var10);
