<?php 
if(isset($_GET["gonder"]))
{
	
	if($_GET["alan"] == "dikdortgen")
	{
		

		echo (" <form method='GET' action='dikdortgen.php'>
		1.kenari giriniz: <input type='text' name='sayi1' id='sayi1' /><br /> 
		2.kenari giriniz: <input type='text' name='sayi2' id='sayi2' /><br /> 
		<input type='submit' name='hesap'/>
		</form> ");
		
        
	}
	else if($_GET["alan"] == "kare")
	{
		

		echo (" <form method='GET' action='kare.php'>
		1.kenari giriniz: <input type='text' name='sayi1' id='sayi1' /><br /> 
		
		<input type='submit' name='hesap'/>
		</form> ");
		
        

	}
	else if($_GET["alan"] == "ucgen")
	{
		

		echo (" <form method='GET' action='ucgen.php'>
		Taban uzunluğunu giriniz: <input type='text' name='sayi1' id='sayi1' /><br /> 
		Yukseklik degerini giriniz:  <input type='text' name='yukseklik' id='yukseklik' /><br /> 
		<input type='submit' name='hesap'/>
		</form> ");
		
        

	}
	else if($_GET["alan"] == "daire")
	{
		

		echo (" <form method='GET' action='daire.php'>
		Yaricap degerini giriniz: <input type='text' name='sayi1' id='sayi1' /><br /> 
		<input type='submit' name='hesap'/>
		</form> ");
		
        

	}

	
}

?>