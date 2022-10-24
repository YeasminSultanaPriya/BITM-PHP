<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Termwind\ValueObjects\setElement;

class Service extends Model
{
    use HasFactory;
    private static $service, $serviceImage, $imageName, $imageDirectory, $imageUrl;

    public static function saveImage($request, $existImage){
        self::$serviceImage = $request->file('image');
        if (self::$serviceImage){
            if ($existImage){
                if (file_exists($existImage)){
                    unlink($existImage);
                }
            }
            self::$imageName = 'biztrox_'.time().'.'.self::$serviceImage->getClientOriginalExtension();
            self::$imageDirectory = 'admin/assets/images/upload-images/services/';
            self::$serviceImage->move(self::$imageDirectory,self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        }
        else{
            self::$imageUrl = $existImage;
        }
        return self::$imageUrl;
    }
    public static function createService($request){
        self::$service = new Service();
        self::$service->service_title = $request->service_title;
        self::$service->description = $request->description;
        self::$service->image = self::saveImage($request,self::$service->image);
        self::$service->slug = str_replace(' ','-', $request->service_title);
        self::$service->status = $request->status;
        self::$service->save();

    }
    public static function updateService($request, $id = null){
        self::$service = Service::find($id);
        self::$service->service_title = $request->service_title;
        self::$service->description = $request->description;
        self::$service->image = self::saveImage($request,self::$service->image);
        self::$service->slug = str_replace(' ','-', $request->service_title);
        self::$service->status = $request->status;
        self::$service->save();
    }
}
