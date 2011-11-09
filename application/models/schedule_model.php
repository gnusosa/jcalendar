<?php
class schedule_model extends CI_Model {

   function get_schedule($user = null)
   {

	   $data = array();
	   $this->db->select('idschedule as id,schedule_name as title,concat_ws(" ",date_start,time_start) as start,concat_ws(" ",date_end,time_end) as end, allday as allDay',false)->from('schedule')->where('user',$user);

	   $query = $this->db->get();
	   if($query->num_rows()>0){
		   $data = $query->result();
	   }

	   $query->free_result();
	   return $data;

   }

   function get_schedule_id($id = null)
   {

	   $data = array();
	   $this->db->select('schedule_name as title,concat_ws(" ",date_start,time_start) as start,concat_ws(" ",date_end,time_end) as end, allday as allDay',false)->from('schedule')->where('idschedule',$id);

	   $query = $this->db->get();
	   if($query->num_rows()>0){
		   $data = $query->result();
	   }

	   $query->free_result();
	   return $data;

   }
   
   function update_schedule($db_schedule,$id)
   {
	   $this->db->update('schedule',$db_schedule,"idschedule = $id");

	   $query = $this->db->get();
	   if($query->num_rows()>0){
		   $data = $query->result();
	   }

	   $query->free_result();
	   return $data;

   }

}
?>

