<?php
   require_once 'vendor/autoload.php';
    use App\classes\StringCount;
//    use App\classes\Student;
//    Student::addition();
  if( isset($_POST['btn'])){

     // $stringCount = new App\classes\StringCount();
//      $result1 = $stringCount->calculateStringLen($_POST);
//      $result2 = $stringCount->calculateStringChar($_POST);
        $result = StringCount::calculateString($_POST);
  }


?>

    <form action=" " method="post">
        <table>
           <tr>
               <th>Enter String:</th>
               <td><input type="text" name="given_string" size="30" value="<?php
                    if(isset($_POST['given_string'])){
                       echo ($_POST['given_string']);
                    }?>"></td>
           </tr>
            <tr>
               <th>Total Number Of Word:</th>
               <td><input type="text" name="total_word" value="<?php
                    if(isset($result['total_word'])){
                        echo $result['total_word'];
                    }
                   ?>"></td>
            </tr>
               <th>Total Number Of Character:</th>
               <td><input type="text" name="total_char" value="<?php
                     if( isset($result['total_char'])){
                         echo  $result['total_char'];
                     }
                   ?>"

                   ></td>
           </tr>
            <tr>
               <td></td>
               <td><input type="submit" name="btn" value="Submit"/></td>
           </tr>

        </table>
    </form>
