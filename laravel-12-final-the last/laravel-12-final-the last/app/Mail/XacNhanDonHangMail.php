<?php

namespace App\Mail;

use App\Models\ChiTietDonHang;
use App\Models\DonHang;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class XacNhanDonHangMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $donHang;
    protected $chiTiet;

    public function __construct($donHang, $chiTiet)
    {
        $this->donHang = $donHang;
        $this->chiTiet = $chiTiet;
    }

    public function build()
    {
        return $this->subject('Thông báo xác nhận đơn hàng')
                    ->view('mail.don_hang', [
                        'donHang'      => $this->donHang,
                        'chiTiet'      => $this->chiTiet
                    ]);
    }
}
