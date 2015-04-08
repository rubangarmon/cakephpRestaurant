<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php echo $this->Form->create('Platillo'); ?>
                <fieldset>
                    <legend><?php echo __('Edit Platillo'); ?></legend>
                <?php
                    echo $this->Form->input('id');

                    echo '<div class="form-group">';
                        echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'DNI'));
                    echo '</div>';

                    echo '<div class="form-group">';
                        echo $this->Form->input('descripcion', array('class' => 'form-control', 'label' => 'DNI'));
                    echo '</div>';

                    echo '<div class="form-group">';
                        echo $this->Form->input('precio', array('class' => 'form-control', 'label' => 'DNI'));
                    echo '</div>';

                    echo '<div class="form-group">';
                        echo $this->Form->input('categoria_platillo_id', array('class' => 'form-control', 'label' => 'DNI'));
                    echo '</div>';

                    echo '<div class="form-group">';                
                        echo $this->Form->input('Cocinero', array('class' => 'form-control', 'label' => 'DNI'));
                    echo '</div>';
                
                ?>
                </fieldset>
            <br/>
            <?php echo $this->Form->end(array('label' => 'Editar Mesero', 'class' =>'btn btn-success')); ?>
        </div>
    </div>
</div>
