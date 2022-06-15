<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp\Bootcamp;
use App\Models\Order;
use App\Models\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans;

use http\Env;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
// Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('SERVER_KEY_MIDTRANS');
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $bootcamp = Bootcamp::all();
        $user = Auth::user();

//        dd($bootcamp);

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $bootcamp->first()->price ?? '',
            ),
            'item_details' => array(
                [
                    'id' => $bootcamp->first()->id ?? '',
                    'price' => $bootcamp->first()->price ?? '',
                    'quantity' => 1,
                    'name' => $bootcamp->first()->title ?? '',
                ]
            ),
            'customer_details' => array(
                'first_name' => $user->name ?? '',
                'email' => $user->email ?? '',
                'phone' => '081234567890' ?? '',
            ),
        );

//        dd($params);
        $snapToken = \Midtrans\Snap::getSnapToken($params);
            return view('pages.payment.index', compact('snapToken', 'bootcamp', 'user'));

//        // Set your Merchant Server Key
//        \Midtrans\Config::$serverKey = env('SERVER_KEY_MIDTRANS');
//// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
//        \Midtrans\Config::$isProduction = false;
//// Set sanitization on (default)
//        \Midtrans\Config::$isSanitized = true;
//// Set 3DS transaction for credit card to true
//        \Midtrans\Config::$is3ds = true;
//
//        $params = array(
//            'transaction_details' => array(
//                'order_id' => rand(),
//                'gross_amount' => 10000,
//            ),
//            'customer_details' => array(
//                'first_name' => 'budi',
//                'last_name' => 'pratama',
//                'email' => 'budi.pra@example.com',
//                'phone' => '08111222333',
//            ),
//        );
//
//        $snapToken = \Midtrans\Snap::getSnapToken($params);
    }

    public function payment_post(Request $request){

        $bootcamp = Bootcamp::all();
        $user = Auth::user();

        $json = json_decode($request->get('json'));
        $order = new Order();
        $order->status = $json->transaction_status;
        $order->user_id = $user->id;
        $order->bootcamp_id = $bootcamp->first()->id;
        $order->transaction_id = $json->transaction_id;
        $order->order_id = $json->order_id;
        $order->gross_amount = $json->gross_amount;
        $order->payment_type = $json->payment_type;
//        $order->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $order->payment_code = $json->payment_code ?? '';
        $order->pdf_url = $json->pdf_url ?? '';
//        $order->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;
        $order->save();
//            ? redirect(url('/'))->with('alert-success', 'Order berhasil dibuat') : redirect(url('/'))->with('alert-failed', 'Terjadi kesalahan');
        return redirect(url('payment'))->with('alert-success', 'Order berhasil dibuat');
    }
}
