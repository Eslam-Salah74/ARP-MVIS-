<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewArticleNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $article;

    public function __construct($article)
    {
        $this->article = $article;
    }

    public function build()
    {
        return $this->subject('New Article Published')
                    ->view('emails.new_article_notification')
                    ->with('article', $this->article);
    }
}

