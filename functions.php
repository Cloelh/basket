<?php

	wp_enqueue_style( 'style', get_stylesheet_directory_uri()."/style.css");

	function carbon_widgets_init() {
	    register_sidebar( array(
	        'name'          => __( 'Blog Sidebar', 'carbon' ),
	        'id'            => 'sidebar-1',
	        'description'   => __( 'Add widgets for your blog here.', 'carbon' ),
	        'before_widget' => '<section id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</section>',
	        'before_title'  => '<h2 class="widget-title h5">',
	        'after_title'   => '</h2>',
	    ) );
	}
	
	add_action( 'widgets_init', 'carbon_widgets_init' );
	



	register_nav_menus(array('Top' => 'Navigation principale'));


	function install_db(){

	  	global $wpdb;

	 	$wpdb->query("CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."reponse_question (id int(11) AUTO_INCREMENT PRIMARY KEY, reponse tinyint(1), idUser int(11));");

	 	Satisfaction::install_db();

	}


	function shortcodeclassement(){
			$place=1;
		 global $wpdb;
		 $query = "SELECT * FROM equipe ORDER BY points DESC";
		 $resultats = $wpdb->get_results($query) ;
		 echo "<table>";
		 echo "<tr>
		 			<th> </th>
		 			<th>Equipes</th>
		 			<th>Points</th>
		 			<th>J</th>
		 			<th>V</th>
		 			<th>D</th>
		 			<th>M</th>
		 			<th>E</th>
		 			<th>Diff</th>
		 		</tr>";
		 foreach($resultats as $rep){
		 	$joué = $rep->victoire + $rep->defaite;
		 	$diffpt = $rep->ptPour + $rep->ptContre;

		 	echo "<tr>";
		 		echo "<td>".$place."</td>";
		 		echo "<td>".$rep->nom."</td>";
		 		echo "<td>".$rep->points."</td>";
		 		echo "<td>".$joué."</td>";
		 		echo "<td>".$rep->victoire."</td>";
		 		echo "<td>".$rep->defaite."</td>";
		 		echo "<td>".$rep->ptPour."</td>";
		 		echo "<td>".$rep->ptContre."</td>";
		 		echo "<td>".$diffpt."</td>";
		 	echo "</tr>";
		 	$place++;
		 }
		 echo "</table>";
	}

	

	function calendrier(){
		echo '<h2>Match à venir</h2>';
		global $wpdb;

		// rechercher journée actuel
		$journeeactuel=1;
		
		$nbmatch=0;

		while ($nbmatch==0) {
			$query = 'SELECT * FROM matchs WHERE journee='.$journeeactuel;
		 	$resultats = $wpdb->get_results($query) ;
			foreach ($resultats as $rep) {
				if ($rep->fait==0) {
					$nbmatch++;
				}
			}
			if ($nbmatch==0) {
				$journeeactuel++;
			}
		}


		$place=1;
		 
		 $query = "SELECT * FROM matchs WHERE journee=".$journeeactuel." ORDER BY date_time";
		 $resultats = $wpdb->get_results($query) ;
		 
		 echo "<h4>Journée ".$journeeactuel."</h4>";
		 echo "<table>";
		 echo "<tr>
		 			<th>Date/heure</th>
		 			<th>Domicile</th>
		 			<th>Visiteur</th>
		 			<th>Résultats</th>
		 		</tr>";
		 foreach($resultats as $rep){
		 	if ($rep->fait==0) {
		 			$dom = 'SELECT * FROM equipe WHERE id='.$rep->idEquipeDom;
				 	$EquipeDom = $wpdb->get_results($dom)[0]->nom;
				 	$ext = 'SELECT * FROM equipe WHERE id='.$rep->idEquipeExt;
				 	$EquipeExt = $wpdb->get_results($ext)[0]->nom;

		 		$resultatmatch="-";
		 		echo "<tr>";
			 		echo "<td>".$rep->date_time."</td>";
			 		echo "<td>".$EquipeDom."</td>";
			 		echo "<td>".$EquipeExt."</td>";
			 		echo "<td>".$resultatmatch."</td>";
			 	echo "</tr>";
		 	}
		 	
		 }
		 echo "</table>";
	}

	// calendrier choisit en fonction d'une journée
	function calendrierchoisit($arg){	
		echo '<h2>Match de la journée'.$arg.'</h2>';	
	 	global $wpdb;
		 $calchoisit = "SELECT * FROM matchs WHERE journee=".$arg." ORDER BY date_time";
		 $rescalchoisit = $wpdb->get_results($calchoisit) ;
		 
		 echo "<h4>Journée ".$arg."</h4>";
		 echo "<table>";
		 echo "<tr>
		 			<th>Date/heure</th>
		 			<th>Domicile</th>
		 			<th>Visiteur</th>
		 			<th>Résultats</th>
		 		</tr>";
		 foreach($rescalchoisit as $rep){
		 	
		 			$dom = 'SELECT * FROM equipe WHERE id='.$rep->idEquipeDom;
				 	$EquipeDom = $wpdb->get_results($dom)[0]->nom;
				 	$ext = 'SELECT * FROM equipe WHERE id='.$rep->idEquipeExt;
				 	$EquipeExt = $wpdb->get_results($ext)[0]->nom;

		 		$resultatmatch="-";
		 		echo "<tr>";
			 		echo "<td>".$rep->date_time."</td>";
			 		echo "<td>".$EquipeDom."</td>";
			 		echo "<td>".$EquipeExt."</td>";
			 		echo "<td>".$resultatmatch."</td>";
			 	echo "</tr>";
		 	
		 	
		 }
		 echo "</table>";


		 //commentaire
	}



	// shortcode pour calendrier
	function shortcodecalendrier() {

		echo '<form method="POST" action="">';
		echo '<select name="journee">';
				echo '<option>1</option>';
				echo '<option>2</option>';
				echo '<option>3</option>';
				echo '<option>4</option>';
				echo '<option>5</option>';
				echo '<option>6</option>';
				echo '<option>7</option>';
				echo '<option>8</option>';
				echo '<option>9</option>';
				echo '<option>10</option>';
				echo '<option>11</option>';
			echo '</select>';
				echo '<input type="submit" name="jouneechoisit">';
			echo '</form>';

			
				if (isset($_POST['jouneechoisit'])) {
					$journeechoisit=$_POST['journee'];
					calendrierchoisit($journeechoisit);
				}
				else {
					calendrier();
				};
	}
	add_shortcode('calendrier', 'shortcodecalendrier');
	add_shortcode('classement', 'shortcodeclassement');




/////////////////////////////////////////////////////////////////////////////////



	function paris(){

		echo "<h2>Parier sur les matchs des prochaines journées</h2>";
		global $wpdb;

		$journeeactuel=1;
		


		$place=1;
		 
		 $query = "SELECT * FROM matchs WHERE fait=0 ORDER BY date_time";
		 $resultats = $wpdb->get_results($query) ;
		 
		 echo "<table>";
		 echo "<tr>
		 			<th>Match</th>
		 			<th>1</th>
		 			<th>N</th>
		 			<th>2</th>
		 		</tr>";
		 foreach($resultats as $rep){
		 	if ($rep->fait==0) {
		 		$cote=mt_rand(52, 86)/10;
		 			$dom = 'SELECT * FROM equipe WHERE id='.$rep->idEquipeDom;
				 	$EquipeDom = $wpdb->get_results($dom)[0]->nom;
				 	$ext = 'SELECT * FROM equipe WHERE id='.$rep->idEquipeExt;
				 	$EquipeExt = $wpdb->get_results($ext)[0]->nom;

		 		$resultatmatch="-";
		 		echo "<tr>";
			 		echo "<td>".$EquipeDom."	-	".$EquipeExt."</td>";
			 		for ($i=0; $i < 3; $i++) { 
			 			echo "<td><button>".$cote."</button></td>";
			 		}
			 	echo "</tr>";
		 	}
		 	
		 }
		 echo "</table>";

	}



	function shortcodeactu(){
		$args = array(
			//'post_type'=>'post'
		   'category_name' => 'actu'
		);
		$wpdf_query = new WP_Query( $args );
		if ( $wpdf_query->have_posts() ) :
		  while ( $wpdf_query->have_posts() ) : $wpdf_query->the_post();
		    echo the_content();
		  endwhile;
		endif;
	}

	add_shortcode('actualites', 'shortcodeactu');


	function shortcodestat(){
			$place=1;
		 global $wpdb;
		 $query = "SELECT * FROM equipe ORDER BY points DESC";
		 $resultats = $wpdb->get_results($query) ;
		 echo "<table>";
		 echo "<tr>
		 			<th> </th>
		 			<th>Equipes</th>
		 			<th>Points</th>
		 			<th>J</th>
		 			<th>V</th>
		 			<th>D</th>
		 			<th>M</th>
		 			<th>E</th>
		 			<th>Diff</th>
		 		</tr>";
		 foreach($resultats as $rep){
		 	$joué = $rep->victoire + $rep->defaite;
		 	$diffpt = $rep->ptPour + $rep->ptContre;

		 	echo "<tr>";
		 		echo "<td>".$place."</td>";
		 		echo "<td>".$rep->nom."</td>";
		 		echo "<td>".$rep->points."</td>";
		 		echo "<td>".$joué."</td>";
		 		echo "<td>".$rep->victoire."</td>";
		 		echo "<td>".$rep->defaite."</td>";
		 		echo "<td>".$rep->ptPour."</td>";
		 		echo "<td>".$rep->ptContre."</td>";
		 		echo "<td>".$diffpt."</td>";
		 	echo "</tr>";
		 	$place++;
		 }
		 echo "</table>";
	}
