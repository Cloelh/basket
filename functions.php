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


	function classement(){
			$place=1;
		 global $wpdb;
		 $query = "SELECT * FROM equipe ORDER BY points DESC";
		 $resultats = $wpdb->get_results($query) ;
		 echo "<table>";
		 echo "<tr>
		 			<th> </th>
		 			<th>Equipes</th>
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

	function calandrier(){

		// rechercher journée actuel
		for ($i=1; $i < 14; $i++) { 
		 	
		}

			$place=1;
		 global $wpdb;
		 $query = 'SELECT * FROM matchs ORDER BY date_time';
		 $resultats = $wpdb->get_results($query) ;
		 
		 echo "<h4>Journée 10</h4>";
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


	
  ?>