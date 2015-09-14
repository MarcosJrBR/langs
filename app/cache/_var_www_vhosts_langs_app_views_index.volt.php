<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
    <head>
        
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
          <!-- <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script> -->
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <title>Langs</title>

          <!-- <?php if ($this->session->get('lang') == null) { ?>
            <script type="text/javascript">
              if(geoplugin_countryCode() == 'BR')
              {
                window.location="language=pt";
              }
              else
                window.location="/en/";
            </script>
          <?php } else { ?>

          <?php } ?> -->

        
    </head>
    <body>
      
        <?php echo $this->getContent(); ?>
      
    </body>
</html>
