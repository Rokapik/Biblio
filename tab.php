<!DOCTYPE html>

<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="tab.css">
<head>
	<title>book</title>
</head>
    <body>
    	<div class="book">
    		<div class="library">
    <?php

$livre1 = array ('nom'=>'book1',
	             'prix'=>  9,
	             'note'=> 1,
	             'Dispo'=> true
                );

$livre2 = array ('nom'=>'book2',
	             'prix'=>  110,
	             'note'=> 9,
	             'Dispo'=> true
                );

$livre3 = array ('nom'=>'book3',
	            'prix'=>  2,
	            'note'=> 13,
	            'Dispo'=> false
                );

$livre4 = array ('nom'=>'book4',
	             'prix'=>  7,
	             'note'=> 1,
	             'Dispo'=> true
                );

$livre5 = array ('nom'=>'book5',
	             'prix'=>  15,
	             'note'=> 12,
	             'Dispo'=> true
                );

$livre6 = array ('nom'=>'book6',
	             'prix'=>  20,
	             'note'=> 14,
	             'Dispo'=> false
                );

$livre7 = array ('nom'=>'book7',
	             'prix'=>  9,
	             'note'=> 18,
	             'Dispo'=> true
                );

$livre8 = array ('nom'=>'book8',
	             'prix'=>  91,
	             'note'=> 17,
	             'Dispo'=> true
                );

$livre9 = array ('nom'=>'book9',
	             'prix'=>  78,
	             'note'=> 14,
	             'Dispo'=> true
                );

$livre10 = array ('nom'=>'book10',
	             'prix'=>  65,
	             'note'=> 17,
	             'Dispo'=> true
                );

$library = array ($livre1, $livre2, $livre3, $livre4, $livre5, $livre6, $livre7, $livre8, $livre9, $livre10,);

	foreach ($library as $livres ) {

		if ($livres ['Dispo']==true)
		 {
			echo '<ol><li>'.$livres ['nom']. '</li>

			<li>'.$livres ['prix'].'</li>

			<li>'.$livres ['note'].'</li>

			<li>'.$livres ['Dispo'].'</li></ol>';}
		
		else
		{
			echo '<ol><li>' .$livres ['nom'].'</li>

			<li>'.$livres ['prix'].'</li>

			<li>'.$livres ['note'].'</li>

			<li>'.'indisponnible'.'</li></ol>';}}
	

?>
</div>
</div>

   </body>
</html>