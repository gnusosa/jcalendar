<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index(){

		$db_users = array();
		$this->db->select('user,color,text_color',false);
		$query= $this->db->get('users');
		if($query->num_rows()>0){
			$db_users = $query->result();
		}
		$query->free_result();

		$data["title"]= "FullCalendar Prueba";
		$data["db_users"] = $db_users; 
		$this->load->view('welcome_message',$data);
	}

	public function get_schedule_db($user = null){
		$result = $this->schedule_model->get_schedule($user);
		$count = count($result);
		if($count>0){
			$data = str_replace('"false"', 'false', json_encode($result));
			$data = str_replace('"true"', 'true', $data);
			echo $data; 
		}
	}
	public function update_schedule(){

        $data=array();
		$schedule_id = $this->input->post('schedule_id');
	    $dayDelta = $this->input->post('dayDelta');
	    $minuteDelta = $this->input->post('minuteDelta');
	    $type = $this->input->post('type');

        if($this->input->post('allday')){
			if($this->input->post('allday') == true){
			$data['allday'] = "true";
			} else { $data['allday'] = "false"; }
		}
		

		$result = $this->schedule_model->get_schedule_id($schedule_id);
		$count = count($result);
		if($count>0)
		{
			$date_end = explode(" ",date('Y-m-d H:i:s',strtotime(''.$dayDelta.' days '.$minuteDelta.' minutes',strtotime($result[0]->end))));
			$date_start = explode(" ",date('Y-m-d H:i:s',strtotime(''.$dayDelta.' days '.$minuteDelta.' minutes',strtotime($result[0]->start))));

			$data['date_end'] = $date_end[0];
			$data['time_end'] = $date_end[1];

			if($type === "drop"){
				$data['time_start'] = $date_start[1];
				$data['date_start'] = $date_start[0];
			}

        }
		$result = $this->schedule_model->update_schedule($data,$schedule_id);
		$count = count($data);
		if($count>0){
			echo $result;
		}
	}


}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
