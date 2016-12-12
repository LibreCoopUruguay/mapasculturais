<?php

$editEntity = $this->controller->action === 'create' || $this->controller->action === 'edit';
$this->bodyProperties['ng-app'] = "entity.app";
$this->bodyProperties['ng-controller'] = "EntityController";

?>
<div id="mapa" class="aba-content">
    <p class="alert info">Nesta seção você indica a posição inicial do mapa, ou seja, quando o usuário abrir o mapa ele visualizará as informações nessa posição já estabelecida podendo fazer um zoom mínimo e máximo. Informe o endereço/nome município/nome estado no campo “Digite um endereço”.</p>
    <div id="subsite-map" style="width:100%; height:500px">
    </div>

    <p>
        <span class="label <?php echo ($entity->isPropertyRequired($entity,"latitude") && $editEntity? 'required': '');?>">Latitude: </span>
        <span id="latitude" class="js-editable" data-disabled="true" data-edit="latitude" data-original-title="Latitude" data-emptytext="Ex.: 40.7143528"><?php echo $entity->latitude; ?></span>

        <span class="label <?php echo ($entity->isPropertyRequired($entity,"logintude") && $editEntity? 'required': '');?>">Longitude: </span>
        <span id="longitude" class="js-editable" data-disabled="true" data-edit="longitude" data-original-title="longitude" data-emptytext="Ex.: 41 24.2028"><?php echo $entity->longitude; ?></span>

        <span class="label <?php echo ($entity->isPropertyRequired($entity,"zoom_default") && $editEntity? 'required': '');?>">Zoom Padrão: </span>
        <span id="zoom_default" class="js-editable" data-disabled="true" data-edit="zoom_default" data-original-title="Zoom Padrão" data-emptytext="Zoom padrão do mapa"><?php echo $entity->zoom_default;?></span>
    </p>


    <p>
        <span class="label <?php echo ($entity->isPropertyRequired($entity,"zoom_min") && $editEntity? 'required': '');?>">Zoom Mínimo: </span>
        <span class="js-editable" data-edit="zoom_min" data-original-title="Zoom Mínimo" data-emptytext="Zoom mínimo do mapa"><?php echo $entity->zoom_min;?></span>
    </p>
    <p>
        <span class="label <?php echo ($entity->isPropertyRequired($entity,"zoom_maximo") && $editEntity? 'required': '');?>">Zoom Máximo: </span>
        <span class="js-editable" data-edit="zoom_max" data-original-title="Zoom Máximo" data-emptytext="Zoom máximo do mapa"><?php echo $entity->zoom_max;?></span>
    </p>

</div>