<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Real State</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" href="img/logo_sitio.ico">
    <!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous"> -->
    
     <!-- validar JS -->
   
    
  </head>
  <body>
    
    <!-- acá va el titulo o logotipo -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Real State </a>
      
      <img src="img/logo_sitio.png" />
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Inicio <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre Nosotros</a>
          </li>
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0">
              <input
                class="form-control mr-sm-2"
                type="search"
                placeholder="Buscar"
                aria-label="Search"
              />
              <button
                class="btn btn-outline-success my-2 my-sm-0"
                type="submit"
              >
                Buscar
              </button>
            </form>
          </li>
        </ul>
        <!-- TAb & modal de login  -->
        <button
          type="button"
          class="btn btn-primary-outline btn-lg"
          data-toggle="modal"
          data-target="#myModal"
        >
          Registrarte
        </button>
        <!-- BTN Modal Iniciar Sesion -->
        <button
          type="button"
          class="btn btn-primary-outline btn-lg"
          data-toggle="modal"
          data-target="#modalSesion"
        >
          Iniciar Sesion
        </button>
        <!-- Div del modal -->
        <div
          class="modal fade"
          id="myModal"
          tabindex="-1"
          role="dialog"
          aria-labelledby="myModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Registrarte</h4>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="tabbable">
                  <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="active nav-link active">
                      <a href="#corr" class="" data-toggle="tab">Gestor</a>
                    </li>
                    <li class=" active nav-link active">
                      <a href="#prop" data-toggle="tab" >Propietario</a>
                    </li>
                  </ul>
                  <div class="tab-content">
                      <!--Formulario de Corredor de Propiedades  -->
                    <div class="tab-pane active" id="corr">

                      <form
                        id="FormOne"
                        name="FormOne"
                        role="form"
                        class="container-fluid"
                        action="funciones/procesa_gestor.php"
                        enctype="multipart/form-data"
                        method="POST"
                      >
                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="rut">Rut:</label>
                            <input
                              type="text"
                              class="form-control"
                              id="rut_gestor"
                              name="rut_gestor"
                              aria-describedby=""
                              placeholder="Ingrese Rut"
                            />
                            <br>
                          <!-- <label for="rut" id="lbl_rut_gestor_existe" class="alerts">Rut existe</label> -->
                          </div>
                          <div class="form-group col-md-6">
                            <label for="fecha_nac">Fecha de Nacimiento:</label>
                            <input
                              type="date"
                              class="form-control"
                              id="fecha_nac_corr"
                              name="fecha_nac_corr"
                              aria-describedby=""
                              placeholder=""
                            />
                          </div>
                          <div class="form-group col-md-6">
                            <label class="form-check-label" for="nombre"
                              >Nombre</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="nom_corredor"
                              name="nombre_corr"
                            />
                          </div>
                          <div class="form-group col-md-6">
                            <label class="form-check-label" for="apellido"
                              >Apellido</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="ape_corredor"
                              name="apellido_corr"
                            />
                          </div>
                          <div class="form-group col-md-6">
                            <label class="form-check-label" for="Correo"
                              >Correo Electronico</label
                            >
                            <input
                              type="email"
                              class="form-control"
                              id="mail_corredor"
                              name="mail_gestor"
                            />
                          </div>
                        
                          <div class="form-group col-md-6">
                            <label class="form-check-label" for="telefono"
                              >Telefono</label
                            >
                            <input
                              type="number"
                              class="form-control"
                              id="telefono_corredor"
                              name="telefono_corredor"
                            />
                          </div>
                          <!-- combobox de sexo -->
                          <div class="col-auto my-1">
                            <label class="mr-sm-2" for="sexo">Sexo</label>
                            <select
                              class="custom-select mr-sm-2"
                              id="sexo_corredor"
                              name="sexo_corredor"
                            >
                              <option value="0" selected>Selecione...</option>
                              <option value="Masculino">Masculino</option>
                              <option value="Femenino">Femenino</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="pass_corr">Ingrese Contraseña</label>
                            <input
                              type="password"
                              class="form-control"
                              id="pass_corr"
                              name="pass_corr"
                              placeholder="Ingrese Contraseña"
                            />
                          </div>
                          <div class="col-md-10">
                            <label for="certi">Certificado de Antecedentes</label>
                            <input 
                              type="file"
                              class="form-control"
                              id="certificado"
                              name="certificado"
                              placeholder="Selecione un Archivo"
                              required
                            /><br>
                          </div>
                          <input type="button" class="btn btn-primary btn-block" name="registrar_g" value="Registrar" onclick="validar(this.value);">
                          <input type="hidden" name="accion" id="accion">
                        </div>
                      </form>
                    </div>
                    <!--Cierre de formulario Corredor --> 

                     <!-- Formulario PRopietario -->
                    <div class="tab-pane" id="prop">
                      <form
                        id="FormTwo"
                        name="FormTwo"
                        role="form"
                        class="container-fluid"
                        action="funciones/procesa_prop.php"
                        method="POST"
                      >
                       <div class="row">
                        <div class="form-group col-md-6">
                          <br><label for="rut">Rut:</label>
                          <input
                            type="text"
                            class="form-control"
                            id="rut_prop"
                            aria-describedby=""
                            placeholder="Ingrese Rut"
                            name="rut_propi"
                          />
                        </div>
                        <div class="form-group col-md-6">
                          <br><label for="fecha_nac">Fecha de Nacimiento:</label>
                          <input
                            type="date"
                            class="form-control"
                            id="fecha_nac_prop"
                            aria-describedby=""
                            placeholder=""
                            name="fecha_nac_propi"
                          />
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-check-label" for="">Nombre</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="nom_prop"
                            name="nom_propi"
                          />
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-check-label" for="apellido"
                            >Apellido</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="ape_prop"
                            name="ape_propi"
                          />
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-check-label" for="Correo"
                            >Correo Electronico</label
                          >
                          <input
                            type="email"
                            class="form-control"
                            id="mail_prop"
                            name="mail_prop"
                          />
                        </div>
                        <div class="form-group col-md-6">
                          <label class="form-check-label" for="telefono"
                            >Telefono</label
                          >
                          <input
                            type="number"
                            class="form-control"
                            id="telefono_prop"
                            name="telefono_prop"
                          />
                        </div>
                        <!-- combobox de sexo -->
                        <div class="col-auto my-1">
                          <label class="mr-sm-2" for="sexo">Sexo</label>
                          <select
                            class="custom-select mr-sm-2"
                            id="sexo_prop"
                            name="sexo_prop"
                          >
                            <option value="0" selected>Selecione...</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="pass_corr">Ingrese Contraseña</label>
                          <input
                            type="password"
                            class="form-control"
                            id="pass_prop"
							              name="pass_prop"	 
                            placeholder="Ingrese Contraseña"
                          />
                        </div>
                        <div class="form-group col-md-6">
                          <label for="n_prop">N° Propiedad Bienes Raíces</label>
                          <input
                            type="text"
                            class="form-control"
                            id="n_prop"
                            name="n_prop"
                            placeholder="Ingrese Numero"
                          />
                        </div>
                        
                        <input type="button" class="btn btn-primary btn-block" name="registrar_p" value="Registrar" onclick="validar2(this.value);">
                        <input type="hidden"  name="accion2" value="accion2">
                      </div>
                      </form>
                    </div>
                    <!-- Cierre formulario PRopietario -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Modal de iniciar Sesion --> 
      <div
          class="modal fade"
          id="modalSesion"
          tabindex="-1"
          role="dialog"
          aria-labelledby="myModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Ingresa tu datos</h4>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <!-- formulario admin -->  
                     <form
                        id="FormLogin"
                        name="FormLogin"
                        role="form"
                        class="container-fluid"
                        action="funciones/procesa_login.php"
                        method="POST"
                      >
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="rut">Rut:</label>
                          <input
                            type="text"
                            class="form-control"
                            id="rut_login"
                            aria-describedby=""
                            placeholder="Ingrese Rut"
                            name="rut_login"
                          />
                        </div>
                        <div class="form-group col-md-6">
                          <label for="rut">Clave:</label>
                          <input
                            type="password"
                            class="form-control"
                            id="clave_login"
                            aria-describedby=""
                            placeholder="Ingrese Clave"
                            name="clave_login"
                          />
                        </div>
                        <input type="button" id="login_btn" class="btn btn-primary btn-block" name="login_btn" value="Iniciar Sesion" onclick="validar3(this.value);">
                        <input type="hidden" name="accion3" id="accion3">
                      </form>
                       <!-- final de form de admin -->
              </div> 
            </div>
          </div> 
    </div>   
         <!--Fin de tab y modal  -->
    </nav>
             
<!-- Acá debe ir el codigo para la imagen -->
      <main>
	   <section id="banner">
     <img src="img/banner.jpg" alt="" style="background-attachment: fixed;" class="mediana"> 
     <div class="contenedor">
       <h1>Hola Acá va el buscador</h1>
       <div class="buscador">
          <input type="text" class="buscar_txt" name="" placeholder="Escriba para buscar">
          <a class="buscar_btn" href="#"> </a>
       </div>  
     </div>   
	   </section>	
	</main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="js\valida_index.js"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
 
  
  </body>
</html>
