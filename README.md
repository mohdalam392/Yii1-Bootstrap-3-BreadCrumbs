# Yii1-Bootstrap-3-BreadCrumbs
Yii1 Bootstrap 3 BreadCrumbs

Put This Code In Any View File

<?php 
    $this->widget(
    
            'ext.M_A_Breadcrumbs.M_A_Breadcrumbs',
            array(
                'crumbs' => array(
                    array('name' => 'Menu1', 'url' => array('site/index'),'active'=>true),
                    array('name' => 'Menu2'),
                    array('name' => 'Menu3'),
                    array('name' => 'Menu4'),
                    array('name' => 'Menu5'),
                    array('name' => 'Menu6'),
                ),
                'delimiter' => '/',  // use any html entity
            )
    );
?>
