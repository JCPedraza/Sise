<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//ciddet2016
class sise extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('sise_model');
	}
		//-----Vistas-----------------
			
			//juan carlos

				#formulario de login(publico)
					public function index(){
						$this->load->library('form_validation');
						$this->load->helper(array('form', 'url'));

						$this->form_validation->set_error_delimiters('<div class="alert alert-danger">
						  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  <strong>Alerta </strong>','</div>');
						$this->form_validation->set_rules('usuario','Correo electrónico', 'required|min_length[10]|max_length[50]|valid_email');
						$this->form_validation->set_rules('contrasena', 'Contraseña','required|min_length[4]|max_length[25]');

						if($this->form_validation->run()==FALSE){
							if($this->input->get('error'))
								$data['error'] = $this->input->get('error');
							else
								$data['error'] = false;

							$this->load->view('templates/registro/header');
							$this->load->view('templates/registro/login');
							$this->load->view('templates/registro/footer');
						}else{
							$this->ingresar();
						}
					}
				#fin formulario de login(publico)

				#panel index
					public function panel(){

						$this->sise_model->valida_sesion();
						
						$this->sise_model->Estar_aqui();
						$data['sesion'] = $this->sise_model->datos_sesion();
						$data['menu'] = $this->sise_model->datos_menu();

							$this->load->view('templates/panel/header',$data);
							$this->load->view('templates/panel/menu',$data);
							$this->load->view('templates/panel/principal');
							$this->load->view('templates/panel/footer');
					}	
				#fin panel index

				#registro de aspirantes (públicos)
					public function registro_aspirante(){
						$this->load->library('form_validation');
						$this->load->helper(array('form', 'url'));

						$this->load->view('templates/registro/header');
						$this->load->view('templates/registro/registro');
						$this->load->view('templates/registro/footer');
					}
				#fin registro de aspirantes (públicos)

				#muestra los aspirantes registrados
					public function aspirantes(){
						$this->sise_model->valida_sesion();
						
						$this->sise_model->Estar_aqui();
						$data['sesion'] = $this->sise_model->datos_sesion();
						$data['menu'] = $this->sise_model->datos_menu();
						$data['aspirante'] = $this->sise_model->devuelve_aspirantes();

						$this->load->view('templates/panel/header',$data);
						$this->load->view('templates/panel/menu',$data);
						$this->load->view('templates/panel/aspirante',$data);
						$this->load->view('templates/panel/footer');
					}
				#fin muestra los aspirantes registrados

				#formulario para la edición de los datos de aspirantes
					
				#fin formulario para la edición de los datos de aspirantes
				#Mustra los privilegios que existen
					public function privilegios()
					{
						$this->sise_model->valida_sesion();
						
						$this->sise_model->Estar_aqui();
						$data['sesion'] = $this->sise_model->datos_sesion();
						$data['menu'] = $this->sise_model->datos_menu();
						$data['privilegio']=$this->sise_model->devuelve_privilegio();

						$this->load->view('templates/panel/header',$data);
						$this->load->view('templates/panel/menu',$data);
						$this->load->view('templates/panel/privilegio',$data);
						$this->load->view('templates/panel/footer');

					}
				#Fin de los privilegios
				#Muetsra las secciones que existen
					public function secciones()
					{
						$this->sise_model->valida_sesion();
						
						$this->sise_model->Estar_aqui();
						$data['sesion'] = $this->sise_model->datos_sesion();
						$data['menu'] = $this->sise_model->datos_menu();
						$data['seccion']=$this->sise_model->devuelve_seccion();

						$this->load->view('templates/panel/header',$data);
						$this->load->view('templates/panel/menu',$data);
						$this->load->view('templates/panel/seccion',$data);
						$this->load->view('templates/panel/footer');

					}
				#Fin de las secciones
				#mustea algo
					public function nuevo_privilegio()
					{
						$this->sise_model->valida_sesion();
						$this->load->library('form_validation');
						$this->load->helper(array('form', 'url'));

						$data['sesion'] = $this->sise_model->datos_sesion();
						$data['menu'] = $this->sise_model->datos_menu();

						$this->load->view('templates/panel/header',$data);
						$this->load->view('templates/panel/menu',$data);
						$this->load->view('templates/panel/nuevo_privilegio');
						$this->load->view('templates/panel/footer');
					}
				#fin de allgo
			//joan alonso
					#
						public function mostrar_tipos_documento(){
							$data['sesion'] = $this->sise_model->datos_sesion();
							$data['menu'] = $this->sise_model->datos_menu();
							$data['documentos'] = $this->sise_model->devolver_tipo_archivos();
							$this->load->view('templates/panel/header',$data);
							$this->load->view('templates/panel/menu',$data);
							$this->load->view('templates/panel/panel_tipos_documentos',$data);
							$this->load->view('templates/panel/footer');
						}
					#

					#
						public function registrar_tipos_documentos(){
							$this->load->view('pruebas/formulario_tipo_documento');
						}
					#

					#
						public function editar_tipo_documento(){
							$this->load->helper('form','url');
							$data['sesion'] = $this->sise_model->datos_sesion();
							$data['menu'] = $this->sise_model->datos_menu();
							$id = $this->uri->segment(3);
							if (!empty($id)) {
								$data['info']=$this->sise_model->devolver_info_tipo_archivos($id);
								$this->load->view('templates/panel/header',$data);
								$this->load->view('templates/panel/menu',$data);
								$this->load->view('templates/panel/editar_tip_doc',$data);
								$this->load->view('templates/panel/footer');
							}else{
								header('location:'.base_url('sise/').'');
							}
						}
					#

					#el que sube los archivos
						public function pruebas(){
							$data['documentos'] = $this->sise_model->devolver_tipo_archivos_activos();#devolucion de la consulta
							#var_dump($data);
							#die();
							$this->load->view('pruebas/ejemplo',$data);
						}
					#el que sube los archivos

		//-----Formularios------------
			public function formulario_registro()
			{
				$this->load->library('form_validation');
				$this->load->helper('form','url');

				$this->form_validation->set_error_delimiters('<div class="alert alert-danger">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Alerta </strong>','</div>');

				$this->form_validation->set_rules('nombre','Nombre','required|min_length[3]|max_length[25]');
				$this->form_validation->set_rules('a_p','Apellido Paterno', 'required|min_length[2]|max_length[25]');
				$this->form_validation->set_rules('a_m','Apellido Materno', 'required|min_length[2]|max_length[25]');
				$this->form_validation->set_rules('Email','Correo Electrónico','required|min_length[2]|max_length[100]|valid_email|is_unique[usuario.usuario]');
				$this->form_validation->set_rules('ciudad','Ciudad', 'required|min_length[2]|max_length[25]');
				$this->form_validation->set_rules('estado','Estado', 'required|min_length[2]|max_length[25]');
				$this->form_validation->set_rules('pais','Pais', 'required|min_length[2]|max_length[25]');
				//$this->form_validation->set_rules('fecha', 'Fecha de nacimiento','required');
				//$this->form_validation->set_rules('g', 'Género', 'required');
				$this->form_validation->set_rules('rfc','RFC', 'required|min_length[2]|max_length[25]');
				$this->form_validation->set_rules('curp','Curp', 'required|min_length[2]|max_length[25]');
				//$this->form_validation->set_rules('e','Estado Civil', 'required');
				$this->form_validation->set_rules('direc','Dirección', 'required|min_length[2]|max_length[25]');
				$this->form_validation->set_rules('tel','Telefono', 'required|min_length[6]|max_length[15]');
				$this->form_validation->set_rules('ins','Institución', 'required|min_length[2]|max_length[25]');
				$this->form_validation->set_rules('car','Cargo', 'required|min_length[2]|max_length[25]');
				$this->form_validation->set_rules('contra','Contraseña', 'required|min_length[4]|max_length[25]|callback_check_password');
				$this->form_validation->set_rules('contra_conf','Confirmar contraseña', 'required|min_length[4]|max_length[25]|matches[contra]');
				
				$data_registro= array(
					'nombre_aspirante'=> $this->input->post('nombre'),
					'ap_pa_aspirante'=> $this->input->post('a_p'),
					'ap_ma_aspirante'=> $this->input->post('a_m'),
					'email_aspirante'=> $this->input->post('email'),
					'ciudad_aspirante'=> $this->input->post('ciudad'),
					'estado_aspirante'=>$this->input->post('estado'),
					'pais_aspirante'=> $this->input->post('pais'),
					'fec_nac_aspirante'=>$this->input->post('fecha'),
					'genero_aspirante'=> $this->input->post('g'),
					'RFC_aspirante'=> $this->input->post('rfc'),
					'CURP_aspirante'=> $this->input->post('curp'),
					'estado_civil_aspirante'=> $this->input->post('e'),
					'residencia_aspirante'=> $this->input->post('direc'),
					'telefono_aspirante' => $this->input->post('tel'),
					'institucion_aspirante'=>$this->input->post('ins'),
					'cargo_aspirante'=>$this->input->post('car')
				);
				$clave_aspirante=$this->sise_model->insertar_aspirante($data_registro);
				$data_usuario= array(
					'usuario'=>$this->input->post('email'),
					'contrasena'=>md5($this->input->post('contra')),
					'id_persona'=>$clave_aspirante,
					'id_privilegio'=>1,
					'activo'=>1
				);
				$usuario=$this->sise_model->inserta_usuario($data_usuario);
				$this->load->view('templates/registro/header');
				$this->load->view('templates/registro/login');
				$this->load->view('templates/registro/footer');
			}
			public function edita_aspirante()
			{
				$this->sise_model->valida_sesion();
				$this->load->library('form_validation');
				$this->load->helper(array('form', 'url'));
				if(!empty($this->uri->segment(3))){
				$data['sesion'] = $this->sise_model->datos_sesion();
				$data['menu'] = $this->sise_model->datos_menu();
					$this->form_validation->set_error_delimiters('<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Alerta </strong>','</div>');

					$this->form_validation->set_rules('nombre','Nombre','required|min_length[3]|max_length[25]');
					$this->form_validation->set_rules('a_p','Apellido Paterno', 'required|min_length[2]|max_length[25]');
					$this->form_validation->set_rules('a_m','Apellido Materno', 'required|min_length[2]|max_length[25]');
					$this->form_validation->set_rules('email','Correo Electrónico','required|min_length[2]|max_length[100]|valid_email|is_unique[usuario.usuario]');
					$this->form_validation->set_rules('tel','Telefono', 'required|min_length[6]|max_length[15]');


					if ($this->form_validation->run() == FALSE){

					$data['clave_aspirante'] = $this->uri->segment(3);
					$data['aspirante'] = $this->sise_model->datos_aspirante($data['clave_aspirante']);

					$this->load->view('templates/panel/header',$data);
					$this->load->view('templates/panel/menu',$data);
					$this->load->view('templates/panel/formulario_editar_aspirante',$data);
					$this->load->view('templates/panel/footer');
					
					}else{
						$data_datos_edicion= array(
						'nombre_aspirante'=> $this->input->post('nombre'),
						'ap_pa_aspirante'=> $this->input->post('a_p'),
						'ap_ma_aspirante'=> $this->input->post('a_m'),
						'email_aspirante'=> $this->input->post('email'),
						'ciudad_aspirante'=> $this->input->post('ciudad'),
						'estado_aspirante'=>$this->input->post('estado'),
						'pais_aspirante'=> $this->input->post('pais'),
						'fec_nac_aspirante'=>$this->input->post('fecha'),
						'genero_aspirante'=> substr($this->input->post('g'),0,1),
						'RFC_aspirante'=> $this->input->post('rfc'),
						'CURP_aspirante'=> $this->input->post('curp'),
						'estado_civil_aspirante'=> substr($this->input->post('e'),0,1),
						'residencia_aspirante'=> $this->input->post('direc'),
						'telefono_aspirante' => $this->input->post('tel'),
						'institucion_aspirante'=>$this->input->post('ins'),
						'cargo_aspirante'=>$this->input->post('car')
					);
						//$ge=substr($this->input->post('g'),0,1);
						//$r=substr($ge,0,1);
						//echo $r;
						//$es=substr($this->input->post('e'),0,1);
						//var_dump($ge,'<br>',$es);
						//die();
							//var_dump($this->input->post('clave_aspirante'),'<br>',$data_datos_edicion);
							//die();
							$this->sise_model->actualiza_datos_aspirante($this->input->post('clave_aspirante'),$data_datos_edicion);
							header('Location:'.base_url('index.php/sise/aspirantes').'');
					}
					}else{
						header('Location:'.base_url('index.php/sise/aspirantes').'');}

				}
						public function registro_nuevo_privilegio()
					{
				$this->load->library('form_validation');
				$this->load->helper('form','url');
				$this->sise_model->valida_sesion();
				$data['sesion'] = $this->sise_model->datos_sesion();
				$data['menu'] = $this->sise_model->datos_menu();
				$data['privilegio']=$this->sise_model->devuelve_privilegio();

				$this->form_validation->set_error_delimiters('<div class="alert alert-danger">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Alerta </strong>','</div>');
				$this->form_validation->set_rules('nom_pri','Nombre Privilegio','required|min_length[5]|max_length[25]');
				$this->form_validation->set_rules('des_pri','Descripcion del privilegio', 'required|min_length[5]|max_length[100]');

				if ($this->form_validation->run() == FALSE){
					$this->load->view('templates/panel/header',$data);
					$this->load->view('templates/panel/menu',$data);
					$this->load->view('templates/panel/nuevo_privilegio');
					$this->load->view('templates/panel/footer');
				}else{
					$data_nuevo_pri=array(
						'nombre_privilegio'=>$this->input->post('nom_pri'),
						'descripcion'=>$this->input->post('des_pri'),
						'publico'=>0
					);
					//var_dump($data_nuevo_pri);
					//die();
					$u=$this->sise_model->registro_nuevo_privilegio($data_nuevo_pri);
					header('Location:'.base_url('index.php/sise/privilegios').'');
				}
				
			}
			public function edita_privilegio()
			{
				$this->sise_model->valida_sesion();
				$this->load->library('form_validation');
				$this->load->helper(array('form', 'url'));

				

				if(!empty($this->uri->segment(3))){

				$data['sesion'] = $this->sise_model->datos_sesion();
				$data['menu'] = $this->sise_model->datos_menu();

				$data['clave_privilegio'] = $this->uri->segment(3);
				//var_dump($data['clave_privilegio']);
				//die();
				$data['privilegio'] = $this->sise_model->datos_privilegio($data['clave_privilegio']);
				//var_dump($data['clave_privilegio'],'<br>',$data['privilegio']);
				//die();

				$this->form_validation->set_error_delimiters('<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Alerta </strong>','</div>');

				$this->form_validation->set_rules('nom_pri','Nombre Privilegio','required|min_length[3]|max_length[25]');
				$this->form_validation->set_rules('des_pri','Descripcion del Privilegio', 'required|min_length[2]|max_length[25]');


				if ($this->form_validation->run() == FALSE){

				$data['id_privilegio'] = $this->uri->segment(3);
				$data['clave'] = $this->sise_model->datos_privilegio($data['id_privilegio']);

				$this->load->view('templates/panel/header',$data);
				$this->load->view('templates/panel/menu',$data);
				$this->load->view('templates/panel/formulario_editar_privilegio',$data);
				$this->load->view('templates/panel/footer');
				
				}else{
					$data_edita_pri=array(
						'nombre_privilegio'=>$this->input->post('nom_pri'),
						'descripcion'=>$this->input->post('des_pri'),
						'publico'=>0
					);
					//$ge=substr($this->input->post('g'),0,1);
					//$r=substr($ge,0,1);
					//echo $r;
					//$es=substr($this->input->post('e'),0,1);
					//var_dump($ge,'<br>',$es);
					//die();
						//var_dump($this->input->post('id_privilegio'),'<br>',$data_edita_pri);
						//die();
						$this->sise_model->actualiza_datos_privilegio($this->input->post('id_privilegio'),$data_edita_pri);
						header('Location:'.base_url('index.php/sise/privilegios').'');
					}
				}else{
					header('Location:'.base_url('index.php/sise/privilegios').'');}

			}

		//-----Funciones Especificas----------------	

			//juan carlos


				#validar usuario y creación de sesión
					public function ingresar(){
						if($this->input->post()){
							$data = array(
								'usuario' => $this->input->post('usuario'),
								'contrasena' => md5($this->input->post('contrasena'))
								);

							#var_dump($data);
							#die();
							$resultado = $this->sise_model->valida_usuario($data);

							if($resultado['total'] == 1){
								$data_sesion = array(
									'nombre' => $resultado['nombres'],
									'privilegio' => $resultado['nombre_privilegio'],
									'id_privilegio' => $resultado['id_privilegio'],
									'id_persona' => $resultado['id_persona'],
									'id_usuario' => $resultado['id_usuario'],
									);



								if($this->sise_model->crear_sesion($data_sesion)){
									//die(var_dump($this->sise_model->datos_sesion()));
									header('Location:'.base_url('index.php/sise/panel').'');}
								else
									header('Location:'.base_url('index.php/vasura/').'');

							}else{
								header('Location:'.base_url('index.php/sise?error=1').'');
							}

						}else{
							header('Location:'.base_url().'');
						}
					}
				#fin validar usuario y creación de sesión

				#logout
					public function salir(){
						$this->sise_model->comer_galleta();
					}
				#fin logout

				#checar contraseña
					function check_password($str){
					   if(!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$',$str))
					    {
					        $this->form_validation->set_message('check_password', 'Tu contraseña debe contener al menos: 8 caracterés una letra mayúscula una letra minúscula y al menos un caracter especial');
					        return FALSE;
					    }
					    else
					    {
					        return TRUE;
					    }
					}
				#fin checar contraseña

			//joan alonso

				#función subir de archivos
					public function subir_archivos(){
							$contador=0;
							$archivos=array();

			                #obtener la ruta para el amacenamiento de los archivos subidos
							$data['documentos'] = $this->sise_model->devolver_tipo_archivos_activos_ruta();#devolucion de la consulta

							foreach ($data['documentos'] as $tipo_doc) {
								
								$archivos[$contador] = array(
								'tipo_archivo' => $tipo_doc->clave_tipo_doc,
								'archivo' => $this->eliminar_caracteres_especiales($tipo_doc->nombre_tipo_doc),
								'ruta' => $tipo_doc->ruta_tipo_doc);
								$contador++;
							}

							#fin de obtener la ruta para el añmacenamiento de los archivos subidos
			                
			                for ($i=0; $i <count($archivos) ; $i++) { 

				                #configuracion para los tipos de archivos y la ruta de subida del archivo
								$config['upload_path']          = './archivos/'.$archivos[$i]['ruta'];
				                $config['allowed_types']        = 'pdf|doc|docx';
				                $config['file_name']        = $i.substr($archivos[$i]['ruta'],0,-1);
				                #configuracion para los tipos de archivos y la ruta de subida del archivo

				                #en caso de no existir la ruta, la crea
				                if (!file_exists($config['upload_path'])) {
								    mkdir($config['upload_path'], 0777, true);
								}
								#fin en caso de no existir la ruta, la crea


			                	$this->load->library('upload');
			                	$this->upload->initialize($config);

			                	if ( ! $this->upload->do_upload($archivos[$i]['archivo'])){
			                    	$error = array('error' => $this->upload->display_errors());
			                    	print_r($error);
				                }
				                else{
				                    $data_archivo = array('upload_data' => $this->upload->data());
				                    #datos para insercion en la base de datos
				                    $data_insercion=array(
				                    	'nombre_doc' => $config['file_name'] ,
				                    	'ruta_doc' => $config['upload_path'].$data_archivo['upload_data']['file_name'] ,
				                    	'tipo_archivo' => $archivos[$i]['tipo_archivo'] ,
				                    	'clave_externa' => '1'
				                    );
				                    #fin datos para insercion en la base de datos
				                    #insercion a base de datos
				                    $this->sise_model->insertar_archivo($data_insercion);
				                    #fin insercion a base de datos

				                }
			                }

			        }
				#fin función subir de archivos

			    #función editar la información tipo archivos
			        public function editar_tipo_doc(){
			        	$this->load->helper('url');
			        	$activo=0;
			        	if ($this->input->post('activo')==1) {
			        		$activo=1;
			        	}
			        	$ruta=$this->eliminar_caracteres_especiales($this->input->post('ruta'));
						$id = $this->uri->segment(3);
						if (!empty($id)) {
							$data=array(
				        		'nombre_tipo_doc'=>$this->input->post('nombre'),
				        		'ruta_tipo_doc'=>$ruta."/",
				        		'activo_tipo_doc'=>$activo
			        		);

						$this->sise_model->editar_tipo_documento($id,$data);
						}else{
							header('location:'.base_url('sise/').'');
						}

					  header('location:'.base_url('sise/').'');

			        }
			    #fin función editar la información tipo archivos

			    #función dar de alta nuevos archivos
			        public function nuevo_documento(){
			        	$activo=0;
			        	if ($this->input->post('activo')==1) {
			        		$activo=1;
			        	}

			        	$ruta=$this->eliminar_caracteres_especiales($this->input->post('ruta'));

			        	$data=array(
			        		'nombre_tipo_doc'=>$this->input->post('nombre'),
			        		'ruta_tipo_doc'=>$ruta."/",
			        		'activo_tipo_doc'=>$activo
			        	);
			        	$this->sise_model->insertar_tipo_documento($data);
			        	header('location:'.base_url('sise/').'');
			        }
			    #fin función dar de alta nuevos archivos

		        #eliminar caracteres especiales
			        public function eliminar_caracteres_especiales(string $nombre){
			        	$especiales=array("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã","ÃŠ","ÃŽ","Ã","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã","Ã‹","Ñ","*","%"," ","/");
						$normales=array("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E","N","","","_","");
						return str_replace($especiales, $normales, $nombre);
					}
		        #fin eliminar caracteres especiales
}
