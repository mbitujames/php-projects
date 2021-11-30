<html>
	<body>
	  <?php 
        
        $num=0;
        for ($i=1; $i<=30; $i+2)
        {
        	$i=$i+$i;
        	$num=$num+$i;
        	echo $i."<br>";
         }
        echo $num;
	  ?>
	
	</body>
</html>