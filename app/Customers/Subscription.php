<?php

namespace App\Customers;

use Illuminate\Database\Eloquent\Model;
use App\Cars\CarModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Subscription extends Model
{
    protected $table = 'subscription';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'id_car_model'];

    public $timestamps = true;

    public function model() {
        return $this->belongsTo(CarModel::class, 'id_car_model', 'id_car_model');
    }

    public static function filterValidFields($fields) {
        $validFields = [
            'name',
            'email',
            'id_car_model'
        ];

        $filteredFieldsAndData = array_intersect_key($fields, array_flip($validFields));

        return $filteredFieldsAndData;
    }

    public function sendEmail() {
        $email = $this->email;
        $name = $this->name;
        $model = $this->model->name;

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->isHTML();
        $mail->Username = 'ccarsale424@gmail.com';
        $mail->Password = 'cscarsale';
        $mail->SetFrom('no-reply@cscarsale.com');
        $mail->Subject = 'The car you were looking for just became available';
        $mail->Body = "Hi $name,\nThis is to remind you that the car model you were looking for $model has just come to our car sale.";
        $mail->AddAddress($email);
        $mail->Send();
    }

    public static function sendEmails($carListing) {
        $carModelId = $carListing->id_car_model;

        $subscriptions = Subscription::where('id_car_model', $carModelId)->get();

        foreach ($subscriptions as $subscription) {
            $subscription->sendEmail();
        }
    }
}
