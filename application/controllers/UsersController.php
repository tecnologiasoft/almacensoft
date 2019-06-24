<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Users_model');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);
        //var_dump($this->language);

        /*$this->config->set_item('language', $this->language);
        $this->lang->load('rest_controller',$this->language);
        $this->session->set_userdata('site_lang', $this->language);*/

	}

	public function index()
	{

	}

	public function login()
	{
		$data['title']= 'Login Usuario';
        $data['main_content'] = 'Admin/login/login_view';
        $this->load->view('includes/template_login', $data);
	}

    public function login_validate()
    {
         if (!$this->input->is_ajax_request())
        {
            redirect('404');
        }else

        {
           //echo "hola";
            /*$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');*/
            $this->form_validation->set_rules('username', 'Nombre Usuario', 'trim|required');
            $this->form_validation->set_rules('password', 'La Contraseña es ', 'trim|required');
            $this->form_validation->set_rules('company_id', 'La compañia es ', 'trim|required');

            $this->form_validation->set_message('required', 'El Campo %s es Requerido');


            if ($this->form_validation->run()== false)
            {
                echo json_encode(array('st'=>0, 'msg' => '</*div*/ class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><small>'.  validation_errors().'</small></div>'));
            }

            else
            {
                $datos = array(
                    'username' => $this->input->post('username'),
                    'password' =>$this->input->post('password'),
                    'company_id' =>$this->input->post('company_id')
                  );

        //  return print_r($datos);

               $conectado = $this->Users_model->validar_usuario($datos);

              // var_dump(isset($conectado));exit;
               if (isset($conectado)) {


               	echo json_encode(array('st'=>1, 'msg' => '<div class="alert alert-dismissable alert-success">Gracias!,Bienvenido </div>', 'url' => base_url('customer')));
               }else{

               	echo json_encode(array('st'=>0, 'msg' => '<div class="alert alert-dismissable alert-danger">Usuario o Clave Incorrecto </div>'));

               }

            }
        }
    }


    function cerrar_sesion() {
        $this->session->sess_destroy();
        redirect('/');
    }

}

/* End of file UsersController.php */
/* Location: ./application/controllers/UsersController.php */