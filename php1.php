

       <?php 
      error_reporting(E_ALL & ~E_NOTICE );
      ini_set('display_errors',1);


    

           $conn= new mysqli("localhost","root","","motors");
           $conn1= new mysqli("localhost","root","","directions");


           if(isset($_POST['save'])){

        
            $motor1 = $_POST["motor1"];
            $motor2 = $_POST["motor2"];
            $motor3 = $_POST["motor3"];
            $motor4 = $_POST["motor4"];
            $motor5 = $_POST["motor5"];
            $motor6 = $_POST["motor6"];
          
   
                   $sql= $conn->prepare("INSERT INTO table1(motor1,motor2,motor3,motor4,motor5,motor6) 
                   values('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6')");
                    $sql->execute();
   
                       echo "sucessfully";
                    }
                   elseif(isset($_POST['run'])){

                    $sql= $conn->prepare("INSERT INTO table2(run) values('1') ");
                    $sql->execute();
                       echo "sucessfully";
                 

                     
                   }

                   elseif(isset($_POST['D_right'])){

                    $D_right = $_POST["D_right"];
        
                    $sql= $conn1->prepare("INSERT INTO table3(D_right) 
                    values('$D_right')");
                     $sql->execute();
        
                        echo "sucessfully";
                     }
                
                   
                           
                           elseif(isset($_POST['D_left'])){
        
                            $D_left = $_POST["D_left"];
        
                            $sql= $conn1->prepare("INSERT INTO table3(D_left) 
                            values('$D_left')");
                             $sql->execute();
                
                                echo "sucessfully";
                             }
        
                             elseif(isset($_POST['D_forward'])){
        
                                $D_forward = $_POST["D_forward"];
            
                                $sql= $conn1->prepare("INSERT INTO table3(D_forward) 
                                values('$D_forward')");
                                 $sql->execute();
                    
                                    echo "sucessfully";
                                 }
        
        
        
                                 elseif(isset($_POST['D_backward'])){
        
                                    $D_backward = $_POST["D_backward"];
                
                                    $sql= $conn1->prepare("INSERT INTO table3(D_backward) 
                                    values('$D_backward')");
                                     $sql->execute();
                        
                                        echo "sucessfully";
                                     }
        
                                     elseif(isset($_POST['D_stop'])){
        
                                        $D_stop = $_POST["D_stop"];
                    
                                        $sql= $conn1->prepare("INSERT INTO table3(D_stop) 
                                        values('$D_stop')");
                                         $sql->execute();
                            
                                            echo "sucessfully";
                                         }
          

         ?>