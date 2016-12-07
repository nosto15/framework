<!DOCTUPE html>
    <html>
        <head>
            <title><?php echo $title; ?></title>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="<?php echo $SERVER; ?>style/style.css" />
        </head>
			<body style="background-color: gray; ">
			<div class="glav" >
				<img src="<?php echo $SERVER; ?>images/fon1703.png" class = "header"/>
				<img src="<?php echo $SERVER; ?>images/logo-msxemel.png" class = "logo"/>
				<?php echo $menu; //MENU ?>
					<div style="margin-top:20%; margin-left:40%;class = "menu" >
						<div class="parag">
						<h2 class="in-parag">Статьи</h2>
						</div>
						<div ><?php echo $content_for_layout; ?></div>
					</div>
				<div class = "content">
				</div>
				<div class = "footer">
				</div>
			</div>
	</html>