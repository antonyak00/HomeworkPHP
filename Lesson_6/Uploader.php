<?php

class Uploader{
    public $field;
    protected bool $uploaded = false;

    public function __construct($fieldName)
    {
        $this->field = $fieldName;
    }

    public function isUploaded(): object
    {
        if(0 == $_FILES[$this->field]['error']){
            $this->uploaded = true;
        }
        return $this;
    }

    public function upload(): bool
    {
        if ($this->uploaded) {
            $name = $_FILES[$this->field]['name'];
            move_uploaded_file($_FILES[$this->field]['tmp_name'], __DIR__ . '/Lesson_6' . $name);
            return true;
        }
        return false;
    }
}