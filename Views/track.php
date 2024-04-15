<?php

echo '
<div class="card">
    <div class="card_text">
        <p class="card__p">' . $track["map"] . '</p>
        <p class="card__p">' . $track["location"] . '</p>
        <p class="card__p">' . $track["name"] . '</p>
    </div>

    <div class="actions">
        <button class="modal_btn" data-modal-id="modal_' .  $track['id'] . '">Description</button>
        <form class="delete_button" action="/Project/delete" method="post">
            <input name="track_id" type="hidden" value="' . $track['id'] . '">
            <button type="submit" class="delete">Delete</button>
        </form>
    </div>
</div>
            

    <div id="modal_' .$track['id'] .'" class="desc_modal">
        <div class="modal-content">
            <div class="close">Close</div>
            <p>' .$track['description']. '</p>
        </div>
    </div>      
';