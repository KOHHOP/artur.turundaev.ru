<html lang="en"> <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/first.time.css"/>
</head>
<body class="bg-dark">
<div class="container">
<?php
$codeRowArr = [
['text' => 'initialisation dependens', 'status' => 'OK', 'time' => '0.5'],
['text' => 'creating system views', 'status' => 'OK', 'time' => '0.5'],
['text' => 'creating dictionaries', 'status' => 'OK', 'time' => '0.5'],
['text' => 'creating information schema', 'status' => 'OK', 'time' => '0.5'],
['text' => 'sending personal data to govnerment of Russion Federation', 'status' => 'OK', 'time' => '0.5'],
['text' => 'purchasing matreshka, balalaika, vodka', 'status' => 'OK', 'time' => '0.5']
];
 ?>
<?php
$html ='';
foreach($codeRowArr as $row){
$html .= sprintf('
<div time="%s" class="row code text-white d-none">
    <div class="col-10">%s</div>
    <div class="col-2 text-success">%s</div>
</div>', $row['time'], $row['text'], $row['status']);
}
echo $html;
?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/first.time.js"></script>
</body> </html>