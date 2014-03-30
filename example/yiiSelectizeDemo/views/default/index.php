<?php
/* @var $this DefaultController */

$this->breadcrumbs = array(
    $this->module->id,
);
?>

<h1>yii-selectize demo</h1>

<hr>

<?php echo CHtml::beginForm(); ?>


    <h2>single selection</h2>
    <?php
    $this->widget('ext.yii-selectize.YiiSelectize', array(
            'name'      => 'test2',
            'value'     => 'world', // the selected item
            'data'      => array(
                'hello' => 'Hello',
                'world' => 'World',
            ),
            'fullWidth' => false,
        )
    );
    ?>

    <hr>

    <h2>multiple selection</h2>
    <?php
    $this->widget('ext.yii-selectize.YiiSelectize', array(
            'name'           => 'test4',
            'data'           => array(
                'hello' => 'Hello',
                'world' => 'World',
                'yii'   => 'Yii',
            ),
            'selectedValues' => array('hello', 'world'),
            'htmlOptions'    => array(
                'style'    => 'width: 30%',
            ),
            'multiple'       => true,
        )
    );
    ?>

    <hr>

    <h2>using events callbacks</h2>

    <p>(see your browser's console)</p>

    <?php
    $this->widget('ext.yii-selectize.YiiSelectize', array(
            'name'      => 'test5',
            'value'     => 'world',
            'data'      => array(
                'hello' => 'Hello',
                'world' => 'World',
            ),
            'callbacks' => array(
                'onChange'    => 'myOnChangeTest',
                'onOptionAdd' => 'newTagAdded',
            ),
            'fullWidth' => false,
        )
    );
    ?>

    <hr>

    <h2>required</h2>

    <div class="row">
        <?php
        $this->widget('ext.yii-selectize.YiiSelectize', array(
                'name'      => 'test6',
                'data'      => array(
                    'hello' => 'Hello',
                    'world' => 'World',
                ),
                'htmlOptions' => array(
                    'required' => true,
                ),
                'fullWidth' => false,
            )
        );
        ?>
    </div>

    <div class="row buttons">
        <input type="submit">
    </div>

<?php echo CHtml::endForm(); ?>

<script>
    function myOnChangeTest(value) {
        console.log(value);
    }

    function newTagAdded(value, $item) {
        console.log('new item: ' + value);
        console.log($item);
    }
</script>