composer require pusher/pusher-php-server
<?php 
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
  "4067e9b6c02c788c8de5",
  "1ec9a528cf9e5ba73a26",
  "1437308",
  array('cluster' => 'ap2')
);

$data['message'] = 'Hi Nitesh ';
$res = $pusher->trigger('my-channel', 'my-event', $data);

echo "<pre>";print_r($res);


?>
<script src="https://js.pusher.com/7.1/pusher.min.js"></script>
 <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('4067e9b6c02c788c8de5', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>