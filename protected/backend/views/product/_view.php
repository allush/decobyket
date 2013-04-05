<?php
/* @var $this ProductController */
/* @var $data Product */

if ($index == 0) {
    ?>
    <tr>
        <th>Изображение</th>
        <th>Название</th>
        <th>Стоимость</th>
        <th>Описание</th>
        <th>В наличии</th>
        <th>Показан</th>
    </tr>
<?php
}
?>

<tr>
    <td class="span2">

        <?php
        $mainPicture = $data->mainPicture();
        if (strlen($mainPicture) > 0)
            echo CHtml::image($data->mainPicture(), '', array('style' => 'width: 100px;'));
        else
            echo CHtml::link('<small>Добавить фото</small>', array('view', 'id' => $data->id_product))
        ?>

    </td>

    <td class="span2">
        <?php echo CHtml::link($data->name, array('view', 'id' => $data->id_product)); ?>
    </td>

    <td class="span2">
        <?php echo CHtml::encode($data->cost); ?>
    </td>

    <td class="span2">
        <?php echo CHtml::decode($data->description); ?>
    </td>

    <td class="span2">
        <?php echo CHtml::encode($data->existence); ?>
    </td>

    <td class="span2">
        <?php echo CHtml::encode($data->visible == 1 ? 'Да' : 'Нет'); ?>
    </td>
</tr>