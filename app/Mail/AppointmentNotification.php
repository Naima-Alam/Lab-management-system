<?php

namespace App\Mail;

use App\Models\Test;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppointmentNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $book;
    public function __construct($appointment)
    {
        //
         $this->book=$appointment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $this->book = Test::where('id', $this->appointment['test_id'])->first();
        return $this->view('frontend.layouts.email')->with(['appointmentData'=>$this->book]);
        // return $this->view('frontend.layouts.email', [
        //     'appointmentData' => $this->book
        // ]);
    }
}
