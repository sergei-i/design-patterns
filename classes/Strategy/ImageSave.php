<?php

namespace Strategy;

class ImageSave extends BaseSave
{
    public function save(): void
    {
        if (file_exists('tmp/' . $this->filePath)) {
            copy('tmp/' . $this->filePath, 'images/' . $this->filePath);
        }
    }
}