<?php
class AdminController extends BaseController{
  
  public $layout="template.default";

  public function index(){
    $this->layout->content=View::make('admin.index');
  }
}
