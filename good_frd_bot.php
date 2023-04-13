<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <title>My Page</title>
  <style>
    /* Center the elements */
    body {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	height: 100vh;
	margin-top: -98px;
}
    /* Style the circle image */
    .circle-img {
	width: 216px;
	height: 218px;
	border-radius: 48%;
	background-color: gray;
}
    .mb-5, .my-5 {
	margin-bottom: 17rem !important;
}

p {
	margin-top: -216px;
	margin-bottom: 1rem;
}

    .tost {
    display: none;
}
.btn-success {
	color: #fff;
	background-color: #28a745;
	border-color: #28a745;
	margin-top: 12px;
}
  </style>
</head>
<body>
    <div></div>
  <!-- Circle image -->
  
  <img class="circle-img mb-5" src="https://flowxo.com/wp-content/uploads/2021/03/Telegram-Logo-512x512.png" alt="">

  <div id="myStatus" class="alert tost alert-success" role="alert"></div>
  <!-- Button and h2 text -->
  <p style="color: blue; font-weight: bold; font-size: 26px;">@good_frd_bot</p>
 
    <button style="margin-bottom: 12px;" id="myButton" class="btn btn-primary">Bot Restart Now</button>
    
  
  <!-- Telegram chat button -->
  <a href="https://Telegram.me/Dev_Gaurav" class="btn btn-success">Chat With Bot Dev.</a>
  
</body>
  <!-- PHP code to handle the button click and API request -->
<?php
require_once('vendor/autoload.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') { // check if the request method is POST
  $client = new \GuzzleHttp\Client();
// idddddddddd
  $response = $client->request('POST', 'https://api.render.com/v1/services/srv-cgln62rhp8u2dv3q29vg/deploys', [
    'body' => '{"clearCache":"do_not_clear"}',
    'headers' => [
      'accept' => 'application/json',
      'authorization' => 'Bearer rnd_hgIsZaxSySmEXZD3orujoW26BcXq',
      'content-type' => 'application/json',
    ],
  ]);

  $status = json_decode($response->getBody())->status;
}
?>

<!-- JavaScript code to handle the button click and update the status element -->
<!-- JavaScript code to automatically submit the form -->
<script>
 document.getElementById('myButton').addEventListener('click', () => { // wait for the page to load before submitting the form
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = '<?php echo $_SERVER["PHP_SELF"]; ?>';
    document.body.appendChild(form);
    form.submit(); // automatically submit the form
  });

  <?php if(isset($status)): ?>
    document.getElementById('myStatus').classList.add("display: block;");
    document.getElementById('myStatus').textContent = '<?php $newstatus = str_replace("_", " ", $status); echo $newstatus . " Wait 2 minutes bot is restarting"; ?>';
  <?php endif; ?>
</script>


</html>
