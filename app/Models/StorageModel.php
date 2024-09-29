<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class StorageModel extends Model
{
    private string $name;

    public function __construct(private $envelope, $path, $disk)
    {   
        $this->name = $this->envelope->hashName();
        $this->envelope->storeAs(
                    $path, $this->name, $disk
                );
    }

    public function getExtension()
    {
        return $this->envelope->extension();
    }

    public function getName()
    {
        return $this->name;
    }

    public function deleteFile($filename, $path, $disk)
    {
        Storage::disk($disk)->delete($path.$filename);
    }    
}
