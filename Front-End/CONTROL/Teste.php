<?php
	$fileDestination = "../CURRICULOS/" . $_FILES['arquivo']['name'];			
	if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $fileDestination)) {
            
  
  echo '<script type="text/javascript">
           alert("Curriculos enviado com sucesso!");
         window.history.go(-2);
      </script>';
                
	} else {
		  
  echo '<script type="text/javascript">
           alert("Ops! Houve um erro no upload, tente fazer o envio novamente !");
         window.history.go(-1);
      </script>';
  
		print_r(error_get_last());
	}
?>  