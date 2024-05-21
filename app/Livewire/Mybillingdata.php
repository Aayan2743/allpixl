<?php

namespace App\Livewire;

use App\Models\plandetails;
use Livewire\Component;
use App\Models\paymentdata;
// use App\Models\plandetails;
use Razorpay\Api\Api;

class Mybillingdata extends Component
{

    public $razorpayOrderId;
    public $paymentId;
    public $signature;
    public $get_plan_arr;
    public $amount;

    protected $listeners = ['handleCallback'];


    public function selectplan($pid){
        // dd($pid);


        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $orderData = [
            'receipt'         => 'rcptid_11',
            'amount'          => 50000, // amount in the smallest currency unit
            'currency'        => 'INR',
            'payment_capture' => 1 // auto capture
        ];

        $razorpayOrder = $api->order->create($orderData);

        $orderId = $razorpayOrder['id'];

        $data = [
            "key"               => env('RAZORPAY_KEY'),
            "amount"            => $orderData['amount'],
            "name"              => "Acme Corp",
            "description"       => "Test Transaction",
            "image"             => "https://example.com/your_logo",
            "prefill"           => [
                "name"              => "Gaurav Kumar",
                "email"             => "gaurav.kumar@example.com",
                "contact"           => "9999999999",
            ],
            "notes"             => [
                "address"           => "Razorpay Corporate Office",
            ],
            "theme"             => [
                "color"             => "#F37254"
            ],
            "order_id"          => $orderId,
        ];



        // dd($data);
    // return view('payment-page', compact('data'));
    return view('settings', compact('data'));



    }

    public function initiatePayment($pid)
    {
     
        // dd($pid);

        $getplandetails=plandetails::where('planid',$pid)->get();

        // dd($getplandetails[0]->planid);

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $orderData = [
            'receipt'         => 'rcptid_11',
            'amount'          => $getplandetails[0]->amount, // amount in the smallest currency unit
            'currency'        => 'INR',
            'payment_capture' => 1 // auto capture
        ];

        $razorpayOrder = $api->order->create($orderData);

        $this->razorpayOrderId = $razorpayOrder['id'];


        // $this->emit('payment:initiated', [
        //     'orderId' => $this->razorpayOrderId,
        //     'amount' =>$getplandetails[0]->amount*100,
        //     'key' => env('RAZORPAY_KEY'),
        // ]);
   

         $this->emit('payment:initiated', [
            'orderId' => $this->razorpayOrderId,
            'amount' => $getplandetails[0]->amount*100,
            'key' => env('RAZORPAY_KEY'),
        ]);



    }

    public function handleCallback($response)
    {
        $this->paymentId = $response['razorpay_payment_id'];
        $this->signature = $response['razorpay_signature'];

        $signatureStatus = $this->verifySignature($response);
        // dd($signatureStatus);
        if ($signatureStatus === true) {
            session()->flash('success', 'Payment successful');
        } else {
            session()->flash('error', 'Payment failed');
        }
    }

    private function verifySignature($attributes)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        try {
            $api->utility->verifyPaymentSignature([
                'razorpay_signature' => $attributes['razorpay_signature'],
                'razorpay_payment_id' => $attributes['razorpay_payment_id'],
                'razorpay_order_id' => $attributes['razorpay_order_id'],
            ]);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    


    public function render()
    {

        $getmy_plan_details=paymentdata::where('companyid',session()->get('cid'))->get();
        $get_plan=plandetails::get();
        $this->get_plan_arr=plandetails::get();

        return view('livewire.mybillingdata',compact('getmy_plan_details','get_plan'));
    }
}
