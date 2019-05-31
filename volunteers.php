<html>

<head>
    <title>Be a volunteer LIVE</title>  

    <!-- *****Volunteer LIVE*********** -->
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<!-- **** -->


    



      <body>  




        <!-- /*/*/*/*/*/*//*/*/*/*/*//**/**/ VOLUNTEERS LIVE /*/*/*/*/*/*/*/*/*/*/*/*/**/*/*/**/*/*/*/*/*/* -->

           <div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                     <h2 align="center">Be a volunteer <br><strong>LIVE</strong><br><i><small>
                      Help the community</i></small>
                     </h2><br /> 
                     <h5 align="center"></h5> 

                    <!-- we will load data nën këtë tag duke përdorur kodin Ajax Jquery dhe do të përdorim atributin id si selektor në Jquery. -->
                     <div id="live_data"></div>

                </div>  
           </div>  
           
      </body>  
 </html>

 <script>  
 $(document).ready(function(){ 

  /* Pastaj, pas kryerjes së këtij funksioni jquery, i cili merr të dhënat (fetch data) nga tabela dhe konvertohet në formatin e tabelës dhe pastaj pas shfaqjes nën tagun div me atributin "id = live_data", nën këtë funksion përdor metodën Ajax për të marrë(fetch) të dhëna nga serveri dhe shfaqet në faqe. 
  Ky funksion dërgon kërkesë në vselect.php. */
      function fetch_data()  
      {  
           $.ajax({  
                url:"vselect.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var first_name = $('#first_name').text();  
           var last_name = $('#last_name').text();  
           if(first_name == '')  
           {  
                alert("Enter First Name");  
                return false;  
           }  
           if(last_name == '')  
           {  
                alert("Enter Last Name");  
                return false;  
           }  
           $.ajax({  
                url:"vinsert.php",  
                method:"POST",  
                data:{first_name:first_name, last_name:last_name},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"vedit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.first_name', function(){  
           var id = $(this).data("id1");  
           var first_name = $(this).text();  
           edit_data(id, first_name, "first_name");  
      });  
      $(document).on('blur', '.last_name', function(){  
           var id = $(this).data("id2");  
           var last_name = $(this).text();  
           edit_data(id,last_name, "last_name");  
      });  
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id3");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"vdelete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>


        <!-- /*/*/*/*/*/*//*/*/*/*/*//**/**/ END _ VOLUNTEERS LIVE /*/*/*/*/*/*/*/*/*/*/*/*/**/*/*/**/*/*/*/*/*/* -->

