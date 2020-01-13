				<?php
				
				$sqlInto = "INSERT INTO xmlcriado(num,ser,cha) VALUES (:num,:ser,:cha)";
				
				try{
				$into= $db->prepare($sqlInto);
				$into->bindValue(":num",$num,PDO::PARAM_STR);
				$into->bindValue(":ser",$ser,PDO::PARAM_STR);
				$into->bindValue(":cha",$cha,PDO::PARAM_STR);
				if($into->execute()){
					echo 'OK';
				}else{
					echo 'ERRO';
				}
					
			}catch(PDOException $e){
				
				echo $e->getMessage();
			}	
				?>
		