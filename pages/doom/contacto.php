<?php
error_reporting(0);

$subject = $_POST['correo'];// El valor entre corchetes son los atributos name del formulario html
$msg = $_POST['mensaje'];
$from = 'contacto@tescha-informatica.net';

// El from DEBE corresponder a una cuenta de correo real creada en el servidor
$headers = "From: contacto@tescha-informatica.net\r\n"; 
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n"; 
	
// if(mail($from, $subject, $msg,$headers)){
// 	echo "mail enviado";
// 	}else{
// 	$errorMessage = error_get_last()['mensaje'];
// 	echo $errorMessage;
// }
?>

<div class="row contContact">
    <article class="col-md-12">
            <section id="banner">
                <div class="inner">
                    <?php foreach($data as $dat) { ?>
                        <h2> <?php echo $dat['titulo'] ?> </h2>
                    <?php } ?>
                </div>
            </section>
        <hr>
        <div class="contactoo" id="contactoo">
            <div class="row">
                <div class="col-sm-6">
                    <div class="address">
                        <h4 class="subTitulo">Dirección</h4>
                        <?php                            
                            foreach($data as $dat) {                                                
                        ?>
                        <p class="kontakto"><?php echo $dat['direc'] ?></p>
                        <?php                            
                            }                                           
                        ?>
                    </div>      
                    <div class="address">
                        <h4 class="subTitulo">Telefonos </h4>
                        <?php                            
                            foreach($data as $dat) {                                                
                        ?>
                            <p class="kontakto"><?php echo $dat['tel'] ?></p>
                        <?php                            
                            }                                           
                        ?>
                    </div>        
                    <div class="address">
                        <h4 class="subTitulo">Email</h4>
                        <?php                            
                            foreach($data as $dat) {                                                
                        ?>
                            <p class="kontakto"><?php echo $dat['email'] ?></p>
                        <?php                            
                            }                                           
                        ?>
                    </div>
                    <div class="redes">
                        <h4 class="subTitulo">Redes sociales</h4>
                            <a href="https://www.facebook.com/TESCHAInformatica"><i class="fa fa-facebook fa-3x" style="color:#111111;" aria-hidden="true"> </i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#"><i class="fa fa-twitter fa-3x" style="color:#111111;" aria-hidden="true"></i> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#"><i class="fa fa-youtube fa-3x" style="color:#111111;" aria-hidden="true"></i> </a>
                    </div>
                    <br>
                </div>
                <div class="col-sm-6">
                    <form method="post" name="contact-form">
                        <div class="form-group">
                            <input class="contacto-input" type="text" required placeholder="Nombre" class="form-control" name="nombre">
                        </div>
                        <div class="form-group">
                            <input class="contacto-input" type="email" required placeholder="Email" class="form-control" name="correo">
                        </div> 
                        <div class="form-group">
                            <textarea required placeholder="Mensaje" rows="8" class="form-control" class="contacto-input" name="mensaje"></textarea>
                        </div>
                        <button  class="btn btn-primary form-group" type="submit">Enviar mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </article>
    <article class="col-md-12">
        <hr>
            <h3 class="titulo kontakto">Ubicación</h3>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <center>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7534.293597148029!2d-98.841646!3d19.232433!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcde95624c99f93f1!2sTecnol%C3%B3gico%20de%20Estudios%20Superiores%20de%20Chalco!5e0!3m2!1ses-419!2smx!4v1665788072214!5m2!1ses-419!2smx" width="600" height="450" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </center>
                <br>
                <br>
            </div>
        </div>
    </article>
</div>