<?php

namespace Strategy;

class DocumentSave extends BaseSave
{
    public function save(): void
    {
        if (file_exists('tmp/' . $this->filePath)) {
            copy('tmp/' . $this->filePath, 'documents/' . $this->filePath);
        }
    }
}