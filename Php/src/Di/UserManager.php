<?php


namespace Php\Di;


class UserManager {

  /**
   * @var \Php\Di\Mailer
   */
  private $mailer;

  public function __construct(Mailer $mailer) {
    $this->mailer = $mailer;
  }

  public function register($email,$password) {
    return $this->mailer->mail($email,$password);
  }
}