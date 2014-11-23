<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function index()
	{
		$this->output->enable_profiler(TRUE);
		$this->load->model('Course');
		$view_data['courses'] = $this->Course->get_all_courses();
		$this->load->view('addcourse',$view_data);

	}

		public function show($id)
    {   
      $this->output->enable_profiler(TRUE); //enables the profiler
      $this->load->model("Course"); //loads the model
      $course = $this->Course->get_course_by_id($id);  //calls the get_course_by_id method
      var_dump($course);
    }
    
    public function add()
    {
      $this->load->model("Course");
      if(!empty($this->input->post('name')) && strlen($this->input->post('name'))>15)
      {
	      $course_details = array(
          "title" => $this->input->post('name'),
          "description" => $this->input->post('description')
	      ); 
	      $add_course = $this->Course->add_course($course_details);
	       if($add_course === TRUE)
        redirect('/');
    	}
    	else
    	{
    		redirect('/courses/index');
    		die();
    	}
    }

    public function destroy($number)
    {
    	// $this->load->view('destroy');
 			$this->load->model("Course");
 			
 			// if($this->input->post('delete') == 'yes')
 			// {
				$this->Course->destroy($number);
				redirect('/');
 			// }
    }

}

