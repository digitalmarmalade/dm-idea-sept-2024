<?php

namespace App\Http\Resources\DigitalMarmalade\Model;

use Illuminate\Database\Eloquent\Model;
use Exception;

trait ModelAccessorTrait
{
    protected $model;
    
    public function getModel()
    {
        return $this->model;
    }
    
    public function setModel($model)
    {
        if ($model instanceof Model) {
            $this->model = $model;
            return true;
        } elseif (is_numeric($model) && $this->modelClass !== null) {
            $modelClass = new $this->modelClass();
            $this->model = $modelClass->find($model);
            
            if ($this->model !== null) {
                return true;
            }
        }
        
        $this->throwModelNotFound();
    }
    
    private function throwModelNotFound()
    {
        throw new Exception('Could not find model for ' . static::class);
    }
    
    public function __get($name) {
        return $this->model->$name;
    }
    
    public function __call($name, $parameters = []) {
        return call_user_func_array([$this->model, $name], $parameters);
    }
    
}
