<!DOCTYPE html>
<html lang="en">

<head>
	<!-- preoduit fini version 1.2 -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Elhadj Amadou Korka</title>
    <!-- police -->
    <link href="https://fonts.googleapis.com/css?family=Marcellus" rel="stylesheet"> 
    <!-- <link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet">  -->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Custom CSS data-spy="scroll"-->
    <link href="css/style.css" rel="stylesheet">
    <!-- cdn icone font awesone-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--  scroll elaticiter de mon navbar-->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <!-- cdn animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- php5 Shim and Respond.js IE8 support of php5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" id="Acceuil">

<div class="header" >
    <div class="container ">
        <div class="row entete">
    
            <?php 
                if (isset($_GET['Soumission'])) 
                {
                    ?>
                       <!--  <div class="alert alert-success" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Success!</strong> You have been signed in successfully!
                        </div> -->
                    
                            <div class="alert alert-success alert-dismissible"><!--message flashbag-->
                                <a href="index.php" class="close" aria-label="close">&times;</a>
                                Votre message a ete envoye avec <strong>Success!</strong> .
                            </div>
                    <?php  
                }
            ?>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 entete-ecole">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 mon_ecole animated bounceInLeft ">
                    <a href="image/ecole 1 (1).jpg" target="_blank">
                        <img src="image/ecole 1 (1).jpg" class=" img-responsive img-portfolio img-thumbnail img-hover" width="px" height="px" />
                    </a>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8  text-center animated bounceInDown" style="margin: auto;">
                    <h1 class="">GROUPE SCOLAIRE PRIVE ELHADJ AMADOU KORKA BALDE-KINDIA <br> "Bhoundou Ghandal"</h1>
                    <p class=""></p>
         
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 animated bounceInRight">
                    <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-info Go" type="button">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </button>
                        </span>
                    </div><!-- /input-group -->
                    <article class="devise">
                        <h2><strong class="">REPULIQUE DE GUINEE</strong></h2>
                        <strong class=""><span class="Rouge">Travail</span> - <span class="Jaune">Justice</span> - <span class="Vert">Solidarité</span></strong>
                    </article>
            </div><!-- /.col-lg-6 -->
                
        </div> <!-- row entete -->
    </div> <!-- container -->   
</div> <!--/header -->
    <!-- Navigation  pull-right class qui permet de mettre un element a droite soit un div un a etc-->
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid ">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Acceuil</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#"   class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> A propos<b class="caret"><!--'caret' pour la petite fleche --></b></a>
                        <ul class="dropdown-menu"> 
                            <li>
                                <a class="page-scroll" href="#Presentation" >Presentation</a>
                            </li>
                             <li role="separator" class="divider"></li><!-- href="portfolio-1-col.php" pour la ligne de separation -->
                            <li><a href="image/balde1.jpg" target="_blank">Talibadio</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span> Admission<b class="caret"><!--'caret' pour la petite fleche --></b></a>
                        <ul class="dropdown-menu " >
                            <li>
                                <a href="admition.php#Maternelle">Maternelle</a>
                            </li>
                            <li>
                                <a href="admition.php#Primaire">Primaire</a>
                            </li>
                            <li>
                                <a href="admition.php#College">College</a>
                            </li>
                            <li>
                                <a href="admition.php#Lycee">Lycee</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Formation<b class="caret"><!--'caret' pour la petite fleche --></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="admition.php#Maternelle">Maternelle</a>
                            </li>
                            <li>
                                <a href="admition.php#Primaire">Primaire</a>
                            </li>
                            <li>
                                <a href="admition.php#College">College</a>
                            </li>
                            <li>
                                <a href="admition.php#Lycee">Lycee</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Evenements<b class="caret"><!--'caret' pour la petite fleche --></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="page-scroll" href="#evenement">Anciens</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#evenement">Recents</a>
                            </li>
                            <li role="separator" class="divider"></li><!-- pour la ligne de separation -->
                            <li><a href="#">Nos projet</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.php"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contact</a>
                    </li>
                </ul><!--/nav bar -->
            </div>
        </div><!-- /.container -->   
    </nav> <!-- /.navbar-collapse -->
        
    
    

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
            	<a href="image/ecole 1 (1).jpg" target="_blank">
                	<div class="fill" style="background-image:url('image/ecole 1 (1).jpg');"></div>
            	</a>
                <div class="carousel-caption">
                    <h2>salut</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('image/ecole 1 (2).jpg');"></div>
                <div class="carousel-caption">
                    <h2>bonjours</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('image/guinee.jpg');"></div>
                <div class="carousel-caption">
                    <h2>bonsoir</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev">precedent</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next">suivant</span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <h1 class="page-header">
                    NOUS VOUS SOUHAITONS LA BIENVENUE AU GSP EL.A.K.BALDE
                </h1>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            	<div class="panel panel-default  " >
	            	<div class="panel-heading " style=" background-color:rgba(39, 177, 230, 0.05); ">
	                    <h1 class="text-center">DOSSIERS A FOURNIR</h1>
	                </div>
	            	<div class="panel-body resumer">
			        	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
			        		<a href="#"><h2><strong>MATERNELLE</strong></h2></a>
			        		<blockquote>
				  				<p> - Extrait De Naissance <br> - Quatre Photos D'identité Obligatoire</p>
							</blockquote>
			        	</div>
			        	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			        		<a href="#"><h2><strong>PRIMAIRE</strong></h2></a>
			        		<blockquote>
				  				<p> - Extrait De Naissance Plus Le Livret <br> - Quatre Photos D'identité Obligatoire</p>
							</blockquote>
			        	</div>
			        	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			        		<a href="#"><h2><strong>COLLEGE</strong></h2></a>
			        		<blockquote>
				  				<p> - Extrait De Naissance Plus Le Livret <br> - Quatre Photos D'identité Obligatoire</p>
							</blockquote>
			        	</div>
				        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			        		<a href="#"><h2><strong>LYCEE</strong></h2></a>
			        		<blockquote>
				  				<p> - Extrait De Naissance Plus Le Livret <br> - Quatre Photos D'identité Obligatoire</p>
							</blockquote>
			        	</div>
			        </div>			       
			        <div class="panel-footer " style=" background-color:rgba(39, 177, 230, 0.05); ">
	                     <p class=" text-center "><strong>  <u>NB :</u> </strong>Pour les nouveaux vénant <strong>LE DIPLOME</strong> du brevet et <strong>L'ATTESTATION</strong> de l'examen obligatoire</p>
	                </div>
		    	</div>
            </div>           
		</div> <!--fin row -->
		<!-- evenement , historique et contact -->	
		<section id="evenement">
			<div class="row" >
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 " >
					<div class=" col-lg-12 col-md-12 border-evenement" ><h1 >Evenements Et Historique </h1></div>
		  			<table class="table table-striped">
		  				<thead>
		  					<tr>
		  					   <!-- <th><i class="fa fa-th-list" aria-hidden="true"></i> </th> -->
		  					   <th><i class="fa fa-calendar" aria-hidden="true"></i> Date</th>
		  					   <th>Description</th>  
		  					</tr> 
		  				</thead> 
		  				<tbody> 
		  					<tr> 
		  						<!-- <th scope="row">1</th>  -->
		  						<td class="text-info"> 2005/2006</td> 
		  						<td>
		  							<p> 
		  								Date De Création Du Groupe Scolaire Privée Elhadj Amadou Korka Balde "<small><u>Bhoundou Ghandal</u></small>
		  							</p>
		  						</td> 
		  					</tr> 
		  					<tr> 
		  						<!-- <th scope="row">2</th>  -->
		  						<td class="text-info">Octobre 2005</td> 
		  						<td>
		  							<p>Abdoul latif Balde "<small><u>Fondateur</u></small>"  </p>
		  						</td> 
		  					</tr> 
		  					<tr> 
		  						<!-- <th scope="row">3</th>  -->
		  						<td class="text-info">Octobre 2005</td> 
		  						<td>
		  							<p>Ibrahim touladioya diallo "<small><u>Coordinateur</u></small>"  </p>
		  						</td>  
		  					</tr> 
		  					<tr> 
		  						<!-- <th scope="row">4</th>  -->
		  						<td class="text-info">10/05/2006</td> 
		  						<td>
		  							<p>Toumany Diallo "<small><u>Directeur</u></small>"  </p>
		  						</td>  
		  					</tr>
		  				</tbody> 
		  			</table>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
	                <div class="col-lg-12 col-md-12 border-evenement"><h1 >Contacts </h1></div>
		            <p class="text-contact">
		                <i class="fa fa-volume-control-phone " aria-hidden="true"></i><strong>  Tel: </strong>+224 628132719<br>      
		                <i class="fa fa-envelope-o" aria-hidden="true"><!-- pour agrandir licone on utise fa-nx avec n allant de 1 à n--></i><strong>  Mail : </strong><a href="mailto:dianmamadou@outlook.com">dianmamadou@outlook.com</a><br>
		                <i class="fa fa-map-marker " aria-hidden="true"></i> <strong> Adress:</strong> Quartier <strong>Sambaya</strong><br>Secteur <em>Dar-Salam</em> près de la Mosquée <em>Bankayah</em>
		            </p>                       
	            </div>
			</div><!--fin row -->
		</section>
        <!-- personnel -->
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <h1 class="page-header text-center">Personnel De l'Administration</h1>
            </div>
        </div><!--fin row -->
        <div class="row Personnel-l1">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            	<a href="image/dian2.jpg" target="_blank">
                	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    	<img class="img-responsive img-portfolio img-thumbnail img-hover" src="image/dian2.jpg" height="" alt="Lights" style="width:100%">
               		</div>
               	</a>
                <aside>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <a href="pdf/BALDE Mamadou Dian.pdf" target="_blank"  data-toggle="tooltip" data-placement="left" title="Voir le CV">
                        <strong>Mamadou Dian Balde</strong>
                        </a>
                        <p>Responsable administratif et comptable</p>
                        <!-- <a href="pdf/BALDE Mamadou Dian.pdf" class="btn btn-primary BoutonSuite">CV</a>    -->
                    </div> 
                </aside>  
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            	<a href="image/mr camara.jpg" target="_blank">
                	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    	<img class="img-responsive img-portfolio img-thumbnail img-hover" src="image/mr camara.jpg" alt="Lights" style="width:100%">
                	</div>
                </a>
                <aside>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                        <a href="#">
                        <strong>Mamadou benthè camara<center></center></strong>
                        </a>
                        <p>CPMF/Directeur des études élémentaire </p> 
                    </div>
                </aside>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            	<a href="image/mr toure.jpg" target="_blank">
                	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    	<img class="img-responsive img-portfolio img-thumbnail img-hover " src="image/mr toure.jpg" alt="Lights" style="width:100%">
                	</div>
                </a>
                <aside>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <a href="#">
                        <strong>Abdoulaye touré</strong>
                        </a>
                        <p>Directeur des études sécondaire/Censeur </p>   
                    </div> 
                </aside>   
            </div>
        </div> <!-- /.row Personnel-l1 -->

        <div class="row Personnel-l2">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            	<a href="image/mr barry.jpg" target="_blank">
                	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    	<img class="img-responsive img-portfolio  img-thumbnail  img-hover" src="image/mr barry.jpg" alt="Lights" style="width:100%">
                	</div>
                </a>
                <aside>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                        <a href="pdf/cv mamadou samba barry.pdf" target="_blank" data-toggle="tooltip" data-placement="left" title="Voir le CV">
                        <strong>Mamadou samba barry</strong>
                        </a>
                        <p >Proviseur/Principal</p>
                        <!-- <a href="pdf/cv mamadou samba barry.pdf" class="btn btn-primary BoutonSuite">CV</a>  -->
                    </div>
                </aside>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <a href="image/surveillant.jpg" target="_blank">
                	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    	<img class="img-responsive img-portfolio  img-thumbnail  img-hover" src="image/surveillant.jpg" alt="Lights" style="width:100%">
                	</div>
                </a>
                <aside>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                        <a href="#">
                        <strong>Mamadou diané</strong>
                        </a>
                        <p>Surveillant général<!--<a href="personnel.php" class="btn btn-lg btn-primary BoutonSuite">suivant</a>--></p> 
                    </div>
                </aside>
            </div>
        </div><!-- /.row Personnel-l2 -->

        <!-- Features Section -->
        <section id="Presentation">
	        <div class="row fondateur-row" >
	            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                <h1 class="page-header ">LES MOTS DU FONDATEUR</h1>
	                <p class="text-justify">Cette école est ouverte en la mémoire de notre feu père dont elle porte le nom. Un éminent professeur. Il avait contribué à l'épanouissement et au développement de mon  cher pays(Guinée Conakry) dans tous les domaines. Père fondateur de la ligue islamique guinéenne et beaucoup d'ouvrages(guide du pèlerin , pratique de la prière et les heures de la prière). Donc c'est une école d'excelance qu'à pour vocation la source du savoir.<br> L'unité est la requète de cette école. La formation dans toute sa rigueurs, la lecture et la persévérance sont entre autre la vocation de la fondation de cette école.<br>Une fondation serte qui n'a pas eu la chance d'aller à l'école, raison pour laquelle ses menbres ont une lourde ambition à l'épanouissement des enfants du monde en générale et de ceux de la Guinée Conakry en particulier...<br> <a href="pdf/reglement interieur.pdf">NB: Lire attentivement le réglément interieur de l'école</a></p>
	            </div>
	            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	                <a href="image/latif7.jpg" target="_blank">
	                    <img class="img-responsive img-thumbnail fondateur-photo" src="image/latif7.jpg" alt="" height="" width="" title="Mohamed Abdelatif Balde" />
	                </a>
	            </div>
	        </div>
	        <!-- /.row -->
        </section>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                    <p>Pour plus d'information au sujet de notre école "votre école" le <strong>Groupe Scolaire Privée Elhadj Amadou Korka Balde </strong>, c'est qualites et ces avantages qui sont sans doute pas fréquent ,nous vous prions de continuer la lecture en appyant sur ce boutton... </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <a class="btn btn-lg btn-default btn-block  BoutonSuite" href="admition.php">suivant</a>
                </div>
            </div><!--fin row -->
        </div>
    </div><!--container-->
   
        <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row footer-row">
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 navigation-rapide">
                        <h3>Formation</h3>
                        <ul>
                            <li >Anglais</li>
                            <li>Francais</li>
                            <li>EPS</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 " >
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 navigation-rapide ">
                        <h3>Nous Suivre</h3>
                        <ul id="img-contact">
                            <li><a href="https://www.facebook.com/profile.php?id=100007539042203" target="_blank" ><figure class="facebook"><i class="fa fa-facebook" class="sr-only"></i></figure><span> Facebook</span></a> </li><br>
                            <li><a href="#" title="Suivez-moi sur twitter !"><figure class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></figure> <span>Twitter</span></a></li><br>
                            <!-- <li><a href="#" title="Suivez-moi sur Insttagram !"><figure><i class="fa fa-instagram" aria-hidden="true"></i></figure><span> Insttag</span></a></li><br> -->
                            <li><a href="#" title="Suivez-moi sur youtube !"><figure class="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></figure> <span>Youtube</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 navigation-rapide">
                        <h3>Navigation</h3>
                        <ul>
                            <li><a class="" href="index.php"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Acceuil</a></li>
                            <li><a href="admition.php" class="" ><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> A propos</a></li>
                            <li><a href="admition.php" class="" ><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Admission</a></li>
                            <li><a href="admition.php" class="" ><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Formation</a></li>
                            <li><a href="#" class="" ><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Evenement</a></li>
                            <li><a href="contact.php" class="" ><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 navigation-rapide">
                        <h3>Mot Du Fondateur</h3>
                        <p>Cette école est ouverte en la mémoire de notre feu père dont elle porte le nom. Un éminent professeur. Il avait contribué ... </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a class="btn btn-lg btn-default btn-block page-scroll BoutonSuite" href="#Presentation">Lire la suite</a>
                    </div>
                </div>
                <!--<div class="col-md-3 col-lg-3 " >
                    <div class="col-xs-12 navigation-rapide">
                        <h3>Contact</h3>
                        <ul id="img-contact">
                            <li ><a href="#"  title="Appelé"><figure><i class="fa fa-mobile" aria-hidden="true"></i></figure></a><strong> Tel:</strong>+224 628132719</li><br>
                            <!--<li><a href="#"  title="Mail De L'école"><figure><i class="fa fa-envelope-o" aria-hidden="true"></i></figure></a><strong >  Mail:</strong><br><span style="">        dianmamadou@outlook.com</span></li><br>
                            <li>
                            	<a href="#"  title="Welcome"><figure><i class="fa fa-map-marker" aria-hidden="true"></i></figure></a> <strong >Adress : </strong>
                    			Quartier <strong>Sambaya</strong><br>Secteur <em>Dar-Salam</em> près de la Mosquée <em>Bankayah</em><br>
                			</li>

                        </ul>
                    </div>
                </div>-->
            </div>
            <hr>
            <div></div>
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 list-footer text-center">
                    <p><b>Copyright</b> <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"><b>2017</b></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 list-footer ">
                    <p class="text-center"><b>@Cherif Mamadou Abdoulaye Balde</b></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 list-footer text-center">
                    <ul>
                        <li><a class="page-scroll" href="#Acceuil"> Acceuil</a></li>
                        <li><a href="admition.php" class="" >Formation</a></li>
                        <li><a href="#evenement" class="page-scroll" >Evenement</a></li>
                        <li><a href="contact.php" class="" >Contact</a></li>       
                    </ul>
                </div>
            </div>
        </div> <!--/container-->
    </footer>
    

    
    <!-- /.container -->

    <!-- jQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="js/jquery.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <script type="text/javascript">//message flashbag
        window.setTimeout(function() 
        {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
    </script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <!-- scroller sur la meme page avec href="#name" et id pour l'appelle-->
    <script src="js/jquery.easing.min.js"></script>
    <!-- scroll l'elasticiter du navbar  et tous les autres scroll-->
    <script src="js/scrolling-nav.js"></script> 
    <!-- Script pour L'Activation du Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>

</html>
