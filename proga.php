<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>111</title>
</head>
<body>
  <form action="" method="post">
<p>Введите логин: <input type="text" name="login"></p>
<p>Введите пароль: <input type="text" name="pass"></p>
<p>Введите имя предмета: <input type="text" name="name"></p>
<p>Введите: <input type="text" name="c"></p>
<p><input type="submit" name="ex" value="Считать"></p>
</form>
<?php
if(isset($_POST['ex']))
{
  interface tovar
  {
    function name();
    function price();
    function rating();
  }
  interface users
  {
    function login();
    function pass();
  }
  class stol implements tovar
  {
    function name()
    {
      return "Стол";
    }
    function price()
    {
      return "Цена: 2300";
    }
    function rating()
    {
      return "Рейтинг: 20";
    }
  }
  class stul implements tovar
  {
    function name()
    {
      return "Стул";
    }
    function price()
    {
      return "Цена: 2500";
    }
    function rating()
    {
      return "Рейтинг: 12";
    }
  }
  class sviter implements tovar
  {
    function name()
    {
       return "Свитер";
    }
    function price()
    {
       return "Цена: 3000";
    }
    function rating()
    {
       return "Рейтинг: 23";
    }
  }
  class bob implements users
  {
    public $login;
    public $pass;
    function __construct($name, $pass)
    {
      $this->login = $name;
      $this->pass = $pass;
    }
    function login()
    {
      return $_POST['login'];
    }
    function pass()
    {
      return $_POST['pass'];
    }
  }
  class tom implements users
  {
    public $login;
    public $pass;
    function __construct($name, $pass)
    {
      $this->login = $name;
      $this->pass = $pass;
    }
    function login()
    {
      return $_POST['login'];
    }
    function pass()
    {
      return $_POST['pass'];
    }
  }
  class igor implements users
  {
    public $login;
    public $pass;
    function __construct($name, $pass)
    {
      $this->login = $name;
      $this->pass = $pass;
    }
    function login()
    {
      return $_POST['login'];
    }
    function pass()
    {
      return $_POST['pass'];
    }
  }
  class uchet implements tovar,users
  {
    public $name;
    public $price;
    public $rating;
    public $login;
    public $pass;

    function __construct($login, $name, $price, $rating, $pass)
    {
      $this->name = $name;
      $this->price = $price;
      $this->rating = $rating;
      $this->login = $login;
      $this->pass = $pass;
    }
    function user()
    {
      echo "Покупающий пользователь: ".$this->login."<br>";
    }
    function name()
    {
      echo "Покупаемый предмет: ".$this->name."<br>";
    }
    function price()
    {
      echo "Цена: ".$this->price."<br>";
    }
    function rating()
    {
      echo "Рейтинг: ".$this->rating."<br>";
    }
    function login()
    {
      echo "Логин: ".$this->login."<br>";
    }
    function pass()
    {
      echo "Пароль: ".$this->pass;
    }

  }
  $stul = new stul();
  $stol = new stol();
  $sviter = new sviter();

  if($_POST['name'] == "стул")
  {
    $sdelka = new uchet($_POST['login'], $stul->name(), $stul->price(), $stul->rating(), $_POST['pass']);
    $sdelka->name(); $sdelka->price(); $sdelka->rating(); $sdelka->login(); $sdelka->pass();
  }
  if($_POST['name'] == "стол")
  {
    $sdelka = new uchet($_POST['login'], $stol->name(), $stol->price(), $stol->rating(), $_POST['pass']);
    $sdelka->user(); $sdelka->name(); $sdelka->price(); $sdelka->rating(); $sdelka->login(); $sdelka->pass();
  }
  if($_POST['name'] == "свитер")
  {
    $sdelka = new uchet($_POST['login'], $sviter->name(), $sviter->price(), $sviter->rating(), $_POST['pass']);
    $sdelka->name(); $sdelka->price(); $sdelka->rating(); $sdelka->login(); $sdelka->pass();
  }
  if($_POST['name'] != "стул" && $_POST['name'] != "стол" && $_POST['name'] != "свитер")
  {
    $sdelka = new uchet($_POST['login'], $stul->name(), $stul->price(), $stul->rating(), $_POST['pass']);
    $sdelka->name(); $sdelka->price(); $sdelka->rating(); $sdelka->login(); $sdelka->pass();
  }
}
?>
</body>
</html>