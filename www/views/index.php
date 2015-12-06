<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 06.12.2015
 * Time: 19:41
 */
foreach ($items as $item):?>
    <h1><?php echo $item->id;?></h1>
    <div><?php echo $item->name;?></div>
<?php endforeach;?>