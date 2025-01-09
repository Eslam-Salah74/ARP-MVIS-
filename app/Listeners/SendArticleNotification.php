<?php
namespace App\Listeners;

use App\Models\Subscriber;
use App\Models\Subscription;
use App\Events\ArticlePublished;
use App\Mail\NewArticleNotification;
use Illuminate\Support\Facades\Mail;

class SendArticleNotification
{
    public function handle(ArticlePublished $event)
    {
        $subscribers = Subscription::all();
        
        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new NewArticleNotification($event->article));
        }
    }
}
