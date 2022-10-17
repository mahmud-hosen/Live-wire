<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count;
    public $text;

    public $userName;
    public $userPassword;
    public $userAge;
    public $userInfo = [];

    public $commentText;
    public $comments = [
        [
            'body' => 'I am mahud',
            'time' => '1 min ago',

        ]
    ];

    public function increment()
    {
        $this->count++;
    }
    
    public function decrement()
    {
        $this->count--;
    }


    public function show()
    {
        $this->text = "Hi, I am mahmud.";
    }
    public function hide()
    {
        $this->text = "Hi, I am jamal.";
    }

    public function commentAdd()
    {
        $text = [
            'body' => $this->commentText,
            'time' =>'2 min'
        ];
        array_push($this->comments, $text);


    }

  

    public function save($userAge)
    {
        $userInfo = [
            'userName' => $this->userName,
            'userPassword' => $this->userPassword,
            'userAge' => $this->userAge,

        ];

        dd($userInfo);

    }

    public function render()
    {
        return view('livewire.counter',
        [
            'counter'=>$this->count,
            'myText'=>$this->text,

        ]);
    }
}
