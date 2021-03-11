<html>
    <head>
        <title>triangles</title>
    </head>
    <body>
   
  <?php
  echo '<h1>Triangles </h1>';
        echo "<h2 style='color:orange'> First triangle</h2>";
     for ($row =0 ; $row<10; $row++)
 {
  for ($column=0; $column<$row; $column++)
 { echo' * ';
 }
 echo ' <br>';
  }
   echo ' <hr>';
  
    echo "<h2 style='color:red'> second triangle</h2>";
   
  for($in=10; $in>=1; $in--){   
      
for($jk=1; $jk<=$in; $jk++){  
    
echo ' * ';   

}   

echo '<br>';   

}   
   echo ' <hr>';
  
    echo "<h2 style='color:blue'> third triangle</h2>";
    
         
$l = 10;
  for($k=10; $k>=1; $k--){   
       for ($s = 1; $s <= $l - $k; $s++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
for($m=1; $m<=$k; $m++){  
    
echo "*&nbsp;";

}   

echo '<br>';   

}   
    
       echo ' <hr>';
  
    echo "<h2 style='color:green'> fourth triangle</h2>";


for ($row = 1; $row <= $l; $row++) {
    for ($s = 1; $s <= $l - $row; $s++) {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for ($column = 1; $column <= $row; $column++) {
       echo "*&nbsp;";
    }
    echo '<br>';
}

      echo ' <hr>';

  ?>
        
    
        
    </body>
</html>


