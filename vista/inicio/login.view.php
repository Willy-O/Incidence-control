<?php include "../include/cabecera.php";?>		
    <div class="col-12 col-s-12menu">
        <div id="content"  align="center" class="content">
            <form name="form1" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <br><br><br><br><br><br><br>
                <h1> PNFA </h1> 
                <br><input type="text" name="txt" placeholder="Usuario" required><br>
		<br><input type="password" name="num" placeholder="Contraseña" required><br>
		<br><input type="submit" class="entrar" value="Entrar">
		<?php if(!empty($errores)): ?>

    		<div class="error">
        	<ul>
                    <?php echo $errores; ?>
        	</ul>
    		</div>
		<?php endif; ?>
            </form>
	</div>
    </div>
    </div> <!-- cierra el wrapper (sirve para poner todo arriba y dejar el pie de pagina abajo) -->
    <div class="foo col-12 col-s-12">
        <h5 align="center">Av. Principal de la Floresta cruce con Av. Francisco de Miranda, Edificio, Caracas 1060, Miranda</h5>
    </div>
    </body>
</html>
