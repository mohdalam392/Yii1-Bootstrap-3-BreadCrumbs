<?php

/**
 * @author:Mohd Alam
 * @email : mohdalam392@gmail.com,mohdalam392@yahoo.com
 * @github: mohdalam392
 */
class M_A_Breadcrumbs extends CWidget {

    public $crumbs = array();
    public $delimiter = ' / ';
    
    /** init() method is called automatically before all others **/
    public function init() {
        $css = Yii::app()->request->baseUrl.'/protected/extension/M_A_Breadcrumbs/assets/css/bootstrap.min.css';
        $js = Yii::app()->request->baseUrl.'/protected/extension/M_A_Breadcrumbs/assets/js/bootstrap.min.js';
       
        Yii::app()->getClientScript()->registerCssFile($css);
        Yii::app()->getClientScript()->registerScriptFile($js);
    }

    public function run() {
        foreach($this->crumbs as $key => $crumb){
            if(isset($crumb['url'])) {
                if(@$crumb['active']){
                    $this->crumbs[$key] = "<li class='active'>".CHtml::link($crumb['name'], $crumb['url'])."</li>";
                }else{
                    $this->crumbs[$key] = "<li>".CHtml::link($crumb['name'], $crumb['url'])."</li>";
                }
                
            } else{
                if(@$crumb['active']){
                    $this->crumbs[$key] = "<li class='active'>".$crumb['name']."</li>";
                }else{
                    $this->crumbs[$key] = "<li>".$crumb['name']."</li>";
                }
            }    
        }

        $crumbs = implode("&nbsp;&nbsp;".$this->delimiter."&nbsp;&nbsp;", $this->crumbs);
        $this->render('breadcrumb', array('crumbs' => $crumbs));
    }

}
?>