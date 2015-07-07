<?php
/**
 * @author Wahyu Gugus Nurcahyo <wahyugnc@gmail.com>
 * @link https://github.com/wahyugnc/yii2-pdfjs
 * @license http://www.opensource.org/licenses/bsd-license.php
 * @package https://packagist.org/packages/wahyugnc/yii2-pdfjs
 * @version 1.0.0
 */

namespace wahyugnc\pdfjs;

use Yii;
use yii\helpers\ArrayHelper;
use yii\base\Widget;
use yii\helpers\Html;


class ViewerPDF extends Widget
{

	public $url;

	public $options=[
      	'sideBarOpen'=>false,
      	'direction'=>'ltr',
      	'buttons'=>[
        	'sidebarToggle'=>true,
        	'viewFind'=>true,
        	'pageUp'=>true,
        	'pageDown'=>true,        
        	'zoomIn'=>true,
        	'zoomOut'=>true,
        	'scaleSelect'=>true,
        	'presentationMode'=>true,
        	'print'=>false,
        	'openFile'=>false,
        	'download'=>false,
        	'viewBookmark'=>false,
        ]
    ];


  	public function init()
  	{
    	if(!in_array($this->options['direction'],['rtl','ltr']))
      	$this->options['direction']='ltr';
      	parent::init();
  	}

    public function run()
    {
		Yii::setAlias('@pdfjs', '../../../../vendor/wahyugnc/yii2-pdfjs/assets');
	    $baseUrl=Yii::getAlias('@pdfjs');  

	    return $this->render('_viewer',array(
	      'baseUrl'=>$baseUrl,
	      'url'=>$this->url,
	      'options'=>$this->options,
	    ));
    }
}
