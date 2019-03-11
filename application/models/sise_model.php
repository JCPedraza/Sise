<?php
class sise_model extends CI_Model{
	function __construct(){
		parent:: __construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('string');
		$this->load->library('upload');
		$this->load->helper('file');
		$this->load->library('email');
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('text');
	}

	//-----------------------sesiones-------------------------
		
		#Validar usuario y contraseña
			function valida_usuario($data){
				
				/*$privilegio = $this->consulta_privilegio($data);

				if ($privilegio['nombre_privilegio']==3||$privilegio['nombre_privilegio']==4) {
					$this->db->select('u.*, count(*) AS total, p.*, al.*');
					$this->db->from('usuario u');
					$this->db->join('privilegio as p','p.id_privilegio = u.id_privilegio','left');
					$this->db->join('alumno as al','al.clave_alumno = u.id_persona');
					$this->db->where('u.usuario',$data['usuario']);
					$this->db->where('u.contrasena',$data['contrasena']);
					$this->db->where('u.activo','1');
				}else{
					$this->db->select('u.*, count(*) AS total, p.*, pe.*');
					$this->db->from('usuario u');
					$this->db->join('privilegio as p','p.id_privilegio = u.id_privilegio','left');
					$this->db->join('persona as pe','pe.id_persona = u.id_persona');
					$this->db->where('u.usuario',$data['usuario']);
					$this->db->where('u.contrasena',$data['contrasena']);
					$this->db->where('u.activo','1');
				}*/

				$privilegio = $this->consulta_privilegio($data);

				if ($privilegio['id_privilegio']==3||$privilegio['id_privilegio']==4||$privilegio['id_privilegio']==5) {
					$this->db->select('u.*, count(*) AS total, p.*, al.*');
					$this->db->from('usuario u');
					$this->db->join('privilegio as p','p.id_privilegio = u.id_privilegio','left');
					$this->db->join('alumno as al','al.clave_alumno = u.id_persona');
					$this->db->where('u.usuario',$data['usuario']);
					$this->db->where('u.contrasena',$data['contrasena']);
					$this->db->where('u.activo','1');
				}elseif($privilegio['id_privilegio']==2){
					$this->db->select('u.*, count(*) AS total, p.*, pe.*');
					$this->db->from('usuario u');
					$this->db->join('privilegio as p','p.id_privilegio = u.id_privilegio','left');
					$this->db->join('personal as pe','pe.id_personal = u.id_persona');
					$this->db->where('u.usuario',$data['usuario']);
					$this->db->where('u.contrasena',$data['contrasena']);
					$this->db->where('u.activo','1');
				}else{
					$this->db->select('u.*, count(*) AS total, p.*, pe.*');
					$this->db->from('usuario u');
					$this->db->join('privilegio as p','p.id_privilegio = u.id_privilegio','left');
					$this->db->join('persona as pe','pe.id_persona = u.id_persona');
					$this->db->where('u.usuario',$data['usuario']);
					$this->db->where('u.contrasena',$data['contrasena']);
					$this->db->where('u.activo','1');
				}
				

				/*$this->db->select('u.*, count(*) AS total, p.*, pe.*');
				$this->db->from('usuario u');
				$this->db->join('privilegio as p','p.id_privilegio = u.id_privilegio','left');
				$this->db->join('persona as pe','pe.id_persona = u.id_persona');
				$this->db->where('u.usuario',$data['usuario']);
				$this->db->where('u.contrasena',$data['contrasena']);
				$this->db->where('u.activo','1');*/

				

				$query = $this->db->get();
				return $query->row_array();
			}
		#fin de validar usuario y contraseña

		#obtener privilegio para consulta de cuenta
			function consulta_privilegio($data){
				$this->db->select('p.id_privilegio');
				$this->db->from('usuario u');
				$this->db->join('privilegio as p','p.id_privilegio = u.id_privilegio','left');
				$this->db->where('u.usuario',$data['usuario']);
				$this->db->where('u.contrasena',$data['contrasena']);
				$query = $this->db->get();
				return $query->row_array();
			}
		#fin obtener privilegio para consulta de cuenta

		#Creamos la sesión con los datos obtenidos del usuario
			function crear_sesion($data){
				if(!empty($data)){
					$sesion = array(
						   'nombre'  => $data['nombre'],
		                   'privilegio'  => $data['privilegio'],
		                   'id_privilegio'  => $data['id_privilegio'],
		                   'id_usuario'  => $data['id_usuario'],
		                   'id_persona'  => $data['id_persona'],
		                   'logged_in' => TRUE
						);
					$this->session->set_userdata($sesion);
					return true;
				}else{
					return false;
				}

			}
		#fin de creamos la sesión con los datos obtenidos del usuario

		#Validar que la sesión este activa
			//Validar que estamos logeados
			function valida_sesion(){
				//die(var_dump($this->session->userdata('logged_in')));
				if(!$this->session->userdata('logged_in'))
					header('Location: index');
			}
		#fin de validar que la sesión este activa

		#Destruir todo la sección
			function destruye_sesion(){
				$this->session->sess_destroy();
				header('Location: index');
			}
		#fin de destruir todo la sección
			
		#Datos que se mostraran de acuerdo al usuario
			function datos_sesion(){
				$data = array(
					'nombre' => $this->session->userdata('nombre'),
					'id_usuario' => $this->session->userdata('id_usuario'),
					'nombre_privilegio' => $this->session->userdata('privilegio'),
					'id_privilegio' => $this->session->userdata('id_privilegio'),
					'id_persona' => $this->session->userdata('id_persona'),
					'logged_in' => $this->session->userdata('logged_in')
				);
				return $data;
			}
		#fin de datos que se mostraran de acuerdo al usuario

		#Validar que tenemos permiso de estar en la sección actual
			function Estar_aqui(){
				$data = $this->datos_sesion();

				$actual = $this->uri->segment(2);
				
				$resultado = $this->cumpara_url($data,$actual);
				
				//die(var_dump($actual));
				if($resultado->total==1){
					return true;
				}else{
					if($this->datos_session->logged_in==true)
						header('Location:'.base_url('index.php/prototipo/error').'');
					else
					header('Location:'.base_url('index.php').'');
				}

			}

			function cumpara_url($data,$actual){
				$this->db->select('s.*, count(*) AS total, p.*');
				$this->db->from('seccion s');
				$this->db->join('privilegio_seccion as p','p.id_seccion = s.id_seccion','left');
				$this->db->where('p.id_privilegio',$data['id_privilegio']);
				$this->db->where('p.menu','1');
				$this->db->where('s.url',$actual);
				$query = $this->db->get();
				return $query->row();

			}
		#fin validar que tenemos permiso de estar en la sección actual


		#Muestra en menú las secciones a las cuales se tienen acceso
			function datos_menu(){
				$data = $this->datos_sesion();
				$this->db->select('s.*, p.*');
				$this->db->from('seccion s');
				$this->db->join('privilegio_seccion as p','p.id_seccion = s.id_seccion','left');
				$this->db->where('p.id_privilegio',$data['id_privilegio']);
				$this->db->where('s.activo','1');
				$query = $this->db->get();
				return $query->result();
			}
		#fin de muestra en menú las secciones a las cuales se tienen acceso

		#Elimina la sesión (logout)
			function comer_galleta(){
				$this->session->sess_destroy();
				header('Location: index');
			}
		#Fin elimina la sesión (logout)
	//-------------------fin sesiones-------------------------

	
	//-----------------------usuarios-------------------------
		
		#Consultas
		#Fin consultas
		
		#Inserciones
			function inserta_usuario($data){
				$this->db->insert('usuario',$data);
				return $this->db->insert_id();
			}
		#Fin inserciones
		
		#Update

		#Fin update

		#Delete

		#Fin delete
	//-------------------fin usuarios-------------------------
	

	//-----------------------archivos-------------------------
        
        #consultas   
            function devolver_tipo_archivos_activos(){
                $this->db->select('nombre_tipo_doc');
                $this->db->from('tipo_documento');
                $this->db->where('activo_tipo_doc','1');
                $resultado = $this->db->get();
                return $resultado->result();
            }

            function devolver_tipo_archivos(){
                $this->db->select('*');
                $this->db->from('tipo_documento');
                $resultado = $this->db->get();
                return $resultado->result();
            }

            function devolver_info_tipo_archivos($id){
                $this->db->select('*');
                $this->db->from('tipo_documento');
                $this->db->where('clave_tipo_doc',$id);
                $resultado = $this->db->get();
                return $resultado->result();
            }

            function devolver_tipo_archivos_activos_ruta(){
                $this->db->select('clave_tipo_doc, nombre_tipo_doc, ruta_tipo_doc');
                $this->db->from('tipo_documento');
                $this->db->where('activo_tipo_doc','1');
                $resultado = $this->db->get();
                return $resultado->result();
            }

            function devolver_archivos(){
                $this->db->select('*');
                $this->db->from('documento');
                $resultado = $this->db->get();
                return $resultado->result();
            }
        #fin consultas   

        #inserciones
            function insertar_archivo($data){
                $this->db->insert('documento',$data);
            }
            function insertar_tipo_documento($data){
                $this->db->insert('tipo_documento',$data);
            }
        #fin inserciones

        #update
            function editar_tipo_documento($id,$data){
                $this->db->where('clave_tipo_doc',$id);
                $this->db->update('tipo_documento',$data);
            }
        #fin update

        #Delete

        #fin delete
    //---------------------fin archivos-----------------------

   	//-----------------------privilegios-------------------------
		
		#Consultas
			function datos_privilegio($data){
			$this->db->select('*');
			$this->db->from('privilegio');
			$this->db->where('id_privilegio',$data);

			$regresa_datos_privilegio = $this->db->get();
			return $regresa_datos_privilegio->row_array();
			}

			function devuelve_privilegio(){
			$devuelve_privilegio=$this->db->get('privilegio');
			return $devuelve_privilegio->result();
			}
			function devuelve_privilegios_seccion(){
				$this->db->select('COUNT(*)')->from('privilegio_seccion AS ps')->WHERE('ps.id_privilegio = p.id_privilegio');
				$total = $this->db->get_compiled_select();
				$this->db->select('p.*, ('.$total.') AS total');
				$this->db->from('privilegio AS p');
				$privilegio_seccion = $this->db->get();
				return $privilegio_seccion->result();
			}
			function secciones_privilegio($id_privilegio){
				$this->db->select('ps.*,s.*');
				$this->db->from('privilegio_seccion AS ps');
				$this->db->join('seccion as s','ps.id_seccion = s.id_seccion');
				$this->db->where('ps.id_privilegio',$id_privilegio);

				$query = $this->db->get();
				return $query->result();
			}
			function devuelve_privilegio_aspirante(){
				$this->db->select('*');
				$this->db->from('privilegio');
				$this->db->where('id_privilegio !=1');
				$this->db->where('id_privilegio !=2');
				$devuelve_privilegio_aspirante=$this->db->get();
				return $devuelve_privilegio_aspirante->result();
			}
		#Fin consultas
		
		#Inserciones
			function registro_nuevo_privilegio($data){
			$this->db->insert('privilegio',$data);
			return $this->db->insert_id();
			}
			function inserta_privilegio_seccion($data){
				$this->db->insert('privilegio_seccion',$data);
			}
		#Fin inserciones
		
		#Update
			function actualiza_datos_privilegio($id_privilegio,$data){
			$this->db->where('id_privilegio', $id_privilegio);
			$this->db->update('privilegio',$data);
			}
		#Fin update

		#Delete
			function elimina_privilegio_seccion($data){
				$this->db->delete('privilegio_seccion', $data);
			}
		#Fin delete
	//-------------------fin privilegios-------------------------


	//-----------------------aspirantes-------------------------
		
		#Consultas
			function datos_aspirante($data){
			$this->db->select('*');
			$this->db->from('alumno');
			$this->db->where('clave_alumno',$data);

			$regresa_datos_alumno = $this->db->get();
			return $regresa_datos_alumno->row_array();
			}

			function devuelve_aspirantes(){
			$alumno = $this->db->get('alumno');
			return $alumno->result();
			}
			function secciones_en_privilegio($id_privilegio){
				$this->db->select('*');
				$this->db->from('privilegio_seccion');
				$this->db->where('id_privilegio',$id_privilegio);

				$query = $this->db->get();
				return $query->result_array();
			}
			function drop_secciones_faltantes($id_privilegio){

				$arreglo = $this->secciones_en_privilegio($id_privilegio);
				if(!empty($arreglo)){
					foreach ($arreglo as $a) {
						$ignore[] = (int)$a['id_seccion'];
					}
				}else{
					$ignore = 0;
				}

				$this->db->select('s.*');
				$this->db->from('seccion AS s');
				$this->db->where_not_in('s.id_seccion', $ignore);

				//SELECT `ps`.* FROM `privilegio_seccion` AS `ps` WHERE `ps`.`id_privilegio` = '1' AND `ps`.`id_seccion` NOT IN(1,2)
				$query = $this->db->get();
				return $query->result();
			}
			function devuelve_aspirantes_privilegio(){
				$this->db->select('u.*, a.*,p.*');
				$this->db->from('usuario u');
				$this->db->join('alumno as a',' a.clave_alumno = u.id_persona','left');
				$this->db->join('privilegio as p',' p.id_privilegio=u.id_privilegio','left');
				$this->db->where('u.id_privilegio!=1');
				$this->db->where('u.id_privilegio!=2');
				$query = $this->db->get();
				return $query->result();
			}
		#Fin consultas
		
		#Inserciones
			function insertar_aspirante($data){
				$this->db->insert('alumno',$data);
				return $this->db->insert_id();
			}
		#Fin inserciones
		
		#Update
			function actualiza_datos_aspirante($clave_alumno,$data){
				$this->db->where('clave_alumno', $clave_alumno);
				$this->db->update('alumno',$data);
			}
		#Fin update

		#Delete

		#Fin delete
	//-------------------fin aspirantes-------------------------

	//----------------------alumnos-----------------------------
			function aceptado(){
				$data = $this->datos_sesion();
				
			}
	//--------------------fin alumnos---------------------------
	//-----------------alumno---------------
			#Consultas
				
				/*function aceptado(){
					//$data = $this->datos_sesion();
				}*/

				function datos_alumno($data){
					$this->db->select('*');
					$this->db->from('alumno');
					$this->db->where('clave_alumno',$data);

					$regresa_datos_alumno = $this->db->get();
					return $regresa_datos_alumno->row_array();
				}


			#Fin Consultas

			#Inserciones


			#Fin Inserciones
			
			#Update


			#Fin Update
			
			#Delete


			#Fin Delete
	//-----------------fin alumno---------------
	
	//-----------------------secciones-------------------------
		
		#Consultas
			function devuelve_seccion(){
				$devuelve_seccion=$this->db->get('seccion');
				return $devuelve_seccion->result();
			}
			function datos_seccion($data){
				$this->db->select('*');
				$this->db->from('seccion');
				$this->db->where('id_seccion',$data);

				$regresa_datos_seccion = $this->db->get();
				return $regresa_datos_seccion->row_array();
			}
			function registra_nueva_seccion($data){
				$this->db->insert('seccion',$data);
				return $this->db->insert_id();
			}



		#Fin consultas
			


		#Fin consultas
		
		#Fin consultas
			
		#Inserciones

		#Fin inserciones
		
		#Update
			function actualiza_datos_seccion($id_seccion,$data){
			$this->db->where('id_seccion', $id_seccion);
			$this->db->update('seccion',$data);
			}
		#Fin update

		#Delete

		#Fin delete
	//-------------------fin secciones-------------------------


	//-------------------Modalidades---------------------------
		#Consultas
			function devuelve_modalida(){
				$devuelve_modalidad=$this->db->get('modalidad');
				return $devuelve_modalidad->result();
			}
			function datos_modalidad($data){
				$this->db->select('*');
				$this->db->from('modalidad');
				$this->db->where('clave_mod',$data);

				$regresa_datos_modalidad = $this->db->get();
				return $regresa_datos_modalidad->row_array();
			}
		#Fin consultas
		
		#Inserciones
			function inserta_modalidad($data){
				$this->db->insert('modalidad',$data);
			}
		#Fin inserciones
		
		#Update
			function actualiza_datos_modalidad($clave_mod,$data){
				$this->db->where('clave_mod', $clave_mod);
				$this->db->update('modalidad',$data);
			}
		#Fin update

		#Delete
		#Fin delete
	//------------------fin modalidades-------------------


	//-----------------------programas-------------------------
		
		#Consultas

			function devuelve_programa(){
				$devuelve_programa=$this->db->get('programa');
				return $devuelve_programa->result();
			}
			function datos_programa($data){
				$this->db->select('*');
				$this->db->from('programa');
				$this->db->where('clave_programa',$data);

				$regresa_datos_programa = $this->db->get();
				return $regresa_datos_programa->row_array();
			}
		#Fin consultas
		
		#Inserciones
			function registro_nuevo_programa($data){
				$this->db->insert('programa',$data);
			}
		#Fin inserciones
		
		#Update
			function actualiza_datos_programa($clave_programa,$data){
				$this->db->where('clave_programa', $clave_programa);
				$this->db->update('programa',$data);
			}
		#Fin update

		#Delete
		#Fin delete
	//-------------------fin programas-------------------------


	//-----------------------Oferta academica-------------------------
		
		#Consultas

			function devuelve_oferta_academica(){
				$devuelve_oferta_academica=$this->db->get('oferta_academica');
				return $devuelve_oferta_academica->result();
			}
		#Fin consultas
		
		#Inserciones
			function registro_nueva_oferta_academica($data){
				$this->db->insert('oferta_academica',$data);
			}
		#Fin inserciones
		
		#Update
		#Fin update

		#Delete
		#Fin delete
	//-------------------fin oferta academica-------------------------


	//-----------------------experiencia acadeica-------------------------
		
		#Consultas


			/*function devuelve_experiencia_academica(){
				$this->db->select('n_a.*, e_a.*');
				$this->db->from('nivel_academico n_a');
				$this->db->join('experiencia_academica as e_a','e_a.nivel_academico= n_a.clave_exp_aca','left');
				$this->db->where('e_a.nivel_academico= n_a.clave_exp_aca');

			}*/
			function devuelve_experiencia_academica(){
				$this->db->select('n_a.*, e_a.*');
				$this->db->from('nivel_academico n_a');
				$this->db->join('experiencia_academica as e_a','e_a.nivel_academico= n_a.clave_exp_aca','left');
				$this->db->where('e_a.nivel_academico= n_a.clave_exp_aca');

				$devuelve_experiencia_academica = $this->db->get();
				return $devuelve_experiencia_academica->result();
			}
			function datos_experiencia($data){
				$this->db->select('n_a.*, e_a.*');
				$this->db->from('nivel_academico n_a');
				$this->db->join('experiencia_academica as e_a','e_a.nivel_academico= n_a.clave_exp_aca','left');;
				$this->db->where('e_a.clave_exp_aca',$data);

				$regresa_datos_esperiencia = $this->db->get();
				return $regresa_datos_esperiencia->result();
			}
		#Fin consultas
		
		#Inserciones
			function registro_nueva_experiencia_academica($data){
				$this->db->insert('experiencia_academica',$data);
			}
		#Fin inserciones
		
		#Update
		#Fin update

		#Delete
		#Fin delete
	//-------------------fin experiencia academica-------------------------
	

	//-------------------Nivel Academico---------------------------
		#Consultas
			function devuelve_nivel_academico()
			{
				$devuelve_nivel_academico=$this->db->get('nivel_academico');
				return $devuelve_nivel_academico->result();
			}
			function datos_nivel($data){
				$this->db->select('*');
				$this->db->from('nivel_academico');
				$this->db->where('clave_exp_aca',$data);

				$regresa_datos_nivel = $this->db->get();
				return $regresa_datos_nivel->row_array();
			}
		#Fin consultas
		
		#Inserciones
			function inserta_nivel_academico($data){
				$this->db->insert('nivel_academico',$data);
			}
		#Fin inserciones
		
		#Update
			function actualiza_datos_nivel_academico($clave_ex,$data){
				$this->db->where('clave_exp_aca', $clave_ex);
				$this->db->update('nivel_academico',$data);
			}
		#Fin update

		#Delete
		#Fin delete
	//------------------fin modalidades-------------------


	//-------------------grupos---------------------------

			#Consultas
				/*function devolver_grupos_existenetes(){
					$this->db->select('*');
					$this->db->from('');
					$devolver_grupos_existenetes = $this->db->get();
					return $devolver_grupos_existenetes->result();
				}*/
			#Fin Consultas

			#Inserciones
			#Fin Inserciones
			
			#Update
			#Fin Update
			
			#Delete
			#Fin Delete
	//----------------fin grupos--------------------------

	#plantilla
	//-----------------nombre---------------
			#Consultas
			#Fin Consultas

			#Inserciones
			#Fin Inserciones
			
			#Update
			#Fin Update
			
			#Delete
			#Fin Delete
	//-----------------fin nombre---------------
	#plantilla

	//-----------------------prueba---------------------------


   	//---------------------fin prueba-------------------------

    //-----------------------personal-------------------------
		
		#Consultas
		#Fin consultas
		
		#Inserciones
			function insertar_personal($data){
				$this->db->insert('personal',$data);
				return $this->db->insert_id();
			}
		#Fin inserciones
		
		#Update
		#Fin update

		#Delete

		#Fin delete
	//-------------------fin personal-------------------------
}