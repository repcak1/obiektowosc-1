 <?php 
 class strawberry extends fruit {
    public function message() {
        echo " am i a fruit or a berry";
    }
  }

  $strawberry = new strawberry("strawberry","red");
  $strawberry->message();
  $strawberry->intro();