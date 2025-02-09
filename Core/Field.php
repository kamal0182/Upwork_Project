<?php 
namespace app\Core;
class Field 
{
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';
    public const TYPE_TEXT = 'text';
    public string $type = self::TYPE_TEXT;
    public string $attribute;
    public  $model ;
    public function __construct($model,$attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }
    public function __toString()
    {
        $this->model->getFirstError($this->attribute);
        return sprintf('
        <div class="form-group">
        <label>%s</label>
        <input type="%s" name="%s" value="%s" class="form-control %s"
        </div>
        <div class="">
        %s
        </div class="invalid-feedback">
        ',
        $this->attribute,
        $this->type,
        $this->attribute,
        $this->model->getAttribute($this->attribute),
        $this->model->hasError($this->attribute) ? 'is-invalid': '',
        $this->model->getFirstError($this->attribute)
    );
    }
    public function typePassword()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }
}