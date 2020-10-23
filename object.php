  <?php
// make a class for user
  class User {
//make variables for the user informations
  public $name;
  public $lastname;
  public $username;
  public $age;
  public $email;
  public $password;
  public $discount = 0;
//make a function to set the discount the discount
    public function setDiscount($age) {
        if($age > 65) {
            $this->discount = 20;
        }
    }
//make a function construct to take other specific data about the user
    function __construct($username, $password) {
       $this->username = $username;
       $this->password = $password;
   }
  }
//make instance and attributes for user1
  $user1 = new User("Dom92", "Capalbo");
  $user1->name = "Domenico";
  $user1->lastname = "Capalbo";
  $user1->age = 28;
  $user1->email = "capalbodomenico@gmail.com";
//invoke the discount function for user1
  $user1->setDiscount($user1 ->age);

//make instance and attributes for user2
  $user2 = new User("Robocop92", "Bianconi");
  $user2->name = "Roberto";
  $user2->lastname = "Bianconi";
  $user2->age = 70;
  $user2->email = "roberto.bianconi92@gmail.com";
//invoke the discount functionf for user2
  $user2->setDiscount($user2 ->age);

  $users = [$user1, $user2];

?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
     <link rel="stylesheet" href="css/style.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <title>object-oriented-programming</title>
    </head>
    <!-- start body -->
    <body>
     <div>
       <table>
        <thead>
         <tr>
          <th>Name</th>
          <th>Lastname</th>
          <th>username</th>
          <th>age</th>
          <th>email</th>
          <th>Password</th>
          <th>Discount</th>
         </tr>
        </thead>
      <tbody>
        <!-- //make a foreach cicle to get inside the users array -->
       <?php foreach($users as $user): ?>
        <tr>
         <td><?php echo $user->name ?></td>
         <td><?php echo $user->lastname ?></td>
         <td><?php echo $user->username ?></td>
         <td><?php echo $user->age ?></td>
         <td><?php echo $user->email ?></td>
         <td><?php echo $user->password ?></td>
         <td><?php echo $user->discount ?></td>
        </tr>
       <?php endforeach ?>
       <!-- end foreach -->
     </tbody>
    </table>
     </div>
    </body>
    <!-- end body -->
  </html>
