<div class="container">
    <div>
        <h3>Increment and Decrement Section</h1>
        <button wire:click="increment" >+</button>
        <h1>{{ $counter }}</h1>
        <button wire:click="decrement" >-</button>
        </br> </br>
        <button wire:click="show" >View Text</button>
        <button wire:click="hide" >View Other</button>
        <h1> {{ $myText }}</h1>
    </div>
    <div>
        <h3>Comment Section</h1>
        <div>
            <input type="text" class="form-control" wire:model.lazy="commentText">
            <br>
            <button class="btn btn-success" wire:click="commentAdd" >Post</button>
        </div>
        
        @foreach($comments as $comment)
          <p>{{ $comment['body'] }}</p>
        @endforeach

        

    </div>

    <div>
        <h3>Submit Section</h1>
        
        @foreach($comments as $comment)
          <p>{{ $comment['body'] }}</p>
        @endforeach
    </div>

    <form wire:submit.prevent="save">
        <input type="text" class="form-control" wire:model.lazy="userName">
        <input type="text" class="form-control" wire:model.lazy="userPassword"> 

        <button type="submit" class="btn btn-success">Post</button>
    </form>


</div>
