<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>CI3 HMVC Starter</title>

	<style>
		::selection {
			background-color: #ff5722;
			color: white;
		}

		body {
			background: #f5f6fa;
			margin: 40px;
			font: 14px/22px "Segoe UI", Arial, sans-serif;
			color: #444;
		}

		h1 {
			font-size: 26px;
			margin-bottom: 10px;
		}

		h2 {
			font-size: 18px;
			color: #666;
			margin-top: 0;
		}

		#container {
			max-width: 800px;
			margin: auto;
			background: #fff;
			border-radius: 6px;
			box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
			padding: 30px;
		}

		.badge {
			display: inline-block;
			background: #ff5722;
			color: white;
			padding: 4px 10px;
			border-radius: 4px;
			font-size: 12px;
			margin-left: 8px;
		}

		code {
			display: block;
			background: #f3f3f3;
			padding: 10px;
			border-radius: 4px;
			margin: 10px 0;
			font-family: Consolas, monospace;
		}

		ul {
			padding-left: 20px;
		}

		.footer {
			margin-top: 30px;
			font-size: 12px;
			color: #777;
			border-top: 1px solid #eee;
			padding-top: 15px;
		}

		a {
			color: #ff5722;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}
	</style>
</head>

<body>

	<div id="container">

		<h1>🚀 CI3 HMVC Starter</h1>
		<h2>CodeIgniter 3 + HMVC Boilerplate <span class="badge">PHP 8 Ready</span></h2>

		<p>
			This project is a starter boilerplate for building modular applications using
			<strong>CodeIgniter 3</strong> with <strong>HMVC architecture</strong>.
		</p>

		<h3>Project Structure</h3>

		<code>
			application/modules/
		</code>

		<p>
			Each module should contain:
		</p>

		<code>
			modules/
			├ blog
			│ ├ controllers
			│ ├ models
			│ └ views
		</code>

		<h3>Default Controller</h3>

		<p>Edit this file to modify this page:</p>

		<code>
			application/views/welcome_message.php
		</code>

		<p>Controller location:</p>

		<code>
			application/controllers/Welcome.php
		</code>

		<div class="footer">

			PHP Version <strong><?php echo phpversion(); ?></strong> |
			Page rendered in <strong>{elapsed_time}</strong> seconds
			<br>

			<?php
			if (ENVIRONMENT === 'development') {
				echo 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>';
			}
			?>

		</div>

	</div>

</body>

</html>