<?php

namespace App\Http\Livewire\Home;

use App\Models\EmailSubscription;
use App\Models\Enquiry;
use Livewire\Component;

class HomeComponent extends Component
{

    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $country;
    public $message;

    public $subscribed_email;

    public $errorMessage = '';

    protected $rules = [
        'first_name' => 'required', 
        'last_name' => 'required',
        'email' => 'required|email', 
        'phone' => 'required|digits_between:10,15',  
        'country' => 'required',
        'message' => 'required',
    ];

    public function render()
    {
        return view('livewire.home.home');
    }

    
    public function store()
    {
        $data = $this->validate(); 
        Enquiry::create($data);
        
        $this->reset([
            'first_name',
            'last_name',
            'email',
            'phone',
            'country',
            'message',
        ]);

        return redirect()->route('confirmation', ['type' => 1]);
        // return redirect()->back()->with('status', 'Thank you for reaching out! Your inquiry has been received and we\'ll get back to you as soon as possible');
    }

    public function subscribeUser()
    {
        $new_subscription = new EmailSubscription();
        $new_subscription->email = $this->subscribed_email;
        $new_subscription->save();
        $this->dispatchBrowserEvent('contentChanged');
        // if($this->subscribed_email != null){

        //     if(!EmailSubscription::where('email', $this->subscribed_email)){
        //         $new_subscription = new EmailSubscription();
        //         $new_subscription->email = $this->subscribed_email;
        //         $new_subscription->save();
        //     }
         
        // }
        return redirect()->route('confirmation', ['type' => 0]);
        // return redirect()->back()->with('subscription_status', 'Congratulations! You\'re now part of our community. Expect exciting updates and exclusive offers delivered straight to your inbox. Welcome aboard!');
    }
}
