<?php
defined('IN_JAE') or exit('No permission resources.');

jae_base::load_sys_class('model', '', 0);
class prize_set_model extends model {
	public function __construct() {
		$this->db_config = jae_base::load_config('database');
		$this->db_setting = 'default';
		$this->table_name ='prize_set'; 
		parent::__construct();	
	}
}

?>