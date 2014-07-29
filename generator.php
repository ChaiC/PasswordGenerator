<?php

# Read the word list
$wordList =  file('wordlist.txt');

# Generate random words
		
	if (array_key_exists("isNumber", $_POST)){
		$isNumber = (int)$_POST["isNumber"];
	} else{
		$isNumber = 0;
	}
	
	if (array_key_exists("isCaps", $_POST)){
		$isCaps = (int)$_POST["isCaps"];
	}else{
		$isCaps = 0;
	}
	
	if (array_key_exists("isSpecial", $_POST)){
		$isSpecial = (int)$_POST["isSpecial"];
	}else{
		$isSpecial = 0;
	}

	if (array_key_exists("numberWords", $_POST)){
		$numWords = (int)$_POST["numberWords"];	
	
		# Generate random words
		$wordsIdx = array_rand($wordList,$numWords);
	
		$words = '';
		
		foreach ($wordsIdx as $value){
			if($isSpecial == 1){
				$word = $wordList[$value];
				
				$pos_a = strpos($word,'a');				
				if($pos_a){
					$word[$pos_a] = '@';
					$wordList[$value] = $word;
				}
				
				$pos_s = strpos($word,'s');
				if($pos_s){
					$word[$pos_s] = '$';
					$wordList[$value] = $word;
				}
			}
			
			if($isNumber == 1){
				$word = $wordList[$value];
				
				$pos_l = strpos($word,'l');				
				if($pos_l){
					$word[$pos_l] = '1';
					$wordList[$value] = $word;
				}
				
				$pos_e = strpos($word,'e');
								if($pos_e){
					$word[$pos_e] = '3';
					$wordList[$value] = $word;
				}
			}

			if($isCaps == 1){
				$wordList[$value] = ucfirst($wordList[$value]);
			}			
				
			$words = $words.$wordList[$value];				
		}
		$pwd = $words;
		$pwd = preg_replace('/\s+/','',$pwd);					
	}
			