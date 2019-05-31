<?php  
 $connect = mysqli_connect("localhost", "root", "1234", "ecoschools");  
 $output = '';  
 $sql = "SELECT * FROM volunteers ORDER BY id DESC";  

 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">Id</th>  
                     <th width="42%">First Name</th>  
                     <th width="42%">Last Name</th>  
                     <th width="11%">Delete</th>  
                </tr>';  

//  fetch_data () funksion jquery dërgon kërkesë në këtë faqe, dhe në këtë faqe ajo do të shkoj të marr të dhëna nga tabela dhe pastaj konvertojë ato të dhëna në formatin e tabelës HTML dhe ktheje në funksion fetch_data ().

 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  



// Nen WHILE loop kemi të ruajtura te dhënat në formatin e tabelës, në tagun e parë <td> do të ruajë id, në atributin e tagut së dytë dhe të tretë <td> ne kemi përcaktuar klasën, në të dytën class = "first_name" dhe  e treta class = "last_name". Do te perdorim kete klasë atributesh ne kodin jquery per editim live ose update te te dhenave te tabeles.
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="first_name" data-id1="'.$row["id"].'" contenteditable>'.$row["first_name"].'</td>  
                     <td class="last_name" data-id2="'.$row["id"].'" contenteditable>'.$row["last_name"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="first_name" contenteditable></td>  
                <td id="last_name" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>