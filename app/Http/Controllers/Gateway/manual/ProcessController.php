<?php
namespace App\Http\Controllers\Gateway\manual;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DepositController;
use App\Models\Admin;
use App\Notifications\DepositNotification;

class ProcessController extends Controller
{
    public static function process($request, $amount , $deposit)
    {
        $validation = [];

        $data = $request->validate($validation);

        foreach ($data as $key => $upload) {

            if ($request->hasFile($key)) {

                $filename = uploadImage($upload, filePath('manual_payment'));

                $data[$key] = ['file' => $filename, 'type' => 'file'];
            }
        }

        $deposit->payment_proof = $data;

        $deposit->payment_type = 0;

        $deposit->payment_status = 2;

        $deposit->save();


        $admin = Admin::first();

        $admin->notify(new DepositNotification($deposit->user, $deposit));

    }
}
