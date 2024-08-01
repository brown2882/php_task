


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style={background-color:dark;}>
        <?php
        // require_once "dbh.inc.php";

        // if (isset($_POST['submit_button'])) {
        //     $query = "SELECT  * FROM  comments ";

        //     $stmt = $pdo->prepare($query);

            
        //     $stmt->execute();
            
        //     $stmt = $stmt->fetchAll();
            
    
    
    
        //     echo "<pre>";
            
        //     var_dump($stmt);
        //     echo "</pre>";
        // };
            ?>
       
     <?php
         if (!isset ($_GET['page']) ) { 
                     $page_number = 1;      
            } else {     
                 $page_number = $_GET['page'];    
              } 

            //    variable to store the number of rows per page
               $limit = 5;    
                //   get the initial page number    
                   $initial_page = ($page_number-1) * $limit; 

                  //  var_dump($initial_page)


                


            
     ?>
    <?php      $dsn = mysqli_connect('localhost', 'root', '');      
    // root is the default username     
    // ' ' is the default password   
     if (! $dsn) {               die("Connection failed" . mysqli_connect_error());      }      else {            
           // connect to the database named Pagination         
               mysqli_select_db($dsn, 'lesson');      }     
                // variable to store number of rows per page   
                 $limit = 5;     
                  // query to retrieve all rows from the table Countries  
                    $getQuery = "select *from users";       
                     // get the result   
                      $result = mysqli_query($dsn, $getQuery);     
                      $total_rows = mysqli_num_rows($result);     
                         // get the required number of pages  
                           $total_pages = ceil ($total_rows / $limit);    
                               // update the active page number    
                               if (!isset ($_GET['page']) ) {          $page_number = 1;      } else {          $page_number = $_GET['page'];      }      
                                 // get the initial page number  
                                   $initial_page = ($page_number-1) * $limit;      
                                    // get data of selected rows per page      
                                      $getQuery = "SELECT *FROM users LIMIT " . $initial_page . ',' . $limit;      $result = mysqli_query($dsn, $getQuery);          
                                       //display the retrieved result on the webpage     
                                        while ($row = mysqli_fetch_array($result)) {          echo $row['id'] . ' ' . $row['username'] . ' ' . $row['email'] . '</br>';      }       
                                         // show page number with link      
                                          for($page_number = 1; $page_number<= $total_pages; $page_number++) {          echo '<a href = "commentShow.php?page=' . $page_number . '">' . $page_number . ' </a>';      }    ?> 
                                        


    
   
   

</body>
</html>
