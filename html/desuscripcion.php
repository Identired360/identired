<?php include('header.html') ?>

<section>
    <div class="col-container">
        <div class="cont-gen page-consult">
            <div class="tit-prin">
                <h1>Dar de baja mi suscripción</h1>
            </div>
            <div class="cont-consul formdesusc">
                <p>Ingresa tu correo electrónico para borrarte de nuestra lista de suscriptores.</p>
                <div class="form-consul">
                    <form id="formDesus" action="confirma-desuscripcion.php" method="post">
                        <input type="hidden" name="section" value="Consultas">
                        <div class="card-form">
                            <div class="input-wrapper">
                                <input type="email" id="correo" name="email" required>
                                <label>Correo electrónico</label>
                            </div>
                            <div class="cont-submitc">
                                <div class="but-input">
                                    <input type="submit" class="bot-p bot-cel" value="Darme de baja">
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
    $(function() {
        $('#formDesus').validate();
    });
</script>
</body>
</html>