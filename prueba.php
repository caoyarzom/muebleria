<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
        <script src="jquery.bxSlider/jquery.bxSlider/jquery.bxSlider.min.js" type="text/javascript"> </script>
        <link rel="stylesheet" href="jquery.bxSlider/jquery.bxSlider/bx_styles/bx_styles.css" type="text/css"/>
        <link rel="stylesheet" href="css/styles-own.css" type="text/css"/>
        <script src="http://bxslider.com/sites/default/files/jquery.bxSlider.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
              
                    $('#slider2').bxSlider({
                        auto: true,
                        autoControls: true,
                        controls:true,
//                        mode: 'vertical',
                        pager:true
                    
                    });
                	
              
                });
        </script>
        
    </head>
    <body>
        <div id="slider2">
            <div>
                <img src="images/img_muebles/m_g_1.jpg"/>
            </div>
            <div>
                <img src="images/img_muebles/m_g_2.jpg"/>
            </div>
            <div>
                <img src="images/img_muebles/m_g_3.jpg"/>
            </div>
            <div>
                <img src="images/img_muebles/m_g_7.jpg"/>
            </div>
        </div>
    </body>
</html>
