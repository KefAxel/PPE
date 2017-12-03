<html>
    <head>
        <title>Medicament</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctionsJS.js"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.6/sweetalert2.all.js"></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
         <script type="text/javascript">
       
        </script>
        
    </head>
    <body>
        <form>
            <input type="text" id ="username" required placeholder="Username"/>
            <br>
            <input type="password" id ="password" required placeholder="Password"/>
            <br>
            <button onclick="validation();">Login</button>
</form>
        <script type="text/javascript">
            function validation(){
                var username ='axel';
                var password='1234';
                
                var username = document.getElementById('username').value;
                var password = document.getElementById('password').value;
                
                if((username == userName) && (password == passWord)){
                    swal(
  'Good job!',
  'You clicked the button!',
  'success'
);

                }
                else{
                    sweetAlert("0ops..");
                }
                }
            
    
    </script>
    </body>
    
</html>