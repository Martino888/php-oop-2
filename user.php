<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->
<?php
class User
{
  protected $id;
  protected $name;
  protected $surname;

  public function __construct(int $id,  string $name, string $surname)
  {
    $this->id = $id;
    $this->name = $name;
    $this->surname = $surname;
  }
  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of surname
   */
  public function getSurname()
  {
    return $this->surname;
  }

  /**
   * Set the value of surname
   *
   * @return  self
   */
  public function setSurname($surname)
  {
    $this->surname = $surname;

    return $this;
  }
}

class Login extends User
{
  protected $login = true;
  protected $username ;
  protected $email;
  protected $password;

  public function __construct( string $username, $email,  $password){
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
  }



  /**
   * Get the value of login
   */
  public function getLogin()
  {
    return $this->login;
  }

  /**
   * Set the value of login
   *
   * @return  self
   */
  public function setLogin($login)
  {
    $this->login = $login;

    return $this;
  }

  /**
   * Get the value of username
   */
  public function getUsername()
  {
    return $this->username;
  }

  /**
   * Set the value of username
   *
   * @return  self
   */
  public function setUsername($username)
  {
    $this->username = $username;

    return $this;
  }

  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of password
   */
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set the value of password
   *
   * @return  self
   */
  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }
}

$user = new User(1, 'Mario', 'Rossi');
$login = new Login ('Mario88', 'mariorossi88@gmail.com', 616161);

// var_dump($user);


// var_dump($login);
