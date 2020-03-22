<?php $isModify = ($formData['method'] == 'PATCH'); ?>
<form action="<?= action($formData['action']) ?>" method="POST">
    {{ csrf_field() }}
    <?php if ($formData['method'] == 'PATCH') { ?>
        {{ method_field('PATCH') }}
    <?php } ?>
    <div class="form-group" hidden="hidden">
        <input name="adventure_id" value="<?= $adventure->id ?>">
    </div>

    <?php if ($isModify) { ?>
        <div class="form-group" hidden="hidden">
            <input type="text"name="event_id" id="event_id">
        </div>
        <div class="form-group" style="color: black;">
            <input type="text" readonly="readonly" name="eventNumber" id="eventNumber">
        </div>
    <?php } ?>

    <?php $idTextEvent = $isModify ? 'textEventModify' : 'textEvent' ?>
    <div class="form-group">
        <label for="<?= $idTextEvent ?>">Texte de l'événement</label>
        <textarea class="form-control" 
            name="<?= $idTextEvent ?>" 
            id="<?= $idTextEvent ?>" 
            rows="3" 
        ></textarea>
    </div>
    
    <?php $idTypeEvent = $isModify ? 'typeEventModify' : 'typeEvent' ?>
    <div class="form-group">
        <label for="<?= $idTypeEvent ?>">Type de l'événement</label>
        <select class="form-control" 
            id="<?= $idTypeEvent ?>" 
            name="<?= $idTypeEvent ?>" 
        >
            <option>standard</option>
            <option>end</option>
        </select>
    </div>
    <div class="form-group" style="text-align: right; color: black;">
        <input id="submit" name="submit" type="submit" value="<?= ($isModify) ? 'Modifier' : 'Créer'?>">
        <?php if ($isModify) { ?>
            <input id="delete" name="delete" type="submit" value="Supprimer">
        <?php } ?>
    </div>
</form>