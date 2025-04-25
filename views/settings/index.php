<?php get_header() ?>
<div class="card">
    <div class="card-header d-flex flex-grow-1 align-items-center">
        <p class="h4 m-0"><?= __('default.label.settings') ?></p>
    </div>
    <div class="card-body">
        <?php if ($success_msg) : ?>
        <div class="alert alert-success"><?= $success_msg ?></div>
        <?php endif ?>
        <?php if ($error_msg) : ?>
        <div class="alert alert-danger"><?= $error_msg ?></div>
        <?php endif ?>
        <form action="" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <?php 
            foreach($fields as $key => $field): 
                $label = $field;
                $type  = "text";
                $attr = [
                    'class'=>"form-control"
                ];
                if(is_array($field))
                {
                    $field_data = $field;
                    $field = $key;
                    $label = $field_data['label'];
                    if(isset($field_data['type']))
                    {
                        $type  = $field_data['type'];
                    }

                    if(isset($field_data['attr']))
                    {
                        $attr = array_merge($attr, $field_data['attr']);
                    }
                }
                $label = _ucwords($label);
                $fieldname = $field;
                $attr = array_merge($attr, ["placeholder"=>$label,"value"=>$old[$field]??$data[$field]]);
                if(isset($attr['multiple']))
                {
                    $fieldname .= "[]";
                }
            ?>
            <div class="form-group mb-3">
                <label class="mb-2"><?=$label?></label>
                <?= \Core\Form::input($type, $fieldname, $attr) ?>
                <?php if($label == 'Code Kecamatan Asal'){
                    echo '<a href="https://github.com/andrewsoebagoes/Code-Daerah-RajaOngkir/blob/master/db_rajaongkir.sql" target="_blank">Lihat Kode Kecamatan</a>
                    ';
                } ?>
            </div>
            <?php endforeach ?>
            <div class="form-group mt-3">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
<?php get_footer() ?>
