<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Reset</title>
    
</head> -->
<body style="font-family: 'Source Sans Pro', sans-serif; padding:0; margin:0;">
    <table style="max-width: 750px; margin: 0px auto; width: 100% ! important; background: #F3F3F3; padding:30px 30px 30px 30px;" width="100% !important" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td style="text-align: center; background: #fff;">
                <table width="100%" border="0" cellpadding="30" cellspacing="0">    
                    <tr>
                        <td>
                            <img style="max-width: 125px; width: 100%;padding: 10px;"  src="<?php echo base_url(); ?>backend_assets/img/logo.png" >
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        
        <tr>
            <td style="text-align: center;">
                <table width="100%" border="0" cellpadding="30" cellspacing="0" bgcolor="#fff">
                    <tr>
                        <td>

                            <h3 style="color: #333; font-size: 28px; font-weight: normal; margin: 0; text-transform: capitalize;"><?= lang('forgot_password_title'); ?></h3>
                            <p style="text-align: left; color: #333; font-size: 16px; line-height: 28px;"><?= lang('Hello'); ?>, <?php echo $full_name; ?></p>
                            <p style="text-align: left;color: #333; font-size: 16px; line-height: 28px;"><?= lang('forgot_title_msg');?></p>
                            <table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                          <td align="center">
                            <!-- Border based button
                       https://litmus.com/blog/a-guide-to-bulletproof-buttons-in-email-design -->
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="center">
                                  <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td>
                                        <a style="border: 10px #dd4b39 solid;background:#dd4b39;color: white;text-decoration: none;" class="button button--green" href="<?php echo $url; ?>"><?= lang('forgot_password_title'); ?></a>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                            
                            <p style="text-align: left;color: #333; font-size: 16px; line-height: 28px;"><?= lang('forgot_title_msg_more');?></p>  

                            <p style="text-align: left;color: #333; font-size: 16px; line-height: 28px;"><?= lang('Thanks');?>,<br><?php echo SITE_NAME; ?> team</p>  
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#fff">
                    <tr>
                        <td style="padding: 10px;background: #23c466;color: #fff;"><?php echo SITE_NAME; ?> &copy; <?php echo date('Y'); ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
<!-- </html> -->