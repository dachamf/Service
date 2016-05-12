<?php


class Person {

  private $_name;
  private $_age;

  /**
   * @return mixed
   */
  public function getName() {
    return $this->_name;
  }

  /**
   * @param mixed $name
   */
  public function setName($name) {
    $this->_name = $name;
  }

  /**
   * @return mixed
   */
  public function getAge() {
    return $this->_age;
  }

  /**
   * @param mixed $age
   */
  public function setAge($age) {
    $this->_age = $age;
  }

  public function __construct($name, $age) {
    $this->_name = $name;
    $this->_age = $age;
  }
}