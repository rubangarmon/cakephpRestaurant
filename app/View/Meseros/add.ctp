<div class="container">
    <div class="row">
        <div class="col-md-6">
            <br/>
            <br/>
            <h2>
            <?php echo $this->Form->create('Mesero'); ?>
            </h2>
                <fieldset>
                    <legend><?php echo __('Crear nuevo mesero'); ?></legend>
                <?php
                    echo '<div class="form-group">';                    
                    echo $this->Form->input('dni', array('class' => 'form-control', 'label' => 'DNI'));
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo $this->Form->input('apellido', array('class' => 'form-control', 'label' => 'Apellidos'));
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo $this->Form->input('telefono', array('class' => 'form-control', 'label' => 'Teléfono'));
                    echo '</div>';
                ?>
                </fieldset>
            <?php echo $this->Form->end(array('label' => 'Crear Mesero', 'class' =>'btn btn-success')); ?>
            </div>
        </div>
</div>

