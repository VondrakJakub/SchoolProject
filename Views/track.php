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
            <button class="modal_btn_two" data-modal-id="edit_modal_' .$track['id'] . '">Edit</button>
            <p class="modal_p">' .nl2br($track['description']). '</p>
        </div>
    </div>
    
    <div id="edit_modal_' .$track['id'] .'" class="desc_modal_edit">
        <div class="modal-content-edit">
            <div class="close">Close</div>
            <form class="edit_button" action="/Project/edit" method="POST">
            <textarea class="text_area_modal" name="description" id="description" cols="30" rows="10">' .$track['description']. '</textarea>
            <input name="track_id" type="hidden" value="' . $track['id'] . '">
            <button type="submit" class="modal_btn">Save</button>
        </form>
        </div>
    </div>   
';