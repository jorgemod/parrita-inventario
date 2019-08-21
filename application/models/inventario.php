<?php
class Post extends CI_Model
{

  public function get_data()
  {
    $this->db->get('inventario');
  }
}

?>
