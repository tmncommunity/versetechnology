
<!-- Footer oficial -->
<section class="hidden-xs" style="background-color: #1B1D1F; padding: 20px;">
			<div class="row clearfix" style="padding: 0;">
				<div class="col-xs-12 no-pad" style="border-bottom: 1px solid #C8C8C8; padding: 50px 0px 25px 0px; ">
					<div class="col-xs-12 col-sm-3 SubFooter" style=" padding-left: 50px;">
					    <p class="vsp" style="font-size: 20px !important; margin-bottom: 5px;">VERSE <b>Technology</b></p>
					    <br>
												<p class="vsp">VERSE Technology S.A.P.I. de C.V.</p>
                        <p class="vsp">Insurgentes Sur 859 | Piso 2</p>
                        <p class="vsp">Nápoles | Benito Juárez</p>
                        <p class="vsp">Mexico City 03810</p>
						<p class="vsp" style="margin-top: 20px;"><span class="copyright"> Privacy Policy</p>
						<p class="vsp" style=""><span class="copyright"> 2018 VERSE Technology</p>
					</div>
					<div class="col-xs-12 col-sm-3 SubFooter" style="padding-left: 50px;">
					    <p class="vsp" style="font-size: 13px !important; margin: 2.5px 0px;"><b>COMPANY</b></p>
							<br>
						<p class="vsp">(+52) 1 551 828 0521</p>
						<p class="vsp">hi@verse-technology.com</p>
						<a href="/blog/" target="_blank"><p class="vsp">Blog</p></a>
						<a href="/press"><p class="vsp">Press</p></a>
						<a href="/careers"><p class="vsp">Careers</p></a>
						<a href="/store"><p class="vsp">Store</p></a>
						<a href="/investment"><p class="vsp">Investment</p></a>
						</br>
						</br>
					</div>
					<div class="col-xs-12 col-sm-3 SubFooter" style="padding-left: 50px;">
						<p class="vsp" style="font-size: 13px !important; margin: 2.5px 0px;"><b>INDUSTRIES</b></p>
						<br>
						<a href="<?php echo get_home_url() . "/agriculture"; ?>"><p class="vsp">Agriculture</p></a>
						<a href="<?php echo get_home_url() . "/aquaculture"; ?>"><p class="vsp">Aquaculture</p></a>
						<a href="<?php echo get_home_url() . "/manufacturing"; ?>"><p class="vsp">Manufacturing</p></a>
						<a href="<?php echo get_home_url() . "/logistics"; ?>"><p class="vsp">Logistics & Supply Chain</p></a>
						<a href="/argos"><p class="vsp">Smart Cities</p></a>
						<a href="/argos"><p class="vsp">Gas & Oil</p></a>
					</div>
					<div class="col-xs-12 col-sm-3 SubFooter" style="padding-left: 50px;">
						<p class="vsp" style="font-size: 13px !important; margin: 2.5px 0px;"><b>FIND US</b></p>
						<ul class="socials">
							<li>
								<a href="https://www.facebook.com/versetechnology/" target="_blank"><i class="gv-facebook-03"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Facebook</p></a>
							</li>
							<li>
								<a href="https://twitter.com/VERSETechnology" target="_blank"><i class="gv-twitter-03"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Twitter</p></a>
							</li>
           		<li>
           			<a href="https://www.youtube.com/channel/UCoU72-E8t9C-9hKWhJuK80g"><i class="gv-youtube-03 footer1"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Youtube</p></a>
           		</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row clearfix" style="padding: 0;">
				<div class="col-xs-12 no-pad" style="padding: 25px 0px 35px 0px; text-align: center;">
					<div class="col-xs-12 SubFooter">
						<a href="https://www.grupoverse.com" target="_blank"><p class="vsp" style="font-size: 16px !important;">VERSE</p></a>
					</div>
				</div>
			</div>
		</section>
		</div>
	</div>

	</main>
	</script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri() . '/js/Bootstrap/bootstrap.min.js'?>" type="text/javascript"></script>
	<script src="https://use.fontawesome.com/06f1165186.js"></script>
	
	<script src="<?php echo get_template_directory_uri() . '/js/modernizr-custom.js'?>"></script>
	<script src="<?php echo get_template_directory_uri() . '/js/main.js'?>"></script> <!-- Resource jQuery -->

<style>

/* -------------------------------- 

 Header

-------------------------------- */
.cd-morph-dropdown {
	position: relative;
	height: 60px;
	background-color:black;
	text-align: left;
	padding-left: 5%;
  }
  .cd-morph-dropdown::before {
	/* never visible - used in JS to check mq */
	content: 'mobile';
	display: none;
  }
  .cd-morph-dropdown .nav-trigger {
	/* menu icon - visible on small screens only */
	position: absolute;
	top: 0;
	right: 0;
	height: 60px;
	width: 60px;
	/* replace text with icon */
	overflow: hidden;
	text-indent: 100%;
	white-space: nowrap;
	color: transparent;
  }
  .cd-morph-dropdown .nav-trigger span, .cd-morph-dropdown .nav-trigger span::after, .cd-morph-dropdown .nav-trigger span::before {
	/* these are the 3 lines of the menu icon */
	position: absolute;
	background-color: #ffffff;
	height: 3px;
	width: 26px;
  }
  .cd-morph-dropdown .nav-trigger span {
	left: 50%;
	top: 50%;
	bottom: auto;
	right: auto;
	-webkit-transform: translateX(-50%) translateY(-50%);
		-ms-transform: translateX(-50%) translateY(-50%);
			transform: translateX(-50%) translateY(-50%);
	-webkit-transition: background-color .3s;
	transition: background-color .3s;
  }
  .cd-morph-dropdown .nav-trigger span::after, .cd-morph-dropdown .nav-trigger span::before {
	content: '';
	left: 0;
	-webkit-transition: -webkit-transform .3s;
	transition: -webkit-transform .3s;
	transition: transform .3s;
	transition: transform .3s, -webkit-transform .3s;
  }
  .cd-morph-dropdown .nav-trigger span::before {
	-webkit-transform: translateY(-9px);
		-ms-transform: translateY(-9px);
			transform: translateY(-9px);
  }
  .cd-morph-dropdown .nav-trigger span::after {
	-webkit-transform: translateY(9px);
		-ms-transform: translateY(9px);
			transform: translateY(9px);
  }
  .cd-morph-dropdown.nav-open .nav-trigger span {
	background-color: transparent;
  }
  .cd-morph-dropdown.nav-open .nav-trigger span::before {
	-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
			transform: rotate(45deg);
  }
  .cd-morph-dropdown.nav-open .nav-trigger span::after {
	-webkit-transform: rotate(-45deg);
		-ms-transform: rotate(-45deg);
			transform: rotate(-45deg);
  }
  .cd-morph-dropdown .main-nav {
	display: none;
  }
  .cd-morph-dropdown .morph-dropdown-wrapper {
	display: none;
	position: absolute;
	top: 60px;
	left: 0;
	width: 100%;
	padding: 1.2em 5%;
	box-shadow: inset 0 1px 0 #e6e6e6;
	background-color: #FFFFFF;
  }
  .cd-morph-dropdown.nav-open .morph-dropdown-wrapper {
	display: block;
  }
  .cd-morph-dropdown .dropdown-list > ul > li {
	margin-bottom: 3.3em;
	}
	
  .cd-morph-dropdown .label {
	display: block;
	font-size: 2.2rem;
	color: #1A1A1A;
	margin-bottom: .8em;
  }
  .cd-morph-dropdown .content li::after {
	clear: both;
	content: "";
	display: block;
  }
  .cd-morph-dropdown .gallery .content li {
	margin-bottom: 1.4em;
  }
  .cd-morph-dropdown .gallery .content a {
	display: block;
  }
  .cd-morph-dropdown .gallery .content a::before {
	/* icon on the left */
	content: '';
	display: inline-block;
	float: left;
	height: 54px;
	width: 54px;
	margin-right: .6em;
	background: red;
	border-radius: 50%;
	-webkit-transition: background .2s;
	transition: background .2s;
  }
  .cd-morph-dropdown .gallery .content a span, .cd-morph-dropdown .gallery .content a em {
	display: block;
	line-height: 1.2;
  }
  .cd-morph-dropdown .gallery .content a em {
	font-size: 1.8rem;
	padding: .4em 0 .2em;
	color: #1A1A1A;
  }
  .cd-morph-dropdown .gallery .content a span {
	font-size: 1.4rem;
	color: #a6a6a6;
  }
  .cd-morph-dropdown .gallery .content a:hover::before {
	background-color: #1A1A1A;
  }
  .cd-morph-dropdown .gallery li:nth-of-type(1) a::before {
	background: #f4e58a url(../img/cd-gallery-icons.svg) no-repeat 0 0;
  }
  .cd-morph-dropdown .gallery li:nth-of-type(2) a::before {
	background: #F4AF6D url(../img/cd-gallery-icons.svg) no-repeat -54px 0;
  }
  .cd-morph-dropdown .gallery li:nth-of-type(3) a::before {
	background: #DB6356 url(../img/cd-gallery-icons.svg) no-repeat -108px 0;
  }
  .cd-morph-dropdown .gallery li:nth-of-type(4) a::before {
	background: #8D4645 url(../img/cd-gallery-icons.svg) no-repeat -162px 0;
  }
  .cd-morph-dropdown .links .content > ul > li {
	margin-top: 1em;
  }
  .cd-morph-dropdown .links-list a,
  .cd-morph-dropdown .btn {
	display: block;
	margin-left: 14px;
	font-size: 2.2rem;
	line-height: 1.6;
  }
  .cd-morph-dropdown .links-list a:hover,
  .cd-morph-dropdown .btn:hover {
	color: #1A1A1A;
  }
  .cd-morph-dropdown .content h2 {
	color: #a6a6a6;
	text-transform: uppercase;
	font-weight: bold;
	font-size: 1.3rem;
	margin: 20px 0 10px 14px;
	}
	
	.logomobile{
			margin-top: 20px;
		}

		.navbar-brand {
			width:100%;
		}

		.cd-main-content {
		min-height: 100vh;
		background-color: #ffffff;
		}
	

	ul {
    display: block;
    list-style-type: none;
	}

	#main-content{
		display:block;
	}


  @media only screen and (min-width: 1200px) {
			.cd-morph-dropdown {
				position: absolute;
				height: 80px;
				left: 0;
				top: 0;
				width: 100%;
				padding-left:16%
			}
			.cd-morph-dropdown::before {
				content: 'desktop';
			}
			.cd-morph-dropdown .nav-trigger {
				display: none;
			}
			.cd-morph-dropdown .main-nav {
				display: inline-block;
				width: 100%;
			}
			.cd-morph-dropdown .main-nav > ul > li {
				display: inline-block;
				float: left;
				margin-top: 7px;
			}

			.cd-morph-dropdown .main-nav > ul > li:first-child {
				margin-bottom: 3.3em;
				display: inline-block;
				margin-top: 18px;
				padding-right: 26%;
			}

			.cd-morph-dropdown .main-nav > ul > li:nth-child(2) {
				
			}

			.cd-morph-dropdown .main-nav > ul > li > a {
				display: block;
				padding: 0 27px;
				height: 70px;
				line-height: 70px;
				color: #FFFFFF;
				font-size: 17px;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
				-webkit-transition: opacity .2s;
				transition: opacity .2s;
				vertical-align: top;
			}

			.cd-morph-dropdown .main-nav > ul > li:first-child > a{
				padding: 0;
			}

			.cd-morph-dropdown.is-dropdown-visible .main-nav > ul > li > a {
				/* main navigation hover effect - on hover, reduce opacity of elements not hovered over */
				opacity: .6;
			}
			.cd-morph-dropdown.is-dropdown-visible .main-nav > ul > li.active > a {
				opacity: 1;
			}
			.cd-morph-dropdown .morph-dropdown-wrapper {
				/* dropdown wrapper - used to create the slide up/slide down effect when dropdown is revealed/hidden */
				display: block;
				top: 58px;
				/* overwrite mobile style */
				width: auto;
				padding: 0;
				box-shadow: none;
				background-color: transparent;
				/* Force Hardware acceleration */
				-webkit-transform: translateZ(0);
						transform: translateZ(0);
				will-change: transform;
				-webkit-transform: translateY(20px);
					-ms-transform: translateY(20px);
						transform: translateY(20px);
				-webkit-transition: -webkit-transform .3s;
				transition: -webkit-transform .3s;
				transition: transform .3s;
				transition: transform .3s, -webkit-transform .3s;
			}
			.cd-morph-dropdown.is-dropdown-visible .morph-dropdown-wrapper {
				-webkit-transform: translateY(0);
					-ms-transform: translateY(0);
						transform: translateY(0);
			}
			.cd-morph-dropdown .dropdown-list {
				position: absolute;
				top: 0;
				left: 0;
				visibility: hidden;
				-webkit-transform: translateZ(0);
						transform: translateZ(0);
				will-change: transform, width, height;
				-webkit-transition: visibility .3s;
				transition: visibility .3s;
				box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
			}
			.no-csstransitions .cd-morph-dropdown .dropdown-list {
				display: none;
			}
			.cd-morph-dropdown .dropdown-list::before {
				/* dropdown top triangle */
				content: '';
				position: absolute;
				bottom: 100%;
				left: 50%;
				right: auto;
				-webkit-transform: translateX(-50%);
					-ms-transform: translateX(-50%);
						transform: translateX(-50%);
				height: 0;
				width: 0;
				border: 8px solid transparent;
				border-bottom-color: #FFFFFF;
				opacity: 0;
				-webkit-transition: opacity .3s;
				transition: opacity .3s;
			}
			.cd-morph-dropdown .dropdown-list > ul {
				position: relative;
				z-index: 1;
				height: 100%;
				width: 100%;
				overflow: hidden;
			}
			.cd-morph-dropdown.is-dropdown-visible .dropdown-list {
				visibility: visible;
				-webkit-transition: width .3s, height .3s, -webkit-transform .3s;
				transition: width .3s, height .3s, -webkit-transform .3s;
				transition: transform .3s, width .3s, height .3s;
				transition: transform .3s, width .3s, height .3s, -webkit-transform .3s;
			}
			.cd-morph-dropdown.is-dropdown-visible .dropdown-list::before {
				opacity: 1;
			}
			.cd-morph-dropdown .dropdown {
				position: absolute;
				left: 0;
				top: 0;
				opacity: 0;
				visibility: hidden;
				width: 100%;
				-webkit-transition: opacity .3s, visibility .3s;
				transition: opacity .3s, visibility .3s;
			}
			.cd-morph-dropdown .dropdown.active {
				opacity: 1;
				visibility: visible;
			}
			.cd-morph-dropdown .dropdown.move-left .content {
				-webkit-transform: translateX(-100px);
					-ms-transform: translateX(-100px);
						transform: translateX(-100px);
			}
			.cd-morph-dropdown .dropdown.move-right .content {
				-webkit-transform: translateX(100px);
					-ms-transform: translateX(100px);
						transform: translateX(100px);
			}
			.cd-morph-dropdown .label {
				/* hide the label on bigger devices */
				display: none;
			}
			.cd-morph-dropdown .content {
				padding: 2.2em 1.8em;
				-webkit-transition: -webkit-transform .3s;
				transition: -webkit-transform .3s;
				transition: transform .3s;
				transition: transform .3s, -webkit-transform .3s;
				text-align: left;
			}
			.cd-morph-dropdown .content > ul::after {
				clear: both;
				content: "";
				display: block;
			}
			.cd-morph-dropdown .content > ul > li {
				width: 48%;
				float: left;
				margin-right: 4%;
				margin-top: 0;
			}
			.cd-morph-dropdown .content > ul > li:nth-of-type(2n) {
				margin-right: 0;
			}
			.cd-morph-dropdown .gallery .content {
				/* you need to set a width for the .content elements because they have a position absolute */
				width: 510px;
				padding-bottom: .8em;
			}
			.cd-morph-dropdown .gallery .content li {
				margin-bottom: 1.8em;
			}
			.cd-morph-dropdown .links .content > ul > li {
				margin-top: 0;
			}
			.cd-morph-dropdown .links .content,
			.cd-morph-dropdown .button .content {
				width: 390px;
			}
			.cd-morph-dropdown .links-list a {
				font-size: 1.6rem;
				margin-left: 0;
			}
			.cd-morph-dropdown .btn {
				display: block;
				width: 100%;
				height: 60px;
				margin: 1.5em 0 0;
				font-size: 1.8rem;
				text-align: center;
				color: #FFFFFF;
				line-height: 60px;
				background: #DB6356;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
			}
			.cd-morph-dropdown .btn:hover {
				background: #1A1A1A;
				color: #FFFFFF;
			}
			.cd-morph-dropdown .content h2 {
				font-size: 1.8rem;
				text-transform: none;
				font-weight: normal;
				color: #1A1A1A;
				margin: 0 0 .6em;
			}
			.cd-morph-dropdown .bg-layer {
				/* morph dropdown background */
				position: absolute;
				top: 0;
				left: 0;
				height: 1px;
				width: 1px;
				background: #FFFFFF;
				opacity: 0;
				-webkit-transition: opacity .3s;
				transition: opacity .3s;
				-webkit-transform-origin: top left;
					-ms-transform-origin: top left;
						transform-origin: top left;
				-webkit-transform: translateZ(0);
						transform: translateZ(0);
				will-change: transform;
				-webkit-backface-visibility: hidden;
						backface-visibility: hidden;
			}
			.cd-morph-dropdown.is-dropdown-visible .bg-layer {
				opacity: 1;
				-webkit-transition: opacity .3s, -webkit-transform .3s;
				transition: opacity .3s, -webkit-transform .3s;
				transition: transform .3s, opacity .3s;
				transition: transform .3s, opacity .3s, -webkit-transform .3s;
			}

			.logomobile{
				display:none;
			}
			
			.cd-main-content {
			padding-top: 80px;
		}
		.cd-morph-dropdown .main-nav > ul > li:first-child {
    margin-bottom: 3.3em;
    display: inline-block;
    margin-top: 18px;
		padding-right: 26%;
	}	

		.cd-morph-dropdown .main-nav > ul > li:first-child{
			padding-right: 7%;
		}

		.cd-morph-dropdown .main-nav > ul > li > a{
			font-size: 16px;
			padding: 0 20px;
		}


  }
	
	@media only screen and (min-width: 1400px) {
		.cd-morph-dropdown .main-nav > ul > li:first-child {
    padding-right: 15%;
	}

}
#inicio {
	margin: 0;
  background-position: -520px -735px;
  height: 612px;
  background-size: auto 1665px !important;
}



@media only screen and (min-width: 120px) {
	#inicio .marketing{
	width: 100%;
	text-align: left;
	display: inline-block;
	vertical-align: top;
	}

	#inicio .marketing .copyprincipal{
	padding: 0px 0px 25px;
	width: 100%;
	}

	#inicio .marketing .copyprincipal h1{
		
    font-size: 32px;
    margin-top: 0px;
    line-height: 49px;
	}

	#inicio .marketing figure{
		display:inline-block;
		width: 50%;
	}

	#inicio .marketing figure .temperaturemetric{
        margin-left: 10%;
    	width: 170px;
	}

	#inicio .marketing figure .humiditymetric {
        margin-left: 10%;
    	width: 170px;
	}
	#inicio .marketing .onihero{
    display: inline-block;
    width: 48%;
		vertical-align: middle;
    text-align: center;
	}

		#inicio .marketing figure.onihero img{
		width: 126px;
	}

	section.completesystems{
		background-color: #2f69f0;
		padding-bottom: 80px;
	}

	section.completesystems div h2{
    text-align: center;
    font-size: 40px;
    color: white;
    padding-top: 60px;
    margin: 0;
    padding-bottom: 60px;
    font-weight: 300;
    line-height: 45px;
	}

	section.completesystems div.icn{
    background-color: #2f69f0;
    width: 87%;
    display: inline-block;
    vertical-align: top;
    margin-left: 10%;
	}

	section.completesystems div.icn .description{
		display: inline-block;
    margin-left: 16px;
		width: 90%;
		margin-bottom: 15px;
	}

	section.completesystems div.icn .description .icndescription{
		display: inline-block;
		margin-left: 16px;
		width: 68%;
	}	

	section.completesystems div.icn .description .icndescription p.description{
		color:white;
		display: inline-block;
		margin-top: 9px;
	}	


	section.completesystems div.icn .description .icndescription h4{
		color:white;
		display: block;
		vertical-align: top;
		margin: 0;
	}	

	section.completesystems div.icn .description figure{
		display: inline-block;
		vertical-align: top;
	}

	section.completesystems div.icn .description figure img{
		width: 60px;
	}

	section.bloghome{
		background-color:#f1f5ff
	}

	section.bloghome div.container div.row h2{
		text-align:center;
		font-size: 40px;
		color: #2f68f0;
		font-weight:100;
		margin-top: 0;
		margin-bottom: 70px;
		line-height: 40px;
	}

	h5.titulo{
		font-size: 18px;
		font-weight: 400;
		line-height: 27px;
	}

	h6.category{
    background-color: #77c427;
    border-radius: 5px;
    color: white !important;
		width: 47%;
    vertical-align: top;
    text-align: center;
    padding-top: 6px !important;
    font-weight: bold;
    font-size: 12px;
    margin-bottom: 10px;
    padding-bottom: 4px;
	}

	h6.category a{
		color: white !important;
	}

	section.trusted {
		margin-bottom: 70px;
	}

		section.trusted .container .fila{
			text-align: center;
			margin-top:20px;
		}

		section.trusted .container .fila .text{
			text-align: center;
		}

		section.trusted .container .fila .text h2{
			font-size: 40px;
			color: #2f68f0;
			font-weight: 300;
		}

		section.trusted .container .fila .description img{
			width: 100px;	
		}

		section.trusted .container .fila .description img.original{
			width: auto;
		}

		section.meetsolutions{
			background: #f1f5ff;
			margin: 0;
			width: 100%;
			max-width: inherit;
			padding-top: 20px;
			padding-bottom: 45px;
		}		

		section.meetsolutions h3.titulo{
			color: #2e69f0;
			font-weight: 300;
			text-align: center;
			line-height: 42px;
		}		
		
		section.meetsolutions p.pitch{
			margin: 30px 9.5%;
    	text-align: center;
		}

		section.meetsolutions .cta{
    	text-align: center;
		}

		 section.meetsolutions .cta a:first-child{
    	background-color: #2e69f0;
		}
		
		section.meetsolutions .cta a:last-child{
			background-color: white;
			color:#2e69f0
		}


		section.meetsolutions div.productos{
			text-align:center; 
			padding-bottom: 30px;
		}

		section.meetsolutions div.productos img:first-child{
			width: 100px;
			margin: 0 4%;
		}

		section.meetsolutions div.productos img:last-child{
			width: 165px;
			margin: 0 4%;
		}		

		section.subscription{
			background-color: #2f69f0;
			color: white;
			padding: 40px 0%;
		}

		section.subscription div.titulo{
			font-size: 9px;
			width: 100%;
			display: inline-block;
			text-align: center;
		}		

		section.subscription div.titulo h1{
			color: white;
		}		
		
		section.subscription div.titulo p{
			width: 100%;
			font-size: 16px;
		}		

		section.subscription div.form{
			display: inline-block;
			vertical-align: top;
			text-align: center;
			margin-top: 20px;
			width: 100%;
		}

		section.subscription div.form input{
			border-radius: 5px;
			width: 83%;
			padding: 9px 9px 6px 15px;
			color:black;
			text-align: center;
		}

		section.subscription div.form button{
			background-color: #7ed322;
			border-radius: 5px;
			font-weight: bold;
			padding: 7px 32px;
			vertical-align: top;
			border: none;
			margin-top: 20px
	  }

		section.hero div.background{
			margin: 0;width: 100%;
			background-size: cover;
			height: 600px;background-repeat  t: no-repeat;
		}

		section.hero div.background figure{
			width: 100%;
			text-align: center;
			display: inline-block;
			margin-top: 120px;
			margin-left: 250px;
		}

			section.hero div.background h2{
			padding-top:120px;
			color: white;
			font-weight: bold;
			text-align: center;
			font-size: 65px;
		}

		div.oni{
			background: white;margin: 0;width: 100%;max-width: 1600px;
		}

		div.oni-down img{
			width: 45%; 
			margin-top:70px;
			display: none;
		}

		div.oni .card-body{
			margin-top:20px;
		}

		div.oni .card-body .oni-up{
			text-align: center;
    	background: #F6F6F6;
			padding: 20px;
			margin-bottom: 50px;
		}

		div.card-body .oni-up img{
			width: 45%; 
			margin-top:10px
		}

		div.oni .card-body .card-description{
			font-size: 24px;
		}

		div.oni .card-body .card-title{
			color: #2f69f0;
			font-size: 35px;
			font-weight: 300;
		}

		div.oni div.card-body div.iconos{
			width: 100%;
			margin: 0;
			margin-top: 35px;
			color: #2f69f0;
			margin-bottom: 35px;
		}

		div.oni div.card-body figure{
			display: inline-block;
    	margin-right: 25px;
    	vertical-align: top;
    	text-align: center;
    	padding: 10px 0;
    	width: 54px;
		}


		div.oni div.card-body figure img{
			width: 19px;
			height: initial;
		}

		div.oni div.card-body figure img.salinity{
			width: 40px;
		}

		div.oni div.card-body figure img.conductivity{
			width: 22px;
			height: initial;
		}

		div.oni div.card-body figure img.color{
			width: 40px;
			height: initial;
		}

		div.oni div.card-body figure img.oxygen{
			width: 45px;
			height: initial;
		}

		div.oni div.card-body figure img.orp{
			width: 44px;
			height: initial;
		}

		div.oni div.card-body figure img.chlorine{
			width: 45px;
			height: initial;
		}

		div.oni div.card-footer a{
			background-color: #2e69f0;
		}

		div.oni div.card-footer a:hover{
			background-color: black;
		}

		div.oni div.card-body figure p{
			font-size: 13px;
			margin-top: 12px;
		}

		section.casestudies{
			background: #F1F5FF;
			padding-bottom: 75px;
		}

		section.casestudies h2{
			text-align: center;
    	margin-bottom: 100px;
    	margin-top: 0;
    	padding-top: 60px;
    	color: #2E69F0;
    	font-weight: 300;
    	font-size: 40px;

		}

		section.casestudies div.articulo{
			padding-bottom: 80px;
			text-align: center;
		}

		section.casestudies div.articulo .datos{
			display: inline-block;
			width: 76%;
			vertical-align: top;
			margin-top: 20px;
		}

		section.casestudies div.articulo .datos a h3{
			margin: 0;
			margin-bottom: 20px;
			font-size:30px;
		}

		section.casestudies div.articulo figure{
			display: inline-block;
			vertical-align: top;
		}

		section.casestudies div.articulo img.portada{
			width: 300px;
			border-radius: 16px;
		}

		section.hero div.background figure {
			width: 100%;
			text-align: center;
			display: inline-block;
			margin-top: 120px;
			margin-left: 0px;
		}

}


@media only screen and (min-width: 650px) {
	section.completesystems div.icn {
    background-color: #2f69f0;
    width: 87%;
    display: inline-block;
    vertical-align: top;
    margin-left: 17%;
}

#inicio .marketing figure .humiditymetric {
    margin-left: 15%;
    width: 250px;
}

#inicio .marketing figure .temperaturemetric {
    margin-left: 15%;
    width: 250px;
}

#inicio .marketing figure.onihero img {
    width: 148px;
}

#inicio {
	margin: 0;
  background-position: -520px -735px;
  height: 654px;
  background-size: auto 1665px !important;
}
}

@media only screen and (min-width: 470px) {
	div.card-body .oni-up img {
    width: 20%;
    margin-top: 10px;
	}
}

@media only screen and (min-width: 976px) {
	section.subscription div.form input {
    border-radius: 5px;
    width: 90%;
    padding: 9px 9px 6px 15px;
    color: black;
    text-align: center;
}

#inicio .marketing figure .temperaturemetric {
    margin-left: 15%;
    width: 350px;
}

#inicio .marketing figure .humiditymetric {
    margin-left: 15%;
    width: 350px;
}

#inicio {
    margin: 0;
    background-position: -520px -735px;
    height: 754px;
    background-size: auto 1665px !important;
}

#inicio .marketing figure.onihero img {
    width: 199px;
}

	#inicio .marketing .copyprincipal h1 {
    font-size: 32px;
    text-align: center;
    margin-top: 0px;
	line-height: 49px;
	margin-left: 0%;
	}

}

@media only screen and (min-width: 992px) {

	div.att{
		margin-left: 17%;
	}

section.completesystems div.icn {
    background-color: #2f69f0;
    width: 87%;
    display: inline-block;
    vertical-align: top;
    margin: 0 21%;
}

section.meetsolutions div.productos {
		width: 38%;
    margin-top: 95px;
}

section.subscription div.form button {
    background-color: #7ed322;
    border-radius: 5px;
    font-weight: bold;
    padding: 10px 24px;
    vertical-align: top;
    border: none;
    margin-top: 0px;
    width: 17%;
}

section.subscription div.form input {
    border-radius: 5px;
    width: 29%;
    padding: 9px 9px 6px 15px;
    color: black;
    text-align: center;
}

	div.oni-up{
			display: none;
		}

	div.oni-down img {
    width: 77%;
    margin-top: 70px;
    display: block;
    margin-right: 0;
	}

	section.casestudies div.articulo .datos {
    display: inline-block;
    width: 46%;
    vertical-align: top;
    margin-left: 5%;
	text-align: left;
	margin-top: 0;
	}

	section.casestudies div.articulo {
    text-align:center;
	}




}

@media only screen and (min-width: 1200px) {
	#inicio .marketing figure .temperaturemetric {
    margin-left: 55%;
    width: 350px;
	}
	
	#inicio .marketing figure .humiditymetric {
    margin-left: 55%;
    width: 350px;
	}

	.cd-morph-dropdown .gallery .content{
		background: #f2f6fe;
	}

	.cd-morph-dropdown .gallery .content a em{
		font-size: 20px;
    	padding: .8em 0 .2em;
    	color: #1A1A1A;
    	font-style: normal;
	}

	#main-content{
		z-index: 0;
    	position: relative;
	}

	.cd-main-content {
    padding-top: 0px;
	}

	.cd-morph-dropdown{
		position: relative;
    	height: 80px;
    	left: 0;
    	top: 0;
    	width: 100%;
    	padding-left: 16%;
	}
	
	.cd-morph-dropdown.is-dropdown-visible .morph-dropdown-wrapper{
		z-index: 10;
	}
	

}

@media only screen and (min-width: 1440px) {

section.completesystems div.icn {
    background-color: #2f69f0;
    width: 64%;
    display: inline-block;
    vertical-align: top;
    margin: 0 27%;
}



}




</style>

