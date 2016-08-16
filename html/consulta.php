<?php include('header.html') ?>
<section>
    <div class="col-container">
        <div class="cont-gen page-consult">
            <div class="tit-prin">
                <h1>Escríbenos tu consulta</h1>
            </div>
            <div class="cont-consul">
                <p>Si necesitas información de alguno de nuestros servicios, envíanos tus datos para darte más información, estaremos encantados en atenderte.</p>
                <div class="form-consul">
                    <form id="formConsulta" action="../php/register.php" method="post">
                        <input type="hidden" name="section" value="Consultas">
                        <div class="card-form">
                            <div class="input-wrapper">
                                <input type="text" id="nombre" name="name" required>
                                <label>Nombre y Apellido</label>
                            </div>
                            <div class="input-wrapper">
                                <input type="email" id="correo" name="email" required>
                                <label>Correo electrónico</label>
                            </div>
                            <div class="input-wrapper">
                                <input type="tel" class="digits" id="telefono" name="phone" required>
                                <label>Teléfono</label>
                            </div>		                    
                            <div class="input-wrapper textcont">
                                <textarea name="msg" required></textarea>
                                <label>Consulta</label>
                            </div>
                            <div class="cont-check">
                                
                            </div>  
                            <div class="cont-submitc">
                                <div class="but-input">
                                    <input type="submit" class="bot-p bot-cel" value="Enviar mi consulta">
                                </div>
                            </div>  
                        </div>			
                    </form>
                </div>    	
            </div>		
        </div>	
    </div>
</section>
<?php include('footer.html') ?>

<script type="text/javascript">
    $(function () {
        $('#formConsulta').validate();
    });

</script>
</body>
</html>