<?
	/*
	*	Fichero: frases-celebres.php
	*	Versión: 20070424
	*	Autor: David Vargas Ruiz
	*	Descripción: Contiene un listado de frases célebres
	*/

	function echoFraseCelebre() {
		echo getFraseCelebre();
		return true;
	}
	
	function getFraseCelebre() {
		//
		//[Código] = frase, autor
		//
		$frase_celebre[1] = array('Manda el que puede y obedece el que quiere.','Alessandro Manzoni (1785-1873)',
		'poeta, dramaturgo y novelista italiano');
		$frase_celebre[2] = array('Es curioso, pero solamente cuando ves a las personas hacer el rid&iacute;culo, te das cuenta de lo mucho que las quieres.',
		'Agatha Christie (1891-1976)','escritora inglesa');
		$frase_celebre[3] = array('Caminante no hay camino, se hace camino al andar.',
		'Antonio Machado (1875-1939)','poeta español \"Generación del 98\"');
		$frase_celebre[4] = array('Mejor es prevenir que curar.',
		'Erasmo de R&oacute;tterdam (1466-1536)','humanista holand&eacute;s');
		$frase_celebre[5] = array('Hablar mucho de s&iacute; mismo puede ser un medio de esconderse.',
		'Friedrich Nietzsche (1844-1900)','fil&oacute;sofo alem&aacute;n');
		$frase_celebre[6] = array('El matrimonio es al amor lo que el vinagre al vino. El tiempo hace que pierda su primer sabor.',
		'George Gordon Byron, "Lord Byron" (1788-1824)','poeta ingl&eacute;s');
		$frase_celebre[7] = array('En tanto que haya alguien que crea en una idea, la idea vive.',
		'Jos&eacute; Ortega y Gasset (1883-1955)','fil&oacute;sofo y ensayista espa&#241;ol');
		$frase_celebre[8] = array('Ning&uacute;n descubrimiento se har&iacute;a ya si nos content&aacute;semos con los que sabemos.',
		'Lucio Annaeo S&eacute;neca (5 a.C.-65 d.C.)','fil&oacute;sofo latino');
		$frase_celebre[9] = array('Cuando los elefantes luchan, la hierba es la que sufre.',
		'Proverbio africano','');
		$frase_celebre[10] = array('Un peligro previsto est&aacute; medio abolido.',
		'William Shakespeare (1564-1616)','poeta y dramaturgo ingl&eacute;s');
		$frase_celebre[11] = array('Toda el agua de los r&iacute;os no ser&iacute;a suficiente para lavar la mano ensangrentada de un homicida.',
		'Esquilo (525-456 A.C.)','dramaturgo griego');
		$frase_celebre[12] = array('El aburrimiento es una mala hierba, pero tambi&eacute;n una especia que hace digerir muchas otras.',
		'Johann Wolfgang von Goethe (1749-1832)','poeta, novelista y dramaturgo alem&aacute;n');
		$frase_celebre[13] = array('Lo &uacute;ltimo que uno sabe es por donde empezar.',
		'Blaise Pascal (1623-1662)','cient&iacute;fico, fil&oacute;sofo y escritor franc&eacute;s');
		
		$i = rand(1,13);
		return '<i>"'.$frase_celebre[$i][0].'"</i><br>'.$frase_celebre[$i][1];
	}
?> 
