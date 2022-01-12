<!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

       <title>PEBCO Instruction Form</title>
       <style>
        *{
           margin:0; padding:0;
           font-family:'Baloo Paaji 2',cursive;    
           }
       </style>
   </head>
   <body>
       <div class="container">
         <h4 class="text-capitalize text-center my-5">Please select the DRUGS and DOSAGES FORMS to continue.</h4>
         <div class="row">
             <div class="row">
                  <div class="col-lg-6 offset-lg-3">
                      <form>
                          <div class="form-content">
                              <div class="input-group mb-3">
                                  <div class="input-group-prpend">
                                      <span class="input-group-text" id="basic-addon1">DRUGS</span>
                                   </div>
                                   <select class="form-control" aria-describedby="basic-addon1" data-toggle="tooltip"
                                   title="please select your DRUG" onchange="mylang(this.value)">
                                   <option>Select Here </option>
                                   <option>Amoxicillin </option>
                                   <option> Omeprazole</option>
                                   <option>FentanylPatch </option>
                                   <option>NaloxoneInjection </option>
                                   </select>
                                </div>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon2">DOSAGES FORMS</span>
                                   </div>
                                   <select class="form-control" id="framewroklist" aria-describedby="basic-addon1">
                                       <option> Select Here</option>
                                 </select>
                                      
                              </div>
                              </div>
        </form>
       </div>
        </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script>
            function mylang(data){
                alert(data);
                
                const ajaxreq = new XMLHttpRequest();
                ajaxreq.open('GET','http://localhost/pebco%20instruction%20form/getdata.php?selectvalue='+data,'TRUE');
            ajaxreq.send();
            ajaxreq.onreadystatechange= function(){
                if(ajaxreq.readystate==4 && ajaxreq.status == 200){
                   document.getElementById('framewroklist').
                   innerHTML = ajaxreq.responseText;   
                }
            }
            }
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        })
        </script>
   </body>
   </html>
