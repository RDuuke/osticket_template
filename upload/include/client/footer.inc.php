        </div>
    </div>
    <div id="footer">
        <div class="arroba-info">
            <p>Calle 73 No. 73A – 226.</p>
            <p>Segundo piso de la Biblioteca (Bloque 24)</p>
            <p>Institución Universitaria Pascual Bravo</p>
        </div>
        <div class="arroba-logo">
            <img class="logo-footer" src="http://arrobamedellin.edu.co/images/template/logo.svg" alt="">
            <p>Todos los derechos reservados @Medellín</p>
            <p>&copy; <?= date('Y') ?></div>
        </div>
    </div>
<div id="overlay"></div>
<div id="loading">
    <h4><?php echo __('Please Wait!');?></h4>
    <p><?php echo __('Please wait... it will take a second!');?></p>
</div>
<?php
if (($lang = Internationalization::getCurrentLanguage()) && $lang != 'en_US') { ?>
    <script type="text/javascript" src="ajax.php/i18n/<?php
        echo $lang; ?>/js"></script>
<?php } ?>
<script type="text/javascript">
    getConfig().resolve(<?php
        include INCLUDE_DIR . 'ajax.config.php';
        $api = new ConfigAjaxAPI();
        print $api->client(false);
    ?>);
</script>
</body>
</html>
