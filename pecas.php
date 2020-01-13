			<?php
			
			//PEÇA 1			
			if (isset($registro->infNFe->det[0]['nItem'])):
			if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO && $xml->NFe->infNFe->det[0]->prod->CFOP == $CFOP6108):			
			$registro->infNFe->det[0]['nItem'];
			foreach($registro->infNFe->det[0]->prod as $prod):
			foreach($registro->infNFe->det[0]->prod as $prod):
			foreach($registro->infNFe->det[0]->imposto->ICMSUFDest as $ICMSUFDest):
			$c1 = $ICMSUFDest->pICMSUFDest - $ICMSUFDest->pICMSInter;
			foreach($registro->infNFe->det[0]->imposto->ICMS->ICMS00 as $ICMS00):
			$c2 = 100;
			$c3 = $ICMS00->vBC;
			$r1 = ($c1 /$c2);
			$tp1 = round("$r1" * "$c3",2);
			endforeach;
			endforeach;
			endforeach;
			endforeach;
			
			elseif (isset($registro->infNFe->det[0]['nItem'])):
			elseif ($registro->infNFe->det[0]->prod->CFOP <> $CFOP6108):
			endif;
			endif;			

			//PEÇA 2		
			if (isset($registro->infNFe->det[1]['nItem'])):
			if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO && $xml->NFe->infNFe->det[1]->prod->CFOP == $CFOP6108):
			$registro->infNFe->det[1]['nItem'];
			foreach($registro->infNFe->det[1]->prod as $prod):
			foreach($registro->infNFe->det[1]->prod as $prod):
			foreach($registro->infNFe->det[1]->imposto->ICMSUFDest as $ICMSUFDest):
			$c1 = $ICMSUFDest->pICMSUFDest - $ICMSUFDest->pICMSInter;
			foreach($registro->infNFe->det[1]->imposto->ICMS->ICMS00 as $ICMS00):
			$c2 = 100;
			$c3 = $ICMS00->vBC;
			$r1 = ($c1 /$c2);
			$tp2 = round("$r1" * "$c3",2);
			endforeach;
			endforeach;
			endforeach;
			endforeach;
			
			elseif (isset($registro->infNFe->det[1]['nItem'])):
			elseif ($registro->infNFe->det[1]->prod->CFOP == $CFOP6656):
			endif;
			endif;
				
			//PEÇA 3
			if (isset($registro->infNFe->det[2]['nItem'])):
			if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO && $xml->NFe->infNFe->det[2]->prod->CFOP == $CFOP6108):
			$registro->infNFe->det[2]['nItem'];
			foreach($registro->infNFe->det[2]->prod as $prod):
			foreach($registro->infNFe->det[2]->prod as $prod):		
			foreach($registro->infNFe->det[2]->imposto->ICMSUFDest as $ICMSUFDest):
			$c1 = $ICMSUFDest->pICMSUFDest - $ICMSUFDest->pICMSInter;
			foreach($registro->infNFe->det[2]->imposto->ICMS->ICMS00 as $ICMS00):
			$c2 = 100;
			$c3 = $ICMS00->vBC;
			$r1 = ($c1 /$c2);
			$tp3 = round("$r1" * "$c3",2);
			endforeach;
			endforeach;
			endforeach;
			endforeach;
			
			elseif (isset($registro->infNFe->det[2]['nItem'])):
			elseif ($registro->infNFe->det[2]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			//PEÇA 4
			if (isset($registro->infNFe->det[3]['nItem'])):
			if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO && $xml->NFe->infNFe->det[3]->prod->CFOP == $CFOP6108):		
			$registro->infNFe->det[3]['nItem'];
			foreach($registro->infNFe->det[3]->prod as $prod):
			foreach($registro->infNFe->det[3]->prod as $prod):
			foreach($registro->infNFe->det[3]->imposto->ICMSUFDest as $ICMSUFDest):
			$c1 = $ICMSUFDest->pICMSUFDest - $ICMSUFDest->pICMSInter;
			foreach($registro->infNFe->det[3]->imposto->ICMS->ICMS00 as $ICMS00):
			$c2 = 100;
			$c3 = $ICMS00->vBC;
			$r1 = ($c1 /$c2);
			$tp4 = round("$r1" * "$c3",2);
			endforeach;
			endforeach;
			endforeach;
			endforeach;
			
			elseif (isset($registro->infNFe->det[3]['nItem'])):
			elseif ($registro->infNFe->det[3]->prod->CFOP == $CFOP6656):
			endif;
			endif;

			//PEÇA 5
			if (isset($registro->infNFe->det[4]['nItem'])):
			if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO && $xml->NFe->infNFe->det[4]->prod->CFOP == $CFOP6108):	
			$registro->infNFe->det[4]['nItem'];
			foreach($registro->infNFe->det[4]->prod as $prod):
			foreach($registro->infNFe->det[4]->prod as $prod):
			foreach($registro->infNFe->det[4]->imposto->ICMSUFDest as $ICMSUFDest):
			$c1 = $ICMSUFDest->pICMSUFDest - $ICMSUFDest->pICMSInter;
			foreach($registro->infNFe->det[4]->imposto->ICMS->ICMS00 as $ICMS00):
			$c2 = 100;
			$c3 = $ICMS00->vBC;
			$r1 = ($c1 /$c2);
			$tp5 = round("$r1" * "$c3",2);
			endforeach;
			endforeach;
			endforeach;
			endforeach;
			
			elseif (isset($registro->infNFe->det[4]['nItem'])):
			elseif ($registro->infNFe->det[4]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			//PEÇA 6
			if (isset($registro->infNFe->det[5]['nItem'])): 
			if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO && $xml->NFe->infNFe->det[5]->prod->CFOP == $CFOP6108):		
			$registro->infNFe->det[5]['nItem'];
			foreach($registro->infNFe->det[5]->prod as $prod):
			foreach($registro->infNFe->det[5]->prod as $prod):
			foreach($registro->infNFe->det[5]->imposto->ICMSUFDest as $ICMSUFDest):
			$c1 = $ICMSUFDest->pICMSUFDest - $ICMSUFDest->pICMSInter;
			foreach($registro->infNFe->det[5]->imposto->ICMS->ICMS00 as $ICMS00):
			$c2 = 100;
			$c3 = $ICMS00->vBC;
			$r1 = ($c1 /$c2);
			$tp6 = round("$r1" * "$c3",2);
			endforeach;
			endforeach;
			endforeach;
			endforeach;
			
			elseif (isset($registro->infNFe->det[5]['nItem'])):
			elseif ($registro->infNFe->det[5]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			//PEÇA 7
			if (isset($registro->infNFe->det[6]['nItem'])): 
			if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO && $xml->NFe->infNFe->det[6]->prod->CFOP == $CFOP6108):		
			$registro->infNFe->det[6]['nItem'];
			foreach($registro->infNFe->det[6]->prod as $prod):
			foreach($registro->infNFe->det[6]->prod as $prod):
			foreach($registro->infNFe->det[6]->imposto->ICMSUFDest as $ICMSUFDest):
			$c1 = $ICMSUFDest->pICMSUFDest - $ICMSUFDest->pICMSInter;
			foreach($registro->infNFe->det[6]->imposto->ICMS->ICMS00 as $ICMS00):
			$c2 = 100;
			$c3 = $ICMS00->vBC;
			$r1 = ($c1 /$c2);
			$tp7 = round("$r1" * "$c3",2);
			endforeach;
			endforeach;
			endforeach;
			endforeach;
			
			elseif (isset($registro->infNFe->det[6]['nItem'])):
			elseif ($registro->infNFe->det[6]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			//PEÇA 8
			if (isset($registro->infNFe->det[7]['nItem'])): 
			if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO && $xml->NFe->infNFe->det[7]->prod->CFOP == $CFOP6108):	
			$registro->infNFe->det[7]['nItem'];
			foreach($registro->infNFe->det[7]->prod as $prod):
			foreach($registro->infNFe->det[7]->prod as $prod):
			foreach($registro->infNFe->det[7]->imposto->ICMSUFDest as $ICMSUFDest):
			$c1 = $ICMSUFDest->pICMSUFDest - $ICMSUFDest->pICMSInter;
			foreach($registro->infNFe->det[7]->imposto->ICMS->ICMS00 as $ICMS00):
			$c2 = 100;
			$c3 = $ICMS00->vBC;
			$r1 = ($c1 /$c2);
			$tp8 = round("$r1" * "$c3",2);
			endforeach;
			endforeach;
			endforeach;
			endforeach;
			
			elseif (isset($registro->infNFe->det[7]['nItem'])):
			elseif ($registro->infNFe->det[7]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			//PEÇA 9
			if (isset($registro->infNFe->det[8]['nItem'])): 
			if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO && $xml->NFe->infNFe->det[8]->prod->CFOP == $CFOP6108):		
			$registro->infNFe->det[8]['nItem'];
			foreach($registro->infNFe->det[8]->prod as $prod):
			foreach($registro->infNFe->det[8]->prod as $prod):
			foreach($registro->infNFe->det[8]->imposto->ICMSUFDest as $ICMSUFDest):
			$c1 = $ICMSUFDest->pICMSUFDest - $ICMSUFDest->pICMSInter;
			foreach($registro->infNFe->det[8]->imposto->ICMS->ICMS00 as $ICMS00):
			$c2 = 100;
			$c3 = $ICMS00->vBC;
			$r1 = ($c1 /$c2);
			$tp9 = round("$r1" * "$c3",2);
			endforeach;
			endforeach;
			endforeach;
			endforeach;
			
			elseif (isset($registro->infNFe->det[8]['nItem'])):
			elseif ($registro->infNFe->det[8]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			//PEÇA 10
			if (isset($registro->infNFe->det[9]['nItem'])): 
			if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO && $xml->NFe->infNFe->det[9]->prod->CFOP == $CFOP6108):			
			$registro->infNFe->det[9]['nItem'];
			foreach($registro->infNFe->det[9]->prod as $prod):
			foreach($registro->infNFe->det[9]->prod as $prod):
			foreach($registro->infNFe->det[9]->imposto->ICMSUFDest as $ICMSUFDest):
			$c1 = $ICMSUFDest->pICMSUFDest - $ICMSUFDest->pICMSInter;
			foreach($registro->infNFe->det[9]->imposto->ICMS->ICMS00 as $ICMS00):
			$c2 = 100;
			$c3 = $ICMS00->vBC;
			$r1 = ($c1 /$c2);
			$tp10 = round("$r1" * "$c3",2);
			endforeach;
			endforeach;
			endforeach;
			endforeach;
			
			elseif (isset($registro->infNFe->det[9]['nItem'])):
			elseif ($registro->infNFe->det[9]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			//PEÇA 11
			if (isset($registro->infNFe->det[10]['nItem'])): 
			if ($xml->NFe->infNFe->dest->enderDest->UF == $UFGO && $xml->NFe->infNFe->det[10]->prod->CFOP == $CFOP6108):
			$registro->infNFe->det[10]['nItem'];
			foreach($registro->infNFe->det[10]->prod as $prod):
			foreach($registro->infNFe->det[10]->prod as $prod):
			foreach($registro->infNFe->det[10]->imposto->ICMSUFDest as $ICMSUFDest):
			$c1 = $ICMSUFDest->pICMSUFDest - $ICMSUFDest->pICMSInter;
			foreach($registro->infNFe->det[10]->imposto->ICMS->ICMS00 as $ICMS00):
			$c2 = 100;
			$c3 = $ICMS00->vBC;
			$r1 = ($c1 /$c2);
			$tp11 = round("$r1" * "$c3",2);

			endforeach;
			endforeach;
			endforeach;
			endforeach;
			
			elseif (isset($registro->infNFe->det[10]['nItem'])):
			elseif ($registro->infNFe->det[10]->prod->CFOP == $CFOP6656):
			endif;
			endif;
			
			
		
		
			
			?>