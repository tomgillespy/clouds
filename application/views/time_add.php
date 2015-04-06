<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Submit Time</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url(); ?>assets/css/typeahead/typeaheadjs.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery Version 1.11.0 -->
    <script src="<?=base_url(); ?>assets/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url(); ?>assets/js/typeahead/typeahead.bundle.min.js"></script>

</head>
<body>

<div class="container">
<div class="row">
  <div class="col-xs-12">
    <h1>Add your time per project here:</h1>
  </div>
</div>
<div class="row">
  <form>
  <div class="col-xs-4">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control" id="namefield" />
      </div>
  </div>
  <div class="col-xs-4">
      <div class="form-group">
        <label>Project:</label>
        <input type="text" class="form-control" id="projectfield" />
      </div>
  </div>
  <div class="col-xs-2">
      <div class="form-group">
        <label>Time:</label>
        <div class="input-group">
          <input type="text" class="form-control" />
        <div class="input-group-addon">hours</div>
        </div>
      </div>
  </div>
  <div class="col-xs-2">
      <div class="form-group">
        <label>Total Time:</label>
        <p class="form-control-static">0.00 hours</p>
      </div>
  </div>
  </form>
</div>
<div class="row">
  <div class="col-xs-12">
    <button class="btn btn-lg btn-block btn-primary">Submit</button>
  </div>
</div>
</div>
<script type="text/javascript">
var employees = ['Tom Gillespy', 'Jamie Arnold', 'Corrina Tipton', 'Kerry Arnold'];
var nameengine = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    local: $.map(employees, function(name) { return { value: name};})
});

nameengine.initialize();

$('#namefield').typeahead({
    hint: true,
    highlight: true,
}, {
    name: 'employees',
    displayKey: 'value',
    source: nameengine.ttAdapter()
});

var projects = ['DPS Frankers', 'DPS020 - DPS Consumables', 'Easit', 'St Marys', 'Pura', 'BBO', 'Daiglen', 'Trade', 'Lessiters', 'TRI', 'St Albans School', 'Pre Contract', 'The Vine', 'Eduzone'];
var projectengine = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    local: $.map(projects, function(name) { return { value: name};})
});

projectengine.initialize();

$('#projectfield').typeahead({
    hint: true,
    highlight: true,
}, {
    name: 'projects',
    displayKey: 'value',
    source: projectengine.ttAdapter()
});
</script>




</body>
</html>
