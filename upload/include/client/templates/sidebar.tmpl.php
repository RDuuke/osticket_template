<?php
$BUTTONS = isset($BUTTONS) ? $BUTTONS : true;
?>
    <div class="bg-white">
<?php if ($BUTTONS) { ?>
        <div class="content-button">
            <div class="content-btn new">
                <h2><?= __('Open a New Ticket') ?></h2>
                <span class="hr"></span>

                <p>Por favor, proporcione tantos detalles como sea posible
                    para que podamos asistirlo mejor. Para actualizar un boleto
                    enviado previamente, inicie sesión.</p>
                <?php
                if ($cfg->getClientRegistrationMode() != 'disabled'
                || !$cfg->isClientLoginRequired()) { ?>
                <a href="open.php" class="btn-arroba"><?php
                    echo __('Open a New Ticket');?><?php } ?>
                </a>
            </div>
            <div class="content-btn status">
                <h2><?php
                    echo __('Check Ticket Status');?></h2>
                <span class="hr"></span>
                <p>Proporcionamos archivos e historial de todas sus
                    solicitudes de soporte actuales y pasadas completas con
                    respuestas.</p>

                <a href="view.php" class="btn-arroba"><?php
                    echo __('Check Ticket Status');?></a>
            </div>
        </div>
<?php } ?>
        <div class="content"><?php
    $faqs = FAQ::getFeatured()->select_related('category')->limit(5);
    if ($faqs->all()) { ?>
            <section><div class="header"><?php echo __('Featured Questions'); ?></div>
<?php   foreach ($faqs as $F) { ?>
            <div><a href="<?php echo ROOT_PATH; ?>kb/faq.php?id=<?php
                echo urlencode($F->getId());
                ?>"><?php echo $F->getLocalQuestion(); ?></a></div>
<?php   } ?>
            </section>
<?php
    }
    $resources = Page::getActivePages()->filter(array('type'=>'other'));
    if ($resources->all()) { ?>
            <section><div class="header"><?php echo __('Other Resources'); ?></div>
<?php   foreach ($resources as $page) { ?>
            <div><a href="<?php echo ROOT_PATH; ?>pages/<?php echo $page->getNameAsSlug();
            ?>"><?php echo $page->getLocalName(); ?></a></div>
<?php   } ?>
            </section>
<?php
    }
        ?></div>
    </div>

