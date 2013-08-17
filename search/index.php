<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>ค้นหา</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="docs/assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 0;
        padding-bottom: 30px;
      }
      .navbar {
        margin-top: 20px;
      }
    </style>
     <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="docs/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="docs/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="docs/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="docs/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="docs/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="docs/assets/ico/favicon.png">
  <link type="text/css" href="jquery/css/ui-lightness/jquery-ui-1.8.24.custom.css" rel="stylesheet" />
    <script type="text/javascript" src="jquery/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="jquery/js/jquery-ui-1.8.24.custom.min.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
</head>
<body>
  <div class="container">

      <form class="form-signin"   method="get" action="<?=$_SERVER['SCRIPT_NAME'];?>">
        <h2 class="form-signin-heading">ค้นหา</h2>
        <input name="txtKeyword" type="text"  value="<?=$_GET["txtKeyword"];?>" class="input-block-level" placeholder="ป้อน keyword" id="txtKeyword">
        <input type="submit" value="ค้นหา" class="btn btn-large btn-primary">
      </form>

     <center> <?
     if($_GET["txtKeyword"] != ""){
  $objConnect = mysql_connect("localhost","root","bymooy") or die("Error Connect to Database");
  $objDB = mysql_select_db("searchonweb");
  // Search By Name or Email
  $strSQL = "SELECT * FROM company WHERE (name LIKE '%".$_GET["txtKeyword"]."%' or website LIKE '%".$_GET["txtKeyword"]."%' )";
  $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
  ?>
  <table  class="table table-hover">
    <tr>
    <th >Name </th>
    <th> Nation1 </th>
    <th> Nation2</th>
    <th> Nation3</th>
    <th> Amount_movie</th>
    <th> Website</th>
    </tr>
  <?
  while($objResult = mysql_fetch_array($objQuery))
  {
  ?>
    <tr>
    <td><?=$objResult["name"];?></div></td>
    <td><?=$objResult["nation1"];?></td>
    <td><?=$objResult["nation2"];?></td>
    <td><?=$objResult["nation3"];?></div></td>
    <td><?=$objResult["amount_movie"];?></td>
    <td><?=$objResult["website"];?></td>
    </tr>
  <?
  }
  ?>
  </table>
  <?
  mysql_close($objConnect);
}
?></center>

    </div> <!-- /container -->
</script>
    <script src="docs/assets/js/bootstrap-transition.js"></script>
    <script src="docs/assets/js/bootstrap-alert.js"></script>
    <script src="docs/assets/js/bootstrap-modal.js"></script>
    <script src="docs/assets/js/bootstrap-dropdown.js"></script>
    <script src="docs/assets/js/bootstrap-scrollspy.js"></script>
    <script src="docs/assets/js/bootstrap-tab.js"></script>
    <script src="docs/assets/js/bootstrap-tooltip.js"></script>
    <script src="docs/assets/js/bootstrap-popover.js"></script>
    <script src="docs/assets/js/bootstrap-button.js"></script>
    <script src="docs/assets/js/bootstrap-collapse.js"></script>
    <script src="docs/assets/js/bootstrap-carousel.js"></script>
    <script src="docs/assets/js/bootstrap-typeahead.js"></script>
</body>
</html>