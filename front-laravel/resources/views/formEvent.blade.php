<?php $isModify = ($formData['method'] == 'PATCH'); ?>
<form action="<?= action($formData['action']) ?>" method="<?= $formData['method'] ?>">
    {{ csrf_field() }}
    <div class="form-group" hidden="hidden">
        <input name="adventure_id" value="<?= $adventure->id ?>">
    </div>

    <?php if ($isModify) { ?>
        <div class="form-group" hidden="hidden">
            <input name="event_id">
        </div>
        <div class="form-group" readonly="readonly">
            <input name="eventNumber">
        </div>
    <?php } ?>

    <?php $idTextEvent = $isModify ? 'textEventModify' : 'textEvent' ?>
    <div class="form-group">
        <label for="<?= $idTextEvent ?>">Texte de l'événement</label>
        <textarea class="form-control" 
            name="<?= $idTextEvent ?>" 
            id="<?= $idTextEvent ?>" 
            rows="3" 
            <?= ($isModify) ? 'readonly="readonly"' : ''?>
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
        <input type="submit" value="<?= ($isModify) ? 'Modifier' : 'Créer'?>">
    </div>
</form>