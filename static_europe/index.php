<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="SuperHealthyFood is a premium food delivery service with the mission to bring affordable and healty meals to as many people as possible.">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <title>SuperHealthyFood</title>
        <meta name="theme-color" content="#ffffff">
        
    </head>
    <body>
        <header>
            <nav>
		<div class="row">
			<img src={require('./img/Logo_nou.png')}  alt="SuperHealthyFood logo" class="logo">
			<ul class="main-nav js--main-nav">
				<li><a href="#features">Retete</a></li>
				<li><a href="#works">Cum Comanzi</a></li>
				<li><a href="#plans">Sign up</a></li>
				<li><a href="#">AZ: <?php
						    $aws_az = file_get_contents('http://169.254.169.254/latest/meta-data/placement/availability-zone');
						    echo $aws_az;
						    ?></a></li>
				<li><a href="#">IP: <?php
						    $eip = file_get_contents('http://169.254.169.254/latest/meta-data/public-ipv4');
						    echo $eip;
						    ?></a></li>
                    </ul>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>SPUNE BUN VENIT </h1><h1>MANCARII SANATOASE IN VIATA TA!</h1>
		<a class="btn btn-full js--scroll-to-plans" href="#features">Imi este foame</a>
		<a class="btn btn-ghost js--scroll-to-start" href="#works">Arata-mi mai multe</a>
            </div>
            
        </header>
        
        <section class="section-features js--section-features" id="features">
            <div class="row">
                <h2>Get food fast &mdash; not fast food</h2>
                <p class="long-copy">
                    Buna, noi suntem SuperHealthyFood, noul tau serviciu premium de livrare a mancarii sanatoase. Noi stim ca tu esti mereu ocupat si ca nu ai timp sa gatesti. Asadar lasa-ne pe noi sa ne ocupam de asta, ne pricepem foarte bine si nu te vom dezamagi.
		</p>
            </div>
        
        <section class="section-meals">
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/1.jpg" alt="Spicy Iranian Foods">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/2.jpg" alt="Dallas fish dish">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/3.jpg" alt="Chicken breast strips with green vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/4.jpg" alt="Octopus with chestnuts">
                    </figure>
                </li>
            </ul>
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/5.jpg" alt="Cheese and Spinach Pie">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/6.jpg" alt="Gobi Manchurian">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/7.jpg" alt="Lentile Soup">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/8.jpg" alt="Breakfast eggs">
                    </figure>
                </li>
            </ul>
        </section>
        
        
        <section class="section-steps" id="works">
            <div class="row">
                <h2>Cum functioneaza &mdash; Simplitate in 1, 2, 3 pasi</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <img src="resources/img/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen js--wp-2">
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step clearfix">
                        <div>1</div>
                        <p>Alege planul de subscriptie care ti se potriveste cel mai bine si inscriete in program chiar de astazi!</p>
                    </div>
                    <div class="works-step clearfix">
                        <div>2</div>
                        <p>Comanda un meniu delicios folosind aplicatia mobila!</p>
                    </div>
                    <div class="works-step clearfix">
                        <div>3</div>
                        <p>Bucura-te de meniu in mai putin de 30 de minute!</p>
                    </div>
                    
                    <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="App Store Button"></a>
                    <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Play Store Button"></a>
                </div>
            </div>
        </section>
        
        <section class="section-testimonials">
            <div class="row">
                <h2>Clientii nostri nu mai pot trai fara noi!</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <blockquote>
                        Nu stiu ce ma faceam fara SuperHealthyFood! Am un program de munca incarcat, iar SuperHealthyFood aplicatie mi-a salvat viata! Acum m-am obisnuit sa mananc aproape zilnic!
                        <cite><img src="resources/img/customer-1.jpg" alt="Customer 1 photo">Nicolae - Aninoasa</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                       Mancare scumpa la pret mic! Cu o singura apasare de buton primesc comanda in maxim 30 de minute!
                        <cite><img src="resources/img/customer-2.jpg" alt="Customer 2 photo">Livia - Brasov</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
			De mult cautam un astfel de serviciu! Multumesc SuperHealthyFood!
                    <cite><img src="resources/img/customer-3.jpg" alt="Customer 3 photo">Adrian - Valcea</cite>
                    </blockquote>
                </div>
            </div>
        </section>
        
        
        <section class="section-plans js--section-plans" id="plans">
		<div class="row">
			<h2>Start eating healthy today</h2>
		</div>
		<div class="row">
			<div class="col span-1-of-3">
				<div class="plan-box js--wp-4">
					<div>
						<h3>Premium</h3>
						<p class="plan-price">1000 Ron <span>/ luna</span></p>
						<p class="plan-price-meal">Mai putin de 35 de lei pentru fiecare meniu</p>
					</div>
					<div>
						<ul>
							<li><i class="ion-ios-checkmark-empty icon-small"></i>1 meniu in fiecare zi</li>
							<li><i class="ion-ios-checkmark-empty icon-small"></i>Comanda 24/7</li>
							<li><i class="ion-ios-checkmark-empty icon-small"></i>Access la cele mai noi retete</li>
							<li><i class="ion-ios-checkmark-empty icon-small"></i>Livrare gratuita</li>
						</ul>
					</div>
					<div>
						<a href="/#" class="btn btn-full">Sign up now</a>
					</div>
				</div>
			</div>
			<div class="col span-1-of-3">
				<div class="plan-box">
					<div>
						<h3>Pro</h3>
						<p class="plan-price">600 Ron <span>/ luna</span></p>
						<p class="plan-price-meal">60 de lei pentru fiecare meniu</p>
					</div>
					<div>
						<ul>
							<li><i class="ion-ios-checkmark-empty icon-small"></i>1 meniu 10 zile/luna</li>
							<li><i class="ion-ios-checkmark-empty icon-small"></i>Comanda 24/7</li>
							<li><i class="ion-ios-checkmark-empty icon-small"></i>Access la cele mai noi retete</li>
							<li><i class="ion-ios-checkmark-empty icon-small"></i>Livrare gratuita</li>
						</ul>
					</div>
					<div>
						<a href="/#" class="btn btn-ghost">Sign up now</a>
					</div>
				</div>
			</div>
			<div class="col span-1-of-3">
				<div class="plan-box">
					<div>
						<h3>Starter</h3>
						<p class="plan-price">70 Ron <span>/ meniu</span></p>
						<p class="plan-price-meal">&nbsp;</p>
					</div>
					<div>
						<ul>
							<li><i class="ion-ios-checkmark-empty icon-small"></i>1 meniu</li>
							<li><i class="ion-ios-checkmark-empty icon-small"></i>Comanda de la ora 8 am, pana la ora 12 pm</li>
							<li><i class="ion-ios-close-empty icon-small"></i>Access la cele mai noi retete</li>
							<li><i class="ion-ios-checkmark-empty icon-small"></i>Livrare gratuita</li>
						</ul>
					</div>
					<div>
						<a href="/#" class="btn btn-ghost">Sign up now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
        
       <section class="section-form">
						<div class="row">
							<h2>Ne bucuram de orice sfat ne dai!</h2>
						</div>
						<div class="row">
							<form method="post" action="#" class="contact-form">
								<div class="row">
									<div class="col span-1-of-3">
										<label for="name">Nume</label>
									</div>
									<div class="col span-2-of-3">
										<input type="text" name="name" id="name" placeholder="numele tau" required/>
									</div>
								</div>
								<div class="row">
									<div class="col span-1-of-3">
										<label for="email">Email</label>
									</div>
									<div class="col span-2-of-3">
										<input type="email" name="email" id="email" placeholder="email-ul tau" required/>
									</div>
								</div>
								<div class="row">
									<div class="col span-1-of-3">
										<label for="find-us">Cum ne-ai gasit?</label>
									</div>
									<div class="col span-2-of-3">
										<select name="find-us" id="find-us">
											<option value="friends" selected>Prieteni</option>
											<option value="search">Google</option>
											<option value="ad">Reclame</option>
											<option value="other">Altele</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col span-1-of-3">
										<label>Newsletter?</label>
									</div>
									<div class="col span-2-of-3">
										<input type="checkbox" name="news" id="news" checked/> Da, multumesc!
									</div>
								</div>
								<div class="row">
									<div class="col span-1-of-3">
										<label>Cateva sfaturi</label>
									</div>
									<div class="col span-2-of-3">
										<textarea name="message" placeholder="mesajul tau"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col span-1-of-3">
										<label>&nbsp;</label>
									</div>
									<div class="col span-2-of-3">
										<input type="submit" value="Send it!"/>
									</div>
								</div>

							</form>

						</div>
					</section>

					<footer>
						<div class="row">
							<div class="col span-1-of-2">
								<ul class="footer-nav">
									<li><a href="/#">About us</a></li>
									<li><a href="/#">Blog</a></li>
									<li><a href="/#">Press</a></li>
									<li><a href="/#">iOS App</a></li>
									<li><a href="/#">Android App</a></li>
								</ul>
							</div>
							<div class="col span-1-of-2">
								<ul class="social-links">
									<li><a href="/#"><i class="ion-social-facebook"></i></a></li>
									<li><a href="/#"><i class="ion-social-twitter"></i></a></li>
									<li><a href="/#"><i class="ion-social-googleplus"></i></a></li>
									<li><a href="/#"><i class="ion-social-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<p>
								Copyright &copy; 2020 by SuperHealthyFood (demo by Ionescu Mihai). All rights reserved.
							</p>
						</div>
					</footer>

				</body>

			</html>
