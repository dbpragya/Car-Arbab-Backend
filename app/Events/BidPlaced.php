<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BidPlaced implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */

    // public $message;
    // public $channel;
    // public $event;


    public $message;
    public $bidPrice;
    public $carId;
    public $userId;
    public $nextBidPrice;
    public $noOfBids;
    
    public function __construct($message,$bidPrice, $carId, $userId,$nextBidPrice,$noOfBids)
    {
        $this->message = $message;
        $this->bidPrice = $bidPrice;
        $this->carId = $carId;
        $this->userId = $userId;
        $this->nextBidPrice = $nextBidPrice;
        $this->noOfBids = $noOfBids;

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    // public function broadcastOn()
    // {
    //     return [$this->channel];
    // }

    // public function broadcastAs()
    // {
    //     return $this->event;;
    // }

    public function broadcastOn()
    {
        return new Channel('bids');
    }

    public function broadcastAs()
    {
        return 'bid.placed';
    }


}
